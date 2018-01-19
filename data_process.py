import glob
import os
import codecs
import json
outputfile=codecs.open("tinder_delhi"+".txt",'r',encoding="utf-8")
f=outputfile.read()
outputfile.close()
f=json.loads(f)
print len(f)