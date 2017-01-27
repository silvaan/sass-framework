<div class="small fluid full spaced container" style="padding: 4px 10px;">
  <div class="box box-body">
    <?php content('h1-p-h2-p-p-h3-h4-p-h4-p'); ?>
    <h1>CSS Basic Elements <small style="display: block;">Basic elements for show</small></h1>

    <p>The purpose of this HTML is to help determine what default settings are with CSS and to make sure that all possible HTML Elements are included in this HTML so as to not miss any possible Elements when designing a site.</p>

    <hr />

    <h1 id="headings">Headings <small>Lorem ipsum dolor sit amet</small></h1>

    <h1>Heading 1</h1>
    <h2>Heading 2</h2>
    <h3>Heading 3</h3>
    <h4>Heading 4</h4>
    <h5>Heading 5</h5>
    <h6>Heading 6</h6>

    <small><a href="#wrapper">[top]</a></small>
    <hr />

    <?php colors('<span class="text-[color]">' . $faker->sentence(5) . '</span><br>'); ?>
    <?php sizes('<span class="text-[size]">' . $faker->sentence(5) . '</span><br>'); ?>


    <h1 id="paragraph">Paragraph</h1>

    <img style="width:250px;height:125px;float:right" src="images/css_gods_language.png" alt="CSS | God's Language" />
    <p>Lorem ipsum dolor sit amet, <a href="#" title="test link">test link</a> adipiscing elit. Nullam dignissim convallis est. Quisque aliquam. Donec faucibus. Nunc iaculis suscipit dui. Nam sit amet sem. Aliquam libero nisi, imperdiet at, tincidunt nec, gravida vehicula, nisl. Praesent mattis, massa quis luctus fermentum, turpis mi volutpat justo, eu volutpat enim diam eget metus. Maecenas ornare tortor. Donec sed tellus eget sapien fringilla nonummy. Mauris a ante. Suspendisse quam sem, consequat at, commodo vitae, feugiat in, nunc. Morbi imperdiet augue quis tellus.</p>

    <p>Lorem ipsum dolor sit amet, <em>emphasis</em> consectetuer adipiscing elit. Nullam dignissim convallis est. Quisque aliquam. Donec faucibus. Nunc iaculis suscipit dui. Nam sit amet sem. Aliquam libero nisi, imperdiet at, tincidunt nec, gravida vehicula, nisl. Praesent mattis, massa quis luctus fermentum, turpis mi volutpat justo, eu volutpat enim diam eget metus. Maecenas ornare tortor. Donec sed tellus eget sapien fringilla nonummy. Mauris a ante. Suspendisse quam sem, consequat at, commodo vitae, feugiat in, nunc. Morbi imperdiet augue quis tellus.</p>

    <small><a href="#wrapper">[top]</a></small>
    <hr />

    <h1 id="list_types">List Types</h1>

    <h3>Definition List</h3>
    <dl>
      <dt>Definition List Title</dt>
      <dd>This is a definition list division.</dd>
    </dl>

    <h3>Ordered List</h3>
    <ol class="inline">
      <li>List Item 1</li>
      <li>List Item 2</li>
      <li>List Item 3</li>
    </ol>

    <h3>Unordered List</h3>
    <ul class="circle">
      <li>List Item 1</li>
      <li>List Item 2</li>
      <li>List Item 3</li>
      <li>List Item 4
        <ul>
          <li>List Item 1</li>
          <li>List Item 2</li>
          <li>List Item 3</li>
        </ul>
      </li>
    </ul>

    <small><a href="#wrapper">[top]</a></small>
    <hr />

    <h1 id="form_elements">Fieldsets, Legends, and Form Elements</h1>

    <fieldset>
      <legend>Legend</legend>

      <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nullam dignissim convallis est. Quisque aliquam. Donec faucibus. Nunc iaculis suscipit dui. Nam sit amet sem. Aliquam libero nisi, imperdiet at, tincidunt nec, gravida vehicula, nisl. Praesent mattis, massa quis luctus fermentum, turpis mi volutpat justo, eu volutpat enim diam eget metus.</p>

      <form>
        <h2>Form Element</h2>

        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nullam dignissim convallis est. Quisque aliquam. Donec faucibus. Nunc iaculis suscipit dui.</p>

        <p><label for="text_field">Text Field:</label><br />
          <input type="text" id="text_field" /></p>

          <p><label for="text_area">Text Area:</label><br />
            <textarea id="text_area"></textarea></p>

            <p><label for="select_element">Select Element:</label><br />
              <select name="select_element">
                <optgroup label="Option Group 1">
                  <option value="1">Option 1</option>
                  <option value="2">Option 2</option>
                  <option value="3">Option 3</option>
                </optgroup>
                <optgroup label="Option Group 2">
                  <option value="1">Option 1</option>
                  <option value="2">Option 2</option>
                  <option value="3">Option 3</option>
                </optgroup>
              </select></p>

              <p><label for="radio_buttons">Radio Buttons:</label><br />
                <input type="radio" class="radio" name="radio_button" value="radio_1" /> Radio 1<br/>
                <input type="radio" class="radio" name="radio_button" value="radio_2" /> Radio 2<br/>
                <input type="radio" class="radio" name="radio_button" value="radio_3" /> Radio 3<br/>
              </p>

              <p><label for="checkboxes">Checkboxes:</label><br />
                <input type="checkbox" class="checkbox" name="checkboxes" value="check_1" /> Radio 1<br/>
                <input type="checkbox" class="checkbox" name="checkboxes" value="check_2" /> Radio 2<br/>
                <input type="checkbox" class="checkbox" name="checkboxes" value="check_3" /> Radio 3<br/>
              </p>

              <p><label for="password">Password:</label><br />
                <input type="password" class="password" name="password" />
              </p>

              <p><label for="file">File Input:</label><br />
                <input type="file" class="file" name="file" />
              </p>


              <p><input class="button" type="reset" value="Clear" /> <input class="button" type="submit" value="Submit" />
              </p>



            </form>

          </fieldset>

          <small><a href="#wrapper">[top]</a></small>
          <hr />

          <h1 id="tables">Tables</h1>

          <table cellspacing="0" cellpadding="0">
            <tr>
              <th>Table Header 1</th><th>Table Header 2</th><th>Table Header 3</th>
            </tr>
            <tr>
              <td>Division 1</td><td>Division 2</td><td>Division 3</td>
            </tr>
            <tr class="even">
              <td>Division 1</td><td>Division 2</td><td>Division 3</td>
            </tr>
            <tr>
              <td>Division 1</td><td>Division 2</td><td>Division 3</td>
            </tr>

          </table>

          <small><a href="#wrapper">[top]</a></small>
          <hr />

          <h1 id="misc">Misc Stuff - abbr, acronym, pre, code, sub, sup, etc.</h1>

          <p>Lorem <sup>superscript</sup> dolor <sub>subscript</sub> amet, consectetuer adipiscing elit. Nullam dignissim convallis est. Quisque aliquam. <cite>cite</cite>. Nunc iaculis suscipit dui. Nam sit amet sem. Aliquam libero nisi, imperdiet at, tincidunt nec, gravida vehicula, nisl. Praesent mattis, massa quis luctus fermentum, turpis mi volutpat justo, eu volutpat enim diam eget metus. Maecenas ornare tortor. Donec sed tellus eget sapien fringilla nonummy. <acronym title="National Basketball Association">NBA</acronym> Mauris a ante. Suspendisse quam sem, consequat at, commodo vitae, feugiat in, nunc. Morbi imperdiet augue quis tellus.  <abbr title="Avenue">AVE</abbr></p>

          <pre><p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nullam dignissim convallis est. Quisque aliquam. Donec faucibus. Nunc iaculis suscipit dui. Nam sit amet sem. Aliquam libero nisi, imperdiet at, tincidunt nec, gravida vehicula, nisl. Praesent mattis, massa quis luctus fermentum, turpis mi volutpat justo, eu volutpat enim diam eget metus. Maecenas ornare tortor. Donec sed tellus eget sapien fringilla nonummy. <acronym title="National Basketball Association">NBA</acronym> Mauris a ante. Suspendisse quam sem, consequat at, commodo vitae, feugiat in, nunc. Morbi imperdiet augue quis tellus.  <abbr title="Avenue">AVE</abbr></p></pre>

          <blockquote>
            "This stylesheet is going to help so freaking much." <br />-Blockquote
          </blockquote>

          <small><a href="#wrapper">[top]</a></small>
          <h1>Testing display of HTML elements</h1>

