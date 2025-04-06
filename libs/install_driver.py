import shutil
import os.path

PHP_PATH = "C:/xampp/php/"
EXT_PATH = PHP_PATH + "ext/"
DRIVER_PATH = "mongo_driver/php_mongodb.dll"
if os.path.isfile(DRIVER_PATH):
    print("OK")
else:
    DRIVER_PATH = "libs/" + DRIVER_PATH
    if os.path.isfile(DRIVER_PATH):
        print("OK")
    else:
        print("Couldnt find the driver")
        print("It must be located in libs/mongo_driver/php_mongodb.dll")
        exit(1)
PHP_INI = PHP_PATH + "php.ini"

if __name__ == "__main__":

    print(f"Copying driver {DRIVER_PATH} into {EXT_PATH}")
    res = shutil.copy(DRIVER_PATH, EXT_PATH)
    if res == EXT_PATH + DRIVER_PATH.split("/")[-1]:
        print(f"Succesfully copied {DRIVER_PATH} into {EXT_PATH}")
    else:
        print(f"Couldnt copy {DRIVER_PATH} into {EXT_PATH}")

    print(f"Creating backup for {PHP_INI}")
    if os.path.isfile(PHP_INI + ".backup"):
        print(f"Backup already exists as {PHP_INI + '.backup'}")
    else:
        print(f"Backing up {PHP_PATH}php.ini")
        res = shutil.copyfile(PHP_INI, PHP_INI + ".backup")

        if res == PHP_INI + ".backup":
            print(f"Succesfully created a backup for {PHP_INI} named {PHP_INI + '.backup'}")
        else:
            print(f"Coulnt create a backup for {PHP_INI}")
            print(f"Consider creating one yourself and name {PHP_INI + '.backup'} in order to avoid this message reappearing.")

    print(f"Updating {PHP_INI}")
    # Open php.ini
    # lines = None
    line_index = -1
    found_extensions = False
    if os.path.isfile(PHP_INI):
        print(f"{PHP_INI} does exist")
    else:
        print("what")

    with open(PHP_INI, "r", encoding="utf-8") as php_ini:
        lines = php_ini.readlines()

    new_ext = f"extension={DRIVER_PATH.split('/')[-1]}\n"

    for i, line in enumerate(lines):
        if line.startswith("extension=mysqli"):
            found_extensions = True
            line_index = i + 1
            break


    should_write_file = True
    if found_extensions and lines[line_index] == new_ext:
        print(f"Extension already exists in {PHP_INI}")
        should_write_file = False
        exit(0)

    if line_index > 0 and should_write_file and found_extensions:
        lines.insert(line_index, new_ext)
        with open(PHP_INI, "w") as php_ini:
            php_ini.writelines(lines)

        print(f"Extension {new_ext.split("=")[-1].strip()} added in {PHP_INI}")

    else:
        print(f"Could not find 'extension=mysqli' in {PHP_INI}")
        print(f"Nothing was added, consider doing it yourself adding this line to {PHP_INI}")
        print(f"    {new_ext}")

