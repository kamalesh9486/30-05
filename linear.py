def linear(data,target):
    for i in range(0,len(data)):
        if data[i]==target:
            return i
        return-1
arr=[]
size=int((input("enter the size of an array:"))
         for i in range(size):
         print("enter element:",i+1)
         inp=int(input())
         arr append (inp)
         target=int("enter the element to search")
         arr.sort()
         result=linear(arr,target)
         if result !=-1
         print("the element is found at index:",result)
         else:
             print("the element is not found")
