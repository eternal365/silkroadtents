<?php 
/*
Template Name: Style Guide
*/
?>
    <!DOCTYPE html>

    <head>
        <meta charset="utf-8">
        <title>Style Guide</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Le styles -->
        <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />
        <link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet">

        <?php wp_enqueue_script("jquery"); ?>
    </head>
    <!--float-right-->
    <!--<nav class="navbar navbar-toggleable-md navbar-light bg-faded">-->

    <body class="styleguide">
        <nav class="navbar navbar-toggleable-md navbar-light bg-faded">
            <div class="container">
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <a class="navbar-brand" href="#"> </a>

                <div class="navbar-collapse" id="navbarNavDropdown">

                    <form class="form-inline mr-auto">
                        <input class="form-control mr-sm-2" type="text" placeholder="Search">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                    </form>
                    <ul class="navbar-nav my-2 my-lg-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="link_001" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Utilities
        </a>
                            <div class="dropdown-menu mt-0" aria-labelledby="link_001">
                                <a class="dropdown-item" href="#responsive-helpers">Responsive helpers</a>
                                <a class="dropdown-item" href="#sizing">Sizing</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="link_001" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          CSS
        </a>
                            <div class="dropdown-menu mt-0" aria-labelledby="link_001">
                                <a class="dropdown-item" href="#headings">Headings</a>
                                <a class="dropdown-item" href="#content-formatting">Content</a>
                                <a class="dropdown-item" href="#tables">Tables</a>
                                <a class="dropdown-item" href="#forms">Forms</a>
                                <a class="dropdown-item" href="#images">Images</a>
                                <a class="dropdown-item" href="#image100">Image 100%</a>
                                <a class="dropdown-item" href="#font-awesome">Font Awesome</a>
                                <a class="dropdown-item" href="#ionicons">Ionicons</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="link_002" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Components
        </a>
                            <div class="dropdown-menu mt-0" aria-labelledby="link_002">
                                <a class="dropdown-item" href="#breadcrumb">Breadcrumb</a>
                                <a class="dropdown-item" href="#buttons">Buttons</a>
                                <a class="dropdown-item" href="#cards">Cards</a>
                                <a class="dropdown-item" href="#dropdowns">Dropdowns</a>
                                <a class="dropdown-item" href="#input-groups">Input Groups</a>
                                <a class="dropdown-item" href="#navs">Navs</a>
                                <a class="dropdown-item" href="#navbar">Navbar</a>
                                <a class="dropdown-item" href="#pagination">Pagination</a>
                                <a class="dropdown-item" href="#alerts">Alerts</a>
                                <a class="dropdown-item" href="#list-groups">List Groups</a>
                                <a class="dropdown-item" href="#labels">Labels</a>
                                <a class="dropdown-item" href="#progress">Progress</a>
                                <a class="dropdown-item" href="#media-object">Media Object</a>
                                <a class="dropdown-item" href="#list-groups">List Groups</a>
                                <a class="dropdown-item" href="#panels">Panels</a>
                                <a class="dropdown-item" href="#wells">Wells</a>
                            </div>
                        </li>


                    </ul>
                </div>
            </div>
        </nav>

        <div class="container">

            <div class="jumbotron mt-3">
                <h1 class="display-3">Hello, world!</h1>
                <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
                <hr class="my-4">
                <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
                <p class="lead">
                    <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
                </p>
            </div>

            <!--
        <div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;h3&gt;</span>
  Fancy display heading
  <span class="nt">&lt;small</span> <span class="na">class=</span><span class="s">"text-muted"</span><span class="nt">&gt;</span>With faded secondary text<span class="nt">&lt;/small&gt;</span>
