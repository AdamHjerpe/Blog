# iA Writers basic Markdown syntax guide
Excellent guide that iA Writer provides with their sublime markdown editor
## Structure and formatting
### Header

“# Title” = First level
“## Title” = Second level
“### Title” = Third level
… (up to 6 levels)

### Emphasis and Strong

Emphasis: *example* or _example_ 
Strong: **example** or __example__

### Lists

#### Bulleted lists: type “*” (or “-” or “+”) + space

* Bulleted list item
* Bulleted list item
* Bulleted list item

#### Numbered lists: type “1.” + space

1. Ordered list item
2. Ordered list item
3. Ordered list item

#### Nesting lists

* First level
** Second level

1. First level
1.1. Second level

### Blockquotes

Type “>” + space + any text

This is an example of regular text. The default text width is 64 characters per line.

> This is an example of a quoted paragraph. It stays indented over multiple lines until you hit Return.
>> This is an example of a quoted quoted paragraph. It stays double indented over multiple lines until you hit Return.

### Horizontal lines

Type “* * *”

### Writer’s Markdown syntax guide

### Code 
    var now = new Date();

    var days = new Array('Sunday','Monday','Tuesday','Wednesday','Thursday','Friday','Saturday');

    var months = new Array('January','February','March','April','May','June','July','August','September','October','November','December');

    var date = ((now.getDate()<10) ? "0" : "")+ now.getDate();

    function fourdigits(number) {
      return (number < 1000) ? number + 1900 : number;
                    }
    today =  days[now.getDay()] + ", " +
             months[now.getMonth()] + " " +
             date + ", " +
             (fourdigits(now.getYear())) ;

    document.write(today);
→ http://support.iawriter.com/help/kb/general-questions/markdown-syntax-reference-guide