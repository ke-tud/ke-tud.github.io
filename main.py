# This is a sample Python script.

# Press Umschalt+F10 to execute it or replace it with your code.
# Press Double Shift to search everywhere for classes, files, tool windows, actions, and settings.
import os
import sys
import re
import mimetypes

def print_hi(name):
    # Use a breakpoint in the code line below to debug your script.
    print(f'Hi, {name}')  # Press Strg+F8 to toggle the breakpoint.


# Press the green button in the gutter to run the script.
if __name__ == '__main__':
    print_hi('PyCharm')
    #walk_dir='''C:\Downloads\www.ke\smallversion\www.ke.tu-darmstadt.de'''
    walk_dir='''.'''
    print('walk_dir (absolute) = ' + os.path.abspath(walk_dir))


    sr_pairs=[
        ("https://www.ke.tu-darmstadt.de/","/"),
        ("https://www.informatik.ke.tu-darmstadt.de/","/"),
        ("http://www.ke.tu-darmstadt.de/","/"),
        ("http://www.ke.informatik.tu-darmstadt.de/","/")]

    for root, subdirs, files in os.walk(walk_dir):
        try:
            print('--\nroot = ' + root)
        except Exception:
            pass

        for subdir in subdirs:
            try:
                print('\t- subdirectory ' + subdir)
            except Exception:
                pass

        for filename in files:
            if filename == "main.py":
                continue
            file_path = os.path.join(root, filename)

            try:
                print('\t- file %s (full path: %s)' % (filename, file_path))
            except Exception:
                pass

            #do here search replace
#            if mimetypes.guess_type(file_path)[0] == 'text/plain':
            if True:
                # file is plaintext
                with open(file_path, 'r', encoding="utf8") as f:
                    try:
                        f_content = f.read()
                    except UnicodeDecodeError:
                        print("           cannot read as text. probably a binary file. skip")
                        continue
                for old,new in sr_pairs:
                    # for line in f:
                    #     try:
                    #         if re.search("www.ke.tu-darmstadt.de", line):
                    #             print(line)
                    #     except Exception:
                    #         pass
                    for finding in re.findall('.........' + old + '.......', f_content):
                            print(finding)
                    f_content = f_content.replace(old, new)

                # Write the file out again
                with open(file_path, 'w', encoding="utf8") as file:
                    file.write(f_content)
                    print("     written modified file")
                #create redirect files for html files
                if file_path.endswith(".html") and not file_path.endswith("index.html"):
                    new_filename=filename.replace(".html","")
                    new_file_path = os.path.join(root, new_filename)
                    try:
                        print("     try to create ",new_file_path," as a redirect")
                    except:
                        pass
                    if not os.path.exists(new_file_path):
                        try:
                            with open(new_file_path, 'w', encoding="utf8") as file:
                                new_content='''<!DOCTYPE html>
<html>
  <head><meta http-equiv="refresh" content="0; url=%s" />
  </head>
<p><a href="%s">Redirect</a></p>
</html>'''%(filename,filename)
                                #print(new_content)
                                file.write(new_content)
                        except Exception:
                            print("         did not work. probably already there")
                    else:
                        print("         did not work. file already exists")
                        print("         try to create as index.html")
                    #new_filename=filename.replace(".html","")
                    new_file_path = os.path.join(new_file_path, 'index.html')
                    try:
                        print("         try to create ",new_file_path," as a redirect")
                    except:
                        pass
                    if not os.path.exists(new_file_path):
                        try:
                            with open(new_file_path, 'w', encoding="utf8") as file:
                                new_content='''<meta http-equiv="refresh" content="0; url=%s" /><p><a href="%s">Redirect</a></p>'''%('../'+filename,'../'+filename)
                                #print(new_content)
                                file.write(new_content)
                        except Exception:
                            print("             did not work. probably already there")
                    else:
                        print("         did not work. file already exists")

# See PyCharm help at https://www.jetbrains.com/help/pycharm/
