# __PHP-Laravel__
- [x] [Environment Setup](#___Laravel and GitHub installation___)

- [x] 

- [x] 

- [x]

- [x] 

- [x]

- [x] 

- [x] 

- [x]

<br><br>

# ___Laravel and GitHub installation___

* Download and install <a href="https://git-scm.com/">GitHub</a> then log-in. If there is an error check to **Credential Manager** for github.

* Download and install/extract the latest version of <a href="https://www.php.net/downloads.php">PHP</a> in default directory [C:\ ]. Go to PHP installation folder and search for **php.ini-development** make duplicate and rename it by **php.ini** the duplicate. Then add the path to system environment variable.
* You may also install <a href="https://learn.microsoft.com/en-us/cpp/windows/latest-supported-vc-redist?view=msvc-170">Microsoft Visual C++ Redistributable </a> to have the support of php. To check the version __php -v__ use this command.

* Download and install <a href="https://www.apachefriends.org/download.html">XAMPP</a> and it version should match with **PHP** version. Also make sure that **OneDrive** is removed.

* Download and install <a href="https://getcomposer.org/download/">Composer</a>.
 



<br><br>

lecture 10 a achhi

# ___<p style="color:green">Basic GitHub commands</p>___
```
git init
git add .
git commit -m "commit goes here"
git branch -M master
git remote add origin https://github.com/_user_/repository_name.git
git push -u origin master
```



# ___<p style="color:green">PHP Fundamental</p>___
* ## ***PHP Functions to print/display***
```php
echo "return nothing";
print "return 1";
print_r "can print a hole object";
var_dump();
```

<br>

* ## ***PHP Variable & Data type***
Variables is container that can store information and starts with `$` sign. And it's name starts with either letter or underscore `_` sign. There also can be number but not in start.
- PHP variable can be declared in two ways:
- `<?php $variable = value; ?>` or



<br><br>
# ___<p style="color:green">HTML & CSS</p>___
* ## ***<p style=" margin: 0%">CSS</p>***

<div style="margin:10px 0px">
<div style="margin: 20px 40px; color:aqua; font-style: italic">
Cascading Style Sheets is the language used for describing the presentation of Web pages, including colors, layout, fonts, and other stylist.
</div><br>

<div style="margin: 20px 40px; color:aquamarine; font-style: italic">
<h3>There are three ways to add CSS:</h3>
<ul style="color:white">
<li>Inline CSS:<br>
<code>< p  style="color:green">Inline CSS < /p></code>
</li><br>
<li>Internal CSS:<br><code>< style>
h3{
    color: orange;
}
< /style></code>
</li><br>
<li>External CSS:<br><code>< link rel="stylesheet" href="styles.css"/></code></li><br>
</ul>
</div><br>
<div style="margin: 20px 40px; color:aquamarine; font-style: italic">
<h3> There are five types of selector in CSS:</h3>
<ul style="margin: 10px 0px; color:white; font-style: italic">
<li>Element Selector<br><code>h1{ font-size : large; }</code></li><br>
<li>ID Selector<br><code> #id-name{ color:green; }</code></li><br>
<li>Class Selector<br>
<code>.class-name{ margin: 10px 20px; }</code></li><br>
<li>Group Selector<br>
<code> p,div{ background-color:green; }</code></li><br>
<li>Universal Selector<br>
<code> *{ font-weight: bold; } </code></li><br>
</ul><br>
</div>
<div style="margin: 20px 40px; color:aquamarine; font-weight: Bold"><h3>CSS properties:</h3>
<ul style="margin: 20px 0px; color:white; font-weight: normal; font-style:italic">
<li>CSS Background Properties:<br><code> #background-property{
    background-color: aqua;
    background-image: url("path/picture.extention");
    background-repeat: no-repeat;
    background-position: center;
    background-attachment: fixed;
    background-size: cover;
}</code></li><br>
<li>CSS Border Properties:<br><code> p{
  border-style: dashed; 
}</code></li><br>
<li>CSS Border Radius:<br><code> .class-div{
    height: 100px;
    width: 100px;
    background-color: green;
    border-radius: 40px 1px 40px 1px;
}</code></li><br>
<li>CSS Display Properties:<br><code> p{
  display: inline-block;
}</code></li><br>
<li>CSS Cursor Properties:<br><code> .class-cursor-div{
  cursor: pointer;
}</code></li><br>
<li>CSS Float Properties:<br><code> img{
  float: right;
}</code></li><br>
<li>CSS Fonts:<br><code> .class-font{
    font-size: 60px;
    font-weight: 900;
    color: green;
    font-style: italic;
    font-family:'Courier New', Courier, monospace;
}</code></li><br>
<li>CSS Hover:<br><code>.btn{
    background-color: aqua;
    border-radius: 6px;
 }

.btn:hover{
    background-color: green;
    border-radius: 10px;
}</code></li><br>
<li>CSS Margin:<br><code></code></li><br>
<li>CSS Important:<br><code></code></li><br>
<li>CSS Line Height:<br><code></code></li><br>
<li>CSS Padding:<br><code></code></li><br>
<li>CSS Filter:<br><code></code></li><br>
<li>CSS Overflow:<br><code></code></li><br>
<li>CSS Position:<br><code></code></li><br>
<li>CSS Word Wrap:<br><code></code></li><br>
<li>CSS Justify Content:<br><code></code></li><br>
<li>CSS Text Decoration:<br><code></code></li><br>
<li>CSS Word and Letter Spacing:<br><code></code></li><br>
<li>CSS Variable:<br><code></code></li>
</ul>
</div>
</div>