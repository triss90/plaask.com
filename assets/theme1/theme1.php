<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/medium-editor@latest/dist/css/medium-editor.min.css" type="text/css" media="screen" charset="utf-8">
    <link rel="stylesheet" href="../css/beagle.css">

    <link rel="stylesheet" href="theme1.css">
</head>

<body>

    <header class="t1-header">
        <div class="container">
            <div class="row center-tiny">
                <div class="tiny-12 small-6 ">
                    <h1 id="t1-header-title" contenteditable="true" class="contenteditable t1-header-title">I'm Jonathan Doe.</h1>
                </div>
            </div>
            <div class="row center-tiny">
                <div class="tiny-12 small-8">
                    <p id="t1-header-tagline" contenteditable="true" class="contenteditable t1-header-tagline">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis</p>
                </div>
            </div>
        </div>
    </header>

    <section class="t1-about">
        <div class="container">
            <div class="row center-tiny start-small">
                <div class="tiny-12 small-4 medium-3 large-3">
                    <p id="t1-about-image" contenteditable="true" class="contenteditable t1-about-image">
                        <img src="data:image/png;base64,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">
                    </p>
                </div>
                <div class="tiny-12 small-8 medium-9 large-9">
                    <h2 id="t1-about-title" contenteditable="true" class="contenteditable t1-about-title">About me</h2>
                    <p id="t1-about-text" contenteditable="true" class="contenteditable t1-about-text">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam.</p>
                </div>
            </div>
            <div class="row center-tiny start-small">
                <div class="tiny-12 small-4 medium-3 large-3">
                </div>
                <div class="tiny-12 small-4 medium-5 large-5">
                    <h2 id="t1-contact-title" contenteditable="true" class="contenteditable t1-contact-title">Contact Details</h2>
                    <p id="t1-contact-text" contenteditable="true" class="contenteditable t1-contact-text">
                        Jonathan Doe <br>
                        1600 Amphitheatre Parkway <br>
                        Mountain View, CA 94043 US <br>
                        (123)456-7890 <br>
                        anyone@website.com
                    </p>
                </div>
                <div class="tiny-12 small-4 medium-4 large-4">
                    <button id="t1-download-resume-button" contenteditable="true" class="contenteditable t1-download-resume-button">Download Resume</button>
                </div>
            </div>
        </div>
    </section>

    <section class="t1-resume">
        <div class="container">
            <div class="row center-tiny start-small">
                <div class="tiny-12 small-4 medium-3 large-3">
                    <h2 id="t1-resume-title-1" contenteditable="true" class="contenteditable t1-resume-title-1">Education</h2>
                </div>
                <div class="tiny-12 small-8 medium-9 large-8">
                    <div id="t1-resume-text-1" contenteditable="true" class="contenteditable t1-resume-text-1">
                        <h3>University of Life</h3>
                        <i><strong>Master in Graphic Design • April 2007</strong></i>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. Nullam dictum felis eu pede mollis pretium.</p>
                        <br>
                        <h3><strong>School of Cool Designers</h3>
                        <i>B.A. Degree in Graphic Design • March 2003</strong></i>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. Nullam dictum felis eu pede mollis pretium.</p>
                    </div>
                 </div>
            </div>
            <hr>
            <div class="row center-tiny start-small">
                <div class="tiny-12 small-4 medium-3 large-3">
                    <h2 id="t1-resume-title-2" contenteditable="true" class="contenteditable t1-resume-title-2">work</h2>
                </div>
                <div class="tiny-12 small-8 medium-9 large-8">
                    <div id="t1-resume-text-2" contenteditable="true" class="contenteditable t1-resume-text-2">
                        <h3>Awesome Design Studio</h3>
                        <i><strong>Senior UX Designer • March 2010 - Present</strong></i>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. Nullam dictum felis eu pede mollis pretium.</p>
                        <br>
                        <h3>Super Cool Studio</h3>
                        <i><strong>UX Designer • March 2007 - February 2010</strong></i>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. Nullam dictum felis eu pede mollis pretium.</p>
                    </div>
                 </div>
            </div>
        </div>
    </section>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/medium-editor@latest/dist/js/medium-editor.min.js"></script>
    <script src="../js/medium-button.min.js"></script>
    <script src="../js/plaask-editor-min.js"></script>

    <!-- https://yabwe.github.io/medium-editor/ -->
    <!-- https://github.com/arcs-/medium-button -->
    <!-- https://github.com/yabwe/medium-editor -->
    <!-- https://demo.getgrav.org/ceevee-skeleton/ -->
    <script>
        var editor = new MediumEditor('.contenteditable', {
            buttonLabels: false,
            keyboardCommands: {
                commands: [
                    {
                        command: 'bold',
                        key: 'B',
                        meta: true,
                        shift: false,
                        alt: false
                    },
                    {
                        command: 'italic',
                        key: 'I',
                        meta: true,
                        shift: false,
                        alt: false
                    },
                    {
                        command: 'underline',
                        key: 'U',
                        meta: true,
                        shift: false,
                        alt: false
                    }
                ],
            },
            toolbar: {
                allowMultiParagraphSelection: true,
                buttons: [
                    'bold',
                    'italic',
                    'underline',
                    'h1',
                    'h2',
                    'h3',
                    'anchor',
                    'image',
                    // 'html',
                    // 'img',
                    'button'
                ],
                diffLeft: 0,
                diffTop: -10,
                firstButtonClass: 'medium-editor-button-first',
                lastButtonClass: 'medium-editor-button-last',
                relativeContainer: null,
                standardizeSelectionStart: false,
                static: false,
                /* options which only apply when static is true */
                align: 'center',
                sticky: false,
                updateOnEmptySelection: false,
                autoLink: true
            },
            extensions: {
                'button': new MediumButton({
                    label: '<b>button</b>',
                    start: '<a href="" class="t1-button">',
                    end:   '</a>',
                    action: function(html, mark, parent) {
                        return html;
                    }
                }),
            }

        });

    </script>

</body>
</html>
