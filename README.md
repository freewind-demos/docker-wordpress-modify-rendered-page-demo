Docker Wordpress Modify Rendered Page Demo
==========================

通过`add_filter('the_content', ...)`来获取并修改一个post的内容。

http://localhost:20080/?page_id=2

可以看到第一句话变成了红色。

修改过的文件：
1. `WordPress-5.3.2/test.php`
2. `WordPress-5.3.2/wp-includes/functions.php`

```
npm run up
```

当前登录wordpress的用户名和密码是：

```
freewind
123456
```

