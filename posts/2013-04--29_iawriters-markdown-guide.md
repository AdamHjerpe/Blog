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
<code class="prettyprint">
get('/:year/:month/:name',function($year, $month, $name){
  $post = find_post($year, $month, $name);
  if(!$post){
    not_found();
  }
  render('post',array(
    'title' => $post->title .' ⋅ ' . config('blog.title'),
    'p' => $post
  ));
});
</code>
→ http://support.iawriter.com/help/kb/general-questions/markdown-syntax-reference-guide