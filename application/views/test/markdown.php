A First Level Header
====================

A Second Level Header
---------------------

Now is the time for all good men to come to
the aid of their country. This is just a
regular paragraph.

The quick brown fox jumped over the lazy
dog's back.

### Header 3

> This is a blockquote.
>
> This is the second paragraph in the blockquote.
>
> ## This is an H2 in a blockquote

Some of these words *are emphasized*.
Some of these words _are emphasized also_.

Use two asterisks for **strong emphasis**.
Or, if you prefer, __use two underscores instead__.

----

### Lists

this:

*   Candy.
*   Gum.
*   Booze.

this:

+   Candy.
+   Gum.
+   Booze.

and this:

-   Candy.
-   Gum.
-   Booze.

all produce the same output. Ordered (numbered) lists use regular numbers, followed by periods, as list markers:

1.  Red
2.  Green
3.  Blue


If you put blank lines between items, you’ll get paragraph tags for the list item text. You can create multi-paragraph list items by indenting the paragraphs by 4 spaces or 1 tab:

*   A list item.

    With multiple paragraphs.

*   Another item in the list.

----

### Links

Markdown supports two styles for creating links: inline and reference:

#### Inline

This is an [example link](http://example.com/).
This is an [example link with title](http://example.com/ "The title is optional").

#### Reference

I get 10 times more traffic from [Google][1] than from
[Yahoo][2] or [MSN][3].

[1]: http://google.com/        "Google"
[2]: http://search.yahoo.com/  "Yahoo Search"
[3]: http://search.msn.com/    "MSN Search"

----

### `<code>` tags

I strongly recommend against using any `<blink>` tags. I wish SmartyPants used named entities like `&mdash;` instead of decimal-encoded entites like `&#8212;`.

	To specify an entire block of pre-formatted code,
	indent every line of the block by 4 spaces or 1 tab.
	HTNL special characters will be escaped automatically.


----

### Images

Markdown supports two styles for images

One

![alt text](https://www.google.com/images/srpr/logo3w.png "Title")


Second

![alt text][id]
[id]: https://www.google.com/images/srpr/logo3w.png "Title"