<h2>This is 2nd level heading</h2>
<p>This is a test paragraph.</p>
<h3>This is 3rd level heading</h3>
<p>This is a test paragraph.</p>
<h4>This is 4th level heading</h4>
<p>This is a test paragraph.</p>
<h5>This is 5th level heading</h5>
<p>This is a test paragraph.</p>
<h6>This is 6th level heading</h6>
<p>This is a test paragraph.</p>

<h2>Basic block level elements</h2>

<p>This is a normal paragraph (<code>p</code> element).
To add some length to it, let us mention that this page was
primarily written for testing the effect of <strong>user style sheets</strong>.
You can use it for various other purposes as well, like just checking how
your browser displays various HTML elements by default.
It can also be useful when testing conversions from HTML
format to other formats, since some elements can go wrong then.</p>
<p>This is another paragraph. I think it needs to be added that
the set of elements tested is not exhaustive in any sense. I have selected
those elements for which it can make sense to write user style sheet rules,
in my opionion.</p>
<div>This is a <code>div</code> element. Authors may use such elements instead
of paragraph markup for various reasons. (End of <code>div</code>.)</div>
<blockquote><p>This is a block quotation containing a single
paragraph. Well, not quite, since this is not <em>really</em>
quoted text, but I hope you understand the point. After all, this
page does not use HTML markup very normally anyway.</p></blockquote>
<p>The following contains address information about the author, in an <code>address</code>
element.</p>
<address>
<a href="../personal.html" lang="fi" hreflang="en">Jukka Korpela</a>,
<a href="mailto:jkorpela@cs.tut.fi">jkorpela@cs.tut.fi</A><br>
Päivänsäteenkuja 4 A, Espoo, Finland
</address>

