import glob
import os
import codecs
import json
profile_list=[]
id_list=[]
base_url='tinder_delhi'
for files in glob.glob(base_url+"/*"):
	fi=codecs.open(files,'r',encoding="utf-8")
	f=fi.read()
	fi.close()
	print files
	jsosn=json.loads(f)
	for i in jsosn['results']:
		if i['_id'] not in id_list:
			id_list.append(i['_id'])
			profile_list.append(i)
outputfile=codecs.open(base_url+".txt",'w',encoding="utf-8")
#print profile_list
json.dump(profile_list,outputfile)
outputfile.close()