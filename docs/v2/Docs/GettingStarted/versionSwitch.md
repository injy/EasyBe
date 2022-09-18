# 版本切换

> 注意：任何版本的切换，最好都更新一下对应版本的css样式，不然可能会发生兼容性问题！


## v2.\*.* 之间切换版本

### 使用 jsdelivr 加载资源

只需要更改 simple-memory.js 文件引入的版本。

例如：

```html
<script src="https://cdn.jsdelivr.net/gh/wangyang0210/Cnblogs-Theme@v2.0.0/dist/simple-memory.js" defer></script>
```

变为

```html
<script src="https://cdn.jsdelivr.net/gh/wangyang0210/Cnblogs-Theme@v2.0.1/dist/simple-memory" defer></script>
```

版本变更： `v2.0.0` >>> `v2.0.1` 

### 使用自己的云资源

如果你的资源是托管到自己的云资源上。

#### 随机参方式更新加载资源

> 推荐这种方式来更新加载资源。

例如：

```html
<script src="https://www.easybe.org/dist/simple-memory.js" defer></script>
```

变为

```html
<script src="https://www.easybe.org/dist/simple-memory.js?_12322" defer></script>
```


#### 更换文件方式更新加载资源

`/dist` 目录除了 `simple-memory.js` 文件，还有一个带随机后缀名的文件：`simple-memory.[8位随机串].js`
也可以每次更新代码后引入此文件，来达到更新加载资源的目的。

例如：

```html
<script src="https://www.easybe.org/dist/simple-memory.y7i7sx47.js" defer></script>
```

变为

```html
<script src="https://dbnuo.com/dist/simple-memory.s8kn7hd6.js" defer></script>
```