<h2>Lists</h2>

<p>This is a paragraph before an <strong>unnumbered</strong> list (<code>ul</code>). Note that
the spacing between a paragraph and a list before or after that is hard
to tune in a user style sheet. You can't guess which paragraphs are
logically related to a list, e.g. as a "list header".</p>
<ul>
  <li> One.
  <li> Two.
  <li> Three. Well, probably this list item should be longer. Note that
for short items lists look better if they are compactly presented,
       whereas for long items, it would be better to have more vertical spacing between items.
  <li> Four. This is the last item in this list.
       Let us terminate the list now without making any more fuss about it.
</ul>
<p>The following is a <code>menu</code> list:</p>
<menu>
  <li> One.
  <li> Two.
  <li> Three. Well, probably this list item should be longer so that it will
probably wrap to the next line in rendering.
</menu>
<p>The following is a <code>dir</code> list:</p>
<dir>
  <li> One.
  <li> Two.
  <li> Three. Well, probably this list item should be longer so that it will
probably wrap to the next line in rendering.
</dir>

<p>This is a paragraph before a <strong>numbered</strong> list (<code>ol</code>). Note that
the spacing between a paragraph and a list before or after that is hard
to tune in a user style sheet. You can't guess which paragraphs are
logically related to a list, e.g. as a "list header".</p>
<ol>
  <li> One.
  <li> Two.
  <li> Three. Well, probably this list item should be longer. Note that if
items are short, lists look better if they are compactly presented,
       whereas for long items, it would be better to have more vertical spacing between items.
  <li> Four. This is the last item in this list.
       Let us terminate the list now without making any more fuss about it.
</ol>

<p>This is a paragraph before a <strong>definition</strong> list (<code>dl</code>).
In principle, such a list should consist of <em>terms</em> and associated
definitions.
But many authors use <code>dl</code> elements for fancy "layout" things. Usually the
effect is not <em>too</em> bad, if you design user style sheet rules for <code>dl</code>
which are suitable
for real definition lists.
<dl>
  <dt> recursion
  <dd> see recursion
  <dt> recursion, indirect
  <dd> see indirect recursion
  <dt> indirect recursion
  <dd> see recursion, indirect
  <dt> term
  <dd> a word or other expression taken into specific use in
       a well-defined meaning, which is often defined rather rigorously, even
       formally, and may differ quite a lot from an everyday meaning
</dl>

<h2>Text-level markup</h2>

