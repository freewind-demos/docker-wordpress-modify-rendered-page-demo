Docker Wordpress Init Demo
==========================

把`add_action('init', ...)`放在wp-config.php的最后不起作用：

1. `add_action`是在`plugin.php`中定义的
2. `do_action('init', ...)`是在`wp-settings.php`中执行的
3. `wp-config.php`中`require_once( ABSPATH . 'wp-settings.php' )`时，会执行完所有操作，所以在它后面执行`add_action`不起作用

应该把这样的代码放在`functions.php`或者其它合适的地方。 

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