<span class="nt">&lt;/h3&gt;</span></code></pre></div>
-->

            <div class="row">
                <div class="col-lg-6">

                    <div class="card mb-2" id="headings">
                        <div class="card-block">
                            <div class="panel-heading">Headings
                            </div>
                            <h1 class="page-header">Page Header <small>With Small Text</small></h1>
                            <h1>h1. Bootstrap heading</h1>
                            <h2>h2. Bootstrap heading</h2>
                            <h3>h3. Bootstrap heading</h3>
                            <h4>h4. Bootstrap heading</h4>
                            <h5>h5. Bootstrap heading</h5>
                            <h6>h6. Bootstrap heading</h6>
                            <h3>
            Fancy display heading
            <small class="text-muted">With faded secondary text</small>
          </h3>
                            <div class="panel-heading"> Display Headings
                            </div>
                            <h1 class="display-1">Display 1</h1>
                            <h1 class="display-2">Display 2</h1>
                            <h1 class="display-3">Display 3</h1>
                            <h1 class="display-4">Display 4</h1>
                        </div>
                    </div>

                    <div class="card mb-2" id="tables">
                        <div class="card-block">
                            <div class="panel-heading">Tables
                            </div>
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>First Name</th>
                                        <th>Tables</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Michael</td>
                                        <td>Are formatted like this</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Lucille</td>
                                        <td>Do you like them?</td>
                                    </tr>
                                    <tr class="success">
                                        <td>3</td>
                                        <td>Success</td>
                                        <td></td>
                                    </tr>
                                    <tr class="danger">
                                        <td>4</td>
                                        <td>Danger</td>
                                        <td></td>
                                    </tr>
                                    <tr class="warning">
                                        <td>5</td>
                                        <td>Warning</td>
                                        <td></td>
                                    </tr>
                                    <tr class="active">
                                        <td>6</td>
                                        <td>Active</td>
                                        <td></td>
                                    </tr>
                                </tbody>
                            </table>
                            <table class="table table-striped table-bordered table-condensed">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>First Name</th>
                                        <th>Tables</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Michael</td>
                                        <td>This one is bordered and condensed</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Lucille</td>
                                        <td>Do you still like it?</td>
                                    </tr>
                                </tbody>
                            </table>

                        </div>
                    </div>


                </div>


                <div class="col-lg-6">
                    <div class="card mb-2" id="content-formatting">
                        <div class="card-block">
                            <div class="panel-heading">Content Formatting
                            </div>
                            <p class="lead">This is a lead paragraph.</p>

                            <p>This is an <b>ordinary paragraph</b> that is <i>long enough</i> to wrap to <u>multiple lines</u> so that you can see how the line spacing looks.</p>
                            <p>You can use the mark tag to
                                <mark>highlight</mark> text.</p>
                            <p><del>This line of text is meant to be treated as deleted text.</del></p>
                            <p><s>This line of text is meant to be treated as no longer accurate.</s></p>
                            <p><ins>This line of text is meant to be treated as an addition to the document.</ins></p>
                            <p><u>This line of text will render as underlined</u></p>
                            <p><small>This line of text is meant to be treated as fine print.</small></p>
                            <p><strong>This line rendered as bold text.</strong></p>
                            <p><em>This line rendered as italicized text.</em></p>
                            <p class="text-muted">Muted color paragraph.</p>
                            <p class="text-warning">Warning color paragraph.</p>
                            <p class="text-danger">Danger color paragraph.</p>
                            <p class="text-info">Info color paragraph.</p>
                            <p class="text-success">Success color paragraph.</p>
                            <p><small>This is text in a <code>small</code> wrapper. <abbr title="No Big Deal">NBD</abbr>, right?</small></p>
                            <hr>
                            <div class="row">
                                <address class="col-6">                <strong>Twitter, Inc.</strong><br>                795 Folsom Ave, Suite 600<br>                San Francisco, CA 94107<br>                <abbr title="Phone">P:</abbr> (123) 456-7890              </address><address class="col-6">                <strong>Full Name</strong><br>                <a href="mailto:#">first.last@example.com</a>              </address>
                            </div>
                            <hr>
                            <blockquote>Here's what a blockquote looks like in Bootstrap. <small>Use <code>small</code> to identify the source.</small>
                            </blockquote>
                            <hr>
                            <div class="row">
                                <div class="col-6">
                                    <ul>
                                        <li>Normal Unordered List</li>
                                        <li>Can Also Work
                                            <ul>
                                                <li>With Nested Children</li>
                                            </ul>
                                        </li>
                                        <li>Adds Bullets to Page</li>
                                    </ul>
                                </div>
                                <div class="col-6">
                                    <ol>
                                        <li>Normal Ordered List</li>
                                        <li>Can Also Work
                                            <ol>
                                                <li>With Nested Children</li>
                                            </ol>
                                        </li>
                                        <li>Adds Bullets to Page</li>
                                    </ol>
                                </div>
                            </div>
                            <hr>
                            <pre>function preFormatting() {  // looks like this;  var something = somethingElse;  return true;}</pre>
                        </div>

                    </div>
                </div>
            </div>

            <div class="card mb-2" id="breadcrumb">
                <div class="card-block mb-2">
                    <h2>Breadcrumb</h2>
                    <!--
                <div class="panel-heading">Forms
                </div>
-->


                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active">Home</li>
                    </ol>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Library</li>
                    </ol>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Library</a></li>
                        <li class="breadcrumb-item active">Data</li>
                    </ol>
                    <hr>
                    <nav class="breadcrumb">
                        <a class="breadcrumb-item" href="#">Home</a>
                        <a class="breadcrumb-item" href="#">Library</a>
                        <a class="breadcrumb-item" href="#">Data</a>
                        <span class="breadcrumb-item active">Bootstrap</span>
                    </nav>
                </div>
            </div>

            <div class="card mb-2" id="forms">
                <div class="card-block">
                    <h2>Forms</h2>



                    <form class="form-inline mb-2">
                        <label class="sr-only" for="inlineFormInput">Name</label>
                        <input type="email" class="form-control mb-2 mr-sm-2 mb-sm-0" id="inlineFormInput" placeholder="Email">

                        <label class="sr-only" for="inlineFormInputGroup">Username</label>
                        <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                            <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
                        </div>

                        <div class="form-check mb-2 mr-sm-2 mb-sm-0">
                            <label class="form-check-label">
                                <input class="form-check-input" type="checkbox"> Remember me
                            </label>
                        </div>

                        <button type="submit" class="btn btn-primary">Sign in</button>
                    </form>

                    <form>
                        <!--
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>
-->
                        <div class="form-group">
                            <label for="exampleSelect1">Example select</label>
                            <select class="form-control" id="exampleSelect1">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleSelect2">Example multiple select</label>
                            <select multiple class="form-control" id="exampleSelect2">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleTextarea">Example textarea</label>
                            <textarea class="form-control" id="exampleTextarea" rows="3"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">File input</label>
                            <input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp">
                            <small id="fileHelp" class="form-text text-muted">This is some placeholder block-level help text for the above input. It's a bit lighter and easily wraps to a new line.</small>
                        </div>
                        <fieldset class="form-group">
                            <legend>Radio buttons</legend>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios1" value="option1" checked> Option one is this and that&mdash;be sure to include why it's great
                                </label>
                            </div>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios2" value="option2"> Option two can be something else and selecting it will deselect option one
                                </label>
                            </div>
                            <div class="form-check disabled">
                                <label class="form-check-label">
                                    <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios3" value="option3" disabled> Option three is disabled
                                </label>
                            </div>
                        </fieldset>
                        <div class="form-check">
                            <label class="form-check-label">
                                <input type="checkbox" class="form-check-input"> Check me out
                            </label>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                    <hr>


                    <div class="form-group row">
                        <label for="example-text-input" class="col-2 col-form-label">Text</label>
                        <div class="col-10">
                            <input class="form-control" type="text" value="Artisanal kale" id="example-text-input">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-search-input" class="col-2 col-form-label">Search</label>
                        <div class="col-10">
                            <input class="form-control" type="search" value="How do I shoot web" id="example-search-input">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-email-input" class="col-2 col-form-label">Email</label>
                        <div class="col-10">
                            <input class="form-control" type="email" value="bootstrap@example.com" id="example-email-input">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-url-input" class="col-2 col-form-label">URL</label>
                        <div class="col-10">
                            <input class="form-control" type="url" value="https://getbootstrap.com" id="example-url-input">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-tel-input" class="col-2 col-form-label">Telephone</label>
                        <div class="col-10">
                            <input class="form-control" type="tel" value="1-(555)-555-5555" id="example-tel-input">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-password-input" class="col-2 col-form-label">Password</label>
                        <div class="col-10">
                            <input class="form-control" type="password" value="hunter2" id="example-password-input">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-number-input" class="col-2 col-form-label">Number</label>
                        <div class="col-10">
                            <input class="form-control" type="number" value="42" id="example-number-input">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-datetime-local-input" class="col-2 col-form-label">Date and time</label>
                        <div class="col-10">
                            <input class="form-control" type="datetime-local" value="2011-08-19T13:45:00" id="example-datetime-local-input">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-date-input" class="col-2 col-form-label">Date</label>
                        <div class="col-10">
                            <input class="form-control" type="date" value="2011-08-19" id="example-date-input">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-month-input" class="col-2 col-form-label">Month</label>
                        <div class="col-10">
                            <input class="form-control" type="month" value="2011-08" id="example-month-input">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-week-input" class="col-2 col-form-label">Week</label>
                        <div class="col-10">
                            <input class="form-control" type="week" value="2011-W33" id="example-week-input">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-time-input" class="col-2 col-form-label">Time</label>
                        <div class="col-10">
                            <input class="form-control" type="time" value="13:45:00" id="example-time-input">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-color-input" class="col-2 col-form-label">Color</label>
                        <div class="col-10">
                            <input class="form-control" type="color" value="#563d7c" id="example-color-input">
                        </div>
                    </div>



                    <hr>
                    <form class="form-horizontal mb-2">
                        <div class="form-group has-success">
                            <label class="form-control-label" for="inputSuccess1">Input with success</label>
                            <input type="text" class="form-control form-control-success" id="inputSuccess1">
                            <div class="form-control-feedback">Success! You've done it.</div>
                            <small class="form-text text-muted">Example help text that remains unchanged.</small>
                        </div>
                        <div class="form-group has-warning">
                            <label class="form-control-label" for="inputWarning1">Input with warning</label>
                            <input type="text" class="form-control form-control-warning" id="inputWarning1">
                            <div class="form-control-feedback">Shucks, check the formatting of that and try again.</div>
                            <small class="form-text text-muted">Example help text that remains unchanged.</small>
                        </div>
                        <div class="form-group has-danger">
                            <label class="form-control-label" for="inputDanger1">Input with danger</label>
                            <input type="text" class="form-control form-control-danger" id="inputDanger1">
                            <div class="form-control-feedback">Sorry, that username's taken. Try another?</div>
                            <small class="form-text text-muted">Example help text that remains unchanged.</small>
                        </div>
                        <!--
                    <div class="form-group">
                        <label for="inputPassword" class="col-lg-2 control-label">Password</label>
                        <div class="col-lg-10">
                            <input type="password" class="form-control" id="inputPassword" placeholder="Password">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox">Remember me</label>
                            </div>
                            <button type="submit" class="btn btn-default">Sign in</button>
                        </div>
                    </div>
-->
                    </form>

                    <form class="form-inline mb-2">
                        <label class="sr-only" for="inlineFormInput">Name</label>
                        <input type="text" class="form-control mb-2 mr-sm-2 mb-sm-0" id="inlineFormInput" placeholder="Jane Doe">

                        <label class="sr-only" for="inlineFormInputGroup">Username</label>
                        <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                            <div class="input-group-addon">@</div>
                            <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Username">
                        </div>

                        <div class="form-check mb-2 mr-sm-2 mb-sm-0">
                            <label class="form-check-label">
                                <input class="form-check-input" type="checkbox"> Remember me
                            </label>
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>

                    <form>
                        <div class="form-group row has-success">
                            <label for="inputHorizontalSuccess" class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control form-control-success" id="inputHorizontalSuccess" placeholder="name@example.com">
                                <div class="form-control-feedback">Success! You've done it.</div>
                                <small class="form-text text-muted">Example help text that remains unchanged.</small>
                            </div>
                        </div>
                        <div class="form-group row has-warning">
                            <label for="inputHorizontalWarning" class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control form-control-warning" id="inputHorizontalWarning" placeholder="name@example.com">
                                <div class="form-control-feedback">Shucks, check the formatting of that and try again.</div>
                                <small class="form-text text-muted">Example help text that remains unchanged.</small>
                            </div>
                        </div>
                        <div class="form-group row has-danger">
                            <label for="inputHorizontalDnger" class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control form-control-danger" id="inputHorizontalDnger" placeholder="name@example.com">
                                <div class="form-control-feedback">Sorry, that username's taken. Try another?</div>
                                <small class="form-text text-muted">Example help text that remains unchanged.</small>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card mb-2" id="buttons">
                        <div class="card-block">
                            <h2>Buttons</h2>
                            <!--
                        <div class="panel-heading">Buttons
                        </div>
-->
                            <p>

                                <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
                                <button type="button" class="btn btn-primary">Primary</button>

                                <!-- Secondary, outline button -->
                                <button type="button" class="btn btn-secondary">Secondary</button>

                                <!-- Indicates a successful or positive action -->
                                <button type="button" class="btn btn-success">Success</button>

                                <!-- Contextual button for informational alert messages -->
                                <button type="button" class="btn btn-info">Info</button>

                                <!-- Indicates caution should be taken with this action -->
                                <button type="button" class="btn btn-warning">Warning</button>

                                <!-- Indicates a dangerous or potentially negative action -->
                                <button type="button" class="btn btn-danger">Danger</button>

                                <!-- Deemphasize a button by making it look like a link while maintaining button behavior -->
                                <button type="button" class="btn btn-link">Link</button>
                            </p>

                            <hr>
                            <p>
                                <a class="btn btn-primary" href="#" role="button">Link</a>
                                <button class="btn btn-primary" type="submit">Button</button>
                                <input class="btn btn-primary" type="button" value="Input">
                                <input class="btn btn-primary" type="submit" value="Submit">
                                <input class="btn btn-primary" type="reset" value="Reset">
                            </p>

                            <hr>
                            <p>
                                <button type="button" class="btn btn-outline-primary">Primary</button>
                                <button type="button" class="btn btn-outline-secondary">Secondary</button>
                                <button type="button" class="btn btn-outline-success">Success</button>
                                <button type="button" class="btn btn-outline-info">Info</button>
                                <button type="button" class="btn btn-outline-warning">Warning</button>
                                <button type="button" class="btn btn-outline-danger">Danger</button>
                            </p>

                            <hr>
                            <p>
                                <button type="button" class="btn btn-primary btn-lg">Large button</button>
                                <button type="button" class="btn btn-secondary btn-lg">Large button</button>
                            </p>

                            <hr>
                            <p>
                                <button type="button" class="btn btn-primary btn-sm">Small button</button>
                                <button type="button" class="btn btn-secondary btn-sm">Small button</button>
                            </p>

                            <hr>
                            <p>
                                <button type="button" class="btn btn-primary btn-lg btn-block">Block level button</button>
                                <button type="button" class="btn btn-secondary btn-lg btn-block">Block level button</button>
                            </p>


                        </div>

                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card mb-2" id="images">
                        <div class="card-block">
                            <div class="panel-heading">Images
                            </div>
                            <img src="http://placehold.it/120x100" class="rounded float-left m-1" alt="...">
                            <img src="http://placehold.it/120x100" class="rounded float-left m-1" alt="...">
                            <img src="http://placehold.it/120x100" class="rounded float-left  m-1 img-thumbnail" alt="...">
                        </div>
                    </div>
                </div>
            </div>









            <div class="row">
                <div class="col-lg-12">
                    <div class="card mb-2" id="cards">
                        <div class="card-block">
                            <h2>Cards</h2>

                            <div class="card" style="width: 20rem;">
                                <img class="card-img-top" data-src="holder.js/100px180/" alt="100%x180" style="height: 180px; width: 100%; display: block;" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22318%22%20height%3D%22180%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20318%20180%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_15a8f13ead1%20text%20%7B%20fill%3Argba(255%2C255%2C255%2C.75)%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A16pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_15a8f13ead1%22%3E%3Crect%20width%3D%22318%22%20height%3D%22180%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22118.0859375%22%20y%3D%2297.35%22%3E318x180%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true">
                                <div class="card-block">
                                    <h4 class="card-title">Card title</h4>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>



            <div class="row">
                <div class="col-lg-12">
                    <div class="card mb-2" id="responsive-helpers">
                        <div class="card-block">
                            <h2 class "mb-2">Responsive helpers</h2>
                            <div class="panel-heading mb-2">Responsive embeds</div>

                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe class="embed-responsive-item" src="//www.youtube.com/embed/zpOULjyy-n8?rel=0" allowfullscreen></iframe>
                            </div>

                        </div>

                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="//www.youtube.com/embed/zpOULjyy-n8?rel=0" allowfullscreen></iframe>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="//www.youtube.com/embed/zpOULjyy-n8?rel=0" allowfullscreen></iframe>
                    </div>
                </div>
            </div>




            <div class="row">
                <div class="col-lg-12">
                    <div class="card mb-2" id="sizing">
                        <div class="card-block">
                            <h2>Sizing</h2>

                            <p>
                                <div class="w-25 p-3" style="background-color: #eee;">Width 25%</div>
                                <div class="w-50 p-3" style="background-color: #eee;">Width 50%</div>
                                <div class="w-75 p-3" style="background-color: #eee;">Width 75%</div>
                                <div class="w-100 p-3" style="background-color: #eee;">Width 100%</div>
                            </p>

                            <p>
                                <div style="height: 100px; background-color: rgba(255,0,0,0.1);">
                                    <div class="h-25 d-inline-block" style="width: 120px; background-color: rgba(0,0,255,.1)">Height 25%</div>
                                    <div class="h-50 d-inline-block" style="width: 120px; background-color: rgba(0,0,255,.1)">Height 50%</div>
                                    <div class="h-75 d-inline-block" style="width: 120px; background-color: rgba(0,0,255,.1)">Height 75%</div>
                                    <div class="h-100 d-inline-block" style="width: 120px; background-color: rgba(0,0,255,.1)">Height 100%</div>
                                </div>
                            </p>
                            <p>
                                <div style="height: 100px; background-color: rgba(255,0,0,0.1);">
                                    <div class="mh-100" style="width: 100px; height: 200px; background-color: rgba(0,0,255,0.1);">Max-height 100%</div>
                                </div>
                            </p>
                        </div>

                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="card mb-2" id="image100">
                        <div class="card-block">
                            <h2>Image 100%</h2>
                            <p>
                                <img class="mw-100" src="https://vinosveleta.com/images/header/header1.jpg" alt="Image Max-width 100%">
                            </p>


                        </div>

                    </div>
                </div>
            </div>

            <!--
        <div class="row">
            <div class="col-lg-12">
                <div class="card mb-2" id="buttons">
                    <div class="card-block">
                        <h2>New section</h2>



                    </div>

                </div>
            </div>
        </div>
-->


            <div class="row">
                <div class="col-lg-3">
                    <div class="card mb-2 clearfix" id="dropdowns">
                        <div class="card-block">
                            <div class="panel-heading">Dropdowns
                            </div>
                            <p></p>

                            <div class="dropdown">
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Dropdown button
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </div>
                            </div>


                            <p></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="card mb-2" id="input-groups">
                        <div class="card-block">
                            <div class="panel-heading">Input Groups
                            </div>
                            <p></p>
                            <div class="input-group">
                                <span class="input-group-addon" id="basic-addon1">@</span>
                                <input type="text" class="form-control" placeholder="Username" aria-describedby="basic-addon1">
                            </div>
                            <br>
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Recipient's username" aria-describedby="basic-addon2">
                                <span class="input-group-addon" id="basic-addon2">@example.com</span>
                            </div>
                            <br>
                            <label for="basic-url">Your vanity URL</label>
                            <div class="input-group">
                                <span class="input-group-addon" id="basic-addon3">https://example.com/users/</span>
                                <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3">
                            </div>
                            <br>
                            <div class="input-group">
                                <span class="input-group-addon">$</span>
                                <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                                <span class="input-group-addon">.00</span>
                            </div>
                            <br>
                            <div class="input-group">
                                <span class="input-group-addon">$</span>
                                <span class="input-group-addon">0.00</span>
                                <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                            </div>
                            <p></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card mb-2" id="navs">
                        <div class="card-block">
                            <div class="panel-heading">Navs
                            </div>
                            <p></p>
                            <ul class="nav">
                                <li class="nav-item">
                                    <a class="nav-link active" href="#">Active</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Link</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Link</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link disabled" href="#">Disabled</a>
                                </li>
                            </ul>
                            <p></p>
                            <p></p>
                            <nav class="nav">
                                <a class="nav-link active" href="#">Active</a>
                                <a class="nav-link" href="#">Link</a>
                                <a class="nav-link" href="#">Link</a>
                                <a class="nav-link disabled" href="#">Disabled</a>
                            </nav>
                            <p></p>
                            <p></p>
                            <ul class="nav justify-content-center">
                                <li class="nav-item">
                                    <a class="nav-link active" href="#">Active</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Link</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Link</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link disabled" href="#">Disabled</a>
                                </li>
                            </ul>
                            <p></p>
                            <p></p>
                            <ul class="nav justify-content-end">
                                <li class="nav-item">
                                    <a class="nav-link active" href="#">Active</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Link</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Link</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link disabled" href="#">Disabled</a>
                                </li>
                            </ul>
                            <p></p>
                            <p></p>
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link active" href="#">Active</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Link</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Link</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link disabled" href="#">Disabled</a>
                                </li>
                            </ul>
                            <p></p>
                            <p></p>
                            <ul class="nav nav-tabs">
                                <li class="nav-item">
                                    <a class="nav-link active" href="#">Active</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Link</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Link</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link disabled" href="#">Disabled</a>
                                </li>
                            </ul>
                            <p></p>
                            <p></p>
                            <ul class="nav nav-pills">
                                <li class="nav-item">
                                    <a class="nav-link active" href="#">Active</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Link</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Link</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link disabled" href="#">Disabled</a>
                                </li>
                            </ul>
                            <p></p>
                            <p></p>
                            <ul class="nav nav-pills nav-fill">
                                <li class="nav-item">
                                    <a class="nav-link active" href="#">Active</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Longer nav link</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Link</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link disabled" href="#">Disabled</a>
                                </li <p></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12" id="navbar">
                    <div class="card mb-2">
                        <div class="card-block">
                            <div class="panel-heading">Navbar
                            </div>
                            <p></p>
                            <nav class="navbar mb-2 navbar-toggleable-md navbar-light bg-faded">
                                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                                </button>
                                <a class="navbar-brand" href="#"></a>

                                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                    <ul class="navbar-nav mr-auto">
                                        <li class="nav-item active">
                                            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Link</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link disabled" href="#">Disabled</a>
                                        </li>
                                    </ul>
                                    <form class="form-inline my-2 my-lg-0">
                                        <input class="form-control mr-sm-2" type="text" placeholder="Search">
                                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                                    </form>
                                </div>
                            </nav>
                            <nav class="navbar mb-2 navbar-toggleable-md navbar-inverse bg-inverse">
                                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                                </button>
                                <a class="navbar-brand" href="#"></a>

                                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                    <ul class="navbar-nav mr-auto">
                                        <li class="nav-item active">
                                            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Link</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link disabled" href="#">Disabled</a>
                                        </li>
                                    </ul>
                                    <form class="form-inline my-2 my-lg-0">
                                        <input class="form-control mr-sm-2" type="text" placeholder="Search">
                                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                                    </form>
                                </div>
                            </nav>
                            <nav class="navbar mb-2 navbar-toggleable-md navbar-light" style="background-color: #e3f2fd;">
                                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                                </button>
                                <a class="navbar-brand" href="#"></a>

                                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                    <ul class="navbar-nav mr-auto">
                                        <li class="nav-item active">
                                            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Link</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link disabled" href="#">Disabled</a>
                                        </li>
                                    </ul>
                                    <form class="form-inline my-2 my-lg-0">
                                        <input class="form-control mr-sm-2" type="text" placeholder="Search">
                                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                                    </form>
                                </div>
                            </nav>
                            <p></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="card mb-2" id="pagination">
                        <div class="card-block">
                            <div class="panel-heading">Pagination
                            </div>
                            <nav aria-label="Page navigation example">
                                <ul class="pagination">
                                    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                </ul>
                            </nav>
                            <nav aria-label="Page navigation example">
                                <ul class="pagination">
                                    <li class="page-item">
                                        <a class="page-link" href="#" aria-label="Previous">
                                            <span aria-hidden="true">&laquo;</span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="#" aria-label="Next">
                                            <span aria-hidden="true">&raquo;</span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>

                            <nav aria-label="...">
                                <ul class="pagination">
                                    <li class="page-item disabled">
                                        <a class="page-link" href="#" tabindex="-1">Previous</a>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item active">
                                        <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="#">Next</a>
                                    </li>
                                </ul>
                            </nav>

                            <nav aria-label="...">
                                <ul class="pagination">
                                    <li class="page-item disabled">
                                        <span class="page-link">Previous</span>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item active">
                                        <span class="page-link">
        2
        <span class="sr-only">(current)</span>
                                        </span>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="#">Next</a>
                                    </li>
                                </ul>
                            </nav>

                            <nav aria-label="...">
                                <ul class="pagination pagination-lg">
                                    <li class="page-item disabled">
                                        <a class="page-link" href="#" tabindex="-1">Previous</a>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="#">Next</a>
                                    </li>
                                </ul>
                            </nav>

                            <nav aria-label="...">
                                <ul class="pagination pagination-sm">
                                    <li class="page-item disabled">
                                        <a class="page-link" href="#" tabindex="-1">Previous</a>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="#">Next</a>
                                    </li>
                                </ul>
                            </nav>

                            <nav aria-label="Page navigation example">
                                <ul class="pagination justify-content-center">
                                    <li class="page-item disabled">
                                        <a class="page-link" href="#" tabindex="-1">Previous</a>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="#">Next</a>
                                    </li>
                                </ul>
                            </nav>

                            <nav aria-label="Page navigation example">
                                <ul class="pagination justify-content-end">
                                    <li class="page-item disabled">
                                        <a class="page-link" href="#" tabindex="-1">Previous</a>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="#">Next</a>
                                    </li>
                                </ul>
                            </nav>

                        </div>
                    </div>
                    <div class="card  mb-2" id="labels">
                        <div class="card-block">
                            <div class="panel-heading">Labels and Badges
                            </div>
                            <h3><span class="label">Default</span><span class="label label-success">Success</span><span class="label label-warning">Warning</span><span class="label label-danger">Danger</span><span class="label label-info">Info</span></h3>
                            <p class="lead"><a href="#">Inbox <span class="badge">42</span></a></p>
                        </div>

                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card mb-2" id="alerts">
                        <div class="card-block">
                            <div class="panel-heading">Alerts
                            </div>
                            <div class="mp-2">
                                <div class="alert alert-success" role="alert">
                                    <strong>Well done!</strong> You successfully read this important alert message.
                                </div>
                                <div class="alert alert-info" role="alert">
                                    <strong>Heads up!</strong> This alert needs your attention, but it's not super important.
                                </div>
                                <div class="alert alert-warning" role="alert">
                                    <strong>Warning!</strong> Better check yourself, you're not looking too good.
                                </div>
                                <div class="alert alert-danger" role="alert">
                                    <strong>Oh snap!</strong> Change a few things up and try submitting again.
                                </div>
                            </div>

                            <div class="mp-2">

                                <div class="alert alert-success" role="alert">
                                    <strong>Well done!</strong> You successfully read <a href="#" class="alert-link">this important alert message</a>.
                                </div>
                                <div class="alert alert-info" role="alert">
                                    <strong>Heads up!</strong> This <a href="#" class="alert-link">alert needs your attention</a>, but it's not super important.
                                </div>
                                <div class="alert alert-warning" role="alert">
                                    <strong>Warning!</strong> Better check yourself, you're <a href="#" class="alert-link">not looking too good</a>.
                                </div>
                                <div class="alert alert-danger" role="alert">
                                    <strong>Oh snap!</strong> <a href="#" class="alert-link">Change a few things up</a> and try submitting again.
                                </div>
                            </div>

                            <div class="mp-2">
                                <div class="alert alert-success" role="alert">
                                    <h4 class="alert-heading">Well done!</h4>
                                    <p>Aww yeah, you successfully read this important alert message. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.</p>
                                    <p class="mb-0">Whenever you need to, be sure to use margin utilities to keep things nice and tidy.</p>
                                </div>
                            </div>
                            <div class="mp-2">
                                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    <strong>Holy guacamole!</strong> You should check in on some of those fields below.
                                </div>
                            </div>


                        </div>

                    </div>
                </div>
            </div>
            <div class="row">
                <!--
                <div class="col-lg-6">
                  <div class="panel panel-default" id="progress">
                    <div class="panel-heading">Progress Bars
                    </div>
                    <div class="progress">
                      <div class="progress-bar progress-bar-info" style="width: 20%"></div>
                    </div>
                    <div class="progress progress-striped active">
                      <div class="progress-bar progress-bar-success"></div>
                    </div>
                    <div class="progress">
                      <div class="progress-bar progress-bar-warning" style="width: 60%"></div>
                    </div>
                    <div class="progress">
                      <div class="progress-bar progress-bar-danger" style="width: 80%"></div>
                    </div>
                  </div>
                </div>
-->
                <!--
            <div class="col-lg-12">
                <div class="card mb-2" id="media-object">
                    <div class="card-block">

                        <div class="panel-heading">Media Object
                        </div>
                        <p></p>
                        <div class="media">
                            <img class="d-flex mr-3" src="..." alt="Generic placeholder image">
                            <div class="media-body">
                                <h5 class="mt-0">Media heading</h5> Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.

                                <div class="media mt-3">
                                    <a class="d-flex pr-3" href="#">
                                        <img src="..." alt="Generic placeholder image">
                                    </a>
                                    <div class="media-body">
                                        <h5 class="mt-0">Media heading</h5> Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
-->
            </div>
            <div class="card mb-2" id="list-groups">
                <div class="card-block">
                    <div class="panel-heading">List Groups
                    </div>
                    <div class="row">
                        <div class="col-lg-4">
                            <ul class="list-group mb-2">
                                <li class="list-group-item">Cras justo odio</li>
                                <li class="list-group-item">Dapibus ac facilisis in</li>
                                <li class="list-group-item">Morbi leo risus</li>
                                <li class="list-group-item">Porta ac consectetur ac</li>
                                <li class="list-group-item">Vestibulum at eros</li>
                            </ul>
                        </div>
                        <div class="col-lg-4">
                            <ul class="list-group mb-2">
                                <li class="list-group-item active">Cras justo odio</li>
                                <li class="list-group-item">Dapibus ac facilisis in</li>
                                <li class="list-group-item">Morbi leo risus</li>
                                <li class="list-group-item">Porta ac consectetur ac</li>
                                <li class="list-group-item">Vestibulum at eros</li>
                            </ul>
                        </div>
                        <div class="col-lg-4">
                            <ul class="list-group mb-2">
                                <li class="list-group-item">Dapibus ac facilisis in</li>
                                <li class="list-group-item list-group-item-success">Dapibus ac facilisis in</li>
                                <li class="list-group-item list-group-item-info">Cras sit amet nibh libero</li>
                                <li class="list-group-item list-group-item-warning">Porta ac consectetur ac</li>
                                <li class="list-group-item list-group-item-danger">Vestibulum at eros</li>
                            </ul>
                        </div>
                        <div class="col-lg-4">
                            <ul class="list-group mb-2">
                                <li class="list-group-item justify-content-between">
                                    Cras justo odio
                                    <span class="badge badge-default badge-pill">14</span>
                                </li>
                                <li class="list-group-item justify-content-between">
                                    Dapibus ac facilisis in
                                    <span class="badge badge-default badge-pill">2</span>
                                </li>
                                <li class="list-group-item justify-content-between">
                                    Morbi leo risus
                                    <span class="badge badge-default badge-pill">1</span>
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-4">
                            <div class="list-group mb-2">
                                <a href="#" class="list-group-item list-group-item-action flex-column align-items-start active">
                                    <div class="d-flex w-100 justify-content-between">
                                        <h5 class="mb-1">List group item heading</h5>
                                        <small>3 days ago</small>
                                    </div>
                                    <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
                                    <small>Donec id elit non mi porta.</small>
                                </a>
                                <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
                                    <div class="d-flex w-100 justify-content-between">
                                        <h5 class="mb-1">List group item heading</h5>
                                        <small class="text-muted">3 days ago</small>
                                    </div>
                                    <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
                                    <small class="text-muted">Donec id elit non mi porta.</small>
                                </a>
                                <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
                                    <div class="d-flex w-100 justify-content-between">
                                        <h5 class="mb-1">List group item heading</h5>
                                        <small class="text-muted">3 days ago</small>
                                    </div>
                                    <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
                                    <small class="text-muted">Donec id elit non mi porta.</small>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>





            <div class="card mb-2" id="ionicons">
                <div class="card-block">
                    <h2 class="mb-2">Ionicons</h2>


                    <ul class="row">
                        <li class="col-md-1 ion-ionic" data-pack="default" data-tags="badass, framework, sexy, hawt" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-arrow-up-a" data-pack="default" data-tags="" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-arrow-right-a" data-pack="default" data-tags="" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-arrow-down-a" data-pack="default" data-tags="" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-arrow-left-a" data-pack="default" data-tags="" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-arrow-up-b" data-pack="default" data-tags="" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-arrow-right-b" data-pack="default" data-tags="" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-arrow-down-b" data-pack="default" data-tags="" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-arrow-left-b" data-pack="default" data-tags="" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-arrow-up-c" data-pack="default" data-tags="" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-arrow-right-c" data-pack="default" data-tags="" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-arrow-down-c" data-pack="default" data-tags="" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-arrow-left-c" data-pack="default" data-tags="" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-arrow-return-right" data-pack="default" data-tags="" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-arrow-return-left" data-pack="default" data-tags="" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-arrow-swap" data-pack="default" data-tags="switch, flip" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-arrow-shrink" data-pack="default" data-tags="pinch" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-arrow-expand" data-pack="default" data-tags="fullscreen" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-arrow-move" data-pack="default" data-tags="drag" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-arrow-resize" data-pack="default" data-tags="drag" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-chevron-up" data-pack="default" data-tags="arrow, up" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-chevron-right" data-pack="default" data-tags="arrow, right" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-chevron-down" data-pack="default" data-tags="arrow, down" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-chevron-left" data-pack="default" data-tags="arrow, left" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-navicon-round" data-pack="default" data-tags="menu, hamburger, slide menu" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-navicon" data-pack="default" data-tags="menu, hamburger, slide menu" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-drag" data-pack="default" data-tags="reorder, move, drag" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-log-in" data-pack="default" data-tags="sign in, " style="display: inline-block;"></li>
                        <li class="col-md-1 ion-log-out" data-pack="default" data-tags="sign out" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-checkmark-round" data-pack="default" data-tags="complete, finished, success, on" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-checkmark" data-pack="default" data-tags="complete, finished, success, on" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-checkmark-circled" data-pack="default" data-tags="complete, finished, success, on" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-close-round" data-pack="default" data-tags="delete, trash, kill, x" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-close" data-pack="default" data-tags="delete, trash, kill, x" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-close-circled" data-pack="default" data-tags="delete, trash, kill, x" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-plus-round" data-pack="default" data-tags="add, include, new, invite, +" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-plus" data-pack="default" data-tags="add, include, new, invite, +" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-plus-circled" data-pack="default" data-tags="add, include, new, invite, +" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-minus-round" data-pack="default" data-tags="hide, remove, minimize, -" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-minus" data-pack="default" data-tags="hide, remove, minimize, -" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-minus-circled" data-pack="default" data-tags="hide, remove, minimize, -" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-information" data-pack="default" data-tags="help, more, tooltip" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-information-circled" data-pack="default" data-tags="help, more, tooltip" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-help" data-pack="default" data-tags="question, ?" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-help-circled" data-pack="default" data-tags="question, ?" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-backspace-outline" data-pack="default" data-tags="delete, remove, back" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-backspace" data-pack="default" data-tags="delete, remove, back" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-help-buoy" data-pack="default" data-tags="question, ?" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-asterisk" data-pack="default" data-tags="favorite, mark, star" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-alert" data-pack="default" data-tags="attention, warning, notice, !, exclamation" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-alert-circled" data-pack="default" data-tags="attention, warning, notice, !, exclamation" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-refresh" data-pack="default" data-tags="reload, renew" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-loop" data-pack="default" data-tags="refresh" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-shuffle" data-pack="default" data-tags="random" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-home" data-pack="default" data-tags="house" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-search" data-pack="default" data-tags="magnifying glass" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-flag" data-pack="default" data-tags="favorite, mark, star" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-star" data-pack="default" data-tags="favorite" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-heart" data-pack="default" data-tags="love" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-heart-broken" data-pack="default" data-tags="love" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-gear-a" data-pack="default" data-tags="settings, options, cog" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-gear-b" data-pack="default" data-tags="settings, options, cog" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-toggle-filled" data-pack="default" data-tags="settings, options, switch" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-toggle" data-pack="default" data-tags="settings, options, switch" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-settings" data-pack="default" data-tags="options, tools" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-wrench" data-pack="default" data-tags="settings, options, tools" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-hammer" data-pack="default" data-tags="settings, options, tools" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-edit" data-pack="default" data-tags="change, update, write, type, pencil" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-trash-a" data-pack="default" data-tags="delete, remove, dump" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-trash-b" data-pack="default" data-tags="delete, remove, dump" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-document" data-pack="default" data-tags="paper, file" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-document-text" data-pack="default" data-tags="paper, file" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-clipboard" data-pack="default" data-tags="write" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-scissors" data-pack="default" data-tags="cut" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-funnel" data-pack="default" data-tags="sort" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-bookmark" data-pack="default" data-tags="favorite, tag, save" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-email" data-pack="default" data-tags="snail, mail, inbox" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-email-unread" data-pack="default" data-tags="snail, mail, inbox" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-folder" data-pack="default" data-tags="snail, mail" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-filing" data-pack="default" data-tags="mail" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-archive" data-pack="default" data-tags="mail" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-reply" data-pack="default" data-tags="mail, undo" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-reply-all" data-pack="default" data-tags="mail" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-forward" data-pack="default" data-tags="mail, redo" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-share" data-pack="default" data-tags="outbound" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-paper-airplane" data-pack="default" data-tags="outbound, mail, letter, send" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-link" data-pack="default" data-tags="chain, anchor, href, attach" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-paperclip" data-pack="default" data-tags="attach" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-compose" data-pack="default" data-tags="write, compose, type" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-briefcase" data-pack="default" data-tags="store, organize" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-medkit" data-pack="default" data-tags="health" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-at" data-pack="default" data-tags="@" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-pound" data-pack="default" data-tags="hashtag, #" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-quote" data-pack="default" data-tags="chat, quotation" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-cloud" data-pack="default" data-tags="storage" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-upload" data-pack="default" data-tags="storage, cloud" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-more" data-pack="default" data-tags="circles" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-grid" data-pack="default" data-tags="menu" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-calendar" data-pack="default" data-tags="date, time, month, year" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-clock" data-pack="default" data-tags="time, watch, hours, minutes, seconds" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-compass" data-pack="default" data-tags="location, directions, navigation" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-pinpoint" data-pack="default" data-tags="gps, navigation" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-pin" data-pack="default" data-tags="gps, navigation" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-navigate" data-pack="default" data-tags="gps, location pin" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-location" data-pack="default" data-tags="gps, navigation, pin" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-map" data-pack="default" data-tags="gps, navigation, pin" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-lock-combination" data-pack="default" data-tags="padlock, security" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-locked" data-pack="default" data-tags="padlock, security" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-unlocked" data-pack="default" data-tags="padlock, security" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-key" data-pack="default" data-tags="access" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-arrow-graph-up-right" data-pack="default" data-tags="stats" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-arrow-graph-down-right" data-pack="default" data-tags="stats" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-arrow-graph-up-left" data-pack="default" data-tags="stats" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-arrow-graph-down-left" data-pack="default" data-tags="stats" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-stats-bars" data-pack="default" data-tags="data" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-connection-bars" data-pack="default" data-tags="data, stats" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-pie-graph" data-pack="default" data-tags="stats" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-chatbubble" data-pack="default" data-tags="talk" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-chatbubble-working" data-pack="default" data-tags="talk" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-chatbubbles" data-pack="default" data-tags="talk" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-chatbox" data-pack="default" data-tags="talk" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-chatbox-working" data-pack="default" data-tags="talk" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-chatboxes" data-pack="default" data-tags="talk" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-person" data-pack="default" data-tags="users, staff, head, human" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-person-add" data-pack="default" data-tags="users, staff, head, human, member, new" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-person-stalker" data-pack="default" data-tags="people, human, users, staff" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-woman" data-pack="default" data-tags="female, lady, girl, dudette" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-man" data-pack="default" data-tags="male, guy, boy, dude" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-female" data-pack="default" data-tags="lady, girl, dudette" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-male" data-pack="default" data-tags="male, guy, boy, dude" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-transgender" data-pack="default" data-tags="" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-fork" data-pack="default" data-tags="food, drink, eat" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-knife" data-pack="default" data-tags="food, drink, eat" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-spoon" data-pack="default" data-tags="food, drink, eat" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-soup-can-outline" data-pack="default" data-tags="food, drink, eat" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-soup-can" data-pack="default" data-tags="food, drink, eat" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-beer" data-pack="default" data-tags="food, drink, eat" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-wineglass" data-pack="default" data-tags="food, drink, eat" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-coffee" data-pack="default" data-tags="food, drink, eat, caffeine" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-icecream" data-pack="default" data-tags="food, drink, eat" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-pizza" data-pack="default" data-tags="food, drink, eat" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-power" data-pack="default" data-tags="on, off" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-mouse" data-pack="default" data-tags="computer" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-battery-full" data-pack="default" data-tags="" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-battery-half" data-pack="default" data-tags="" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-battery-low" data-pack="default" data-tags="" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-battery-empty" data-pack="default" data-tags="" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-battery-charging" data-pack="default" data-tags="" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-wifi" data-pack="default" data-tags="internet, connection" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-bluetooth" data-pack="default" data-tags="connection, cloud" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-calculator" data-pack="default" data-tags="math, arithmatic, numbers, addition, subtraction" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-camera" data-pack="default" data-tags="photo" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-eye" data-pack="default" data-tags="view, see, creeper" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-eye-disabled" data-pack="default" data-tags="view, see, creeper" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-flash" data-pack="default" data-tags="lightning, weather, whether" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-flash-off" data-pack="default" data-tags="" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-qr-scanner" data-pack="default" data-tags="reader" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-image" data-pack="default" data-tags="photo" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-images" data-pack="default" data-tags="photo" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-wand" data-pack="default" data-tags="images, levels, light, dark, settings" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-contrast" data-pack="default" data-tags="images, levels, light, dark, settings" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-aperture" data-pack="default" data-tags="images, levels, light, dark, settings" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-crop" data-pack="default" data-tags="images, levels, light, dark, settings" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-easel" data-pack="default" data-tags="images, art, create, color" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-paintbrush" data-pack="default" data-tags="images, art, create, color" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-paintbucket" data-pack="default" data-tags="images, art, create, color" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-monitor" data-pack="default" data-tags="thunderbolt, screen" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-laptop" data-pack="default" data-tags="macbook, apple, osx" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-ipad" data-pack="default" data-tags="tablet, mobile, apple, retina, device" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-iphone" data-pack="default" data-tags="smartphone, mobile, apple, retina, device" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-ipod" data-pack="default" data-tags="music, player, apple, retina, device" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-printer" data-pack="default" data-tags="paper" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-usb" data-pack="default" data-tags="digital, computer" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-outlet" data-pack="default" data-tags="digital, computer, electricity" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-bug" data-pack="default" data-tags="develop, program, hacker, error" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-code" data-pack="default" data-tags="develop, program, hacker" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-code-working" data-pack="default" data-tags="develop, program, hacker" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-code-download" data-pack="default" data-tags="develop, program, hacker" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-fork-repo" data-pack="default" data-tags="develop, program, hacker, github" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-network" data-pack="default" data-tags="develop, program, hacker, github" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-pull-request" data-pack="default" data-tags="develop, program, hacker, github" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-merge" data-pack="default" data-tags="develop, program, hacker, github" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-xbox" data-pack="default" data-tags="fun, games" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-playstation" data-pack="default" data-tags="fun, games" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-steam" data-pack="default" data-tags="fun, games" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-closed-captioning" data-pack="default" data-tags="movie, film, television" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-videocamera" data-pack="default" data-tags="movie, film, television" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-film-marker" data-pack="default" data-tags="film, cut, action" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-disc" data-pack="default" data-tags="cd, vinyl" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-headphone" data-pack="default" data-tags="music, earbuds, beats" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-music-note" data-pack="default" data-tags="songs" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-radio-waves" data-pack="default" data-tags="music, sound, speaker" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-speakerphone" data-pack="default" data-tags="sound, speaker, loud, amplify" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-mic-a" data-pack="default" data-tags="sound, talk, speaker" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-mic-b" data-pack="default" data-tags="sound, talk, speaker" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-mic-c" data-pack="default" data-tags="sound, talk, speaker" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-volume-high" data-pack="default" data-tags="sound, noise" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-volume-medium" data-pack="default" data-tags="sound" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-volume-low" data-pack="default" data-tags="sound" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-volume-mute" data-pack="default" data-tags="sound" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-levels" data-pack="default" data-tags="options, toggles, sound, mixer" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-play" data-pack="default" data-tags="music, watch, arrow, right" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-pause" data-pack="default" data-tags="music, break, hold, freeze" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-stop" data-pack="default" data-tags="music, square, hold, freeze" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-record" data-pack="default" data-tags="music, circle" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-skip-forward" data-pack="default" data-tags="music, next" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-skip-backward" data-pack="default" data-tags="music, previous" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-eject" data-pack="default" data-tags="music, dvd, remove" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-bag" data-pack="default" data-tags="shopping, price, cart, money, container, $" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-card" data-pack="default" data-tags="credit, price, debit, money, shopping, cash, dollars, $" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-cash" data-pack="default" data-tags="credit, price, debit, money, shopping, dollars, $" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-pricetag" data-pack="default" data-tags="credit, debit, money, shopping, cash, dollars, $" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-pricetags" data-pack="default" data-tags="credit, debit, money, shopping, cash, dollars, $" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-thumbsup" data-pack="default" data-tags="like, fun, yes" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-thumbsdown" data-pack="default" data-tags="dislike, boring, no" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-happy-outline" data-pack="default" data-tags="good, like, fun, yes" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-happy" data-pack="default" data-tags="good, like, fun, yes" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-sad-outline" data-pack="default" data-tags="cry, bad, no" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-sad" data-pack="default" data-tags="cry, bad, no" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-bowtie" data-pack="default" data-tags="tie, shirt, dress, clothing" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-tshirt-outline" data-pack="default" data-tags="tie, shirt, dress, clothing" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-tshirt" data-pack="default" data-tags="tie, shirt, dress, clothing" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-trophy" data-pack="default" data-tags="competition, compete, win, lose, award" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-podium" data-pack="default" data-tags="competition, compete, win, lose, award" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-ribbon-a" data-pack="default" data-tags="competition, compete, win, lose, award, trophy" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-ribbon-b" data-pack="default" data-tags="competition, compete, win, lose, award, trophy" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-university" data-pack="default" data-tags="graduate, education, school, tassle" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-magnet" data-pack="default" data-tags="sticky, attraction" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-beaker" data-pack="default" data-tags="mixture, potion, flask" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-erlenmeyer-flask" data-pack="default" data-tags="mixture, potion, beaker, potion" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-egg" data-pack="default" data-tags="birth, twitter, bird, baby" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-earth" data-pack="default" data-tags="nature, globe, home, planet" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-planet" data-pack="default" data-tags="nature, globe, home, planet, space" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-lightbulb" data-pack="default" data-tags="idea, new, aha!" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-cube" data-pack="default" data-tags="box, square, container" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-leaf" data-pack="default" data-tags="green, recycle, plant, nature" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-waterdrop" data-pack="default" data-tags="nature, clean, recycle, fresh, wet, rain" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-flame" data-pack="default" data-tags="fire, hot, heat" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-fireball" data-pack="default" data-tags="hot, heat" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-bonfire" data-pack="default" data-tags="hot, heat" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-umbrella" data-pack="default" data-tags="wet, rain, dry, shelter" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-nuclear" data-pack="default" data-tags="danger, warning, hazard" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-no-smoking" data-pack="default" data-tags="danger, warning, cigarette, cancer" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-thermometer" data-pack="default" data-tags="hot, cold, heat, temperature, mercury" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-speedometer" data-pack="default" data-tags="travel, accelerate" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-model-s" data-pack="default" data-tags="navigation, car, drive, transportation, tesla, sexy" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-plane" data-pack="default" data-tags="fly, jet" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-jet" data-pack="default" data-tags="fly, plane" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-load-a" data-pack="default" data-tags="spinner, waiting, refresh" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-load-b" data-pack="default" data-tags="spinner, waiting, refresh" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-load-c" data-pack="default" data-tags="spinner, waiting, refresh" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-load-d" data-pack="default" data-tags="spinner, waiting, refresh" style="display: inline-block;"></li>


                        <p>
                            <!-- end default icons pack -->
                        </p>


                        <li class="col-md-1 ion-ios-ionic-outline" data-pack="ios" data-tags="badass, framework, sexy" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-ios-arrow-back" data-pack="ios" data-tags="chevron, left" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-ios-arrow-forward" data-pack="ios" data-tags="chevron, right" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-ios-arrow-up" data-pack="ios" data-tags="chevron" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-ios-arrow-right" data-pack="ios" data-tags="chevron" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-ios-arrow-down" data-pack="ios" data-tags="chevron" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-ios-arrow-left" data-pack="ios" data-tags="chevron" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-ios-arrow-thin-up" data-pack="ios" data-tags="chevron" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-ios-arrow-thin-right" data-pack="ios" data-tags="chevron" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-ios-arrow-thin-down" data-pack="ios" data-tags="chevron" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-ios-arrow-thin-left" data-pack="ios" data-tags="chevron" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-ios-circle-filled" data-pack="ios" data-tags="checkmark, radio, dot, on, selected, button" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-ios-circle-outline" data-pack="ios" data-tags="checkmark, radio, dot, off, button" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-ios-checkmark-empty" data-pack="ios" data-tags="success, confirmed, on, finished, complete" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-ios-checkmark-outline" data-pack="ios" data-tags="success, confirmed, on, finished, complete" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-ios-checkmark" data-pack="ios" data-tags="success, confirmed, on, finished, complete" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-ios-plus-empty" data-pack="ios" data-tags="add, include, new, invite, +" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-ios-plus-outline" data-pack="ios" data-tags="add, include, new, invite, +" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-ios-plus" data-pack="ios" data-tags="add, include, new, invite, +" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-ios-close-empty" data-pack="ios" data-tags="delete, remove, trash, end, stop, x" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-ios-close-outline" data-pack="ios" data-tags="delete, remove, trash, end, stop, x" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-ios-close" data-pack="ios" data-tags="delete, remove, trash, end, stop, x" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-ios-minus-empty" data-pack="ios" data-tags="hide, remove, minimize, -" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-ios-minus-outline" data-pack="ios" data-tags="hide, remove, minimize, -" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-ios-minus" data-pack="ios" data-tags="hide, remove, minimize, -" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-ios-information-empty" data-pack="ios" data-tags="help, question" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-ios-information-outline" data-pack="ios" data-tags="help, question" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-ios-information" data-pack="ios" data-tags="help, question" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-ios-help-empty" data-pack="ios" data-tags="question, information, ?" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-ios-help-outline" data-pack="ios" data-tags="question, information, ?" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-ios-help" data-pack="ios" data-tags="question, information, ?" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-ios-search" data-pack="ios" data-tags="find, seek, look, magnifying glass" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-ios-search-strong" data-pack="ios" data-tags="find, seek, look, magnifying glass" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-ios-star" data-pack="ios" data-tags="favorite, rate" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-ios-star-half" data-pack="ios" data-tags="favorite, rate" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-ios-star-outline" data-pack="ios" data-tags="favorite, rate" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-ios-heart" data-pack="ios" data-tags="love" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-ios-heart-outline" data-pack="ios" data-tags="love" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-ios-more" data-pack="ios" data-tags="menu" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-ios-more-outline" data-pack="ios" data-tags="menu" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-ios-home" data-pack="ios" data-tags="house" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-ios-home-outline" data-pack="ios" data-tags="house" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-ios-cloud" data-pack="ios" data-tags="storage, weather, whether" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-ios-cloud-outline" data-pack="ios" data-tags="storage, weather, whether" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-ios-cloud-upload" data-pack="ios" data-tags="storage" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-ios-cloud-upload-outline" data-pack="ios" data-tags="storage" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-ios-cloud-download" data-pack="ios" data-tags="storage" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-ios-cloud-download-outline" data-pack="ios" data-tags="storage" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-ios-upload" data-pack="ios" data-tags="share, import" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-ios-upload-outline" data-pack="ios" data-tags="share, import" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-ios-download" data-pack="ios" data-tags="save, export" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-ios-download-outline" data-pack="ios" data-tags="save, export" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-ios-refresh" data-pack="ios" data-tags="reload, renew, reset" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-ios-refresh-outline" data-pack="ios" data-tags="reload, renew, reset" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-ios-refresh-empty" data-pack="ios" data-tags="reload, renew" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-ios-reload" data-pack="ios" data-tags="renew, reset" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-ios-loop-strong" data-pack="ios" data-tags="reload, renew, reset" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-ios-loop" data-pack="ios" data-tags="reload, renew, reset" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-ios-bookmarks" data-pack="ios" data-tags="favorite" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-ios-bookmarks-outline" data-pack="ios" data-tags="favorite" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-ios-book" data-pack="ios" data-tags="favorite, read, literature" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-ios-book-outline" data-pack="ios" data-tags="favorite, read, literature" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-ios-flag" data-pack="ios" data-tags="marker, favorite" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-ios-flag-outline" data-pack="ios" data-tags="marker, favorite" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-ios-glasses" data-pack="ios" data-tags="steve, reading, look, see" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-ios-glasses-outline" data-pack="ios" data-tags="steve, reading, look, see" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-ios-browsers" data-pack="ios" data-tags="square" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-ios-browsers-outline" data-pack="ios" data-tags="square" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-ios-at" data-pack="ios" data-tags="@" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-ios-at-outline" data-pack="ios" data-tags="@" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-ios-pricetag" data-pack="ios" data-tags="shopping, money, items, commerce, $" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-ios-pricetag-outline" data-pack="ios" data-tags="shopping, money, items, commerce, $" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-ios-pricetags" data-pack="ios" data-tags="shopping, money, items, commerce, $" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-ios-pricetags-outline" data-pack="ios" data-tags="shopping, money, items, commerce, $" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-ios-cart" data-pack="ios" data-tags="shopping, money, items, commerce, $" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-ios-cart-outline" data-pack="ios" data-tags="shopping, money, items, commerce, $" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-ios-chatboxes" data-pack="ios" data-tags="talk" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-ios-chatboxes-outline" data-pack="ios" data-tags="talk" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-ios-chatbubble" data-pack="ios" data-tags="talk" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-ios-chatbubble-outline" data-pack="ios" data-tags="talk" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-ios-cog" data-pack="ios" data-tags="settings, gear, options" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-ios-cog-outline" data-pack="ios" data-tags="settings, gear, options" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-ios-gear" data-pack="ios" data-tags="cog, settings, options" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-ios-gear-outline" data-pack="ios" data-tags="cog, settings, options" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-ios-settings" data-pack="ios" data-tags="cog, settings, options" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-ios-settings-strong" data-pack="ios" data-tags="cog, settings, options" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-ios-toggle" data-pack="ios" data-tags="settings, options, switch" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-ios-toggle-outline" data-pack="ios" data-tags="settings, options, switch" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-ios-analytics" data-pack="ios" data-tags="metrics, track, data" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-ios-analytics-outline" data-pack="ios" data-tags="metrics, track, data" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-ios-pie" data-pack="ios" data-tags="cog, settings, options" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-ios-pie-outline" data-pack="ios" data-tags="cog, settings, options" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-ios-pulse" data-pack="ios" data-tags="live, hot, rate" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-ios-pulse-strong" data-pack="ios" data-tags="live, hot, rate" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-ios-filing" data-pack="ios" data-tags="archive" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-ios-filing-outline" data-pack="ios" data-tags="archive" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-ios-box" data-pack="ios" data-tags="archive" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-ios-box-outline" data-pack="ios" data-tags="archive" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-ios-compose" data-pack="ios" data-tags="write, type, create" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-ios-compose-outline" data-pack="ios" data-tags="write, type, create" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-ios-trash" data-pack="ios" data-tags="delete, remove, dispose, waste, basket, dump, kill" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-ios-trash-outline" data-pack="ios" data-tags="delete, remove, dispose, waste, basket, dump, kill" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-ios-copy" data-pack="ios" data-tags="duplicate, paper" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-ios-copy-outline" data-pack="ios" data-tags="duplicate, paper" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-ios-email" data-pack="ios" data-tags="snail, mail" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-ios-email-outline" data-pack="ios" data-tags="snail, mail" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-ios-undo" data-pack="ios" data-tags="reply" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-ios-undo-outline" data-pack="ios" data-tags="reply" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-ios-redo" data-pack="ios" data-tags="forward" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-ios-redo-outline" data-pack="ios" data-tags="forward" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-ios-paperplane" data-pack="ios" data-tags="send" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-ios-paperplane-outline" data-pack="ios" data-tags="send" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-ios-folder" data-pack="ios" data-tags="file" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-ios-folder-outline" data-pack="ios" data-tags="file" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-ios-paper" data-pack="ios" data-tags="feed, paper" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-ios-paper-outline" data-pack="ios" data-tags="feed, paper" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-ios-list" data-pack="ios" data-tags="todo, feed, paper" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-ios-list-outline" data-pack="ios" data-tags="todo, feed, paper" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-ios-world" data-pack="ios" data-tags="globe, earth" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-ios-world-outline" data-pack="ios" data-tags="globe, earth" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-ios-alarm" data-pack="ios" data-tags="wake, ring" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-ios-alarm-outline" data-pack="ios" data-tags="wake, ring" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-ios-speedometer" data-pack="ios" data-tags="speed, drive, level" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-ios-speedometer-outline" data-pack="ios" data-tags="speed, drive, level" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-ios-stopwatch" data-pack="ios" data-tags="time, speed" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-ios-stopwatch-outline" data-pack="ios" data-tags="time, speed" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-ios-timer" data-pack="ios" data-tags="cooking, alarm, buzz" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-ios-timer-outline" data-pack="ios" data-tags="cooking, alarm, buzz" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-ios-clock" data-pack="ios" data-tags="time, date, hours, minutes, seconds, watch" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-ios-clock-outline" data-pack="ios" data-tags="time, date, hours, minutes, seconds, watch" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-ios-time" data-pack="ios" data-tags="clock, watch, hour, minute, second" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-ios-time-outline" data-pack="ios" data-tags="clock, watch, hour, minute, second" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-ios-calendar" data-pack="ios" data-tags="date, time, month, year" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-ios-calendar-outline" data-pack="ios" data-tags="date, time, month, year" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-ios-photos" data-pack="ios" data-tags="images, stills, square" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-ios-photos-outline" data-pack="ios" data-tags="images, stills, square" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-ios-albums" data-pack="ios" data-tags="square, boxes, slides" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-ios-albums-outline" data-pack="ios" data-tags="square, boxes, slides" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-ios-camera" data-pack="ios" data-tags="picture" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-ios-camera-outline" data-pack="ios" data-tags="picture" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-ios-reverse-camera" data-pack="ios" data-tags="picture" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-ios-reverse-camera-outline" data-pack="ios" data-tags="picture" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-ios-eye" data-pack="ios" data-tags="view, see, exposed, look" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-ios-eye-outline" data-pack="ios" data-tags="view, see, exposed, look" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-ios-bolt" data-pack="ios" data-tags="flash, lightning" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-ios-bolt-outline" data-pack="ios" data-tags="flash, lightning" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-ios-color-wand" data-pack="ios" data-tags="camera, picture, edit, magic" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-ios-color-wand-outline" data-pack="ios" data-tags="camera, picture, edit, magic" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-ios-color-filter" data-pack="ios" data-tags="camera, picture" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-ios-color-filter-outline" data-pack="ios" data-tags="camera, picture" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-ios-grid-view" data-pack="ios" data-tags="camera, picture" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-ios-grid-view-outline" data-pack="ios" data-tags="camera, picture" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-ios-crop-strong" data-pack="ios" data-tags="camera, picture, edit" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-ios-crop" data-pack="ios" data-tags="camera, picture, edit" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-ios-barcode" data-pack="ios" data-tags="reader, camera" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-ios-barcode-outline" data-pack="ios" data-tags="reader, camera" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-ios-briefcase" data-pack="ios" data-tags="organize, folder" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-ios-briefcase-outline" data-pack="ios" data-tags="organize, folder" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-ios-medkit" data-pack="ios" data-tags="health, case, first aid, sick, disease" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-ios-medkit-outline" data-pack="ios" data-tags="health, case, first aid, sick, disease" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-ios-medical" data-pack="ios" data-tags="health, case, first aid, sick, disease" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-ios-medical-outline" data-pack="ios" data-tags="health, case, first aid, sick, disease" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-ios-infinite" data-pack="ios" data-tags="forever, loop" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-ios-infinite-outline" data-pack="ios" data-tags="forever, loop" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-ios-calculator" data-pack="ios" data-tags="math, arithmatic" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-ios-calculator-outline" data-pack="ios" data-tags="math, arithmatic" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-ios-keypad" data-pack="ios" data-tags="type, grid, circle" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-ios-keypad-outline" data-pack="ios" data-tags="type, grid, circle" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-ios-telephone" data-pack="ios" data-tags="oldschool, call" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-ios-telephone-outline" data-pack="ios" data-tags="oldschool, call" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-ios-drag" data-pack="ios" data-tags="reorder, move, drag" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-ios-location" data-pack="ios" data-tags="navigation, map, gps, pin" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-ios-location-outline" data-pack="ios" data-tags="navigation, map, gps, pin" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-ios-navigate" data-pack="ios" data-tags="location, map, gps, pin" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-ios-navigate-outline" data-pack="ios" data-tags="location, map, gps, pin" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-ios-locked" data-pack="ios" data-tags="security, padlock, safe" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-ios-locked-outline" data-pack="ios" data-tags="security, padlock, safe" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-ios-unlocked" data-pack="ios" data-tags="security, padlock, safe" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-ios-unlocked-outline" data-pack="ios" data-tags="security, padlock, safe" style="display: inline-block;"></li>
                        <li class="col-md-1 col-md-1 ion-ios-monitor" data-pack="ios" data-tags="thunderbolt, display, screen" style="display: inline-block;"></li>
                        <li class="col-md-1 col-md-1 ion-ios-monitor-outline" data-pack="ios" data-tags="thunderbolt, display, screen" style="display: inline-block;"></li>
                        <li class="col-md-1 col-md-1 ion-ios-printer" data-pack="ios" data-tags="paper" style="display: inline-block;"></li>
                        <li class="col-md-1 col-md-1 ion-ios-printer-outline" data-pack="ios" data-tags="paper" style="display: inline-block;"></li>
                        <li class="col-md-1 col-md-1 ion-ios-game-controller-a" data-pack="ios" data-tags="gaming, nintendo, play" style="display: inline-block;"></li>
                        <li class="col-md-1 col-md-1 ion-ios-game-controller-a-outline" data-pack="ios" data-tags="gaming, nintendo, play" style="display: inline-block;"></li>
                        <li class="col-md-1 col-md-1 ion-ios-game-controller-b" data-pack="ios" data-tags="gaming, nintendo, play" style="display: inline-block;"></li>
                        <li class="col-md-1 col-md-1 ion-ios-game-controller-b-outline" data-pack="ios" data-tags="gaming, nintendo, play" style="display: inline-block;"></li>
                        <li class="col-md-1 col-md-1 ion-ios-americanfootball" data-pack="ios" data-tags="nfl, games, sports, fun, play" style="display: inline-block;"></li>
                        <li class="col-md-1 col-md-1 ion-ios-americanfootball-outline" data-pack="ios" data-tags="nfl, games, sports, fun, play" style="display: inline-block;"></li>
                        <li class="col-md-1 col-md-1 ion-ios-baseball" data-pack="ios" data-tags="mlb, games, sports, fun, play" style="display: inline-block;"></li>
                        <li class="col-md-1 col-md-1 ion-ios-baseball-outline" data-pack="ios" data-tags="mlb, games, sports, fun, play" style="display: inline-block;"></li>
                        <li class="col-md-1 col-md-1 ion-ios-basketball" data-pack="ios" data-tags="nba, games, sports, fun, play" style="display: inline-block;"></li>
                        <li class="col-md-1 col-md-1 ion-ios-basketball-outline" data-pack="ios" data-tags="nba, games, sports, fun, play" style="display: inline-block;"></li>
                        <li class="col-md-1 col-md-1 ion-ios-tennisball" data-pack="ios" data-tags="games, sports, fun, play" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-ios-tennisball-outline" data-pack="ios" data-tags="games, sports, fun, play" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-ios-football" data-pack="ios" data-tags="mls, soccer, games, sports, fun, play" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-ios-football-outline" data-pack="ios" data-tags="mls, soccer, games, sports, fun, play" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-ios-body" data-pack="ios" data-tags="person, users, staff, head, human" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-ios-body-outline" data-pack="ios" data-tags="person, users, staff, head, human" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-ios-person" data-pack="ios" data-tags="users, staff, head, human" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-ios-person-outline" data-pack="ios" data-tags="users, staff, head, human" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-ios-personadd" data-pack="ios" data-tags="users, staff, head, human, new, invite" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-ios-personadd-outline" data-pack="ios" data-tags="users, staff, head, human, new, invite" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-ios-people" data-pack="ios" data-tags="stalker, person, users, head, human" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-ios-people-outline" data-pack="ios" data-tags="stalker, person, users, head, human" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-ios-musical-notes" data-pack="ios" data-tags="sound, noise, listening, play" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-ios-musical-note" data-pack="ios" data-tags="sound, noise, listening, play" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-ios-bell" data-pack="ios" data-tags="right, noise, alarm, sound, music" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-ios-bell-outline" data-pack="ios" data-tags="right, noise, alarm, sound, music" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-ios-mic" data-pack="ios" data-tags="sound, noise, speaker, talk" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-ios-mic-outline" data-pack="ios" data-tags="sound, noise, speaker, talk" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-ios-mic-off" data-pack="ios" data-tags="sound, noise, speaker, talk" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-ios-volume-high" data-pack="ios" data-tags="sound, noise, listen, music" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-ios-volume-low" data-pack="ios" data-tags="sound, noise, listen, music" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-ios-play" data-pack="ios" data-tags="music, watch, arrow, right" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-ios-play-outline" data-pack="ios" data-tags="music, watch, arrow, right" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-ios-pause" data-pack="ios" data-tags="music, break, hold, freeze" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-ios-pause-outline" data-pack="ios" data-tags="music, break, hold, freeze" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-ios-recording" data-pack="ios" data-tags="film, tape, voicemail" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-ios-recording-outline" data-pack="ios" data-tags="film, tape, voicemail" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-ios-fastforward" data-pack="ios" data-tags="next, skip, jump" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-ios-fastforward-outline" data-pack="ios" data-tags="next, skip, jump" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-ios-rewind" data-pack="ios" data-tags="music, previous, back" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-ios-rewind-outline" data-pack="ios" data-tags="music, previous, back" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-ios-skipbackward" data-pack="ios" data-tags="music, previous" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-ios-skipbackward-outline" data-pack="ios" data-tags="music, previous" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-ios-skipforward" data-pack="ios" data-tags="music, next" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-ios-skipforward-outline" data-pack="ios" data-tags="music, next" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-ios-shuffle-strong" data-pack="ios" data-tags="music, next" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-ios-shuffle" data-pack="ios" data-tags="music, next" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-ios-videocam" data-pack="ios" data-tags="film, movie, camera" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-ios-videocam-outline" data-pack="ios" data-tags="film, movie, camera" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-ios-film" data-pack="ios" data-tags="film, movie, camera" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-ios-film-outline" data-pack="ios" data-tags="film, movie, camera" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-ios-flask" data-pack="ios" data-tags="options, mixer, liquid" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-ios-flask-outline" data-pack="ios" data-tags="options, mixer, liquid" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-ios-lightbulb" data-pack="ios" data-tags="idea, new, bright, aha!" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-ios-lightbulb-outline" data-pack="ios" data-tags="idea, new, bright, aha!" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-ios-wineglass" data-pack="ios" data-tags="alcohol, drink, food, glass, drunk, cheers" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-ios-wineglass-outline" data-pack="ios" data-tags="alcohol, drink, food, glass, drunk, cheers" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-ios-pint" data-pack="ios" data-tags="alcohol, drink, food, beer, drunk, cheers" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-ios-pint-outline" data-pack="ios" data-tags="alcohol, drink, food, beer, drunk, cheers" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-ios-nutrition" data-pack="ios" data-tags="health, carrot, food" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-ios-nutrition-outline" data-pack="ios" data-tags="health, carrot, food" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-ios-flower" data-pack="ios" data-tags="nature, spring, leaf, garden" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-ios-flower-outline" data-pack="ios" data-tags="nature, spring, leaf, garden" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-ios-rose" data-pack="ios" data-tags="nature, spring, leaf, garden, flower" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-ios-rose-outline" data-pack="ios" data-tags="nature, spring, leaf, garden, flower" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-ios-paw" data-pack="ios" data-tags="nature, animal, pet, outdoor, track" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-ios-paw-outline" data-pack="ios" data-tags="nature, animal, pet, outdoor, track" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-ios-flame" data-pack="ios" data-tags="fire, hot, burn" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-ios-flame-outline" data-pack="ios" data-tags="fire, hot, burn" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-ios-sunny" data-pack="ios" data-tags="weather, whether, light, sky" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-ios-sunny-outline" data-pack="ios" data-tags="weather, whether, light, sky" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-ios-partlysunny" data-pack="ios" data-tags="light, weather, whether, cloudy" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-ios-partlysunny-outline" data-pack="ios" data-tags="light, weather, whether, cloudy" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-ios-cloudy" data-pack="ios" data-tags="weather, whether, overcast" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-ios-cloudy-outline" data-pack="ios" data-tags="weather, whether, overcast" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-ios-rainy" data-pack="ios" data-tags="whether, weather, water, cloud" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-ios-rainy-outline" data-pack="ios" data-tags="whether, weather, water, cloud" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-ios-thunderstorm" data-pack="ios" data-tags="whether, weather, sky, lightning, rain, cloudy, overcast, storm" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-ios-thunderstorm-outline" data-pack="ios" data-tags="whether, weather, sky, lightning, rain, cloudy, overcast, storm" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-ios-snowy" data-pack="ios" data-tags="cold, weather, whether, overcast" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-ios-moon" data-pack="ios" data-tags="sky, night, dark" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-ios-moon-outline" data-pack="ios" data-tags="sky, night, dark" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-ios-cloudy-night" data-pack="ios" data-tags="weather, whether, overcast" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-ios-cloudy-night-outline" data-pack="ios" data-tags="weather, whether, overcast" style="display: inline-block;"></li>


                        <p>
                            <!-- end iOS 7-style icons pack -->
                        </p>


                        <li class="col-md-1 ion-android-arrow-up" data-pack="android" data-tags="chevron, navigation" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-android-arrow-forward" data-pack="android" data-tags="chevron, navigation" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-android-arrow-down" data-pack="android" data-tags="chevron, navigation" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-android-arrow-back" data-pack="android" data-tags="chevron, navigation" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-android-arrow-dropup" data-pack="android" data-tags="chevron, navigation" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-android-arrow-dropup-circle" data-pack="android" data-tags="chevron, navigation" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-android-arrow-dropright" data-pack="android" data-tags="chevron, navigation" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-android-arrow-dropright-circle" data-pack="android" data-tags="chevron, navigation" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-android-arrow-dropdown" data-pack="android" data-tags="chevron, navigation" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-android-arrow-dropdown-circle" data-pack="android" data-tags="chevron, navigation" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-android-arrow-dropleft" data-pack="android" data-tags="chevron, navigation" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-android-arrow-dropleft-circle" data-pack="android" data-tags="chevron, navigation" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-android-add" data-pack="android" data-tags="plus, include, invite" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-android-add-circle" data-pack="android" data-tags="plus, include, invite" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-android-remove" data-pack="android" data-tags="minus, subtract, delete" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-android-remove-circle" data-pack="android" data-tags="minus, subtract, delete" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-android-close" data-pack="android" data-tags="delete, remove" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-android-cancel" data-pack="android" data-tags="delete, remove" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-android-radio-button-off" data-pack="android" data-tags="" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-android-radio-button-on" data-pack="android" data-tags="" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-android-checkmark-circle" data-pack="android" data-tags="" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-android-checkbox-outline-blank" data-pack="android" data-tags="" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-android-checkbox-outline" data-pack="android" data-tags="" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-android-checkbox-blank" data-pack="android" data-tags="" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-android-checkbox" data-pack="android" data-tags="" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-android-done" data-pack="android" data-tags="" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-android-done-all" data-pack="android" data-tags="" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-android-menu" data-pack="android" data-tags="" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-android-more-horizontal" data-pack="android" data-tags="options, menu" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-android-more-vertical" data-pack="android" data-tags="options, menu" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-android-refresh" data-pack="android" data-tags="" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-android-sync" data-pack="android" data-tags="" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-android-wifi" data-pack="android" data-tags="internet,connection, bars" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-android-call" data-pack="android" data-tags="telephone" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-android-apps" data-pack="android" data-tags="" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-android-settings" data-pack="android" data-tags="options" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-android-options" data-pack="android" data-tags="settings, mixer" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-android-funnel" data-pack="android" data-tags="" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-android-search" data-pack="android" data-tags="magnifying glass" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-android-home" data-pack="android" data-tags="" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-android-cloud-outline" data-pack="android" data-tags="" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-android-cloud" data-pack="android" data-tags="" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-android-download" data-pack="android" data-tags="" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-android-upload" data-pack="android" data-tags="" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-android-cloud-done" data-pack="android" data-tags="" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-android-cloud-circle" data-pack="android" data-tags="" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-android-favorite-outline" data-pack="android" data-tags="favorite, like, rate" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-android-favorite" data-pack="android" data-tags="favorite, like, rate" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-android-star-outline" data-pack="android" data-tags="favorite, like, rate" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-android-star-half" data-pack="android" data-tags="favorite, like, rate" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-android-star" data-pack="android" data-tags="favorite, like, rate" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-android-calendar" data-pack="android" data-tags="clock" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-android-alarm-clock" data-pack="android" data-tags="clock" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-android-time" data-pack="android" data-tags="clock" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-android-stopwatch" data-pack="android" data-tags="" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-android-watch" data-pack="android" data-tags="" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-android-locate" data-pack="android" data-tags="" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-android-navigate" data-pack="android" data-tags="" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-android-pin" data-pack="android" data-tags="" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-android-compass" data-pack="android" data-tags="" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-android-map" data-pack="android" data-tags="" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-android-walk" data-pack="android" data-tags="" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-android-bicycle" data-pack="android" data-tags="move, bike, transportation, maps" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-android-car" data-pack="android" data-tags="" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-android-bus" data-pack="android" data-tags="" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-android-subway" data-pack="android" data-tags="" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-android-train" data-pack="android" data-tags="" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-android-boat" data-pack="android" data-tags="" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-android-plane" data-pack="android" data-tags="" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-android-restaurant" data-pack="android" data-tags="" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-android-bar" data-pack="android" data-tags="wine, drink, food, dinner" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-android-cart" data-pack="android" data-tags="" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-android-camera" data-pack="android" data-tags="" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-android-image" data-pack="android" data-tags="" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-android-film" data-pack="android" data-tags="" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-android-color-palette" data-pack="android" data-tags="" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-android-create" data-pack="android" data-tags="" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-android-mail" data-pack="android" data-tags="" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-android-drafts" data-pack="android" data-tags="" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-android-send" data-pack="android" data-tags="" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-android-archive" data-pack="android" data-tags="" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-android-delete" data-pack="android" data-tags="" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-android-attach" data-pack="android" data-tags="" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-android-share" data-pack="android" data-tags="" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-android-share-alt" data-pack="android" data-tags="" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-android-bookmark" data-pack="android" data-tags="" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-android-document" data-pack="android" data-tags="" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-android-clipboard" data-pack="android" data-tags="" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-android-list" data-pack="android" data-tags="" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-android-folder-open" data-pack="android" data-tags="" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-android-folder" data-pack="android" data-tags="" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-android-print" data-pack="android" data-tags="" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-android-open" data-pack="android" data-tags="" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-android-exit" data-pack="android" data-tags="" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-android-contract" data-pack="android" data-tags="" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-android-expand" data-pack="android" data-tags="" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-android-globe" data-pack="android" data-tags="" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-android-chat" data-pack="android" data-tags="talk, text" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-android-textsms" data-pack="android" data-tags="talk, text" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-android-hangout" data-pack="android" data-tags="" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-android-happy" data-pack="android" data-tags="" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-android-sad" data-pack="android" data-tags="" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-android-person" data-pack="android" data-tags="" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-android-people" data-pack="android" data-tags="" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-android-person-add" data-pack="android" data-tags="" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-android-contact" data-pack="android" data-tags="" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-android-contacts" data-pack="android" data-tags="" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-android-playstore" data-pack="android" data-tags="" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-android-lock" data-pack="android" data-tags="" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-android-unlock" data-pack="android" data-tags="" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-android-microphone" data-pack="android" data-tags="recorder, speak, noise, music, sound" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-android-microphone-off" data-pack="android" data-tags="recorder, speak, noise, music, sound, mute" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-android-notifications-none" data-pack="android" data-tags="" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-android-notifications" data-pack="android" data-tags="" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-android-notifications-off" data-pack="android" data-tags="" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-android-volume-mute" data-pack="android" data-tags="" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-android-volume-down" data-pack="android" data-tags="" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-android-volume-up" data-pack="android" data-tags="" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-android-volume-off" data-pack="android" data-tags="" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-android-hand" data-pack="android" data-tags="stop" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-android-desktop" data-pack="android" data-tags="" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-android-laptop" data-pack="android" data-tags="" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-android-phone-portrait" data-pack="android" data-tags="" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-android-phone-landscape" data-pack="android" data-tags="" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-android-bulb" data-pack="android" data-tags="" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-android-sunny" data-pack="android" data-tags="" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-android-alert" data-pack="android" data-tags="" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-android-warning" data-pack="android" data-tags="" style="display: inline-block;"></li>


                        <p>
                            <!--

      End Android-style icons pack.

      Android-style icons originally built by Google’s [Material Design Icons](https://github.com/google/material-design-icons), used under [CC BY](http://creativecommons.org/licenses/by/4.0/) / Modified icons to fit ionicon’s grid from original.

      -->
                        </p>


                        <li class="col-md-1 ion-social-twitter" data-pack="social" data-tags="follow, post, share" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-social-twitter-outline" data-pack="social" data-tags="follow, post, share" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-social-facebook" data-pack="social" data-tags="like, post, share" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-social-facebook-outline" data-pack="social" data-tags="like, post, share" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-social-googleplus" data-pack="social" data-tags="follow, post, share" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-social-googleplus-outline" data-pack="social" data-tags="follow, post, share" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-social-google" data-pack="social" data-tags="follow, post, share" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-social-google-outline" data-pack="social" data-tags="follow, post, share" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-social-dribbble" data-pack="social" data-tags="design" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-social-dribbble-outline" data-pack="social" data-tags="design" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-social-octocat" data-pack="social" data-tags="code, github, fork, merge, clone" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-social-github" data-pack="social" data-tags="code, fork, merge, clone" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-social-github-outline" data-pack="social" data-tags="code, fork, merge, clone" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-social-instagram" data-pack="social" data-tags="photo, camera, facebook" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-social-instagram-outline" data-pack="social" data-tags="photo, camera, facebook" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-social-whatsapp" data-pack="social" data-tags="text, sharing, private, facebook" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-social-whatsapp-outline" data-pack="social" data-tags="text, sharing, private, facebook" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-social-snapchat" data-pack="social" data-tags="photos, app" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-social-snapchat-outline" data-pack="social" data-tags="photos, app" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-social-foursquare" data-pack="social" data-tags="checkin" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-social-foursquare-outline" data-pack="social" data-tags="checkin" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-social-pinterest" data-pack="social" data-tags="social" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-social-pinterest-outline" data-pack="social" data-tags="social" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-social-rss" data-pack="social" data-tags="blogging" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-social-rss-outline" data-pack="social" data-tags="blogging" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-social-tumblr" data-pack="social" data-tags="blogging" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-social-tumblr-outline" data-pack="social" data-tags="blogging" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-social-wordpress" data-pack="social" data-tags="blogging" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-social-wordpress-outline" data-pack="social" data-tags="blogging" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-social-reddit" data-pack="social" data-tags="news, upvotes, karma" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-social-reddit-outline" data-pack="social" data-tags="news, upvotes, karma" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-social-hackernews" data-pack="social" data-tags="discuss, upvotes, karma" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-social-hackernews-outline" data-pack="social" data-tags="discuss, upvotes, karma" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-social-designernews" data-pack="social" data-tags="design, post" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-social-designernews-outline" data-pack="social" data-tags="design, post" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-social-yahoo" data-pack="social" data-tags="" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-social-yahoo-outline" data-pack="social" data-tags="" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-social-buffer" data-pack="social" data-tags="share" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-social-buffer-outline" data-pack="social" data-tags="share" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-social-skype" data-pack="social" data-tags="call" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-social-skype-outline" data-pack="social" data-tags="call" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-social-linkedin" data-pack="social" data-tags="connect" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-social-linkedin-outline" data-pack="social" data-tags="connect" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-social-vimeo" data-pack="social" data-tags="video, watch, share, view" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-social-vimeo-outline" data-pack="social" data-tags="video, watch, share, view" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-social-twitch" data-pack="social" data-tags="gaming, games, live, streaming, video, watch, share, view" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-social-twitch-outline" data-pack="social" data-tags="gaming, games, live, streaming, video, watch, share, view" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-social-youtube" data-pack="social" data-tags="video, watch, share, view" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-social-youtube-outline" data-pack="social" data-tags="video, watch, share, view" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-social-dropbox" data-pack="social" data-tags="upload" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-social-dropbox-outline" data-pack="social" data-tags="upload" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-social-apple" data-pack="social" data-tags="mac, mobile" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-social-apple-outline" data-pack="social" data-tags="mac, mobile" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-social-android" data-pack="social" data-tags="mobile" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-social-android-outline" data-pack="social" data-tags="mobile" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-social-windows" data-pack="social" data-tags="pc" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-social-windows-outline" data-pack="social" data-tags="pc" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-social-html5" data-pack="social" data-tags="code, html, css, js, developer" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-social-html5-outline" data-pack="social" data-tags="code, html, css, js, developer" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-social-css3" data-pack="social" data-tags="code, html, css, js, developer" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-social-css3-outline" data-pack="social" data-tags="code, html, css, js, developer" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-social-javascript" data-pack="social" data-tags="code, html, css, js, developer" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-social-javascript-outline" data-pack="social" data-tags="code, html, css, js, developer" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-social-angular" data-pack="social" data-tags="code, mobile, js, angularjs, ionic" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-social-angular-outline" data-pack="social" data-tags="code, mobile, js, angularjs, ionic" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-social-nodejs" data-pack="social" data-tags="code, js, javascript, developer" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-social-sass" data-pack="social" data-tags="code, css" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-social-python" data-pack="social" data-tags="code" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-social-chrome" data-pack="social" data-tags="code, mobile, js, angularjs, ionic" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-social-chrome-outline" data-pack="social" data-tags="code, mobile, js, angularjs, ionic" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-social-codepen" data-pack="social" data-tags="testing, js, developer" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-social-codepen-outline" data-pack="social" data-tags="testing, js, developer" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-social-markdown" data-pack="social" data-tags="code, testing, text, developer" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-social-tux" data-pack="social" data-tags="code, linux, opensource" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-social-freebsd-devil" data-pack="social" data-tags="code, opensource, unix" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-social-usd" data-pack="social" data-tags="currency, trade, money, cash" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-social-usd-outline" data-pack="social" data-tags="currency, trade, money, cash" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-social-bitcoin" data-pack="social" data-tags="currency, trade, money" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-social-bitcoin-outline" data-pack="social" data-tags="currency, trade, money" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-social-yen" data-pack="social" data-tags="currency, trade, money, japanese" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-social-yen-outline" data-pack="social" data-tags="currency, trade, money, japanese" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-social-euro" data-pack="social" data-tags="currency, trade, money, europe" style="display: inline-block;"></li>
                        <li class="col-md-1 ion-social-euro-outline" data-pack="social" data-tags="currency, trade, money, europe" style="display: inline-block;"></li>
                    </ul>
                </div>
            </div>


            <div class="card mb-2" id="font-awesome">
                <div class="card-block">
                    <div id="icons">
                        <section id="new">

                            <h2 class="mb-2">Font Awesome</h2>
                            <div class="panel-heading mb-2">41 New Icons in 4.7 </div>



                            <div class="row fontawesome-icon-list">



                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/address-book"><i class="fa fa-address-book" aria-hidden="true"></i> <span class="sr-only">Example of </span>address-book</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/address-book-o"><i class="fa fa-address-book-o" aria-hidden="true"></i> <span class="sr-only">Example of </span>address-book-o</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/address-card"><i class="fa fa-address-card" aria-hidden="true"></i> <span class="sr-only">Example of </span>address-card</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/address-card-o"><i class="fa fa-address-card-o" aria-hidden="true"></i> <span class="sr-only">Example of </span>address-card-o</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/bandcamp"><i class="fa fa-bandcamp" aria-hidden="true"></i> <span class="sr-only">Example of </span>bandcamp</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/bath"><i class="fa fa-bath" aria-hidden="true"></i> <span class="sr-only">Example of </span>bath</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/bath"><i class="fa fa-bathtub" aria-hidden="true"></i> <span class="sr-only">Example of </span>bathtub <span class="text-muted">(alias)</span></a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/id-card"><i class="fa fa-drivers-license" aria-hidden="true"></i> <span class="sr-only">Example of </span>drivers-license <span class="text-muted">(alias)</span></a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/id-card-o"><i class="fa fa-drivers-license-o" aria-hidden="true"></i> <span class="sr-only">Example of </span>drivers-license-o <span class="text-muted">(alias)</span></a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/eercast"><i class="fa fa-eercast" aria-hidden="true"></i> <span class="sr-only">Example of </span>eercast</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/envelope-open"><i class="fa fa-envelope-open" aria-hidden="true"></i> <span class="sr-only">Example of </span>envelope-open</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/envelope-open-o"><i class="fa fa-envelope-open-o" aria-hidden="true"></i> <span class="sr-only">Example of </span>envelope-open-o</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/etsy"><i class="fa fa-etsy" aria-hidden="true"></i> <span class="sr-only">Example of </span>etsy</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/free-code-camp"><i class="fa fa-free-code-camp" aria-hidden="true"></i> <span class="sr-only">Example of </span>free-code-camp</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/grav"><i class="fa fa-grav" aria-hidden="true"></i> <span class="sr-only">Example of </span>grav</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/handshake-o"><i class="fa fa-handshake-o" aria-hidden="true"></i> <span class="sr-only">Example of </span>handshake-o</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/id-badge"><i class="fa fa-id-badge" aria-hidden="true"></i> <span class="sr-only">Example of </span>id-badge</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/id-card"><i class="fa fa-id-card" aria-hidden="true"></i> <span class="sr-only">Example of </span>id-card</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/id-card-o"><i class="fa fa-id-card-o" aria-hidden="true"></i> <span class="sr-only">Example of </span>id-card-o</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/imdb"><i class="fa fa-imdb" aria-hidden="true"></i> <span class="sr-only">Example of </span>imdb</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/linode"><i class="fa fa-linode" aria-hidden="true"></i> <span class="sr-only">Example of </span>linode</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/meetup"><i class="fa fa-meetup" aria-hidden="true"></i> <span class="sr-only">Example of </span>meetup</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/microchip"><i class="fa fa-microchip" aria-hidden="true"></i> <span class="sr-only">Example of </span>microchip</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/podcast"><i class="fa fa-podcast" aria-hidden="true"></i> <span class="sr-only">Example of </span>podcast</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/quora"><i class="fa fa-quora" aria-hidden="true"></i> <span class="sr-only">Example of </span>quora</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/ravelry"><i class="fa fa-ravelry" aria-hidden="true"></i> <span class="sr-only">Example of </span>ravelry</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/bath"><i class="fa fa-s15" aria-hidden="true"></i> <span class="sr-only">Example of </span>s15 <span class="text-muted">(alias)</span></a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/shower"><i class="fa fa-shower" aria-hidden="true"></i> <span class="sr-only">Example of </span>shower</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/snowflake-o"><i class="fa fa-snowflake-o" aria-hidden="true"></i> <span class="sr-only">Example of </span>snowflake-o</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/superpowers"><i class="fa fa-superpowers" aria-hidden="true"></i> <span class="sr-only">Example of </span>superpowers</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/telegram"><i class="fa fa-telegram" aria-hidden="true"></i> <span class="sr-only">Example of </span>telegram</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/thermometer-full"><i class="fa fa-thermometer" aria-hidden="true"></i> <span class="sr-only">Example of </span>thermometer <span class="text-muted">(alias)</span></a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/thermometer-empty"><i class="fa fa-thermometer-0" aria-hidden="true"></i> <span class="sr-only">Example of </span>thermometer-0 <span class="text-muted">(alias)</span></a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/thermometer-quarter"><i class="fa fa-thermometer-1" aria-hidden="true"></i> <span class="sr-only">Example of </span>thermometer-1 <span class="text-muted">(alias)</span></a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/thermometer-half"><i class="fa fa-thermometer-2" aria-hidden="true"></i> <span class="sr-only">Example of </span>thermometer-2 <span class="text-muted">(alias)</span></a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/thermometer-three-quarters"><i class="fa fa-thermometer-3" aria-hidden="true"></i> <span class="sr-only">Example of </span>thermometer-3 <span class="text-muted">(alias)</span></a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/thermometer-full"><i class="fa fa-thermometer-4" aria-hidden="true"></i> <span class="sr-only">Example of </span>thermometer-4 <span class="text-muted">(alias)</span></a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/thermometer-empty"><i class="fa fa-thermometer-empty" aria-hidden="true"></i> <span class="sr-only">Example of </span>thermometer-empty</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/thermometer-full"><i class="fa fa-thermometer-full" aria-hidden="true"></i> <span class="sr-only">Example of </span>thermometer-full</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/thermometer-half"><i class="fa fa-thermometer-half" aria-hidden="true"></i> <span class="sr-only">Example of </span>thermometer-half</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/thermometer-quarter"><i class="fa fa-thermometer-quarter" aria-hidden="true"></i> <span class="sr-only">Example of </span>thermometer-quarter</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/thermometer-three-quarters"><i class="fa fa-thermometer-three-quarters" aria-hidden="true"></i> <span class="sr-only">Example of </span>thermometer-three-quarters</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/window-close"><i class="fa fa-times-rectangle" aria-hidden="true"></i> <span class="sr-only">Example of </span>times-rectangle <span class="text-muted">(alias)</span></a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/window-close-o"><i class="fa fa-times-rectangle-o" aria-hidden="true"></i> <span class="sr-only">Example of </span>times-rectangle-o <span class="text-muted">(alias)</span></a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/user-circle"><i class="fa fa-user-circle" aria-hidden="true"></i> <span class="sr-only">Example of </span>user-circle</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/user-circle-o"><i class="fa fa-user-circle-o" aria-hidden="true"></i> <span class="sr-only">Example of </span>user-circle-o</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/user-o"><i class="fa fa-user-o" aria-hidden="true"></i> <span class="sr-only">Example of </span>user-o</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/address-card"><i class="fa fa-vcard" aria-hidden="true"></i> <span class="sr-only">Example of </span>vcard <span class="text-muted">(alias)</span></a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/address-card-o"><i class="fa fa-vcard-o" aria-hidden="true"></i> <span class="sr-only">Example of </span>vcard-o <span class="text-muted">(alias)</span></a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/window-close"><i class="fa fa-window-close" aria-hidden="true"></i> <span class="sr-only">Example of </span>window-close</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/window-close-o"><i class="fa fa-window-close-o" aria-hidden="true"></i> <span class="sr-only">Example of </span>window-close-o</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/window-maximize"><i class="fa fa-window-maximize" aria-hidden="true"></i> <span class="sr-only">Example of </span>window-maximize</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/window-minimize"><i class="fa fa-window-minimize" aria-hidden="true"></i> <span class="sr-only">Example of </span>window-minimize</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/window-restore"><i class="fa fa-window-restore" aria-hidden="true"></i> <span class="sr-only">Example of </span>window-restore</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/wpexplorer"><i class="fa fa-wpexplorer" aria-hidden="true"></i> <span class="sr-only">Example of </span>wpexplorer</a>
                                </div>

                            </div>

                        </section>

                        <section id="web-application">
                            <div class="panel-heading mb-2" class="page-header">Web Application Icons</div>

                            <div class="row fontawesome-icon-list">



                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/address-book"><i class="fa fa-address-book" aria-hidden="true"></i> <span class="sr-only">Example of </span>address-book</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/address-book-o"><i class="fa fa-address-book-o" aria-hidden="true"></i> <span class="sr-only">Example of </span>address-book-o</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/address-card"><i class="fa fa-address-card" aria-hidden="true"></i> <span class="sr-only">Example of </span>address-card</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/address-card-o"><i class="fa fa-address-card-o" aria-hidden="true"></i> <span class="sr-only">Example of </span>address-card-o</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/adjust"><i class="fa fa-adjust" aria-hidden="true"></i> <span class="sr-only">Example of </span>adjust</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/american-sign-language-interpreting"><i class="fa fa-american-sign-language-interpreting" aria-hidden="true"></i> <span class="sr-only">Example of </span>american-sign-language-interpreting</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/anchor"><i class="fa fa-anchor" aria-hidden="true"></i> <span class="sr-only">Example of </span>anchor</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/archive"><i class="fa fa-archive" aria-hidden="true"></i> <span class="sr-only">Example of </span>archive</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/area-chart"><i class="fa fa-area-chart" aria-hidden="true"></i> <span class="sr-only">Example of </span>area-chart</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/arrows"><i class="fa fa-arrows" aria-hidden="true"></i> <span class="sr-only">Example of </span>arrows</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/arrows-h"><i class="fa fa-arrows-h" aria-hidden="true"></i> <span class="sr-only">Example of </span>arrows-h</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/arrows-v"><i class="fa fa-arrows-v" aria-hidden="true"></i> <span class="sr-only">Example of </span>arrows-v</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/american-sign-language-interpreting"><i class="fa fa-asl-interpreting" aria-hidden="true"></i> <span class="sr-only">Example of </span>asl-interpreting <span class="text-muted">(alias)</span></a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/assistive-listening-systems"><i class="fa fa-assistive-listening-systems" aria-hidden="true"></i> <span class="sr-only">Example of </span>assistive-listening-systems</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/asterisk"><i class="fa fa-asterisk" aria-hidden="true"></i> <span class="sr-only">Example of </span>asterisk</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/at"><i class="fa fa-at" aria-hidden="true"></i> <span class="sr-only">Example of </span>at</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/audio-description"><i class="fa fa-audio-description" aria-hidden="true"></i> <span class="sr-only">Example of </span>audio-description</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/car"><i class="fa fa-automobile" aria-hidden="true"></i> <span class="sr-only">Example of </span>automobile <span class="text-muted">(alias)</span></a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/balance-scale"><i class="fa fa-balance-scale" aria-hidden="true"></i> <span class="sr-only">Example of </span>balance-scale</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/ban"><i class="fa fa-ban" aria-hidden="true"></i> <span class="sr-only">Example of </span>ban</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/university"><i class="fa fa-bank" aria-hidden="true"></i> <span class="sr-only">Example of </span>bank <span class="text-muted">(alias)</span></a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/bar-chart"><i class="fa fa-bar-chart" aria-hidden="true"></i> <span class="sr-only">Example of </span>bar-chart</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/bar-chart"><i class="fa fa-bar-chart-o" aria-hidden="true"></i> <span class="sr-only">Example of </span>bar-chart-o <span class="text-muted">(alias)</span></a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/barcode"><i class="fa fa-barcode" aria-hidden="true"></i> <span class="sr-only">Example of </span>barcode</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/bars"><i class="fa fa-bars" aria-hidden="true"></i> <span class="sr-only">Example of </span>bars</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/bath"><i class="fa fa-bath" aria-hidden="true"></i> <span class="sr-only">Example of </span>bath</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/bath"><i class="fa fa-bathtub" aria-hidden="true"></i> <span class="sr-only">Example of </span>bathtub <span class="text-muted">(alias)</span></a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/battery-full"><i class="fa fa-battery" aria-hidden="true"></i> <span class="sr-only">Example of </span>battery <span class="text-muted">(alias)</span></a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/battery-empty"><i class="fa fa-battery-0" aria-hidden="true"></i> <span class="sr-only">Example of </span>battery-0 <span class="text-muted">(alias)</span></a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/battery-quarter"><i class="fa fa-battery-1" aria-hidden="true"></i> <span class="sr-only">Example of </span>battery-1 <span class="text-muted">(alias)</span></a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/battery-half"><i class="fa fa-battery-2" aria-hidden="true"></i> <span class="sr-only">Example of </span>battery-2 <span class="text-muted">(alias)</span></a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/battery-three-quarters"><i class="fa fa-battery-3" aria-hidden="true"></i> <span class="sr-only">Example of </span>battery-3 <span class="text-muted">(alias)</span></a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/battery-full"><i class="fa fa-battery-4" aria-hidden="true"></i> <span class="sr-only">Example of </span>battery-4 <span class="text-muted">(alias)</span></a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/battery-empty"><i class="fa fa-battery-empty" aria-hidden="true"></i> <span class="sr-only">Example of </span>battery-empty</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/battery-full"><i class="fa fa-battery-full" aria-hidden="true"></i> <span class="sr-only">Example of </span>battery-full</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/battery-half"><i class="fa fa-battery-half" aria-hidden="true"></i> <span class="sr-only">Example of </span>battery-half</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/battery-quarter"><i class="fa fa-battery-quarter" aria-hidden="true"></i> <span class="sr-only">Example of </span>battery-quarter</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/battery-three-quarters"><i class="fa fa-battery-three-quarters" aria-hidden="true"></i> <span class="sr-only">Example of </span>battery-three-quarters</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/bed"><i class="fa fa-bed" aria-hidden="true"></i> <span class="sr-only">Example of </span>bed</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/beer"><i class="fa fa-beer" aria-hidden="true"></i> <span class="sr-only">Example of </span>beer</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/bell"><i class="fa fa-bell" aria-hidden="true"></i> <span class="sr-only">Example of </span>bell</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/bell-o"><i class="fa fa-bell-o" aria-hidden="true"></i> <span class="sr-only">Example of </span>bell-o</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/bell-slash"><i class="fa fa-bell-slash" aria-hidden="true"></i> <span class="sr-only">Example of </span>bell-slash</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/bell-slash-o"><i class="fa fa-bell-slash-o" aria-hidden="true"></i> <span class="sr-only">Example of </span>bell-slash-o</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/bicycle"><i class="fa fa-bicycle" aria-hidden="true"></i> <span class="sr-only">Example of </span>bicycle</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/binoculars"><i class="fa fa-binoculars" aria-hidden="true"></i> <span class="sr-only">Example of </span>binoculars</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/birthday-cake"><i class="fa fa-birthday-cake" aria-hidden="true"></i> <span class="sr-only">Example of </span>birthday-cake</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/blind"><i class="fa fa-blind" aria-hidden="true"></i> <span class="sr-only">Example of </span>blind</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/bluetooth"><i class="fa fa-bluetooth" aria-hidden="true"></i> <span class="sr-only">Example of </span>bluetooth</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/bluetooth-b"><i class="fa fa-bluetooth-b" aria-hidden="true"></i> <span class="sr-only">Example of </span>bluetooth-b</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/bolt"><i class="fa fa-bolt" aria-hidden="true"></i> <span class="sr-only">Example of </span>bolt</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/bomb"><i class="fa fa-bomb" aria-hidden="true"></i> <span class="sr-only">Example of </span>bomb</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/book"><i class="fa fa-book" aria-hidden="true"></i> <span class="sr-only">Example of </span>book</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/bookmark"><i class="fa fa-bookmark" aria-hidden="true"></i> <span class="sr-only">Example of </span>bookmark</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/bookmark-o"><i class="fa fa-bookmark-o" aria-hidden="true"></i> <span class="sr-only">Example of </span>bookmark-o</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/braille"><i class="fa fa-braille" aria-hidden="true"></i> <span class="sr-only">Example of </span>braille</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/briefcase"><i class="fa fa-briefcase" aria-hidden="true"></i> <span class="sr-only">Example of </span>briefcase</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/bug"><i class="fa fa-bug" aria-hidden="true"></i> <span class="sr-only">Example of </span>bug</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/building"><i class="fa fa-building" aria-hidden="true"></i> <span class="sr-only">Example of </span>building</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/building-o"><i class="fa fa-building-o" aria-hidden="true"></i> <span class="sr-only">Example of </span>building-o</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/bullhorn"><i class="fa fa-bullhorn" aria-hidden="true"></i> <span class="sr-only">Example of </span>bullhorn</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/bullseye"><i class="fa fa-bullseye" aria-hidden="true"></i> <span class="sr-only">Example of </span>bullseye</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/bus"><i class="fa fa-bus" aria-hidden="true"></i> <span class="sr-only">Example of </span>bus</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/taxi"><i class="fa fa-cab" aria-hidden="true"></i> <span class="sr-only">Example of </span>cab <span class="text-muted">(alias)</span></a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/calculator"><i class="fa fa-calculator" aria-hidden="true"></i> <span class="sr-only">Example of </span>calculator</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/calendar"><i class="fa fa-calendar" aria-hidden="true"></i> <span class="sr-only">Example of </span>calendar</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/calendar-check-o"><i class="fa fa-calendar-check-o" aria-hidden="true"></i> <span class="sr-only">Example of </span>calendar-check-o</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/calendar-minus-o"><i class="fa fa-calendar-minus-o" aria-hidden="true"></i> <span class="sr-only">Example of </span>calendar-minus-o</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/calendar-o"><i class="fa fa-calendar-o" aria-hidden="true"></i> <span class="sr-only">Example of </span>calendar-o</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/calendar-plus-o"><i class="fa fa-calendar-plus-o" aria-hidden="true"></i> <span class="sr-only">Example of </span>calendar-plus-o</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/calendar-times-o"><i class="fa fa-calendar-times-o" aria-hidden="true"></i> <span class="sr-only">Example of </span>calendar-times-o</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/camera"><i class="fa fa-camera" aria-hidden="true"></i> <span class="sr-only">Example of </span>camera</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/camera-retro"><i class="fa fa-camera-retro" aria-hidden="true"></i> <span class="sr-only">Example of </span>camera-retro</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/car"><i class="fa fa-car" aria-hidden="true"></i> <span class="sr-only">Example of </span>car</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/caret-square-o-down"><i class="fa fa-caret-square-o-down" aria-hidden="true"></i> <span class="sr-only">Example of </span>caret-square-o-down</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/caret-square-o-left"><i class="fa fa-caret-square-o-left" aria-hidden="true"></i> <span class="sr-only">Example of </span>caret-square-o-left</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/caret-square-o-right"><i class="fa fa-caret-square-o-right" aria-hidden="true"></i> <span class="sr-only">Example of </span>caret-square-o-right</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/caret-square-o-up"><i class="fa fa-caret-square-o-up" aria-hidden="true"></i> <span class="sr-only">Example of </span>caret-square-o-up</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/cart-arrow-down"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i> <span class="sr-only">Example of </span>cart-arrow-down</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/cart-plus"><i class="fa fa-cart-plus" aria-hidden="true"></i> <span class="sr-only">Example of </span>cart-plus</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/cc"><i class="fa fa-cc" aria-hidden="true"></i> <span class="sr-only">Example of </span>cc</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/certificate"><i class="fa fa-certificate" aria-hidden="true"></i> <span class="sr-only">Example of </span>certificate</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/check"><i class="fa fa-check" aria-hidden="true"></i> <span class="sr-only">Example of </span>check</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/check-circle"><i class="fa fa-check-circle" aria-hidden="true"></i> <span class="sr-only">Example of </span>check-circle</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/check-circle-o"><i class="fa fa-check-circle-o" aria-hidden="true"></i> <span class="sr-only">Example of </span>check-circle-o</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/check-square"><i class="fa fa-check-square" aria-hidden="true"></i> <span class="sr-only">Example of </span>check-square</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/check-square-o"><i class="fa fa-check-square-o" aria-hidden="true"></i> <span class="sr-only">Example of </span>check-square-o</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/child"><i class="fa fa-child" aria-hidden="true"></i> <span class="sr-only">Example of </span>child</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/circle"><i class="fa fa-circle" aria-hidden="true"></i> <span class="sr-only">Example of </span>circle</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/circle-o"><i class="fa fa-circle-o" aria-hidden="true"></i> <span class="sr-only">Example of </span>circle-o</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/circle-o-notch"><i class="fa fa-circle-o-notch" aria-hidden="true"></i> <span class="sr-only">Example of </span>circle-o-notch</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/circle-thin"><i class="fa fa-circle-thin" aria-hidden="true"></i> <span class="sr-only">Example of </span>circle-thin</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/clock-o"><i class="fa fa-clock-o" aria-hidden="true"></i> <span class="sr-only">Example of </span>clock-o</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/clone"><i class="fa fa-clone" aria-hidden="true"></i> <span class="sr-only">Example of </span>clone</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/times"><i class="fa fa-close" aria-hidden="true"></i> <span class="sr-only">Example of </span>close <span class="text-muted">(alias)</span></a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/cloud"><i class="fa fa-cloud" aria-hidden="true"></i> <span class="sr-only">Example of </span>cloud</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/cloud-download"><i class="fa fa-cloud-download" aria-hidden="true"></i> <span class="sr-only">Example of </span>cloud-download</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/cloud-upload"><i class="fa fa-cloud-upload" aria-hidden="true"></i> <span class="sr-only">Example of </span>cloud-upload</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/code"><i class="fa fa-code" aria-hidden="true"></i> <span class="sr-only">Example of </span>code</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/code-fork"><i class="fa fa-code-fork" aria-hidden="true"></i> <span class="sr-only">Example of </span>code-fork</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/coffee"><i class="fa fa-coffee" aria-hidden="true"></i> <span class="sr-only">Example of </span>coffee</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/cog"><i class="fa fa-cog" aria-hidden="true"></i> <span class="sr-only">Example of </span>cog</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/cogs"><i class="fa fa-cogs" aria-hidden="true"></i> <span class="sr-only">Example of </span>cogs</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/comment"><i class="fa fa-comment" aria-hidden="true"></i> <span class="sr-only">Example of </span>comment</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/comment-o"><i class="fa fa-comment-o" aria-hidden="true"></i> <span class="sr-only">Example of </span>comment-o</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/commenting"><i class="fa fa-commenting" aria-hidden="true"></i> <span class="sr-only">Example of </span>commenting</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/commenting-o"><i class="fa fa-commenting-o" aria-hidden="true"></i> <span class="sr-only">Example of </span>commenting-o</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/comments"><i class="fa fa-comments" aria-hidden="true"></i> <span class="sr-only">Example of </span>comments</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/comments-o"><i class="fa fa-comments-o" aria-hidden="true"></i> <span class="sr-only">Example of </span>comments-o</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/compass"><i class="fa fa-compass" aria-hidden="true"></i> <span class="sr-only">Example of </span>compass</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/copyright"><i class="fa fa-copyright" aria-hidden="true"></i> <span class="sr-only">Example of </span>copyright</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/creative-commons"><i class="fa fa-creative-commons" aria-hidden="true"></i> <span class="sr-only">Example of </span>creative-commons</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/credit-card"><i class="fa fa-credit-card" aria-hidden="true"></i> <span class="sr-only">Example of </span>credit-card</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/credit-card-alt"><i class="fa fa-credit-card-alt" aria-hidden="true"></i> <span class="sr-only">Example of </span>credit-card-alt</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/crop"><i class="fa fa-crop" aria-hidden="true"></i> <span class="sr-only">Example of </span>crop</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/crosshairs"><i class="fa fa-crosshairs" aria-hidden="true"></i> <span class="sr-only">Example of </span>crosshairs</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/cube"><i class="fa fa-cube" aria-hidden="true"></i> <span class="sr-only">Example of </span>cube</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/cubes"><i class="fa fa-cubes" aria-hidden="true"></i> <span class="sr-only">Example of </span>cubes</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/cutlery"><i class="fa fa-cutlery" aria-hidden="true"></i> <span class="sr-only">Example of </span>cutlery</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/tachometer"><i class="fa fa-dashboard" aria-hidden="true"></i> <span class="sr-only">Example of </span>dashboard <span class="text-muted">(alias)</span></a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/database"><i class="fa fa-database" aria-hidden="true"></i> <span class="sr-only">Example of </span>database</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/deaf"><i class="fa fa-deaf" aria-hidden="true"></i> <span class="sr-only">Example of </span>deaf</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/deaf"><i class="fa fa-deafness" aria-hidden="true"></i> <span class="sr-only">Example of </span>deafness <span class="text-muted">(alias)</span></a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/desktop"><i class="fa fa-desktop" aria-hidden="true"></i> <span class="sr-only">Example of </span>desktop</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/diamond"><i class="fa fa-diamond" aria-hidden="true"></i> <span class="sr-only">Example of </span>diamond</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/dot-circle-o"><i class="fa fa-dot-circle-o" aria-hidden="true"></i> <span class="sr-only">Example of </span>dot-circle-o</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/download"><i class="fa fa-download" aria-hidden="true"></i> <span class="sr-only">Example of </span>download</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/id-card"><i class="fa fa-drivers-license" aria-hidden="true"></i> <span class="sr-only">Example of </span>drivers-license <span class="text-muted">(alias)</span></a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/id-card-o"><i class="fa fa-drivers-license-o" aria-hidden="true"></i> <span class="sr-only">Example of </span>drivers-license-o <span class="text-muted">(alias)</span></a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/pencil-square-o"><i class="fa fa-edit" aria-hidden="true"></i> <span class="sr-only">Example of </span>edit <span class="text-muted">(alias)</span></a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/ellipsis-h"><i class="fa fa-ellipsis-h" aria-hidden="true"></i> <span class="sr-only">Example of </span>ellipsis-h</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/ellipsis-v"><i class="fa fa-ellipsis-v" aria-hidden="true"></i> <span class="sr-only">Example of </span>ellipsis-v</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/envelope"><i class="fa fa-envelope" aria-hidden="true"></i> <span class="sr-only">Example of </span>envelope</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/envelope-o"><i class="fa fa-envelope-o" aria-hidden="true"></i> <span class="sr-only">Example of </span>envelope-o</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/envelope-open"><i class="fa fa-envelope-open" aria-hidden="true"></i> <span class="sr-only">Example of </span>envelope-open</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/envelope-open-o"><i class="fa fa-envelope-open-o" aria-hidden="true"></i> <span class="sr-only">Example of </span>envelope-open-o</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/envelope-square"><i class="fa fa-envelope-square" aria-hidden="true"></i> <span class="sr-only">Example of </span>envelope-square</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/eraser"><i class="fa fa-eraser" aria-hidden="true"></i> <span class="sr-only">Example of </span>eraser</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/exchange"><i class="fa fa-exchange" aria-hidden="true"></i> <span class="sr-only">Example of </span>exchange</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/exclamation"><i class="fa fa-exclamation" aria-hidden="true"></i> <span class="sr-only">Example of </span>exclamation</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/exclamation-circle"><i class="fa fa-exclamation-circle" aria-hidden="true"></i> <span class="sr-only">Example of </span>exclamation-circle</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/exclamation-triangle"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> <span class="sr-only">Example of </span>exclamation-triangle</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/external-link"><i class="fa fa-external-link" aria-hidden="true"></i> <span class="sr-only">Example of </span>external-link</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/external-link-square"><i class="fa fa-external-link-square" aria-hidden="true"></i> <span class="sr-only">Example of </span>external-link-square</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/eye"><i class="fa fa-eye" aria-hidden="true"></i> <span class="sr-only">Example of </span>eye</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/eye-slash"><i class="fa fa-eye-slash" aria-hidden="true"></i> <span class="sr-only">Example of </span>eye-slash</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/eyedropper"><i class="fa fa-eyedropper" aria-hidden="true"></i> <span class="sr-only">Example of </span>eyedropper</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/fax"><i class="fa fa-fax" aria-hidden="true"></i> <span class="sr-only">Example of </span>fax</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/rss"><i class="fa fa-feed" aria-hidden="true"></i> <span class="sr-only">Example of </span>feed <span class="text-muted">(alias)</span></a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/female"><i class="fa fa-female" aria-hidden="true"></i> <span class="sr-only">Example of </span>female</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/fighter-jet"><i class="fa fa-fighter-jet" aria-hidden="true"></i> <span class="sr-only">Example of </span>fighter-jet</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/file-archive-o"><i class="fa fa-file-archive-o" aria-hidden="true"></i> <span class="sr-only">Example of </span>file-archive-o</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/file-audio-o"><i class="fa fa-file-audio-o" aria-hidden="true"></i> <span class="sr-only">Example of </span>file-audio-o</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/file-code-o"><i class="fa fa-file-code-o" aria-hidden="true"></i> <span class="sr-only">Example of </span>file-code-o</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/file-excel-o"><i class="fa fa-file-excel-o" aria-hidden="true"></i> <span class="sr-only">Example of </span>file-excel-o</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/file-image-o"><i class="fa fa-file-image-o" aria-hidden="true"></i> <span class="sr-only">Example of </span>file-image-o</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/file-video-o"><i class="fa fa-file-movie-o" aria-hidden="true"></i> <span class="sr-only">Example of </span>file-movie-o <span class="text-muted">(alias)</span></a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/file-pdf-o"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> <span class="sr-only">Example of </span>file-pdf-o</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/file-image-o"><i class="fa fa-file-photo-o" aria-hidden="true"></i> <span class="sr-only">Example of </span>file-photo-o <span class="text-muted">(alias)</span></a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/file-image-o"><i class="fa fa-file-picture-o" aria-hidden="true"></i> <span class="sr-only">Example of </span>file-picture-o <span class="text-muted">(alias)</span></a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/file-powerpoint-o"><i class="fa fa-file-powerpoint-o" aria-hidden="true"></i> <span class="sr-only">Example of </span>file-powerpoint-o</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/file-audio-o"><i class="fa fa-file-sound-o" aria-hidden="true"></i> <span class="sr-only">Example of </span>file-sound-o <span class="text-muted">(alias)</span></a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/file-video-o"><i class="fa fa-file-video-o" aria-hidden="true"></i> <span class="sr-only">Example of </span>file-video-o</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/file-word-o"><i class="fa fa-file-word-o" aria-hidden="true"></i> <span class="sr-only">Example of </span>file-word-o</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/file-archive-o"><i class="fa fa-file-zip-o" aria-hidden="true"></i> <span class="sr-only">Example of </span>file-zip-o <span class="text-muted">(alias)</span></a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/film"><i class="fa fa-film" aria-hidden="true"></i> <span class="sr-only">Example of </span>film</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/filter"><i class="fa fa-filter" aria-hidden="true"></i> <span class="sr-only">Example of </span>filter</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/fire"><i class="fa fa-fire" aria-hidden="true"></i> <span class="sr-only">Example of </span>fire</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/fire-extinguisher"><i class="fa fa-fire-extinguisher" aria-hidden="true"></i> <span class="sr-only">Example of </span>fire-extinguisher</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/flag"><i class="fa fa-flag" aria-hidden="true"></i> <span class="sr-only">Example of </span>flag</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/flag-checkered"><i class="fa fa-flag-checkered" aria-hidden="true"></i> <span class="sr-only">Example of </span>flag-checkered</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/flag-o"><i class="fa fa-flag-o" aria-hidden="true"></i> <span class="sr-only">Example of </span>flag-o</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/bolt"><i class="fa fa-flash" aria-hidden="true"></i> <span class="sr-only">Example of </span>flash <span class="text-muted">(alias)</span></a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/flask"><i class="fa fa-flask" aria-hidden="true"></i> <span class="sr-only">Example of </span>flask</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/folder"><i class="fa fa-folder" aria-hidden="true"></i> <span class="sr-only">Example of </span>folder</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/folder-o"><i class="fa fa-folder-o" aria-hidden="true"></i> <span class="sr-only">Example of </span>folder-o</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/folder-open"><i class="fa fa-folder-open" aria-hidden="true"></i> <span class="sr-only">Example of </span>folder-open</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/folder-open-o"><i class="fa fa-folder-open-o" aria-hidden="true"></i> <span class="sr-only">Example of </span>folder-open-o</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/frown-o"><i class="fa fa-frown-o" aria-hidden="true"></i> <span class="sr-only">Example of </span>frown-o</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/futbol-o"><i class="fa fa-futbol-o" aria-hidden="true"></i> <span class="sr-only">Example of </span>futbol-o</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/gamepad"><i class="fa fa-gamepad" aria-hidden="true"></i> <span class="sr-only">Example of </span>gamepad</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/gavel"><i class="fa fa-gavel" aria-hidden="true"></i> <span class="sr-only">Example of </span>gavel</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/cog"><i class="fa fa-gear" aria-hidden="true"></i> <span class="sr-only">Example of </span>gear <span class="text-muted">(alias)</span></a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/cogs"><i class="fa fa-gears" aria-hidden="true"></i> <span class="sr-only">Example of </span>gears <span class="text-muted">(alias)</span></a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/gift"><i class="fa fa-gift" aria-hidden="true"></i> <span class="sr-only">Example of </span>gift</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/glass"><i class="fa fa-glass" aria-hidden="true"></i> <span class="sr-only">Example of </span>glass</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/globe"><i class="fa fa-globe" aria-hidden="true"></i> <span class="sr-only">Example of </span>globe</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/graduation-cap"><i class="fa fa-graduation-cap" aria-hidden="true"></i> <span class="sr-only">Example of </span>graduation-cap</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/users"><i class="fa fa-group" aria-hidden="true"></i> <span class="sr-only">Example of </span>group <span class="text-muted">(alias)</span></a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/hand-rock-o"><i class="fa fa-hand-grab-o" aria-hidden="true"></i> <span class="sr-only">Example of </span>hand-grab-o <span class="text-muted">(alias)</span></a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/hand-lizard-o"><i class="fa fa-hand-lizard-o" aria-hidden="true"></i> <span class="sr-only">Example of </span>hand-lizard-o</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/hand-paper-o"><i class="fa fa-hand-paper-o" aria-hidden="true"></i> <span class="sr-only">Example of </span>hand-paper-o</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/hand-peace-o"><i class="fa fa-hand-peace-o" aria-hidden="true"></i> <span class="sr-only">Example of </span>hand-peace-o</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/hand-pointer-o"><i class="fa fa-hand-pointer-o" aria-hidden="true"></i> <span class="sr-only">Example of </span>hand-pointer-o</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/hand-rock-o"><i class="fa fa-hand-rock-o" aria-hidden="true"></i> <span class="sr-only">Example of </span>hand-rock-o</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/hand-scissors-o"><i class="fa fa-hand-scissors-o" aria-hidden="true"></i> <span class="sr-only">Example of </span>hand-scissors-o</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/hand-spock-o"><i class="fa fa-hand-spock-o" aria-hidden="true"></i> <span class="sr-only">Example of </span>hand-spock-o</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/hand-paper-o"><i class="fa fa-hand-stop-o" aria-hidden="true"></i> <span class="sr-only">Example of </span>hand-stop-o <span class="text-muted">(alias)</span></a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/handshake-o"><i class="fa fa-handshake-o" aria-hidden="true"></i> <span class="sr-only">Example of </span>handshake-o</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/deaf"><i class="fa fa-hard-of-hearing" aria-hidden="true"></i> <span class="sr-only">Example of </span>hard-of-hearing <span class="text-muted">(alias)</span></a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/hashtag"><i class="fa fa-hashtag" aria-hidden="true"></i> <span class="sr-only">Example of </span>hashtag</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/hdd-o"><i class="fa fa-hdd-o" aria-hidden="true"></i> <span class="sr-only">Example of </span>hdd-o</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/headphones"><i class="fa fa-headphones" aria-hidden="true"></i> <span class="sr-only">Example of </span>headphones</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/heart"><i class="fa fa-heart" aria-hidden="true"></i> <span class="sr-only">Example of </span>heart</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/heart-o"><i class="fa fa-heart-o" aria-hidden="true"></i> <span class="sr-only">Example of </span>heart-o</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/heartbeat"><i class="fa fa-heartbeat" aria-hidden="true"></i> <span class="sr-only">Example of </span>heartbeat</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/history"><i class="fa fa-history" aria-hidden="true"></i> <span class="sr-only">Example of </span>history</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/home"><i class="fa fa-home" aria-hidden="true"></i> <span class="sr-only">Example of </span>home</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/bed"><i class="fa fa-hotel" aria-hidden="true"></i> <span class="sr-only">Example of </span>hotel <span class="text-muted">(alias)</span></a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/hourglass"><i class="fa fa-hourglass" aria-hidden="true"></i> <span class="sr-only">Example of </span>hourglass</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/hourglass-start"><i class="fa fa-hourglass-1" aria-hidden="true"></i> <span class="sr-only">Example of </span>hourglass-1 <span class="text-muted">(alias)</span></a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/hourglass-half"><i class="fa fa-hourglass-2" aria-hidden="true"></i> <span class="sr-only">Example of </span>hourglass-2 <span class="text-muted">(alias)</span></a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/hourglass-end"><i class="fa fa-hourglass-3" aria-hidden="true"></i> <span class="sr-only">Example of </span>hourglass-3 <span class="text-muted">(alias)</span></a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/hourglass-end"><i class="fa fa-hourglass-end" aria-hidden="true"></i> <span class="sr-only">Example of </span>hourglass-end</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/hourglass-half"><i class="fa fa-hourglass-half" aria-hidden="true"></i> <span class="sr-only">Example of </span>hourglass-half</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/hourglass-o"><i class="fa fa-hourglass-o" aria-hidden="true"></i> <span class="sr-only">Example of </span>hourglass-o</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/hourglass-start"><i class="fa fa-hourglass-start" aria-hidden="true"></i> <span class="sr-only">Example of </span>hourglass-start</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/i-cursor"><i class="fa fa-i-cursor" aria-hidden="true"></i> <span class="sr-only">Example of </span>i-cursor</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/id-badge"><i class="fa fa-id-badge" aria-hidden="true"></i> <span class="sr-only">Example of </span>id-badge</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/id-card"><i class="fa fa-id-card" aria-hidden="true"></i> <span class="sr-only">Example of </span>id-card</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/id-card-o"><i class="fa fa-id-card-o" aria-hidden="true"></i> <span class="sr-only">Example of </span>id-card-o</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/picture-o"><i class="fa fa-image" aria-hidden="true"></i> <span class="sr-only">Example of </span>image <span class="text-muted">(alias)</span></a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/inbox"><i class="fa fa-inbox" aria-hidden="true"></i> <span class="sr-only">Example of </span>inbox</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/industry"><i class="fa fa-industry" aria-hidden="true"></i> <span class="sr-only">Example of </span>industry</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/info"><i class="fa fa-info" aria-hidden="true"></i> <span class="sr-only">Example of </span>info</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/info-circle"><i class="fa fa-info-circle" aria-hidden="true"></i> <span class="sr-only">Example of </span>info-circle</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/university"><i class="fa fa-institution" aria-hidden="true"></i> <span class="sr-only">Example of </span>institution <span class="text-muted">(alias)</span></a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/key"><i class="fa fa-key" aria-hidden="true"></i> <span class="sr-only">Example of </span>key</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/keyboard-o"><i class="fa fa-keyboard-o" aria-hidden="true"></i> <span class="sr-only">Example of </span>keyboard-o</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/language"><i class="fa fa-language" aria-hidden="true"></i> <span class="sr-only">Example of </span>language</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/laptop"><i class="fa fa-laptop" aria-hidden="true"></i> <span class="sr-only">Example of </span>laptop</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/leaf"><i class="fa fa-leaf" aria-hidden="true"></i> <span class="sr-only">Example of </span>leaf</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/gavel"><i class="fa fa-legal" aria-hidden="true"></i> <span class="sr-only">Example of </span>legal <span class="text-muted">(alias)</span></a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/lemon-o"><i class="fa fa-lemon-o" aria-hidden="true"></i> <span class="sr-only">Example of </span>lemon-o</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/level-down"><i class="fa fa-level-down" aria-hidden="true"></i> <span class="sr-only">Example of </span>level-down</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/level-up"><i class="fa fa-level-up" aria-hidden="true"></i> <span class="sr-only">Example of </span>level-up</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/life-ring"><i class="fa fa-life-bouy" aria-hidden="true"></i> <span class="sr-only">Example of </span>life-bouy <span class="text-muted">(alias)</span></a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/life-ring"><i class="fa fa-life-buoy" aria-hidden="true"></i> <span class="sr-only">Example of </span>life-buoy <span class="text-muted">(alias)</span></a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/life-ring"><i class="fa fa-life-ring" aria-hidden="true"></i> <span class="sr-only">Example of </span>life-ring</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/life-ring"><i class="fa fa-life-saver" aria-hidden="true"></i> <span class="sr-only">Example of </span>life-saver <span class="text-muted">(alias)</span></a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/lightbulb-o"><i class="fa fa-lightbulb-o" aria-hidden="true"></i> <span class="sr-only">Example of </span>lightbulb-o</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/line-chart"><i class="fa fa-line-chart" aria-hidden="true"></i> <span class="sr-only">Example of </span>line-chart</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/location-arrow"><i class="fa fa-location-arrow" aria-hidden="true"></i> <span class="sr-only">Example of </span>location-arrow</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/lock"><i class="fa fa-lock" aria-hidden="true"></i> <span class="sr-only">Example of </span>lock</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/low-vision"><i class="fa fa-low-vision" aria-hidden="true"></i> <span class="sr-only">Example of </span>low-vision</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/magic"><i class="fa fa-magic" aria-hidden="true"></i> <span class="sr-only">Example of </span>magic</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/magnet"><i class="fa fa-magnet" aria-hidden="true"></i> <span class="sr-only">Example of </span>magnet</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/share"><i class="fa fa-mail-forward" aria-hidden="true"></i> <span class="sr-only">Example of </span>mail-forward <span class="text-muted">(alias)</span></a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/reply"><i class="fa fa-mail-reply" aria-hidden="true"></i> <span class="sr-only">Example of </span>mail-reply <span class="text-muted">(alias)</span></a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/reply-all"><i class="fa fa-mail-reply-all" aria-hidden="true"></i> <span class="sr-only">Example of </span>mail-reply-all <span class="text-muted">(alias)</span></a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/male"><i class="fa fa-male" aria-hidden="true"></i> <span class="sr-only">Example of </span>male</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/map"><i class="fa fa-map" aria-hidden="true"></i> <span class="sr-only">Example of </span>map</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/map-marker"><i class="fa fa-map-marker" aria-hidden="true"></i> <span class="sr-only">Example of </span>map-marker</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/map-o"><i class="fa fa-map-o" aria-hidden="true"></i> <span class="sr-only">Example of </span>map-o</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/map-pin"><i class="fa fa-map-pin" aria-hidden="true"></i> <span class="sr-only">Example of </span>map-pin</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/map-signs"><i class="fa fa-map-signs" aria-hidden="true"></i> <span class="sr-only">Example of </span>map-signs</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/meh-o"><i class="fa fa-meh-o" aria-hidden="true"></i> <span class="sr-only">Example of </span>meh-o</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/microchip"><i class="fa fa-microchip" aria-hidden="true"></i> <span class="sr-only">Example of </span>microchip</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/microphone"><i class="fa fa-microphone" aria-hidden="true"></i> <span class="sr-only">Example of </span>microphone</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/microphone-slash"><i class="fa fa-microphone-slash" aria-hidden="true"></i> <span class="sr-only">Example of </span>microphone-slash</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/minus"><i class="fa fa-minus" aria-hidden="true"></i> <span class="sr-only">Example of </span>minus</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/minus-circle"><i class="fa fa-minus-circle" aria-hidden="true"></i> <span class="sr-only">Example of </span>minus-circle</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/minus-square"><i class="fa fa-minus-square" aria-hidden="true"></i> <span class="sr-only">Example of </span>minus-square</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/minus-square-o"><i class="fa fa-minus-square-o" aria-hidden="true"></i> <span class="sr-only">Example of </span>minus-square-o</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/mobile"><i class="fa fa-mobile" aria-hidden="true"></i> <span class="sr-only">Example of </span>mobile</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/mobile"><i class="fa fa-mobile-phone" aria-hidden="true"></i> <span class="sr-only">Example of </span>mobile-phone <span class="text-muted">(alias)</span></a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/money"><i class="fa fa-money" aria-hidden="true"></i> <span class="sr-only">Example of </span>money</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/moon-o"><i class="fa fa-moon-o" aria-hidden="true"></i> <span class="sr-only">Example of </span>moon-o</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/graduation-cap"><i class="fa fa-mortar-board" aria-hidden="true"></i> <span class="sr-only">Example of </span>mortar-board <span class="text-muted">(alias)</span></a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/motorcycle"><i class="fa fa-motorcycle" aria-hidden="true"></i> <span class="sr-only">Example of </span>motorcycle</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/mouse-pointer"><i class="fa fa-mouse-pointer" aria-hidden="true"></i> <span class="sr-only">Example of </span>mouse-pointer</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/music"><i class="fa fa-music" aria-hidden="true"></i> <span class="sr-only">Example of </span>music</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/bars"><i class="fa fa-navicon" aria-hidden="true"></i> <span class="sr-only">Example of </span>navicon <span class="text-muted">(alias)</span></a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/newspaper-o"><i class="fa fa-newspaper-o" aria-hidden="true"></i> <span class="sr-only">Example of </span>newspaper-o</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/object-group"><i class="fa fa-object-group" aria-hidden="true"></i> <span class="sr-only">Example of </span>object-group</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/object-ungroup"><i class="fa fa-object-ungroup" aria-hidden="true"></i> <span class="sr-only">Example of </span>object-ungroup</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/paint-brush"><i class="fa fa-paint-brush" aria-hidden="true"></i> <span class="sr-only">Example of </span>paint-brush</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/paper-plane"><i class="fa fa-paper-plane" aria-hidden="true"></i> <span class="sr-only">Example of </span>paper-plane</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/paper-plane-o"><i class="fa fa-paper-plane-o" aria-hidden="true"></i> <span class="sr-only">Example of </span>paper-plane-o</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/paw"><i class="fa fa-paw" aria-hidden="true"></i> <span class="sr-only">Example of </span>paw</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/pencil"><i class="fa fa-pencil" aria-hidden="true"></i> <span class="sr-only">Example of </span>pencil</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/pencil-square"><i class="fa fa-pencil-square" aria-hidden="true"></i> <span class="sr-only">Example of </span>pencil-square</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/pencil-square-o"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> <span class="sr-only">Example of </span>pencil-square-o</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/percent"><i class="fa fa-percent" aria-hidden="true"></i> <span class="sr-only">Example of </span>percent</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/phone"><i class="fa fa-phone" aria-hidden="true"></i> <span class="sr-only">Example of </span>phone</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/phone-square"><i class="fa fa-phone-square" aria-hidden="true"></i> <span class="sr-only">Example of </span>phone-square</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/picture-o"><i class="fa fa-photo" aria-hidden="true"></i> <span class="sr-only">Example of </span>photo <span class="text-muted">(alias)</span></a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/picture-o"><i class="fa fa-picture-o" aria-hidden="true"></i> <span class="sr-only">Example of </span>picture-o</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/pie-chart"><i class="fa fa-pie-chart" aria-hidden="true"></i> <span class="sr-only">Example of </span>pie-chart</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/plane"><i class="fa fa-plane" aria-hidden="true"></i> <span class="sr-only">Example of </span>plane</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/plug"><i class="fa fa-plug" aria-hidden="true"></i> <span class="sr-only">Example of </span>plug</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/plus"><i class="fa fa-plus" aria-hidden="true"></i> <span class="sr-only">Example of </span>plus</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/plus-circle"><i class="fa fa-plus-circle" aria-hidden="true"></i> <span class="sr-only">Example of </span>plus-circle</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/plus-square"><i class="fa fa-plus-square" aria-hidden="true"></i> <span class="sr-only">Example of </span>plus-square</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/plus-square-o"><i class="fa fa-plus-square-o" aria-hidden="true"></i> <span class="sr-only">Example of </span>plus-square-o</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/podcast"><i class="fa fa-podcast" aria-hidden="true"></i> <span class="sr-only">Example of </span>podcast</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/power-off"><i class="fa fa-power-off" aria-hidden="true"></i> <span class="sr-only">Example of </span>power-off</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/print"><i class="fa fa-print" aria-hidden="true"></i> <span class="sr-only">Example of </span>print</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/puzzle-piece"><i class="fa fa-puzzle-piece" aria-hidden="true"></i> <span class="sr-only">Example of </span>puzzle-piece</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/qrcode"><i class="fa fa-qrcode" aria-hidden="true"></i> <span class="sr-only">Example of </span>qrcode</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/question"><i class="fa fa-question" aria-hidden="true"></i> <span class="sr-only">Example of </span>question</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/question-circle"><i class="fa fa-question-circle" aria-hidden="true"></i> <span class="sr-only">Example of </span>question-circle</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/question-circle-o"><i class="fa fa-question-circle-o" aria-hidden="true"></i> <span class="sr-only">Example of </span>question-circle-o</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/quote-left"><i class="fa fa-quote-left" aria-hidden="true"></i> <span class="sr-only">Example of </span>quote-left</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/quote-right"><i class="fa fa-quote-right" aria-hidden="true"></i> <span class="sr-only">Example of </span>quote-right</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/random"><i class="fa fa-random" aria-hidden="true"></i> <span class="sr-only">Example of </span>random</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/recycle"><i class="fa fa-recycle" aria-hidden="true"></i> <span class="sr-only">Example of </span>recycle</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/refresh"><i class="fa fa-refresh" aria-hidden="true"></i> <span class="sr-only">Example of </span>refresh</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/registered"><i class="fa fa-registered" aria-hidden="true"></i> <span class="sr-only">Example of </span>registered</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/times"><i class="fa fa-remove" aria-hidden="true"></i> <span class="sr-only">Example of </span>remove <span class="text-muted">(alias)</span></a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/bars"><i class="fa fa-reorder" aria-hidden="true"></i> <span class="sr-only">Example of </span>reorder <span class="text-muted">(alias)</span></a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/reply"><i class="fa fa-reply" aria-hidden="true"></i> <span class="sr-only">Example of </span>reply</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/reply-all"><i class="fa fa-reply-all" aria-hidden="true"></i> <span class="sr-only">Example of </span>reply-all</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/retweet"><i class="fa fa-retweet" aria-hidden="true"></i> <span class="sr-only">Example of </span>retweet</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/road"><i class="fa fa-road" aria-hidden="true"></i> <span class="sr-only">Example of </span>road</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/rocket"><i class="fa fa-rocket" aria-hidden="true"></i> <span class="sr-only">Example of </span>rocket</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/rss"><i class="fa fa-rss" aria-hidden="true"></i> <span class="sr-only">Example of </span>rss</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/rss-square"><i class="fa fa-rss-square" aria-hidden="true"></i> <span class="sr-only">Example of </span>rss-square</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/bath"><i class="fa fa-s15" aria-hidden="true"></i> <span class="sr-only">Example of </span>s15 <span class="text-muted">(alias)</span></a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/search"><i class="fa fa-search" aria-hidden="true"></i> <span class="sr-only">Example of </span>search</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/search-minus"><i class="fa fa-search-minus" aria-hidden="true"></i> <span class="sr-only">Example of </span>search-minus</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/search-plus"><i class="fa fa-search-plus" aria-hidden="true"></i> <span class="sr-only">Example of </span>search-plus</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/paper-plane"><i class="fa fa-send" aria-hidden="true"></i> <span class="sr-only">Example of </span>send <span class="text-muted">(alias)</span></a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/paper-plane-o"><i class="fa fa-send-o" aria-hidden="true"></i> <span class="sr-only">Example of </span>send-o <span class="text-muted">(alias)</span></a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/server"><i class="fa fa-server" aria-hidden="true"></i> <span class="sr-only">Example of </span>server</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/share"><i class="fa fa-share" aria-hidden="true"></i> <span class="sr-only">Example of </span>share</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/share-alt"><i class="fa fa-share-alt" aria-hidden="true"></i> <span class="sr-only">Example of </span>share-alt</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/share-alt-square"><i class="fa fa-share-alt-square" aria-hidden="true"></i> <span class="sr-only">Example of </span>share-alt-square</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/share-square"><i class="fa fa-share-square" aria-hidden="true"></i> <span class="sr-only">Example of </span>share-square</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/share-square-o"><i class="fa fa-share-square-o" aria-hidden="true"></i> <span class="sr-only">Example of </span>share-square-o</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/shield"><i class="fa fa-shield" aria-hidden="true"></i> <span class="sr-only">Example of </span>shield</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/ship"><i class="fa fa-ship" aria-hidden="true"></i> <span class="sr-only">Example of </span>ship</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/shopping-bag"><i class="fa fa-shopping-bag" aria-hidden="true"></i> <span class="sr-only">Example of </span>shopping-bag</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/shopping-basket"><i class="fa fa-shopping-basket" aria-hidden="true"></i> <span class="sr-only">Example of </span>shopping-basket</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/shopping-cart"><i class="fa fa-shopping-cart" aria-hidden="true"></i> <span class="sr-only">Example of </span>shopping-cart</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/shower"><i class="fa fa-shower" aria-hidden="true"></i> <span class="sr-only">Example of </span>shower</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/sign-in"><i class="fa fa-sign-in" aria-hidden="true"></i> <span class="sr-only">Example of </span>sign-in</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/sign-language"><i class="fa fa-sign-language" aria-hidden="true"></i> <span class="sr-only">Example of </span>sign-language</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/sign-out"><i class="fa fa-sign-out" aria-hidden="true"></i> <span class="sr-only">Example of </span>sign-out</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/signal"><i class="fa fa-signal" aria-hidden="true"></i> <span class="sr-only">Example of </span>signal</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/sign-language"><i class="fa fa-signing" aria-hidden="true"></i> <span class="sr-only">Example of </span>signing <span class="text-muted">(alias)</span></a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/sitemap"><i class="fa fa-sitemap" aria-hidden="true"></i> <span class="sr-only">Example of </span>sitemap</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/sliders"><i class="fa fa-sliders" aria-hidden="true"></i> <span class="sr-only">Example of </span>sliders</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/smile-o"><i class="fa fa-smile-o" aria-hidden="true"></i> <span class="sr-only">Example of </span>smile-o</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/snowflake-o"><i class="fa fa-snowflake-o" aria-hidden="true"></i> <span class="sr-only">Example of </span>snowflake-o</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/futbol-o"><i class="fa fa-soccer-ball-o" aria-hidden="true"></i> <span class="sr-only">Example of </span>soccer-ball-o <span class="text-muted">(alias)</span></a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/sort"><i class="fa fa-sort" aria-hidden="true"></i> <span class="sr-only">Example of </span>sort</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/sort-alpha-asc"><i class="fa fa-sort-alpha-asc" aria-hidden="true"></i> <span class="sr-only">Example of </span>sort-alpha-asc</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/sort-alpha-desc"><i class="fa fa-sort-alpha-desc" aria-hidden="true"></i> <span class="sr-only">Example of </span>sort-alpha-desc</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/sort-amount-asc"><i class="fa fa-sort-amount-asc" aria-hidden="true"></i> <span class="sr-only">Example of </span>sort-amount-asc</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/sort-amount-desc"><i class="fa fa-sort-amount-desc" aria-hidden="true"></i> <span class="sr-only">Example of </span>sort-amount-desc</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/sort-asc"><i class="fa fa-sort-asc" aria-hidden="true"></i> <span class="sr-only">Example of </span>sort-asc</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/sort-desc"><i class="fa fa-sort-desc" aria-hidden="true"></i> <span class="sr-only">Example of </span>sort-desc</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/sort-desc"><i class="fa fa-sort-down" aria-hidden="true"></i> <span class="sr-only">Example of </span>sort-down <span class="text-muted">(alias)</span></a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/sort-numeric-asc"><i class="fa fa-sort-numeric-asc" aria-hidden="true"></i> <span class="sr-only">Example of </span>sort-numeric-asc</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/sort-numeric-desc"><i class="fa fa-sort-numeric-desc" aria-hidden="true"></i> <span class="sr-only">Example of </span>sort-numeric-desc</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/sort-asc"><i class="fa fa-sort-up" aria-hidden="true"></i> <span class="sr-only">Example of </span>sort-up <span class="text-muted">(alias)</span></a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/space-shuttle"><i class="fa fa-space-shuttle" aria-hidden="true"></i> <span class="sr-only">Example of </span>space-shuttle</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/spinner"><i class="fa fa-spinner" aria-hidden="true"></i> <span class="sr-only">Example of </span>spinner</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/spoon"><i class="fa fa-spoon" aria-hidden="true"></i> <span class="sr-only">Example of </span>spoon</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/square"><i class="fa fa-square" aria-hidden="true"></i> <span class="sr-only">Example of </span>square</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/square-o"><i class="fa fa-square-o" aria-hidden="true"></i> <span class="sr-only">Example of </span>square-o</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/star"><i class="fa fa-star" aria-hidden="true"></i> <span class="sr-only">Example of </span>star</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/star-half"><i class="fa fa-star-half" aria-hidden="true"></i> <span class="sr-only">Example of </span>star-half</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/star-half-o"><i class="fa fa-star-half-empty" aria-hidden="true"></i> <span class="sr-only">Example of </span>star-half-empty <span class="text-muted">(alias)</span></a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/star-half-o"><i class="fa fa-star-half-full" aria-hidden="true"></i> <span class="sr-only">Example of </span>star-half-full <span class="text-muted">(alias)</span></a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/star-half-o"><i class="fa fa-star-half-o" aria-hidden="true"></i> <span class="sr-only">Example of </span>star-half-o</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/star-o"><i class="fa fa-star-o" aria-hidden="true"></i> <span class="sr-only">Example of </span>star-o</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/sticky-note"><i class="fa fa-sticky-note" aria-hidden="true"></i> <span class="sr-only">Example of </span>sticky-note</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/sticky-note-o"><i class="fa fa-sticky-note-o" aria-hidden="true"></i> <span class="sr-only">Example of </span>sticky-note-o</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/street-view"><i class="fa fa-street-view" aria-hidden="true"></i> <span class="sr-only">Example of </span>street-view</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/suitcase"><i class="fa fa-suitcase" aria-hidden="true"></i> <span class="sr-only">Example of </span>suitcase</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/sun-o"><i class="fa fa-sun-o" aria-hidden="true"></i> <span class="sr-only">Example of </span>sun-o</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/life-ring"><i class="fa fa-support" aria-hidden="true"></i> <span class="sr-only">Example of </span>support <span class="text-muted">(alias)</span></a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/tablet"><i class="fa fa-tablet" aria-hidden="true"></i> <span class="sr-only">Example of </span>tablet</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/tachometer"><i class="fa fa-tachometer" aria-hidden="true"></i> <span class="sr-only">Example of </span>tachometer</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/tag"><i class="fa fa-tag" aria-hidden="true"></i> <span class="sr-only">Example of </span>tag</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/tags"><i class="fa fa-tags" aria-hidden="true"></i> <span class="sr-only">Example of </span>tags</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/tasks"><i class="fa fa-tasks" aria-hidden="true"></i> <span class="sr-only">Example of </span>tasks</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/taxi"><i class="fa fa-taxi" aria-hidden="true"></i> <span class="sr-only">Example of </span>taxi</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/television"><i class="fa fa-television" aria-hidden="true"></i> <span class="sr-only">Example of </span>television</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/terminal"><i class="fa fa-terminal" aria-hidden="true"></i> <span class="sr-only">Example of </span>terminal</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/thermometer-full"><i class="fa fa-thermometer" aria-hidden="true"></i> <span class="sr-only">Example of </span>thermometer <span class="text-muted">(alias)</span></a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/thermometer-empty"><i class="fa fa-thermometer-0" aria-hidden="true"></i> <span class="sr-only">Example of </span>thermometer-0 <span class="text-muted">(alias)</span></a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/thermometer-quarter"><i class="fa fa-thermometer-1" aria-hidden="true"></i> <span class="sr-only">Example of </span>thermometer-1 <span class="text-muted">(alias)</span></a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/thermometer-half"><i class="fa fa-thermometer-2" aria-hidden="true"></i> <span class="sr-only">Example of </span>thermometer-2 <span class="text-muted">(alias)</span></a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/thermometer-three-quarters"><i class="fa fa-thermometer-3" aria-hidden="true"></i> <span class="sr-only">Example of </span>thermometer-3 <span class="text-muted">(alias)</span></a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/thermometer-full"><i class="fa fa-thermometer-4" aria-hidden="true"></i> <span class="sr-only">Example of </span>thermometer-4 <span class="text-muted">(alias)</span></a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/thermometer-empty"><i class="fa fa-thermometer-empty" aria-hidden="true"></i> <span class="sr-only">Example of </span>thermometer-empty</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/thermometer-full"><i class="fa fa-thermometer-full" aria-hidden="true"></i> <span class="sr-only">Example of </span>thermometer-full</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/thermometer-half"><i class="fa fa-thermometer-half" aria-hidden="true"></i> <span class="sr-only">Example of </span>thermometer-half</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/thermometer-quarter"><i class="fa fa-thermometer-quarter" aria-hidden="true"></i> <span class="sr-only">Example of </span>thermometer-quarter</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/thermometer-three-quarters"><i class="fa fa-thermometer-three-quarters" aria-hidden="true"></i> <span class="sr-only">Example of </span>thermometer-three-quarters</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/thumb-tack"><i class="fa fa-thumb-tack" aria-hidden="true"></i> <span class="sr-only">Example of </span>thumb-tack</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/thumbs-down"><i class="fa fa-thumbs-down" aria-hidden="true"></i> <span class="sr-only">Example of </span>thumbs-down</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/thumbs-o-down"><i class="fa fa-thumbs-o-down" aria-hidden="true"></i> <span class="sr-only">Example of </span>thumbs-o-down</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/thumbs-o-up"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> <span class="sr-only">Example of </span>thumbs-o-up</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/thumbs-up"><i class="fa fa-thumbs-up" aria-hidden="true"></i> <span class="sr-only">Example of </span>thumbs-up</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/ticket"><i class="fa fa-ticket" aria-hidden="true"></i> <span class="sr-only">Example of </span>ticket</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/times"><i class="fa fa-times" aria-hidden="true"></i> <span class="sr-only">Example of </span>times</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/times-circle"><i class="fa fa-times-circle" aria-hidden="true"></i> <span class="sr-only">Example of </span>times-circle</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/times-circle-o"><i class="fa fa-times-circle-o" aria-hidden="true"></i> <span class="sr-only">Example of </span>times-circle-o</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/window-close"><i class="fa fa-times-rectangle" aria-hidden="true"></i> <span class="sr-only">Example of </span>times-rectangle <span class="text-muted">(alias)</span></a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/window-close-o"><i class="fa fa-times-rectangle-o" aria-hidden="true"></i> <span class="sr-only">Example of </span>times-rectangle-o <span class="text-muted">(alias)</span></a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/tint"><i class="fa fa-tint" aria-hidden="true"></i> <span class="sr-only">Example of </span>tint</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/caret-square-o-down"><i class="fa fa-toggle-down" aria-hidden="true"></i> <span class="sr-only">Example of </span>toggle-down <span class="text-muted">(alias)</span></a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/caret-square-o-left"><i class="fa fa-toggle-left" aria-hidden="true"></i> <span class="sr-only">Example of </span>toggle-left <span class="text-muted">(alias)</span></a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/toggle-off"><i class="fa fa-toggle-off" aria-hidden="true"></i> <span class="sr-only">Example of </span>toggle-off</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/toggle-on"><i class="fa fa-toggle-on" aria-hidden="true"></i> <span class="sr-only">Example of </span>toggle-on</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/caret-square-o-right"><i class="fa fa-toggle-right" aria-hidden="true"></i> <span class="sr-only">Example of </span>toggle-right <span class="text-muted">(alias)</span></a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/caret-square-o-up"><i class="fa fa-toggle-up" aria-hidden="true"></i> <span class="sr-only">Example of </span>toggle-up <span class="text-muted">(alias)</span></a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/trademark"><i class="fa fa-trademark" aria-hidden="true"></i> <span class="sr-only">Example of </span>trademark</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/trash"><i class="fa fa-trash" aria-hidden="true"></i> <span class="sr-only">Example of </span>trash</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/trash-o"><i class="fa fa-trash-o" aria-hidden="true"></i> <span class="sr-only">Example of </span>trash-o</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/tree"><i class="fa fa-tree" aria-hidden="true"></i> <span class="sr-only">Example of </span>tree</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/trophy"><i class="fa fa-trophy" aria-hidden="true"></i> <span class="sr-only">Example of </span>trophy</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/truck"><i class="fa fa-truck" aria-hidden="true"></i> <span class="sr-only">Example of </span>truck</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/tty"><i class="fa fa-tty" aria-hidden="true"></i> <span class="sr-only">Example of </span>tty</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/television"><i class="fa fa-tv" aria-hidden="true"></i> <span class="sr-only">Example of </span>tv <span class="text-muted">(alias)</span></a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/umbrella"><i class="fa fa-umbrella" aria-hidden="true"></i> <span class="sr-only">Example of </span>umbrella</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/universal-access"><i class="fa fa-universal-access" aria-hidden="true"></i> <span class="sr-only">Example of </span>universal-access</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/university"><i class="fa fa-university" aria-hidden="true"></i> <span class="sr-only">Example of </span>university</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/unlock"><i class="fa fa-unlock" aria-hidden="true"></i> <span class="sr-only">Example of </span>unlock</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/unlock-alt"><i class="fa fa-unlock-alt" aria-hidden="true"></i> <span class="sr-only">Example of </span>unlock-alt</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/sort"><i class="fa fa-unsorted" aria-hidden="true"></i> <span class="sr-only">Example of </span>unsorted <span class="text-muted">(alias)</span></a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/upload"><i class="fa fa-upload" aria-hidden="true"></i> <span class="sr-only">Example of </span>upload</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/user"><i class="fa fa-user" aria-hidden="true"></i> <span class="sr-only">Example of </span>user</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/user-circle"><i class="fa fa-user-circle" aria-hidden="true"></i> <span class="sr-only">Example of </span>user-circle</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/user-circle-o"><i class="fa fa-user-circle-o" aria-hidden="true"></i> <span class="sr-only">Example of </span>user-circle-o</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/user-o"><i class="fa fa-user-o" aria-hidden="true"></i> <span class="sr-only">Example of </span>user-o</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/user-plus"><i class="fa fa-user-plus" aria-hidden="true"></i> <span class="sr-only">Example of </span>user-plus</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/user-secret"><i class="fa fa-user-secret" aria-hidden="true"></i> <span class="sr-only">Example of </span>user-secret</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/user-times"><i class="fa fa-user-times" aria-hidden="true"></i> <span class="sr-only">Example of </span>user-times</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/users"><i class="fa fa-users" aria-hidden="true"></i> <span class="sr-only">Example of </span>users</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/address-card"><i class="fa fa-vcard" aria-hidden="true"></i> <span class="sr-only">Example of </span>vcard <span class="text-muted">(alias)</span></a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/address-card-o"><i class="fa fa-vcard-o" aria-hidden="true"></i> <span class="sr-only">Example of </span>vcard-o <span class="text-muted">(alias)</span></a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/video-camera"><i class="fa fa-video-camera" aria-hidden="true"></i> <span class="sr-only">Example of </span>video-camera</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/volume-control-phone"><i class="fa fa-volume-control-phone" aria-hidden="true"></i> <span class="sr-only">Example of </span>volume-control-phone</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/volume-down"><i class="fa fa-volume-down" aria-hidden="true"></i> <span class="sr-only">Example of </span>volume-down</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/volume-off"><i class="fa fa-volume-off" aria-hidden="true"></i> <span class="sr-only">Example of </span>volume-off</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/volume-up"><i class="fa fa-volume-up" aria-hidden="true"></i> <span class="sr-only">Example of </span>volume-up</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/exclamation-triangle"><i class="fa fa-warning" aria-hidden="true"></i> <span class="sr-only">Example of </span>warning <span class="text-muted">(alias)</span></a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/wheelchair"><i class="fa fa-wheelchair" aria-hidden="true"></i> <span class="sr-only">Example of </span>wheelchair</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/wheelchair-alt"><i class="fa fa-wheelchair-alt" aria-hidden="true"></i> <span class="sr-only">Example of </span>wheelchair-alt</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/wifi"><i class="fa fa-wifi" aria-hidden="true"></i> <span class="sr-only">Example of </span>wifi</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/window-close"><i class="fa fa-window-close" aria-hidden="true"></i> <span class="sr-only">Example of </span>window-close</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/window-close-o"><i class="fa fa-window-close-o" aria-hidden="true"></i> <span class="sr-only">Example of </span>window-close-o</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/window-maximize"><i class="fa fa-window-maximize" aria-hidden="true"></i> <span class="sr-only">Example of </span>window-maximize</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/window-minimize"><i class="fa fa-window-minimize" aria-hidden="true"></i> <span class="sr-only">Example of </span>window-minimize</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/window-restore"><i class="fa fa-window-restore" aria-hidden="true"></i> <span class="sr-only">Example of </span>window-restore</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/wrench"><i class="fa fa-wrench" aria-hidden="true"></i> <span class="sr-only">Example of </span>wrench</a>
                                </div>

                            </div>

                        </section>

                        <section id="accessibility">
                            <div class="panel-heading mb-2" class="page-header">Accessibility Icons</div>

                            <div class="row fontawesome-icon-list">



                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/american-sign-language-interpreting"><i class="fa fa-american-sign-language-interpreting" aria-hidden="true"></i> <span class="sr-only">Example of </span>american-sign-language-interpreting</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/american-sign-language-interpreting"><i class="fa fa-asl-interpreting" aria-hidden="true"></i> <span class="sr-only">Example of </span>asl-interpreting <span class="text-muted">(alias)</span></a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/assistive-listening-systems"><i class="fa fa-assistive-listening-systems" aria-hidden="true"></i> <span class="sr-only">Example of </span>assistive-listening-systems</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/audio-description"><i class="fa fa-audio-description" aria-hidden="true"></i> <span class="sr-only">Example of </span>audio-description</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/blind"><i class="fa fa-blind" aria-hidden="true"></i> <span class="sr-only">Example of </span>blind</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/braille"><i class="fa fa-braille" aria-hidden="true"></i> <span class="sr-only">Example of </span>braille</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/cc"><i class="fa fa-cc" aria-hidden="true"></i> <span class="sr-only">Example of </span>cc</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/deaf"><i class="fa fa-deaf" aria-hidden="true"></i> <span class="sr-only">Example of </span>deaf</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/deaf"><i class="fa fa-deafness" aria-hidden="true"></i> <span class="sr-only">Example of </span>deafness <span class="text-muted">(alias)</span></a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/deaf"><i class="fa fa-hard-of-hearing" aria-hidden="true"></i> <span class="sr-only">Example of </span>hard-of-hearing <span class="text-muted">(alias)</span></a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/low-vision"><i class="fa fa-low-vision" aria-hidden="true"></i> <span class="sr-only">Example of </span>low-vision</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/question-circle-o"><i class="fa fa-question-circle-o" aria-hidden="true"></i> <span class="sr-only">Example of </span>question-circle-o</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/sign-language"><i class="fa fa-sign-language" aria-hidden="true"></i> <span class="sr-only">Example of </span>sign-language</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/sign-language"><i class="fa fa-signing" aria-hidden="true"></i> <span class="sr-only">Example of </span>signing <span class="text-muted">(alias)</span></a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/tty"><i class="fa fa-tty" aria-hidden="true"></i> <span class="sr-only">Example of </span>tty</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/universal-access"><i class="fa fa-universal-access" aria-hidden="true"></i> <span class="sr-only">Example of </span>universal-access</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/volume-control-phone"><i class="fa fa-volume-control-phone" aria-hidden="true"></i> <span class="sr-only">Example of </span>volume-control-phone</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/wheelchair"><i class="fa fa-wheelchair" aria-hidden="true"></i> <span class="sr-only">Example of </span>wheelchair</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/wheelchair-alt"><i class="fa fa-wheelchair-alt" aria-hidden="true"></i> <span class="sr-only">Example of </span>wheelchair-alt</a>
                                </div>

                            </div>

                        </section>

                        <section id="hand">
                            <div class="panel-heading mb-2" class="page-header">Hand Icons</div>

                            <div class="row fontawesome-icon-list">



                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/hand-rock-o"><i class="fa fa-hand-grab-o" aria-hidden="true"></i> <span class="sr-only">Example of </span>hand-grab-o <span class="text-muted">(alias)</span></a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/hand-lizard-o"><i class="fa fa-hand-lizard-o" aria-hidden="true"></i> <span class="sr-only">Example of </span>hand-lizard-o</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/hand-o-down"><i class="fa fa-hand-o-down" aria-hidden="true"></i> <span class="sr-only">Example of </span>hand-o-down</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/hand-o-left"><i class="fa fa-hand-o-left" aria-hidden="true"></i> <span class="sr-only">Example of </span>hand-o-left</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/hand-o-right"><i class="fa fa-hand-o-right" aria-hidden="true"></i> <span class="sr-only">Example of </span>hand-o-right</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/hand-o-up"><i class="fa fa-hand-o-up" aria-hidden="true"></i> <span class="sr-only">Example of </span>hand-o-up</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/hand-paper-o"><i class="fa fa-hand-paper-o" aria-hidden="true"></i> <span class="sr-only">Example of </span>hand-paper-o</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/hand-peace-o"><i class="fa fa-hand-peace-o" aria-hidden="true"></i> <span class="sr-only">Example of </span>hand-peace-o</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/hand-pointer-o"><i class="fa fa-hand-pointer-o" aria-hidden="true"></i> <span class="sr-only">Example of </span>hand-pointer-o</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/hand-rock-o"><i class="fa fa-hand-rock-o" aria-hidden="true"></i> <span class="sr-only">Example of </span>hand-rock-o</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/hand-scissors-o"><i class="fa fa-hand-scissors-o" aria-hidden="true"></i> <span class="sr-only">Example of </span>hand-scissors-o</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/hand-spock-o"><i class="fa fa-hand-spock-o" aria-hidden="true"></i> <span class="sr-only">Example of </span>hand-spock-o</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/hand-paper-o"><i class="fa fa-hand-stop-o" aria-hidden="true"></i> <span class="sr-only">Example of </span>hand-stop-o <span class="text-muted">(alias)</span></a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/thumbs-down"><i class="fa fa-thumbs-down" aria-hidden="true"></i> <span class="sr-only">Example of </span>thumbs-down</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/thumbs-o-down"><i class="fa fa-thumbs-o-down" aria-hidden="true"></i> <span class="sr-only">Example of </span>thumbs-o-down</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/thumbs-o-up"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> <span class="sr-only">Example of </span>thumbs-o-up</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/thumbs-up"><i class="fa fa-thumbs-up" aria-hidden="true"></i> <span class="sr-only">Example of </span>thumbs-up</a>
                                </div>

                            </div>

                        </section>

                        <section id="transportation">
                            <div class="panel-heading mb-2" class="page-header">Transportation Icons</div>

                            <div class="row fontawesome-icon-list">



                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/ambulance"><i class="fa fa-ambulance" aria-hidden="true"></i> <span class="sr-only">Example of </span>ambulance</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/car"><i class="fa fa-automobile" aria-hidden="true"></i> <span class="sr-only">Example of </span>automobile <span class="text-muted">(alias)</span></a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/bicycle"><i class="fa fa-bicycle" aria-hidden="true"></i> <span class="sr-only">Example of </span>bicycle</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/bus"><i class="fa fa-bus" aria-hidden="true"></i> <span class="sr-only">Example of </span>bus</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/taxi"><i class="fa fa-cab" aria-hidden="true"></i> <span class="sr-only">Example of </span>cab <span class="text-muted">(alias)</span></a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/car"><i class="fa fa-car" aria-hidden="true"></i> <span class="sr-only">Example of </span>car</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/fighter-jet"><i class="fa fa-fighter-jet" aria-hidden="true"></i> <span class="sr-only">Example of </span>fighter-jet</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/motorcycle"><i class="fa fa-motorcycle" aria-hidden="true"></i> <span class="sr-only">Example of </span>motorcycle</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/plane"><i class="fa fa-plane" aria-hidden="true"></i> <span class="sr-only">Example of </span>plane</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/rocket"><i class="fa fa-rocket" aria-hidden="true"></i> <span class="sr-only">Example of </span>rocket</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/ship"><i class="fa fa-ship" aria-hidden="true"></i> <span class="sr-only">Example of </span>ship</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/space-shuttle"><i class="fa fa-space-shuttle" aria-hidden="true"></i> <span class="sr-only">Example of </span>space-shuttle</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/subway"><i class="fa fa-subway" aria-hidden="true"></i> <span class="sr-only">Example of </span>subway</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/taxi"><i class="fa fa-taxi" aria-hidden="true"></i> <span class="sr-only">Example of </span>taxi</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/train"><i class="fa fa-train" aria-hidden="true"></i> <span class="sr-only">Example of </span>train</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/truck"><i class="fa fa-truck" aria-hidden="true"></i> <span class="sr-only">Example of </span>truck</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/wheelchair"><i class="fa fa-wheelchair" aria-hidden="true"></i> <span class="sr-only">Example of </span>wheelchair</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/wheelchair-alt"><i class="fa fa-wheelchair-alt" aria-hidden="true"></i> <span class="sr-only">Example of </span>wheelchair-alt</a>
                                </div>

                            </div>

                        </section>

                        <section id="gender">
                            <div class="panel-heading mb-2" class="page-header">Gender Icons</div>

                            <div class="row fontawesome-icon-list">



                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/genderless"><i class="fa fa-genderless" aria-hidden="true"></i> <span class="sr-only">Example of </span>genderless</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/transgender"><i class="fa fa-intersex" aria-hidden="true"></i> <span class="sr-only">Example of </span>intersex <span class="text-muted">(alias)</span></a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/mars"><i class="fa fa-mars" aria-hidden="true"></i> <span class="sr-only">Example of </span>mars</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/mars-double"><i class="fa fa-mars-double" aria-hidden="true"></i> <span class="sr-only">Example of </span>mars-double</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/mars-stroke"><i class="fa fa-mars-stroke" aria-hidden="true"></i> <span class="sr-only">Example of </span>mars-stroke</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/mars-stroke-h"><i class="fa fa-mars-stroke-h" aria-hidden="true"></i> <span class="sr-only">Example of </span>mars-stroke-h</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/mars-stroke-v"><i class="fa fa-mars-stroke-v" aria-hidden="true"></i> <span class="sr-only">Example of </span>mars-stroke-v</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/mercury"><i class="fa fa-mercury" aria-hidden="true"></i> <span class="sr-only">Example of </span>mercury</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/neuter"><i class="fa fa-neuter" aria-hidden="true"></i> <span class="sr-only">Example of </span>neuter</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/transgender"><i class="fa fa-transgender" aria-hidden="true"></i> <span class="sr-only">Example of </span>transgender</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/transgender-alt"><i class="fa fa-transgender-alt" aria-hidden="true"></i> <span class="sr-only">Example of </span>transgender-alt</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/venus"><i class="fa fa-venus" aria-hidden="true"></i> <span class="sr-only">Example of </span>venus</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/venus-double"><i class="fa fa-venus-double" aria-hidden="true"></i> <span class="sr-only">Example of </span>venus-double</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/venus-mars"><i class="fa fa-venus-mars" aria-hidden="true"></i> <span class="sr-only">Example of </span>venus-mars</a>
                                </div>

                            </div>

                        </section>

                        <section id="file-type">
                            <div class="panel-heading mb-2" class="page-header">File Type Icons</div>

                            <div class="row fontawesome-icon-list">



                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/file"><i class="fa fa-file" aria-hidden="true"></i> <span class="sr-only">Example of </span>file</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/file-archive-o"><i class="fa fa-file-archive-o" aria-hidden="true"></i> <span class="sr-only">Example of </span>file-archive-o</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/file-audio-o"><i class="fa fa-file-audio-o" aria-hidden="true"></i> <span class="sr-only">Example of </span>file-audio-o</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/file-code-o"><i class="fa fa-file-code-o" aria-hidden="true"></i> <span class="sr-only">Example of </span>file-code-o</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/file-excel-o"><i class="fa fa-file-excel-o" aria-hidden="true"></i> <span class="sr-only">Example of </span>file-excel-o</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/file-image-o"><i class="fa fa-file-image-o" aria-hidden="true"></i> <span class="sr-only">Example of </span>file-image-o</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/file-video-o"><i class="fa fa-file-movie-o" aria-hidden="true"></i> <span class="sr-only">Example of </span>file-movie-o <span class="text-muted">(alias)</span></a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/file-o"><i class="fa fa-file-o" aria-hidden="true"></i> <span class="sr-only">Example of </span>file-o</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/file-pdf-o"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> <span class="sr-only">Example of </span>file-pdf-o</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/file-image-o"><i class="fa fa-file-photo-o" aria-hidden="true"></i> <span class="sr-only">Example of </span>file-photo-o <span class="text-muted">(alias)</span></a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/file-image-o"><i class="fa fa-file-picture-o" aria-hidden="true"></i> <span class="sr-only">Example of </span>file-picture-o <span class="text-muted">(alias)</span></a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/file-powerpoint-o"><i class="fa fa-file-powerpoint-o" aria-hidden="true"></i> <span class="sr-only">Example of </span>file-powerpoint-o</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/file-audio-o"><i class="fa fa-file-sound-o" aria-hidden="true"></i> <span class="sr-only">Example of </span>file-sound-o <span class="text-muted">(alias)</span></a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/file-text"><i class="fa fa-file-text" aria-hidden="true"></i> <span class="sr-only">Example of </span>file-text</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/file-text-o"><i class="fa fa-file-text-o" aria-hidden="true"></i> <span class="sr-only">Example of </span>file-text-o</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/file-video-o"><i class="fa fa-file-video-o" aria-hidden="true"></i> <span class="sr-only">Example of </span>file-video-o</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/file-word-o"><i class="fa fa-file-word-o" aria-hidden="true"></i> <span class="sr-only">Example of </span>file-word-o</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/file-archive-o"><i class="fa fa-file-zip-o" aria-hidden="true"></i> <span class="sr-only">Example of </span>file-zip-o <span class="text-muted">(alias)</span></a>
                                </div>

                            </div>

                        </section>

                        <section id="spinner">
                            <div class="panel-heading mb-2" class="page-header">Spinner Icons</div>



                            <div class="row fontawesome-icon-list">



                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/circle-o-notch"><i class="fa fa-circle-o-notch" aria-hidden="true"></i> <span class="sr-only">Example of </span>circle-o-notch</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/cog"><i class="fa fa-cog" aria-hidden="true"></i> <span class="sr-only">Example of </span>cog</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/cog"><i class="fa fa-gear" aria-hidden="true"></i> <span class="sr-only">Example of </span>gear <span class="text-muted">(alias)</span></a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/refresh"><i class="fa fa-refresh" aria-hidden="true"></i> <span class="sr-only">Example of </span>refresh</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/spinner"><i class="fa fa-spinner" aria-hidden="true"></i> <span class="sr-only">Example of </span>spinner</a>
                                </div>

                            </div>
                        </section>

                        <section id="form-control">
                            <div class="panel-heading mb-2" class="page-header">Form Control Icons</div>

                            <div class="row fontawesome-icon-list">



                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/check-square"><i class="fa fa-check-square" aria-hidden="true"></i> <span class="sr-only">Example of </span>check-square</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/check-square-o"><i class="fa fa-check-square-o" aria-hidden="true"></i> <span class="sr-only">Example of </span>check-square-o</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/circle"><i class="fa fa-circle" aria-hidden="true"></i> <span class="sr-only">Example of </span>circle</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/circle-o"><i class="fa fa-circle-o" aria-hidden="true"></i> <span class="sr-only">Example of </span>circle-o</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/dot-circle-o"><i class="fa fa-dot-circle-o" aria-hidden="true"></i> <span class="sr-only">Example of </span>dot-circle-o</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/minus-square"><i class="fa fa-minus-square" aria-hidden="true"></i> <span class="sr-only">Example of </span>minus-square</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/minus-square-o"><i class="fa fa-minus-square-o" aria-hidden="true"></i> <span class="sr-only">Example of </span>minus-square-o</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/plus-square"><i class="fa fa-plus-square" aria-hidden="true"></i> <span class="sr-only">Example of </span>plus-square</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/plus-square-o"><i class="fa fa-plus-square-o" aria-hidden="true"></i> <span class="sr-only">Example of </span>plus-square-o</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/square"><i class="fa fa-square" aria-hidden="true"></i> <span class="sr-only">Example of </span>square</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/square-o"><i class="fa fa-square-o" aria-hidden="true"></i> <span class="sr-only">Example of </span>square-o</a>
                                </div>

                            </div>
                        </section>

                        <section id="payment">
                            <div class="panel-heading mb-2" class="page-header">Payment Icons</div>

                            <div class="row fontawesome-icon-list">



                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/cc-amex"><i class="fa fa-cc-amex" aria-hidden="true"></i> <span class="sr-only">Example of </span>cc-amex</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/cc-diners-club"><i class="fa fa-cc-diners-club" aria-hidden="true"></i> <span class="sr-only">Example of </span>cc-diners-club</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/cc-discover"><i class="fa fa-cc-discover" aria-hidden="true"></i> <span class="sr-only">Example of </span>cc-discover</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/cc-jcb"><i class="fa fa-cc-jcb" aria-hidden="true"></i> <span class="sr-only">Example of </span>cc-jcb</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/cc-mastercard"><i class="fa fa-cc-mastercard" aria-hidden="true"></i> <span class="sr-only">Example of </span>cc-mastercard</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/cc-paypal"><i class="fa fa-cc-paypal" aria-hidden="true"></i> <span class="sr-only">Example of </span>cc-paypal</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/cc-stripe"><i class="fa fa-cc-stripe" aria-hidden="true"></i> <span class="sr-only">Example of </span>cc-stripe</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/cc-visa"><i class="fa fa-cc-visa" aria-hidden="true"></i> <span class="sr-only">Example of </span>cc-visa</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/credit-card"><i class="fa fa-credit-card" aria-hidden="true"></i> <span class="sr-only">Example of </span>credit-card</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/credit-card-alt"><i class="fa fa-credit-card-alt" aria-hidden="true"></i> <span class="sr-only">Example of </span>credit-card-alt</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/google-wallet"><i class="fa fa-google-wallet" aria-hidden="true"></i> <span class="sr-only">Example of </span>google-wallet</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/paypal"><i class="fa fa-paypal" aria-hidden="true"></i> <span class="sr-only">Example of </span>paypal</a>
                                </div>

                            </div>

                        </section>

                        <section id="chart">
                            <div class="panel-heading mb-2" class="page-header">Chart Icons</div>

                            <div class="row fontawesome-icon-list">



                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/area-chart"><i class="fa fa-area-chart" aria-hidden="true"></i> <span class="sr-only">Example of </span>area-chart</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/bar-chart"><i class="fa fa-bar-chart" aria-hidden="true"></i> <span class="sr-only">Example of </span>bar-chart</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/bar-chart"><i class="fa fa-bar-chart-o" aria-hidden="true"></i> <span class="sr-only">Example of </span>bar-chart-o <span class="text-muted">(alias)</span></a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/line-chart"><i class="fa fa-line-chart" aria-hidden="true"></i> <span class="sr-only">Example of </span>line-chart</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/pie-chart"><i class="fa fa-pie-chart" aria-hidden="true"></i> <span class="sr-only">Example of </span>pie-chart</a>
                                </div>

                            </div>

                        </section>

                        <section id="currency">
                            <div class="panel-heading mb-2" class="page-header">Currency Icons</div>

                            <div class="row fontawesome-icon-list">



                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/btc"><i class="fa fa-bitcoin" aria-hidden="true"></i> <span class="sr-only">Example of </span>bitcoin <span class="text-muted">(alias)</span></a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/btc"><i class="fa fa-btc" aria-hidden="true"></i> <span class="sr-only">Example of </span>btc</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/jpy"><i class="fa fa-cny" aria-hidden="true"></i> <span class="sr-only">Example of </span>cny <span class="text-muted">(alias)</span></a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/usd"><i class="fa fa-dollar" aria-hidden="true"></i> <span class="sr-only">Example of </span>dollar <span class="text-muted">(alias)</span></a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/eur"><i class="fa fa-eur" aria-hidden="true"></i> <span class="sr-only">Example of </span>eur</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/eur"><i class="fa fa-euro" aria-hidden="true"></i> <span class="sr-only">Example of </span>euro <span class="text-muted">(alias)</span></a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/gbp"><i class="fa fa-gbp" aria-hidden="true"></i> <span class="sr-only">Example of </span>gbp</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/gg"><i class="fa fa-gg" aria-hidden="true"></i> <span class="sr-only">Example of </span>gg</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/gg-circle"><i class="fa fa-gg-circle" aria-hidden="true"></i> <span class="sr-only">Example of </span>gg-circle</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/ils"><i class="fa fa-ils" aria-hidden="true"></i> <span class="sr-only">Example of </span>ils</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/inr"><i class="fa fa-inr" aria-hidden="true"></i> <span class="sr-only">Example of </span>inr</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/jpy"><i class="fa fa-jpy" aria-hidden="true"></i> <span class="sr-only">Example of </span>jpy</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/krw"><i class="fa fa-krw" aria-hidden="true"></i> <span class="sr-only">Example of </span>krw</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/money"><i class="fa fa-money" aria-hidden="true"></i> <span class="sr-only">Example of </span>money</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/jpy"><i class="fa fa-rmb" aria-hidden="true"></i> <span class="sr-only">Example of </span>rmb <span class="text-muted">(alias)</span></a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/rub"><i class="fa fa-rouble" aria-hidden="true"></i> <span class="sr-only">Example of </span>rouble <span class="text-muted">(alias)</span></a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/rub"><i class="fa fa-rub" aria-hidden="true"></i> <span class="sr-only">Example of </span>rub</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/rub"><i class="fa fa-ruble" aria-hidden="true"></i> <span class="sr-only">Example of </span>ruble <span class="text-muted">(alias)</span></a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/inr"><i class="fa fa-rupee" aria-hidden="true"></i> <span class="sr-only">Example of </span>rupee <span class="text-muted">(alias)</span></a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/ils"><i class="fa fa-shekel" aria-hidden="true"></i> <span class="sr-only">Example of </span>shekel <span class="text-muted">(alias)</span></a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/ils"><i class="fa fa-sheqel" aria-hidden="true"></i> <span class="sr-only">Example of </span>sheqel <span class="text-muted">(alias)</span></a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/try"><i class="fa fa-try" aria-hidden="true"></i> <span class="sr-only">Example of </span>try</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/try"><i class="fa fa-turkish-lira" aria-hidden="true"></i> <span class="sr-only">Example of </span>turkish-lira <span class="text-muted">(alias)</span></a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/usd"><i class="fa fa-usd" aria-hidden="true"></i> <span class="sr-only">Example of </span>usd</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/krw"><i class="fa fa-won" aria-hidden="true"></i> <span class="sr-only">Example of </span>won <span class="text-muted">(alias)</span></a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/jpy"><i class="fa fa-yen" aria-hidden="true"></i> <span class="sr-only">Example of </span>yen <span class="text-muted">(alias)</span></a>
                                </div>

                            </div>

                        </section>

                        <section id="text-editor">
                            <div class="panel-heading mb-2" class="page-header">Text Editor Icons</div>

                            <div class="row fontawesome-icon-list">



                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/align-center"><i class="fa fa-align-center" aria-hidden="true"></i> <span class="sr-only">Example of </span>align-center</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/align-justify"><i class="fa fa-align-justify" aria-hidden="true"></i> <span class="sr-only">Example of </span>align-justify</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/align-left"><i class="fa fa-align-left" aria-hidden="true"></i> <span class="sr-only">Example of </span>align-left</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/align-right"><i class="fa fa-align-right" aria-hidden="true"></i> <span class="sr-only">Example of </span>align-right</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/bold"><i class="fa fa-bold" aria-hidden="true"></i> <span class="sr-only">Example of </span>bold</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/link"><i class="fa fa-chain" aria-hidden="true"></i> <span class="sr-only">Example of </span>chain <span class="text-muted">(alias)</span></a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/chain-broken"><i class="fa fa-chain-broken" aria-hidden="true"></i> <span class="sr-only">Example of </span>chain-broken</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/clipboard"><i class="fa fa-clipboard" aria-hidden="true"></i> <span class="sr-only">Example of </span>clipboard</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/columns"><i class="fa fa-columns" aria-hidden="true"></i> <span class="sr-only">Example of </span>columns</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/files-o"><i class="fa fa-copy" aria-hidden="true"></i> <span class="sr-only">Example of </span>copy <span class="text-muted">(alias)</span></a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/scissors"><i class="fa fa-cut" aria-hidden="true"></i> <span class="sr-only">Example of </span>cut <span class="text-muted">(alias)</span></a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/outdent"><i class="fa fa-dedent" aria-hidden="true"></i> <span class="sr-only">Example of </span>dedent <span class="text-muted">(alias)</span></a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/eraser"><i class="fa fa-eraser" aria-hidden="true"></i> <span class="sr-only">Example of </span>eraser</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/file"><i class="fa fa-file" aria-hidden="true"></i> <span class="sr-only">Example of </span>file</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/file-o"><i class="fa fa-file-o" aria-hidden="true"></i> <span class="sr-only">Example of </span>file-o</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/file-text"><i class="fa fa-file-text" aria-hidden="true"></i> <span class="sr-only">Example of </span>file-text</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/file-text-o"><i class="fa fa-file-text-o" aria-hidden="true"></i> <span class="sr-only">Example of </span>file-text-o</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/files-o"><i class="fa fa-files-o" aria-hidden="true"></i> <span class="sr-only">Example of </span>files-o</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/floppy-o"><i class="fa fa-floppy-o" aria-hidden="true"></i> <span class="sr-only">Example of </span>floppy-o</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/font"><i class="fa fa-font" aria-hidden="true"></i> <span class="sr-only">Example of </span>font</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/header"><i class="fa fa-header" aria-hidden="true"></i> <span class="sr-only">Example of </span>header</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/indent"><i class="fa fa-indent" aria-hidden="true"></i> <span class="sr-only">Example of </span>indent</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/italic"><i class="fa fa-italic" aria-hidden="true"></i> <span class="sr-only">Example of </span>italic</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/link"><i class="fa fa-link" aria-hidden="true"></i> <span class="sr-only">Example of </span>link</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/list"><i class="fa fa-list" aria-hidden="true"></i> <span class="sr-only">Example of </span>list</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/list-alt"><i class="fa fa-list-alt" aria-hidden="true"></i> <span class="sr-only">Example of </span>list-alt</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/list-ol"><i class="fa fa-list-ol" aria-hidden="true"></i> <span class="sr-only">Example of </span>list-ol</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/list-ul"><i class="fa fa-list-ul" aria-hidden="true"></i> <span class="sr-only">Example of </span>list-ul</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/outdent"><i class="fa fa-outdent" aria-hidden="true"></i> <span class="sr-only">Example of </span>outdent</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/paperclip"><i class="fa fa-paperclip" aria-hidden="true"></i> <span class="sr-only">Example of </span>paperclip</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/paragraph"><i class="fa fa-paragraph" aria-hidden="true"></i> <span class="sr-only">Example of </span>paragraph</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/clipboard"><i class="fa fa-paste" aria-hidden="true"></i> <span class="sr-only">Example of </span>paste <span class="text-muted">(alias)</span></a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/repeat"><i class="fa fa-repeat" aria-hidden="true"></i> <span class="sr-only">Example of </span>repeat</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/undo"><i class="fa fa-rotate-left" aria-hidden="true"></i> <span class="sr-only">Example of </span>rotate-left <span class="text-muted">(alias)</span></a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/repeat"><i class="fa fa-rotate-right" aria-hidden="true"></i> <span class="sr-only">Example of </span>rotate-right <span class="text-muted">(alias)</span></a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/floppy-o"><i class="fa fa-save" aria-hidden="true"></i> <span class="sr-only">Example of </span>save <span class="text-muted">(alias)</span></a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/scissors"><i class="fa fa-scissors" aria-hidden="true"></i> <span class="sr-only">Example of </span>scissors</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/strikethrough"><i class="fa fa-strikethrough" aria-hidden="true"></i> <span class="sr-only">Example of </span>strikethrough</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/subscript"><i class="fa fa-subscript" aria-hidden="true"></i> <span class="sr-only">Example of </span>subscript</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/superscript"><i class="fa fa-superscript" aria-hidden="true"></i> <span class="sr-only">Example of </span>superscript</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/table"><i class="fa fa-table" aria-hidden="true"></i> <span class="sr-only">Example of </span>table</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/text-height"><i class="fa fa-text-height" aria-hidden="true"></i> <span class="sr-only">Example of </span>text-height</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/text-width"><i class="fa fa-text-width" aria-hidden="true"></i> <span class="sr-only">Example of </span>text-width</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/th"><i class="fa fa-th" aria-hidden="true"></i> <span class="sr-only">Example of </span>th</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/th-large"><i class="fa fa-th-large" aria-hidden="true"></i> <span class="sr-only">Example of </span>th-large</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/th-list"><i class="fa fa-th-list" aria-hidden="true"></i> <span class="sr-only">Example of </span>th-list</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/underline"><i class="fa fa-underline" aria-hidden="true"></i> <span class="sr-only">Example of </span>underline</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/undo"><i class="fa fa-undo" aria-hidden="true"></i> <span class="sr-only">Example of </span>undo</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/chain-broken"><i class="fa fa-unlink" aria-hidden="true"></i> <span class="sr-only">Example of </span>unlink <span class="text-muted">(alias)</span></a>
                                </div>

                            </div>

                        </section>

                        <section id="directional">
                            <div class="panel-heading mb-2" class="page-header">Directional Icons</div>

                            <div class="row fontawesome-icon-list">



                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/angle-double-down"><i class="fa fa-angle-double-down" aria-hidden="true"></i> <span class="sr-only">Example of </span>angle-double-down</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/angle-double-left"><i class="fa fa-angle-double-left" aria-hidden="true"></i> <span class="sr-only">Example of </span>angle-double-left</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/angle-double-right"><i class="fa fa-angle-double-right" aria-hidden="true"></i> <span class="sr-only">Example of </span>angle-double-right</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/angle-double-up"><i class="fa fa-angle-double-up" aria-hidden="true"></i> <span class="sr-only">Example of </span>angle-double-up</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/angle-down"><i class="fa fa-angle-down" aria-hidden="true"></i> <span class="sr-only">Example of </span>angle-down</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/angle-left"><i class="fa fa-angle-left" aria-hidden="true"></i> <span class="sr-only">Example of </span>angle-left</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/angle-right"><i class="fa fa-angle-right" aria-hidden="true"></i> <span class="sr-only">Example of </span>angle-right</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/angle-up"><i class="fa fa-angle-up" aria-hidden="true"></i> <span class="sr-only">Example of </span>angle-up</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/arrow-circle-down"><i class="fa fa-arrow-circle-down" aria-hidden="true"></i> <span class="sr-only">Example of </span>arrow-circle-down</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/arrow-circle-left"><i class="fa fa-arrow-circle-left" aria-hidden="true"></i> <span class="sr-only">Example of </span>arrow-circle-left</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/arrow-circle-o-down"><i class="fa fa-arrow-circle-o-down" aria-hidden="true"></i> <span class="sr-only">Example of </span>arrow-circle-o-down</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/arrow-circle-o-left"><i class="fa fa-arrow-circle-o-left" aria-hidden="true"></i> <span class="sr-only">Example of </span>arrow-circle-o-left</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/arrow-circle-o-right"><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i> <span class="sr-only">Example of </span>arrow-circle-o-right</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/arrow-circle-o-up"><i class="fa fa-arrow-circle-o-up" aria-hidden="true"></i> <span class="sr-only">Example of </span>arrow-circle-o-up</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/arrow-circle-right"><i class="fa fa-arrow-circle-right" aria-hidden="true"></i> <span class="sr-only">Example of </span>arrow-circle-right</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/arrow-circle-up"><i class="fa fa-arrow-circle-up" aria-hidden="true"></i> <span class="sr-only">Example of </span>arrow-circle-up</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/arrow-down"><i class="fa fa-arrow-down" aria-hidden="true"></i> <span class="sr-only">Example of </span>arrow-down</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/arrow-left"><i class="fa fa-arrow-left" aria-hidden="true"></i> <span class="sr-only">Example of </span>arrow-left</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/arrow-right"><i class="fa fa-arrow-right" aria-hidden="true"></i> <span class="sr-only">Example of </span>arrow-right</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/arrow-up"><i class="fa fa-arrow-up" aria-hidden="true"></i> <span class="sr-only">Example of </span>arrow-up</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/arrows"><i class="fa fa-arrows" aria-hidden="true"></i> <span class="sr-only">Example of </span>arrows</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/arrows-alt"><i class="fa fa-arrows-alt" aria-hidden="true"></i> <span class="sr-only">Example of </span>arrows-alt</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/arrows-h"><i class="fa fa-arrows-h" aria-hidden="true"></i> <span class="sr-only">Example of </span>arrows-h</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/arrows-v"><i class="fa fa-arrows-v" aria-hidden="true"></i> <span class="sr-only">Example of </span>arrows-v</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/caret-down"><i class="fa fa-caret-down" aria-hidden="true"></i> <span class="sr-only">Example of </span>caret-down</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/caret-left"><i class="fa fa-caret-left" aria-hidden="true"></i> <span class="sr-only">Example of </span>caret-left</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/caret-right"><i class="fa fa-caret-right" aria-hidden="true"></i> <span class="sr-only">Example of </span>caret-right</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/caret-square-o-down"><i class="fa fa-caret-square-o-down" aria-hidden="true"></i> <span class="sr-only">Example of </span>caret-square-o-down</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/caret-square-o-left"><i class="fa fa-caret-square-o-left" aria-hidden="true"></i> <span class="sr-only">Example of </span>caret-square-o-left</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/caret-square-o-right"><i class="fa fa-caret-square-o-right" aria-hidden="true"></i> <span class="sr-only">Example of </span>caret-square-o-right</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/caret-square-o-up"><i class="fa fa-caret-square-o-up" aria-hidden="true"></i> <span class="sr-only">Example of </span>caret-square-o-up</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/caret-up"><i class="fa fa-caret-up" aria-hidden="true"></i> <span class="sr-only">Example of </span>caret-up</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/chevron-circle-down"><i class="fa fa-chevron-circle-down" aria-hidden="true"></i> <span class="sr-only">Example of </span>chevron-circle-down</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/chevron-circle-left"><i class="fa fa-chevron-circle-left" aria-hidden="true"></i> <span class="sr-only">Example of </span>chevron-circle-left</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/chevron-circle-right"><i class="fa fa-chevron-circle-right" aria-hidden="true"></i> <span class="sr-only">Example of </span>chevron-circle-right</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/chevron-circle-up"><i class="fa fa-chevron-circle-up" aria-hidden="true"></i> <span class="sr-only">Example of </span>chevron-circle-up</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/chevron-down"><i class="fa fa-chevron-down" aria-hidden="true"></i> <span class="sr-only">Example of </span>chevron-down</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/chevron-left"><i class="fa fa-chevron-left" aria-hidden="true"></i> <span class="sr-only">Example of </span>chevron-left</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/chevron-right"><i class="fa fa-chevron-right" aria-hidden="true"></i> <span class="sr-only">Example of </span>chevron-right</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/chevron-up"><i class="fa fa-chevron-up" aria-hidden="true"></i> <span class="sr-only">Example of </span>chevron-up</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/exchange"><i class="fa fa-exchange" aria-hidden="true"></i> <span class="sr-only">Example of </span>exchange</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/hand-o-down"><i class="fa fa-hand-o-down" aria-hidden="true"></i> <span class="sr-only">Example of </span>hand-o-down</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/hand-o-left"><i class="fa fa-hand-o-left" aria-hidden="true"></i> <span class="sr-only">Example of </span>hand-o-left</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/hand-o-right"><i class="fa fa-hand-o-right" aria-hidden="true"></i> <span class="sr-only">Example of </span>hand-o-right</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/hand-o-up"><i class="fa fa-hand-o-up" aria-hidden="true"></i> <span class="sr-only">Example of </span>hand-o-up</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/long-arrow-down"><i class="fa fa-long-arrow-down" aria-hidden="true"></i> <span class="sr-only">Example of </span>long-arrow-down</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/long-arrow-left"><i class="fa fa-long-arrow-left" aria-hidden="true"></i> <span class="sr-only">Example of </span>long-arrow-left</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/long-arrow-right"><i class="fa fa-long-arrow-right" aria-hidden="true"></i> <span class="sr-only">Example of </span>long-arrow-right</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/long-arrow-up"><i class="fa fa-long-arrow-up" aria-hidden="true"></i> <span class="sr-only">Example of </span>long-arrow-up</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/caret-square-o-down"><i class="fa fa-toggle-down" aria-hidden="true"></i> <span class="sr-only">Example of </span>toggle-down <span class="text-muted">(alias)</span></a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/caret-square-o-left"><i class="fa fa-toggle-left" aria-hidden="true"></i> <span class="sr-only">Example of </span>toggle-left <span class="text-muted">(alias)</span></a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/caret-square-o-right"><i class="fa fa-toggle-right" aria-hidden="true"></i> <span class="sr-only">Example of </span>toggle-right <span class="text-muted">(alias)</span></a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/caret-square-o-up"><i class="fa fa-toggle-up" aria-hidden="true"></i> <span class="sr-only">Example of </span>toggle-up <span class="text-muted">(alias)</span></a>
                                </div>

                            </div>

                        </section>

                        <section id="video-player">
                            <div class="panel-heading mb-2" class="page-header">Video Player Icons</div>

                            <div class="row fontawesome-icon-list">



                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/arrows-alt"><i class="fa fa-arrows-alt" aria-hidden="true"></i> <span class="sr-only">Example of </span>arrows-alt</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/backward"><i class="fa fa-backward" aria-hidden="true"></i> <span class="sr-only">Example of </span>backward</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/compress"><i class="fa fa-compress" aria-hidden="true"></i> <span class="sr-only">Example of </span>compress</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/eject"><i class="fa fa-eject" aria-hidden="true"></i> <span class="sr-only">Example of </span>eject</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/expand"><i class="fa fa-expand" aria-hidden="true"></i> <span class="sr-only">Example of </span>expand</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/fast-backward"><i class="fa fa-fast-backward" aria-hidden="true"></i> <span class="sr-only">Example of </span>fast-backward</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/fast-forward"><i class="fa fa-fast-forward" aria-hidden="true"></i> <span class="sr-only">Example of </span>fast-forward</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/forward"><i class="fa fa-forward" aria-hidden="true"></i> <span class="sr-only">Example of </span>forward</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/pause"><i class="fa fa-pause" aria-hidden="true"></i> <span class="sr-only">Example of </span>pause</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/pause-circle"><i class="fa fa-pause-circle" aria-hidden="true"></i> <span class="sr-only">Example of </span>pause-circle</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/pause-circle-o"><i class="fa fa-pause-circle-o" aria-hidden="true"></i> <span class="sr-only">Example of </span>pause-circle-o</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/play"><i class="fa fa-play" aria-hidden="true"></i> <span class="sr-only">Example of </span>play</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/play-circle"><i class="fa fa-play-circle" aria-hidden="true"></i> <span class="sr-only">Example of </span>play-circle</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/play-circle-o"><i class="fa fa-play-circle-o" aria-hidden="true"></i> <span class="sr-only">Example of </span>play-circle-o</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/random"><i class="fa fa-random" aria-hidden="true"></i> <span class="sr-only">Example of </span>random</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/step-backward"><i class="fa fa-step-backward" aria-hidden="true"></i> <span class="sr-only">Example of </span>step-backward</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/step-forward"><i class="fa fa-step-forward" aria-hidden="true"></i> <span class="sr-only">Example of </span>step-forward</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/stop"><i class="fa fa-stop" aria-hidden="true"></i> <span class="sr-only">Example of </span>stop</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/stop-circle"><i class="fa fa-stop-circle" aria-hidden="true"></i> <span class="sr-only">Example of </span>stop-circle</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/stop-circle-o"><i class="fa fa-stop-circle-o" aria-hidden="true"></i> <span class="sr-only">Example of </span>stop-circle-o</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/youtube-play"><i class="fa fa-youtube-play" aria-hidden="true"></i> <span class="sr-only">Example of </span>youtube-play</a>
                                </div>

                            </div>

                        </section>

                        <section id="brand">
                            <div class="panel-heading mb-2" class="page-header">Brand Icons</div>

                            <div class="row fontawesome-icon-list margin-bottom-lg">



                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/500px"><i class="fa fa-500px" aria-hidden="true"></i> <span class="sr-only">Example of </span>500px</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/adn"><i class="fa fa-adn" aria-hidden="true"></i> <span class="sr-only">Example of </span>adn</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/amazon"><i class="fa fa-amazon" aria-hidden="true"></i> <span class="sr-only">Example of </span>amazon</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/android"><i class="fa fa-android" aria-hidden="true"></i> <span class="sr-only">Example of </span>android</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/angellist"><i class="fa fa-angellist" aria-hidden="true"></i> <span class="sr-only">Example of </span>angellist</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/apple"><i class="fa fa-apple" aria-hidden="true"></i> <span class="sr-only">Example of </span>apple</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/bandcamp"><i class="fa fa-bandcamp" aria-hidden="true"></i> <span class="sr-only">Example of </span>bandcamp</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/behance"><i class="fa fa-behance" aria-hidden="true"></i> <span class="sr-only">Example of </span>behance</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/behance-square"><i class="fa fa-behance-square" aria-hidden="true"></i> <span class="sr-only">Example of </span>behance-square</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/bitbucket"><i class="fa fa-bitbucket" aria-hidden="true"></i> <span class="sr-only">Example of </span>bitbucket</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/bitbucket-square"><i class="fa fa-bitbucket-square" aria-hidden="true"></i> <span class="sr-only">Example of </span>bitbucket-square</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/btc"><i class="fa fa-bitcoin" aria-hidden="true"></i> <span class="sr-only">Example of </span>bitcoin <span class="text-muted">(alias)</span></a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/black-tie"><i class="fa fa-black-tie" aria-hidden="true"></i> <span class="sr-only">Example of </span>black-tie</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/bluetooth"><i class="fa fa-bluetooth" aria-hidden="true"></i> <span class="sr-only">Example of </span>bluetooth</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/bluetooth-b"><i class="fa fa-bluetooth-b" aria-hidden="true"></i> <span class="sr-only">Example of </span>bluetooth-b</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/btc"><i class="fa fa-btc" aria-hidden="true"></i> <span class="sr-only">Example of </span>btc</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/buysellads"><i class="fa fa-buysellads" aria-hidden="true"></i> <span class="sr-only">Example of </span>buysellads</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/cc-amex"><i class="fa fa-cc-amex" aria-hidden="true"></i> <span class="sr-only">Example of </span>cc-amex</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/cc-diners-club"><i class="fa fa-cc-diners-club" aria-hidden="true"></i> <span class="sr-only">Example of </span>cc-diners-club</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/cc-discover"><i class="fa fa-cc-discover" aria-hidden="true"></i> <span class="sr-only">Example of </span>cc-discover</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/cc-jcb"><i class="fa fa-cc-jcb" aria-hidden="true"></i> <span class="sr-only">Example of </span>cc-jcb</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/cc-mastercard"><i class="fa fa-cc-mastercard" aria-hidden="true"></i> <span class="sr-only">Example of </span>cc-mastercard</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/cc-paypal"><i class="fa fa-cc-paypal" aria-hidden="true"></i> <span class="sr-only">Example of </span>cc-paypal</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/cc-stripe"><i class="fa fa-cc-stripe" aria-hidden="true"></i> <span class="sr-only">Example of </span>cc-stripe</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/cc-visa"><i class="fa fa-cc-visa" aria-hidden="true"></i> <span class="sr-only">Example of </span>cc-visa</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/chrome"><i class="fa fa-chrome" aria-hidden="true"></i> <span class="sr-only">Example of </span>chrome</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/codepen"><i class="fa fa-codepen" aria-hidden="true"></i> <span class="sr-only">Example of </span>codepen</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/codiepie"><i class="fa fa-codiepie" aria-hidden="true"></i> <span class="sr-only">Example of </span>codiepie</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/connectdevelop"><i class="fa fa-connectdevelop" aria-hidden="true"></i> <span class="sr-only">Example of </span>connectdevelop</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/contao"><i class="fa fa-contao" aria-hidden="true"></i> <span class="sr-only">Example of </span>contao</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/css3"><i class="fa fa-css3" aria-hidden="true"></i> <span class="sr-only">Example of </span>css3</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/dashcube"><i class="fa fa-dashcube" aria-hidden="true"></i> <span class="sr-only">Example of </span>dashcube</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/delicious"><i class="fa fa-delicious" aria-hidden="true"></i> <span class="sr-only">Example of </span>delicious</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/deviantart"><i class="fa fa-deviantart" aria-hidden="true"></i> <span class="sr-only">Example of </span>deviantart</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/digg"><i class="fa fa-digg" aria-hidden="true"></i> <span class="sr-only">Example of </span>digg</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/dribbble"><i class="fa fa-dribbble" aria-hidden="true"></i> <span class="sr-only">Example of </span>dribbble</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/dropbox"><i class="fa fa-dropbox" aria-hidden="true"></i> <span class="sr-only">Example of </span>dropbox</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/drupal"><i class="fa fa-drupal" aria-hidden="true"></i> <span class="sr-only">Example of </span>drupal</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/edge"><i class="fa fa-edge" aria-hidden="true"></i> <span class="sr-only">Example of </span>edge</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/eercast"><i class="fa fa-eercast" aria-hidden="true"></i> <span class="sr-only">Example of </span>eercast</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/empire"><i class="fa fa-empire" aria-hidden="true"></i> <span class="sr-only">Example of </span>empire</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/envira"><i class="fa fa-envira" aria-hidden="true"></i> <span class="sr-only">Example of </span>envira</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/etsy"><i class="fa fa-etsy" aria-hidden="true"></i> <span class="sr-only">Example of </span>etsy</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/expeditedssl"><i class="fa fa-expeditedssl" aria-hidden="true"></i> <span class="sr-only">Example of </span>expeditedssl</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/font-awesome"><i class="fa fa-fa" aria-hidden="true"></i> <span class="sr-only">Example of </span>fa <span class="text-muted">(alias)</span></a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/facebook"><i class="fa fa-facebook" aria-hidden="true"></i> <span class="sr-only">Example of </span>facebook</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/facebook"><i class="fa fa-facebook-f" aria-hidden="true"></i> <span class="sr-only">Example of </span>facebook-f <span class="text-muted">(alias)</span></a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/facebook-official"><i class="fa fa-facebook-official" aria-hidden="true"></i> <span class="sr-only">Example of </span>facebook-official</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/facebook-square"><i class="fa fa-facebook-square" aria-hidden="true"></i> <span class="sr-only">Example of </span>facebook-square</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/firefox"><i class="fa fa-firefox" aria-hidden="true"></i> <span class="sr-only">Example of </span>firefox</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/first-order"><i class="fa fa-first-order" aria-hidden="true"></i> <span class="sr-only">Example of </span>first-order</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/flickr"><i class="fa fa-flickr" aria-hidden="true"></i> <span class="sr-only">Example of </span>flickr</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/font-awesome"><i class="fa fa-font-awesome" aria-hidden="true"></i> <span class="sr-only">Example of </span>font-awesome</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/fonticons"><i class="fa fa-fonticons" aria-hidden="true"></i> <span class="sr-only">Example of </span>fonticons</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/fort-awesome"><i class="fa fa-fort-awesome" aria-hidden="true"></i> <span class="sr-only">Example of </span>fort-awesome</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/forumbee"><i class="fa fa-forumbee" aria-hidden="true"></i> <span class="sr-only">Example of </span>forumbee</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/foursquare"><i class="fa fa-foursquare" aria-hidden="true"></i> <span class="sr-only">Example of </span>foursquare</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/free-code-camp"><i class="fa fa-free-code-camp" aria-hidden="true"></i> <span class="sr-only">Example of </span>free-code-camp</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/empire"><i class="fa fa-ge" aria-hidden="true"></i> <span class="sr-only">Example of </span>ge <span class="text-muted">(alias)</span></a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/get-pocket"><i class="fa fa-get-pocket" aria-hidden="true"></i> <span class="sr-only">Example of </span>get-pocket</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/gg"><i class="fa fa-gg" aria-hidden="true"></i> <span class="sr-only">Example of </span>gg</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/gg-circle"><i class="fa fa-gg-circle" aria-hidden="true"></i> <span class="sr-only">Example of </span>gg-circle</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/git"><i class="fa fa-git" aria-hidden="true"></i> <span class="sr-only">Example of </span>git</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/git-square"><i class="fa fa-git-square" aria-hidden="true"></i> <span class="sr-only">Example of </span>git-square</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/github"><i class="fa fa-github" aria-hidden="true"></i> <span class="sr-only">Example of </span>github</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/github-alt"><i class="fa fa-github-alt" aria-hidden="true"></i> <span class="sr-only">Example of </span>github-alt</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/github-square"><i class="fa fa-github-square" aria-hidden="true"></i> <span class="sr-only">Example of </span>github-square</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/gitlab"><i class="fa fa-gitlab" aria-hidden="true"></i> <span class="sr-only">Example of </span>gitlab</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/gratipay"><i class="fa fa-gittip" aria-hidden="true"></i> <span class="sr-only">Example of </span>gittip <span class="text-muted">(alias)</span></a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/glide"><i class="fa fa-glide" aria-hidden="true"></i> <span class="sr-only">Example of </span>glide</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/glide-g"><i class="fa fa-glide-g" aria-hidden="true"></i> <span class="sr-only">Example of </span>glide-g</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/google"><i class="fa fa-google" aria-hidden="true"></i> <span class="sr-only">Example of </span>google</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/google-plus"><i class="fa fa-google-plus" aria-hidden="true"></i> <span class="sr-only">Example of </span>google-plus</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/google-plus-official"><i class="fa fa-google-plus-circle" aria-hidden="true"></i> <span class="sr-only">Example of </span>google-plus-circle <span class="text-muted">(alias)</span></a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/google-plus-official"><i class="fa fa-google-plus-official" aria-hidden="true"></i> <span class="sr-only">Example of </span>google-plus-official</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/google-plus-square"><i class="fa fa-google-plus-square" aria-hidden="true"></i> <span class="sr-only">Example of </span>google-plus-square</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/google-wallet"><i class="fa fa-google-wallet" aria-hidden="true"></i> <span class="sr-only">Example of </span>google-wallet</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/gratipay"><i class="fa fa-gratipay" aria-hidden="true"></i> <span class="sr-only">Example of </span>gratipay</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/grav"><i class="fa fa-grav" aria-hidden="true"></i> <span class="sr-only">Example of </span>grav</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/hacker-news"><i class="fa fa-hacker-news" aria-hidden="true"></i> <span class="sr-only">Example of </span>hacker-news</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/houzz"><i class="fa fa-houzz" aria-hidden="true"></i> <span class="sr-only">Example of </span>houzz</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/html5"><i class="fa fa-html5" aria-hidden="true"></i> <span class="sr-only">Example of </span>html5</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/imdb"><i class="fa fa-imdb" aria-hidden="true"></i> <span class="sr-only">Example of </span>imdb</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/instagram"><i class="fa fa-instagram" aria-hidden="true"></i> <span class="sr-only">Example of </span>instagram</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/internet-explorer"><i class="fa fa-internet-explorer" aria-hidden="true"></i> <span class="sr-only">Example of </span>internet-explorer</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/ioxhost"><i class="fa fa-ioxhost" aria-hidden="true"></i> <span class="sr-only">Example of </span>ioxhost</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/joomla"><i class="fa fa-joomla" aria-hidden="true"></i> <span class="sr-only">Example of </span>joomla</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/jsfiddle"><i class="fa fa-jsfiddle" aria-hidden="true"></i> <span class="sr-only">Example of </span>jsfiddle</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/lastfm"><i class="fa fa-lastfm" aria-hidden="true"></i> <span class="sr-only">Example of </span>lastfm</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/lastfm-square"><i class="fa fa-lastfm-square" aria-hidden="true"></i> <span class="sr-only">Example of </span>lastfm-square</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/leanpub"><i class="fa fa-leanpub" aria-hidden="true"></i> <span class="sr-only">Example of </span>leanpub</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/linkedin"><i class="fa fa-linkedin" aria-hidden="true"></i> <span class="sr-only">Example of </span>linkedin</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/linkedin-square"><i class="fa fa-linkedin-square" aria-hidden="true"></i> <span class="sr-only">Example of </span>linkedin-square</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/linode"><i class="fa fa-linode" aria-hidden="true"></i> <span class="sr-only">Example of </span>linode</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/linux"><i class="fa fa-linux" aria-hidden="true"></i> <span class="sr-only">Example of </span>linux</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/maxcdn"><i class="fa fa-maxcdn" aria-hidden="true"></i> <span class="sr-only">Example of </span>maxcdn</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/meanpath"><i class="fa fa-meanpath" aria-hidden="true"></i> <span class="sr-only">Example of </span>meanpath</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/medium"><i class="fa fa-medium" aria-hidden="true"></i> <span class="sr-only">Example of </span>medium</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/meetup"><i class="fa fa-meetup" aria-hidden="true"></i> <span class="sr-only">Example of </span>meetup</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/mixcloud"><i class="fa fa-mixcloud" aria-hidden="true"></i> <span class="sr-only">Example of </span>mixcloud</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/modx"><i class="fa fa-modx" aria-hidden="true"></i> <span class="sr-only">Example of </span>modx</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/odnoklassniki"><i class="fa fa-odnoklassniki" aria-hidden="true"></i> <span class="sr-only">Example of </span>odnoklassniki</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/odnoklassniki-square"><i class="fa fa-odnoklassniki-square" aria-hidden="true"></i> <span class="sr-only">Example of </span>odnoklassniki-square</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/opencart"><i class="fa fa-opencart" aria-hidden="true"></i> <span class="sr-only">Example of </span>opencart</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/openid"><i class="fa fa-openid" aria-hidden="true"></i> <span class="sr-only">Example of </span>openid</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/opera"><i class="fa fa-opera" aria-hidden="true"></i> <span class="sr-only">Example of </span>opera</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/optin-monster"><i class="fa fa-optin-monster" aria-hidden="true"></i> <span class="sr-only">Example of </span>optin-monster</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/pagelines"><i class="fa fa-pagelines" aria-hidden="true"></i> <span class="sr-only">Example of </span>pagelines</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/paypal"><i class="fa fa-paypal" aria-hidden="true"></i> <span class="sr-only">Example of </span>paypal</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/pied-piper"><i class="fa fa-pied-piper" aria-hidden="true"></i> <span class="sr-only">Example of </span>pied-piper</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/pied-piper-alt"><i class="fa fa-pied-piper-alt" aria-hidden="true"></i> <span class="sr-only">Example of </span>pied-piper-alt</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/pied-piper-pp"><i class="fa fa-pied-piper-pp" aria-hidden="true"></i> <span class="sr-only">Example of </span>pied-piper-pp</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/pinterest"><i class="fa fa-pinterest" aria-hidden="true"></i> <span class="sr-only">Example of </span>pinterest</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/pinterest-p"><i class="fa fa-pinterest-p" aria-hidden="true"></i> <span class="sr-only">Example of </span>pinterest-p</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/pinterest-square"><i class="fa fa-pinterest-square" aria-hidden="true"></i> <span class="sr-only">Example of </span>pinterest-square</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/product-hunt"><i class="fa fa-product-hunt" aria-hidden="true"></i> <span class="sr-only">Example of </span>product-hunt</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/qq"><i class="fa fa-qq" aria-hidden="true"></i> <span class="sr-only">Example of </span>qq</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/quora"><i class="fa fa-quora" aria-hidden="true"></i> <span class="sr-only">Example of </span>quora</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/rebel"><i class="fa fa-ra" aria-hidden="true"></i> <span class="sr-only">Example of </span>ra <span class="text-muted">(alias)</span></a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/ravelry"><i class="fa fa-ravelry" aria-hidden="true"></i> <span class="sr-only">Example of </span>ravelry</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/rebel"><i class="fa fa-rebel" aria-hidden="true"></i> <span class="sr-only">Example of </span>rebel</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/reddit"><i class="fa fa-reddit" aria-hidden="true"></i> <span class="sr-only">Example of </span>reddit</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/reddit-alien"><i class="fa fa-reddit-alien" aria-hidden="true"></i> <span class="sr-only">Example of </span>reddit-alien</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/reddit-square"><i class="fa fa-reddit-square" aria-hidden="true"></i> <span class="sr-only">Example of </span>reddit-square</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/renren"><i class="fa fa-renren" aria-hidden="true"></i> <span class="sr-only">Example of </span>renren</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/rebel"><i class="fa fa-resistance" aria-hidden="true"></i> <span class="sr-only">Example of </span>resistance <span class="text-muted">(alias)</span></a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/safari"><i class="fa fa-safari" aria-hidden="true"></i> <span class="sr-only">Example of </span>safari</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/scribd"><i class="fa fa-scribd" aria-hidden="true"></i> <span class="sr-only">Example of </span>scribd</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/sellsy"><i class="fa fa-sellsy" aria-hidden="true"></i> <span class="sr-only">Example of </span>sellsy</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/share-alt"><i class="fa fa-share-alt" aria-hidden="true"></i> <span class="sr-only">Example of </span>share-alt</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/share-alt-square"><i class="fa fa-share-alt-square" aria-hidden="true"></i> <span class="sr-only">Example of </span>share-alt-square</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/shirtsinbulk"><i class="fa fa-shirtsinbulk" aria-hidden="true"></i> <span class="sr-only">Example of </span>shirtsinbulk</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/simplybuilt"><i class="fa fa-simplybuilt" aria-hidden="true"></i> <span class="sr-only">Example of </span>simplybuilt</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/skyatlas"><i class="fa fa-skyatlas" aria-hidden="true"></i> <span class="sr-only">Example of </span>skyatlas</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/skype"><i class="fa fa-skype" aria-hidden="true"></i> <span class="sr-only">Example of </span>skype</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/slack"><i class="fa fa-slack" aria-hidden="true"></i> <span class="sr-only">Example of </span>slack</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/slideshare"><i class="fa fa-slideshare" aria-hidden="true"></i> <span class="sr-only">Example of </span>slideshare</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/snapchat"><i class="fa fa-snapchat" aria-hidden="true"></i> <span class="sr-only">Example of </span>snapchat</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/snapchat-ghost"><i class="fa fa-snapchat-ghost" aria-hidden="true"></i> <span class="sr-only">Example of </span>snapchat-ghost</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/snapchat-square"><i class="fa fa-snapchat-square" aria-hidden="true"></i> <span class="sr-only">Example of </span>snapchat-square</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/soundcloud"><i class="fa fa-soundcloud" aria-hidden="true"></i> <span class="sr-only">Example of </span>soundcloud</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/spotify"><i class="fa fa-spotify" aria-hidden="true"></i> <span class="sr-only">Example of </span>spotify</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/stack-exchange"><i class="fa fa-stack-exchange" aria-hidden="true"></i> <span class="sr-only">Example of </span>stack-exchange</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/stack-overflow"><i class="fa fa-stack-overflow" aria-hidden="true"></i> <span class="sr-only">Example of </span>stack-overflow</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/steam"><i class="fa fa-steam" aria-hidden="true"></i> <span class="sr-only">Example of </span>steam</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/steam-square"><i class="fa fa-steam-square" aria-hidden="true"></i> <span class="sr-only">Example of </span>steam-square</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/stumbleupon"><i class="fa fa-stumbleupon" aria-hidden="true"></i> <span class="sr-only">Example of </span>stumbleupon</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/stumbleupon-circle"><i class="fa fa-stumbleupon-circle" aria-hidden="true"></i> <span class="sr-only">Example of </span>stumbleupon-circle</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/superpowers"><i class="fa fa-superpowers" aria-hidden="true"></i> <span class="sr-only">Example of </span>superpowers</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/telegram"><i class="fa fa-telegram" aria-hidden="true"></i> <span class="sr-only">Example of </span>telegram</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/tencent-weibo"><i class="fa fa-tencent-weibo" aria-hidden="true"></i> <span class="sr-only">Example of </span>tencent-weibo</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/themeisle"><i class="fa fa-themeisle" aria-hidden="true"></i> <span class="sr-only">Example of </span>themeisle</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/trello"><i class="fa fa-trello" aria-hidden="true"></i> <span class="sr-only">Example of </span>trello</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/tripadvisor"><i class="fa fa-tripadvisor" aria-hidden="true"></i> <span class="sr-only">Example of </span>tripadvisor</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/tumblr"><i class="fa fa-tumblr" aria-hidden="true"></i> <span class="sr-only">Example of </span>tumblr</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/tumblr-square"><i class="fa fa-tumblr-square" aria-hidden="true"></i> <span class="sr-only">Example of </span>tumblr-square</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/twitch"><i class="fa fa-twitch" aria-hidden="true"></i> <span class="sr-only">Example of </span>twitch</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/twitter"><i class="fa fa-twitter" aria-hidden="true"></i> <span class="sr-only">Example of </span>twitter</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/twitter-square"><i class="fa fa-twitter-square" aria-hidden="true"></i> <span class="sr-only">Example of </span>twitter-square</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/usb"><i class="fa fa-usb" aria-hidden="true"></i> <span class="sr-only">Example of </span>usb</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/viacoin"><i class="fa fa-viacoin" aria-hidden="true"></i> <span class="sr-only">Example of </span>viacoin</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/viadeo"><i class="fa fa-viadeo" aria-hidden="true"></i> <span class="sr-only">Example of </span>viadeo</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/viadeo-square"><i class="fa fa-viadeo-square" aria-hidden="true"></i> <span class="sr-only">Example of </span>viadeo-square</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/vimeo"><i class="fa fa-vimeo" aria-hidden="true"></i> <span class="sr-only">Example of </span>vimeo</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/vimeo-square"><i class="fa fa-vimeo-square" aria-hidden="true"></i> <span class="sr-only">Example of </span>vimeo-square</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/vine"><i class="fa fa-vine" aria-hidden="true"></i> <span class="sr-only">Example of </span>vine</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/vk"><i class="fa fa-vk" aria-hidden="true"></i> <span class="sr-only">Example of </span>vk</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/weixin"><i class="fa fa-wechat" aria-hidden="true"></i> <span class="sr-only">Example of </span>wechat <span class="text-muted">(alias)</span></a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/weibo"><i class="fa fa-weibo" aria-hidden="true"></i> <span class="sr-only">Example of </span>weibo</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/weixin"><i class="fa fa-weixin" aria-hidden="true"></i> <span class="sr-only">Example of </span>weixin</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/whatsapp"><i class="fa fa-whatsapp" aria-hidden="true"></i> <span class="sr-only">Example of </span>whatsapp</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/wikipedia-w"><i class="fa fa-wikipedia-w" aria-hidden="true"></i> <span class="sr-only">Example of </span>wikipedia-w</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/windows"><i class="fa fa-windows" aria-hidden="true"></i> <span class="sr-only">Example of </span>windows</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/wordpress"><i class="fa fa-wordpress" aria-hidden="true"></i> <span class="sr-only">Example of </span>wordpress</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/wpbeginner"><i class="fa fa-wpbeginner" aria-hidden="true"></i> <span class="sr-only">Example of </span>wpbeginner</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/wpexplorer"><i class="fa fa-wpexplorer" aria-hidden="true"></i> <span class="sr-only">Example of </span>wpexplorer</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/wpforms"><i class="fa fa-wpforms" aria-hidden="true"></i> <span class="sr-only">Example of </span>wpforms</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/xing"><i class="fa fa-xing" aria-hidden="true"></i> <span class="sr-only">Example of </span>xing</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/xing-square"><i class="fa fa-xing-square" aria-hidden="true"></i> <span class="sr-only">Example of </span>xing-square</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/y-combinator"><i class="fa fa-y-combinator" aria-hidden="true"></i> <span class="sr-only">Example of </span>y-combinator</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/hacker-news"><i class="fa fa-y-combinator-square" aria-hidden="true"></i> <span class="sr-only">Example of </span>y-combinator-square <span class="text-muted">(alias)</span></a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/yahoo"><i class="fa fa-yahoo" aria-hidden="true"></i> <span class="sr-only">Example of </span>yahoo</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/y-combinator"><i class="fa fa-yc" aria-hidden="true"></i> <span class="sr-only">Example of </span>yc <span class="text-muted">(alias)</span></a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/hacker-news"><i class="fa fa-yc-square" aria-hidden="true"></i> <span class="sr-only">Example of </span>yc-square <span class="text-muted">(alias)</span></a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/yelp"><i class="fa fa-yelp" aria-hidden="true"></i> <span class="sr-only">Example of </span>yelp</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/yoast"><i class="fa fa-yoast" aria-hidden="true"></i> <span class="sr-only">Example of </span>yoast</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/youtube"><i class="fa fa-youtube" aria-hidden="true"></i> <span class="sr-only">Example of </span>youtube</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/youtube-play"><i class="fa fa-youtube-play" aria-hidden="true"></i> <span class="sr-only">Example of </span>youtube-play</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/youtube-square"><i class="fa fa-youtube-square" aria-hidden="true"></i> <span class="sr-only">Example of </span>youtube-square</a>
                                </div>

                            </div>


                        </section>

                        <section id="medical">
                            <div class="panel-heading mb-2" class="page-header">Medical Icons</div>

                            <div class="row fontawesome-icon-list">



                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/ambulance"><i class="fa fa-ambulance" aria-hidden="true"></i> <span class="sr-only">Example of </span>ambulance</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/h-square"><i class="fa fa-h-square" aria-hidden="true"></i> <span class="sr-only">Example of </span>h-square</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/heart"><i class="fa fa-heart" aria-hidden="true"></i> <span class="sr-only">Example of </span>heart</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/heart-o"><i class="fa fa-heart-o" aria-hidden="true"></i> <span class="sr-only">Example of </span>heart-o</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/heartbeat"><i class="fa fa-heartbeat" aria-hidden="true"></i> <span class="sr-only">Example of </span>heartbeat</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/hospital-o"><i class="fa fa-hospital-o" aria-hidden="true"></i> <span class="sr-only">Example of </span>hospital-o</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/medkit"><i class="fa fa-medkit" aria-hidden="true"></i> <span class="sr-only">Example of </span>medkit</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/plus-square"><i class="fa fa-plus-square" aria-hidden="true"></i> <span class="sr-only">Example of </span>plus-square</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/stethoscope"><i class="fa fa-stethoscope" aria-hidden="true"></i> <span class="sr-only">Example of </span>stethoscope</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/user-md"><i class="fa fa-user-md" aria-hidden="true"></i> <span class="sr-only">Example of </span>user-md</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/wheelchair"><i class="fa fa-wheelchair" aria-hidden="true"></i> <span class="sr-only">Example of </span>wheelchair</a>
                                </div>

                                <div class="fa-hover col-md-3 col-sm-4"><span id="../icon/wheelchair-alt"><i class="fa fa-wheelchair-alt" aria-hidden="true"></i> <span class="sr-only">Example of </span>wheelchair-alt</a>
                                </div>

                            </div>

                        </section>

                    </div>
                </div>
            </div>




            <!--
        <div class="row">
            <div class="col-lg-3">
                <div class="card mb-2" id="panels">
                    <div class="card-block">
                        <div class="panel-heading">This is a header
                        </div>
                        <p>This is a panel</p>
                        <div class="panel-footer">This is a footer
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card mb-2">
                    <div class="card-block">
                        <div class="panel-heading">This is a header
                        </div>
                        <p>This is a panel</p>
                        <div class="panel-footer">This is a footer
                        </div>

                    </div>

                </div>
            </div>
            <div class="col-lg-3">
                <div class="card mb-2">
                    <div class="card-block">
                        <div class="panel-heading">This is a header
                        </div>
                        <p>This is a panel</p>
                        <div class="panel-footer">This is a footer
                        </div>

                    </div>

                </div>
            </div>
            <div class="col-lg-3">
                <div class="card mb-2">
                    <div class="card-block">
                        <div class="panel-heading">This is a header
                        </div>
                        <p>This is a panel</p>
                        <div class="panel-footer">This is a footer
                        </div>

                    </div>

                </div>
            </div>
        </div>
-->
            <!--
        <div class="row">
            <div class="col-lg-3">
                <div class="card mb-2">
                    <div class="card-block">
                        <div class="panel-heading">This is a header
                        </div>
                        <p>This is a panel</p>
                        <div class="panel-footer">This is a footer
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card mb-2">
                    <div class="card-block">
                        <div class="panel-heading">This is a header
                        </div>
                        <p>This is a panel</p>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">First Item</li>
                            <li class="list-group-item">Second Item</li>
                            <li class="list-group-item">Third Item</li>
                        </ul>
                        <div class="panel-footer">This is a footer
                        </div>

                    </div>

                </div>
            </div>
            <div class="col-lg-3">
                <div class="well" id="wells">Default Well
                </div>
                <div class="well well-small">Small Well
                </div>
            </div>
            <div class="col-lg-3">
                <div class="well well-large">Large Padding Well
                </div>
            </div>
        </div>
-->
        </div>






        </div>
        </div>
        </div>
        <a href="#0" class="cd-top">Top</a>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script type="text/javascript">
            jQuery(document).ready(function ($) {
                // browser window scroll (in pixels) after which the "back to top" link is shown
                var offset = 300,
                    //browser window scroll (in pixels) after which the "back to top" link opacity is reduced
                    offset_opacity = 1200,
                    //duration of the top scrolling animation (in ms)
                    scroll_top_duration = 700,
                    //grab the "back to top" link
                    $back_to_top = $('.cd-top');

                //hide or show the "back to top" link
                $(window).scroll(function () {
                    ($(this).scrollTop() > offset) ? $back_to_top.addClass('cd-is-visible'): $back_to_top.removeClass('cd-is-visible cd-fade-out');
                    if ($(this).scrollTop() > offset_opacity) {
                        $back_to_top.addClass('cd-fade-out');
                    }
                });

                //smooth scroll to top
                $back_to_top.on('click', function (event) {
                    event.preventDefault();
                    $('body,html').animate({
                        scrollTop: 0,
                    }, scroll_top_duration);
                });

            });
        </script>
    </body>

    </html>