<ul>
  <li> <abbr title="Cascading Style Sheets">CSS</abbr> (an abbreviation;
 <code>abbr</code> markup used)
  <li> <acronym title="radio detecting and ranging">radar</acronym> (an acronym; <code>acronym</code> markup used)
  <li> <b>bolded</b> (<code>b</code> markup used - just bolding with unspecified
       semantics)
  <li> <big>big thing</big> (<code>big</code> markup used)
  <li> <font size=6>large size</font> (<code>font size=6</code> markup used)
  <li> <font face=Courier>Courier font</font> (<code>font face=Courier</code> markup used)
  <li> <font color=red>red text</font> (<code>font color=red</code> markup used)
  <li> <cite>Origin of Species</cite> (a book title;
       <code>cite</code> markup used)
  <li> <code>a[i] = b[i] + c[i);</code> (computer code; <code>code</code> markup used)
  <li> here we have some <del>deleted</del> text (<code>del</code> markup used)
  <li> an <dfn>octet</dfn> is an entity consisting of eight bits
       (<code>dfn</code> markup used for the term being defined)
  <li> this is <em>very</em> simple (<code>em</code> markup used for emphasizing
       a word)
  <li> <i lang="la">Homo sapiens</i> (should appear in italics;  <code>i</code> markup used)
  <li> here we have some <ins>inserted</ins> text (<code>ins</code> markup used)
  <li> type <kbd>yes</kbd> when prompted for an answer (<code>kbd</code> markup
       used for text indicating keyboard input)
  <li> <q>Hello!</q> (<code>q</code> markup used for quotation)
  <li> He said: <q>She said <q>Hello!</q></q> (a quotation inside a quotation)
  <li> you may get the message <samp>Core dumped</samp> at times
       (<code>samp</code> markup used for sample output)
  <li> <small>this is not that important</small> (<code>small</code> markup used)
  <li> <strike>overstruck</strike> (<code>strike</code> markup used; note:
       <code>s</code> is a nonstandard synonym for <code>strike</code>)
  <li> <strong>this is highlighted text</strong> (<code>strong</code>
       markup used)
  <li> In order to test how subscripts and superscripts (<code>sub</code> and
       <code>sup</code> markup) work inside running text, we need some
       dummy text around constructs like x<sub>1</sub> and H<sub>2</sub>O
       (where subscripts occur). So here is some fill so that
       you will (hopefully) see whether and how badly the subscripts
       and superscripts mess up vertical spacing between lines.
       Now superscripts: M<sup>lle</sup>, 1<sup>st</sup>, and then some
       mathematical notations: e<sup>x</sup>, sin<sup>2</sup> <i>x</i>,
       and some nested superscripts (exponents) too:
       e<sup>x<sup>2</sup></sup> and f(x)<sup>g(x)<sup>a+b+c</sup></sup>
       (where 2 and a+b+c should appear as exponents of exponents).
  <li> <tt>text in monospace font</tt> (<code>tt</code> markup used)
  <li> <u>underlined</u> text (<code>u</code> markup used)
  <li> the command <code>cat</code> <var>filename</var> displays the
       file specified by the <var>filename</var> (<code>var</code> markup
       used to indicate a word as a variable).
</ul>

<p>Some of the elements tested above are typically displayed in a monospace
font, often using the <em>same</em> presentation for all of them. This
tests whether that is the case on your browser:</p>

<ul>
  <li> <code>This is sample text inside code markup</code>
  <li> <kbd>This is sample text inside kbd markup</kbd>
  <li> <samp>This is sample text inside samp markup</samp>
  <li> <tt>This is sample text inside tt markup</tt>
</ul>
<h2>Links</h2>
<ul>
<li> <a href="../index.html">main page</a>
<li> <a href=
"http://www.unicode.org/versions/Unicode4.0.0/ch06.pdf"
title="Writing Systems and Punctuation"
type="application/pdf"
>Unicode Standard, chapter&nbsp;6</a>
</ul>

<p>This is a text paragraph that contains some
inline links. Generally, inline links (as opposite to e.g. links
lists) are problematic
from the
<a href="http://www.useit.com">usability</a> perspective,
but they may have use as
&#8220;incidental&#8221;, less relevant links. See the document
<cite><a href="links.html">Links Want To Be Links</a></cite>.</p>

<h2>Forms</h2>

