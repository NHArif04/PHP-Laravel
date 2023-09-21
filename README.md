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
<div style="margin: 20px 40px; color:aqua; font-weight: italic">
    Cascading Style Sheets is the language used for describing the presentation of Web pages, including colors, layout, fonts, and other stylist.
</div><br>

<div style="margin: 20px 40px; color:aquamarine; font-weight: italic">
    There are three ways to add CSS:
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
            <li>External CSS:<br><code>< link rel="stylesheet" href="styles.css"/></code>
            </li><br>
        </ul>
</div><br>
<div style="margin: 20px 40px; color:aquamarine; font-weight: italic">
    There are five types of selector in CSS:
    <ul style="margin: 10px 0px; color:white; font-weight: italic">
    <li>Element Selector<br><code>h1{ font-size : large; }</code></li><br>
    <li>ID Selector<br><code> #id-name{ color:green; }</code>
    </li><br>
    <li>Class Selector<br>
    <code>.class-name{ margin: 10px 20px; }</code>
    </li><br>
    <li>Group Selector<br>
    <code> p,div{ background-color:green; }</code>
    </li><br>
    <li>Universal Selector<br>
    <code> *{ font-weight: bold; } </code>
    </li><br>
    </ul><br>
</div>
<div style="margin: 20px 40px; color:aquamarine; font-weight: Bold">CSS properties:
<ul style="margin: 20px 0px; color:white; font-weight: normal">
    <li>CSS Background Properties:<br><code></code></li>
    <li>CSS Border Properties:<br><code></code></li>
    <li>CSS Border Radius:<br><code></code></li>
    <li>CSS Display Properties:<br><code></code></li>
    <li>CSS Cursor Properties:<br><code></code></li>
    <li>CSS Float Properties:<br><code></code></li>
    <li>CSS Fonts:<br><code></code></li>
    <li>CSS Hover:<br><code></code></li>
    <li>CSS Margin:<br><code></code></li>
    <li>CSS Important:<br><code></code></li>
    <li>CSS Line Height:<br><code></code></li>
    <li>CSS Padding:<br><code></code></li>
    <li>CSS Filter:<br><code></code></li>
    <li>CSS Overflow:<br><code></code></li>
    <li>CSS Position:<br><code></code></li>
    <li>CSS Word Wrap:<br><code></code></li>
    <li>CSS Justify Content:<br><code></code></li>
    <li>CSS Text Decoration:<br><code></code></li>
    <li>CSS Word and Letter Spacing:<br><code></code></li>
    <li>CSS Variable:<br><code></code></li>
</ul>
</div>
</div>