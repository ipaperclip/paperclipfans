import os

### 配置 ###
fileName = ['Ad','Df','Sp','Vol','x']
beforeContent = 'https://cdn.jsdelivr.net/gh/just-prog/static/image/'
afterContent = 'https://cdn.jsdelivr.net/gh/qiaoshouzi/static/image/'
### 配置 ###

for i in fileName:
    for root, dirs, files in os.walk('./'+i+'/'):
        for ii in files:
            mdName = './' + i + '/' + ii
            with open(mdName, 'r', encoding='utf-8') as f:
                data = f.read()
            f.close()

            data = data.replace(beforeContent, afterContent)
                
            with open(mdName, 'w',encoding='utf-8') as r:
                r.write(data)
            r.close()