<form action="http://www.cs.tut.fi/cgi-bin/run/~jkorpela/echo.cgi">
<div>
<input type="hidden" name="hidden field" value="42">
This is a form containing various fields (with some initial
values (defaults) set, so that you can see how input text looks
like without actually typing it):</div>
<div><label for="but">Button:
<button id="but" type="submit" name="foo" value="bar">A cool<br>button</button></label></div>
<div><label for="f0">Reset button:
<input id="f0" type="reset" name="reset" value="Reset"></label></div>
<div><label for="f1">Single-line text input field: <input id="f1" name="text" size="20" value="Default text."></label></div>
<div><label for="f2">Multi-line text input field (textarea):</label><br>
<textarea id="f2" name="textarea" rows="2" cols="20">
Default text.
</textarea></div>
<div>The following two radio buttons are inside
a <code>fieldset</code> element with a <code>legend</code>:</div>
<fieldset>
<legend>Legend</legend>
<div><label for="f3"><input id="f3" type="radio" name="radio" value="1"> Radio button 1</label></div>
<div><label for="f4"><input id="f4" type="radio" name="radio" value="2" checked> Radio button 2 (initially checked)</label></div>
</fieldset>
<fieldset>
<legend>Check those that apply</legend>
<div><label for="f5"><input id="f5" type="checkbox" name="checkbox"> Checkbox 1</label></div>
<div><label for="f6"><input id="f6" type="checkbox" name="checkbox2" checked> Checkbox 2 (initially checked)</label></div>
</fieldset>
<div><label for="f10">A <code>select</code> element with <code>size="1"</code>
(dropdown box):
<select id="f10" name="select1" size="1">
<option>one
<option selected>two (default)
<option>three
</select></label></div>
<div><label for="f11">A <code>select</code> element with <code>size="3"</code>
(listbox):</label><br>
<select id="f11" name="select2" size="3">
<option>one
<option selected>two (default)
<option>three
</select></div>
<div><label for="f99">Submit button:
<input id="f99" type="submit" name="submit" value="Just a test"></label></div>
</form>

<h2>Tables</h2>

<p>The following table has a caption. The first row and the first column
contain table header cells (<code>th</code> elements) only; other cells
are data cells (<code>td</code> elements), with <code>align="right"</code>
attributes:</p>

<TABLE summary=
"Each row names a Nordic country and specifies its total area and land area, in square kilometers">
<CAPTION>Sample table: Areas of the Nordic countries, in sq km</CAPTION>
<TR><th scope="col">Country</th> <th scope="col">Total area</TH> <th scope="col">Land area</TH>
<TR><th scope="row">Denmark</TH> <TD ALIGN=RIGHT> 43,070 </TD><TD ALIGN=RIGHT> 42,370</TR>
<TR><th scope="row">Finland</TH> <TD ALIGN=RIGHT>337,030 </TD><TD ALIGN=RIGHT>305,470</TR>
<TR><th scope="row">Iceland</TH> <TD ALIGN=RIGHT>103,000 </TD><TD ALIGN=RIGHT>100,250</TR>
<TR><th scope="row">Norway</TH>  <TD ALIGN=RIGHT>324,220 </TD><TD ALIGN=RIGHT>307,860</TR>
<TR><th scope="row">Sweden</TH>  <TD ALIGN=RIGHT>449,964 </TD><TD ALIGN=RIGHT>410,928</TR>
</TABLE>

<h2>Character test</h2>
<p>The following table has some sample characters with
annotations. If the browser&#8217;s default font does not
contain all of them, they may get displayed using backup fonts.
This may cause stylistic differences, but it should not
prevent the characters from being displayed at all.</p>

<table>
<tr><th>Char. <th>Explanation <th>Notes
<tr><td>ê <td>e with circumflex <td>Latin 1 character, should be ok
<tr><td>&#8212; <td>em dash <td>Windows Latin 1 character, should be ok, too
<tr><td>&#x100; <td>A with macron (line above) <td>Latin Extended-A character, not present in all fonts
<tr><td>&Omega; <td>capital omega <td>A Greek letter
<tr><td>&#x2212; <td>minus sign <td>Unicode minus
<tr><td>&#x2300; <td>diameter sign <td>relatively rare in fonts
</table>

<h2>Hyphenation</h2>
<p>In the following, a width setting should cause some hyphenation,
depending on support to various methods of hyphenation.</p>

<h3>CSS-based hyphenation</h3>
<p class="limited hyphens">Until recently the great majority of naturalists believed that species were immutable productions, and had been separately created. This view has been ably maintained by many authors.

<h3>JavaScript-driven hyphenation</h3>
<p class="limited hyphenate">Until recently the great majority of naturalists believed that species were immutable productions, and had been separately created. This view has been ably maintained by many authors.

<h3>Explicit hyphenation hints (soft hyphens)</h3>
<p class="limited">Un­til re­cent­ly the great
 ma­jor­i­ty of nat­u­ral­ists
be­lieved that spe­cies were
 im­mu­ta­ble
 pro­duc­tions,
 and had been sep­a­rate­ly cre­at­ed.
This view has been ably main­tain­ed by many au­thors.


<HR TITLE="Information about this document">

<address>
<a href="../personal.html" hreflang="en" lang="fi">Jukka Korpela</a>
</address>
<div>
<A TITLE=
"ISO 8601, the date and time representation standard"
HREF="../iso8601.html">
Date</A> of creation: 2000-09-15.
Last update: 2013-03-21.
</div>

        </div>
      </div>
