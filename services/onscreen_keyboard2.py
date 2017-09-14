f1=open('t1.txt','r')

d1=f1.readlines()

print d1
for i in range(0,len(d1)):
    d1[i]=d1[i].replace('\n','')

print "','".join(d1)



