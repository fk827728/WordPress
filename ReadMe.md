
### Update the database to your own ip address

>`UPDATE wp_options SET option_value = replace(option_value,'localhost', 'your_ip_address');`<br>
>`UPDATE wp_posts SET post_content = replace(post_content,'localhost', 'your_ip_address');`<br>
>`UPDATE wp_posts SET guid = replace(guid,'localhost', 'your_ip_address');`<br>
>`UPDATE wp_comments  SET  comment_author_url  = replace( comment_author_url ,'localhost', 'your_ip_address');`

### Modify httpd.conf add the code below

```
<Directory "/var/www/html/WordPress">
    AllowOverride All
    Require all granted
</Directory>
```

### The API address is below

```
http://192.168.1.112/WordPress/wp-json/my-api/my-route
```