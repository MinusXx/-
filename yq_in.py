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
        Out = pd.concat([Out, pd.Series([pro])])#������ֵ��Pro�е�����ձ�ƴ������
        City = pd.Series(In.loc[In[0]==pro][1])#����Pro�н��в��ҵõ�����ͬʡ�ݵĳ��зŵ�һ��City��
        City_number = pd.Series(In.loc[In[0]==pro][2])#���Ѷ�Ӧ���е�����Ҳ����һ��City_Num����
        pro_tmp = pd.concat([City, City_number], axis=1)#��City����City_Num��ʹ��contac����ƴ����һ��
        pro_tmp.columns = [0, 1]
        Out = Out.append(pro_tmp)#Out�ձ�����ӽ�pro_tem
        Out = pd.concat([Out, pd.Series([' '])])
    print (Out)
    Out.to_csv('yq_out.txt', sep='\t', index=False, header=None)