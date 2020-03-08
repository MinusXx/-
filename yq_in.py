import pandas as pd
import numpy as np

if __name__ == '__main__':
    In = pd.read_table('yq_in.txt', header=None)
    print (In)
    Group = In.groupby(0).mean()#
    Pro = Group.index
    Pro = np.array(Pro)
    Out = pd.DataFrame(columns=[0, 1])
    for pro in Pro:
        #pro_index = Out.shape[0]
        Out = pd.concat([Out, pd.Series([pro])])#将索引值在Pro中的组与空表拼接起来
        City = pd.Series(In.loc[In[0]==pro][1])#当在Pro中进行查找得到的相同省份的城市放到一个City组
        City_number = pd.Series(In.loc[In[0]==pro][2])#并把对应城市的人数也放在一个City_Num组中
        pro_tmp = pd.concat([City, City_number], axis=1)#将City组与City_Num组使用contac方法拼接在一起
        pro_tmp.columns = [0, 1]
        Out = Out.append(pro_tmp)#Out空表中添加进pro_tem
        Out = pd.concat([Out, pd.Series([' '])])
    print (Out)
    Out.to_csv('yq_out.txt', sep='\t', index=False, header=None)