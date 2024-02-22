<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<style>
/*------------------------------------------------------------------
[Master Stylesheet]

Project        :   SPRUHA - HTML5 Bootstrap Admin Template
Version        :   V.1
Create Date    :   03/10/20
Copyright      :   Spruko Technologies Private Limited 
Author         :   SprukoSoft
Author URL     :   https://themeforest.net/user/sprukosoft
Support	       :   support@spruko.com
License        :   Licensed under ThemeForest License

-------------------------------------------------------------------*/
/*
1.	Bootstrap-custom
2.	Accordions
3.	Alerts
4.	Badges
5.	Breadcrumbs
6.	Buttons
7.	Cards
8.	Carousel
9.	Dropdown
10.	Forms
11.	Grid
12.	Input-group
13.	Modals
14.	Navigation
15.	Pagination
16.	Popover
17.	Progress
18.	Tables
19.	Datatable
20.	Toast
21.	Tooltip
22.	Color
23.	Main-content
24.	Header
25.	Footer
26.	Sidebar
27.	Right-sidebar
28.	Profile
29.	Iconbar
30.	Datepicker
31.	Datetimepicker
32.	Jqvmap
33.	Chart
34.	Parsely
35.	Quill
36.	Rangeslider
37.	Select2
38.	Spectrum
39.	Calendar
40.	Chat
41.	Contacts
42.	Error
43.	Invoice
44.	Mail
45.	Profile
46.	Account-setting
47.	Pricing
48.	Scrumboard
49.	Todotask
50.	Product-list
51.	Whishlist
52.	Border
53.	Height
54.	Margin
55.	Opacity
56.	Padding
57.	Position
58.	Typography
59.	Width
60.	Tags
61.	Tabs
62.	Navbar
63.	Wizard
64.	P-scroll
65.	Radio
66.	Rating
67.	Timeline
68.	Countdown
69.	Image
70.	List
71.	Checkbox
72.	Toggle
73.	Listgroup
74.	Jumborton
75.	Custom-control
76.	Element-sizes
77.	Custom-styles
*/
/* ########## BOOTSTRAP OVERRIDES ########## */
/* ############### FONTS IMPORT ############### */
@import url("https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&amp;display=swap");

/*Color variables*/
/*gray variables*/
/*white variables*/
/*black variables*/
/* ###### Bootstrap ###### */
:root {
    --primary-bg-color: #0068ff;
    --primary-transparentcolor: #e4e9ff;
    --primary-bg-color: #0068ff;
    --indigo: $indigo;
    --purple: #6f42c1;
    --pink: #f1388b;
    --orange: #fd7e14;
    --yellow: #ffc107;
    --green: #28a745;
    --teal: #20c997;
    --cyan: #17a2b8;
    --white: #fff;
    --gray: #6c757d;
    --gray-dark: #343a40;
    --primary: #007bff;
    --secondary: #6c757d;
    --success: #28a745;
    --info: #17a2b8;
    --warning: #ffc107;
    --danger: #dc3545;
    --light: #f8f9fa;
    --dark: #343a40;
    --breakpoint-xs: 0;
    --breakpoint-sm: 576px;
    --breakpoint-md: 768px;
    --breakpoint-lg: 992px;
    --breakpoint-xl: 1200px;
    --font-family-sans-serif: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
    --font-family-monospace: SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
}

* {
    box-sizing: border-box;
}

*::before,
*::after {
    box-sizing: border-box;
}

html {
    font-family: sans-serif;
    line-height: 1.15;
    -webkit-text-size-adjust: 100%;
    -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
}

article,
aside,
figcaption,
figure,
footer,
header,
hgroup,
main,
nav,
section {
    display: block;
}

body {
    background: #ecedef;
    color: #181c27;
    direction: ltr;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    -webkit-tap-highlight-color: transparent;
    -webkit-text-size-adjust: none;
    -ms-touch-action: manipulation;
    touch-action: manipulation;
    -webkit-font-feature-settings: "liga"0;
    font-feature-settings: "liga"0;
    overflow-y: scroll;
    width: 100%;
    position: relative;
    font-family: "Poppins", sans-serif;
    margin: 0;
    font-size: 0.875rem;
    font-weight: 400;
    line-height: 1.5;
    text-align: left;
    background-color: #ffffff;
}

[tabindex="-1"]:focus {
    outline: 0 !important;
}

h1,
h2,
h3,
h4,
h5,
h6 {
    margin-top: 0;
    margin-bottom: 0.5rem;
}

p {
    margin-top: 0;
    margin-bottom: 1rem;
}

abbr[title],
abbr[data-original-title] {
    text-decoration: underline;
    text-decoration: underline dotted;
    cursor: help;
    border-bottom: 0;
    text-decoration-skip-ink: none;
}

address {
    margin-bottom: 1rem;
    font-style: normal;
    line-height: inherit;
}

ol,
ul,
dl {
    margin-top: 0;
    margin-bottom: 1rem;
}

ol ol,
ul ul,
ol ul,
ul ol {
    margin-bottom: 0;
    list-style-type: none;
}

dt {
    font-weight: 700;
}

dd {
    margin-bottom: .5rem;
    margin-left: 0;
    display: inline-block;
}

blockquote {
    margin: 0 0 1rem;
}

b,
strong {
    font-weight: bolder;
}

small {
    font-size: 80%;
}

sub,
sup {
    position: relative;
    font-size: 75%;
    line-height: 0;
    vertical-align: baseline;
}

sub {
    bottom: -.25em;
}

sup {
    top: -.5em;
}

a {
    text-decoration: none;
    background-color: transparent;
}

a:hover {
    text-decoration: none;
}

a:not([href]):not([tabindex]) {
    color: inherit;
    text-decoration: none;
}

a:not([href]):not([tabindex]):hover {
    color: inherit;
    text-decoration: none;
}

a:not([href]):not([tabindex]):focus {
    color: inherit;
    text-decoration: none;
    outline: 0;
}

pre,
code,
kbd,
samp {
    font-family: SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
    font-size: 1em;
}

figure {
    margin: 0 0 1rem;
}

img {
    vertical-align: middle;
    border-style: none;
    max-width: 100%;
}

svg {
    overflow: hidden;
    vertical-align: middle;
}

table {
    border-collapse: collapse;
}

caption {
    padding-top: 0.75rem;
    padding-bottom: 0.75rem;
    color: #a8afc7;
    text-align: left;
    caption-side: bottom;
}

th {
    text-align: inherit;
}

label {
    display: inline-block;
    margin-bottom: 0.5rem;
}

button:focus {
    outline: none;
}

input,
button,
select,
optgroup,
textarea {
    margin: 0;
    font-family: inherit;
    font-size: inherit;
    line-height: inherit;
}

button,
input {
    overflow: visible;
}

select {
    text-transform: none;
    word-wrap: normal;
}

button,
[type="button"],
[type="reset"],
[type="submit"] {
    -webkit-appearance: button;
}

button:not(:disabled),
[type="button"]:not(:disabled),
[type="reset"]:not(:disabled),
[type="submit"]:not(:disabled) {
    cursor: pointer;
}

button::-moz-focus-inner,
[type="button"]::-moz-focus-inner,
[type="reset"]::-moz-focus-inner,
[type="submit"]::-moz-focus-inner {
    padding: 0;
    border-style: none;
}

input[type="radio"],
input[type="checkbox"] {
    box-sizing: border-box;
    padding: 0;
}

input[type="date"],
input[type="time"],
input[type="datetime-local"],
input[type="month"] {
    -webkit-appearance: listbox;
}

textarea {
    overflow: auto;
    resize: vertical;
}

fieldset {
    min-width: 0;
    padding: 0;
    margin: 0;
    border: 0;
}

legend {
    display: block;
    width: 100%;
    max-width: 100%;
    padding: 0;
    margin-bottom: .5rem;
    font-size: 1.5rem;
    line-height: inherit;
    color: inherit;
    white-space: normal;
}

progress {
    vertical-align: baseline;
}

[type="number"]::-webkit-inner-spin-button,
[type="number"]::-webkit-outer-spin-button {
    height: auto;
}

[type="search"] {
    outline-offset: -2px;
    -webkit-appearance: none;
}

[type="search"]::-webkit-search-decoration {
    -webkit-appearance: none;
}

::-webkit-file-upload-button {
    font: inherit;
    -webkit-appearance: button;
}

output {
    display: inline-block;
}

summary {
    display: list-item;
    cursor: pointer;
}

template {
    display: none;
}

[hidden] {
    display: none !important;
}

h1,
h2,
h3,
h4,
h5,
h6,
.h1,
.h2,
.h3,
.h4,
.h5,
.h6 {
    margin-bottom: 0.5rem;
    font-weight: 600;
    line-height: 1.2;
}

h1,
.h1 {
    font-size: 2.1875rem;
}

h2,
.h2 {
    font-size: 1.75rem;
}

h3,
.h3 {
    font-size: 1.53125rem;
}

h4,
.h4 {
    font-size: 1.3125rem;
}

h5,
.h5 {
    font-size: 1.09375rem;
}

h6,
.h6 {
    font-size: 0.875rem;
}

.lead {
    font-size: 1.09375rem;
    font-weight: 300;
}

.display-1 {
    font-size: 6rem;
    font-weight: 300;
    line-height: 1.2;
}

.display-2 {
    font-size: 5.5rem;
    font-weight: 300;
    line-height: 1.2;
}

.display-3 {
    font-size: 4.5rem;
    font-weight: 300;
    line-height: 1.2;
}

.display-4 {
    font-size: 3.5rem;
    font-weight: 300;
    line-height: 1.2;
}

hr {
    margin-top: 1rem;
    margin-bottom: 1rem;
    border: 0;
    border-top: 1px solid #d5d9dc;
    box-sizing: content-box;
    height: 0;
    overflow: visible;
}

small,
.small {
    font-size: 80%;
    font-weight: 400;
}

mark,
.mark {
    padding: 0.2em;
    background-color: #fcf8e3;
}

.list-unstyled,
.list-inline {
    padding-left: 0;
    list-style: none;
}

.list-inline-item {
    display: inline-block;
}

.list-inline-item:not(:last-child) {
    margin-right: 0.5rem;
}

.initialism {
    font-size: 90%;
    text-transform: uppercase;
}

.blockquote {
    margin-bottom: 1rem;
    font-size: 1.09375rem;
}

.blockquote-footer {
    display: block;
    font-size: 80%;
    color: #a8afc7;
}

.blockquote-footer::before {
    content: "\2014\00A0";
}

.img-fluid {
    max-width: 100%;
    height: auto;
}

.img-thumbnail {
    padding: 0.25rem;
    background-color: #ffffff;
    border: 1px solid #e8e8f7;
    border-radius: 0px;
    max-width: 100%;
    height: auto;
}

.figure {
    display: inline-block;
}

.figure-img {
    margin-bottom: 0.5rem;
    line-height: 1;
}

.figure-caption {
    font-size: 90%;
    color: #a8afc7;
}

code {
    font-size: 87.5%;
    color: #f10075;
    word-break: break-word;
}

a>code {
    color: inherit;
}

kbd {
    padding: 0.2rem 0.4rem;
    font-size: 87.5%;
    color: #ffffff;
    background-color: #8f9cc0;
    border-radius: 0.2rem;
}

kbd kbd {
    padding: 0;
    font-size: 100%;
    font-weight: 700;
}

pre {
    display: block;
    padding: 1rem;
    overflow: auto;
    font-size: 85%;
    line-height: 1.45;
    border-radius: 3px;
    -moz-tab-size: 4;
    -o-tab-size: 4;
    tab-size: 4;
    text-shadow: 0 1px white;
    -webkit-hyphens: none;
    -moz-hyphens: none;
    -ms-hyphens: none;
    hyphens: none;
    margin-top: 0;
    margin-bottom: 0;
}

pre code {
    font-size: inherit;
    color: inherit;
    word-break: normal;
}

.pre-scrollable {
    max-height: 340px;
    overflow-y: scroll;
}

.container,
.container-fluid {
    width: 100%;
    padding-right: 15px;
    padding-left: 15px;
    margin-right: auto;
    margin-left: auto;
}

@media (min-width: 576px) {
    .container {
        max-width: 540px;
    }
}

@media (min-width: 768px) {
    .container {
        max-width: 720px;
    }
}

@media (min-width: 992px) {
    .container {
        max-width: 960px;
    }
}

@media (min-width: 1200px) {
    .container {
        max-width: 1140px;
    }
}

.row {
    display: flex;
    flex-wrap: wrap;
    margin-right: -15px;
    margin-left: -15px;
}

.no-gutters {
    margin-right: 0;
    margin-left: 0;
}

.no-gutters>.col,
.no-gutters>[class*="col-"] {
    padding-right: 0;
    padding-left: 0;
}

.col-1,
.col-2,
.col-3,
.col-4,
.col-5,
.col-6,
.col-7,
.col-8,
.col-9,
.col-10,
.col-11,
.col-12,
.col,
.col-auto,
.col-sm-1,
.col-sm-2,
.col-sm-3,
.col-sm-4,
.col-sm-5,
.col-sm-6,
.col-sm-7,
.col-sm-8,
.col-sm-9,
.col-sm-10,
.col-sm-11,
.col-sm-12,
.col-sm,
.col-sm-auto,
.col-md-1,
.col-md-2,
.col-md-3,
.col-md-4,
.col-md-5,
.col-md-6,
.col-md-7,
.col-md-8,
.col-md-9,
.col-md-10,
.col-md-11,
.col-md-12,
.col-md,
.col-md-auto,
.col-lg-1,
.col-lg-2,
.col-lg-3,
.col-lg-4,
.col-lg-5,
.col-lg-6,
.col-lg-7,
.col-lg-8,
.col-lg-9,
.col-lg-10,
.col-lg-11,
.col-lg-12,
.col-lg,
.col-lg-auto,
.col-xl-1,
.col-xl-2,
.col-xl-3,
.col-xl-4,
.col-xl-5,
.col-xl-6,
.col-xl-7,
.col-xl-8,
.col-xl-9,
.col-xl-10,
.col-xl-11,
.col-xl-12,
.col-xl,
.col-xl-auto {
    position: relative;
    width: 100%;
    padding-right: 15px;
    padding-left: 15px;
}

.col {
    flex-basis: 0;
    flex-grow: 1;
    max-width: 100%;
}

.col-auto {
    flex: 0 0 auto;
    width: auto;
    max-width: 100%;
}

.col-1 {
    flex: 0 0 8.33333%;
    max-width: 8.33333%;
}

.col-2 {
    flex: 0 0 16.66667%;
    max-width: 16.66667%;
}

.col-3 {
    flex: 0 0 25%;
    max-width: 25%;
}

.col-4 {
    flex: 0 0 33.33333%;
    max-width: 33.33333%;
}

.col-5 {
    flex: 0 0 41.66667%;
    max-width: 41.66667%;
}

.col-6 {
    flex: 0 0 50%;
    max-width: 50%;
}

.col-7 {
    flex: 0 0 58.33333%;
    max-width: 58.33333%;
}

.col-8 {
    flex: 0 0 66.66667%;
    max-width: 66.66667%;
}

.col-9 {
    flex: 0 0 75%;
    max-width: 75%;
}

.col-10 {
    flex: 0 0 83.33333%;
    max-width: 83.33333%;
}

.col-11 {
    flex: 0 0 91.66667%;
    max-width: 91.66667%;
}

.col-12 {
    flex: 0 0 100%;
    max-width: 100%;
}

.order-first {
    order: -1;
}

.order-last {
    order: 13;
}

.order-0 {
    order: 0;
}

.order-1 {
    order: 1;
}

.order-2 {
    order: 2;
}

.order-3 {
    order: 3;
}

.order-4 {
    order: 4;
}

.order-5 {
    order: 5;
}

.order-6 {
    order: 6;
}

.order-7 {
    order: 7;
}

.order-8 {
    order: 8;
}

.order-9 {
    order: 9;
}

.order-10 {
    order: 10;
}

.order-11 {
    order: 11;
}

.order-12 {
    order: 12;
}

.offset-1 {
    margin-left: 8.33333%;
}

.offset-2 {
    margin-left: 16.66667%;
}

.offset-3 {
    margin-left: 25%;
}

.offset-4 {
    margin-left: 33.33333%;
}

.offset-5 {
    margin-left: 41.66667%;
}

.offset-6 {
    margin-left: 50%;
}

.offset-7 {
    margin-left: 58.33333%;
}

.offset-8 {
    margin-left: 66.66667%;
}

.offset-9 {
    margin-left: 75%;
}

.offset-10 {
    margin-left: 83.33333%;
}

.offset-11 {
    margin-left: 91.66667%;
}

@media (min-width: 576px) {
    .col-sm {
        flex-basis: 0;
        flex-grow: 1;
        max-width: 100%;
    }

    .col-sm-auto {
        flex: 0 0 auto;
        width: auto;
        max-width: 100%;
    }

    .col-sm-1 {
        flex: 0 0 8.33333%;
        max-width: 8.33333%;
    }

    .col-sm-2 {
        flex: 0 0 16.66667%;
        max-width: 16.66667%;
    }

    .col-sm-3 {
        flex: 0 0 25%;
        max-width: 25%;
    }

    .col-sm-4 {
        flex: 0 0 33.33333%;
        max-width: 33.33333%;
    }

    .col-sm-5 {
        flex: 0 0 41.66667%;
        max-width: 41.66667%;
    }

    .col-sm-6 {
        flex: 0 0 50%;
        max-width: 50%;
    }

    .col-sm-7 {
        flex: 0 0 58.33333%;
        max-width: 58.33333%;
    }

    .col-sm-8 {
        flex: 0 0 66.66667%;
        max-width: 66.66667%;
    }

    .col-sm-9 {
        flex: 0 0 75%;
        max-width: 75%;
    }

    .col-sm-10 {
        flex: 0 0 83.33333%;
        max-width: 83.33333%;
    }

    .col-sm-11 {
        flex: 0 0 91.66667%;
        max-width: 91.66667%;
    }

    .col-sm-12 {
        flex: 0 0 100%;
        max-width: 100%;
    }

    .order-sm-first {
        order: -1;
    }

    .order-sm-last {
        order: 13;
    }

    .order-sm-0 {
        order: 0;
    }

    .order-sm-1 {
        order: 1;
    }

    .order-sm-2 {
        order: 2;
    }

    .order-sm-3 {
        order: 3;
    }

    .order-sm-4 {
        order: 4;
    }

    .order-sm-5 {
        order: 5;
    }

    .order-sm-6 {
        order: 6;
    }

    .order-sm-7 {
        order: 7;
    }

    .order-sm-8 {
        order: 8;
    }

    .order-sm-9 {
        order: 9;
    }

    .order-sm-10 {
        order: 10;
    }

    .order-sm-11 {
        order: 11;
    }

    .order-sm-12 {
        order: 12;
    }

    .offset-sm-0 {
        margin-left: 0;
    }

    .offset-sm-1 {
        margin-left: 8.33333%;
    }

    .offset-sm-2 {
        margin-left: 16.66667%;
    }

    .offset-sm-3 {
        margin-left: 25%;
    }

    .offset-sm-4 {
        margin-left: 33.33333%;
    }

    .offset-sm-5 {
        margin-left: 41.66667%;
    }

    .offset-sm-6 {
        margin-left: 50%;
    }

    .offset-sm-7 {
        margin-left: 58.33333%;
    }

    .offset-sm-8 {
        margin-left: 66.66667%;
    }

    .offset-sm-9 {
        margin-left: 75%;
    }

    .offset-sm-10 {
        margin-left: 83.33333%;
    }

    .offset-sm-11 {
        margin-left: 91.66667%;
    }
}

@media (min-width: 768px) {
    .col-md {
        flex-basis: 0;
        flex-grow: 1;
        max-width: 100%;
    }

    .col-md-auto {
        flex: 0 0 auto;
        width: auto;
        max-width: 100%;
    }

    .col-md-1 {
        flex: 0 0 8.33333%;
        max-width: 8.33333%;
    }

    .col-md-2 {
        flex: 0 0 16.66667%;
        max-width: 16.66667%;
    }

    .col-md-3 {
        flex: 0 0 25%;
        max-width: 25%;
    }

    .col-md-4 {
        flex: 0 0 33.33333%;
        max-width: 33.33333%;
    }

    .col-md-5 {
        flex: 0 0 41.66667%;
        max-width: 41.66667%;
    }

    .col-md-6 {
        flex: 0 0 50%;
        max-width: 50%;
    }

    .col-md-7 {
        flex: 0 0 58.33333%;
        max-width: 58.33333%;
    }

    .col-md-8 {
        flex: 0 0 66.66667%;
        max-width: 66.66667%;
    }

    .col-md-9 {
        flex: 0 0 75%;
        max-width: 75%;
    }

    .col-md-10 {
        flex: 0 0 83.33333%;
        max-width: 83.33333%;
    }

    .col-md-11 {
        flex: 0 0 91.66667%;
        max-width: 91.66667%;
    }

    .col-md-12 {
        flex: 0 0 100%;
        max-width: 100%;
    }

    .order-md-first {
        order: -1;
    }

    .order-md-last {
        order: 13;
    }

    .order-md-0 {
        order: 0;
    }

    .order-md-1 {
        order: 1;
    }

    .order-md-2 {
        order: 2;
    }

    .order-md-3 {
        order: 3;
    }

    .order-md-4 {
        order: 4;
    }

    .order-md-5 {
        order: 5;
    }

    .order-md-6 {
        order: 6;
    }

    .order-md-7 {
        order: 7;
    }

    .order-md-8 {
        order: 8;
    }

    .order-md-9 {
        order: 9;
    }

    .order-md-10 {
        order: 10;
    }

    .order-md-11 {
        order: 11;
    }

    .order-md-12 {
        order: 12;
    }

    .offset-md-0 {
        margin-left: 0;
    }

    .offset-md-1 {
        margin-left: 8.33333%;
    }

    .offset-md-2 {
        margin-left: 16.66667%;
    }

    .offset-md-3 {
        margin-left: 25%;
    }

    .offset-md-4 {
        margin-left: 33.33333%;
    }

    .offset-md-5 {
        margin-left: 41.66667%;
    }

    .offset-md-6 {
        margin-left: 50%;
    }

    .offset-md-7 {
        margin-left: 58.33333%;
    }

    .offset-md-8 {
        margin-left: 66.66667%;
    }

    .offset-md-9 {
        margin-left: 75%;
    }

    .offset-md-10 {
        margin-left: 83.33333%;
    }

    .offset-md-11 {
        margin-left: 91.66667%;
    }
}

@media (min-width: 992px) {
    .col-lg {
        flex-basis: 0;
        flex-grow: 1;
        max-width: 100%;
    }

    .col-lg-auto {
        flex: 0 0 auto;
        width: auto;
        max-width: 100%;
    }

    .col-lg-1 {
        flex: 0 0 8.33333%;
        max-width: 8.33333%;
    }

    .col-lg-2 {
        flex: 0 0 16.66667%;
        max-width: 16.66667%;
    }

    .col-lg-3 {
        flex: 0 0 25%;
        max-width: 25%;
    }

    .col-lg-4 {
        flex: 0 0 33.33333%;
        max-width: 33.33333%;
    }

    .col-lg-5 {
        flex: 0 0 41.66667%;
        max-width: 41.66667%;
    }

    .col-lg-6 {
        flex: 0 0 50%;
        max-width: 50%;
    }

    .col-lg-7 {
        flex: 0 0 58.33333%;
        max-width: 58.33333%;
    }

    .col-lg-8 {
        flex: 0 0 66.66667%;
        max-width: 66.66667%;
    }

    .col-lg-9 {
        flex: 0 0 75%;
        max-width: 75%;
    }

    .col-lg-10 {
        flex: 0 0 83.33333%;
        max-width: 83.33333%;
    }

    .col-lg-11 {
        flex: 0 0 91.66667%;
        max-width: 91.66667%;
    }

    .col-lg-12 {
        flex: 0 0 100%;
        max-width: 100%;
    }

    .order-lg-first {
        order: -1;
    }

    .order-lg-last {
        order: 13;
    }

    .order-lg-0 {
        order: 0;
    }

    .order-lg-1 {
        order: 1;
    }

    .order-lg-2 {
        order: 2;
    }

    .order-lg-3 {
        order: 3;
    }

    .order-lg-4 {
        order: 4;
    }

    .order-lg-5 {
        order: 5;
    }

    .order-lg-6 {
        order: 6;
    }

    .order-lg-7 {
        order: 7;
    }

    .order-lg-8 {
        order: 8;
    }

    .order-lg-9 {
        order: 9;
    }

    .order-lg-10 {
        order: 10;
    }

    .order-lg-11 {
        order: 11;
    }

    .order-lg-12 {
        order: 12;
    }

    .offset-lg-0 {
        margin-left: 0;
    }

    .offset-lg-1 {
        margin-left: 8.33333%;
    }

    .offset-lg-2 {
        margin-left: 16.66667%;
    }

    .offset-lg-3 {
        margin-left: 25%;
    }

    .offset-lg-4 {
        margin-left: 33.33333%;
    }

    .offset-lg-5 {
        margin-left: 41.66667%;
    }

    .offset-lg-6 {
        margin-left: 50%;
    }

    .offset-lg-7 {
        margin-left: 58.33333%;
    }

    .offset-lg-8 {
        margin-left: 66.66667%;
    }

    .offset-lg-9 {
        margin-left: 75%;
    }

    .offset-lg-10 {
        margin-left: 83.33333%;
    }

    .offset-lg-11 {
        margin-left: 91.66667%;
    }
}

@media (min-width: 1200px) {
    .col-xl {
        flex-basis: 0;
        flex-grow: 1;
        max-width: 100%;
    }

    .col-xl-auto {
        flex: 0 0 auto;
        width: auto;
        max-width: 100%;
    }

    .col-xl-1 {
        flex: 0 0 8.33333%;
        max-width: 8.33333%;
    }

    .col-xl-2 {
        flex: 0 0 16.66667%;
        max-width: 16.66667%;
    }

    .col-xl-3 {
        flex: 0 0 25%;
        max-width: 25%;
    }

    .col-xl-4 {
        flex: 0 0 33.33333%;
        max-width: 33.33333%;
    }

    .col-xl-5 {
        flex: 0 0 41.66667%;
        max-width: 41.66667%;
    }

    .col-xl-6 {
        flex: 0 0 50%;
        max-width: 50%;
    }

    .col-xl-7 {
        flex: 0 0 58.33333%;
        max-width: 58.33333%;
    }

    .col-xl-8 {
        flex: 0 0 66.66667%;
        max-width: 66.66667%;
    }

    .col-xl-9 {
        flex: 0 0 75%;
        max-width: 75%;
    }

    .col-xl-10 {
        flex: 0 0 83.33333%;
        max-width: 83.33333%;
    }

    .col-xl-11 {
        flex: 0 0 91.66667%;
        max-width: 91.66667%;
    }

    .col-xl-12 {
        flex: 0 0 100%;
        max-width: 100%;
    }

    .order-xl-first {
        order: -1;
    }

    .order-xl-last {
        order: 13;
    }

    .order-xl-0 {
        order: 0;
    }

    .order-xl-1 {
        order: 1;
    }

    .order-xl-2 {
        order: 2;
    }

    .order-xl-3 {
        order: 3;
    }

    .order-xl-4 {
        order: 4;
    }

    .order-xl-5 {
        order: 5;
    }

    .order-xl-6 {
        order: 6;
    }

    .order-xl-7 {
        order: 7;
    }

    .order-xl-8 {
        order: 8;
    }

    .order-xl-9 {
        order: 9;
    }

    .order-xl-10 {
        order: 10;
    }

    .order-xl-11 {
        order: 11;
    }

    .order-xl-12 {
        order: 12;
    }

    .offset-xl-0 {
        margin-left: 0;
    }

    .offset-xl-1 {
        margin-left: 8.33333%;
    }

    .offset-xl-2 {
        margin-left: 16.66667%;
    }

    .offset-xl-3 {
        margin-left: 25%;
    }

    .offset-xl-4 {
        margin-left: 33.33333%;
    }

    .offset-xl-5 {
        margin-left: 41.66667%;
    }

    .offset-xl-6 {
        margin-left: 50%;
    }

    .offset-xl-7 {
        margin-left: 58.33333%;
    }

    .offset-xl-8 {
        margin-left: 66.66667%;
    }

    .offset-xl-9 {
        margin-left: 75%;
    }

    .offset-xl-10 {
        margin-left: 83.33333%;
    }

    .offset-xl-11 {
        margin-left: 91.66667%;
    }
}

@media (min-width: 1600px) {
    .col-xxl {
        flex-basis: 0;
        flex-grow: 1;
        max-width: 100%;
    }

    .col-xxl-auto {
        flex: 0 0 auto;
        width: auto;
        max-width: 100%;
    }

    .col-xxl-1 {
        flex: 0 0 8.33333%;
        max-width: 8.33333%;
    }

    .col-xxl-2 {
        flex: 0 0 16.66667%;
        max-width: 16.66667%;
    }

    .col-xxl-3 {
        flex: 0 0 25%;
        max-width: 25%;
    }

    .col-xxl-4 {
        flex: 0 0 33.33333%;
        max-width: 33.33333%;
    }

    .col-xxl-5 {
        flex: 0 0 41.66667%;
        max-width: 41.66667%;
    }

    .col-xxl-6 {
        flex: 0 0 50%;
        max-width: 50%;
    }

    .col-xxl-7 {
        flex: 0 0 58.33333%;
        max-width: 58.33333%;
    }

    .col-xxl-8 {
        flex: 0 0 66.66667%;
        max-width: 66.66667%;
    }

    .col-xxl-9 {
        flex: 0 0 75%;
        max-width: 75%;
    }

    .col-xxl-10 {
        flex: 0 0 83.33333%;
        max-width: 83.33333%;
    }

    .col-xxl-11 {
        flex: 0 0 91.66667%;
        max-width: 91.66667%;
    }

    .col-xxl-12 {
        flex: 0 0 100%;
        max-width: 100%;
    }

    .order-xxl-first {
        order: -1;
    }

    .order-xxl-last {
        order: 13;
    }

    .order-xxl-0 {
        order: 0;
    }

    .order-xxl-1 {
        order: 1;
    }

    .order-xxl-2 {
        order: 2;
    }

    .order-xxl-3 {
        order: 3;
    }

    .order-xxl-4 {
        order: 4;
    }

    .order-xxl-5 {
        order: 5;
    }

    .order-xxl-6 {
        order: 6;
    }

    .order-xxl-7 {
        order: 7;
    }

    .order-xxl-8 {
        order: 8;
    }

    .order-xxl-9 {
        order: 9;
    }

    .order-xxl-10 {
        order: 10;
    }

    .order-xxl-11 {
        order: 11;
    }

    .order-xxl-12 {
        order: 12;
    }

    .offset-xxl-0 {
        margin-left: 0;
    }

    .offset-xxl-1 {
        margin-left: 8.33333%;
    }

    .offset-xxl-2 {
        margin-left: 16.66667%;
    }

    .offset-xxl-3 {
        margin-left: 25%;
    }

    .offset-xxl-4 {
        margin-left: 33.33333%;
    }

    .offset-xxl-5 {
        margin-left: 41.66667%;
    }

    .offset-xxl-6 {
        margin-left: 50%;
    }

    .offset-xxl-7 {
        margin-left: 58.33333%;
    }

    .offset-xxl-8 {
        margin-left: 66.66667%;
    }

    .offset-xxl-9 {
        margin-left: 75%;
    }

    .offset-xxl-10 {
        margin-left: 83.33333%;
    }

    .offset-xxl-11 {
        margin-left: 91.66667%;
    }
}

.valid-feedback {
    display: none;
    width: 100%;
    margin-top: 0.25rem;
    font-size: 80%;
    color: #269c8e;
}

.valid-tooltip {
    position: absolute;
    top: 100%;
    z-index: 5;
    display: none;
    max-width: 100%;
    padding: 0.25rem 0.5rem;
    margin-top: .1rem;
    font-size: 0.76562rem;
    line-height: 1.5;
    color: #ffffff;
    background-color: rgba(59, 176, 1, 0.9);
    border-radius: 3px;
}

.was-validated .form-control:valid,
.form-control.is-valid,
input.form-control.parsley-success,
textarea.form-control.parsley-success {
    border-color: #269c8e;
    padding-right: calc(1.5em + 0.75rem);
    background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8 8'%3e%3cpath fill='%233bb001' d='M2.3 6.73L.6 4.53c-.4-1.04.46-1.4 1.1-.8l1.1 1.4 3.4-3.8c.6-.63 1.6-.27 1.2.7l-4 4.6c-.43.5-.8.4-1.1.1z'/%3e%3c/svg%3e");
    background-repeat: no-repeat;
    background-position: center right calc(0.375em + 0.1875rem);
    background-size: calc(0.75em + 0.375rem) calc(0.75em + 0.375rem);
}

.was-validated .form-control:valid:focus,
.form-control.is-valid:focus,
input.form-control.parsley-success:focus,
textarea.form-control.parsley-success:focus {
    border-color: #269c8e;
    box-shadow: none;
}

.was-validated .form-control:valid~.valid-feedback,
.was-validated .form-control:valid~.valid-tooltip {
    display: block;
}

.form-control.is-valid~.valid-feedback,
input.form-control.parsley-success~.valid-feedback,
textarea.form-control.parsley-success~.valid-feedback,
.form-control.is-valid~.valid-tooltip,
input.form-control.parsley-success~.valid-tooltip,
textarea.form-control.parsley-success~.valid-tooltip {
    display: block;
}

.was-validated textarea.form-control:valid {
    padding-right: calc(1.5em + 0.75rem);
    background-position: top calc(0.375em + 0.1875rem) right calc(0.375em + 0.1875rem);
}

textarea.form-control.is-valid,
textarea.form-control.parsley-success {
    padding-right: calc(1.5em + 0.75rem);
    background-position: top calc(0.375em + 0.1875rem) right calc(0.375em + 0.1875rem);
}

.was-validated .custom-select:valid,
.custom-select.is-valid,
input.custom-select.parsley-success,
textarea.custom-select.parsley-success {
    border-color: #269c8e;
    padding-right: calc((1em + 0.75rem) * 3 / 4 + 1.75rem);
    background: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 4 5'%3e%3cpath fill='%233b4863' d='M2 0L0 2h4zm0 5L0 3h4z'/%3e%3c/svg%3e") no-repeat right 0.75rem center/8px 10px, url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8 8'%3e%3cpath fill='%233bb001' d='M2.3 6.73L.6 4.53c-.4-1.04.46-1.4 1.1-.8l1.1 1.4 3.4-3.8c.6-.63 1.6-.27 1.2.7l-4 4.6c-.43.5-.8.4-1.1.1z'/%3e%3c/svg%3e") #ffffff no-repeat center right 1.75rem/calc(0.75em + 0.375rem) calc(0.75em + 0.375rem);
}

.was-validated .custom-select:valid:focus,
.custom-select.is-valid:focus,
input.custom-select.parsley-success:focus,
textarea.custom-select.parsley-success:focus {
    border-color: #269c8e;
    box-shadow: none;
}

.was-validated .custom-select:valid~.valid-feedback,
.was-validated .custom-select:valid~.valid-tooltip {
    display: block;
}

.custom-select.is-valid~.valid-feedback,
input.custom-select.parsley-success~.valid-feedback,
textarea.custom-select.parsley-success~.valid-feedback,
.custom-select.is-valid~.valid-tooltip,
input.custom-select.parsley-success~.valid-tooltip,
textarea.custom-select.parsley-success~.valid-tooltip {
    display: block;
}

.was-validated .form-control-file:valid~.valid-feedback,
.was-validated .form-control-file:valid~.valid-tooltip {
    display: block;
}

.form-control-file.is-valid~.valid-feedback,
input.form-control-file.parsley-success~.valid-feedback,
textarea.form-control-file.parsley-success~.valid-feedback,
.form-control-file.is-valid~.valid-tooltip,
input.form-control-file.parsley-success~.valid-tooltip,
textarea.form-control-file.parsley-success~.valid-tooltip {
    display: block;
}

.was-validated .form-check-input:valid~.form-check-label,
.form-check-input.is-valid~.form-check-label,
input.form-check-input.parsley-success~.form-check-label,
textarea.form-check-input.parsley-success~.form-check-label {
    color: #269c8e;
}

.was-validated .form-check-input:valid~.valid-feedback,
.was-validated .form-check-input:valid~.valid-tooltip {
    display: block;
}

.form-check-input.is-valid~.valid-feedback,
input.form-check-input.parsley-success~.valid-feedback,
textarea.form-check-input.parsley-success~.valid-feedback,
.form-check-input.is-valid~.valid-tooltip,
input.form-check-input.parsley-success~.valid-tooltip,
textarea.form-check-input.parsley-success~.valid-tooltip {
    display: block;
}

.was-validated .custom-control-input:valid~.custom-control-label,
.custom-control-input.is-valid~.custom-control-label,
input.custom-control-input.parsley-success~.custom-control-label,
textarea.custom-control-input.parsley-success~.custom-control-label {
    color: #269c8e;
}

.was-validated .custom-control-input:valid~.custom-control-label::before,
.custom-control-input.is-valid~.custom-control-label::before,
input.custom-control-input.parsley-success~.custom-control-label::before,
textarea.custom-control-input.parsley-success~.custom-control-label::before {
    border-color: #269c8e;
}

.was-validated .custom-control-input:valid~.valid-feedback,
.was-validated .custom-control-input:valid~.valid-tooltip {
    display: block;
}

.custom-control-input.is-valid~.valid-feedback,
input.custom-control-input.parsley-success~.valid-feedback,
textarea.custom-control-input.parsley-success~.valid-feedback,
.custom-control-input.is-valid~.valid-tooltip,
input.custom-control-input.parsley-success~.valid-tooltip,
textarea.custom-control-input.parsley-success~.valid-tooltip {
    display: block;
}

.was-validated .custom-control-input:valid:checked~.custom-control-label::before,
.custom-control-input.is-valid:checked~.custom-control-label::before,
input.custom-control-input.parsley-success:checked~.custom-control-label::before,
textarea.custom-control-input.parsley-success:checked~.custom-control-label::before {
    border-color: #4ce301;
    background-color: #4ce301;
}

.was-validated .custom-control-input:valid:focus~.custom-control-label::before,
.custom-control-input.is-valid:focus~.custom-control-label::before,
input.custom-control-input.parsley-success:focus~.custom-control-label::before,
textarea.custom-control-input.parsley-success:focus~.custom-control-label::before {
    box-shadow: 0 0 0 0.2rem rgba(59, 176, 1, 0.25);
}

.was-validated .custom-control-input:valid:focus:not(:checked)~.custom-control-label::before,
.custom-control-input.is-valid:focus:not(:checked)~.custom-control-label::before,
input.custom-control-input.parsley-success:focus:not(:checked)~.custom-control-label::before,
textarea.custom-control-input.parsley-success:focus:not(:checked)~.custom-control-label::before,
.was-validated .custom-file-input:valid~.custom-file-label,
.custom-file-input.is-valid~.custom-file-label,
input.custom-file-input.parsley-success~.custom-file-label,
textarea.custom-file-input.parsley-success~.custom-file-label {
    border-color: #269c8e;
}

.was-validated .custom-file-input:valid~.valid-feedback,
.was-validated .custom-file-input:valid~.valid-tooltip {
    display: block;
}

.custom-file-input.is-valid~.valid-feedback,
input.custom-file-input.parsley-success~.valid-feedback,
textarea.custom-file-input.parsley-success~.valid-feedback,
.custom-file-input.is-valid~.valid-tooltip,
input.custom-file-input.parsley-success~.valid-tooltip,
textarea.custom-file-input.parsley-success~.valid-tooltip {
    display: block;
}

.was-validated .custom-file-input:valid:focus~.custom-file-label,
.custom-file-input.is-valid:focus~.custom-file-label,
input.custom-file-input.parsley-success:focus~.custom-file-label,
textarea.custom-file-input.parsley-success:focus~.custom-file-label {
    border-color: #269c8e;
    box-shadow: 0 0 0 0.2rem rgba(59, 176, 1, 0.25);
}

.invalid-feedback {
    display: none;
    width: 100%;
    margin-top: 0.25rem;
    font-size: 80%;
    color: #f16d75;
}

.invalid-tooltip {
    position: absolute;
    top: 100%;
    z-index: 5;
    display: none;
    max-width: 100%;
    padding: 0.25rem 0.5rem;
    margin-top: .1rem;
    font-size: 0.76562rem;
    line-height: 1.5;
    color: #ffffff;
    background-color: rgba(220, 53, 69, 0.9);
    border-radius: 3px;
}

.was-validated .form-control:invalid,
.form-control.is-invalid,
input.form-control.parsley-error,
textarea.form-control.parsley-error {
    border-color: #f16d75;
    padding-right: calc(1.5em + 0.75rem);
    background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='%23dc3545' viewBox='-2 -2 7 7'%3e%3cpath stroke='%23dc3545' d='M0 0l3 3m0-3L0 3'/%3e%3ccircle r='.5'/%3e%3ccircle cx='3' r='.5'/%3e%3ccircle cy='3' r='.5'/%3e%3ccircle cx='3' cy='3' r='.5'/%3e%3c/svg%3E");
    background-repeat: no-repeat;
    background-position: center right calc(0.375em + 0.1875rem);
    background-size: calc(0.75em + 0.375rem) calc(0.75em + 0.375rem);
}

.was-validated .form-control:invalid:focus,
.form-control.is-invalid:focus,
input.form-control.parsley-error:focus,
textarea.form-control.parsley-error:focus {
    border-color: #f16d75;
    box-shadow: none;
}

.was-validated .form-control:invalid~.invalid-feedback,
.was-validated .form-control:invalid~.invalid-tooltip {
    display: block;
}

.form-control.is-invalid~.invalid-feedback,
input.form-control.parsley-error~.invalid-feedback,
textarea.form-control.parsley-error~.invalid-feedback,
.form-control.is-invalid~.invalid-tooltip,
input.form-control.parsley-error~.invalid-tooltip,
textarea.form-control.parsley-error~.invalid-tooltip {
    display: block;
}

.was-validated textarea.form-control:invalid {
    padding-right: calc(1.5em + 0.75rem);
    background-position: top calc(0.375em + 0.1875rem) right calc(0.375em + 0.1875rem);
}

textarea.form-control.is-invalid,
textarea.form-control.parsley-error {
    padding-right: calc(1.5em + 0.75rem);
    background-position: top calc(0.375em + 0.1875rem) right calc(0.375em + 0.1875rem);
}

.was-validated .custom-select:invalid,
.custom-select.is-invalid,
input.custom-select.parsley-error,
textarea.custom-select.parsley-error {
    border-color: #f16d75;
    padding-right: calc((1em + 0.75rem) * 3 / 4 + 1.75rem);
    background: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 4 5'%3e%3cpath fill='%233b4863' d='M2 0L0 2h4zm0 5L0 3h4z'/%3e%3c/svg%3e") no-repeat right 0.75rem center/8px 10px, url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='%23dc3545' viewBox='-2 -2 7 7'%3e%3cpath stroke='%23dc3545' d='M0 0l3 3m0-3L0 3'/%3e%3ccircle r='.5'/%3e%3ccircle cx='3' r='.5'/%3e%3ccircle cy='3' r='.5'/%3e%3ccircle cx='3' cy='3' r='.5'/%3e%3c/svg%3E") #ffffff no-repeat center right 1.75rem/calc(0.75em + 0.375rem) calc(0.75em + 0.375rem);
}

.was-validated .custom-select:invalid:focus,
.custom-select.is-invalid:focus,
input.custom-select.parsley-error:focus,
textarea.custom-select.parsley-error:focus {
    border-color: #f16d75;
    box-shadow: none;
}

.was-validated .custom-select:invalid~.invalid-feedback,
.was-validated .custom-select:invalid~.invalid-tooltip {
    display: block;
}

.custom-select.is-invalid~.invalid-feedback,
input.custom-select.parsley-error~.invalid-feedback,
textarea.custom-select.parsley-error~.invalid-feedback,
.custom-select.is-invalid~.invalid-tooltip,
input.custom-select.parsley-error~.invalid-tooltip,
textarea.custom-select.parsley-error~.invalid-tooltip {
    display: block;
}

.was-validated .form-control-file:invalid~.invalid-feedback,
.was-validated .form-control-file:invalid~.invalid-tooltip {
    display: block;
}

.form-control-file.is-invalid~.invalid-feedback,
input.form-control-file.parsley-error~.invalid-feedback,
textarea.form-control-file.parsley-error~.invalid-feedback,
.form-control-file.is-invalid~.invalid-tooltip,
input.form-control-file.parsley-error~.invalid-tooltip,
textarea.form-control-file.parsley-error~.invalid-tooltip {
    display: block;
}

.was-validated .form-check-input:invalid~.form-check-label,
.form-check-input.is-invalid~.form-check-label,
input.form-check-input.parsley-error~.form-check-label,
textarea.form-check-input.parsley-error~.form-check-label {
    color: #f16d75;
}

.was-validated .form-check-input:invalid~.invalid-feedback,
.was-validated .form-check-input:invalid~.invalid-tooltip {
    display: block;
}

.form-check-input.is-invalid~.invalid-feedback,
input.form-check-input.parsley-error~.invalid-feedback,
textarea.form-check-input.parsley-error~.invalid-feedback,
.form-check-input.is-invalid~.invalid-tooltip,
input.form-check-input.parsley-error~.invalid-tooltip,
textarea.form-check-input.parsley-error~.invalid-tooltip {
    display: block;
}

.was-validated .custom-control-input:invalid~.custom-control-label,
.custom-control-input.is-invalid~.custom-control-label,
input.custom-control-input.parsley-error~.custom-control-label,
textarea.custom-control-input.parsley-error~.custom-control-label {
    color: #f16d75;
}

.was-validated .custom-control-input:invalid~.custom-control-label::before,
.custom-control-input.is-invalid~.custom-control-label::before,
input.custom-control-input.parsley-error~.custom-control-label::before,
textarea.custom-control-input.parsley-error~.custom-control-label::before {
    border-color: #f16d75;
}

.was-validated .custom-control-input:invalid~.invalid-feedback,
.was-validated .custom-control-input:invalid~.invalid-tooltip {
    display: block;
}

.custom-control-input.is-invalid~.invalid-feedback,
input.custom-control-input.parsley-error~.invalid-feedback,
textarea.custom-control-input.parsley-error~.invalid-feedback,
.custom-control-input.is-invalid~.invalid-tooltip,
input.custom-control-input.parsley-error~.invalid-tooltip,
textarea.custom-control-input.parsley-error~.invalid-tooltip {
    display: block;
}

.was-validated .custom-control-input:invalid:checked~.custom-control-label::before,
.custom-control-input.is-invalid:checked~.custom-control-label::before,
input.custom-control-input.parsley-error:checked~.custom-control-label::before,
textarea.custom-control-input.parsley-error:checked~.custom-control-label::before {
    border-color: #e4606d;
    background-color: #e4606d;
}

.was-validated .custom-control-input:invalid:focus~.custom-control-label::before,
.custom-control-input.is-invalid:focus~.custom-control-label::before,
input.custom-control-input.parsley-error:focus~.custom-control-label::before,
textarea.custom-control-input.parsley-error:focus~.custom-control-label::before {
    box-shadow: 0 0 0 0.2rem rgba(220, 53, 69, 0.25);
}

.was-validated .custom-control-input:invalid:focus:not(:checked)~.custom-control-label::before,
.custom-control-input.is-invalid:focus:not(:checked)~.custom-control-label::before,
input.custom-control-input.parsley-error:focus:not(:checked)~.custom-control-label::before,
textarea.custom-control-input.parsley-error:focus:not(:checked)~.custom-control-label::before,
.was-validated .custom-file-input:invalid~.custom-file-label,
.custom-file-input.is-invalid~.custom-file-label,
input.custom-file-input.parsley-error~.custom-file-label,
textarea.custom-file-input.parsley-error~.custom-file-label {
    border-color: #f16d75;
}

.was-validated .custom-file-input:invalid~.invalid-feedback,
.was-validated .custom-file-input:invalid~.invalid-tooltip {
    display: block;
}

.custom-file-input.is-invalid~.invalid-feedback,
input.custom-file-input.parsley-error~.invalid-feedback,
textarea.custom-file-input.parsley-error~.invalid-feedback,
.custom-file-input.is-invalid~.invalid-tooltip,
input.custom-file-input.parsley-error~.invalid-tooltip,
textarea.custom-file-input.parsley-error~.invalid-tooltip {
    display: block;
}

.was-validated .custom-file-input:invalid:focus~.custom-file-label,
.custom-file-input.is-invalid:focus~.custom-file-label,
input.custom-file-input.parsley-error:focus~.custom-file-label,
textarea.custom-file-input.parsley-error:focus~.custom-file-label {
    border-color: #f16d75;
    box-shadow: 0 0 0 0.2rem rgba(220, 53, 69, 0.25);
}

/* ###### Bootstrap ###### */
/* ###### Accordion ###### */
.accordion .card {
    border-width: 0;
}

.accordion .card+.card {
    margin-top: 1px;
}

.accordion .card-header {
    padding: 0;
    background-color: transparent;
    font-weight: 500;
}

.accordion .card-header a {
    display: block;
    padding: 14px 20px;
    position: relative;
    font-weight: 500;
    font-size: 14px;
    background-color: #e1e1f9;
}

.accordion .card-header a.collapsed {
    color: #3c4858;
    background-color: #e1e1f9;
    border-bottom-color: transparent;
}

.accordion .card-header a.collapsed:hover,
.accordion .card-header a.collapsed:focus {
    color: #8f9cc0;
    background-color: #ecedef;
}

.accordion .card-body {
    padding: 15px;
    background-color: #ffffff;
    transition: none;
    border: 1px solid #e8e8f7;
    border-bottom: 0;
}

.accordion-indigo .card-header a.collapsed {
    color: rgba(255, 255, 255, 0.8);
    font-weight: 500;
    letter-spacing: -.1px;
}

.accordion-indigo .card-header a.collapsed:hover,
.accordion-indigo .card-header a.collapsed:focus {
    color: #ffffff;
}

.accordion-blue .card-header a {
    color: rgba(255, 255, 255, 0.8);
    font-weight: 500;
    letter-spacing: -.1px;
}

.accordion-blue .card-header a:hover,
.accordion-blue .card-header a:focus {
    color: #ffffff;
}

.accordion-dark .card {
    border-color: #8f9cc0;
}

.accordion-dark .card-header a {
    color: #8f9cc0;
}

.accordion-dark .card-header a:hover,
.accordion-dark .card-header a:focus {
    color: #8f9cc0;
}

.accordion-dark .card-header a.collapsed {
    background-color: #8f9cc0;
    color: rgba(255, 255, 255, 0.8);
    font-weight: 500;
    letter-spacing: -.1px;
}

.accordion-dark .card-header a.collapsed:hover,
.accordion-dark .card-header a.collapsed:focus {
    background-color: #141c2b;
    color: #ffffff;
}

.accordion-gray .card {
    border-color: #a8afc7;
}

.accordion-gray .card-header a {
    color: #a8afc7;
}

.accordion-gray .card-header a:hover,
.accordion-gray .card-header a:focus {
    color: #a8afc7;
}

.accordion-gray .card-header a.collapsed {
    background-color: #a8afc7;
    color: rgba(255, 255, 255, 0.8);
    font-weight: 500;
    letter-spacing: -.1px;
}

.accordion-gray .card-header a.collapsed:hover,
.accordion-gray .card-header a.collapsed:focus {
    background-color: #6a7a96;
    color: #ffffff;
}

.accordion>.card {
    overflow: hidden;
    margin-bottom: 0;
}

.accordion>.card:not(:first-of-type) .card-header:first-child {
    border-radius: 0;
}

.accordion>.card:not(:first-of-type):not(:last-of-type) {
    border-bottom: 0;
    border-radius: 0;
}

.accordion>.card:first-of-type {
    border-bottom: 0;
    border-bottom-right-radius: 0;
    border-bottom-left-radius: 0;
}

.accordion>.card:last-of-type {
    border-top-left-radius: 0;
    border-top-right-radius: 0;
}

.accordion>.card .card-header {
    margin-bottom: -1px;
}

.main-accordion .accordion-item {
    background-color: #f8f9fa;
    border: 1px solid #dee2ef;
    position: relative;
    transition: all 0.2s ease-in-out;
}

.main-accordion .accordion-item:hover,
.main-accordion .accordion-item:focus {
    cursor: pointer;
    background-color: #f1f2f6;
    border-color: #bcc4de;
    z-index: 4;
}

.main-accordion .accordion-item.active {
    background-color: #ffffff;
    z-index: 5;
    border-color: #bcc4de;
}

.main-accordion .accordion-item.active .accordion-body {
    display: block;
}

.main-accordion .accordion-item+.accordion-item {
    margin-top: -1px;
}

.main-accordion .accordion-header {
    display: flex;
    align-items: center;
    padding: 15px 20px;
}

.main-accordion .accordion-title {
    font-weight: 700;
    color: #8f9cc0;
    margin: 0;
    transition: all 0.2s ease-in-out;
}

.main-accordion .accordion-body {
    display: none;
    padding: 0 20px 20px;
}

@media (prefers-reduced-motion: reduce) {
    .main-accordion .accordion-item {
        transition: none;
    }
}

@media (prefers-reduced-motion: reduce) {
    .main-accordion .accordion-title {
        transition: none;
    }
}

.collapse:not(.show) {
    display: none;
}

.collapsing {
    position: relative;
    height: 0;
    overflow: hidden;
    transition: height 0.35s ease;
}

@media (prefers-reduced-motion: reduce) {
    .collapsing {
        transition: none;
    }
}

.accordion-toggle.collapsed:before {
    content: "\e9af";
    position: absolute;
    font-family: 'feather' !important;
    right: 10px;
    top: 12px;
    font-size: 20px;
    transition: all 0.5s;
    transform: scale(1);
}

.accordion-toggle:before {
    content: "\e994";
    position: absolute;
    font-family: 'feather' !important;
    right: 10px;
    top: 12px;
    font-size: 20px;
    transition: all 0.5s;
    transform: scale(1);
}

/* ###### Accordion ###### */
/* ###### Alerts ###### */
.alert {
    position: relative;
    padding: 0.75rem 1.25rem;
    margin-bottom: 1rem;
    border: 1px solid #f0f2f8;
    border-width: 1px;
    padding: 12px 15px;
    border-radius: 11px;
}

.alert .close {
    text-shadow: none;
    opacity: .9;
}

.alert strong {
    font-weight: 600;
}

.alert-heading {
    color: inherit;
}

.alert-link {
    font-weight: 700;
}

.alert-dismissible {
    padding-right: 3.8125rem;
}

.alert-dismissible .close {
    position: absolute;
    top: 0;
    right: 0;
    padding: 0.75rem 1.25rem;
    color: inherit;
}

.alert-primary {
    color: #1b3585;
    background-color: rgba(33, 78, 189, 0.3);
    border-color: rgba(33, 78, 189, 0.3);
}

.alert-primary hr {
    border-top-color: #adc1ff;
}

.alert-primary .alert-link {
    color: #12245b;
}

.alert-secondary {
    color: #e54d26;
    background-color: rgba(229, 77, 38, 0.3);
    border-color: rgba(229, 77, 38, 0.3);
}

.alert-secondary hr {
    border-top-color: #cacfdb;
}

.alert-secondary .alert-link {
    color: #292e37;
}

.alert-success {
    color: #042925;
    background-color: #65dcce;
    border-color: #65dcce;
}

.alert-success hr {
    border-top-color: rgba(0, 0, 0, 0.1);
}

.alert-success .alert-link {
    color: #0e2a00;
}

.alert-info {
    color: #095375;
    background-color: #82d4fb;
    border-color: #82d4fb;
}

.alert-info hr {
    border-top-color: #abdde5;
}

.alert-info .alert-link {
    color: #062c33;
}

.alert-warning {
    color: #4c3903;
    background-color: #ffd186;
    border-color: #ffd186;
}

.alert-warning hr {
    border-top-color: #ffe8a1;
}

.alert-warning .alert-link {
    color: #533f03;
}

.alert-danger {
    color: #46040a;
    background-color: #f58e8e;
    border-color: #f58e8e;
}

.alert-danger hr {
    border-top-color: #f1b0b7;
}

.alert-danger .alert-link {
    color: #491217;
}

.alert-light {
    color: #7f7f81;
    background-color: #fdfdfe;
    border-color: #f0f2f8;
}

.alert-light hr {
    border-top-color: #ededf3;
}

.alert-light .alert-link {
    color: #666667;
}

.alert-dark {
    color: #1f2533;
    background-color: #d8dae0;
    border-color: #c8ccd3;
}

.alert-dark hr {
    border-top-color: #babfc8;
}

.alert-dark .alert-link {
    color: #0c0e13;
}

/*  ----- 3.2 Alerts  ----- */
[class*=alert-outline-] {
    border: 1px solid transparent;
}

.alert-outline-success {
    border-color: #269c8e;
    color: #269c8e;
}

.alert-outline-info {
    border-color: #00aeff;
    color: #00aeff;
}

.alert-outline-warning {
    border-color: #ff9e01;
    color: #ff9e01;
}

.alert-outline-danger {
    border-color: #ff0000;
    color: #ff0000;
}

[class*=alert-solid-] {
    border-width: 0;
    color: #ffffff;
}

.alert-solid-success {
    background-color: #269c8e;
}

.alert-solid-info {
    background-color: #00aeff;
}

.alert-solid-warning {
    background-color: #ff9e01;
}

.alert-solid-danger {
    background-color: #ff0000;
}

/* ###### Alerts ###### */
/* ###### Badge ###### */
.badge {
    font-weight: 500;
    font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
    padding: 4px 6px 5px;
    display: inline-block;
    font-size: 75%;
    font-weight: 700;
    line-height: 1;
    text-align: center;
    white-space: nowrap;
    vertical-align: baseline;
    border-radius: 3px;
    transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
}

.badge-pill {
    padding-left: 8px;
    padding-right: 8px;
    padding-right: 0.6em;
    padding-left: 0.6em;
    border-radius: 10rem;
}

@media (prefers-reduced-motion: reduce) {
    .badge {
        transition: none;
    }
}

a.badge:hover,
a.badge:focus {
    text-decoration: none;
}

.badge:empty {
    display: none;
}

.btn .badge,
.sp-container button .badge {
    position: relative;
    top: -1px;
}

.badge-secondary {
    color: #ffffff !important;
    background-color: #e54d26;
}

a.badge-secondary:hover {
    color: #ffffff !important;
    background-color: #e06b32;
}

a.badge-secondary:focus {
    color: #ffffff !important;
    background-color: #e06b32;
    outline: 0;
    box-shadow: 0 0 0 0.2rem rgba(236, 131, 27, 0.5);
}

a.badge-secondary.focus {
    outline: 0;
    box-shadow: 0 0 0 0.2rem rgba(236, 131, 27, 0.5);
}

.badge-success {
    color: #ffffff !important;
    background-color: #269c8e;
}

.badge-green {
    color: #ffffff !important;
    background-color: #1cc601;
}

a.badge-success:hover {
    color: #ffffff !important;
    background-color: #37ce4f;
}

a.badge-success:focus {
    color: #ffffff;
    background-color: #37ce4f;
    outline: 0;
    box-shadow: 0 0 0 0.2rem rgba(59, 176, 1, 0.5);
}

a.badge-success.focus {
    outline: 0;
    box-shadow: 0 0 0 0.2rem rgba(59, 176, 1, 0.5);
}

.badge-info {
    color: #ffffff !important;
    background-color: #00aeff;
}

a.badge-info:hover {
    color: #ffffff !important;
    background-color: #06aff1;
}

a.badge-info:focus {
    color: #ffffff;
    background-color: #06aff1;
    outline: 0;
    box-shadow: 0 0 0 0.2rem rgba(23, 162, 184, 0.5);
}

a.badge-info.focus {
    outline: 0;
    box-shadow: 0 0 0 0.2rem rgba(23, 162, 184, 0.5);
}

.badge-warning {
    color: #0e0e0e !important;
    background-color: #ecb529;
}

a.badge-warning:hover {
    color: #8f9cc0 !important;
    background-color: #d39e00;
}

a.badge-warning:focus {
    color: #8f9cc0;
    background-color: #d39e00;
    outline: 0;
    box-shadow: 0 0 0 0.2rem rgba(255, 193, 7, 0.5);
}

a.badge-warning.focus {
    outline: 0;
    box-shadow: 0 0 0 0.2rem rgba(255, 193, 7, 0.5);
}

.badge-danger {
    color: #ffffff !important;
    background-color: #ff0000;
}

a.badge-danger:hover {
    color: #ffffff !important;
    background-color: #f53729;
}

a.badge-danger:focus {
    color: #ffffff;
    background-color: #f53729;
    outline: 0;
    box-shadow: 0 0 0 0.2rem rgba(220, 53, 69, 0.5);
}

a.badge-danger.focus {
    outline: 0;
    box-shadow: 0 0 0 0.2rem rgba(220, 53, 69, 0.5);
}

.badge-pink {
    color: #ffffff !important;
    background-color: #ff75ad;
}

a.badge-pink:hover,
a.badge-pink:focus {
    color: #ffffff !important;
    background-color: #ff75ad;
}

.badge-dark {
    color: #ffffff;
    background-color: #8f9cc0;
}

a.badge-dark:hover {
    color: #ffffff !important;
    background-color: #131212;
}

a.badge-dark:focus {
    color: #ffffff !important;
    background-color: #131212;
    outline: 0;
    box-shadow: 0 0 0 0.2rem rgba(59, 72, 99, 0.5);
}

a.badge-dark.focus {
    outline: 0;
    box-shadow: 0 0 0 0.2rem rgba(59, 72, 99, 0.5);
}

.badge-success-light {
    color: #269c8e !important;
    background: rgba(25, 177, 89, 0.2);
}

.badge-info-light {
    background: rgba(1, 184, 255, 0.2);
    color: #00aeff;
}

/* ###### Badge ###### */
/* ###### Breadcrumb ###### */
/*  ----- BOOTSTRAP OVERRIDES  ----- */
.breadcrumb-style1,
.breadcrumb-style2,
.breadcrumb-style3 {
    border-radius: 0;
    background-color: transparent;
    padding: 0;
}

.breadcrumb-style1 .breadcrumb-item,
.breadcrumb-style2 .breadcrumb-item,
.breadcrumb-style3 .breadcrumb-item {
    font-size: 15px;
    font-weight: 500;
    font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
    letter-spacing: .5px;
}

.breadcrumb-style1 .breadcrumb-item a,
.breadcrumb-style2 .breadcrumb-item a,
.breadcrumb-style3 .breadcrumb-item a {
    color: #6f6f8e;
}

.breadcrumb-style1 .breadcrumb-item+.breadcrumb-item::before {
    color: #a8afc7;
}

.breadcrumb-style2 .breadcrumb-item+.breadcrumb-item::before,
.breadcrumb-style3 .breadcrumb-item+.breadcrumb-item::before {
    width: 16px;
    text-align: center;
    font-family: 'Ionicons';
    color: #a8afc7;
}

.breadcrumb-style2 .breadcrumb-item+.breadcrumb-item::before {
    content: '\f3d1';
}

.breadcrumb-style3 .breadcrumb-item+.breadcrumb-item::before {
    content: '\f287';
}

.main-content-breadcrumb {
    display: flex;
    align-items: center;
    font-size: 10px;
    font-weight: 500;
    font-family: "Roboto", sans-serif;
    letter-spacing: 1px;
    text-transform: uppercase;
    color: #a8afc7;
    margin-bottom: 10px;
}

.main-content-breadcrumb span {
    position: relative;
}

.main-content-breadcrumb span+span::before {
    content: '\f3d1';
    font-family: 'Ionicons';
    font-size: 12px;
    font-weight: 300;
    display: inline;
    margin: 0 5px;
    color: #b4bdce;
    line-height: 0;
    position: relative;
    top: 1px;
}

.main-content-breadcrumb span:last-child {
    color: #3c4858;
}

.main-content-title {
    color: #171b27;
    font-weight: 500;
    font-size: 32px;
    text-indent: -1px;
    line-height: 1;
    position: relative;
}

.main-breadcrumbs {
    padding: 0;
    background-color: transparent;
    margin-bottom: 0;
}

.main-breadcrumbs .breadcrumb-item {
    font-size: 10px;
    text-transform: uppercase;
    letter-spacing: .5px;
    font-weight: 700;
}

.main-breadcrumbs .breadcrumb-item a {
    color: #8f9cc0;
    transition: all 0.2s ease-in-out;
}

.main-breadcrumbs .breadcrumb-item a:hover {
    color: #a8afc7;
}

.main-breadcrumbs .breadcrumb-item+.breadcrumb-item {
    padding-left: 8px;
}

.main-breadcrumbs .breadcrumb-item+.breadcrumb-item::before {
    color: #a8afc7;
    padding-right: 8px;
    font-weight: 400;
}

@media (prefers-reduced-motion: reduce) {
    .main-breadcrumbs .breadcrumb-item a {
        transition: none;
    }
}

.main-content-left-contacts .main-content-breadcrumb,
.main-content-left-contacts .main-content-title {
    padding-left: 20px;
}

@media (min-width: 992px) {

    .main-content-left-contacts .main-content-breadcrumb,
    .main-content-left-contacts .main-content-title {
        padding-left: 0;
    }

    .main-content-body-contacts {
        display: block;
        overflow-y: auto;
    }

    .main-content-left-invoice .main-content-breadcrumb,
    .main-content-left-invoice .main-content-title {
        padding-left: 0;
    }
}

.main-content-left-invoice .main-content-breadcrumb,
.main-content-left-invoice .main-content-title {
    padding-left: 20px;
}

@media (max-width: 991px) {
    .main-content-title {
        margin-bottom: 0.5rem;
    }
}

@media (min-width: 992px) {
    .main-content-title {
        margin-bottom: 0;
    }
}

.breadcrumb {
    display: flex;
    flex-wrap: wrap;
    padding: 0.75rem 1rem;
    margin-bottom: 1rem;
    list-style: none;
    border-radius: 11px;
}

.breadcrumb-item+.breadcrumb-item {
    padding-left: 0.5rem;
}

.breadcrumb-item+.breadcrumb-item::before {
    display: inline-block;
    padding-right: 0.5rem;
    color: #a8afc7;
    content: "/";
}

.breadcrumb-item+.breadcrumb-item:hover::before {
    text-decoration: underline;
    text-decoration: none;
}

.breadcrumb-item.active {
    color: #a8afc7;
}

.breadcrumb-5 a {
    text-decoration: none;
    outline: none;
    display: block;
    float: left;
    font-size: 12px;
    line-height: 36px;
    color: white;
    padding: 0 10px 0 39px;
    background: #666;
    background: linear-gradient(#666, #333);
    position: relative;
}

.breadcrumb-5 a:first-child {
    padding-left: 46px;
    border-radius: 5px 0 0 5px;
}

.breadcrumb-5 a:first-child:before {
    left: 14px;
}

.breadcrumb-5 a:last-child {
    border-radius: 0 5px 5px 0;
    padding-right: 20px;
}

.breadcrumb-5 a.active,
.breadcrumb-5 a:hover {
    background: #333;
    background: linear-gradient(#333, #000000);
}

.breadcrumb-5 a.active:after {
    box-shadow: 2px -2px 0 2px #f0f2f8, 3px -3px 0 2px rgba(255, 255, 255, 0.1);
}

.breadcrumb-5 a:after {
    content: '';
    position: absolute;
    top: 0;
    right: -18px;
    width: 36px;
    height: 36px;
    z-index: 1;
    transform: scale(0.707) rotate(45deg);
    box-shadow: 2px -2px 0 2px #f0f2f8, 3px -3px 0 2px rgba(255, 255, 255, 0.1);
    border-radius: 0 5px 0 50px;
}

.breadcrumb-5 a:last-child:after {
    content: none;
}

.flat a {
    background: white;
    color: black;
    transition: all 0.5s;
}

.flat a:after {
    background: white;
    color: black;
    transition: all 0.5s;
}

.flat a.active:before,
.flat a:hover:before {
    color: #000000;
}

.flat a:before {
    background: white;
    box-shadow: 0 0 0 1px #ccc;
}

/* ###### Breadcrumb ###### */
/* ###### Buttons ###### */
.btn:active,
.sp-container button:active,
.btn:focus,
.sp-container button:focus {
    box-shadow: none;
}

.btn-light {
    color: #2c3033;
    background-color: #ecedef;
    border-color: #ecedef;
}

.btn-light:hover {
    color: #2c3033;
    background-color: #dbe0ea;
    border-color: #dbe0ea;
}

.btn-light:focus,
.btn-light.focus {
    box-shadow: 0 0 0 1px #e1e6f1;
}

.btn-light.disabled,
.btn-light:disabled {
    color: #2c3033;
    background-color: #dbe0ea;
    border-color: #dbe0ea;
}

.btn-light:not(:disabled):not(.disabled):active,
.btn-light:not(:disabled):not(.disabled).active {
    color: #2c3033;
    background-color: #dbe0ea;
    border-color: #dbe0ea;
}

.show>.btn-light.dropdown-toggle {
    color: #2c3033;
    background-color: #dbe0ea;
    border-color: #dbe0ea;
}

.btn-light:not(:disabled):not(.disabled):active:focus,
.btn-light:not(:disabled):not(.disabled).active:focus {
    box-shadow: 0 0 0 1px #e1e6f1;
    box-shadow: 0 0 0 0.2rem rgba(212, 214, 220, 0.5);
}

.show>.btn-light.dropdown-toggle:focus {
    box-shadow: 0 0 0 1px #e1e6f1;
    box-shadow: 0 0 0 0.2rem rgba(212, 214, 220, 0.5);
}

.btn-gray-500 {
    color: #8f9cc0;
    background-color: #a8afc7;
    border-color: #8896af;
}

.btn-gray-500:hover {
    color: #ffffff;
    background-color: #808faa;
    border-color: #697b9a;
}

.btn-gray-500:focus,
.btn-gray-500.focus {
    box-shadow: 0 0 0 0.2rem rgba(120, 133, 158, 0.5);
}

.btn-gray-500.disabled,
.btn-gray-500:disabled {
    color: #8f9cc0;
    background-color: #a8afc7;
    border-color: #8896af;
}

.btn-gray-500:not(:disabled):not(.disabled):active,
.btn-gray-500:not(:disabled):not(.disabled).active {
    color: #ffffff;
    background-color: #7988a4;
    border-color: #637493;
}

.show>.btn-gray-500.dropdown-toggle {
    color: #ffffff;
    background-color: #7988a4;
    border-color: #637493;
}

.btn-gray-500:not(:disabled):not(.disabled):active:focus,
.btn-gray-500:not(:disabled):not(.disabled).active:focus {
    box-shadow: 0 0 0 0.2rem rgba(120, 133, 158, 0.5);
}

.show>.btn-gray-500.dropdown-toggle:focus {
    box-shadow: 0 0 0 0.2rem rgba(120, 133, 158, 0.5);
}

.btn-gray-700 {
    color: #ffffff;
    background-color: #3c4858;
    border-color: #4f5c73;
}

.btn-gray-700:hover {
    color: #ffffff;
    background-color: #49566b;
    border-color: #3a4455;
}

.btn-gray-700:focus,
.btn-gray-700.focus {
    box-shadow: 0 0 0 0.2rem rgba(105, 116, 136, 0.5);
}

.btn-gray-700.disabled,
.btn-gray-700:disabled {
    color: #ffffff;
    background-color: #3c4858;
    border-color: #4f5c73;
}

.btn-gray-700:not(:disabled):not(.disabled):active,
.btn-gray-700:not(:disabled):not(.disabled).active {
    color: #ffffff;
    background-color: #445064;
    border-color: #353e4d;
}

.show>.btn-gray-700.dropdown-toggle {
    color: #ffffff;
    background-color: #445064;
    border-color: #353e4d;
}

.btn-gray-700:not(:disabled):not(.disabled):active:focus,
.btn-gray-700:not(:disabled):not(.disabled).active:focus {
    box-shadow: 0 0 0 0.2rem rgba(105, 116, 136, 0.5);
}

.show>.btn-gray-700.dropdown-toggle:focus {
    box-shadow: 0 0 0 0.2rem rgba(105, 116, 136, 0.5);
}

[class*=btn-outline-] {
    padding: 0.4rem 1rem;
    line-height: 1.657;
    border-width: 1px;
    background-color: transparent;
}

[class*=btn-outline-]:hover,
[class*=btn-outline-]:focus {
    color: #ffffff;
}

.btn-outline-indigo {
    border-color: #4b0082;
    color: #4b0082;
}

.btn-outline-indigo:hover,
.btn-outline-indigo:focus {
    background-color: #49047b;
}

.btn,
.sp-container button {
    display: inline-block;
    font-weight: 400;
    color: #d2d2d4;
    text-align: center;
    vertical-align: middle;
    user-select: none;
    background-color: transparent;
    border: 1px solid transparent;
    padding: 0.475rem 0.85rem;
    font-size: 0.875rem;
    line-height: 1.5;
    border-radius: 11px;
    transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
}

@media (prefers-reduced-motion: reduce) {

    .btn,
    .sp-container button {
        transition: none;
    }
}

.btn:hover,
.sp-container button:hover {
    color: #8f9cc0;
    text-decoration: none;
}

.btn:focus,
.sp-container button:focus,
.btn.focus,
.sp-container button.focus {
    outline: 0;
    box-shadow: none;
}

.btn.disabled,
.sp-container button.disabled,
.btn:disabled,
.sp-container button:disabled {
    opacity: 0.65;
}

a.btn.disabled,
fieldset:disabled a.btn {
    pointer-events: none;
}

.btn-secondary {
    color: #ffffff;
    background-color: #e54d26;
    border-color: #e54d26;
}

.btn-secondary:hover {
    color: #ffffff;
    background-color: #bf3c1a;
    border-color: #bf3c1a;
}

.btn-secondary:focus,
.btn-secondary.focus {
    background-color: #da5d3d !important;
    border-color: #da5d3d !important;
    box-shadow: 0 0 0 1px rgba(241, 56, 139, 0.3);
}

.btn-secondary.disabled,
.btn-secondary:disabled {
    color: #ffffff;
    background-color: #e54d26;
    border-color: #e54d26;
}

.btn-secondary:not(:disabled):not(.disabled):active,
.btn-secondary:not(:disabled):not(.disabled).active {
    color: #ffffff;
    background-color: #e54d26;
    border-color: #e54d26;
}

.show>.btn-secondary.dropdown-toggle {
    color: #ffffff;
    background-color: #f75da2;
    border-color: #e54d26;
}

.btn-secondary:not(:disabled):not(.disabled):active:focus,
.btn-secondary:not(:disabled):not(.disabled).active:focus {
    box-shadow: 0 0 0 1px rgba(241, 56, 139, 0.3);
}

.show>.btn-secondary.dropdown-toggle:focus {
    box-shadow: 0 0 0 1px rgba(241, 56, 139, 0.3);
}

.btn-success {
    color: #ffffff;
    background-color: #269c8e;
    border-color: #269c8e;
}

.btn-success:hover {
    color: #ffffff;
    background-color: #238276;
    border-color: #238276;
}

.btn-success:focus,
.btn-success.focus {
    color: #ffffff;
    background-color: #238276;
    border-color: #238276;
    box-shadow: 0 0 0 1px rgba(21, 165, 82, 0.3);
}

.btn-success.disabled,
.btn-success:disabled {
    color: #ffffff;
    background-color: #269c8e;
    border-color: #269c8e;
}

.btn-success:not(:disabled):not(.disabled):active,
.btn-success:not(:disabled):not(.disabled).active {
    color: #ffffff;
    background-color: #269c8e;
    border-color: #269c8e;
}

.show>.btn-success.dropdown-toggle {
    color: #ffffff;
    background-color: #269c8e;
    border-color: #269c8e;
}

.btn-success:not(:disabled):not(.disabled):active:focus,
.btn-success:not(:disabled):not(.disabled).active:focus {
    box-shadow: 0 0 0 1px rgba(21, 165, 82, 0.3);
}

.show>.btn-success.dropdown-toggle:focus {
    box-shadow: 0 0 0 1px rgba(21, 165, 82, 0.3);
}

.btn-green {
    color: #ffffff;
    background-color: #00b220;
    border-color: #00b220;
}

.btn-green:hover {
    color: #ffffff;
    background-color: #1e8831;
    border-color: #1e8831;
}

.btn-green:focus,
.btn-green.focus {
    color: #ffffff;
    background-color: #1e8831;
    border-color: #1e8831;
    box-shadow: 0 0 0 1px rgba(21, 165, 82, 0.3);
}

.btn-green.disabled,
.btn-green:disabled {
    color: #ffffff;
    background-color: #1e8831;
    border-color: #1e8831;
}

.btn-green:not(:disabled):not(.disabled):active,
.btn-green:not(:disabled):not(.disabled).active {
    color: #ffffff;
    background-color: #1e8831;
    border-color: #1e8831;
}

.show>.btn-green.dropdown-toggle {
    color: #ffffff;
    background-color: #1e8831;
    border-color: #1e8831;
}

.btn-green:not(:disabled):not(.disabled):active:focus,
.btn-green:not(:disabled):not(.disabled).active:focus {
    box-shadow: 0 0 0 1px rgba(21, 165, 82, 0.3);
}

.show>.btn-green.dropdown-toggle:focus {
    box-shadow: 0 0 0 1px rgba(21, 165, 82, 0.3);
}

.btn-info {
    color: #ffffff;
    background-color: #00aeff;
    border-color: #00aeff;
}

.btn-info:hover {
    color: #ffffff;
    background-color: #0c8ec1;
    border-color: #0c8ec1;
}

.btn-info:focus,
.btn-info.focus {
    color: #ffffff;
    background-color: #06aff1;
    border-color: #06aff1;
    box-shadow: 0 0 0 1px #01b8ff;
}

.btn-info.disabled,
.btn-info:disabled {
    color: #ffffff;
    background-color: #00aeff;
    border-color: #00aeff;
}

.btn-info:not(:disabled):not(.disabled):active,
.btn-info:not(:disabled):not(.disabled).active {
    color: #ffffff;
    background-color: #06aff1;
    border-color: #06aff1;
}

.show>.btn-info.dropdown-toggle {
    color: #ffffff;
    background-color: #06aff1;
    border-color: #06aff1;
}

.btn-info:not(:disabled):not(.disabled):active:focus,
.btn-info:not(:disabled):not(.disabled).active:focus {
    box-shadow: 0 0 0 1px #01b8ff;
}

.show>.btn-info.dropdown-toggle:focus {
    box-shadow: 0 0 0 1px #01b8ff;
}

.btn-warning {
    color: #ffffff;
    background-color: #ff9e01;
    border-color: #ff9e01;
}

.btn-warning:hover {
    color: #ffffff;
    background-color: #f1911d;
    border-color: #f1911d;
}

.btn-warning:focus,
.btn-warning.focus {
    color: #ffffff;
    background-color: #f1911d;
    border-color: #f1911d;
    box-shadow: 0 0 0 1px rgba(241, 145, 29, 0.3);
}

.btn-warning.disabled,
.btn-warning:disabled {
    color: #ffffff;
    background-color: #f1911d;
    border-color: #f1911d;
}

.btn-warning:not(:disabled):not(.disabled):active,
.btn-warning:not(:disabled):not(.disabled).active {
    color: #ffffff;
    background-color: #f1911d;
    border-color: #f1911d;
}

.show>.btn-warning.dropdown-toggle {
    color: #ffffff;
    background-color: #f1911d;
    border-color: #f1911d;
}

.btn-warning:not(:disabled):not(.disabled):active:focus,
.btn-warning:not(:disabled):not(.disabled).active:focus {
    box-shadow: 0 0 0 1px rgba(241, 145, 29, 0.3);
}

.show>.btn-warning.dropdown-toggle:focus {
    box-shadow: 0 0 0 1px rgba(241, 145, 29, 0.3);
}

.btn-danger {
    color: #ffffff;
    background-color: #ff0000;
    border-color: #ff0000;
}

.btn-danger:hover {
    color: #ffffff;
    background-color: #f53729;
    border-color: #f53729;
}

.btn-danger:focus,
.btn-danger.focus {
    box-shadow: 0 0 0 1px #ff473d;
}

.btn-danger.disabled,
.btn-danger:disabled {
    color: #ffffff;
    background-color: #ff0000;
    border-color: #ff0000;
}

.btn-danger:not(:disabled):not(.disabled):active,
.btn-danger:not(:disabled):not(.disabled).active {
    color: #ffffff;
    background-color: #ff0000;
    border-color: #ff0000;
}

.show>.btn-danger.dropdown-toggle {
    color: #ffffff;
    background-color: #ff0000;
    border-color: #ff0000;
}

.btn-danger:not(:disabled):not(.disabled):active:focus,
.btn-danger:not(:disabled):not(.disabled).active:focus {
    box-shadow: 0 0 0 1px #ff473d;
}

.show>.btn-danger.dropdown-toggle:focus {
    box-shadow: 0 0 0 1px #ff473d;
}

.btn-white {
    background-color: #ffffff;
    background-image: none;
    border-color: #ffffff;
    color: #424e79;
}

.btn-white:hover {
    background-color: #ffffff;
    background-image: none;
    border-color: #ffffff;
    color: #424e79;
}

.btn-white:focus,
.btn-white.focus {
    background-color: #ffffff;
    background-image: none;
    border-color: #ffffff;
    color: #424e79;
    box-shadow: 0 0 0 2px rgba(255, 255, 255, 0.5);
}

.btn-white.disabled,
.btn-white:disabled {
    color: #495057;
    background-color: #ffffff;
    border-color: #ffffff;
}

.btn-white:not(:disabled):not(.disabled):active,
.btn-white:not(:disabled):not(.disabled).active {
    color: #495057;
    background-color: #eff0f6;
    border-color: #e7e9f1;
}

.show>.btn-white.dropdown-toggle {
    color: #495057;
    background-color: #eff0f6;
    border-color: #e7e9f1;
}

.btn-white:not(:disabled):not(.disabled):active:focus,
.btn-white:not(:disabled):not(.disabled).active:focus {
    box-shadow: 0 0 0 2px rgba(255, 255, 255, 0.5);
}

.show>.btn-white.dropdown-toggle:focus {
    box-shadow: 0 0 0 2px rgba(255, 255, 255, 0.5);
}

.btn-dark {
    color: #ffffff;
    background-color: #25233c;
    border-color: #25233c;
}

.btn-dark:hover {
    color: #ffffff;
    background-color: #131212;
    border-color: #131212;
}

.btn-dark:focus,
.btn-dark.focus {
    color: #ffffff;
    background-color: #131212;
    border-color: #131212;
    box-shadow: 0 0 0 1px rgba(0, 0, 0, 0);
}

.btn-dark.disabled,
.btn-dark:disabled {
    color: #ffffff;
    background-color: #2e3649;
    border-color: #2e3649;
}

.btn-dark:not(:disabled):not(.disabled):active,
.btn-dark:not(:disabled):not(.disabled).active {
    color: #ffffff;
    background-color: #131212;
    border-color: #232b3b;
}

.show>.btn-dark.dropdown-toggle {
    color: #ffffff;
    background-color: #131212;
    border-color: #232b3b;
}

.btn-dark:not(:disabled):not(.disabled):active:focus,
.btn-dark:not(:disabled):not(.disabled).active:focus {
    box-shadow: 0 0 0 1px rgba(0, 0, 0, 0);
}

.show>.btn-dark.dropdown-toggle:focus {
    box-shadow: 0 0 0 1px rgba(0, 0, 0, 0);
}

.btn-outline-secondary {
    color: #e54d26 !important;
    border-color: #e54d26;
}

.btn-outline-secondary:hover {
    color: #ffffff !important;
    background-color: #e54d26;
    border-color: #e54d26;
}

.btn-outline-secondary:focus,
.btn-outline-secondary.focus {
    box-shadow: 0 0 0 1px #ec831b;
}

.btn-outline-secondary.disabled,
.btn-outline-secondary:disabled {
    color: #e54d26 !important;
    background-color: transparent;
}

.btn-outline-secondary:not(:disabled):not(.disabled):active,
.btn-outline-secondary:not(:disabled):not(.disabled).active {
    color: #ffffff;
    background-color: #e54d26;
    border-color: #e54d26;
}

.show>.btn-outline-secondary.dropdown-toggle {
    color: #ffffff;
    background-color: #e54d26;
    border-color: #e54d26;
}

.btn-outline-secondary:not(:disabled):not(.disabled):active:focus,
.btn-outline-secondary:not(:disabled):not(.disabled).active:focus {
    box-shadow: 0 0 0 1px #ec831b;
}

.show>.btn-outline-secondary.dropdown-toggle:focus {
    box-shadow: 0 0 0 1px #ec831b;
}

.btn-outline-success {
    color: #269c8e !important;
    border-color: #269c8e;
}

.btn-outline-success:hover {
    color: #ffffff !important;
    background-color: #269c8e;
    border-color: #269c8e;
}

.btn-outline-success:focus,
.btn-outline-success.focus {
    color: #ffffff !important;
    background-color: #269c8e;
    border-color: #269c8e;
    box-shadow: 0 0 0 1px #38d250;
}

.btn-outline-success.disabled,
.btn-outline-success:disabled {
    color: #269c8e !important;
    background-color: transparent;
}

.btn-outline-success:not(:disabled):not(.disabled):active,
.btn-outline-success:not(:disabled):not(.disabled).active {
    color: #ffffff;
    background-color: #269c8e;
    border-color: #269c8e;
}

.show>.btn-outline-success.dropdown-toggle {
    color: #ffffff;
    background-color: #269c8e;
    border-color: #269c8e;
}

.btn-outline-success:not(:disabled):not(.disabled):active:focus,
.btn-outline-success:not(:disabled):not(.disabled).active:focus {
    box-shadow: 0 0 0 1px #38d250;
}

.show>.btn-outline-success.dropdown-toggle:focus {
    box-shadow: 0 0 0 1px #38d250;
}

.btn-outline-info {
    color: #00aeff !important;
    border-color: #00aeff;
}

.btn-outline-info:hover {
    color: #ffffff !important;
    background-color: #00aeff;
    border-color: #00aeff;
}

.btn-outline-info:focus,
.btn-outline-info.focus {
    box-shadow: 0 0 0 1px #01b8ff;
}

.btn-outline-info.disabled,
.btn-outline-info:disabled {
    color: #00aeff !important;
    background-color: transparent;
}

.btn-outline-info:not(:disabled):not(.disabled):active,
.btn-outline-info:not(:disabled):not(.disabled).active {
    color: #ffffff;
    background-color: #00aeff;
    border-color: #00aeff;
}

.show>.btn-outline-info.dropdown-toggle {
    color: #ffffff;
    background-color: #00aeff;
    border-color: #00aeff;
}

.btn-outline-info:not(:disabled):not(.disabled):active:focus,
.btn-outline-info:not(:disabled):not(.disabled).active:focus {
    box-shadow: 0 0 0 1px #01b8ff;
}

.show>.btn-outline-info.dropdown-toggle:focus {
    box-shadow: 0 0 0 1px #01b8ff;
}

.btn-outline-warning {
    color: #ff9e01 !important;
    border-color: #ff9e01;
}

.btn-outline-warning:hover {
    color: #ffffff !important;
    background-color: #ff9e01;
    border-color: #ff9e01;
}

.btn-outline-warning:focus,
.btn-outline-warning.focus {
    box-shadow: 0 0 0 1px #ffc107;
}

.btn-outline-warning.disabled,
.btn-outline-warning:disabled {
    color: #ffffff !important;
    background-color: transparent;
}

.btn-outline-warning:not(:disabled):not(.disabled):active,
.btn-outline-warning:not(:disabled):not(.disabled).active {
    color: #8f9cc0;
    background-color: #ff9e01;
    border-color: #ff9e01;
}

.show>.btn-outline-warning.dropdown-toggle {
    color: #8f9cc0;
    background-color: #ff9e01;
    border-color: #ff9e01;
}

.btn-outline-warning:not(:disabled):not(.disabled):active:focus,
.btn-outline-warning:not(:disabled):not(.disabled).active:focus {
    box-shadow: 0 0 0 1px #ffc107;
}

.show>.btn-outline-warning.dropdown-toggle:focus {
    box-shadow: 0 0 0 1px #ffc107;
}

.btn-outline-danger {
    color: #ff0000 !important;
    border-color: #ff0000;
}

.btn-outline-danger:hover {
    color: #ffffff !important;
    background-color: #ff0000;
    border-color: #ff0000;
}

.btn-outline-danger:focus,
.btn-outline-danger.focus {
    box-shadow: 0 0 0 1px #ff473d;
}

.btn-outline-danger.disabled,
.btn-outline-danger:disabled {
    color: #f16d75 !important;
    background-color: transparent;
}

.btn-outline-danger:not(:disabled):not(.disabled):active,
.btn-outline-danger:not(:disabled):not(.disabled).active {
    color: #ffffff !important;
    background-color: #f16d75;
    border-color: #f16d75;
}

.show>.btn-outline-danger.dropdown-toggle {
    color: #ffffff !important;
    background-color: #f16d75;
    border-color: #f16d75;
}

.btn-outline-danger:not(:disabled):not(.disabled):active:focus,
.btn-outline-danger:not(:disabled):not(.disabled).active:focus {
    box-shadow: 0 0 0 1px #ff473d;
}

.show>.btn-outline-danger.dropdown-toggle:focus {
    box-shadow: 0 0 0 1px #ff473d;
}

.btn-outline-light {
    color: #000000 !important;
    border-color: #ecedef;
}

.btn-outline-light:hover {
    color: #000000 !important;
    background-color: #ecedef;
    border-color: #ecedef;
}

.btn-outline-light:focus,
.btn-outline-light.focus {
    box-shadow: 0 0 0 1px #e1e6f1;
}

.btn-outline-light.disabled,
.btn-outline-light:disabled {
    color: #000000 !important;
    background-color: transparent;
}

.btn-outline-light:not(:disabled):not(.disabled):active,
.btn-outline-light:not(:disabled):not(.disabled).active {
    color: #8f9cc0;
    background-color: #ecedef;
    border-color: #ecedef;
}

.show>.btn-outline-light.dropdown-toggle {
    color: #8f9cc0;
    background-color: #ecedef;
    border-color: #ecedef;
}

.btn-outline-light:not(:disabled):not(.disabled):active:focus,
.btn-outline-light:not(:disabled):not(.disabled).active:focus {
    box-shadow: 0 0 0 1px #e1e6f1;
}

.show>.btn-outline-light.dropdown-toggle:focus {
    box-shadow: 0 0 0 1px #e1e6f1;
}

.btn-outline-dark {
    color: #000000 !important;
    border-color: #000000;
}

.btn-outline-dark:hover {
    color: #ffffff !important;
    background-color: #8f9cc0;
    border-color: #8f9cc0;
}

.btn-outline-dark:focus,
.btn-outline-dark.focus {
    box-shadow: 0 0 0 1px rgba(0, 0, 0, 0);
}

.btn-outline-dark.disabled,
.btn-outline-dark:disabled {
    color: #2e3649 !important;
    background-color: transparent;
}

.btn-outline-dark:not(:disabled):not(.disabled):active,
.btn-outline-dark:not(:disabled):not(.disabled).active {
    color: #ffffff;
    background-color: #8f9cc0;
    border-color: #000000;
}

.show>.btn-outline-dark.dropdown-toggle {
    color: #ffffff;
    background-color: #8f9cc0;
    border-color: #000000;
}

.btn-outline-dark:not(:disabled):not(.disabled):active:focus,
.btn-outline-dark:not(:disabled):not(.disabled).active:focus {
    box-shadow: 0 0 0 1px rgba(0, 0, 0, 0);
}

.show>.btn-outline-dark.dropdown-toggle:focus {
    box-shadow: 0 0 0 1px rgba(0, 0, 0, 0);
}

.btn-link {
    font-weight: 400;
    text-decoration: none;
}

.btn-link:hover {
    text-decoration: none;
}

.btn-link:focus,
.btn-link.focus {
    text-decoration: none;
    box-shadow: none;
}

.btn-link:disabled,
.btn-link.disabled {
    color: #a8afc7;
    pointer-events: none;
}

.btn-lg,
.btn-group-lg>.btn,
.sp-container .btn-group-lg>button {
    padding: 0.5rem 1rem;
    font-size: 1.09375rem;
    line-height: 1.5;
}

.btn-sm,
.btn-group-sm>.btn,
.sp-container .btn-group-sm>button {
    padding: 0.25rem 0.5rem;
    font-size: 0.76562rem;
    line-height: 1.5;
}

.btn-block {
    display: block;
    width: 100%;
}

.btn-block+.btn-block {
    margin-top: 0.5rem;
}

.btn-group,
.btn-group-vertical {
    position: relative;
    display: inline-flex;
    vertical-align: middle;
}

.btn-group>.btn,
.sp-container .btn-group>button,
.btn-group-vertical>.btn,
.sp-container .btn-group-vertical>button {
    position: relative;
    flex: 1 1 auto;
}

.btn-group>.btn:hover,
.sp-container .btn-group>button:hover,
.btn-group-vertical>.btn:hover,
.sp-container .btn-group-vertical>button:hover,
.btn-group>.btn:focus,
.sp-container .btn-group>button:focus,
.btn-group>.btn:active,
.sp-container .btn-group>button:active,
.btn-group>.btn.active,
.sp-container .btn-group>button.active,
.btn-group-vertical>.btn:focus,
.sp-container .btn-group-vertical>button:focus,
.btn-group-vertical>.btn:active,
.sp-container .btn-group-vertical>button:active,
.btn-group-vertical>.btn.active,
.sp-container .btn-group-vertical>button.active {
    z-index: 1;
}

.btn-toolbar {
    display: flex;
    flex-wrap: wrap;
    justify-content: flex-start;
}

.btn-toolbar .input-group {
    width: auto;
}

.btn-group>.btn:not(:first-child),
.sp-container .btn-group>button:not(:first-child) {
    margin-left: -1px;
}

.btn-group>.btn-group:not(:first-child) {
    margin-left: -1px;
}

.btn-group>.btn:not(:last-child):not(.dropdown-toggle) {
    border-top-right-radius: 0;
    border-bottom-right-radius: 0;
}

.sp-container .btn-group>button:not(:last-child):not(.dropdown-toggle),
.btn-group>.btn-group:not(:last-child)>.btn,
.sp-container .btn-group>.btn-group:not(:last-child)>button {
    border-top-right-radius: 0;
    border-bottom-right-radius: 0;
}

.btn-group>.btn:not(:first-child),
.sp-container .btn-group>button:not(:first-child),
.btn-group>.btn-group:not(:first-child)>.btn,
.sp-container .btn-group>.btn-group:not(:first-child)>button {
    border-top-left-radius: 0;
    border-bottom-left-radius: 0;
}

.dropdown-toggle-split {
    padding-right: 0.5625rem;
    padding-left: 0.5625rem;
}

.dropdown-toggle-split::after {
    margin-left: 0;
}

.dropup .dropdown-toggle-split::after,
.dropright .dropdown-toggle-split::after {
    margin-left: 0;
}

.dropleft .dropdown-toggle-split::before {
    margin-right: 0;
}

.btn-sm+.dropdown-toggle-split,
.btn-group-sm>.btn+.dropdown-toggle-split,
.sp-container .btn-group-sm>button+.dropdown-toggle-split {
    padding-right: 0.375rem;
    padding-left: 0.375rem;
}

.btn-lg+.dropdown-toggle-split,
.btn-group-lg>.btn+.dropdown-toggle-split,
.sp-container .btn-group-lg>button+.dropdown-toggle-split {
    padding-right: 0.75rem;
    padding-left: 0.75rem;
}

.btn-group-vertical {
    flex-direction: column;
    align-items: flex-start;
    justify-content: center;
}

.btn-group-vertical>.btn {
    width: 100%;
}

.sp-container .btn-group-vertical>button {
    width: 100%;
}

.btn-group-vertical>.btn-group {
    width: 100%;
}

.btn-group-vertical>.btn:not(:first-child) {
    margin-top: -1px;
}

.sp-container .btn-group-vertical>button:not(:first-child) {
    margin-top: -1px;
}

.btn-group-vertical>.btn-group:not(:first-child) {
    margin-top: -1px;
}

.btn-group-vertical>.btn:not(:last-child):not(.dropdown-toggle) {
    border-bottom-right-radius: 0;
    border-bottom-left-radius: 0;
}

.sp-container .btn-group-vertical>button:not(:last-child):not(.dropdown-toggle),
.btn-group-vertical>.btn-group:not(:last-child)>.btn,
.sp-container .btn-group-vertical>.btn-group:not(:last-child)>button {
    border-bottom-right-radius: 0;
    border-bottom-left-radius: 0;
}

.btn-group-vertical>.btn:not(:first-child),
.sp-container .btn-group-vertical>button:not(:first-child),
.btn-group-vertical>.btn-group:not(:first-child)>.btn,
.sp-container .btn-group-vertical>.btn-group:not(:first-child)>button {
    border-top-left-radius: 0;
    border-top-right-radius: 0;
}

.btn-group-toggle>.btn,
.sp-container .btn-group-toggle>button,
.btn-group-toggle>.btn-group>.btn,
.sp-container .btn-group-toggle>.btn-group>button {
    margin-bottom: 0;
}

.btn-group-toggle>.btn input[type="radio"],
.sp-container .btn-group-toggle>button input[type="radio"],
.btn-group-toggle>.btn input[type="checkbox"],
.sp-container .btn-group-toggle>button input[type="checkbox"],
.btn-group-toggle>.btn-group>.btn input[type="radio"],
.sp-container .btn-group-toggle>.btn-group>button input[type="radio"],
.btn-group-toggle>.btn-group>.btn input[type="checkbox"],
.sp-container .btn-group-toggle>.btn-group>button input[type="checkbox"] {
    position: absolute;
    clip: rect(0, 0, 0, 0);
    pointer-events: none;
}

.btn-rounded {
    border-radius: 50px;
}

.btn-with-icon {
    display: flex;
    align-items: center;
    justify-content: center;
    height: 38px;
}

.btn-with-icon i {
    line-height: 0;
    font-size: 20px;
    margin-right: 5px;
}

.btn-with-icon i.typcn {
    line-height: .9;
}

.btn-with-icon i.fas {
    font-size: 15px;
}

.btn-with-icon i.icon {
    font-size: 18px;
}

.btn-icon {
    width: 38px;
    height: 38px;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
}

.btn-icon i {
    line-height: 1.5;
    font-size: 18px;
}

.btn-icon i.typcn {
    line-height: .95;
}

.btn-icon-list {
    display: flex;
    align-items: center;
}

.btn-icon-list .btn+.btn,
.btn-icon-list .sp-container button+.btn {
    margin-left: 5px;
}

.sp-container .btn-icon-list button+.btn,
.btn-icon-list .sp-container .btn+button,
.sp-container .btn-icon-list .btn+button,
.btn-icon-list .sp-container button+button,
.sp-container .btn-icon-list button+button {
    margin-left: 5px;
}

.main-icon-group {
    text-align: center;
    padding: 20px;
    color: #2e3649;
}

.main-icon-group i {
    line-height: 1;
    font-size: 24px;
}

@media (min-width: 992px) {
    .main-icon-group i {
        font-size: 18px;
    }
}

.btn-blue {
    color: #ffffff;
    background-color: #467fcf;
    border-color: #467fcf;
}

.btn-blue:hover {
    color: #ffffff;
    background-color: #316cbe;
    border-color: #316cbe;
}

.btn-blue.focus,
.btn-blue:focus {
    box-shadow: 0 0 0 2px rgba(70, 127, 207, 0.5);
}

.btn-blue.disabled,
.btn-blue:disabled {
    color: #ffffff;
    background-color: #316cbe;
    border-color: #316cbe;
}

.btn-blue:not(:disabled):not(.disabled).active,
.btn-blue:not(:disabled):not(.disabled):active {
    color: #ffffff;
    background-color: #316cbe;
    border-color: #316cbe;
}

.show>.btn-blue.dropdown-toggle {
    color: #ffffff;
    background-color: #316cbe;
    border-color: #316cbe;
}

.btn-blue:not(:disabled):not(.disabled).active:focus,
.btn-blue:not(:disabled):not(.disabled):active:focus {
    box-shadow: 0 0 0 2px rgba(70, 127, 207, 0.5);
}

.show>.btn-blue.dropdown-toggle:focus {
    box-shadow: 0 0 0 2px rgba(70, 127, 207, 0.5);
}

.btn-indigo {
    color: #ffffff;
    background-color: #4b0082;
    border-color: #4b0082;
}

.btn-indigo:hover {
    color: #ffffff;
    background-color: #49047b;
    border-color: #49047b;
}

.btn-indigo:focus,
.btn-indigo.focus {
    box-shadow: 0 0 0 0.2rem rgba(75, 0, 130, 0.5);
}

.btn-indigo.disabled,
.btn-indigo:disabled {
    color: #ffffff;
    background-color: #4b0082;
    border-color: #4b0082;
}

.btn-indigo:not(:disabled):not(.disabled):active,
.btn-indigo:not(:disabled):not(.disabled).active {
    color: #ffffff;
    background-color: #4b0082;
    border-color: #4b0082;
}

.show>.btn-indigo.dropdown-toggle {
    color: #ffffff;
    background-color: #4b0082;
    border-color: #4b0082;
}

.btn-indigo:not(:disabled):not(.disabled):active:focus,
.btn-indigo:not(:disabled):not(.disabled).active:focus {
    box-shadow: 0 0 0 0.2rem rgba(75, 0, 130, 0.5);
}

.show>.btn-indigo.dropdown-toggle:focus {
    box-shadow: 0 0 0 0.2rem rgba(75, 0, 130, 0.5);
}

.btn-purple {
    color: #ffffff !important;
    background-color: #7057e9;
    border-color: #7057e9;
}

.btn-purple:hover {
    color: #ffffff;
    background-color: #7b69d4;
    border-color: #7b69d4;
}

.btn-purple:focus,
.btn-purple.focus {
    box-shadow: 0 0 0 0.2rem rgba(123, 87, 188, 0.5);
}

.btn-purple.disabled,
.btn-purple:disabled {
    color: #ffffff;
    background-color: #7b69d4;
    border-color: #7b69d4;
}

.btn-purple:not(:disabled):not(.disabled):active,
.btn-purple:not(:disabled):not(.disabled).active {
    color: #ffffff;
    background-color: #7b69d4;
    border-color: #7b69d4;
}

.show>.btn-purple.dropdown-toggle {
    color: #ffffff;
    background-color: #7b69d4;
    border-color: #7b69d4;
}

.btn-purple:not(:disabled):not(.disabled):active:focus,
.btn-purple:not(:disabled):not(.disabled).active:focus {
    box-shadow: 0 0 0 0.2rem rgba(123, 87, 188, 0.5);
}

.show>.btn-purple.dropdown-toggle:focus {
    box-shadow: 0 0 0 0.2rem rgba(123, 87, 188, 0.5);
}

.btn-pink {
    color: #ffffff;
    background-color: #fd006d;
    border-color: #fd006d;
}

.btn-pink:hover {
    color: #ffffff;
    background-color: #cb0062;
    border-color: #a50050;
}

.btn-pink:focus,
.btn-pink.focus {
    box-shadow: 0 0 0 0.2rem rgba(221, 38, 127, 0.5);
}

.btn-pink.disabled,
.btn-pink:disabled {
    color: #ffffff;
    background-color: #f10075;
    border-color: #d80069;
}

.btn-pink:not(:disabled):not(.disabled):active,
.btn-pink:not(:disabled):not(.disabled).active {
    color: #ffffff;
    background-color: #be005c;
    border-color: #98004a;
}

.show>.btn-pink.dropdown-toggle {
    color: #ffffff;
    background-color: #be005c;
    border-color: #98004a;
}

.btn-pink:not(:disabled):not(.disabled):active:focus,
.btn-pink:not(:disabled):not(.disabled).active:focus {
    box-shadow: 0 0 0 0.2rem rgba(221, 38, 127, 0.5);
}

.show>.btn-pink.dropdown-toggle:focus {
    box-shadow: 0 0 0 0.2rem rgba(221, 38, 127, 0.5);
}

.btn-orange {
    color: #ffffff;
    background-color: #e67605;
    border-color: #e67605;
}

.btn-orange:hover {
    color: #ffffff;
    background-color: #fd811e;
    border-color: #fd811e;
}

.btn-orange:focus,
.btn-orange.focus {
    box-shadow: 0 0 0 0.2rem rgba(221, 38, 127, 0.5);
}

.btn-orange.disabled,
.btn-orange:disabled {
    color: #ffffff;
    background-color: #fd811e;
    border-color: #fd811e;
}

.btn-orange:not(:disabled):not(.disabled):active,
.btn-orange:not(:disabled):not(.disabled).active {
    color: #ffffff;
    background-color: #fd811e;
    border-color: #fd811e;
}

.show>.btn-orange.dropdown-toggle {
    color: #ffffff;
    background-color: #fd811e;
    border-color: #fd811e;
}

.btn-orange:not(:disabled):not(.disabled):active:focus,
.btn-orange:not(:disabled):not(.disabled).active:focus {
    box-shadow: 0 0 0 0.2rem rgba(221, 38, 127, 0.5);
}

.show>.btn-orange.dropdown-toggle:focus {
    box-shadow: 0 0 0 0.2rem rgba(221, 38, 127, 0.5);
}

.btn-yellow {
    color: #ffffff;
    background-color: #ffb609;
    border-color: #ffb609;
}

.btn-yellow:hover {
    color: #ffffff;
    background-color: #fa3;
    border-color: #fa3;
}

.btn-yellow:focus,
.btn-yellow.focus {
    box-shadow: 0 0 0 0.2rem rgba(221, 38, 127, 0.5);
}

.btn-yellow.disabled,
.btn-yellow:disabled {
    color: #ffffff;
    background-color: #fa3;
    border-color: #fa3;
}

.btn-yellow:not(:disabled):not(.disabled):active,
.btn-yellow:not(:disabled):not(.disabled).active {
    color: #ffffff;
    background-color: #fa3;
    border-color: #fa3;
}

.show>.btn-yellow.dropdown-toggle {
    color: #ffffff;
    background-color: #fa3;
    border-color: #fa3;
}

.btn-yellow:not(:disabled):not(.disabled):active:focus,
.btn-yellow:not(:disabled):not(.disabled).active:focus {
    box-shadow: 0 0 0 0.2rem rgba(221, 38, 127, 0.5);
}

.show>.btn-yellow.dropdown-toggle:focus {
    box-shadow: 0 0 0 0.2rem rgba(221, 38, 127, 0.5);
}

.btn-azure {
    color: #ffffff;
    background-color: #00d6e6;
    border-color: #00d6e6;
}

.btn-azure:hover {
    color: #ffffff;
    background-color: #219af0;
    border-color: #219af0;
}

.btn-azure:focus,
.btn-azure.focus {
    box-shadow: 0 0 0 0.2rem rgba(221, 38, 127, 0.5);
}

.btn-azure.disabled,
.btn-azure:disabled {
    color: #ffffff;
    background-color: #219af0;
    border-color: #219af0;
}

.btn-azure:not(:disabled):not(.disabled):active,
.btn-azure:not(:disabled):not(.disabled).active {
    color: #ffffff;
    background-color: #219af0;
    border-color: #219af0;
}

.show>.btn-azure.dropdown-toggle {
    color: #ffffff;
    background-color: #219af0;
    border-color: #219af0;
}

.btn-azure:not(:disabled):not(.disabled):active:focus,
.btn-azure:not(:disabled):not(.disabled).active:focus {
    box-shadow: 0 0 0 0.2rem rgba(221, 38, 127, 0.5);
}

.show>.btn-azure.dropdown-toggle:focus {
    box-shadow: 0 0 0 0.2rem rgba(221, 38, 127, 0.5);
}

.btn-lime {
    color: #ffffff;
    background-color: #63e600;
    border-color: #63e600;
}

.btn-lime:hover {
    color: #ffffff;
    background-color: #69b829;
    border-color: #69b829;
}

.btn-lime:focus,
.btn-lime.focus {
    box-shadow: 0 0 0 0.2rem rgba(221, 38, 127, 0.5);
}

.btn-lime.disabled,
.btn-lime:disabled {
    color: #ffffff;
    background-color: #69b829;
    border-color: #69b829;
}

.btn-lime:not(:disabled):not(.disabled):active,
.btn-lime:not(:disabled):not(.disabled).active {
    color: #ffffff;
    background-color: #69b829;
    border-color: #69b829;
}

.show>.btn-lime.dropdown-toggle {
    color: #ffffff;
    background-color: #69b829;
    border-color: #69b829;
}

.btn-lime:not(:disabled):not(.disabled):active:focus,
.btn-lime:not(:disabled):not(.disabled).active:focus {
    box-shadow: 0 0 0 0.2rem rgba(221, 38, 127, 0.5);
}

.show>.btn-lime.dropdown-toggle:focus {
    box-shadow: 0 0 0 0.2rem rgba(221, 38, 127, 0.5);
}

.btn-teal {
    color: #ffffff;
    background-color: #05e6e6;
    border-color: #05e6e6;
}

.btn-teal:hover {
    color: #ffffff;
    background-color: #05fafa;
    border-color: #05fafa;
}

.btn-teal:focus,
.btn-teal.focus {
    box-shadow: 0 0 0 0.2rem rgba(221, 38, 127, 0.5);
}

.btn-teal.disabled,
.btn-teal:disabled {
    color: #ffffff;
    background-color: #05fafa;
    border-color: #05fafa;
}

.btn-teal:not(:disabled):not(.disabled):active,
.btn-teal:not(:disabled):not(.disabled).active {
    color: #ffffff;
    background-color: #05fafa;
    border-color: #05fafa;
}

.show>.btn-teal.dropdown-toggle {
    color: #ffffff;
    background-color: #05fafa;
    border-color: #05fafa;
}

.btn-teal:not(:disabled):not(.disabled):active:focus,
.btn-teal:not(:disabled):not(.disabled).active:focus {
    box-shadow: 0 0 0 0.2rem rgba(221, 38, 127, 0.5);
}

.show>.btn-teal.dropdown-toggle:focus {
    box-shadow: 0 0 0 0.2rem rgba(221, 38, 127, 0.5);
}

.btn-gray {
    color: #ffffff;
    background-color: #707580;
    border-color: #707580;
}

.btn-gray:hover {
    color: #ffffff;
    background-color: #4e5054;
    border-color: #4e5054;
}

.btn-gray:focus,
.btn-gray.focus {
    box-shadow: 0 0 0 0.2rem rgba(221, 38, 127, 0.5);
}

.btn-gray.disabled,
.btn-gray:disabled {
    color: #ffffff;
    background-color: #4e5054;
    border-color: #4e5054;
}

.btn-gray:not(:disabled):not(.disabled):active,
.btn-gray:not(:disabled):not(.disabled).active {
    color: #ffffff;
    background-color: #4e5054;
    border-color: #4e5054;
}

.show>.btn-gray.dropdown-toggle {
    color: #ffffff;
    background-color: #4e5054;
    border-color: #4e5054;
}

.btn-gray:not(:disabled):not(.disabled):active:focus,
.btn-gray:not(:disabled):not(.disabled).active:focus {
    box-shadow: 0 0 0 0.2rem rgba(221, 38, 127, 0.5);
}

.show>.btn-gray.dropdown-toggle:focus {
    box-shadow: 0 0 0 0.2rem rgba(221, 38, 127, 0.5);
}

/* ###### Buttons ###### */
/* ###### Card  ###### */
.card {
    position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #ffffff;
    background-clip: border-box;
    border: 1px solid #e8e8f7;
    border-radius: 3px;
    margin-bottom: 2rem;
    border-radius: 14px;
}

.card.text-white .main-content-label,
.card.tx-white .main-content-label {
    color: #ffffff;
}

.card-body {
    flex: 1 1 auto;
    padding: 25px;
}

.card>hr {
    margin-right: 0;
    margin-left: 0;
}

.card>.list-group:first-child .list-group-item:first-child {
    border-top-left-radius: 3px;
    border-top-right-radius: 3px;
}

.card>.list-group:last-child .list-group-item:last-child {
    border-bottom-right-radius: 3px;
    border-bottom-left-radius: 3px;
}

.card .card {
    box-shadow: none;
}

.card-subtitle {
    margin-top: -0.375rem;
    margin-bottom: 0;
}

.card-text:last-child {
    margin-bottom: 0;
}

.card-link:hover {
    text-decoration: none;
}

.card-link+.card-link {
    margin-left: 1.25rem;
}

.card-header {
    padding: 20px 25px 0 25px;
    margin-bottom: 0;
    border-bottom: 1px solid #e8e8f7;
    background: transparent;
}

.card-header:first-child {
    border-radius: calc(3px - 1px) calc(3px - 1px) 0 0;
    border-radius: 11px 11px 0 0;
}

.card-header+.list-group .list-group-item:first-child {
    border-top: 0;
}

.card-footer {
    padding: 0.75rem 1.25rem;
    background: #ffffff;
    border-top: 1px solid #e8e8f7;
    background: transparent;
}

.card-footer:last-child {
    border-radius: 0 0 11px 11px;
}

.card-header-tabs {
    margin-right: -0.625rem;
    margin-bottom: -0.75rem;
    margin-left: -0.625rem;
    border-bottom: 0;
}

.card-header-pills {
    margin-right: -0.625rem;
    margin-left: -0.625rem;
}

.card-img-overlay {
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    padding: 1.25rem;
}

.card-img {
    width: 100%;
    border-radius: calc(3px - 1px);
}

.card-img-top {
    width: 100%;
    border-top-left-radius: 11px;
    border-top-right-radius: 11px;
}

.card-img-bottom {
    width: 100%;
    border-bottom-right-radius: 11px;
    border-bottom-left-radius: 11px;
}

.card-deck {
    display: flex;
    flex-direction: column;
}

.card-deck .card {
    margin-bottom: 15px;
}

@media (min-width: 576px) {
    .card-deck {
        flex-flow: row wrap;
        margin-right: -15px;
        margin-left: -15px;
    }

    .card-deck .card {
        display: flex;
        flex: 1 0 0%;
        flex-direction: column;
        margin-right: 15px;
        margin-bottom: 0;
        margin-left: 15px;
    }
}

.card-group {
    display: flex;
    flex-direction: column;
}

.card-group>.card {
    margin-bottom: 15px;
}

@media (min-width: 576px) {
    .card-group {
        flex-flow: row wrap;
    }

    .card-group>.card {
        flex: 1 0 0%;
        margin-bottom: 0;
    }

    .card-group>.card+.card {
        margin-left: 0;
        border-left: 0;
    }

    .card-group>.card:not(:last-child) {
        border-top-right-radius: 0;
        border-bottom-right-radius: 0;
    }

    .card-group>.card:not(:last-child) .card-img-top,
    .card-group>.card:not(:last-child) .card-header {
        border-top-right-radius: 0;
    }

    .card-group>.card:not(:last-child) .card-img-bottom,
    .card-group>.card:not(:last-child) .card-footer {
        border-bottom-right-radius: 0;
    }

    .card-group>.card:not(:first-child) {
        border-top-left-radius: 0;
        border-bottom-left-radius: 0;
    }

    .card-group>.card:not(:first-child) .card-img-top,
    .card-group>.card:not(:first-child) .card-header {
        border-top-left-radius: 0;
    }

    .card-group>.card:not(:first-child) .card-img-bottom,
    .card-group>.card:not(:first-child) .card-footer {
        border-bottom-left-radius: 0;
    }
}

.card-columns .card {
    margin-bottom: 0.75rem;
}

@media (min-width: 576px) {
    .card-columns {
        column-count: 3;
        column-gap: 1.25rem;
        orphans: 1;
        widows: 1;
    }

    .card-columns .card {
        display: inline-block;
        width: 100%;
    }
}

.card-header,
.card-footer {
    position: relative;
    border-color: #ecedef;
    padding-left: 25px;
    padding-right: 25px;
}

.card-header-tab {
    border-bottom: 0;
    padding: 0;
}

.main-content-label {
    font-weight: 500;
    color: #3c4858;
    font-size: 14px;
    line-height: 1;
    margin-bottom: 0rem;
}

.card-item .card-item-icon {
    width: 55px;
    height: 55px;
    position: absolute;
    right: 20px;
    top: -15px;
    border-radius: 8px;
    display: flex;
    align-items: center;
    justify-content: center;
    width: 45px;
    height: 45px;
    bottom: 21px;
    top: auto;
    border-radius: 50%;
}

.card-item .card-item-icon.card-icon {
    background: rgba(77, 76, 178, 0.1);
}

.card-item .card-item-title {
    display: flex;
    flex-direction: column;
    font-size: 1rem;
    margin-bottom: 2rem;
    margin-bottom: 1rem;
    letter-spacing: 0;
    color: #383942;
}

.card-item .card-item-title small {
    font-size: 80%;
    font-weight: 300;
    text-transform: capitalize;
    color: #8d95b1;
}

.card-item .card-item-body {
    display: flex;
    align-items: flex-end;
    justify-content: space-between;
}

.card-item .card-item-body .card-item-stat .card-item-figure {
    display: flex;
    font-weight: 500;
    font-size: 1.125rem;
    letter-spacing: .5px;
    color: #383942;
}

.card-item .card-item-body .card-item-stat small {
    font-size: 85%;
    font-weight: 300;
    text-transform: capitalize;
    color: #8d95b1;
}

.card-item .card-item-body .card-item-redirect .btn-card-item-view {
    background: #F4F7FD;
    color: #A5ABBA;
    font-weight: 300;
    letter-spacing: .5px;
    border: none;
    transition: all, 0.3s;
}

.card-dashboard-calendar {
    padding: 20px;
    box-shadow: -7.829px 11.607px 20px 0px #e4e3f5;
}

.card-dashboard-calendar .main-content-label {
    color: #1c273c;
    font-weight: 700;
    text-transform: uppercase;
    margin-bottom: 15px;
}

.card-dashboard-calendar .card-body {
    padding: 0;
}

.card-dashboard-calendar .ui-datepicker-inline {
    border-width: 0;
    max-width: none;
    padding: 0;
    margin: 0;
}

.card-dashboard-calendar .ui-datepicker .ui-datepicker-header {
    border-bottom: 0;
    padding: 13px 10px;
    margin: auto;
}

.card-dashboard-calendar .ui-datepicker .ui-datepicker-header .ui-datepicker-next::before,
.card-dashboard-calendar .ui-datepicker .ui-datepicker-header .ui-datepicker-prev::before {
    top: 12px;
}

.card-dashboard-calendar .ui-datepicker .ui-datepicker-calendar {
    width: 100%;
}

.card-dashboard-calendar .ui-datepicker .ui-datepicker-calendar th {
    font-size: 12px;
    text-align: center;
}

.card-dashboard-calendar .ui-datepicker .ui-datepicker-calendar td {
    text-align: center;
}

.card-dashboard-calendar .ui-datepicker .ui-datepicker-calendar td a {
    display: block;
    font-size: 11.7px;
    border-radius: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
}

.card-dashboard-calendar .ui-datepicker .ui-datepicker-calendar .ui-datepicker-today a {
    color: #ffffff;
    font-weight: 700;
    border-radius: 0;
}

@media (min-width: 576px) {
    .card-dashboard-calendar .ui-datepicker .ui-datepicker-calendar {
        width: 100%;
    }
}

.card-dashboard-twentyfour .card-header {
    background-color: transparent;
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 20px 20px 0;
}

.card-dashboard-twentyfour .main-content-label {
    font-size: 14px;
    margin-bottom: 0;
}

.card-dashboard-twentyfour .card-body {
    padding: 15px 20px 20px;
}

.card-dashboard-twentyfour .card-body-top {
    display: flex;
    margin-bottom: 20px;
}

.card-dashboard-twentyfour .card-body-top h6 {
    color: #8f9cc0;
    font-size: 18px;
    font-weight: 600;
    font-family: "Archivo", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
    margin-bottom: 0;
    letter-spacing: -.75px;
}

.card-dashboard-twentyfour .card-body-top h6 small {
    font-weight: 600;
}

.card-dashboard-twentyfour .card-body-top h6 span {
    color: #a8afc7;
    font-weight: 400;
    letter-spacing: normal;
}

.card-dashboard-twentyfour .card-body-top label {
    display: block;
    margin-bottom: 0;
    color: #a8afc7;
    font-size: 11px;
}

.card-dashboard-twentyfour .card-body-top>div+div {
    margin-left: 30px;
}

.card-dashboard-twentyfour .main-content-label,
.card-dashboard-twentyfour .card-table-two .main-content-label {
    font-size: 10px;
    color: #8f9cc0;
    letter-spacing: .5px;
    margin-bottom: 0;
}

@media (min-width: 576px) {
    .card-dashboard-twentyfour .card-body-top h6 {
        font-size: 22px;
    }
}

@media (min-width: 576px) {
    .card-dashboard-twentyfour .card-body-top label {
        font-size: 0.875rem;
    }
}

.card-table-two .card-dashboard-twentyfour .main-content-label,
.card-dashboard-twentyfour .card-dashboard-eight .main-content-label,
.card-dashboard-eight .card-dashboard-twentyfour .main-content-label {
    font-size: 10px;
    color: #8f9cc0;
    letter-spacing: .5px;
    margin-bottom: 0;
}

.card-dashboard-twentyfour .chart-legend {
    display: flex;
    align-items: center;
    font-size: 10px;
    font-weight: 500;
    text-transform: uppercase;
    letter-spacing: .5px;
    line-height: .6;
}

.card-dashboard-twentyfour .chart-legend span {
    display: inline-block;
    width: 7px;
    height: 7px;
    margin-right: 5px;
}

.card-dashboard-twentyfour .chart-legend>div {
    display: flex;
    align-items: center;
}

.card-dashboard-twentyfour .chart-legend>div+div {
    margin-left: 20px;
}

.card-dashboard-twentyfour .chart-wrapper {
    position: relative;
    margin-right: -10px;
}

.card-dashboard-twentyfour .flot-chart {
    width: 100%;
    height: 130px;
}

.card-dashboard-twentyfive .main-content-label {
    font-size: 14px;
    margin-bottom: 15px;
}

.card-dashboard-twentyfive .col+.col {
    border-left: 1px solid #e8e8f7;
}

.card-dashboard-twentyfive .card-label {
    display: block;
    text-transform: uppercase;
    font-size: 11px;
    font-weight: 500;
    letter-spacing: .5px;
    margin-bottom: 2px;
    color: #a8afc7;
    white-space: nowrap;
}

.card-dashboard-twentyfive .card-value {
    font-size: 22px;
    font-weight: 600;
    font-family: "Archivo", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
    color: #8f9cc0;
    margin-bottom: 0;
    letter-spacing: -1px;
}

.card-dashboard-twentyfive .chart-wrapper {
    position: relative;
    margin: 0 -8px -5px;
}

.card-dashboard-twentyfive .flot-chart {
    width: 100%;
    height: 35px;
}

.card-dashboard-twentysix .card-header {
    padding: 15px 15px 10px;
    background-color: transparent;
    display: flex;
    align-items: center;
    justify-content: space-between;
}

.card-dashboard-twentysix .main-content-label {
    margin-bottom: 0;
    text-transform: uppercase;
}

.card-dashboard-twentysix .chart-legend {
    display: flex;
    align-items: center;
}

.card-dashboard-twentysix .chart-legend>div {
    font-size: 10px;
    font-weight: 500;
    text-transform: uppercase;
    letter-spacing: .5px;
}

.card-dashboard-twentysix .chart-legend>div+div {
    margin-left: 15px;
}

.card-dashboard-twentysix .chart-legend span {
    display: inline-block;
    width: 8px;
    height: 8px;
    margin-right: 2px;
}

.card-dashboard-twentysix .card-body {
    padding: 0;
    position: relative;
    overflow: hidden;
}

.card-dashboard-twentysix .card-body h6 {
    margin-bottom: 0;
    color: #8f9cc0;
    font-size: 22px;
    font-weight: 600;
    font-family: "Archivo", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
    letter-spacing: -.5px;
    line-height: 1;
}

.card-dashboard-twentysix .card-body h6 span {
    font-weight: 400;
    font-size: 18px;
    letter-spacing: -1px;
}

.card-dashboard-twentysix .card-body label {
    font-size: 12px;
    margin-bottom: 0;
    color: #a8afc7;
}

.card-dashboard-twentysix .chart-wrapper {
    position: relative;
    margin: -30px -18px -15px -18px;
}

.card-dashboard-twentysix .flot-chart {
    width: 100%;
    height: 120px;
}

.card-dashboard-twentysix .flot-chart .flot-x-axis>div {
    font-size: 10px;
    letter-spacing: .5px;
    text-transform: uppercase;
    color: rgba(255, 255, 255, 0.75);
    transform: translateY(-20px);
}

.card-dashboard-twentysix .flot-chart .flot-y-axis>div {
    font-size: 10px;
    transform: translateX(33px);
    color: rgba(28, 39, 60, 0.5);
}

.card-dashboard-twentysix.card-dark-one .main-content-label,
.card-dashboard-twentysix.card-dark-two .main-content-label,
.card-dashboard-twentysix.card-dark-one .card-body h6,
.card-dashboard-twentysix.card-dark-two .card-body h6 {
    color: #ffffff;
}

.card-dashboard-twentysix.card-dark-one .card-body h6 span,
.card-dashboard-twentysix.card-dark-two .card-body h6 span {
    color: rgba(255, 255, 255, 0.5);
}

.card-dashboard-twentysix.card-dark-one .card-body label,
.card-dashboard-twentysix.card-dark-two .card-body label {
    color: rgba(255, 255, 255, 0.7);
}

.card-dashboard-twentysix.card-dark-one .flot-chart .flot-y-axis>div,
.card-dashboard-twentysix.card-dark-two .flot-chart .flot-y-axis>div {
    color: rgba(255, 255, 255, 0.2);
}

.card-dashboard-twentysix.card-dark-one {
    background-repeat: repeat-x;
}

.card-dashboard-twentysix.card-dark-two {
    background-image: linear-gradient(to bottom, #0a47ff 0%, #214fbe 100%);
    background-repeat: repeat-x;
}

.card-order2 i {
    font-size: 2.5rem;
    vertical-align: middle;
    padding: 5px 0;
}

.card-order2 .icon-style {
    display: block;
    width: 70px;
    height: 70px;
    text-align: center;
    border-radius: 11px;
    align-items: center;
    justify-content: center;
    float: left;
}

/* ###### Card  ###### */
.carousel {
    position: relative;
}

.carousel.pointer-event {
    touch-action: pan-y;
}

.carousel-inner {
    position: relative;
    width: 100%;
    overflow: hidden;
}

.carousel-inner::after {
    display: block;
    clear: both;
    content: "";
}

.carousel-item {
    position: relative;
    display: none;
    float: left;
    width: 100%;
    margin-right: -100%;
    backface-visibility: hidden;
    transition: opacity .15s linear;
}

.carousel-item.active {
    display: block;
}

@media (prefers-reduced-motion: reduce) {
    .carousel-item {
        transition: none;
    }
}

.carousel-item-next,
.carousel-item-prev {
    display: block;
}

.carousel-item-next:not(.carousel-item-left),
.active.carousel-item-right {
    transform: translateX(100%);
}

.carousel-item-prev:not(.carousel-item-right),
.active.carousel-item-left {
    transform: translateX(-100%);
}

.carousel-fade .carousel-item {
    opacity: 0;
    transition-property: opacity;
    transform: none;
}

.carousel-fade .carousel-item.active {
    z-index: 0;
    opacity: 1;
}

.carousel-fade .carousel-item-next.carousel-item-left,
.carousel-fade .carousel-item-prev.carousel-item-right {
    z-index: 0;
    opacity: 1;
}

.carousel-fade .active.carousel-item-left,
.carousel-fade .active.carousel-item-right {
    z-index: 0;
    opacity: 0;
    transition: 0s 0.6s opacity;
}

@media (prefers-reduced-motion: reduce) {

    .carousel-fade .active.carousel-item-left,
    .carousel-fade .active.carousel-item-right {
        transition: none;
    }
}

.carousel-control-prev,
.carousel-control-next {
    position: absolute;
    top: 0;
    bottom: 0;
    z-index: 0;
    display: flex;
    align-items: center;
    justify-content: center;
    width: 15%;
    color: #ffffff;
    text-align: center;
    opacity: 0.5;
    transition: opacity 0.15s ease;
}

@media (prefers-reduced-motion: reduce) {

    .carousel-control-prev,
    .carousel-control-next {
        transition: none;
    }
}

.carousel-control-prev:hover,
.carousel-control-prev:focus {
    color: #ffffff;
    text-decoration: none;
    outline: 0;
    opacity: 0.9;
}

.carousel-control-next:hover,
.carousel-control-next:focus {
    color: #ffffff;
    text-decoration: none;
    outline: 0;
    opacity: 0.9;
}

.carousel-control-prev {
    left: 0;
}

.carousel-control-next {
    right: 0;
}

.carousel-control-prev-icon,
.carousel-control-next-icon {
    display: inline-block;
    width: 20px;
    height: 20px;
    background: no-repeat 50% / 100% 100%;
}

.carousel-control-prev-icon {
    background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='%23fff' viewBox='0 0 8 8'%3e%3cpath d='M5.25 0l-4 4 4 4 1.5-1.5-2.5-2.5 2.5-2.5-1.5-1.5z'/%3e%3c/svg%3e");
}

.carousel-control-next-icon {
    background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='%23fff' viewBox='0 0 8 8'%3e%3cpath d='M2.75 0l-1.5 1.5 2.5 2.5-2.5 2.5 1.5 1.5 4-4-4-4z'/%3e%3c/svg%3e");
}

.carousel-indicators {
    position: absolute;
    right: 0;
    bottom: 0;
    left: 0;
    z-index: 9;
    display: flex;
    justify-content: center;
    padding-left: 0;
    margin-right: 15%;
    margin-left: 15%;
    list-style: none;
}

.carousel-indicators li {
    box-sizing: content-box;
    flex: 0 1 auto;
    width: 10px;
    height: 10px;
    margin-right: 3px;
    margin-left: 3px;
    text-indent: -999px;
    cursor: pointer;
    background-color: #ffffff;
    background-clip: padding-box;
    border-top: 10px solid transparent;
    border-bottom: 10px solid transparent;
    opacity: .5;
    transition: opacity 0.6s ease;
}

.carousel-indicators .active {
    opacity: 1;
}

@media (prefers-reduced-motion: reduce) {
    .carousel-indicators li {
        transition: none;
    }
}

.carousel-control-prev-icon svg,
.carousel-control-next-icon svg {
    width: 48px;
    height: 48px;
}

.carousel-indicators li {
    width: 10px;
    height: 10px;
    border-radius: 100%;
}

.carousel-caption {
    position: absolute;
    right: 15%;
    bottom: 20px;
    left: 15%;
    z-index: 9;
    padding-top: 20px;
    padding-bottom: 20px;
    color: #ffffff;
    text-align: center;
}

@keyframes spinner-border {
    to {
        transform: rotate(360deg);
    }
}

/* ########## Dropdown ########## */
.dropup,
.dropright,
.dropdown,
.dropleft {
    position: relative;
}

.dropdown-toggle {
    white-space: nowrap;
}

.dropdown-toggle:empty::after {
    margin-left: 0;
}

.dropdown-menu {
    position: absolute;
    top: 100%;
    left: 0;
    z-index: 1000;
    display: none;
    float: left;
    min-width: 10rem;
    padding: 0.5rem 0;
    margin: 0.125rem 0 0;
    font-size: 0.875rem;
    color: #8f9cc0;
    text-align: left;
    list-style: none;
    background-color: #ffffff;
    background-clip: padding-box;
    border: 1px solid #ffffff;
    border-radius: 0px;
    box-shadow: -8px 12px 18px 0 rgba(21, 21, 62, 0.3);
    padding: 0;
    border-width: 1px;
    border-radius: 4px;
}

.dropdown-menu-left {
    right: auto;
    left: 0;
}

.dropdown-menu-right {
    right: 0;
    left: auto;
}

@media (min-width: 576px) {
    .dropdown-menu-sm-left {
        right: auto;
        left: 0;
    }

    .dropdown-menu-sm-right {
        right: 0;
        left: auto;
    }
}

@media (min-width: 768px) {
    .dropdown-menu-md-left {
        right: auto;
        left: 0;
    }

    .dropdown-menu-md-right {
        right: 0;
        left: auto;
    }
}

@media (min-width: 992px) {
    .dropdown-menu-lg-left {
        right: auto;
        left: 0;
    }

    .dropdown-menu-lg-right {
        right: 0;
        left: auto;
    }

    .header-search {
        display: none;
    }
}

@media (min-width: 1200px) {
    .dropdown-menu-xl-left {
        right: auto;
        left: 0;
    }

    .dropdown-menu-xl-right {
        right: 0;
        left: auto;
    }
}

.dropup .dropdown-menu {
    top: auto;
    bottom: 100%;
    margin-top: 0;
    margin-bottom: 0.125rem;
}

.dropup .dropdown-toggle::after {
    display: inline-block;
    margin-left: 0.255em;
    vertical-align: 0.255em;
    content: "";
    border-top: 0;
    border-right: 0.3em solid transparent;
    border-bottom: 0.3em solid;
    border-left: 0.3em solid transparent;
}

.dropup .dropdown-toggle:empty::after {
    margin-left: 0;
}

.dropright .dropdown-menu {
    top: 0;
    right: auto;
    left: 100%;
    margin-top: 0;
    margin-left: 0.125rem;
}

.dropright .dropdown-toggle::after {
    display: inline-block;
    margin-left: 0.255em;
    vertical-align: 0.255em;
    content: "";
    border-top: 0.3em solid transparent;
    border-right: 0;
    border-bottom: 0.3em solid transparent;
    border-left: 0.3em solid;
    vertical-align: 0;
}

.dropright .dropdown-toggle:empty::after {
    margin-left: 0;
}

.dropleft .dropdown-menu {
    top: 0;
    right: 100%;
    left: auto;
    margin-top: 0;
    margin-right: 0.125rem;
}

.dropleft .dropdown-toggle::after {
    display: inline-block;
    margin-left: 0.255em;
    vertical-align: 0.255em;
    content: "";
    display: none;
}

.dropleft .dropdown-toggle::before {
    display: inline-block;
    margin-right: 0.255em;
    vertical-align: 0.255em;
    content: "";
    border-top: 0.3em solid transparent;
    border-right: 0.3em solid;
    border-bottom: 0.3em solid transparent;
    vertical-align: 0;
}

.dropleft .dropdown-toggle:empty::after {
    margin-left: 0;
}

.dropdown-menu[x-placement^="top"],
.dropdown-menu[x-placement^="right"],
.dropdown-menu[x-placement^="bottom"],
.dropdown-menu[x-placement^="left"] {
    right: auto;
    bottom: auto;
}

.dropdown-divider {
    height: 0;
    margin: 0.5rem 0;
    overflow: hidden;
    border-top: 1px solid #e8e8f7;
}

.dropdown-item {
    display: block;
    width: 100%;
    padding: 0.25rem 1.5rem;
    clear: both;
    font-weight: 400;
    color: #647194;
    text-align: inherit;
    white-space: nowrap;
    background-color: transparent;
    border: 0;
    padding: 8px 15px;
    font-size: 13px;
}

.dropdown-item:hover,
.dropdown-item:focus {
    color: #25233c;
    text-decoration: none;
    background-color: #f8f9fa;
    outline: 0;
}

.dropdown-item.disabled,
.dropdown-item:disabled {
    color: #a8afc7;
    pointer-events: none;
    background-color: rgba(0, 0, 0, 0.1);
}

.dropdown-menu.show {
    display: block;
}

.dropdown-header {
    display: block;
    padding: 0.5rem 1.5rem;
    margin-bottom: 0;
    font-size: 0.76562rem;
    color: #a8afc7;
    white-space: nowrap;
    padding-left: 15px;
    padding-right: 15px;
}

.dropdown-item-text {
    display: block;
    padding: 0.25rem 1.5rem;
    color: #8f9cc0;
}

.dropdown-menu .main-form-search {
    flex: 1;
    width: 100%;
    position: relative;
}

.dropdown-menu .main-header-center .select2-container--default .select2-selection--single {
    border-radius: 6px 0 0 6px;
    background: #eaebfa;
    height: 40px;
    width: 200px !important;
}

.dropdown-menu .main-header-center .search-btn {
    padding: 0.375rem 0.85rem 0.4rem 0.70rem;
    border-radius: 0 6px 6px 0;
    color: #ffffff;
    display: inline-block;
}

.dropdown-menu .main-form-search .btn,
.dropdown-menu .main-form-search .sp-container button {
    display: inline-block;
    position: initial;
    padding: 0.375rem 0.85rem 0.4rem 0.70rem;
    border-radius: 0 11px 11px 0;
    color: #ffffff;
}

.dropdown-menu .sp-container .main-form-search button {
    display: inline-block;
    position: initial;
    padding: 0.375rem 0.85rem 0.4rem 0.70rem;
    border-radius: 0 6px 6px 0;
    color: #ffffff;
}

.dropdown-menu .main-header-center .form-control {
    background: #eaebfa;
    border: 1px solid #e6eaff;
    transition: none;
    height: 40px;
    border-radius: 0;
}

.dropdown-menu .input-group {
    position: relative;
    display: flex;
    flex-wrap: wrap;
    align-items: stretch;
    width: 100%;
}

.dropdown-item.active,
.dropdown-item:active {
    background-color: #f8f9fa;
}

#active .dropdown-item.active,
.dropdown-item:active {
    color: #214fbe;
    background-color: #ecedef;
}

/* ########## Dropdown ########## */
/* ###### Form-elements ###### */
.form-control {
    display: block;
    width: 100%;
    padding: 0.475rem 0.85rem;
    height: auto;
    font-size: 0.875rem;
    font-weight: 400;
    line-height: 1.5;
    color: #a6a6bf;
    background-color: #ffffff;
    background-clip: padding-box;
    border: 1px solid #e8e8f7;
    border-radius: 11px;
    transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
}

.form-control::-ms-expand {
    background-color: transparent;
    border: 0;
}

.form-control:focus {
    color: #8f9cc0;
    outline: 0;
    box-shadow: 0 0 0 0.2rem rgba(135, 96, 251, 0.25);
    border-color: #e8e8f7;
    box-shadow: none;
}

.form-control::placeholder {
    color: #a6a6bf;
}

.form-control:disabled,
.form-control[readonly] {
    background-color: #f6f6ff;
    opacity: 0.5;
}

@media (prefers-reduced-motion: reduce) {
    .form-control {
        transition: none;
    }
}

select.form-control:focus::-ms-value {
    color: #8f9cc0;
    background-color: #ffffff;
}

.form-control-file,
.form-control-range {
    display: block;
    width: 100%;
}

.col-form-label {
    padding-top: calc(0.375rem + 1px);
    padding-bottom: calc(0.375rem + 1px);
    margin-bottom: 0;
    font-size: inherit;
    line-height: 1.5;
}

.col-form-label-lg {
    padding-top: calc(0.5rem + 1px);
    padding-bottom: calc(0.5rem + 1px);
    font-size: 1.09375rem;
    line-height: 1.5;
}

.col-form-label-sm {
    padding-top: calc(0.25rem + 1px);
    padding-bottom: calc(0.25rem + 1px);
    font-size: 0.76562rem;
    line-height: 1.5;
}

.form-control-plaintext {
    display: block;
    width: 100%;
    padding-top: 0.375rem;
    padding-bottom: 0.375rem;
    margin-bottom: 0;
    line-height: 1.5;
    color: #8f9cc0;
    background-color: transparent;
    border: solid transparent;
    border-width: 1px 0;
}

.form-control-plaintext.form-control-sm,
.form-control-plaintext.form-control-lg {
    padding-right: 0;
    padding-left: 0;
}

.form-control-sm {
    height: calc(1.5em + 0.5rem + 2px);
    padding: 0.25rem 0.5rem;
    font-size: 0.76562rem;
    line-height: 1.5;
    border-radius: 0.2rem;
}

.form-control-lg {
    height: calc(1.5em + 1rem + 2px);
    padding: 0.5rem 1rem;
    font-size: 1.09375rem;
    line-height: 1.5;
    border-radius: 0.3rem;
}

select.form-control[size],
select.form-control[multiple] {
    height: auto;
}

textarea.form-control {
    height: auto;
}

.form-group {
    margin-bottom: 1rem;
}

.form-text {
    display: block;
    margin-top: 0.25rem;
}

.form-row {
    display: flex;
    flex-wrap: wrap;
    margin-right: -5px;
    margin-left: -5px;
}

.form-row>.col,
.form-row>[class*="col-"] {
    padding-right: 5px;
    padding-left: 5px;
}

.form-check {
    position: relative;
    display: block;
    padding-left: 1.25rem;
}

.form-check-input {
    position: absolute;
    margin-top: 0.3rem;
    margin-left: -1.25rem;
}

.form-check-input:disabled~.form-check-label {
    color: #e8e8f7;
}

.form-check-label {
    margin-bottom: 0;
}

.form-check-inline {
    display: inline-flex;
    align-items: center;
    padding-left: 0;
    margin-right: 0.75rem;
}

.form-check-inline .form-check-input {
    position: static;
    margin-top: 0;
    margin-right: 0.3125rem;
    margin-left: 0;
}

.form-inline {
    display: flex;
    flex-flow: row wrap;
    align-items: center;
}

.form-inline .form-check {
    width: 100%;
}

@media (min-width: 576px) {
    .form-inline label {
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 0;
    }

    .form-inline .form-group {
        display: flex;
        flex: 0 0 auto;
        flex-flow: row wrap;
        align-items: center;
        margin-bottom: 0;
    }

    .form-inline .form-control {
        display: inline-block;
        width: auto;
        vertical-align: middle;
    }

    .form-inline .form-control-plaintext {
        display: inline-block;
    }

    .form-inline .input-group,
    .form-inline .custom-select {
        width: auto;
    }

    .form-inline .form-check {
        display: flex;
        align-items: center;
        justify-content: center;
        width: auto;
        padding-left: 0;
    }

    .form-inline .form-check-input {
        position: relative;
        flex-shrink: 0;
        margin-top: 0;
        margin-right: 0.25rem;
        margin-left: 0;
    }

    .form-inline .custom-control {
        align-items: center;
        justify-content: center;
    }

    .form-inline .custom-control-label {
        margin-bottom: 0;
    }
}

.custom-file,
.custom-file-input {
    height: 38px;
}

.custom-file-label {
    position: absolute;
    top: 0;
    right: 0;
    left: 0;
    z-index: 0;
    height: calc(1.5em + 0.75rem + 2px);
    padding: 0.375rem 0.75rem;
    font-weight: 400;
    line-height: 1.5;
    color: #3c4858;
    background-color: #ffffff;
    border: 1px solid #e8e8f7;
    border-radius: 0px;
    height: 38px;
    line-height: 1.8;
}

.custom-file-label::after {
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    z-index: 3;
    display: block;
    height: calc(1.5em + 0.75rem);
    padding: 0.375rem 0.75rem;
    line-height: 1.5;
    color: #3c4858;
    content: "Browse";
    background-color: #e5e9f3;
    border-left: inherit;
    border-radius: 0 3px 3px 0;
    line-height: 1.8;
    height: auto;
}

.form-label {
    display: block;
    margin-bottom: 5px;
    color: #8f9cc0;
}

.file-browser .btn-default {
    border-top-right-radius: 6px !important;
    border-bottom-right-radius: 6px !important;
    padding: .46rem 15px;
    color: #ffffff;
    border-radius: 0;
    border: 1px solid #e2e8f5;
}

.main-form-group {
    padding: 12px 15px;
    border: 1px solid #e8e8f7;
}

.main-form-group.focus {
    border-color: #b4bdce;
    box-shadow: 0 0 0 2px rgba(91, 71, 251, 0.16);
}

.main-form-group .form-label {
    font-size: 13px;
    margin-bottom: 2px;
    font-weight: 400;
    color: #e8e8f7;
}

.main-form-group .form-control {
    padding: 0;
    border-width: 0;
    height: 25px;
    color: #8f9cc0;
    font-weight: 500;
}

.main-form-group .form-control:focus {
    box-shadow: none;
}

.richText {
    border: #e8e8f7 solid 1px;
    background-color: #f3f4f7;
    border-top: 0;
    border-bottom: 0;
}

.richText .richText-toolbar {
    border-bottom: #e8e8f7 solid 1px;
    border-top: 1px solid #e8e8f7;
}

.richText .richText-toolbar ul li a {
    border-right: #e8e8f7 solid 1px;
}

.richText .richText-undo,
.richText .richText-redo {
    border-right: #e8e8f7 solid 1px !important;
}

/* ###### Form-elements ###### */
/* ###### Grid ###### */
.row-sm {
    margin-left: -10px;
    margin-right: -10px;
}

.row-sm>div {
    padding-left: 10px;
    padding-right: 10px;
}

.row-xs {
    margin-left: -5px;
    margin-right: -5px;
}

.row-xs>div {
    padding-left: 5px;
    padding-right: 5px;
}

@media (min-width: 576px) {
    .row-xs--sm {
        margin-left: -5px;
        margin-right: -5px;
    }

    .row-xs--sm>div {
        padding-left: 5px;
        padding-right: 5px;
    }

    .row-sm--sm {
        margin-left: -10px;
        margin-right: -10px;
    }

    .row-sm--sm>div {
        padding-left: 10px;
        padding-right: 10px;
    }

    .row--sm {
        margin-left: -15px;
        margin-right: -15px;
    }

    .row--sm>div {
        padding-left: 15px;
        padding-right: 15px;
    }
}

@media (min-width: 768px) {
    .row-xs--md {
        margin-left: -5px;
        margin-right: -5px;
    }

    .row-xs--md>div {
        padding-left: 5px;
        padding-right: 5px;
    }

    .row-sm--md {
        margin-left: -10px;
        margin-right: -10px;
    }

    .row-sm--md>div {
        padding-left: 10px;
        padding-right: 10px;
    }

    .row--md {
        margin-left: -15px;
        margin-right: -15px;
    }

    .row--md>div {
        padding-left: 15px;
        padding-right: 15px;
    }
}

@media (min-width: 992px) {
    .row-xs--lg {
        margin-left: -5px;
        margin-right: -5px;
    }

    .row-xs--lg>div {
        padding-left: 5px;
        padding-right: 5px;
    }

    .row-sm--lg {
        margin-left: -10px;
        margin-right: -10px;
    }

    .row-sm--lg>div {
        padding-left: 10px;
        padding-right: 10px;
    }

    .row--lg {
        margin-left: -15px;
        margin-right: -15px;
    }

    .row--lg>div {
        padding-left: 15px;
        padding-right: 15px;
    }
}

@media (min-width: 1200px) {
    .row-xs--xl {
        margin-left: -5px;
        margin-right: -5px;
    }

    .row-xs--xl>div {
        padding-left: 5px;
        padding-right: 5px;
    }

    .row-sm--xl {
        margin-left: -10px;
        margin-right: -10px;
    }

    .row-sm--xl>div {
        padding-left: 10px;
        padding-right: 10px;
    }

    .row--xl {
        margin-left: -15px;
        margin-right: -15px;
    }

    .row--xl>div {
        padding-left: 15px;
        padding-right: 15px;
    }
}

/* ###### Grid ###### */
/* ###### Input-group ###### */
.input-group-prepend,
.input-group-append {
    border-radius: 0;
}

.input-group-text {
    display: flex;
    align-items: center;
    padding: 0.375rem 0.75rem;
    margin-bottom: 0;
    font-size: 0.875rem;
    font-weight: 400;
    line-height: 1.5;
    color: #3c4858;
    text-align: center;
    white-space: nowrap;
    background-color: #f6f6ff;
    border: 1px solid #e8e8f7;
    border-radius: 11px;
    padding-top: 0;
    padding-bottom: 0;
}

.input-group-text input[type="radio"],
.input-group-text input[type="checkbox"] {
    margin-top: 0;
}

.input-group {
    position: relative;
    display: flex;
    flex-wrap: wrap;
    align-items: stretch;
    width: 100%;
}

.input-group>.form-control,
.input-group>.form-control-plaintext,
.input-group>.custom-select,
.input-group>.custom-file {
    position: relative;
    flex: 1 1 auto;
    width: 1%;
    margin-bottom: 0;
}

.input-group>.form-control+.form-control,
.input-group>.form-control+.custom-select,
.input-group>.form-control+.custom-file {
    margin-left: -1px;
}

.input-group>.form-control-plaintext+.form-control,
.input-group>.form-control-plaintext+.custom-select,
.input-group>.form-control-plaintext+.custom-file {
    margin-left: -1px;
}

.input-group>.custom-select+.form-control,
.input-group>.custom-select+.custom-select,
.input-group>.custom-select+.custom-file {
    margin-left: -1px;
}

.input-group>.custom-file+.form-control,
.input-group>.custom-file+.custom-select,
.input-group>.custom-file+.custom-file {
    margin-left: -1px;
}

.input-group>.form-control:focus,
.input-group>.custom-select:focus {
    z-index: 3;
}

.input-group>.custom-file .custom-file-input:focus {
    z-index: 4;
}

.input-group>.custom-file .custom-file-input:focus~.custom-file-label {
    z-index: 3;
}

.input-group>.form-control:not(:last-child),
.input-group>.custom-select:not(:last-child) {
    border-top-right-radius: 0;
    border-bottom-right-radius: 0;
}

.input-group>.form-control:not(:first-child),
.input-group>.custom-select:not(:first-child) {
    border-top-left-radius: 0;
    border-bottom-left-radius: 0;
}

.input-group>.custom-file {
    display: flex;
    align-items: center;
}

.input-group>.custom-file:not(:last-child) .custom-file-label {
    border-top-right-radius: 0;
    border-bottom-right-radius: 0;
}

.input-group>.custom-file:not(:last-child) .custom-file-label::after {
    border-top-right-radius: 0;
    border-bottom-right-radius: 0;
}

.input-group>.custom-file:not(:first-child) .custom-file-label {
    border-top-left-radius: 0;
    border-bottom-left-radius: 0;
}

.input-group-prepend,
.input-group-append {
    display: flex;
}

.input-group-prepend .btn,
.input-group-prepend .sp-container button {
    position: relative;
    z-index: 0;
}

.sp-container .input-group-prepend button {
    position: relative;
    z-index: 0;
}

.input-group-append .btn,
.input-group-append .sp-container button {
    position: relative;
    z-index: 0;
}

.sp-container .input-group-append button {
    position: relative;
    z-index: 0;
}

.input-group-prepend .btn:focus,
.input-group-prepend .sp-container button:focus {
    z-index: 3;
}

.sp-container .input-group-prepend button:focus {
    z-index: 3;
}

.input-group-append .btn:focus,
.input-group-append .sp-container button:focus {
    z-index: 3;
}

.sp-container .input-group-append button:focus {
    z-index: 3;
}

.input-group-prepend .btn+.btn,
.input-group-prepend .sp-container button+.btn {
    margin-left: -1px;
}

.sp-container .input-group-prepend button+.btn,
.input-group-prepend .sp-container .btn+button,
.sp-container .input-group-prepend .btn+button,
.input-group-prepend .sp-container button+button,
.sp-container .input-group-prepend button+button {
    margin-left: -1px;
}

.input-group-prepend .btn+.input-group-text,
.input-group-prepend .sp-container button+.input-group-text {
    margin-left: -1px;
}

.sp-container .input-group-prepend button+.input-group-text {
    margin-left: -1px;
}

.input-group-prepend .input-group-text+.input-group-text,
.input-group-prepend .input-group-text+.btn {
    margin-left: -1px;
}

.input-group-prepend .sp-container .input-group-text+button {
    margin-left: -1px;
}

.sp-container .input-group-prepend .input-group-text+button {
    margin-left: -1px;
}

.input-group-append .btn+.btn,
.input-group-append .sp-container button+.btn {
    margin-left: -1px;
}

.sp-container .input-group-append button+.btn,
.input-group-append .sp-container .btn+button,
.sp-container .input-group-append .btn+button,
.input-group-append .sp-container button+button,
.sp-container .input-group-append button+button {
    margin-left: -1px;
}

.input-group-append .btn+.input-group-text,
.input-group-append .sp-container button+.input-group-text {
    margin-left: -1px;
}

.sp-container .input-group-append button+.input-group-text {
    margin-left: -1px;
}

.input-group-append .input-group-text+.input-group-text,
.input-group-append .input-group-text+.btn {
    margin-left: -1px;
}

.input-group-append .sp-container .input-group-text+button {
    margin-left: -1px;
}

.sp-container .input-group-append .input-group-text+button {
    margin-left: -1px;
}

.input-group-prepend {
    margin-right: -1px;
}

.input-group-append {
    margin-left: -1px;
}

.input-group-lg>.form-control:not(textarea),
.input-group-lg>.custom-select {
    height: calc(1.5em + 1rem + 2px);
}

.input-group-lg>.form-control,
.input-group-lg>.custom-select,
.input-group-lg>.input-group-prepend>.input-group-text,
.input-group-lg>.input-group-append>.input-group-text,
.input-group-lg>.input-group-prepend>.btn {
    padding: 0.5rem 1rem;
    font-size: 1.09375rem;
    line-height: 1.5;
    border-radius: 0rem;
}

.sp-container .input-group-lg>.input-group-prepend>button,
.input-group-lg>.input-group-append>.btn,
.sp-container .input-group-lg>.input-group-append>button {
    padding: 0.5rem 1rem;
    font-size: 1.09375rem;
    line-height: 1.5;
    border-radius: 0rem;
}

.input-group-sm>.form-control:not(textarea),
.input-group-sm>.custom-select {
    height: calc(1.5em + 0.5rem + 2px);
}

.input-group-sm>.form-control,
.input-group-sm>.custom-select,
.input-group-sm>.input-group-prepend>.input-group-text,
.input-group-sm>.input-group-append>.input-group-text,
.input-group-sm>.input-group-prepend>.btn {
    padding: 0.25rem 0.5rem;
    font-size: 0.76562rem;
    line-height: 1.5;
    border-radius: 0rem;
}

.sp-container .input-group-sm>.input-group-prepend>button,
.input-group-sm>.input-group-append>.btn,
.sp-container .input-group-sm>.input-group-append>button {
    padding: 0.25rem 0.5rem;
    font-size: 0.76562rem;
    line-height: 1.5;
    border-radius: 0rem;
}

.input-group-lg>.custom-select,
.input-group-sm>.custom-select {
    padding-right: 1.75rem;
}

.input-group>.input-group-prepend>.btn,
.sp-container .input-group>.input-group-prepend>button {
    border-top-right-radius: 0;
    border-bottom-right-radius: 0;
}

.input-group>.input-group-prepend>.input-group-text,
.input-group>.input-group-append:not(:last-child)>.btn {
    border-top-right-radius: 0;
    border-bottom-right-radius: 0;
}

.sp-container .input-group>.input-group-append:not(:last-child)>button {
    border-top-right-radius: 0;
    border-bottom-right-radius: 0;
}

.input-group>.input-group-append:not(:last-child)>.input-group-text,
.input-group>.input-group-append:last-child>.btn:not(:last-child):not(.dropdown-toggle) {
    border-top-right-radius: 0;
    border-bottom-right-radius: 0;
}

.sp-container .input-group>.input-group-append:last-child>button:not(:last-child):not(.dropdown-toggle) {
    border-top-right-radius: 0;
    border-bottom-right-radius: 0;
}

.input-group>.input-group-append:last-child>.input-group-text:not(:last-child) {
    border-top-right-radius: 0;
    border-bottom-right-radius: 0;
}

.input-group>.input-group-append>.btn {
    border-top-left-radius: 0;
    border-bottom-left-radius: 0;
}

.sp-container .input-group>.input-group-append>button {
    border-top-left-radius: 0;
    border-bottom-left-radius: 0;
}

.input-group>.input-group-append>.input-group-text,
.input-group>.input-group-prepend:not(:first-child)>.btn {
    border-top-left-radius: 0;
    border-bottom-left-radius: 0;
}

.sp-container .input-group>.input-group-prepend:not(:first-child)>button {
    border-top-left-radius: 0;
    border-bottom-left-radius: 0;
}

.input-group>.input-group-prepend:not(:first-child)>.input-group-text,
.input-group>.input-group-prepend:first-child>.btn:not(:first-child) {
    border-top-left-radius: 0;
    border-bottom-left-radius: 0;
}

.sp-container .input-group>.input-group-prepend:first-child>button:not(:first-child),
.input-group>.input-group-prepend:first-child>.input-group-text:not(:first-child) {
    border-top-left-radius: 0;
    border-bottom-left-radius: 0;
}

/* ###### Input-group ###### */
/* ###### Modal ###### */
.modal.animated .modal-dialog {
    transform: translate(0, 0);
}

.modal.effect-scale .modal-dialog {
    transform: scale(0.7);
    opacity: 0;
    transition: all 0.3s;
}

.modal.effect-scale.show .modal-dialog {
    transform: scale(1);
    opacity: 1;
}

.modal.effect-slide-in-right .modal-dialog {
    transform: translateX(20%);
    opacity: 0;
    transition: all 0.3s cubic-bezier(0.25, 0.5, 0.5, 0.9);
}

.modal.effect-slide-in-right.show .modal-dialog {
    transform: translateX(0);
    opacity: 1;
}

.modal.effect-slide-in-bottom .modal-dialog {
    transform: translateY(20%);
    opacity: 0;
    transition: all 0.3s;
}

.modal.effect-slide-in-bottom.show .modal-dialog {
    transform: translateY(0);
    opacity: 1;
}

.modal.effect-newspaper .modal-dialog {
    transform: scale(0) rotate(720deg);
    opacity: 0;
}

.modal.effect-newspaper.show~.modal-backdrop,
.modal.effect-newspaper .modal-dialog {
    transition: all 0.5s;
}

.modal.effect-newspaper.show .modal-dialog {
    transform: scale(1) rotate(0deg);
    opacity: 1;
}

.modal.effect-fall {
    -webkit-perspective: 1300px;
    -moz-perspective: 1300px;
    perspective: 1300px;
}

.modal.effect-fall .modal-dialog {
    -moz-transform-style: preserve-3d;
    transform-style: preserve-3d;
    transform: translateZ(600px) rotateX(20deg);
    opacity: 0;
}

.modal.effect-fall.show .modal-dialog {
    transition: all 0.3s ease-in;
    transform: translateZ(0px) rotateX(0deg);
    opacity: 1;
}

.modal.effect-flip-horizontal {
    perspective: 1300px;
}

.modal.effect-flip-horizontal .modal-dialog {
    -moz-transform-style: preserve-3d;
    transform-style: preserve-3d;
    transform: rotateY(-70deg);
    transition: all 0.3s;
    opacity: 0;
}

.modal.effect-flip-horizontal.show .modal-dialog {
    transform: rotateY(0deg);
    opacity: 1;
}

.modal.effect-flip-vertical {
    perspective: 1300px;
}

.modal.effect-flip-vertical .modal-dialog {
    -moz-transform-style: preserve-3d;
    transform-style: preserve-3d;
    transform: rotateX(-70deg);
    transition: all 0.3s;
    opacity: 0;
}

.modal.effect-flip-vertical.show .modal-dialog {
    transform: rotateX(0deg);
    opacity: 1;
}

.modal.effect-super-scaled .modal-dialog {
    transform: scale(2);
    opacity: 0;
    transition: all 0.3s;
}

.modal.effect-super-scaled.show .modal-dialog {
    transform: scale(1);
    opacity: 1;
}

.modal.effect-sign {
    perspective: 1300px;
}

.modal.effect-sign .modal-dialog {
    -moz-transform-style: preserve-3d;
    transform-style: preserve-3d;
    transform: rotateX(-60deg);
    transform-origin: 50% 0;
    opacity: 0;
    transition: all 0.3s;
}

.modal.effect-sign.show .modal-dialog {
    transform: rotateX(0deg);
    opacity: 1;
}

.modal.effect-rotate-bottom {
    perspective: 1300px;
}

.modal.effect-rotate-bottom .modal-dialog {
    -moz-transform-style: preserve-3d;
    transform-style: preserve-3d;
    transform: translateY(100%) rotateX(90deg);
    transform-origin: 0 100%;
    opacity: 0;
    transition: all 0.3s ease-out;
}

.modal.effect-rotate-bottom.show .modal-dialog {
    transform: translateY(0%) rotateX(0deg);
    opacity: 1;
}

.modal.effect-rotate-left {
    perspective: 1300px;
}

.modal.effect-rotate-left .modal-dialog {
    -moz-transform-style: preserve-3d;
    transform-style: preserve-3d;
    transform: translateZ(100px) translateX(-30%) rotateY(90deg);
    transform-origin: 0 100%;
    opacity: 0;
    transition: all 0.3s;
}

.modal.effect-rotate-left.show .modal-dialog {
    transform: translateZ(0px) translateX(0%) rotateY(0deg);
    opacity: 1;
}

.modal.effect-just-me .modal-dialog {
    transform: scale(0.8);
    opacity: 0;
    transition: all 0.3s;
}

.modal.effect-just-me .close {
    text-shadow: none;
    color: #ffffff;
}

.modal.effect-just-me .modal-header {
    background-color: transparent;
    border-bottom-color: rgba(255, 255, 255, 0.1);
}

.modal.effect-just-me .modal-header h6 {
    color: #ffffff;
    font-weight: 500;
}

.modal.effect-just-me .modal-content {
    background: #000000;
}

.modal.effect-just-me .modal-body {
    color: rgba(255, 255, 255, 0.8);
}

.modal.effect-just-me .modal-body h6 {
    color: #ffffff;
}

.modal.effect-just-me .modal-footer {
    background-color: transparent;
    border-top-color: rgba(255, 255, 255, 0.1);
}

.modal.effect-just-me.show~.modal-backdrop {
    opacity: .96;
}

.modal.effect-just-me.show .modal-dialog {
    transform: scale(1);
    opacity: 1;
}

.media {
    display: flex;
    align-items: flex-start;
}

.media-body {
    flex: 1;
}

.close {
    float: right;
    font-size: 1.3125rem;
    font-weight: 700;
    line-height: 1;
    color: #5c5e63;
    text-shadow: 0 1px 0 #ffffff;
}

.close:hover {
    color: #8f9cc0;
    text-decoration: none;
}

button.close {
    padding: 0;
    background-color: transparent;
    border: 0;
    appearance: none;
    outline: none;
}

a.close.disabled {
    pointer-events: none;
}

.modal-open {
    overflow: hidden;
}

.modal-open .select2-container--open {
    z-index: 9999;
}

.modal-open .modal {
    overflow-x: hidden;
    overflow-y: auto;
}

.modal {
    position: fixed;
    top: 0;
    left: 0;
    z-index: 9999;
    display: none;
    width: 100%;
    height: 100%;
    overflow: hidden;
    outline: 0;
}

.modal-dialog {
    position: relative;
    width: auto;
    margin: 0.5rem;
    pointer-events: none;
}

.modal.fade .modal-dialog {
    transition: transform 0.3s ease-out;
    transform: translate(0, -50px);
}

.modal.show .modal-dialog {
    transform: none;
}

@media (prefers-reduced-motion: reduce) {
    .modal.fade .modal-dialog {
        transition: none;
    }
}

.modal-dialog-scrollable {
    display: flex;
    max-height: calc(100% - 1rem);
}

.modal-dialog-scrollable .modal-content {
    max-height: calc(100vh - 1rem);
    overflow: hidden;
}

.modal-dialog-scrollable .modal-header,
.modal-dialog-scrollable .modal-footer {
    flex-shrink: 0;
}

.modal-dialog-scrollable .modal-body {
    overflow-y: auto;
}

.modal-dialog-centered {
    display: flex;
    align-items: center;
    min-height: calc(100% - 1rem);
}

.modal-dialog-centered::before {
    display: block;
    height: calc(100vh - 1rem);
    content: "";
}

.modal-dialog-centered.modal-dialog-scrollable {
    flex-direction: column;
    justify-content: center;
    height: 100%;
}

.modal-dialog-centered.modal-dialog-scrollable .modal-content {
    max-height: none;
}

.modal-dialog-centered.modal-dialog-scrollable::before {
    content: none;
}

.modal-backdrop {
    position: fixed;
    top: 0;
    left: 0;
    z-index: 999;
    width: 100vw;
    height: 100vh;
    background-color: #202029;
}

.modal-backdrop.fade {
    opacity: 0;
}

.modal-backdrop.show {
    opacity: 0.5;
    opacity: .8;
}

.modal-title {
    margin-bottom: 0;
    line-height: 1.5;
    font-size: 16px;
    font-weight: 700;
    color: #4a526f;
    line-height: 1;
}

.modal-body {
    position: relative;
    flex: 1 1 auto;
    padding: 1rem;
    padding: 25px;
}

.modal-footer {
    display: flex;
    align-items: center;
    justify-content: flex-end;
    padding: 1rem;
    border-top: 1px solid #e8e8f7;
    border-bottom-right-radius: 0.3rem;
    border-bottom-left-radius: 0.3rem;
}

.modal-footer> :not(:first-child) {
    margin-left: .25rem;
}

.modal-footer> :not(:last-child) {
    margin-right: .25rem;
}

.modal-scrollbar-measure {
    position: absolute;
    top: -9999px;
    width: 50px;
    height: 50px;
    overflow: scroll;
}

@media (min-width: 576px) {
    .modal-dialog {
        max-width: 500px;
        margin: 1.75rem auto;
    }

    .modal-dialog-scrollable {
        max-height: calc(100% - 3.5rem);
    }

    .modal-dialog-scrollable .modal-content {
        max-height: calc(100vh - 3.5rem);
    }

    .modal-dialog-centered {
        min-height: calc(100% - 3.5rem);
    }

    .modal-dialog-centered::before {
        height: calc(100vh - 3.5rem);
    }

    .modal-sm {
        max-width: 300px;
    }
}

@media (min-width: 992px) {

    .modal-lg,
    .modal-xl {
        max-width: 800px;
    }
}

@media (min-width: 1200px) {
    .modal-xl {
        max-width: 1140px;
    }
}

.modal-content-demo .modal-body h6 {
    color: #181c27;
    font-size: 15px;
    margin-bottom: 15px;
}

.modal-content-demo .modal-body p {
    margin-bottom: 0;
}

input[type="submit"].btn-block,
input[type="reset"].btn-block,
input[type="button"].btn-block {
    width: 100%;
}

.fade {
    transition: opacity 0.15s linear;
}

.fade:not(.show) {
    opacity: 0;
}

@media (prefers-reduced-motion: reduce) {
    .fade {
        transition: none;
    }
}

modal-backdrop {
    background-color: #0a0a0a;
}

.modal-content {
    border-radius: 11px;
    border-width: 0;
    position: relative;
    display: flex;
    flex-direction: column;
    width: 100%;
    pointer-events: auto;
    background-color: #ffffff;
    background-clip: padding-box;
    border: 1px solid #e8e8f7;
    border-radius: 0;
    outline: 0;
    box-shadow: 0 0 0 1px rgba(0, 0, 0, 0.12), 0 8px 16px 0 rgba(0, 0, 0, 0.24);
}

.modal-content .close {
    font-size: 28px;
    padding: 0;
    margin: 0;
    line-height: .5;
}

.modal-header {
    align-items: center;
    padding: 15px;
    display: flex;
    align-items: flex-start;
    justify-content: space-between;
    padding: 1rem 1rem;
    border-bottom: 1px solid #e8e8f7;
    border-top-left-radius: 0.3rem;
    border-top-right-radius: 0.3rem;
}

.modal-header .modal-title {
    margin-bottom: 0;
}

.modal-header .close {
    padding: 1rem 1rem;
    margin: -1rem -1rem -1rem auto;
}

@media (min-width: 576px) {
    .modal-header {
        padding: 15px 20px;
    }
}

@media (min-width: 992px) {
    .modal-header {
        padding: 20px;
    }
}

@media (min-width: 1200px) {
    .modal-header {
        padding: 20px 25px;
    }
}

/* ###### Modal ###### */
/* ###### Navigation   ###### */
.nav-link:hover,
.nav-link:focus,
.nav-link:active {
    outline: none;
}

.nav-pills .nav-link {
    color: #3c4858;
    border-radius: 3px;
}

.nav-pills .nav-link:hover,
.nav-pills .nav-link:focus {
    color: #8f9cc0;
}

.nav-pills .nav-link.active {
    border-radius: 6px;
    color: #ffffff;
}

.nav-pills .nav-link.active:hover,
.nav-pills .nav-link.active:focus {
    color: #ffffff;
}

.nav-dark .nav-link {
    color: #a8afc7;
}

.nav-dark .nav-link:hover,
.nav-dark .nav-link:focus {
    color: #ffffff;
}

@media (min-width: 768px) {
    .nav-tabs .nav-link {
        padding: 10px 20px;
    }
}

@media (min-width: 768px) {
    .main-nav {
        align-items: center;
    }
}

.main-nav .nav-link {
    display: block;
    color: #3c4858;
    padding: 0;
    position: relative;
    line-height: normal;
}

.main-nav .nav-link:hover,
.main-nav .nav-link:focus {
    color: #8f9cc0;
}

.main-nav .nav-link+.nav-link {
    padding-top: 12px;
    margin-top: 12px;
}

@media (min-width: 768px) {
    .main-nav .nav-link+.nav-link {
        padding-top: 0;
        margin-top: 0;
        border-top: 0;
        padding-left: 15px;
        margin-left: 15px;
    }
}

.main-nav-column {
    flex-direction: column;
}

.main-nav-column .nav-link {
    padding: 0;
    height: 38px;
    color: #737277;
    display: flex;
    align-items: center;
    justify-content: flex-start;
    font-size: 14px;
    font-weight: 500;
}

.main-nav-column .nav-link i {
    font-size: 16px;
    line-height: 0;
    width: 24px;
    margin-right: 12px;
    text-align: center;
    transition: all 0.2s ease-in-out;
    font-weight: 600;
    line-height: .9;
}

.main-nav-column .nav-link i:not([class*=' tx-']) {
    color: #737277;
    fill: #737277;
}

.main-nav-column .nav-link span {
    font-weight: 600;
    font-size: 16px;
    margin-left: auto;
}

.main-nav-column .nav-link:hover,
.main-nav-column .nav-link:focus,
.main-nav-column .nav-link:hover i:not([class*=' tx-']),
.main-nav-column .nav-link:focus i:not([class*=' tx-']) {
    color: #8f9cc0;
}

.main-nav-column .nav-link.active {
    position: relative;
}

.main-nav-column .nav-link.active::before {
    content: '';
    position: absolute;
    top: 6px;
    bottom: 6px;
    left: -28px;
    width: 3px;
    border-radius: 3px;
    display: none;
}

.main-nav-column.sm .nav-link {
    font-size: 0.875rem;
    font-weight: 400;
    padding: 10px 0;
}

.main-nav-column.sm .nav-link i {
    font-size: 21px;
}

@media (prefers-reduced-motion: reduce) {
    .main-nav-column .nav-link i {
        transition: none;
    }
}

.main-nav-dark .nav-link {
    color: rgba(255, 255, 255, 0.7);
}

.main-nav-dark .nav-link:hover,
.main-nav-dark .nav-link:focus {
    color: #ffffff;
}

.main-nav-dark .nav-link+.nav-link {
    border-color: #3c4858;
}

.main-nav-colored-bg .nav-link+.nav-link {
    border-color: rgba(255, 255, 255, 0.4);
}

.main-nav-colored-bg .nav-link.active {
    color: #ffffff;
}

.main-nav-line {
    position: relative;
}

.main-nav-line .nav-link {
    padding: 0;
    color: #3c4858;
    position: relative;
}

.main-nav-line .nav-link+.nav-link {
    margin-top: 15px;
}

.main-nav-line .nav-link.active {
    color: #8f9cc0;
}

.main-nav-line.main-nav-dark .nav-link {
    color: rgba(255, 255, 255, 0.7);
}

.main-nav-line.main-nav-dark .nav-link:hover,
.main-nav-line.main-nav-dark .nav-link:focus {
    color: #ffffff;
}

.main-nav-line.main-nav-dark .nav-link.active {
    color: #ffffff;
}

.main-nav-line.main-nav-dark .nav-link.active::before {
    background-color: #ffffff;
}

@media (min-width: 769px) {
    .main-nav-line .nav-link+.nav-link {
        margin-top: 0;
        margin-left: 30px;
    }
}

@media (max-width: 768px) {
    .main-nav-line .nav-link+.nav-link {
        margin-top: 10px;
        margin-left: 0;
    }
}

@media (min-width: 768px) {
    .main-nav-line .nav-link.active::before {
        top: auto;
        bottom: -18px;
        left: 0;
        right: 0;
        height: 2px;
        width: auto;
    }
}

.main-nav-column .nav-link:hover,
.main-nav-column .nav-link:focus,
.main-nav-column .nav-link:hover i:not([class*=' tx-']),
.main-nav-column .nav-link:focus i:not([class*=' tx-']) {
    color: #646569;
}

/* ###### Navigation   ###### */
/* ###### Pagination  ###### */
.pagination {
    display: flex;
    padding-left: 0;
    list-style: none;
}

.page-link {
    position: relative;
    margin-left: -1px;
    line-height: 1.25;
    background-color: #ffffff;
    border: 1px solid #e8e8f7;
    color: #71719a;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: .5rem .75rem;
    font-weight: 400;
}

.page-link:hover {
    z-index: 2;
    text-decoration: none;
    background-color: #ecedef;
    border-color: #ecedef;
    background-color: #ecedef;
    box-shadow: none;
}

.page-link:focus {
    z-index: 2;
    outline: 0;
    box-shadow: 0 0 0 0.2rem rgba(135, 96, 251, 0.25);
    background-color: #ecedef;
    box-shadow: none;
}

.page-link i {
    font-size: 18px;
    line-height: 0;
}

.page-item.active .page-link {
    color: #ffffff;
}

.page-item.disabled .page-link {
    color: #a8afc7;
    pointer-events: none;
    cursor: auto;
    background-color: #ffffff;
    border-color: #ecedef;
}

.pagination-lg .page-link {
    padding: 0.75rem 1.5rem;
    font-size: 1.09375rem;
    line-height: 1.5;
}

.pagination-sm .page-link {
    padding: 0.25rem 0.5rem;
    font-size: 0.76562rem;
    line-height: 1.5;
}

.page-item:first-child .page-link {
    border-radius: 6px 0 0 6px;
}

.page-item:last-child .page-link {
    border-radius: 0 6px 6px 0;
}

.pagination-dark .page-item.active .page-link {
    color: #ffffff;
}

.pagination-dark .page-link {
    font-weight: 400;
    background-color: rgba(255, 255, 255, 0.05);
    color: rgba(255, 255, 255, 0.8);
}

.pagination-dark .page-link:hover,
.pagination-dark .page-link:focus {
    color: #ffffff;
    background-color: rgba(255, 255, 255, 0.08);
}

.pagination-success .page-item.active .page-link {
    background-color: #269c8e;
    border-color: #269c8e;
}

.pagination-circled .page-item+.page-item {
    margin-left: 5px;
}

.pagination-circled .page-item:first-child .page-link,
.pagination-circled .page-item:last-child .page-link {
    border-radius: 100%;
}

.pagination-circled .page-link {
    padding: 0;
    width: 40px;
    height: 40px;
    border-radius: 100%;
}

.pagination-circle {
    margin-top: 0;
    border-radius: 50px;
    background: #ecedef;
    padding: 7px;
}

.pagination-circle li a,
.pagination-circle li span {
    padding: 0;
    border-radius: 50px !important;
    border: none;
    margin: 0 3px;
    min-width: 32px;
    height: 32px;
    width: 32px;
    line-height: 31px;
    text-align: center;
    font-size: 14px;
    border: 0;
    background: #ffffff;
}

.pagination-radius {
    margin-top: 0;
    border-radius: 6px;
    padding: 6px;
}

.pagination-radius>li {
    display: inline;
}

.pagination-radius li a,
.pagination-radius li span {
    padding: 0;
    border-radius: 11px !important;
    border: none;
    margin: 0;
    min-width: 31px;
    height: 31px;
    width: 31px;
    line-height: 31px;
    text-align: center;
    font-size: 14px;
    border: 1px solid #dee4f5;
    margin-left: 4px;
    background: #ffffff;
}

.pagination-radius .page-link i {
    font-size: 11px;
    line-height: 0;
}

.pagination-circle .page-link i {
    font-size: 11px;
    line-height: 0;
}

/* ###### Pagination  ###### */
/* ###### Popover  ###### */
.popover {
    font-size: 12px;
    padding: 0;
    border-radius: 0;
    position: absolute;
    top: 0;
    left: 0;
    z-index: 1060;
    display: block;
    max-width: 276px;
    font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
    font-style: normal;
    font-weight: 400;
    line-height: 1.5;
    text-align: left;
    text-align: start;
    text-decoration: none;
    text-shadow: none;
    text-transform: none;
    letter-spacing: normal;
    word-break: normal;
    word-spacing: normal;
    white-space: normal;
    line-break: auto;
    font-size: 0.76562rem;
    word-wrap: break-word;
    background-color: #ffffff;
    background-clip: padding-box;
    border: 1px solid transparent;
    border-radius: 11px;
}

.popover.show {
    box-shadow: -8px 12px 18px 0 rgba(21, 21, 62, 0.3);
}

.popover .arrow {
    position: absolute;
    display: block;
    width: 1rem;
    height: 0.5rem;
    margin: 0 0.3rem;
}

.popover .arrow::before,
.popover .arrow::after {
    position: absolute;
    display: block;
    content: "";
    border-color: transparent;
    border-style: solid;
}

.popover-header {
    text-transform: uppercase;
    font-size: 12px;
    font-weight: 600;
    letter-spacing: 0.5px;
    padding: 12px 15px;
    border-top-left-radius: 0;
    border-top-right-radius: 0;
    padding: 0.5rem 0.75rem;
    margin-bottom: 0;
    font-size: 0.875rem;
    background-color: #f7f7f7;
    border-bottom: 1px solid #ebebeb;
    border-top-left-radius: 11px;
    border-top-right-radius: 11px;
}

.popover-header::before {
    display: none !important;
}

.popover-header:empty {
    display: none;
}

.popover-body {
    padding: 15px;
    padding: 0.5rem 0.75rem;
    color: #8f9cc0;
}

.popover-body p:last-child {
    margin-bottom: 0;
}

.popover-head-primary .popover-header {
    color: #ffffff;
}

.popover-head-primary.bs-popover-top .arrow,
.popover-head-primary.bs-popover-auto[x-placement^="top"] .arrow {
    bottom: -7px;
}

.popover-head-primary.bs-popover-left .arrow,
.popover-head-primary.bs-popover-auto[x-placement^="left"] .arrow {
    right: -7px;
}

.popover-head-primary.bs-popover-right .arrow,
.popover-head-primary.bs-popover-auto[x-placement^="right"] .arrow {
    left: -7px;
}

.popover-head-secondary .popover-header {
    color: #ffffff;
    background-color: #e54d26;
}

.popover-head-secondary.bs-popover-top .arrow,
.popover-head-secondary.bs-popover-auto[x-placement^="top"] .arrow {
    bottom: -7px;
}

.popover-head-secondary.bs-popover-left .arrow,
.popover-head-secondary.bs-popover-auto[x-placement^="left"] .arrow {
    right: -7px;
}

.popover-head-secondary.bs-popover-right .arrow,
.popover-head-secondary.bs-popover-auto[x-placement^="right"] .arrow {
    left: -7px;
}

.popover-head-secondary.bs-popover-bottom .arrow::after,
.popover-head-secondary.bs-popover-auto[x-placement^="bottom"] .arrow::after {
    border-bottom-color: #e54d26;
}

.popover-head-primary,
.popover-head-secondary {
    border: 0;
}

.popover-head-primary .popover-header,
.popover-head-secondary .popover-header {
    border: 0;
}

.popover-head-primary .popover-body,
.popover-head-secondary .popover-body {
    border: 1px solid rgba(28, 39, 60, 0.2);
    border-top-width: 0;
    border-bottom-right-radius: 2px;
    border-bottom-left-radius: 2px;
}

.popover-head-primary.bs-popover-bottom .arrow::before,
.popover-head-primary.bs-popover-auto[x-placement^="bottom"] .arrow::before {
    display: none;
}

.popover-head-secondary.bs-popover-bottom .arrow::before,
.popover-head-secondary.bs-popover-auto[x-placement^="bottom"] .arrow::before {
    display: none;
}

.popover-primary {
    border-width: 0;
    padding: 15px;
}

.popover-primary .popover-header {
    background-color: transparent;
    border-bottom-width: 0;
    padding: 0 0 15px;
    color: #ffffff;
}

.popover-primary .popover-body {
    padding: 0;
    color: rgba(255, 255, 255, 0.75);
}

.popover-primary .arrow::before {
    display: none;
}

.popover-secondary {
    background-color: #e54d26;
    border-width: 0;
    padding: 15px;
}

.popover-secondary .popover-header {
    background-color: transparent;
    border-bottom-width: 0;
    padding: 0 0 15px;
    color: #ffffff;
}

.popover-secondary .popover-body {
    padding: 0;
    color: rgba(255, 255, 255, 0.75);
}

.popover-secondary .arrow::before {
    display: none;
}

.popover-secondary.bs-popover-top .arrow::after,
.popover-secondary.bs-popover-auto[x-placement^="top"] .arrow::after {
    border-top-color: #e54d26;
}

.popover-secondary.bs-popover-bottom .arrow::after,
.popover-secondary.bs-popover-auto[x-placement^="bottom"] .arrow::after {
    border-bottom-color: #e54d26;
}

.popover-secondary.bs-popover-left .arrow::after,
.popover-secondary.bs-popover-auto[x-placement^="left"] .arrow::after {
    border-left-color: #e54d26;
}

.popover-secondary.bs-popover-right .arrow::after,
.popover-secondary.bs-popover-auto[x-placement^="right"] .arrow::after {
    border-right-color: #e54d26;
}

.popover-static-demo {
    background-color: #ecedef;
    padding-top: 40px;
    padding-bottom: 40px;
    text-align: center;
}

.popover-static-demo .popover {
    z-index: 0;
    opacity: 1;
    position: relative;
    display: inline-block;
    margin: 0 10px;
}

.popover-static-demo .bs-popover-top .arrow,
.popover-static-demo .bs-popover-auto[x-placement^="top"] .arrow,
.popover-static-demo .bs-popover-bottom .arrow,
.popover-static-demo .bs-popover-auto[x-placement^="bottom"] .arrow {
    left: 50%;
    margin-left: -5px;
}

.popover-static-demo .bs-popover-left,
.popover-static-demo .bs-popover-auto[x-placement^="left"],
.popover-static-demo .bs-popover-right,
.popover-static-demo .bs-popover-auto[x-placement^="right"] {
    margin-top: 5px;
}

.popover-static-demo .bs-popover-left .arrow,
.popover-static-demo .bs-popover-auto[x-placement^="left"] .arrow,
.popover-static-demo .bs-popover-right .arrow,
.popover-static-demo .bs-popover-auto[x-placement^="right"] .arrow {
    top: 50%;
    margin-top: -5px;
}

.bs-popover-top,
.bs-popover-auto[x-placement^="top"] {
    margin-bottom: 0.5rem;
}

.bs-popover-top>.arrow,
.bs-popover-auto[x-placement^="top"]>.arrow {
    bottom: calc((0.5rem + 1px) * -1);
}

.bs-popover-top>.arrow::before,
.bs-popover-auto[x-placement^="top"]>.arrow::before {
    bottom: 0;
    border-width: 0.5rem 0.5rem 0;
    border-top-color: #ecedef;
}

.bs-popover-top>.arrow::after,
.bs-popover-auto[x-placement^="top"]>.arrow::after {
    bottom: 1px;
    border-width: 0.5rem 0.5rem 0;
    border-top-color: #ffffff;
}

.bs-popover-right,
.bs-popover-auto[x-placement^="right"] {
    margin-left: 0.5rem;
}

.bs-popover-right>.arrow,
.bs-popover-auto[x-placement^="right"]>.arrow {
    left: calc((0.5rem + 1px) * -1);
    width: 0.5rem;
    height: 1rem;
    margin: 0.3rem 0;
}

.bs-popover-right>.arrow::before,
.bs-popover-auto[x-placement^="right"]>.arrow::before {
    left: 0;
    border-width: 0.5rem 0.5rem 0.5rem 0;
    border-right-color: #ecedef;
}

.bs-popover-right>.arrow::after,
.bs-popover-auto[x-placement^="right"]>.arrow::after {
    left: 1px;
    border-width: 0.5rem 0.5rem 0.5rem 0;
    border-right-color: #ffffff;
}

.bs-popover-bottom,
.bs-popover-auto[x-placement^="bottom"] {
    margin-top: 0.5rem;
}

.bs-popover-bottom>.arrow,
.bs-popover-auto[x-placement^="bottom"]>.arrow {
    top: calc((0.5rem + 1px) * -1);
}

.bs-popover-bottom>.arrow::before,
.bs-popover-auto[x-placement^="bottom"]>.arrow::before {
    top: 0;
    border-width: 0 0.5rem 0.5rem 0.5rem;
    border-bottom-color: #ecedef;
}

.bs-popover-bottom>.arrow::after,
.bs-popover-auto[x-placement^="bottom"]>.arrow::after {
    top: 1px;
    border-width: 0 0.5rem 0.5rem 0.5rem;
    border-bottom-color: #ffffff;
}

.bs-popover-bottom .popover-header::before,
.bs-popover-auto[x-placement^="bottom"] .popover-header::before {
    position: absolute;
    top: 0;
    left: 50%;
    display: block;
    width: 1rem;
    margin-left: -0.5rem;
    content: "";
    border-bottom: 1px solid #f7f7f7;
}

.bs-popover-left,
.bs-popover-auto[x-placement^="left"] {
    margin-right: 0.5rem;
}

.bs-popover-left>.arrow,
.bs-popover-auto[x-placement^="left"]>.arrow {
    right: calc((0.5rem + 1px) * -1);
    width: 0.5rem;
    height: 1rem;
    margin: 0.3rem 0;
}

.bs-popover-left>.arrow::before,
.bs-popover-auto[x-placement^="left"]>.arrow::before {
    right: 0;
    border-width: 0.5rem 0 0.5rem 0.5rem;
    border-left-color: #ecedef;
}

.bs-popover-left>.arrow::after,
.bs-popover-auto[x-placement^="left"]>.arrow::after {
    right: 1px;
    border-width: 0.5rem 0 0.5rem 0.5rem;
    border-left-color: #ffffff;
}

/* ###### Popover  ###### */
/* ###### Progress ###### */
.progress {
    height: auto;
    border-radius: 10px;
    display: flex;
    height: 10px;
    overflow: hidden;
    font-size: 0.65625rem;
    background-color: #ecedef;
    border-radius: 3px;
}

.progress-bar {
    border-radius: 10px;
    font-size: 11px;
    height: 10px;
    display: flex;
    flex-direction: column;
    justify-content: center;
    color: #ffffff;
    text-align: center;
    white-space: nowrap;
    transition: width 0.6s ease;
}

.progress-bar-xs {
    height: 5px;
}

.progress-bar-sm {
    height: 8px;
}

.progress-bar-lg {
    height: 15px;
}

@keyframes progress-bar-stripes {
    from {
        background-position: 1rem 0;
    }

    to {
        background-position: 0 0;
    }
}

@media (prefers-reduced-motion: reduce) {
    .progress-bar {
        transition: none;
    }
}

.progress-bar-striped {
    background-image: linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
    background-size: 1rem 1rem;
}

.progress-bar-animated {
    animation: progress-bar-stripes 1s linear infinite;
}

@media (prefers-reduced-motion: reduce) {
    .progress-bar-animated {
        animation: none;
    }
}

/* ###### Progress ###### */
/* ###### Table  ###### */
.table {
    width: 100%;
    margin-bottom: 1rem;
    color: #181c27;
}

.table th,
.table td {
    padding: 0.75rem;
    vertical-align: middle;
    padding: 9px 15px;
    line-height: 1.462;
}

.table th:first-child,
.table td:first-child {
    padding: 11px 40px 11px 40px;
}

.table th:last-child,
.table td:last-child {
    padding: 11px 40px 11px 40px;
}

.table thead th {
    vertical-align: bottom;
    border-bottom: 1px solid #e8e8f7;
    border-top: 0px solid #e8e8f7;
}

.table tbody+tbody {
    border-top: 1px solid #e8e8f7;
}

.table-sm th,
.table-sm td {
    padding: 0.3rem;
}

.table-bordered {
    border: 1px solid #e8e8f7;
}

.table-bordered th,
.table-bordered td {
    border: 1px solid #e8e8f7;
}

.table-bordered thead th,
.table-bordered thead td {
    border-bottom-width: 2px;
    border-top-width: 1px;
    padding-top: 0.75rem;
    padding-bottom: 0.75rem;
}

.table-borderless th,
.table-borderless td,
.table-borderless thead th,
.table-borderless tbody+tbody {
    border: 0;
}

.table-striped tbody tr:nth-of-type(odd) {
    background-color: rgba(0, 0, 0, 0.05);
}

.table-hover tbody tr:hover {
    background-color: #f8f8ff;
}

.table-primary {
    background-color: #c6d4ff;
}

.table-primary>th,
.table-primary>td {
    background-color: #c6d4ff;
}

.table-primary th,
.table-primary td,
.table-primary thead th,
.table-primary tbody+tbody {
    border-color: #95afff;
}

.table-hover .table-primary:hover {
    background-color: #adc1ff;
}

.table-hover .table-primary:hover>td,
.table-hover .table-primary:hover>th {
    background-color: #adc1ff;
}

.table-secondary {
    background-color: #d9dde5;
}

.table-secondary>th,
.table-secondary>td {
    background-color: #d9dde5;
}

.table-secondary th,
.table-secondary td,
.table-secondary thead th,
.table-secondary tbody+tbody {
    border-color: #b9c1ce;
}

.table-hover .table-secondary:hover {
    background-color: #cacfdb;
}

.table-hover .table-secondary:hover>td,
.table-hover .table-secondary:hover>th {
    background-color: #cacfdb;
}

.table-success {
    background-color: #c8e9b8;
}

.table-success>th,
.table-success>td {
    background-color: #c8e9b8;
}

.table-success th,
.table-success td,
.table-success thead th,
.table-success tbody+tbody {
    border-color: #99d67b;
}

.table-hover .table-success:hover {
    background-color: #b9e3a5;
}

.table-hover .table-success:hover>td,
.table-hover .table-success:hover>th {
    background-color: #b9e3a5;
}

.table-info {
    background-color: #bee5eb;
}

.table-info>th,
.table-info>td {
    background-color: #bee5eb;
}

.table-info th,
.table-info td,
.table-info thead th,
.table-info tbody+tbody {
    border-color: #86cfda;
}

.table-hover .table-info:hover {
    background-color: #abdde5;
}

.table-hover .table-info:hover>td,
.table-hover .table-info:hover>th {
    background-color: #abdde5;
}

.table-warning {
    background-color: #ffeeba;
}

.table-warning>th,
.table-warning>td {
    background-color: #ffeeba;
}

.table-warning th,
.table-warning td,
.table-warning thead th,
.table-warning tbody+tbody {
    border-color: #ffdf7e;
}

.table-hover .table-warning:hover {
    background-color: #ffe8a1;
}

.table-hover .table-warning:hover>td,
.table-hover .table-warning:hover>th {
    background-color: #ffe8a1;
}

.table-danger {
    background-color: #f5c6cb;
}

.table-danger>th,
.table-danger>td {
    background-color: #f5c6cb;
}

.table-danger th,
.table-danger td,
.table-danger thead th,
.table-danger tbody+tbody {
    border-color: #ed969e;
}

.table-hover .table-danger:hover {
    background-color: #f1b0b7;
}

.table-hover .table-danger:hover>td,
.table-hover .table-danger:hover>th {
    background-color: #f1b0b7;
}

.table-light {
    background-color: #fcfcfd;
}

.table-light>th,
.table-light>td {
    background-color: #fcfcfd;
}

.table-light th,
.table-light td,
.table-light thead th,
.table-light tbody+tbody {
    border-color: #f9fafb;
}

.table-hover .table-light:hover {
    background-color: #ededf3;
}

.table-hover .table-light:hover>td,
.table-hover .table-light:hover>th {
    background-color: #ededf3;
}

.table-dark {
    color: #ffffff;
    background-color: #2e3649;
}

.table-dark>th,
.table-dark>td {
    background-color: #c8ccd3;
}

.table-dark th,
.table-dark td,
.table-dark thead th,
.table-dark tbody+tbody {
    border-color: #99a0ae;
}

.table-dark th,
.table-dark td,
.table-dark thead th {
    border-color: #49597b;
}

.table-dark.table-bordered {
    border: 0;
}

.table-dark.table-striped tbody tr:nth-of-type(odd) {
    background-color: rgba(255, 255, 255, 0.05);
}

.table-dark.table-hover tbody tr:hover {
    color: #ffffff;
    background-color: rgba(255, 255, 255, 0.075);
}

.table-hover .table-dark:hover {
    background-color: #babfc8;
}

.table-hover .table-dark:hover>td,
.table-hover .table-dark:hover>th {
    background-color: #babfc8;
}

.table-active {
    background-color: rgba(0, 0, 0, 0.075);
}

.table-active>th,
.table-active>td {
    background-color: rgba(0, 0, 0, 0.075);
}

.table-hover .table-active:hover {
    background-color: rgba(0, 0, 0, 0.075);
}

.table-hover .table-active:hover>td,
.table-hover .table-active:hover>th {
    background-color: rgba(0, 0, 0, 0.075);
}

.table .thead-dark th {
    color: #ffffff;
    background-color: #2e3649;
    border-color: #49597b;
}

.table .thead-light th {
    color: #3c4858;
    background-color: #ecedef;
    border-color: #ecedef;
}

@media (max-width: 575.98px) {
    .table-responsive-sm {
        display: block;
        width: 100%;
        overflow-x: scroll;
        -webkit-overflow-scrolling: touch;
    }

    .table-responsive-sm>.table-bordered {
        border: 0;
    }
}

@media (max-width: 767.98px) {
    .table-responsive-md {
        display: block;
        width: 100%;
        overflow-x: a;
        -webkit-overflow-scrolling: touch;
    }

    .table-responsive-md>.table-bordered {
        border: 0;
    }
}

@media (max-width: 991.98px) {
    .table-responsive-lg {
        display: block;
        width: 100%;
        overflow-x: scroll;
        -webkit-overflow-scrolling: touch;
    }

    .table-responsive-lg>.table-bordered {
        border: 0;
    }
}

@media (max-width: 1199.98px) {
    .table-responsive-xl {
        display: block;
        width: 100%;
        overflow-x: scroll;
        -webkit-overflow-scrolling: touch;
    }

    .table-responsive-xl>.table-bordered {
        border: 0;
    }
}

.table-responsive {
    display: block;
    width: 100%;
    overflow-x: auto;
    -webkit-overflow-scrolling: touch;
}

.table-responsive>.table-bordered {
    border: 0;
}

.table thead th,
.table thead td {
    color: #3c4858;
    font-weight: 700;
    font-size: 13px;
    letter-spacing: .5px;
    text-transform: uppercase;
    border-bottom-width: 1px;
    border-top-width: 0;
    padding: 11px;
}

.table tbody tr {
    background-color: rgba(255, 255, 255, 0.5);
}

.table tbody tr th {
    font-weight: 500;
}

.table-striped tbody tr:nth-of-type(2n+1) {
    background-color: #ecedef !important;
}

.table td,
.table th {
    border-top: 0;
}

.table-invoice.table thead th {
    border-top: 1px solid #e8e8f7;
}

.table-bordered.table thead th {
    border-top: 1px solid #e8e8f7;
}

/* ###### Table  ###### */
/* ###### 4.1 Datatables ###### */
table.dataTable {
    border: 1px solid #e8e8f7;
}

table.dataTable.no-footer {
    border-bottom-color: #ecedef;
}

table.dataTable thead th,
table.dataTable thead td {
    border-top-width: 0;
    border-bottom-width: 0;
    padding: 8px 10px;
    font-weight: 700;
    font-size: 12px;
    color: #434b63;
}

.dataTables_wrapper .dataTables_filter input {
    margin-left: 0;
    border: 1px solid #e8e8f7;
}

.dataTables_wrapper .dataTables_paginate .paginate_button.current {
    border: 0;
    background-image: none;
    color: #ffffff !important;
}

.dataTables_wrapper .dataTables_paginate .paginate_button.current:hover,
.dataTables_wrapper .dataTables_paginate .paginate_button.current:focus {
    border: 0;
    background-image: none;
    color: #ffffff !important;
}

.table.dataTable tr {
    border: 1px solid #e8e8f7;
    white-space: nowrap;
}

.dataTables_info {
    margin-bottom: 1rem;
}

.table.dataTable th,
.table.dataTable td {
    border-left: 0px solid #e8e8f7;
    outline: none;
}

div.dataTables_wrapper div.dataTables_length select {
    margin-right: 10px;
}

/* ###### Toast ###### */
.toast {
    max-width: 350px;
    overflow: hidden;
    font-size: 0.875rem;
    background-color: rgba(255, 255, 255, 0.85);
    background-clip: padding-box;
    border: 1px solid rgba(0, 0, 0, 0.1);
    box-shadow: 0 0.25rem 0.75rem rgba(0, 0, 0, 0.1);
    backdrop-filter: blur(10px);
    opacity: 0;
    border-radius: 0.25rem;
    background-color: rgba(255, 255, 255, 0.95);
    border-color: #ecedef;
    box-shadow: 0 2px 3px rgba(28, 39, 60, 0.06);
    border-radius: 0px;
}

.toast:not(:last-child) {
    margin-bottom: 0.75rem;
}

.toast.showing {
    opacity: 1;
}

.toast.show {
    display: block;
    opacity: 1;
}

.toast.hide {
    display: none;
}

.toast-header {
    display: flex;
    align-items: center;
    padding: 0.25rem 0.75rem;
    background-color: rgba(255, 255, 255, 0.85);
    background-clip: padding-box;
    border-bottom: 1px solid rgba(0, 0, 0, 0.05);
    border-bottom-color: rgba(205, 212, 224, 0.4);
}

.toast-header .close {
    font-weight: 300;
    color: #a8afc7;
}

.toast-body {
    padding: 0.75rem;
}

.demo-static-toast .toast {
    opacity: 1;
}

/* ###### Toast ###### */
/* ###### Tooltip  ###### */
.tooltip {
    position: absolute;
    z-index: 1070;
    display: block;
    margin: 0;
    font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
    font-style: normal;
    font-weight: 400;
    line-height: 1.5;
    text-align: left;
    text-align: start;
    text-decoration: none;
    text-shadow: none;
    text-transform: none;
    letter-spacing: normal;
    word-break: normal;
    word-spacing: normal;
    white-space: normal;
    line-break: auto;
    font-size: 0.76562rem;
    word-wrap: break-word;
    opacity: 0;
    top: 0;
}

.tooltip.show {
    opacity: 0.9;
}

.tooltip .arrow {
    position: absolute;
    display: block;
    width: 0.8rem;
    height: 0.4rem;
}

.tooltip .arrow::before {
    position: absolute;
    content: "";
    border-color: transparent;
    border-style: solid;
}

.tooltip-inner {
    max-width: 200px;
    padding: 0.25rem 0.5rem;
    color: #ffffff;
    text-align: center;
    background-color: #000000;
    border-radius: 3px;
    font-size: 12px;
}

.tooltip-primary .tooltip-inner {
    background-color: #214fbe;
    color: #ffffff;
}

.tooltip-primary.bs-tooltip-top .arrow::before,
.tooltip-primary.bs-tooltip-auto[x-placement^="top"] .arrow::before {
    border-top-color: #214fbe;
}

.tooltip-primary.bs-tooltip-bottom .arrow::before,
.tooltip-primary.bs-tooltip-auto[x-placement^="bottom"] .arrow::before {
    border-bottom-color: #214fbe;
}

.tooltip-primary.bs-tooltip-left .arrow::before,
.tooltip-primary.bs-tooltip-auto[x-placement^="left"] .arrow::before {
    border-left-color: #214fbe;
}

.tooltip-primary.bs-tooltip-right .arrow::before,
.tooltip-primary.bs-tooltip-auto[x-placement^="right"] .arrow::before {
    border-right-color: #214fbe;
}

.tooltip-secondary .tooltip-inner {
    background-color: #e54d26;
    color: #ffffff;
}

.tooltip-secondary.bs-tooltip-top .arrow::before,
.tooltip-secondary.bs-tooltip-auto[x-placement^="top"] .arrow::before {
    border-top-color: #e54d26;
}

.tooltip-secondary.bs-tooltip-bottom .arrow::before,
.tooltip-secondary.bs-tooltip-auto[x-placement^="bottom"] .arrow::before {
    border-bottom-color: #e54d26;
}

.tooltip-secondary.bs-tooltip-left .arrow::before,
.tooltip-secondary.bs-tooltip-auto[x-placement^="left"] .arrow::before {
    border-left-color: #e54d26;
}

.tooltip-secondary.bs-tooltip-right .arrow::before,
.tooltip-secondary.bs-tooltip-auto[x-placement^="right"] .arrow::before {
    border-right-color: #e54d26;
}

.tooltip-info .tooltip-inner {
    background-color: #00aeff;
    color: #ffffff;
}

.tooltip-info.bs-tooltip-top .arrow::before,
.tooltip-info.bs-tooltip-auto[x-placement^="top"] .arrow::before {
    border-top-color: #00aeff;
}

.tooltip-info.bs-tooltip-bottom .arrow::before,
.tooltip-info.bs-tooltip-auto[x-placement^="bottom"] .arrow::before {
    border-bottom-color: #00aeff;
}

.tooltip-info.bs-tooltip-left .arrow::before,
.tooltip-info.bs-tooltip-auto[x-placement^="left"] .arrow::before {
    border-left-color: #00aeff;
}

.tooltip-info.bs-tooltip-right .arrow::before,
.tooltip-info.bs-tooltip-auto[x-placement^="right"] .arrow::before {
    border-right-color: #00aeff;
}

.tooltip-danger .tooltip-inner {
    background-color: #ff0000;
    color: #ffffff;
}

.tooltip-danger.bs-tooltip-top .arrow::before,
.tooltip-danger.bs-tooltip-auto[x-placement^="top"] .arrow::before {
    border-top-color: #ff0000;
}

.tooltip-danger.bs-tooltip-bottom .arrow::before,
.tooltip-danger.bs-tooltip-auto[x-placement^="bottom"] .arrow::before {
    border-bottom-color: #ff0000;
}

.tooltip-danger.bs-tooltip-left .arrow::before,
.tooltip-danger.bs-tooltip-auto[x-placement^="left"] .arrow::before {
    border-left-color: #ff0000;
}

.tooltip-danger.bs-tooltip-right .arrow::before,
.tooltip-danger.bs-tooltip-auto[x-placement^="right"] .arrow::before {
    border-right-color: #ff0000;
}

.tooltip-success .tooltip-inner {
    background-color: #269c8e;
    color: #ffffff;
}

.tooltip-success.bs-tooltip-top .arrow::before,
.tooltip-success.bs-tooltip-auto[x-placement^="top"] .arrow::before {
    border-top-color: #269c8e;
}

.tooltip-success.bs-tooltip-bottom .arrow::before,
.tooltip-success.bs-tooltip-auto[x-placement^="bottom"] .arrow::before {
    border-bottom-color: #269c8e;
}

.tooltip-success.bs-tooltip-left .arrow::before,
.tooltip-success.bs-tooltip-auto[x-placement^="left"] .arrow::before {
    border-left-color: #269c8e;
}

.tooltip-success.bs-tooltip-right .arrow::before,
.tooltip-success.bs-tooltip-auto[x-placement^="right"] .arrow::before {
    border-right-color: #269c8e;
}

.tooltip-warning .tooltip-inner {
    background-color: #ff9e01;
    color: #8f9cc0;
}

.tooltip-warning.bs-tooltip-top .arrow::before,
.tooltip-warning.bs-tooltip-auto[x-placement^="top"] .arrow::before {
    border-top-color: #ff9e01;
}

.tooltip-warning.bs-tooltip-bottom .arrow::before,
.tooltip-warning.bs-tooltip-auto[x-placement^="bottom"] .arrow::before {
    border-bottom-color: #ff9e01;
}

.tooltip-warning.bs-tooltip-left .arrow::before,
.tooltip-warning.bs-tooltip-auto[x-placement^="left"] .arrow::before {
    border-left-color: #ff9e01;
}

.tooltip-warning.bs-tooltip-right .arrow::before,
.tooltip-warning.bs-tooltip-auto[x-placement^="right"] .arrow::before {
    border-right-color: #ff9e01;
}

.bs-tooltip-top,
.bs-tooltip-auto[x-placement^="top"] {
    padding: 0.4rem 0;
}

.bs-tooltip-top .arrow,
.bs-tooltip-auto[x-placement^="top"] .arrow {
    bottom: 0;
}

.bs-tooltip-top .arrow::before,
.bs-tooltip-auto[x-placement^="top"] .arrow::before {
    top: 0;
    border-width: 0.4rem 0.4rem 0;
    border-top-color: #000000;
}

.bs-tooltip-right,
.bs-tooltip-auto[x-placement^="right"] {
    padding: 0 0.4rem;
}

.bs-tooltip-right .arrow,
.bs-tooltip-auto[x-placement^="right"] .arrow {
    left: 0;
    width: 0.4rem;
    height: 0.8rem;
}

.bs-tooltip-right .arrow::before,
.bs-tooltip-auto[x-placement^="right"] .arrow::before {
    right: 0;
    border-width: 0.4rem 0.4rem 0.4rem 0;
    border-right-color: #000000;
}

.bs-tooltip-bottom,
.bs-tooltip-auto[x-placement^="bottom"] {
    padding: 0.4rem 0;
}

.bs-tooltip-bottom .arrow,
.bs-tooltip-auto[x-placement^="bottom"] .arrow {
    top: 0;
}

.bs-tooltip-bottom .arrow::before,
.bs-tooltip-auto[x-placement^="bottom"] .arrow::before {
    bottom: 0;
    border-width: 0 0.4rem 0.4rem;
    border-bottom-color: #000000;
}

.bs-tooltip-left,
.bs-tooltip-auto[x-placement^="left"] {
    padding: 0 0.4rem;
}

.bs-tooltip-left .arrow,
.bs-tooltip-auto[x-placement^="left"] .arrow {
    right: 0;
    width: 0.4rem;
    height: 0.8rem;
}

.bs-tooltip-left .arrow::before,
.bs-tooltip-auto[x-placement^="left"] .arrow::before {
    left: 0;
    border-width: 0.4rem 0 0.4rem 0.4rem;
    border-left-color: #000000;
}

.tooltip-static-demo {
    text-align: center;
    background-color: #ecedef;
    padding: 20px;
}

.tooltip-static-demo .tooltip {
    z-index: 0;
    opacity: 1;
    position: relative;
    display: inline-block;
    margin: 0 10px;
}

.tooltip-static-demo .bs-tooltip-top .arrow,
.tooltip-static-demo .bs-tooltip-auto[x-placement^="top"] .arrow,
.tooltip-static-demo .bs-tooltip-bottom .arrow,
.tooltip-static-demo .bs-tooltip-auto[x-placement^="bottom"] .arrow {
    left: 50%;
    margin-left: -2px;
}

.tooltip-static-demo .bs-tooltip-left,
.tooltip-static-demo .bs-tooltip-auto[x-placement^="left"],
.tooltip-static-demo .bs-tooltip-right,
.tooltip-static-demo .bs-tooltip-auto[x-placement^="right"] {
    margin-top: 5px;
}

.tooltip-static-demo .bs-tooltip-left .arrow,
.tooltip-static-demo .bs-tooltip-auto[x-placement^="left"] .arrow,
.tooltip-static-demo .bs-tooltip-right .arrow,
.tooltip-static-demo .bs-tooltip-auto[x-placement^="right"] .arrow {
    top: 40%;
    margin-top: -3px;
}

/* ###### Tooltip  ###### */
/* ########## LAYOUTS  ########## */
/* ###### Main-content  ###### */
.main-content-dashboard-ten {
    padding: 0;
    min-height: 100vh;
    background-color: #ecedef;
}

.main-content-dashboard-ten .main-header {
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    background-color: #ffffff;
}

.main-content-dashboard-ten .main-header-center {
    margin-left: 0;
}

.main-content-dashboard-ten .main-content-body {
    margin-top: 64px;
}

.main-content-dashboard-ten .main-content-body-left {
    flex: 1;
    padding: 20px;
}

.main-content-dashboard-ten .main-content-body-right {
    background-color: #f8f9fa;
    padding: 20px;
    display: none;
}

.main-content-dashboard-ten .main-content-title {
    letter-spacing: -.8px;
}

.main-content-dashboard-ten .card {
    border-width: 0;
    box-shadow: 0 0 6px rgba(28, 39, 60, 0.12);
}

.main-content-dashboard-ten .main-footer {
    margin-top: auto;
}

@media (min-width: 992px) {
    .main-content-dashboard-ten {
        display: flex;
        flex-direction: column;
        justify-content: flex-start;
        margin-left: 64px;
    }
}

@media (min-width: 992px) {
    .main-content-dashboard-ten .main-header {
        left: 64px;
    }
}

@media (min-width: 992px) {
    .main-content-dashboard-ten .main-header .container-fluid {
        padding-left: 20px;
        padding-right: 20px;
    }
}

@media (min-width: 1200px) {
    .main-content-dashboard-ten .main-content-body {
        display: flex;
    }
}

@media (min-width: 1200px) {
    .main-content-dashboard-ten .main-content-body-right {
        display: block;
        width: 280px;
        box-shadow: 0 0 6px rgba(28, 39, 60, 0.1);
    }
}

@media (min-width: 1300px) {
    .main-content-dashboard-ten .main-content-body-right {
        width: 300px;
    }
}

.main-content.side-content {
    transition: none;
    border-radius: 0;
    padding: 0px;
    padding-bottom: 0;
    bottom: 0;
    position: relative;
    height: 100%;
}

.main-content .container,
.main-content .container-fluid {
    padding-left: 25px;
    padding-right: 25px;
}

@media (max-width: 575px) {
    .main-content-left-show {
        overflow: hidden;
    }
}

@media (max-width: 991.98px) {
    .main-content-left-show .main-content-left {
        display: block;
        position: fixed;
        top: 0;
        bottom: 0;
        left: 0;
        background-color: #ffffff;
        z-index: 800;
        border-right: 1px solid #e8e8f7;
        box-shadow: 0 0 3px rgba(28, 39, 60, 0.1);
        overflow-y: auto;
    }
}

@media (max-width: 575px) {
    .main-content-left-show .main-content-body {
        display: none;
    }
}

@media (max-width: 991.98px) {
    .main-content-body-show .main-header .main-header-menu-icon {
        display: none;
    }

    .main-content-body-show .main-header .main-header-left .main-header-arrow {
        display: block;
    }

    .main-content-body-show .main-content-left {
        display: none;
    }

    .main-content-body-show .main-content-body {
        display: block;
    }
}

@media (min-width: 992px) {
    .main-content .container {
        padding: 0;
    }
}

@media (max-width: 991.98px) {
    .main-content .container {
        max-width: none;
    }
}

.main-content-app {
    padding-top: 20px;
}

.main-content-app .container,
.main-content-app .container-fluid {
    height: 100%;
    padding: 0;
}

@media (min-width: 992px) {
    .main-content-app {
        height: calc(100vh - 104px);
        padding-top: 30px;
    }
}

.main-content-left {
    width: 100%;
    position: relative;
    padding: 0;
    flex-shrink: 0;
    display: none;
}

@media (min-width: 992px) {
    .main-content-left {
        display: block;
        padding: 0;
    }
}

.main-content-header {
    height: 60px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    margin-bottom: 20px;
}

.main-content-header .main-logo {
    flex: 1;
    text-align: center;
}

@media (min-width: 992px) {
    .main-content-header {
        display: none;
    }
}

.main-content-body {
    flex: 1;
}

.main-content-right {
    padding-left: 25px;
    margin-left: 25px;
    width: 200px;
    display: none;
}

@media (min-width: 992px) {
    .main-content-right {
        display: block;
    }
}

.main-content-label,
.card-table-two .card-title,
.card-dashboard-eight .card-title {
    color: #181c27;
    font-weight: 800;
    text-transform: uppercase;
    line-height: 1;
    margin-bottom: 10px;
    letter-spacing: .2px;
}

.main-content-label-sm {
    font-size: 16px;
    font-weight: 400;
    text-transform: uppercase;
    color: #cacaca;
    letter-spacing: .5px;
}

.main-content-text {
    font-size: 12px;
    line-height: 1.4;
    display: block;
    color: #a8afc7;
}

.main-content-choose-demo {
    position: relative;
    z-index: 5;
    background-color: #0f0373;
    color: rgba(255, 255, 255, 0.5);
    padding: 0;
}

.main-content-choose-demo .container {
    display: block;
    padding: 20px;
}

.main-content-choose-demo .title-label {
    text-transform: uppercase;
    letter-spacing: 1px;
    font-size: 10px;
    margin-bottom: 3px;
}

.main-content-choose-demo .title {
    font-size: 20px;
    font-weight: 400;
    color: #ffffff;
    letter-spacing: -.5px;
    margin-bottom: 10px;
}

.main-content-choose-demo .title-text {
    font-weight: 300;
    margin-bottom: 20px;
}

.main-content-choose-demo .card {
    border-width: 0;
    margin-bottom: 10px;
    height: 200px;
    overflow: hidden;
    position: relative;
}

.main-content-choose-demo .card img {
    transition: all 0.2s ease-in-out;
}

.main-content-choose-demo .card figure {
    margin-bottom: 0;
}

.main-content-choose-demo .card figure:hover img,
.main-content-choose-demo .card figure:focus img {
    transform: scale(1.75, 1.75);
}

.main-content-choose-demo .card figure:hover figcaption,
.main-content-choose-demo .card figure:focus figcaption {
    opacity: 1;
}

.main-content-choose-demo .card figcaption {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    display: flex;
    align-items: center;
    justify-content: center;
    background-color: rgba(25, 4, 190, 0.75);
    opacity: 0;
    transition: all 0.2s ease-in-out;
}

.main-content-choose-demo .card figcaption .btn,
.main-content-choose-demo .card figcaption .sp-container button {
    text-transform: uppercase;
    letter-spacing: 1.5px;
    font-size: 11px;
    font-weight: 500;
    min-height: inherit;
    padding: 10px 20px;
    border-radius: 2px;
}

@media (min-width: 576px) {
    .main-content-choose-demo .container {
        padding: 40px;
    }
}

@media (min-width: 992px) {
    .main-content-choose-demo .container {
        padding: 100px 40px;
    }
}

@media (min-width: 1200px) {
    .main-content-choose-demo .container {
        padding: 100px 0;
    }
}

@media (min-width: 768px) {
    .main-content-choose-demo .title-label {
        font-size: 11px;
    }
}

@media (min-width: 768px) {
    .main-content-choose-demo .title {
        font-size: 30px;
    }
}

@media (min-width: 576px) {
    .main-content-choose-demo .title-text {
        margin-bottom: 40px;
    }
}

@media (min-width: 768px) {
    .main-content-choose-demo .title-text {
        font-size: 16px;
    }
}

@media (min-width: 992px) {
    .main-content-choose-demo .title-text {
        margin-bottom: 60px;
    }
}

@media (min-width: 576px) {
    .main-content-choose-demo .card {
        height: 155px;
    }
}

@media (min-width: 768px) {
    .main-content-choose-demo .card {
        height: 215px;
        margin-bottom: 15px;
    }
}

@media (min-width: 1200px) {
    .main-content-choose-demo .card {
        height: 255px;
    }
}

@media (prefers-reduced-motion: reduce) {
    .main-content-choose-demo .card img {
        transition: none;
    }
}

@media (prefers-reduced-motion: reduce) {
    .main-content-choose-demo .card figcaption {
        transition: none;
    }
}

.sp-container .main-content-choose-demo .card figcaption button {
    text-transform: uppercase;
    letter-spacing: 1.5px;
    font-size: 11px;
    font-weight: 500;
    min-height: inherit;
    padding: 10px 20px;
    border-radius: 2px;
}

.main-content-choose-demo .card.coming-soon {
    display: flex;
    align-items: center;
    justify-content: center;
    color: #8f9cc0;
    background-color: #ecedef;
}

.main-content-choose-demo .card.coming-soon .typcn {
    line-height: .9;
    font-size: 48px;
    margin-bottom: 10px;
}

.main-content-choose-demo .card.coming-soon h6 {
    margin-bottom: 0;
    text-transform: uppercase;
    font-weight: 800;
    letter-spacing: 1px;
}

.main-content-choose-demo .main-content-label,
.main-content-choose-demo .card-table-two .card-title {
    color: #a8afc7;
    margin-bottom: 5px;
    letter-spacing: 1px;
}

.card-table-two .main-content-choose-demo .card-title,
.main-content-choose-demo .card-dashboard-eight .card-title,
.card-dashboard-eight .main-content-choose-demo .card-title {
    color: #a8afc7;
    margin-bottom: 5px;
    letter-spacing: 1px;
}

.main-content-choose-demo .main-content-title {
    font-size: 15px;
    font-weight: 400;
    margin-bottom: 0;
    color: #ffffff;
}

@media (min-width: 768px) {
    .main-content-choose-demo .main-content-title {
        font-size: 17px;
    }
}

@media (min-width: 992px) {
    .horizontal-header .main-header-left {
        background: transparent;
        height: auto;
        padding: 0;
    }
}

/* ###### Main-content  ###### */
/* ###### Main-header  ###### */
@media (max-width: 991.98px) {
    .main-header-menu-show {
        overflow: hidden;
    }

    .main-header-menu-show .main-header-menu {
        border-right: 1px solid rgba(28, 39, 60, 0.08);
        box-shadow: 0 0 30px rgba(28, 39, 60, 0.08);
        transform: translateX(0);
    }

    .main-header-menu-show .main-navbar-backdrop {
        visibility: visible;
        opacity: 1;
    }
}

.main-header {
    height: 60px;
    background-color: #ecedef;
    box-shadow: none;
    border-bottom: 1px solid #e8e8f7;
    z-index: 99;
    width: 100%;
    box-shadow: -7.829px 11.607px 20px 0px #e4e3f5;
}

.main-header>.container,
.main-header>.container-fluid {
    height: 100%;
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding-left: 20px;
    padding-right: 20px;
}

@media (min-width: 992px) {
    .main-body .main-header {
        position: fixed;
        height: 60px;
    }

    .main-header {
        position: relative;
        height: 65px;
    }
}

@media (min-width: 992px) {

    .main-header>.container,
    .main-header>.container-fluid {
        padding-left: 25px;
        padding-right: 15px;
    }
}

@media (min-width: 992px) {
    .main-header>.container {
        padding: 0;
    }
}

@media (max-width: 991.98px) {
    .main-header>.container {
        max-width: none;
    }
}

@media (min-width: 992px) {
    .main-header .main-header-left .main-logo {
        display: flex;
    }
}

.main-header-left .main-header-arrow {
    display: none;
    position: relative;
    top: -2px;
}

.main-logo {
    font-weight: 700;
    font-size: 28px;
    font-family: 'Poppins', sans-serif;
    text-transform: lowercase;
    letter-spacing: -1px;
    display: flex;
    align-items: left;
    position: relative;
    /* top: 10px; */
    margin: auto;
    justify-content: left;
}

.main-logo i {
    display: block;
    line-height: .9;
    margin-right: 8px;
    font-size: 40px;
}

.main-logo i::before {
    width: auto;
    height: auto;
}

.main-header-menu-icon {
    height: 30px;
    display: flex;
    align-items: center;
    background: #d5d9dc;
    margin: 0;
    padding: 10px;
    border-radius: 10px;
    height: 2.5rem;
    margin: 0 auto;
}

.main-header-menu-icon span {
    display: block;
    position: relative;
    width: 20px;
    height: 2px;
    background-color: #2f395f;
    border-radius: 3px;
    transition: all 0.2s ease-in-out;
}

.main-header-menu-icon span::before,
.main-header-menu-icon span::after {
    content: '';
    position: absolute;
    left: 0;
    width: 20px;
    height: 2px;
    background-color: #2f395f;
    border-radius: 3px;
    transition: all 0.2s ease-in-out;
}

.main-header-menu-icon span::before {
    top: -6px;
}

.main-header-menu-icon span::after {
    bottom: -6px;
}

@media (min-width: 992px) {
    .main-header-menu-icon {
        margin-right: 0px;
    }
}

@media (prefers-reduced-motion: reduce) {
    .main-header-menu-icon span {
        transition: none;
    }
}

@media (prefers-reduced-motion: reduce) {

    .main-header-menu-icon span::before,
    .main-header-menu-icon span::after {
        transition: none;
    }
}

.main-header-menu {
    position: fixed;
    top: 0;
    bottom: 0;
    left: 0;
    width: 240px;
    background-color: #ffffff;
    overflow-y: auto;
    z-index: 1000;
    transform: translateX(-240px);
    transition: all 0.35s;
}

.main-header-menu>.nav {
    flex-direction: column;
    padding: 20px;
}

.main-header-menu .nav-item::before {
    content: '';
    position: absolute;
    top: 67px;
    margin-left: 25px;
    width: 15px;
    height: 15px;
    border-top: 2px solid rgba(28, 39, 60, 0.12);
    border-left: 2px solid rgba(28, 39, 60, 0.12);
    background-color: #ffffff;
    transform: rotate(45deg);
    z-index: 100;
    display: none;
}

.main-header-menu .nav-item+.nav-item {
    margin-top: 10px;
}

.main-header-menu .nav-item>.nav-link {
    display: flex;
    align-items: center;
    position: relative;
    color: #8f9cc0;
    font-size: 15px;
    font-weight: 500;
    padding: 0;
    transition: all 0.2s ease-in-out;
}

.main-header-menu .nav-item>.nav-link.with-sub::after {
    content: '\f3d0';
    display: inline-block;
    font-family: 'Ionicons';
    font-size: 12px;
    font-weight: 400;
    margin-left: auto;
    margin-top: 3px;
    opacity: .5;
}

.main-header-menu .nav-item>.nav-link .typcn {
    font-size: 20px;
    line-height: .95;
    margin-right: 15px;
    width: 16px;
}

.main-header-menu .nav-item>.nav-link .typcn::before {
    width: auto;
}

.main-header-menu .nav-item.active>.nav-link {
    position: relative;
}

.main-header-menu .nav-item.active>.nav-link::before {
    content: '';
    position: absolute;
    bottom: 0;
    top: 0;
    left: -20px;
    width: 2px;
    border-radius: 3px;
}

.main-header-menu .nav-item.show .main-menu-sub {
    display: block;
}

@media (prefers-reduced-motion: reduce) {
    .main-header-menu {
        transition: none;
    }
}

@media (min-width: 992px) {
    .main-header-menu {
        background-color: transparent;
        border-right: 0;
        position: static;
        width: auto;
        overflow-y: visible;
        transform: none;
        z-index: auto;
    }
}

@media (min-width: 992px) {
    .main-header-menu>.nav {
        padding: 0;
        flex-direction: row;
        align-items: center;
    }
}

@media (min-width: 992px) {
    .main-header-menu .nav-item+.nav-item {
        margin-top: 0;
        margin-left: 30px;
    }
}

@media (prefers-reduced-motion: reduce) {
    .main-header-menu .nav-item>.nav-link {
        transition: none;
    }
}

@media (min-width: 992px) {
    .main-header-menu .nav-item>.nav-link {
        font-size: 0.875rem;
    }
}

@media (min-width: 992px) {
    .main-header-menu .nav-item>.nav-link.with-sub::after {
        margin-left: 5px;
    }
}

@media (min-width: 992px) {
    .main-header-menu .nav-item>.nav-link .typcn {
        font-size: 18px;
        margin-right: 7px;
    }
}

@media (min-width: 992px) {
    .main-header-menu .nav-item.active>.nav-link::before {
        top: auto;
        bottom: -22px;
        left: 0;
        right: 0;
        width: auto;
        height: 2px;
    }
}

@media (min-width: 992px) {
    .main-header-menu .nav-item.show::before {
        display: block;
    }
}

.main-header-menu-header {
    height: 60px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 0 20px;
    border-bottom: 1px solid rgba(28, 39, 60, 0.05);
}

.main-header-menu-header .close {
    font-weight: 300;
    font-size: 28px;
}

@media (min-width: 992px) {
    .main-header-menu-header {
        display: none;
    }
}

.main-menu-sub {
    font-size: 13px;
    margin-left: 32px;
    margin-top: 12px;
    display: none;
}

.main-menu-sub .nav {
    flex-direction: column;
}

.main-menu-sub .nav-link {
    padding: 0;
    display: block;
    color: #3c4858;
}

.main-menu-sub .nav-link+.nav-link {
    margin-top: 6px;
    padding-top: 6px;
    border-top: 1px dotted #ecedef;
}

.main-menu-sub .nav-link.active {
    font-weight: 500;
}

@media (min-width: 992px) {
    .main-menu-sub {
        position: absolute;
        top: 74px;
        background-color: #ffffff;
        padding: 15px 20px;
        border: 2px solid rgba(28, 39, 60, 0.12);
        min-width: 200px;
        margin-left: 0;
        margin-top: 0;
    }
}

@media (min-width: 992px) {
    .main-menu-sub .nav-link.active {
        font-weight: 400;
    }
}

.main-menu-sub-mega {
    left: 0;
    right: 0;
    background-color: transparent;
    padding: 0;
    border: 0;
}

.main-menu-sub-mega .container {
    padding: 0;
}

.main-menu-sub-mega .container>div+div {
    margin-top: 25px;
}

.main-menu-sub-mega .nav {
    min-width: 120px;
    flex-direction: column;
}

.main-menu-sub-mega .nav+.nav {
    border-top: 1px dotted #ecedef;
    margin-top: 6px;
    padding-top: 6px;
}

.main-menu-sub-mega .mega-subtitle {
    display: block;
    text-transform: uppercase;
    font-size: 10px;
    font-weight: 700;
    color: #8f9cc0;
    letter-spacing: .5px;
    margin-bottom: 15px;
    margin-top: 30px;
}

.main-menu-sub-mega .nav>span:first-of-type {
    margin-top: 0;
}

@media (max-width: 991.98px) {
    .main-menu-sub-mega .container {
        max-width: none;
    }
}

@media (min-width: 992px) {
    .main-menu-sub-mega .container {
        display: flex;
        background-color: #ffffff;
        border: 2px solid rgba(28, 39, 60, 0.12);
    }
}

@media (min-width: 992px) {
    .main-menu-sub-mega .container>div {
        display: flex;
        padding: 20px;
        flex: 1;
        margin-top: 0;
    }
}

@media (min-width: 1200px) {
    .main-menu-sub-mega .container>div {
        padding: 20px 25px;
    }
}

@media (min-width: 992px) {
    .main-menu-sub-mega .container>div+div {
        margin-top: 0;
        border-left: 1px solid rgba(28, 39, 60, 0.05);
    }
}

@media (min-width: 1200px) {
    .main-menu-sub-mega .nav {
        min-width: 140px;
    }
}

@media (min-width: 992px) {
    .main-menu-sub-mega .nav+.nav {
        margin-left: 20px;
        margin-top: 31px;
        padding-top: 0;
        border-top: 0;
    }
}

@media (min-width: 1200px) {
    .main-menu-sub-mega .nav+.nav {
        margin-left: 25px;
    }
}

@media (min-width: 992px) {
    .main-menu-sub-mega .nav>span {
        font-size: 12px;
    }
}

.main-header-center {
    flex: 1;
    margin: 0 0 0 0.8rem;
    position: relative;
}

.main-header-center .search-panel .dropdown-toggle {
    border-radius: 6px 0 0 6px;
    background: #eaebfa;
    border: 1px solid #e6eaff;
    height: 40px;
    color: #828aa5;
}

.main-header-center .search-panel .btn:hover .dropdown-toggle {
    color: #828aa5;
}

.main-header-center .search-panel .dropdown-menu.show {
    display: block;
    box-shadow: 0 8px 16px 0 rgba(162, 169, 204, 0.24);
}

.main-header-center .search-btn {
    padding: 0.375rem 0.85rem 0.4rem 0.70rem;
    border-radius: 0 6px 6px 0;
    color: #ffffff;
}

.main-header-center .search-btn:hover i,
.main-header-center .search-btn:focus i {
    color: #ffffff;
}

.main-header-center .search-btn:hover,
.main-header-center .search-btn:focus {
    background-color: #4140a9;
}

.main-header-center .form-control::focus {
    background: #f6f4ff !important;
    border: 1px solid #e6eaff;
}

.main-header-center .select2-container--default .select2-selection--single {
    border-radius: 6px 0 0 6px;
    height: 40px;
    width: 150px;
}

.main-header-center .form-control {
    transition: none;
    border-radius: 10px 0 0 10px !important;
    width: auto;
    flex: inherit;
    border-right: 0 !important;
}

.main-header-center .form-control:focus {
    background-color: #eaebfa;
    border-color: #ffffff;
    box-shadow: none !important;
}

.main-header-center .form-control:focus+.btn {
    color: #a8afc7;
}

.main-header-center .sp-container .form-control:focus+button {
    color: #a8afc7;
}

.sp-container .main-header-center .form-control:focus+button {
    color: #a8afc7;
}

.main-header-center .btn:hover,
.main-header-center .sp-container button:hover {
    color: #8f9cc0;
}

.sp-container .main-header-center button:hover {
    color: #ffffff;
}

.main-header-center .btn:focus,
.main-header-center .sp-container button:focus {
    color: #ffffff;
}

.sp-container .main-header-center button:focus {
    color: #ffffff;
}

.sp-container .main-header-center button:hover i {
    color: #b1bad6;
}

.main-header-center .btn:focus i,
.main-header-center .sp-container button:focus i {
    color: #b1bad6;
}

.sp-container .main-header-center button:focus i {
    color: #b1bad6;
}

.main-header-right {
    display: flex;
    align-items: center;
}

.main-header-right .btn-social {
    padding: 0;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #a8afc7;
    border-radius: 3px;
    transition: all 0.2s ease-in-out;
}

.main-header-right .btn-social:hover,
.main-header-right .btn-social:focus {
    color: #3c4858;
}

.main-header-right .btn-social i {
    font-size: 18px;
    line-height: 0;
}

.main-header-right .btn-social+.btn-social {
    margin-left: 10px;
}

.main-header-right .btn-buy {
    text-transform: uppercase;
    font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
    font-size: 11px;
    font-weight: 500;
    color: #ffffff;
    letter-spacing: .5px;
    display: flex;
    align-items: center;
    border-radius: 3px;
    transition: all 0.2s ease-in-out;
    margin-left: 20px;
}

@media (prefers-reduced-motion: reduce) {
    .main-header-right .btn-social {
        transition: none;
    }
}

.header-icons {
    height: 20px;
    width: 20px;
    line-height: 20px;
}

.country-Flag svg {
    padding: 0;
    min-width: 0;
    width: 24px;
    height: 24px;
    flex-shrink: 0;
    line-height: 24px;
    border-radius: 50%;
}

@media (prefers-reduced-motion: reduce) {
    .main-header-right .btn-buy {
        transition: none;
    }
}

.main-header-search-link {
    font-size: 18px;
    color: #3c4858;
    line-height: 1;
    margin-right: 15px;
}

.main-header-arrow {
    font-size: 27px;
    color: #8f9cc0;
    display: inline-block;
    line-height: 0;
}

.main-header-arrow i {
    line-height: 0;
}

.main-header-arrow:hover,
.main-header-arrow:focus {
    color: #3c4858;
}

.main-header-message,
.main-header-notification {
    position: relative;
}

.main-header-message>a,
.main-header-notification>a {
    display: block;
    font-size: 20px;
    color: #8f9cc0;
    position: relative;
    line-height: .9;
    outline: none;
}

.main-header-message>a.new::before {
    content: '';
    position: absolute;
    top: -2px;
    right: 2px;
    width: 7px;
    height: 7px;
    background-color: #f16d75;
    border-radius: 100%;
}

.main-header-notification>a.new::before {
    content: '';
    position: absolute;
    top: -2px;
    right: 2px;
    width: 7px;
    height: 7px;
    background-color: #f16d75;
    border-radius: 100%;
}

.main-header-notification .dropdown-menu {
    width: 220px;
    position: absolute;
    top: 48px;
    left: auto;
    right: -10px;
    bottom: auto;
    padding: 0;
    border: 0;
    border-width: 1px;
    box-shadow: -8px 12px 18px 0 rgba(21, 21, 62, 0.3);
    border-radius: 11px;
}

@media (min-width: 992px) {

    .main-header-notification>a::after,
    .main-header-message>a::after {
        bottom: -36px;
    }
}

.main-header-message .dropdown-menu {
    width: 300px;
    position: absolute;
    top: 48px !important;
    left: auto !important;
    right: -10px;
    bottom: auto;
    padding: 0;
    border-color: #ecedef;
    border-width: 1px;
    box-shadow: 0 8px 16px 0 rgba(162, 169, 204, 0.24);
}

.main-header-notification .dropdown-footer {
    text-align: center;
    padding: 10px;
    font-size: 13px;
    border-top: 1px solid rgba(123, 65, 216, 0.1);
}

.main-header-notification.show>a::after,
.main-header-notification.show .dropdown-menu {
    display: block;
}

.main-header-message.show>a::after,
.main-header-message.show .dropdown-menu {
    display: block;
}

.main-header-profile {
    display: flex;
    flex-direction: column;
    align-items: center;
    padding: 20px;
}

.main-header-profile .main-img-user {
    width: 120px;
    height: 120px;
    margin-bottom: 20px;
}

.main-header-profile .main-img-user::after {
    display: none;
}

.main-header-profile h6 {
    font-size: 24px;
    font-weight: 700;
    color: #8f9cc0;
    margin-bottom: 0;
}

.main-header-profile span {
    display: block;
    font-size: 13px;
}

@media (min-width: 576px) {
    .main-header-profile .main-img-user {
        width: 80px;
        height: 80px;
    }
}

@media (min-width: 576px) {
    .main-header-profile h6 {
        font-size: 18px;
    }
}

.main-header-sticky {
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    z-index: 1000;
}

.main-header-center .btn {
    background-color: #ffffff;
    border-radius: 0 10px 10px 0 !important;
    position: absolute;
    border-left: 0;
}

/* ###### Main-header  ###### */
/* ###### Main-footer  ###### */
.main-footer {
    background-color: transparent;
    color: #737277;
    margin-top: 0;
    padding: 15px;
    position: relative;
    bottom: 0;
    display: block;
    margin-top: auto;
}

.main-footer .container {
    font-size: 12px;
    align-items: center;
    justify-content: space-between;
}

.main-footer .container-fluid {
    font-size: 12px;
    align-items: center;
    justify-content: space-between;
    padding-left: 20px;
    padding-right: 20px;
}

@media (min-width: 992px) {
    .main-footer {
        display: block;
    }
}

.main-footer-app .container,
.main-footer-app .container-fluid {
    border-top-width: 0;
}

.main-footer-demo {
    background-color: #0c025b;
    color: rgba(255, 255, 255, 0.4);
    height: 60px;
}

.main-footer-demo .container {
    border-top-width: 0;
}

.main-footer-demo a {
    color: rgba(255, 255, 255, 0.5);
}

.main-footer-demo a:hover,
.main-footer-demo a:focus {
    color: #ffffff;
}

.main-footer a:not(.btn) {
    color: #737277;
}

/* ###### Main-footer  ###### */
/* ###### Sidebar  ###### */
@media (max-width: 991.98px) {
    .main-sidebar-show {
        overflow: inherit;
    }

    .main-sidebar-show .main-sidebar {
        display: flex;
        transform: translateX(0);
        visibility: visible;
        transition: left 0.3s ease, width 0.3s ease;
    }

    .main-sidebar-show .main-navbar-backdrop {
        opacity: 1;
    }
}

@media (min-width: 992px) {
    .main-sidebar-hide .main-sidebar {
        display: none;
    }

    .main-sidebar-hide .main-sidebar-sticky+.main-content {
        margin-left: 0;
    }
}

.main-body-sidebar {
    display: block;
}

.main-body-sidebar .main-content {
    flex: 1;
    padding: 0;
    display: flex;
    flex-direction: column;
}

.main-body-sidebar .main-content-header {
    height: auto;
    padding: 20px;
    margin-bottom: 0;
}

.main-body-sidebar .main-content-body {
    padding: 0 20px 20px;
}

.main-body-sidebar .main-footer {
    margin-top: auto;
}

@media (min-width: 992px) {
    .main-body-sidebar {
        display: flex;
        flex-direction: row;
    }
}

@media (min-width: 992px) {
    .main-body-sidebar .main-header .container-fluid {
        padding-left: 20px;
        padding-right: 20px;
    }
}

.main-sidebar {
    width: 240px;
    flex-direction: column;
    flex-shrink: 0;
    border-right: 0;
    transform: translateX(-240px);
    visibility: hidden;
    transition: all 0.4s;
}

.main-sidebar-hide .main-sidebar {
    transform: translateX(0px);
}

@media (prefers-reduced-motion: reduce) {
    .main-sidebar {
        transition: none;
    }
}

@media (min-width: 992px) and (max-width: 1199.98px) {
    .main-sidebar {
        width: 220px;
    }
}

@media (max-width: 991.98px) {
    .main-sidebar {
        position: fixed;
        top: 53px !important;
        left: 0;
        bottom: 0;
        z-index: 3;
        background-color: #ffffff;
    }
}

@media (min-width: 992px) {
    .main-sidebar {
        position: relative;
        display: flex;
        transform: none;
        z-index: 999;
        border-right-width: 1px;
        visibility: visible;
    }
}

.main-sidebar-sticky {
    position: fixed;
    top: 0px;
    left: 0;
    bottom: 0;
    box-shadow: none;
}

.option-dots {
    width: 40px;
    height: 40px;
    border-radius: 50%;
    background: transparent;
    margin: 0 auto;
    text-align: center;
    line-height: 40px;
    display: block;
}

.main-sidebar-body li.nav-item.active .nav-link {
    position: relative;
    z-index: 1;
    margin: 10px auto;
    text-align: center;
    border-radius: 5px;
    margin-left: 0;
    border: 0px solid transparent;
    border-right: 0px;
    width: inherit;
}

@media (min-width: 992px) {
    .main-sidebar-sticky+.main-content {
        margin-left: 220px;
    }
}

@media (min-width: 1200px) {
    .main-sidebar-sticky+.main-content {
        margin-left: 240px;
    }
}

.main-sidebar-header {
    flex-shrink: 0;
    height: 64px;
    display: flex;
    align-items: center;
    padding: 0 20px;
}

.main-sidebar-loggedin {
    padding: 10px 20px;
    display: flex;
    flex-shrink: 0;
}

.main-sidebar-loggedin .main-img-user {
    width: 36px;
    height: 36px;
}

.main-sidebar-loggedin .media-body {
    margin-left: 12px;
}

.main-sidebar-loggedin .media-body h6 {
    font-weight: 700;
    font-size: 14px;
    color: #8f9cc0;
    margin-bottom: 2px;
}

.main-sidebar-loggedin .media-body span {
    display: block;
    color: #a8afc7;
}

.main-sidebar-body {
    padding: 0;
}

@media (min-width: 992px) {
    .main-sidebar-body {
        padding: 65px 0px 12px 0px;
    }
}

@media (max-width: 991px) {
    .sidemenu-logo {
        border-bottom: 0px solid rgba(240, 240, 255, 0.1) !important;
        border-right: 0px solid rgba(240, 240, 255, 0.1) !important;
        background: transparent !important;
    }
}

.main-body .main-sidebar-body .nav {
    flex-direction: column;
    padding: 0px 15px 0 15px;
    margin: 0 auto;
    justify-content: center;
    margin-top: 0;
}

.nav-header {
    margin: 0 0 0 15px;
    display: flex;
    position: relative;
}

.main-sidebar-body .nav-label {
    text-transform: uppercase;
    font-size: 11.49px;
    font-weight: 500;
    letter-spacing: .5px;
    color: rgba(255, 255, 255, 0.3);
    padding: 10px 0px 0 0;
}

.second-sidemenu .nav-label {
    text-transform: uppercase;
    font-size: 11.49px;
    font-weight: 500;
    letter-spacing: .5px;
    color: #77778c;
    padding: 10px 0px 0 0;
}

.second-sidemenu .nav-header li {
    list-style-type: none;
}

.main-sidebar-body .sub-txt {
    font-size: 10.9px;
    padding: 0 0px 0 0;
    color: #9b9ca3;
    margin-bottom: 0;
    position: absolute;
    margin-top: -1px;
}

.second-sidemenu .sub-txt {
    font-size: 10.9px;
    padding: 0 0px 0 0;
    color: #8d95b1;
    margin-bottom: 10px;
}

.main-sidebar-body .nav-item {
    position: relative;
    display: block;
}

.main-sidebar-body .nav-item+.nav-item {
    margin-top: -1px;
}

.main-sidebar-body .nav-link {
    display: flex;
    align-items: center;
    padding: 5px 9px 5px 4px;
    font-weight: 600;
    font-size: 14px;
    color: #75757d;
}

.main-sidebar-body .nav-link .sidemenu-icon {
    font-size: 17px;
    line-height: 0;
    margin-right: 10px;
    width: 35px;
    height: 35px;
    line-height: 35px;
    text-align: center;
    border-radius: 50%;
}

.main-sidebar-body .nav-link i.typcn {
    line-height: .9;
}

.main-sidebar-body .nav-link i.typcn::before {
    width: auto;
}

.main-sidebar-body .nav-link.with-sub {
    position: relative;
}

.main-sidebar-body .nav-sub {
    list-style: none;
    padding: 0;
    margin-left: 30px;
}

.main-sidebar-body .nav-sub .nav-sub-link:before {
    content: '\e0b2';
    font-family: 'typicons';
    font-style: normal;
    font-weight: normal;
    text-decoration: inherit;
    top: 8px;
    font-size: 12px;
    opacity: 0.4;
    margin-right: 15px;
    color: rgba(255, 255, 255, 0.8);
}

.main-sidebar-body .nav-sub-menu {
    list-style: none;
    padding: 0;
    margin-left: 30px;
}

.main-sidebar-body .nav-sub-item .nav-sub {
    padding: 0 0 0 12px;
    border-left-width: 1px;
    margin-left: 0;
}

.main-sidebar-body .nav-sub-item .nav-sub .nav-sub-link {
    height: auto;
    padding: 7px 0;
}

.main-sidebar-body .nav-sub-item.active>.nav-sub-link {
    color: #c6c6e0;
}

.main-sidebar-body .nav-sub-item.show .nav-sub {
    display: block;
}

.main-sidebar-body .nav-sub-link {
    padding: 8px;
    display: flex;
    align-items: center;
    color: rgba(255, 255, 255, 0.4);
    font-size: 13px;
}

.main-sidebar-body .nav-sub-link.with-sub {
    justify-content: space-between;
}

.main-sidebar-body .nav-sub-link.with-sub::after {
    content: '\f3d0';
    font-family: 'Ionicons';
    font-size: 12px;
    font-weight: 400;
    display: inline-block;
    position: relative;
    margin-left: auto;
    color: #ecedef;
}

.main-sidebar-body .nav-sub-link+.nav-sub-link {
    border-top: 1px dotted #ecedef;
}

.main-sidebar-body li.active .sidemenu-icon {
    font-size: 18px;
    line-height: 0;
    margin-right: 10px;
    width: 35px;
    height: 35px;
    line-height: 35px;
    text-align: center;
    border-radius: 50%;
    color: #ffffff;
}

@media (min-width: 992px) {
    .main-sidebar-body .nav-sub-link.with-sub::after {
        margin-left: 4px;
        font-size: 12px;
    }
}

@media (min-width: 768px) {
    .main-sidebar-hide .main-sidebar-body li.active:after {
        top: 43px;
    }

    .main-sidebar-hide .main-sidebar .main-sidebar-body {
        padding: 65px 0px 12px 0px;
    }

    .main-sidebar-hide .main-sidebar-body .nav-link .sidemenu-icon {
        width: 100%;
        height: 100%;
        line-height: 15PX;
        text-align: center;
        border-radius: 50%;
        z-index: 1;
        box-shadow: none;
        margin-right: 0;
        margin: 5px 0;
    }

    .main-sidebar-hide.main-sidebar-open .main-sidebar-body li.active {
        position: relative;
        z-index: 1;
        margin: 0 auto;
        text-align: center;
        border-radius: 30px 0 0 30px;
        margin-left: 0;
        border: 0px solid transparent;
        border-right: 0px;
        transition: none;
    }

    .main-sidebar-hide.main-sidebar-open .main-sidebar-body .nav-link .sidemenu-icon {
        font-size: 18px;
        line-height: 0;
        margin-right: 10px;
        width: 35px;
        height: 35px;
        line-height: 35px;
        text-align: center;
        border-radius: 50%;
        box-shadow: none;
    }

    .main-sidebar-hide.main-sidebar-open .main-sidebar-body li.active .sidemenu-icon {
        font-size: 18px;
        line-height: 0;
        margin-right: 10px;
        width: 35px;
        height: 35px;
        line-height: 35px;
        text-align: center;
        border-radius: 50%;
        color: #ffffff;
    }

    .main-body.main-sidebar-hide.main-sidebar-open .main-sidebar-body .nav {
        flex-direction: column;
        text-align: inherit;
        margin: 0;
        justify-content: inherit;
    }

    .main-sidebar-hide .main-sidebar-body li.active {
        margin: 0;
    }

    .main-sidebar-hide .main-sidebar-body li.active .sidemenu-icon {
        margin: 5px;
    }

    .main-sidebar-hide .main-sidebar-body li.nav-item.active .nav-link {
        width: inherit;
        transition: margin-left 0.3s ease;
    }
}

*::-ms-backdrop,
.main-sidebar-body .nav-sub .nav-sub-link:before {
    top: 0;
}

.main-sidebar-body .nav-sub .nav-sub-item .nav-link {
    padding: 10px 0px 10px 5px;
}

/* ###### Sidebar  ###### */
/* ###### Right-sidebar  ###### */
.navbar.navbar-static .navbar-header {
    float: left;
}

.navbar .navbar-toggle.toggle-left {
    float: left;
    margin-left: 15px;
}

.navbar .navbar-toggle.toggle-right {
    float: right;
    margin-right: 15px;
}

.navbar .navbar-toggle.toggle-sidebar {
    display: block;
}

[data-toggle="sidebar"] {
    display: block;
}

/* sidebar settings */
.sidebar {
    position: fixed;
    display: block;
    top: 0;
    width: 300px;
    bottom: 0;
    z-index: 1035;
    min-height: 100%;
    max-height: none;
    overflow: auto;
    background-color: #ffffff;
    box-shadow: 0 8px 16px 0 rgba(162, 169, 204, 0.24);
}

.sidebar-left {
    left: 0;
}

.sidebar-right,
.sidebar-profile {
    right: 0;
}

/* css to override hiding the sidebar according to different screen sizes */
.row .sidebar.sidebar-left.sidebar-xs-show {
    left: 0;
    -webkit-transform: translate(0, 0);
    -ms-transform: translate(0, 0);
    -o-transform: translate(0, 0);
    -moz-transform: translate(0, 0);
    transform: translate(0, 0);
}

.row .sidebar.sidebar-right.sidebar-xs-show,
.row .sidebar.sidebar-profile.sidebar-xs-show {
    right: 0;
    -webkit-transform: translate(0, 0);
    -ms-transform: translate(0, 0);
    -o-transform: translate(0, 0);
    -moz-transform: translate(0, 0);
    transform: translate(0, 0);
}

/*right sidebar is untested */
@media (min-width: 768px) {
    .row .sidebar.sidebar-left.sidebar-sm-show {
        left: 0;
        -webkit-transform: translate(0, 0);
        -ms-transform: translate(0, 0);
        -o-transform: translate(0, 0);
        -moz-transform: translate(0, 0);
        transform: translate(0, 0);
    }

    .row .sidebar.sidebar-right.sidebar-sm-show,
    .row .sidebar.sidebar-profile.sidebar-sm-show {
        right: 0;
        -webkit-transform: translate(0, 0);
        -ms-transform: translate(0, 0);
        -o-transform: translate(0, 0);
        -moz-transform: translate(0, 0);
        transform: translate(0, 0);
    }

    /*right sidebar is untested */
}

@media (min-width: 992px) {
    .row .sidebar.sidebar-left.sidebar-md-show {
        left: 0;
        -webkit-transform: translate(0, 0);
        -ms-transform: translate(0, 0);
        -o-transform: translate(0, 0);
        -moz-transform: translate(0, 0);
        transform: translate(0, 0);
    }

    .row .sidebar.sidebar-right.sidebar-md-show,
    .row .sidebar.sidebar-profile.sidebar-md-show {
        right: 0;
        -webkit-transform: translate(0, 0);
        -ms-transform: translate(0, 0);
        -o-transform: translate(0, 0);
        -moz-transform: translate(0, 0);
        transform: translate(0, 0);
    }
}

@media (min-width: 1170px) {
    .row .sidebar.sidebar-left.sidebar-lg-show {
        left: 0;
        -webkit-transform: translate(0, 0);
        -moz-transform: translate(0, 0);
        -ms-transform: translate(0, 0);
        -o-transform: translate(0, 0);
        transform: translate(0, 0);
    }

    .row .sidebar.sidebar-right.sidebar-lg-show,
    .row .sidebar.sidebar-profile.sidebar-lg-show {
        right: 0;
        -webkit-transform: translate(0, 0);
        -moz-transform: translate(0, 0);
        -ms-transform: translate(0, 0);
        -o-transform: translate(0, 0);
        transform: translate(0, 0);
    }
}

/* animation class - optional: without it the sidebar would just pop in and out*/
.sidebar-animate {
    -webkit-transition: -webkit-transform 300ms ease;
    -moz-transition: -moz-transform 300ms ease;
    -o-transition: transform 300ms ease;
    transition: transform 300ms ease;
}

/* Left panel positioning classes */
.sidebar.sidebar-left {
    -webkit-transform: translate(-100%, 0);
    -moz-transform: translate(-100%, 0);
    -ms-transform: translate(-100%, 0);
    -o-transform: translate(-100%, 0);
    transform: translate(-100%, 0);
}

.sidebar.sidebar-left.sidebar-open {
    -webkit-transform: translate(0, 0);
    -moz-transform: translate(0, 0);
    -ms-transform: translate(0, 0);
    -o-transform: translate(0, 0);
    transform: translate(0, 0);
}

.sidebar.sidebar-right,
.sidebar.sidebar-profile {
    -webkit-transform: translate(100%, 0);
    -moz-transform: translate(100%, 0);
    -ms-transform: translate(100%, 0);
    -o-transform: translate(100%, 0);
    transform: translate(100%, 0);
}

.sidebar.sidebar-right.sidebar-open,
.sidebar.sidebar-profile.sidebar-open {
    -webkit-transform: translate(0, 0);
    -moz-transform: translate(0, 0);
    -ms-transform: translate(0, 0);
    -o-transform: translate(0, 0);
    transform: translate(0, 0);
}

.main-traffic-detail-product-item {
    margin-bottom: 1.5rem;
}

/* ###### Main-profile  ###### */
.main-profile-menu {
    position: relative;
    padding: 0.5rem 0;
    margin: 0 9px;
}

.main-profile-menu>.main-img-user {
    outline: none;
    width: 32px;
    height: 32px;
}

.main-profile-menu>.main-img-user::after {
    display: none;
}

.main-profile-menu .dropdown-menu {
    padding-top: 0px;
    position: absolute;
    top: 53px;
    left: auto;
    right: -10px;
    bottom: auto;
    width: 210px;
    border: 0;
    border-width: 1px;
    box-shadow: -8px 12px 18px 0 rgba(21, 21, 62, 0.3);
    border-radius: 11px;
}

.main-profile-menu .dropdown-item {
    position: relative;
    padding: 10px;
    height: 38px;
    display: flex;
    align-items: center;
    font-size: 13px;
    color: #3c4858;
}

.main-profile-menu .dropdown-item i {
    font-size: 16px;
    margin-right: 10px;
    width: 24px;
    text-align: center;
    line-height: .9;
}

.main-profile-menu .dropdown-item:hover,
.main-profile-menu .dropdown-item:focus {
    background-color: #f8f9fa;
}

.main-profile-menu .dropdown-item+.dropdown-item {
    border-top: 1px solid #e8e8f7;
}

.main-profile-menu.show .main-img-user::before,
.main-profile-menu.show .dropdown-menu {
    display: block;
}

/* ###### Main-profile  ###### */
/* ###### Iconbar  ###### */
@media (max-width: 991.98px) {
    .main-iconbar-show .main-iconbar {
        display: flex;
    }

    .main-iconbar-show .main-iconbar-aside {
        display: block;
    }
}

.main-iconbar {
    width: 64px;
    display: none;
    flex-direction: column;
    align-items: center;
    padding: 20px 0;
    background-color: #ffffff;
    position: fixed;
    top: 63px;
    left: 0;
    height: 100%;
    background-color: #ffffff;
    z-index: 500;
    border-right: 1px solid #e8e8f7;
    border-top: 1px solid #e8e8f7;
}

.main-iconbar .nav {
    flex: 1;
    flex-direction: column;
    align-items: center;
    padding: 5px 0;
}

.main-iconbar .nav-link {
    position: relative;
    padding: 0;
    color: #8f9cc0;
    width: 40px;
    height: 40px;
    display: flex;
    align-items: center;
    justify-content: center;
}

.main-iconbar .nav-link i {
    font-size: 20px;
}

.main-iconbar .nav-link i.typcn {
    line-height: 1;
}

.main-iconbar .nav-link i.typcn::before {
    width: auto;
}

.main-iconbar .nav-link i.typcn-device-laptop,
.main-iconbar .nav-link i.typcn-th-large-outline {
    font-size: 25px;
}

.main-iconbar .nav-link i.fa-desktop {
    font-size: 23px;
}

.main-iconbar .nav-link:hover,
.main-iconbar .nav-link:focus {
    color: #3c4858;
}

.main-iconbar .nav-link+.nav-link {
    margin-top: 10px;
}

@media (min-width: 992px) {
    .main-iconbar {
        display: flex;
    }
}

.main-iconbar-logo {
    width: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 32px;
    line-height: .9;
    color: #8f9cc0;
    flex-shrink: 0;
    margin-bottom: 20px;
    position: relative;
}

.main-iconbar-logo::after {
    content: '';
    position: absolute;
    bottom: 6px;
    left: 20px;
    height: 3px;
    width: 24px;
    border-radius: 2px;
}

.main-iconbar-logo:hover,
.main-iconbar-logo:focus {
    color: #8f9cc0;
}

.main-iconbar-bottom {
    flex-shrink: 0;
    display: flex;
    flex-direction: column;
    align-items: center;
}

.main-iconbar-help {
    line-height: 0;
    font-size: 22px;
    color: #a8afc7;
    margin-bottom: 20px;
}

.main-iconbar-help:hover,
.main-iconbar-help:focus {
    color: #8f9cc0;
}

.main-iconbar-aside {
    width: 230px;
    height: 100%;
    background-color: #ffffff;
    border-right: 1px solid #e8e8f7;
    border-top: 1px solid #e8e8f7;
    position: fixed;
    top: 63px;
    left: 64px;
    overflow-y: auto;
    z-index: 600;
    display: none;
}

@media (min-width: 1200px) {
    .main-iconbar-aside {
        border-right: 0;
        z-index: 500;
    }
}

@media (min-width: 992px) {
    .main-iconbar-aside.show {
        display: block;
    }
}

@media (min-width: 1200px) {
    .main-iconbar-aside.show+.main-content {
        margin-left: 294px;
    }
}

.main-iconbar-header {
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 20px;
    padding-left: 0;
}

.main-iconbar-header .main-logo {
    line-height: 1;
}

.main-iconbar-toggle-menu {
    display: block;
    position: relative;
    line-height: 0;
    color: #8f9cc0;
    font-size: 28px;
    opacity: .5;
}

.main-iconbar-toggle-menu:hover,
.main-iconbar-toggle-menu:focus {
    opacity: 1;
    color: #8f9cc0;
}

.main-iconbar-toggle-menu i:first-child {
    display: none;
}

@media (min-width: 1200px) {
    .main-iconbar-toggle-menu {
        font-size: 24px;
    }

    .main-iconbar-toggle-menu::before {
        content: '';
        position: absolute;
        top: 3px;
        bottom: 3px;
        left: -1px;
        border-left: 2px solid #000000;
    }

    .main-iconbar-toggle-menu i:first-child {
        display: block;
    }

    .main-iconbar-toggle-menu i:last-child {
        display: none;
    }
}

.main-iconbar-body {
    padding: 20px;
    height: calc(100vh - 68px);
}

.main-iconbar-body .nav {
    flex-direction: column;
    padding-top: 10px;
}

.main-iconbar-body .nav-item {
    position: relative;
    display: block;
}

.main-iconbar-body .nav-item+.nav-item {
    margin-top: -1px;
    border-top: 1px dotted #ecedef;
}

.main-iconbar-body .nav-item.show .nav-sub {
    display: block;
}

.main-iconbar-body .nav-link {
    position: relative;
    color: #8f9cc0;
    font-size: 13px;
    padding: 0;
    display: flex;
    align-items: center;
    height: 38px;
}

.main-iconbar-body .nav-link i {
    color: #a8afc7;
    font-size: 16px;
    font-weight: 400;
    line-height: 0;
    margin-right: 10px;
}

.main-iconbar-body .nav-link i.typcn {
    line-height: .9;
}

.main-iconbar-body .nav-link i.typcn::before {
    width: auto;
}

.main-iconbar-body .nav-link.with-sub {
    justify-content: space-between;
}

.main-iconbar-body .nav-link.with-sub::after {
    content: '\f3d0';
    font-family: 'Ionicons';
    font-size: 11px;
    font-weight: 400;
    display: inline-block;
    position: relative;
    margin-left: auto;
    color: #a8afc7;
}

.main-iconbar-body .nav-sub {
    list-style: none;
    padding: 0;
    margin: 0;
    border-top: 1px dotted #ecedef;
    display: none;
}

.main-iconbar-body .nav-sub .nav-sub-item {
    position: relative;
    display: block;
    margin-left: 15px;
}

.main-iconbar-body .nav-sub .nav-sub-item+.nav-sub-item {
    border-top: 1px dotted #ecedef;
}

.main-iconbar-body .nav-sub .nav-sub-link {
    display: flex;
    align-items: center;
    height: 36px;
    color: #8f9cc0;
}

@media (min-width: 992px) {
    .main-iconbar-body .nav-link.with-sub::after {
        margin-left: 4px;
        font-size: 12px;
    }
}

.main-iconbar-title {
    font-size: 20px;
    font-weight: 700;
    color: #8f9cc0;
    margin-bottom: 10px;
    line-height: 1;
}

.main-iconbar-text {
    display: block;
    font-size: 12px;
    color: #a8afc7;
    margin-bottom: 12px;
}

.main-iconbar-pane {
    margin-bottom: 20px;
    display: none;
}

.main-iconbar-pane.show {
    display: block;
}

.main-iconbar-primary {
    padding-top: 0;
}

.main-iconbar-primary .main-img-user::after {
    box-shadow: none;
}

.main-iconbar-primary .main-iconbar-logo {
    color: #ffffff;
    height: 64px;
}

.main-iconbar-primary .main-iconbar-logo::after {
    display: none;
}

.main-iconbar-primary .nav {
    justify-content: center;
}

.main-iconbar-primary .nav-link {
    width: 42px;
    height: 42px;
    color: rgba(255, 255, 255, 0.5);
    border-radius: 3px;
    transition: all 0.2s ease-in-out;
}

.main-iconbar-primary .nav-link:hover,
.main-iconbar-primary .nav-link:focus {
    color: #ffffff;
    background-color: rgba(255, 255, 255, 0.1);
}

.main-iconbar-primary .nav-link.active {
    color: #ffffff;
    background-color: rgba(255, 255, 255, 0.2);
}

.main-iconbar-primary .main-iconbar-help {
    color: rgba(255, 255, 255, 0.5);
}

.main-iconbar-primary .main-iconbar-help:hover,
.main-iconbar-primary .main-iconbar-help:focus {
    color: #ffffff;
}

@media (prefers-reduced-motion: reduce) {
    .main-iconbar-primary .nav-link {
        transition: none;
    }
}

.main-iconbar-aside-primary {
    width: 250px;
    background-color: #f8f9fa;
    box-shadow: 0 0 16px rgba(28, 39, 60, 0.08);
    border-right: 1px solid #e8e8f7;
}

.main-iconbar-aside-primary .main-iconbar-header {
    padding: 18px 25px;
    background-color: #ffffff;
    border-bottom: 1px solid #e8e8f7;
}

.main-iconbar-aside-primary .main-iconbar-body {
    padding: 20px 25px;
}

.main-iconbar-aside-primary .main-iconbar-body .nav {
    padding-top: 0;
    padding-left: 0;
    border-left-width: 0;
}

.main-iconbar-aside-primary .main-iconbar-body .nav-item+.nav-item,
.main-iconbar-aside-primary .main-iconbar-body .nav-sub,
.main-iconbar-aside-primary .main-iconbar-body .nav-sub-item+.nav-sub-item {
    border-top-color: #ecedef;
}

.main-iconbar-aside-primary .main-iconbar-toggle-menu {
    display: none;
}

@media (min-width: 992px) {
    .main-iconbar-aside-primary.show+.main-content {
        margin-left: 64px;
    }
}

/* ###### Iconbar  ###### */
/* ############### CUSTOM VENDOR STYLES ############### */
/* ########## Datepicker ########## */
.ui-datepicker {
    background-color: #ffffff;
    border: 1px solid #e8e8f7;
    font-family: inherit;
    font-size: inherit;
    padding: 0;
    margin: 0 0 0;
    display: none;
    width: auto !important;
    z-index: 5 !important;
    border-radius: 11px;
    box-shadow: -8px 12px 18px 0 rgba(21, 21, 62, 0.3);
}

.ui-datepicker .ui-datepicker-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    position: relative;
    font-weight: 500;
    font-size: 12px;
    text-transform: uppercase;
    color: #8f9cc0;
    padding: 12px;
    letter-spacing: 1px;
    border: 0;
    background-color: transparent;
    border-top-left-radius: 3px;
    border-top-right-radius: 3px;
}

.ui-datepicker .ui-datepicker-header .ui-datepicker-next,
.ui-datepicker .ui-datepicker-header .ui-datepicker-prev {
    text-indent: -99999px;
    color: #a8afc7;
    top: 9px;
    background: #000000;
}

.ui-datepicker .ui-datepicker-header .ui-datepicker-next::before,
.ui-datepicker .ui-datepicker-header .ui-datepicker-prev::before {
    font-size: 12px;
    font-family: 'feather';
    position: absolute;
    top: 10px;
    text-indent: 0;
    background: rgba(77, 76, 178, 0.1);
    padding: 5px;
    margin: -5px;
    height: 30px;
    width: 30px;
    border-radius: 50%;
    text-align: center;
    line-height: 20px;
}

.ui-datepicker .ui-datepicker-header .ui-datepicker-next:hover::before,
.ui-datepicker .ui-datepicker-header .ui-datepicker-next:focus::before {
    color: #2e3649;
}

.ui-datepicker .ui-datepicker-header .ui-datepicker-prev:hover::before,
.ui-datepicker .ui-datepicker-header .ui-datepicker-prev:focus::before {
    color: #2e3649;
}

.ui-datepicker .ui-datepicker-header .ui-datepicker-next {
    order: 3;
}

.ui-datepicker .ui-datepicker-header .ui-datepicker-next:before {
    right: 17px;
    content: "\e92f";
}

.ui-datepicker .ui-datepicker-header .ui-datepicker-prev:before {
    left: 17px;
    content: "\e92e";
}

.ui-datepicker .ui-datepicker-header .ui-datepicker-next-hover,
.ui-datepicker .ui-datepicker-header .ui-datepicker-prev-hover {
    color: #3c4858;
    cursor: pointer;
    top: 1px;
    border: 0;
    background-color: transparent;
}

.ui-datepicker .ui-datepicker-title {
    color: #2e3649;
    font-weight: 700;
    font-size: 13px;
}

.ui-datepicker .ui-datepicker-calendar {
    margin: 0;
    background-color: transparent;
    border-bottom-right-radius: 3px;
    border-bottom-left-radius: 3px;
    padding: 0;
    text-align: center;
    width: 100%;
    border-radius: 11px;
    overflow: hidden;
}

.ui-datepicker .ui-datepicker-calendar th {
    text-transform: uppercase;
    font-size: 12px;
    font-weight: 700;
    letter-spacing: 1px;
    padding: 6px 8px;
    color: #2e3649;
    text-align: left;
}

.ui-datepicker .ui-datepicker-calendar td {
    border: 1px solid #ffffff;
    padding: 0;
    background-color: #ffffff;
    text-align: right;
}

.ui-datepicker .ui-datepicker-calendar td:last-child {
    border-right: 0;
}

.ui-datepicker .ui-datepicker-calendar td.ui-datepicker-other-month .ui-state-default {
    color: #a8afc7;
}

.ui-datepicker .ui-datepicker-calendar td span {
    transition: all 0.2s ease-in-out;
    padding: 5px;
    color: #313b54;
    padding: 6px 10px;
    display: block;
    font-weight: 500;
    font-size: 12px;
    border: 0;
    border-radius: 1px;
    height: 38px;
    width: 38px;
}

.ui-datepicker .ui-datepicker-calendar td a {
    transition: all 0.2s ease-in-out;
    padding: 5px;
    color: #313b54;
    padding: 10px 10px;
    display: block;
    font-weight: 500;
    font-size: 12px;
    border: 0;
    border-radius: 11px;
    height: 38px;
    width: 38px;
    text-align: center;
    margin: 0 auto;
}

.ui-datepicker .ui-datepicker-calendar td a:hover {
    background-color: #ecedef;
}

.ui-datepicker .ui-datepicker-calendar .ui-datepicker-today a {
    color: #ffffff;
}

.ui-datepicker .ui-datepicker-calendar .ui-datepicker-today a:hover,
.ui-datepicker .ui-datepicker-calendar .ui-datepicker-today a:focus {
    color: #ffffff;
}

@media (max-width: 320px) {
    .ui-datepicker .ui-datepicker-calendar th {
        padding: 4px 0;
        letter-spacing: normal;
    }
}

@media (prefers-reduced-motion: reduce) {

    .ui-datepicker .ui-datepicker-calendar td span,
    .ui-datepicker .ui-datepicker-calendar td a {
        transition: none;
    }
}

.ui-datepicker-multi .ui-datepicker-group {
    padding-right: 15px;
    width: auto;
    float: left;
}

.ui-datepicker-multi .ui-datepicker-group .ui-datepicker-title {
    margin: auto;
}

.ui-datepicker-multi .ui-datepicker-group .ui-datepicker-prev::before {
    left: 10px;
}

.ui-datepicker-multi .ui-datepicker-group .ui-datepicker-next::before {
    right: 10px;
}

.ui-datepicker-multi .ui-datepicker-group table {
    margin: 0;
}

.ui-datepicker-multi .ui-datepicker-group-last {
    padding-right: 0;
}

.ui-datepicker-inline {
    border-color: #ecedef;
}

.picker-title {
    font-size: 15px;
    font-weight: 500;
}

.picker-cell__header {
    text-transform: uppercase;
    font-size: 0.875rem;
    font-weight: 700;
    letter-spacing: .4px;
}

.picker-item {
    font-family: "Archivo", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
}

.picker-picked {
    font-weight: 500;
}

/* ########## Datepicker ########## */
/* ########## Datetimepicker ########## */
.datetimepicker {
    box-shadow: none;
    border-radius: 0;
    border-width: 1px;
    border-color: #ecedef;
    min-width: 270px;
    padding: 0 10px 10px;
}

.datetimepicker::before {
    display: none;
}

.datetimepicker table {
    width: 100%;
}

.datetimepicker table th.prev,
.datetimepicker table th.next,
.datetimepicker table th.switch {
    background-color: #ffffff;
    color: #8f9cc0;
}

.datetimepicker table th.prev,
.datetimepicker table th.next {
    position: relative;
}

.datetimepicker table th.prev span,
.datetimepicker table th.next span {
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
}

.datetimepicker table th.prev span::before,
.datetimepicker table th.next span::before {
    font-family: 'Ionicons';
    position: absolute;
    top: 50%;
    font-size: 16px;
    color: #8f9cc0;
    line-height: 0;
}

.datetimepicker table th.prev:hover,
.datetimepicker table th.prev:focus {
    background-color: #ffffff;
}

.datetimepicker table th.next:hover,
.datetimepicker table th.next:focus {
    background-color: #ffffff;
}

.datetimepicker table th.prev span::before {
    content: '\f3cf';
    left: 0;
}

.datetimepicker table th.next span::before {
    content: '\f3d1';
    right: 0;
}

.datetimepicker table th.switch {
    text-transform: uppercase;
    font-weight: 700;
    font-size: 13px;
    letter-spacing: 1px;
    color: #8f9cc0;
}

.datetimepicker table td {
    font-size: 0.875rem;
    text-align: center;
}

.datetimepicker table td.old,
.datetimepicker table td.new {
    color: #a8afc7;
}

.datetimepicker .datetimepicker-days table thead tr:first-child th {
    height: 38px;
}

.datetimepicker .datetimepicker-days table thead tr:last-child th {
    height: 25px;
    text-transform: uppercase;
    color: #3c4858;
    font-weight: 700;
    font-size: 11px;
}

/* jQuery Simple Datetimepicker */
.main-datetimepicker {
    box-shadow: none;
    border-radius: 0;
    border-color: #ecedef;
    margin-top: 2px;
}

.main-datetimepicker>.datepicker_header {
    padding: 10px;
    display: flex;
    align-items: center;
    justify-content: space-between;
}

.main-datetimepicker>.datepicker_header>.icon-home {
    display: none;
}

.main-datetimepicker>.datepicker_header a:nth-child(2),
.main-datetimepicker>.datepicker_header a:last-child {
    display: block;
    position: relative;
    text-indent: -999999px;
}

.main-datetimepicker>.datepicker_header a:nth-child(2)::before,
.main-datetimepicker>.datepicker_header a:last-child::before {
    font-family: 'Ionicons';
    position: absolute;
    top: 50%;
    line-height: 0;
    text-indent: 0;
    font-size: 13px;
}

.main-datetimepicker>.datepicker_header a:nth-child(2)::before {
    content: '\f3cf';
    left: 0;
}

.main-datetimepicker>.datepicker_header a:last-child::before {
    content: '\f3d1';
    right: 0;
}

.main-datetimepicker>.datepicker_header span {
    font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
    text-transform: uppercase;
}

.main-datetimepicker>.datepicker_inner_container {
    border-radius: 0;
    box-shadow: none;
    border-width: 0;
    display: flex;
    height: 225px;
    margin: 0;
    background-color: #ffffff;
}

.main-datetimepicker>.datepicker_inner_container::after {
    display: none;
}

.main-datetimepicker>.datepicker_inner_container>.datepicker_calendar {
    width: 230px;
    border-width: 0;
    border-radius: 0;
    font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
    padding: 5px;
    float: none;
    margin: 0;
}

.main-datetimepicker>.datepicker_inner_container>.datepicker_calendar>table {
    width: 100%;
    height: 100%;
}

.main-datetimepicker>.datepicker_inner_container>.datepicker_calendar th {
    font-size: 11px;
    text-transform: uppercase;
    color: #8f9cc0;
    font-weight: 700;
    text-align: center;
    padding: 8px 5px;
}

.main-datetimepicker>.datepicker_inner_container>.datepicker_calendar td {
    font-size: 0.875rem;
    font-weight: 400;
    text-align: center;
    padding: 5px;
}

.main-datetimepicker>.datepicker_inner_container>.datepicker_calendar td.day_another_month {
    color: #a8afc7;
}

.main-datetimepicker>.datepicker_inner_container>.datepicker_calendar td.hover {
    background-color: #ecedef;
    cursor: pointer;
}

.main-datetimepicker>.datepicker_inner_container>.datepicker_timelist {
    float: none;
    width: 70px;
    height: 100% !important;
    border-left: 1px solid #b4bdce;
}

.main-datetimepicker>.datepicker_inner_container>.datepicker_timelist>div.timelist_item {
    padding: 5px 8px;
    margin: 0 0 0 1px;
}

.main-datetimepicker>.datepicker_inner_container>.datepicker_timelist>div.timelist_item:hover,
.main-datetimepicker>.datepicker_inner_container>.datepicker_timelist>div.timelist_item:focus {
    background-color: #ecedef;
}

/* Picker JS */
/* ########## Datetimepicker ########## */
/* ###### Jqvmap  ###### */
.jqvmap-label {
    padding: 2px 8px;
    background-color: rgba(17, 17, 17, 0.9);
    border-radius: 2px;
}

.jqvmap-zoomin {
    font-size: 20px;
    padding: 0;
    width: 20px;
    height: 20px;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 2px;
}

.jqvmap-zoomout {
    font-size: 20px;
    padding: 0;
    width: 20px;
    height: 20px;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 2px;
    top: 32px;
}

/* Setup basic CSS for Label */
.jqvmap-pin {
    font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
    cursor: default;
    pointer-events: none;
}

/* Hide Whichever Labels you want */
#jqvmap1_ri_pin,
#jqvmap1_dc_pin,
#jqvmap1_de_pin,
#jqvmap1_md_pin {
    display: none;
}

/* Reposition Labels that are not quite right ( labels are centered in shape, and sometimes need tweaking ) */
#jqvmap1_ak_pin {
    margin-top: -2%;
}

#jqvmap1_ca_pin {
    margin-left: -2%;
}

#jqvmap1_ct_pin {
    margin-top: -0.25%;
    margin-left: -0.25%;
}

#jqvmap1_fl_pin {
    margin-left: 5%;
}

#jqvmap1_id_pin {
    margin-top: 3%;
    margin-left: -1%;
}

#jqvmap1_ky_pin {
    margin-left: 2%;
}

#jqvmap1_la_pin {
    margin-left: -2%;
}

#jqvmap1_mi_pin {
    margin-top: 4%;
    margin-left: 3%;
}

#jqvmap1_ma_pin {
    margin-top: -0.25%;
}

#jqvmap1_mn_pin {
    margin-top: 2%;
    margin-left: -2%;
}

#jqvmap1_nh_pin {
    margin-top: 1%;
    margin-left: -0.25%;
}

#jqvmap1_nj_pin {
    margin-top: 1%;
}

#jqvmap1_ok_pin,
#jqvmap1_va_pin {
    margin-left: 2%;
}

#jqvmap1_wv_pin {
    margin-left: -1%;
    margin-top: 1%;
}

/* Add responsibe support to resize labels for difference screen sizes */
@media only screen and (min-width: 320px) {
    .jqvmap-pin {
        font-size: 6px;
    }
}

@media only screen and (min-width: 480px) {
    .jqvmap-pin {
        font-size: 8px;
    }
}

@media only screen and (min-width: 640px) {
    .jqvmap-pin {
        font-size: 10px;
    }
}

@media only screen and (min-width: 800px) {
    .jqvmap-pin {
        font-size: 12px;
    }
}

@media only screen and (min-width: 1024px) {
    .jqvmap-pin {
        font-size: 14px;
    }
}

/*  ----- 4.7 Quill  ----- */
.ql-wrapper {
    display: flex;
    flex-direction: column;
}

.ql-wrapper-modal .ql-snow.ql-toolbar {
    border-width: 0;
    border-bottom-width: 1px;
}

.ql-wrapper-modal .ql-snow.ql-container {
    border-width: 0;
}

.ql-wrapper-modal .ql-snow .ql-editor {
    padding: 20px;
}

@media (min-width: 576px) {
    .ql-wrapper-modal .ql-snow.ql-toolbar {
        padding: 15px 20px;
    }
}

.ql-bubble.ql-container {
    border: 2px solid #ecedef;
}

.ql-bubble.ql-container:not(.ql-disabled) a::before {
    background-color: #8f9cc0;
    border-radius: 2px;
}

.ql-bubble .ql-tooltip {
    background-color: #8f9cc0;
    border-radius: 2px;
}

.ql-bubble .ql-tooltip.ql-flip .ql-tooltip-arrow {
    border-top-color: #8f9cc0;
}

.ql-bubble .ql-tooltip:not(.ql-flip) .ql-tooltip-arrow {
    border-bottom-color: #8f9cc0;
}

.ql-bubble .ql-toolbar {
    padding: 0 8px 8px;
}

.ql-bubble .ql-toolbar button {
    width: 32px;
    height: 32px;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #8896af;
    outline: none;
}

.ql-bubble .ql-toolbar button i {
    font-size: 24px;
    line-height: 0;
    display: inline-block;
}

.ql-bubble .ql-toolbar button i.la-bold,
.ql-bubble .ql-toolbar button i.la-underline {
    width: 21px;
}

.ql-bubble .ql-toolbar button .ql-fill {
    fill: #8896af;
}

.ql-bubble .ql-toolbar button .ql-stroke {
    stroke: #8896af;
}

.ql-bubble .ql-toolbar button.ql-active {
    color: #ffffff;
    background-color: rgba(255, 255, 255, 0.08);
}

.ql-bubble .ql-toolbar .ql-formats {
    margin: 8px 8px 0 0;
}

.ql-bubble .ql-toolbar .ql-formats:first-child {
    margin-left: 0;
}

@media (min-width: 576px) {
    .ql-bubble .ql-toolbar .ql-formats {
        margin: 8px 0 0;
    }

    .ql-bubble .ql-toolbar .ql-formats:first-child {
        margin-left: 0;
    }
}

.ql-snow.ql-container {
    border-color: #ecedef;
    border-width: 1px;
}

.ql-snow.ql-toolbar {
    border-width: 1px;
    border-color: #ecedef;
    border-bottom-width: 1px;
    padding: 5px 10px 10px;
    border-radius: 11px 11px 0 0;
    background: #ecedef;
}

.ql-snow.ql-toolbar .ql-picker-label {
    border-color: #ecedef;
    border-radius: 11px;
}

.ql-snow.ql-toolbar .ql-picker-label.ql-active {
    background-color: #ecedef;
    border-color: transparent;
    color: #8f9cc0;
    font-weight: 500;
}

.ql-snow.ql-toolbar .ql-picker-label.ql-active .ql-stroke {
    stroke: #000000;
}

.ql-snow.ql-toolbar button {
    border: 1px solid #ecedef;
    width: 32px;
    height: 32px;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #737277;
    outline: none;
    border-radius: 11px;
    background: #d5d9dc;
}

.ql-snow.ql-toolbar button svg {
    width: 20px;
    float: none;
}

.ql-snow.ql-toolbar button i {
    line-height: 0;
    display: inline-block;
    border-color: #d7dcec;
    padding: .28rem .65rem;
    font-size: 13px;
    color: #000000;
}

.ql-snow.ql-toolbar button i.la-bold,
.ql-snow.ql-toolbar button i.la-underline {
    width: 21px;
}

.ql-snow.ql-toolbar button .ql-stroke {
    stroke-width: 2px;
}

.ql-snow.ql-toolbar button:hover,
.ql-snow.ql-toolbar button:focus {
    border-color: #ecedef;
}

.ql-snow.ql-toolbar button:hover .ql-stroke,
.ql-snow.ql-toolbar button:focus .ql-stroke {
    stroke: #a8afc7;
}

.ql-snow.ql-toolbar button.ql-active {
    background-color: #ecedef;
    color: #2e3649;
    border-color: transparent;
}

.ql-snow.ql-toolbar button.ql-active .ql-fill {
    fill: #2e3649;
}

.ql-snow.ql-toolbar button.ql-active .ql-stroke {
    stroke: #2e3649;
}

.ql-snow.ql-toolbar .ql-formats {
    margin-top: 5px;
    margin-right: 5px;
}

.ql-snow .ql-formats button+button {
    margin: 0 0 0 2px;
}

.ql-snow .ql-picker {
    display: block;
    border-width: 0;
    height: 32px;
    color: #3c4858;
}

.ql-snow .ql-picker:not(.ql-color-picker):not(.ql-icon-picker) svg {
    right: 3px;
}

.ql-snow .ql-picker:hover .ql-picker-label,
.ql-snow .ql-picker:focus .ql-picker-label {
    color: #8f9cc0;
}

.ql-snow .ql-picker:hover .ql-picker-label .ql-stroke,
.ql-snow .ql-picker:focus .ql-picker-label .ql-stroke {
    stroke: #000000;
}

.ql-snow .ql-picker-label {
    display: block;
    padding-left: 10px;
    font-size: 13px;
    font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
    border: 1px solid #e8e8f7;
    background-color: #d5d9dc;
    outline: none;
}

.ql-snow .ql-picker-label::before {
    line-height: 2.25;
    font-weight: 400;
}

.ql-snow .ql-stroke {
    stroke: #000000;
    stroke-linecap: square;
    stroke-linejoin: miter;
    stroke-width: 1;
}

.ql-snow .ql-editor {
    padding: 20px;
    color: #2e3649;
}

.ql-toolbar.ql-snow+.ql-container.ql-snow {
    border-radius: 0 0 11px 11px;
}

/* ###### Jqvmap  ###### */
/* ###### Chart  ###### */
.main-donut-chart {
    position: relative;
    border-radius: 50%;
    overflow: hidden;
}

.main-donut-chart .slice {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
}

.main-donut-chart .chart-center {
    position: absolute;
    border-radius: 50%;
}

.main-donut-chart .chart-center span {
    display: block;
    text-align: center;
}

.morris-wrapper-demo {
    height: 200px;
    position: relative;
    margin-left: -15px;
    margin-right: -15px;
    text-align: center;
    margin: 0 auto;
}

@media (min-width: 576px) {
    .morris-wrapper-demo {
        height: 300px;
    }
}

.morris-donut-wrapper-demo {
    height: 200px;
}

@media (min-width: 576px) {
    .morris-donut-wrapper-demo {
        height: 250px;
    }
}

.chartjs-wrapper-demo {
    height: 250px;
}

@media (max-width: 330px) {
    .chartjs-wrapper-demo {
        width: 290px;
    }
}

@media (min-width: 992px) {
    .chartjs-wrapper-demo {
        height: 300px;
    }
}

.chartist-wrapper-demo {
    height: 200px;
}

@media (min-width: 768px) {
    .chartist-wrapper-demo {
        height: 300px;
    }
}

.morris-hover.morris-default-style {
    border-radius: 0;
}

.chart-donut {
    left: 0;
    position: relative;
}

#morrisDonut1 {
    height: 200px;
    width: 200px;
}

#morrisDonut1 svg {
    height: 200px;
    width: 200px;
    font-family: Roboto, sans-serif;
}

.chart-legend1 {
    background-color: #ff9e01;
}

.chart-legend2 {
    background-color: #00b220;
}

.chart-legend3 {
    background-color: #f11111;
}

.chart-legend4 {
    background-color: #373be5;
}

/* ###### Chart  ###### */
/* ###### Parsley ###### */
input.parsley-error:focus,
textarea.parsley-error:focus,
input.parsley-success:focus,
textarea.parsley-success:focus {
    box-shadow: none !important;
}

.parsley-checkbox.parsley-error {
    padding: 10px;
    border: 1px solid #f16d75;
}

.parsley-checkbox.parsley-success {
    padding: 10px;
    border: 1px solid #269c8e;
}

.parsley-errors-list {
    color: #f16d75;
    list-style: none;
    font-size: 12px;
    padding: 0;
    margin-bottom: 0;
}

.parsley-errors-list li {
    margin: 5px 0 0;
}

/***** CUSTOM STYLED ERROR MESSAGE *****/
.parsley-style-1 .parsley-input.parsley-error .form-control {
    border-color: #f16d75;
    border-radius: 0;
}

.parsley-style-1 .parsley-input.parsley-success .form-control {
    border-color: #269c8e;
}

.parsley-style-1 .parsley-checkbox.parsley-error {
    border: 1px solid #f16d75;
}

.parsley-style-1 .parsley-select.parsley-error .select2-container--default .select2-selection--single {
    border-radius: 0;
}

.parsley-style-1 .parsley-errors-list.filled {
    color: #f16d75;
    padding: 7px 10px;
}

.parsley-style-1 .parsley-errors-list.filled li:first-child {
    margin-top: 0;
}

/* ###### Parsley ###### */
/* ###### 4.7 Quill ###### */
.ql-wrapper-demo {
    background-color: #ffffff;
}

.ql-wrapper-demo .ql-container {
    height: 250px;
}

.ql-wrapper-demo .ql-editor {
    height: 100%;
    overflow-y: auto;
}

@media (min-width: 1200px) {
    .ql-wrapper-demo {
        width: 70%;
    }
}

.ql-scrolling-demo {
    background-color: #ffffff;
    height: 100%;
    min-height: 100%;
    overflow: hidden;
    border: 1px solid #e8e8f7;
    position: relative;
    border-radius: 11px;
}

.ql-scrolling-demo .ql-container {
    border-width: 0;
    height: auto;
    min-height: 100%;
    padding: 30px;
}

.ql-scrolling-demo .ql-container .ql-editor {
    font-size: 16px;
    overflow-y: visible;
    color: #2e3649;
}

@media (min-width: 768px) {
    .ql-scrolling-demo {
        padding-left: 15px;
    }
}

@media (min-width: 768px) {
    .ql-scrolling-demo .ql-container {
        padding: 50px;
        padding-left: 35px;
    }
}

/* ###### Rangeslider  ###### */
.irs-min,
.irs-max {
    font-family: "Roboto", sans-serif;
    border-radius: 0;
}

.irs-from,
.irs-to,
.irs-single {
    font-family: "Roboto", sans-serif;
    border-radius: 0;
}

.irs-bar {
    background-image: none;
}

.irs-bar-edge {
    background-image: none;
    border-top-left-radius: 0;
    border-bottom-left-radius: 0;
}

.irs-line-left {
    background-image: none;
    background-color: #ecedef;
    border-top-left-radius: 0;
    border-bottom-left-radius: 0;
}

.irs-line-mid {
    background-image: none;
    background-color: #ecedef;
}

.irs-line-right {
    background-image: none;
    background-color: #ecedef;
    border-top-right-radius: 0;
    border-bottom-right-radius: 0;
}

.irs-slider {
    background-image: none;
}

.irs-slider:before {
    content: '';
    height: 18px;
    position: absolute;
    left: 50%;
    margin-left: -1px;
}

.irs-slider:hover:before,
.irs-slider:focus:before {
    background-color: #260bfa;
}

/*  ----- ----- ----- COLOR VARIANT SKINS  ----- ----- ----- */
.irs-success .irs-bar,
.irs-success .irs-bar-edge,
.irs-success .irs-slider::before,
.irs-success .irs-from,
.irs-success .irs-to,
.irs-success .irs-single {
    background-color: #269c8e;
}

.irs-success .irs-from::after,
.irs-success .irs-to::after,
.irs-success .irs-single::after {
    border-top-color: #269c8e;
}

.irs-dark .irs-bar,
.irs-dark .irs-bar-edge,
.irs-dark .irs-slider::before,
.irs-dark .irs-from,
.irs-dark .irs-to,
.irs-dark .irs-single {
    background-color: #2e3649;
}

.irs-dark .irs-from::after,
.irs-dark .irs-to::after,
.irs-dark .irs-single::after {
    border-top-color: #2e3649;
}

/*  ----- ----- ----- MODERN SKIN  ----- ----- ----- */
.irs-modern .irs-line-left,
.irs-modern .irs-line-mid,
.irs-modern .irs-line-right {
    height: 6px;
    box-shadow: inset -2px 2px 2px 0 rgba(34, 34, 34, 0.1);
}

.irs-modern .irs-bar,
.irs-modern .irs-bar-edge {
    height: 6px;
    box-shadow: inset 0 1px 1px 0 rgba(34, 34, 34, 0.1);
}

.irs-modern .irs-slider {
    top: 19px;
    background-color: #ffffff;
    border-radius: 0;
}

.irs-modern .irs-slider::before {
    width: 4px;
    height: 9px;
    background-color: #ffffff;
    margin-left: -2px;
    top: 3px;
}

.irs-modern.irs-success .irs-slider {
    border-color: #269c8e;
}

.irs-modern.irs-success .irs-slider::before {
    border-color: #269c8e;
}

.irs-modern.irs-dark .irs-slider {
    border-color: #8f9cc0;
}

.irs-modern.irs-dark .irs-slider::before {
    border-color: #8f9cc0;
}

/*  ----- ----- ----- OUTLINE SKIN  ----- ----- ----- */
.irs-outline .irs-line {
    height: 10px;
    border-radius: 5px;
}

.irs-outline .irs-line-left,
.irs-outline .irs-line-mid,
.irs-outline .irs-line-right {
    height: 10px;
    background-color: transparent;
}

.irs-outline .irs-bar {
    height: 10px;
}

.irs-outline .irs-bar-edge {
    height: 10px;
    border-top-left-radius: 5px;
    border-bottom-left-radius: 5px;
}

.irs-outline .irs-slider {
    top: 21px;
    width: 18px;
    background-color: #ffffff;
    border-radius: 100%;
}

.irs-outline .irs-slider::before {
    margin-left: -4px;
    top: 4px;
    width: 8px;
    height: 8px;
    border-radius: 100%;
}

.irs-outline.irs-success .irs-line,
.irs-outline.irs-success .irs-slider {
    border-color: #269c8e;
}

.irs-outline.irs-success .irs-line:hover::before,
.irs-outline.irs-success .irs-line:focus::before {
    background-color: #339701;
}

.irs-outline.irs-success .irs-slider:hover::before,
.irs-outline.irs-success .irs-slider:focus::before {
    background-color: #339701;
}

.irs-outline.irs-dark .irs-line,
.irs-outline.irs-dark .irs-slider {
    border-color: #2e3649;
}

.irs-outline.irs-dark .irs-line:hover::before,
.irs-outline.irs-dark .irs-line:focus::before {
    background-color: #313c53;
}

.irs-outline.irs-dark .irs-slider:hover::before,
.irs-outline.irs-dark .irs-slider:focus::before {
    background-color: #313c53;
}

/* ###### Rangeslider  ###### */
/* ###### Select2  ###### */
.select2-results__option {
    border-radius: 0;
    margin-bottom: 1px;
    font-size: 13px;
    padding: 6px 10px;
    font-size: 0.875rem;
}

.select2-container--default .select2-selection--single {
    background-color: #ffffff;
    border-color: #ecedef;
    border-radius: 3px;
    height: 38px;
    outline: none;
    border-radius: 0;
}

.select2-container--default .select2-selection--single .select2-selection__rendered {
    color: #3c4858;
    line-height: calc(1.5em + 0.75rem + 2px) -0.1rem;
    padding-left: 0.75rem;
    height: 100%;
    display: flex;
    align-items: center;
}

.select2-container--default .select2-selection--single .select2-selection__placeholder {
    color: #a8afc7;
}

.select2-container--default .select2-selection--single .select2-selection__arrow {
    width: 30px;
    height: 38px;
    line-height: calc(1.5em + 0.75rem + 2px);
}

.select2-container--default .select2-selection--single .select2-selection__arrow b {
    margin-top: -3px;
}

.select2-container--default .select2-selection--multiple {
    background-color: #ffffff;
    border-color: #ecedef;
    border-radius: 0;
    min-height: 38px;
    outline: none;
}

.select2-container--default .select2-selection--multiple .select2-selection__rendered {
    padding: 0 4px;
}

.select2-container--default .select2-selection--multiple .select2-selection__choice {
    position: relative;
    margin-top: 5px;
    margin-right: 4px;
    padding: 3px 10px 3px 20px !important;
    border-color: transparent;
    border-radius: 0;
    color: #ffffff;
    line-height: 1.45;
    border-radius: 6px !important;
}

.select2-container--default .select2-selection--multiple .select2-selection__choice__remove {
    color: #ffffff;
    opacity: .5;
    font-size: 12px;
    display: inline-block;
    position: absolute;
    top: 4px;
    left: 7px;
}

.select2-container--default.select2-container--focus .select2-selection--multiple {
    border-color: #ecedef;
    border: solid #eaeafa 1px;
}

.select2-container--default .select2-search--dropdown .select2-search__field {
    border-color: #ecedef;
    border-radius: 0;
}

.select2-container--default .select2-results__option[aria-selected="true"] {
    background-color: white;
}

.select2-container--default .select2-results>.select2-results__options {
    margin: 0px;
}

.select2-container--default .select2-search--inline .select2-search__field {
    margin-top: 7px;
    line-height: 26px;
    padding-left: 7px;
    opacity: 1;
}

.select2-container--default.select2-container--disabled .select2-selection__choice {
    padding-left: 10px;
    background-color: #a8afc7;
}

.select2-container--default.select2-container--disabled .select2-selection__choice .select2-selection__choice__remove {
    display: none;
}

.select2-container--open .select2-selection--single,
.select2-container--open .select2-selection--multiple {
    background-color: #ffffff;
    border-color: #ecedef;
}

.select2-container--open .select2-dropdown--above {
    border-top-left-radius: 0;
    border-top-right-radius: 0;
}

.select2-container--open .select2-dropdown--below {
    top: 0;
}

.select2-dropdown {
    border-color: #ecedef;
    z-index: 200;
}

.select2-search--dropdown {
    padding-bottom: 0;
}

.has-success .select2-container--default .select2-selection--single,
.parsley-select.parsley-success .select2-container--default .select2-selection--single {
    border-color: #269c8e;
}

.has-warning .select2-container--default .select2-selection--single {
    border-color: #ff9e01;
}

.has-danger .select2-container--default .select2-selection--single,
.parsley-select.parsley-error .select2-container--default .select2-selection--single {
    border-color: #f16d75;
}

.select2-xs+.select2-container,
.select2-dropdown-xs .select2-results__option {
    font-size: 12px;
}

.select2-sm+.select2-container,
.select2-dropdown-sm .select2-results__option {
    font-size: 14px;
}

.select2-bd-0+.select2-container--default .select2-selection--single {
    border-width: 0;
}

.bg-gray+.select2-container--default .select2-selection--single {
    background-color: #455473;
}

.bg-gray+.select2-container--default .select2-selection--single .select2-selection__rendered {
    color: #ecedef;
}

.select2-lg .select2-container .select2-selection--single {
    height: 45px !important;
}

.select2-sm .select2-container--default .select2-selection--single .select2-selection__rendered {
    line-height: 30px !important;
    font-size: 12px;
}

.select2-lg .select2-container--default .select2-selection--single .select2-selection__rendered {
    line-height: 45px !important;
}

.select2-sm .select2-container--default .select2-selection--single {
    height: 33px;
}

/* ###### Select2  ###### */
/* ###### Spectrum ###### */
.sp-container {
    background-color: #ffffff;
    border-color: #ecedef;
    z-index: 200;
}

.sp-container button {
    border: 0;
    padding: 8px 15px;
    background-image: none;
    background-color: #ecedef;
    font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
    font-size: 12px;
    text-shadow: none;
    text-transform: capitalize;
    border-radius: 2px;
    border-radius: 0;
    text-transform: none;
}

.sp-container button:hover,
.sp-container button:focus {
    border: 0;
    background-image: none;
    background-color: #a8afc7;
    text-shadow: none;
}

.sp-button-container .sp-cancel {
    font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
    font-size: 12px;
    text-transform: capitalize;
    color: #a8afc7 !important;
}

.sp-button-container .sp-cancel:hover,
.sp-button-container .sp-cancel:focus {
    color: #2e3649 !important;
    text-decoration: none;
}

.sp-picker-container {
    border-left: 0;
}

.sp-replacer {
    border-color: #ecedef;
    background-color: #ffffff;
}

.sp-replacer:hover,
.sp-replacer:focus {
    border-color: #b4bdce;
}

.sp-replacer.sp-active {
    border-color: #a8afc7;
}

.sp-dd {
    text-indent: -99999px;
    position: relative;
    width: 10px;
}

.sp-dd::before {
    content: '\f280';
    font-family: 'Ionicons';
    font-size: 15px;
    color: #a8afc7;
    position: absolute;
    text-indent: 0;
    left: 0;
    z-index: 10;
}

.sp-preview {
    border: 0;
}

.sp-dragger {
    background-color: transparent;
}

.sp-choose {
    background-color: #ecedef;
}

.sp-palette .sp-thumb-el:hover,
.sp-palette .sp-thumb-el.sp-thumb-active {
    border-color: #2e3649;
}

/* ###### Spectrum ###### */
/* ###### Spinner  ###### */
@keyframes spinner-border {
    to {
        transform: rotate(360deg);
    }
}

.spinner-border-sm {
    width: 1rem;
    height: 1rem;
    border-width: 0.2em;
}

@keyframes spinner-grow {
    0% {
        transform: scale(0);
    }

    50% {
        opacity: 1;
    }
}

.spinner-grow {
    display: inline-block;
    width: 2rem;
    height: 2rem;
    vertical-align: text-bottom;
    background-color: currentColor;
    border-radius: 50%;
    opacity: 0;
    animation: spinner-grow .75s linear infinite;
}

.spinner-grow-sm {
    width: 1rem;
    height: 1rem;
}

.spinner-border {
    display: inline-block;
    width: 2rem;
    height: 2rem;
    vertical-align: text-bottom;
    border: 0.25em solid currentColor;
    border-right-color: transparent;
    border-radius: 50%;
    animation: spinner-border .75s linear infinite;
}

.sr-only {
    position: absolute;
    width: 1px;
    height: 1px;
    padding: 0;
    overflow: hidden;
    clip: rect(0, 0, 0, 0);
    white-space: nowrap;
    border: 0;
}

@keyframes spinner-border {
    to {
        transform: rotate(360deg);
    }
}

/*
 * Loaders
 * ----------------------
 */
/*--circleloader--*/
.lds-circle {
    display: inline-block;
    transform: translateZ(1px);
}

.lds-circle>div {
    display: inline-block;
    width: 51px;
    height: 51px;
    margin: 6px;
    border-radius: 50%;
    animation: lds-circle 2.4s cubic-bezier(0, 0.2, 0.8, 1) infinite;
}

@keyframes lds-circle {

    0%,
    100% {
        animation-timing-function: cubic-bezier(0.5, 0, 1, 0.5);
    }

    0% {
        transform: rotateY(0deg);
    }

    50% {
        transform: rotateY(1800deg);
        animation-timing-function: cubic-bezier(0, 0.5, 0.5, 1);
    }

    100% {
        transform: rotateY(3600deg);
    }
}

/*---ring loaders --*/
.lds-dual-ring {
    display: inline-block;
    width: 64px;
    height: 64px;
}

.lds-dual-ring:after {
    content: " ";
    display: block;
    width: 46px;
    height: 46px;
    margin: 1px;
    border-radius: 50%;
    animation: lds-dual-ring 1.2s linear infinite;
}

@keyframes lds-dual-ring {
    0% {
        transform: rotate(0deg);
    }

    100% {
        transform: rotate(360deg);
    }
}

/*-- lines loader --*/
.lds-facebook {
    display: inline-block;
    position: relative;
    width: 64px;
    height: 64px;
}

.lds-facebook div {
    display: inline-block;
    position: absolute;
    left: 6px;
    width: 13px;
    animation: lds-facebook 1.2s cubic-bezier(0, 0.5, 0.5, 1) infinite;
}

.lds-facebook div:nth-child(1) {
    left: 6px;
    animation-delay: -0.24s;
}

.lds-facebook div:nth-child(2) {
    left: 26px;
    animation-delay: -0.12s;
}

.lds-facebook div:nth-child(3) {
    left: 45px;
    animation-delay: 0;
}

@keyframes lds-facebook {
    0% {
        top: 6px;
        height: 51px;
    }

    50%,
    100% {
        top: 19px;
        height: 26px;
    }
}

/*--heart loader --*/
.lds-heart {
    display: inline-block;
    position: relative;
    width: 64px;
    height: 64px;
    transform: rotate(45deg);
    transform-origin: 32px 32px;
}

.lds-heart div {
    top: 23px;
    left: 19px;
    position: absolute;
    width: 26px;
    height: 26px;
    animation: lds-heart 1.2s infinite cubic-bezier(0.215, 0.61, 0.355, 1);
}

.lds-heart div:after {
    content: " ";
    position: absolute;
    display: block;
    width: 26px;
    height: 26px;
    top: -17px;
    border-radius: 50% 50% 0 0;
}

.lds-heart div:before {
    content: " ";
    position: absolute;
    display: block;
    width: 26px;
    height: 26px;
    left: -17px;
    border-radius: 50% 0 0 50%;
}

@keyframes lds-heart {
    0% {
        transform: scale(0.95);
    }

    5% {
        transform: scale(1.1);
    }

    39% {
        transform: scale(0.85);
    }

    45% {
        transform: scale(1);
    }

    60% {
        transform: scale(0.95);
    }

    100% {
        transform: scale(0.9);
    }
}

/**-ripple --*/
.lds-ripple {
    display: inline-block;
    position: relative;
    width: 64px;
    height: 64px;
}

.lds-ripple div {
    position: absolute;
    opacity: 1;
    border-radius: 50%;
    animation: lds-ripple 1s cubic-bezier(0, 0.2, 0.8, 1) infinite;
}

.lds-ripple div:nth-child(2) {
    animation-delay: -0.5s;
}

@keyframes lds-ripple {
    0% {
        top: 28px;
        left: 28px;
        width: 0;
        height: 0;
        opacity: 1;
    }

    100% {
        top: -1px;
        left: -1px;
        width: 58px;
        height: 58px;
        opacity: 0;
    }
}

/*-- Spinner loader --*/
.lds-spinner {
    color: official;
    display: inline-block;
    position: relative;
    width: 64px;
    height: 64px;
}

.lds-spinner div {
    transform-origin: 32px 32px;
    animation: lds-spinner 1.2s linear infinite;
}

.lds-spinner div:after {
    content: " ";
    display: block;
    position: absolute;
    top: 3px;
    left: 29px;
    width: 5px;
    height: 14px;
    border-radius: 20%;
}

.lds-spinner div:nth-child(1) {
    transform: rotate(0deg);
    animation-delay: -1.1s;
}

.lds-spinner div:nth-child(2) {
    transform: rotate(30deg);
    animation-delay: -1s;
}

.lds-spinner div:nth-child(3) {
    transform: rotate(60deg);
    animation-delay: -0.9s;
}

.lds-spinner div:nth-child(4) {
    transform: rotate(90deg);
    animation-delay: -0.8s;
}

.lds-spinner div:nth-child(5) {
    transform: rotate(120deg);
    animation-delay: -0.7s;
}

.lds-spinner div:nth-child(6) {
    transform: rotate(150deg);
    animation-delay: -0.6s;
}

.lds-spinner div:nth-child(7) {
    transform: rotate(180deg);
    animation-delay: -0.5s;
}

.lds-spinner div:nth-child(8) {
    transform: rotate(210deg);
    animation-delay: -0.4s;
}

.lds-spinner div:nth-child(9) {
    transform: rotate(240deg);
    animation-delay: -0.3s;
}

.lds-spinner div:nth-child(10) {
    transform: rotate(270deg);
    animation-delay: -0.2s;
}

.lds-spinner div:nth-child(11) {
    transform: rotate(300deg);
    animation-delay: -0.1s;
}

.lds-spinner div:nth-child(12) {
    transform: rotate(330deg);
    animation-delay: 0s;
}

@keyframes lds-spinner {
    0% {
        opacity: 1;
    }

    100% {
        opacity: 0;
    }
}

/* ############### TEMPLATE STYLES ############### */
/* ###### Calendar  ###### */
.main-content-calendar .container,
.main-content-calendar .container-fluid {
    padding: 20px 0 0;
}

@media (min-width: 992px) {

    .main-content-calendar .container,
    .main-content-calendar .container-fluid {
        padding-top: 0;
    }
}

@media (min-width: 992px) {
    .main-content-left-calendar {
        width: 230px;
    }
}

.main-datepicker .ui-datepicker-inline {
    margin-top: 0;
}

.main-datepicker .ui-datepicker .ui-datepicker-title {
    letter-spacing: -.2px;
}

.main-datepicker .ui-datepicker .ui-datepicker-calendar {
    width: 100%;
}

.main-datepicker .ui-datepicker .ui-datepicker-calendar th {
    padding: 5px;
    font-size: 10px;
    color: #8f9cc0;
    text-align: center;
}

.main-datepicker .ui-datepicker .ui-datepicker-calendar td {
    text-align: center;
    padding: 0 1px;
}

.main-datepicker .ui-datepicker .ui-datepicker-calendar th.ui-datepicker-week-end:first-child:not(.ui-datepicker-other-month) a {
    color: #f16d75;
}

.main-datepicker .ui-datepicker .ui-datepicker-calendar td.ui-datepicker-week-end:first-child:not(.ui-datepicker-other-month) a {
    color: #f16d75;
}

.main-datepicker .ui-datepicker .ui-datepicker-calendar td span,
.main-datepicker .ui-datepicker .ui-datepicker-calendar td a {
    padding: 4px 5px;
    font-family: Verdana, sans-serif;
    font-size: 11px;
    color: #3c4858;
}

.main-datepicker .ui-datepicker .ui-datepicker-calendar .ui-datepicker-today a {
    color: #ffffff;
    border-radius: 2px;
}

.main-nav-calendar-event .nav-link {
    font-size: 13px;
    position: relative;
    padding: 0;
    height: 30px;
    line-height: 30px;
}

.main-nav-calendar-event .nav-link i {
    font-size: 21px;
    position: relative;
    margin-right: 10px;
    top: -.5px;
}

.main-nav-calendar-event .nav-link.exclude {
    color: #a8afc7;
}

.main-nav-calendar-event .nav-link.exclude i {
    color: #a8afc7;
}

.main-nav-calendar-event .nav-link.exclude::before {
    content: '';
    position: absolute;
    top: 50%;
    left: 0;
    right: 0;
    border-top: 1px solid #a8afc7;
}

@media (min-width: 992px) {
    .main-content-body-calendar {
        padding-left: 25px;
    }
}

.main-calendar {
    border-color: #ecedef;
}

.main-calendar .fc-content,
.main-calendar .fc-divider,
.main-calendar .fc-list-heading td,
.main-calendar .fc-list-view,
.main-calendar .fc-popover,
.main-calendar .fc-row,
.main-calendar tbody,
.main-calendar td,
.main-calendar th,
.main-calendar thead {
    border-color: #ecedef;
}

.main-calendar .fc-header-toolbar {
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    justify-content: space-between;
    margin-bottom: 15px;
    padding: 0 20px;
}

.main-calendar .fc-header-toolbar h2 {
    margin-bottom: 0;
    color: #4d4d6d;
    font-size: 20px;
    font-weight: 700;
}

.main-calendar .fc-header-toolbar .fc-right {
    order: 3;
}

.main-calendar .fc-header-toolbar .fc-clear {
    display: none;
}

.main-calendar .fc-header-toolbar button {
    background-color: #ffffff;
    background-image: none;
    border: 1px solid #e8e8f7;
    box-shadow: none;
    padding: 0 15px;
    display: flex;
    align-items: center;
    color: #8f9cc0;
    font-size: 13px;
    text-transform: capitalize;
    outline: none;
    text-shadow: none;
    border-radius: 0;
}

.main-calendar .fc-header-toolbar button:hover,
.main-calendar .fc-header-toolbar button:focus {
    background-color: #ecedef;
}

.main-calendar .fc-header-toolbar button.fc-prev-button,
.main-calendar .fc-header-toolbar button.fc-next-button {
    padding: 0;
    width: 38px;
    justify-content: center;
}

.main-calendar .fc-header-toolbar button.fc-prev-button span,
.main-calendar .fc-header-toolbar button.fc-next-button span {
    margin: 0;
}

.main-calendar .fc-header-toolbar button.fc-state-active {
    background-color: #ecedef;
}

.main-calendar .fc-header-toolbar button.fc-today-button {
    color: #ffffff;
}

.main-calendar .fc-header-toolbar button.fc-today-button.fc-state-disabled {
    border-color: #ecedef;
    background-color: #efefff;
    color: #30304a;
    cursor: default;
}

.main-calendar .fc-icon-left-single-arrow,
.main-calendar .fc-icon-right-single-arrow {
    top: 0;
}

.main-calendar .fc-icon-left-single-arrow::after,
.main-calendar .fc-icon-right-single-arrow::after {
    font-family: 'feather';
    font-size: 18px;
    font-weight: 400;
    line-height: 1;
}

.main-calendar .fc-icon-left-single-arrow::after {
    content: "\e92e";
}

.main-calendar .fc-icon-right-single-arrow::after {
    content: "\e92f";
}

.main-calendar .fc-head-container .fc-day-header {
    font-size: 11px;
    font-weight: 700;
    text-transform: uppercase;
    padding: 5px 0;
    color: #8f9cc0;
}

.main-calendar .fc-view>table {
    background-color: #ffffff;
    border: 1px solid #e8e8f7;
}

.main-calendar .fc-view>table>thead th,
.main-calendar .fc-view>table>thead td {
    border-color: #ecedef;
}

.main-calendar .fc-view>table>tbody>tr>td {
    border-color: #ecedef;
}

.main-calendar .fc-view .fc-other-month {
    background-color: #f9f9ff;
}

.main-calendar .fc-view .fc-day-number {
    font-size: 14px;
    font-weight: 400;
    font-family: Arial, sans-serif;
    color: #3c4858;
    display: inline-block;
    padding: 5px 8px;
    position: relative;
    transition: all 0.2s ease-in-out;
    margin: 2px 2px 0 0;
    min-width: 20px;
    text-align: center;
}

.main-calendar .fc-view .fc-day-number:hover,
.main-calendar .fc-view .fc-day-number:focus {
    color: #8f9cc0;
    background-color: #f8f9fa;
    border-radius: 11px;
}

.main-calendar .fc-view .fc-scroller {
    height: auto !important;
    overflow: visible !important;
}

.main-calendar .fc-view.fc-agenda-view .fc-day-header>a>span {
    display: block;
}

.main-calendar .fc-view.fc-agenda-view .fc-day-header>a>span:first-child {
    color: #a8afc7;
    font-size: 8px;
    font-weight: 400;
    line-height: 1.2;
}

.main-calendar .fc-view.fc-agenda-view .fc-day-header>a>span:last-child {
    font-weight: 700;
    font-size: 14px;
    font-family: Helvetica, Arial, sans-serif;
    line-height: 1;
}

.main-calendar .fc-view.fc-listMonth-view,
.main-calendar .fc-view.fc-listWeek-view {
    border-width: 0;
}

.main-calendar .fc-view.fc-listMonth-view .fc-scroller,
.main-calendar .fc-view.fc-listWeek-view .fc-scroller {
    padding: 0 20px 20px;
}

.main-calendar .fc-view.fc-listMonth-view .fc-list-table,
.main-calendar .fc-view.fc-listWeek-view .fc-list-table {
    border-collapse: separate;
    display: block;
}

.main-calendar .fc-view.fc-listMonth-view .fc-list-table>tbody,
.main-calendar .fc-view.fc-listWeek-view .fc-list-table>tbody {
    display: flex;
    flex-wrap: wrap;
}

.main-calendar .fc-view.fc-listMonth-view .fc-list-heading,
.main-calendar .fc-view.fc-listWeek-view .fc-list-heading {
    flex: 0 0 20%;
    max-width: 20%;
    margin-top: 15px;
}

.main-calendar .fc-view.fc-listMonth-view .fc-list-heading:first-child,
.main-calendar .fc-view.fc-listWeek-view .fc-list-heading:first-child,
.main-calendar .fc-view.fc-listMonth-view .fc-list-heading:first-child+.fc-list-item,
.main-calendar .fc-view.fc-listWeek-view .fc-list-heading:first-child+.fc-list-item {
    margin-top: 0;
}

.main-calendar .fc-view.fc-listMonth-view .fc-list-heading td,
.main-calendar .fc-view.fc-listWeek-view .fc-list-heading td {
    background-color: transparent;
    border-width: 0;
    padding: 0;
}

.main-calendar .fc-view.fc-listMonth-view .fc-list-heading-main,
.main-calendar .fc-view.fc-listWeek-view .fc-list-heading-main {
    display: block;
    font-size: 11px;
    text-transform: uppercase;
    color: #a8afc7;
    font-weight: 600;
    padding: 5px;
    text-align: center;
}

.main-calendar .fc-view.fc-listMonth-view .fc-list-heading-main span:last-child,
.main-calendar .fc-view.fc-listWeek-view .fc-list-heading-main span:last-child {
    display: block;
    font-size: 30px;
    font-weight: 700;
    font-family: Helvetica, Arial, sans-serif;
    letter-spacing: -1px;
    color: #8f9cc0;
    line-height: 1;
}

.main-calendar .fc-view.fc-listMonth-view .fc-list-item,
.main-calendar .fc-view.fc-listWeek-view .fc-list-item {
    flex: 0 0 calc(80% - 5px);
    max-width: calc(80% - 5px);
    dispLay: flex;
    flex-direction: column;
    border-left: 4px solid transparent;
    background-color: #ffffff;
    margin-top: 15px;
}

.main-calendar .fc-view.fc-listMonth-view .fc-list-item:hover,
.main-calendar .fc-view.fc-listMonth-view .fc-list-item:focus {
    cursor: pointer;
}

.main-calendar .fc-view.fc-listWeek-view .fc-list-item:hover,
.main-calendar .fc-view.fc-listWeek-view .fc-list-item:focus {
    cursor: pointer;
}

.main-calendar .fc-view.fc-listMonth-view .fc-list-item:hover td,
.main-calendar .fc-view.fc-listMonth-view .fc-list-item:focus td {
    background-color: transparent;
}

.main-calendar .fc-view.fc-listWeek-view .fc-list-item:hover td,
.main-calendar .fc-view.fc-listWeek-view .fc-list-item:focus td {
    background-color: transparent;
}

.main-calendar .fc-view.fc-listMonth-view .fc-list-item>td,
.main-calendar .fc-view.fc-listWeek-view .fc-list-item>td {
    border-width: 0;
}

.main-calendar .fc-view.fc-listMonth-view .fc-list-item>td.fc-list-item-time,
.main-calendar .fc-view.fc-listWeek-view .fc-list-item>td.fc-list-item-time {
    border-top: 1px solid #e8e8f7;
    border-right: 1px solid #e8e8f7;
    box-sizing: border-box;
}

.main-calendar .fc-view.fc-listMonth-view .fc-list-item>td.fc-list-item-title,
.main-calendar .fc-view.fc-listWeek-view .fc-list-item>td.fc-list-item-title {
    border-bottom: 1px solid #e8e8f7;
    border-right: 1px solid #e8e8f7;
    box-sizing: border-box;
}

.main-calendar .fc-view.fc-listMonth-view .fc-list-item+.fc-list-item,
.main-calendar .fc-view.fc-listWeek-view .fc-list-item+.fc-list-item {
    margin-left: 20%;
}

.main-calendar .fc-view.fc-listMonth-view .fc-list-item-marker,
.main-calendar .fc-view.fc-listWeek-view .fc-list-item-marker {
    display: none;
}

.main-calendar .fc-view.fc-listMonth-view .fc-list-item-time,
.main-calendar .fc-view.fc-listWeek-view .fc-list-item-time {
    padding: 12px 15px 2px;
    font-size: 13px;
    text-transform: capitalize;
    width: 100%;
}

.main-calendar .fc-view.fc-listMonth-view .fc-list-item-title,
.main-calendar .fc-view.fc-listWeek-view .fc-list-item-title {
    padding: 0 15px 12px;
}

.main-calendar .fc-view.fc-listMonth-view .fc-list-item-title a,
.main-calendar .fc-view.fc-listWeek-view .fc-list-item-title a {
    display: block;
    font-weight: 700;
    font-size: 15px;
    margin-bottom: 5px;
    color: #8f9cc0;
}

.main-calendar .fc-view.fc-listMonth-view .fc-list-item-title .fc-desc,
.main-calendar .fc-view.fc-listWeek-view .fc-list-item-title .fc-desc {
    font-size: 13px;
    line-height: 1.375;
    display: block;
}

.main-calendar td.fc-today {
    background-color: #f8f9fa;
}

.main-calendar td.fc-today .fc-day-number {
    color: #ffffff;
    border-radius: 11px;
}

.main-calendar td.fc-today .fc-day-number:hover,
.main-calendar td.fc-today .fc-day-number:focus {
    border-radius: 11px;
}

.main-calendar .fc-axis {
    font-size: 11px;
}

.main-calendar .fc-event {
    border-width: 0;
    border-top-width: 5px;
    border-radius: 11px;
    text-align: center;
}

.main-calendar .fc-event.fc-day-grid-event>div {
    display: none;
}

.main-calendar .fc-event.fc-day-grid-event>div .fc-time {
    font-weight: 500;
}

.main-calendar .fc-event.fc-day-grid-event>div .fc-desc {
    display: none;
}

.main-calendar .fc-time-grid-event {
    padding: 5px;
    border-left-width: 0;
    border-top-width: 2px;
}

.main-calendar .fc-time-grid-event .fc-time {
    font-size: 12px;
}

.main-calendar .fc-time-grid-event .fc-title {
    font-size: 14px;
    font-weight: 700;
    color: #8f9cc0;
    margin-bottom: 10px;
}

.main-calendar .fc-time-grid-event .fc-desc {
    font-size: 13px;
    line-height: 1.3;
    color: rgba(28, 39, 60, 0.8);
}

.main-calendar .fc-agendaWeek-view .fc-time-grid-event>div {
    display: none;
}

.main-calendar .fc-agendaWeek-view .fc-time-grid-event>div .fc-time {
    font-size: 11px;
}

.main-calendar .fc-agendaWeek-view .fc-time-grid-event>div .fc-title {
    font-size: 13px;
}

.main-calendar .fc-agendaWeek-view .fc-time-grid-event>div .fc-desc {
    display: none;
}

.main-calendar .fc-list-empty {
    padding: 20px 0;
    background-color: #ffffff;
    border: 1px solid #e8e8f7;
}

@media (min-width: 992px) {
    .main-calendar .fc-header-toolbar {
        padding: 0;
        margin-bottom: 24px;
    }
}

@media (min-width: 576px) {
    .main-calendar .fc-header-toolbar h2 {
        font-size: 22px;
    }
}

@media (max-width: 767.98px) {
    .main-calendar .fc-header-toolbar .fc-center {
        order: 1;
        flex: 0 0 100%;
        display: flex;
        justify-content: center;
        margin-bottom: 20px;
    }

    .main-calendar .fc-header-toolbar .fc-left {
        order: 2;
        flex: 0 0 50%;
    }

    .main-calendar .fc-header-toolbar .fc-right {
        flex: 0 0 50%;
        display: flex;
        justify-content: flex-end;
    }
}

@media (max-width: 575px) {

    .main-calendar .fc-header-toolbar button.fc-prev-button,
    .main-calendar .fc-header-toolbar button.fc-next-button {
        width: 32px;
        height: 32px;
    }

    .main-calendar .fc-header-toolbar button.fc-today-button {
        height: 32px;
        padding-left: 10px;
        padding-right: 10px;
        font-size: 11px;
    }

    .main-calendar .fc-header-toolbar button.fc-month-button,
    .main-calendar .fc-header-toolbar button.fc-agendaWeek-button,
    .main-calendar .fc-header-toolbar button.fc-agendaDay-button,
    .main-calendar .fc-header-toolbar button.fc-listWeek-button,
    .main-calendar .fc-header-toolbar button.fc-listMonth-button {
        text-indent: -9999px;
        width: 32px;
        height: 32px;
        position: relative;
        color: transparent;
    }

    .main-calendar .fc-header-toolbar button.fc-month-button::before,
    .main-calendar .fc-header-toolbar button.fc-agendaWeek-button::before,
    .main-calendar .fc-header-toolbar button.fc-agendaDay-button::before,
    .main-calendar .fc-header-toolbar button.fc-listWeek-button::before,
    .main-calendar .fc-header-toolbar button.fc-listMonth-button::before {
        position: absolute;
        top: 6px;
        left: 10px;
        z-index: 100;
        display: inline-block;
        text-indent: 0;
        font-size: 12px;
        font-weight: 700;
        color: #8f9cc0;
    }

    .main-calendar .fc-header-toolbar button.fc-month-button::before {
        content: 'M';
    }

    .main-calendar .fc-header-toolbar button.fc-agendaWeek-button::before {
        content: 'W';
    }

    .main-calendar .fc-header-toolbar button.fc-agendaDay-button::before {
        content: 'D';
    }

    .main-calendar .fc-header-toolbar button.fc-listWeek-button::before,
    .main-calendar .fc-header-toolbar button.fc-listMonth-button::before {
        content: 'L';
        left: 11px;
    }
}

@media (min-width: 992px) {

    .main-calendar .fc-icon-left-single-arrow::after,
    .main-calendar .fc-icon-right-single-arrow::after {
        line-height: .75;
    }
}

@media (min-width: 576px) {
    .main-calendar .fc-head-container .fc-day-header {
        font-size: 12px;
    }
}

@media (max-width: 991.98px) {

    .main-calendar .fc-view>table>thead th:first-child,
    .main-calendar .fc-view>table>thead td:first-child {
        border-left-width: 0;
    }

    .main-calendar .fc-view>table>thead th:last-child,
    .main-calendar .fc-view>table>thead td:last-child {
        border-right-width: 0;
    }
}

@media (max-width: 991.98px) {
    .main-calendar .fc-view>table>tbody>tr>td:first-child {
        border-left-width: 0;
    }

    .main-calendar .fc-view>table>tbody>tr>td:last-child {
        border-right-width: 0;
    }
}

@media (prefers-reduced-motion: reduce) {
    .main-calendar .fc-view .fc-day-number {
        transition: none;
    }
}

@media (min-width: 576px) {
    .main-calendar .fc-view.fc-agenda-view .fc-day-header>a>span:first-child {
        font-size: 11px;
        font-weight: 400;
    }
}

@media (min-width: 576px) {
    .main-calendar .fc-view.fc-agenda-view .fc-day-header>a>span:last-child {
        font-size: 25px;
    }
}

@media (min-width: 992px) {

    .main-calendar .fc-view.fc-listMonth-view .fc-scroller,
    .main-calendar .fc-view.fc-listWeek-view .fc-scroller {
        padding: 0;
    }
}

@media (min-width: 576px) {

    .main-calendar .fc-view.fc-listMonth-view .fc-list-heading,
    .main-calendar .fc-view.fc-listWeek-view .fc-list-heading {
        flex: 0 0 15%;
        max-width: 15%;
    }
}

@media (min-width: 768px) {

    .main-calendar .fc-view.fc-listMonth-view .fc-list-heading,
    .main-calendar .fc-view.fc-listWeek-view .fc-list-heading {
        flex: 0 0 12%;
        max-width: 12%;
    }
}

@media (min-width: 992px) {

    .main-calendar .fc-view.fc-listMonth-view .fc-list-heading,
    .main-calendar .fc-view.fc-listWeek-view .fc-list-heading {
        flex: 0 0 10%;
        max-width: 10%;
    }
}

@media (min-width: 1200px) {

    .main-calendar .fc-view.fc-listMonth-view .fc-list-heading,
    .main-calendar .fc-view.fc-listWeek-view .fc-list-heading {
        flex: 0 0 8%;
        max-width: 8%;
    }
}

@media (min-width: 576px) {

    .main-calendar .fc-view.fc-listMonth-view .fc-list-item,
    .main-calendar .fc-view.fc-listWeek-view .fc-list-item {
        flex: 0 0 calc(85% - 5px);
        max-width: calc(85% - 5px);
    }
}

@media (min-width: 768px) {

    .main-calendar .fc-view.fc-listMonth-view .fc-list-item,
    .main-calendar .fc-view.fc-listWeek-view .fc-list-item {
        flex: 0 0 calc(88% - 5px);
        max-width: calc(88% - 5px);
    }
}

@media (min-width: 992px) {

    .main-calendar .fc-view.fc-listMonth-view .fc-list-item,
    .main-calendar .fc-view.fc-listWeek-view .fc-list-item {
        flex: 0 0 calc(90% - 5px);
        max-width: calc(90% - 5px);
    }
}

@media (min-width: 1200px) {

    .main-calendar .fc-view.fc-listMonth-view .fc-list-item,
    .main-calendar .fc-view.fc-listWeek-view .fc-list-item {
        flex: 0 0 calc(92% - 5px);
        max-width: calc(92% - 5px);
    }
}

@media (min-width: 576px) {

    .main-calendar .fc-view.fc-listMonth-view .fc-list-item+.fc-list-item,
    .main-calendar .fc-view.fc-listWeek-view .fc-list-item+.fc-list-item {
        margin-left: 15%;
    }
}

@media (min-width: 768px) {

    .main-calendar .fc-view.fc-listMonth-view .fc-list-item+.fc-list-item,
    .main-calendar .fc-view.fc-listWeek-view .fc-list-item+.fc-list-item {
        margin-left: 12%;
    }
}

@media (min-width: 992px) {

    .main-calendar .fc-view.fc-listMonth-view .fc-list-item+.fc-list-item,
    .main-calendar .fc-view.fc-listWeek-view .fc-list-item+.fc-list-item {
        margin-left: 10%;
    }
}

@media (min-width: 1200px) {

    .main-calendar .fc-view.fc-listMonth-view .fc-list-item+.fc-list-item,
    .main-calendar .fc-view.fc-listWeek-view .fc-list-item+.fc-list-item {
        margin-left: 8%;
    }
}

@media (min-width: 576px) {
    .main-calendar .fc-axis {
        font-size: 13px;
    }
}

@media (min-width: 576px) {
    .main-calendar .fc-event {
        border-top-width: 0;
        border-left-width: 2px;
        padding: 3px 4px;
    }
}

@media (min-width: 576px) {
    .main-calendar .fc-event.fc-day-grid-event>div {
        display: block;
    }
}

@media (min-width: 576px) {
    .main-calendar .fc-agendaWeek-view .fc-time-grid-event>div {
        display: block;
    }
}

@media (min-width: 992px) {
    .main-calendar .fc-agendaWeek-view .fc-time-grid-event>div .fc-desc {
        display: block;
    }
}

.main-modal-calendar-schedule .modal-content {
    border-width: 0;
    position: relative;
}

.main-modal-calendar-schedule .modal-content>.close {
    position: absolute;
    top: 20px;
    right: 25px;
    font-size: 28px;
    font-weight: 700;
    color: #a8afc7;
    text-shadow: none;
}

.main-modal-calendar-schedule .modal-header {
    padding: 20px 25px;
}

.main-modal-calendar-schedule .modal-body {
    padding: 30px 25px;
}

.main-modal-calendar-schedule .form-group-date {
    display: flex;
    align-items: center;
    border: 1px solid #e8e8f7;
    background-color: #f8f9fa;
    padding: 10px 5px;
    color: #8f9cc0;
    font-size: 13px;
    font-weight: 600;
}

.main-modal-calendar-schedule .form-group-date>i {
    font-size: 32px;
    line-height: 0;
    margin-right: 10px;
    opacity: .5;
}

.main-modal-calendar-schedule .select2-container {
    width: 100% !important;
}

.main-modal-calendar-event .modal-content {
    border-width: 0;
    position: relative;
    background-color: transparent;
}

.main-modal-calendar-event .modal-content>.close {
    font-size: 18px;
    text-shadow: none;
}

.main-modal-calendar-event .modal-header {
    position: relative;
    padding: 20px;
    border-bottom-width: 0;
    display: flex;
    align-items: center;
    justify-content: space-between;
    justify-content: flex-end;
}

.main-modal-calendar-event .nav-modal-event {
    align-items: center;
}

.main-modal-calendar-event .nav-modal-event .nav-link {
    padding: 0;
    color: rgba(255, 255, 255, 0.75);
    font-size: 21px;
    line-height: 0;
    position: relative;
    transition: all 0.2s ease-in-out;
}

.main-modal-calendar-event .nav-modal-event .nav-link:hover,
.main-modal-calendar-event .nav-modal-event .nav-link:focus {
    color: #ffffff;
}

.main-modal-calendar-event .nav-modal-event .nav-link+.nav-link {
    margin-left: 15px;
}

.main-modal-calendar-event .nav-modal-event .nav-link:last-child {
    font-size: 24px;
}

.main-modal-calendar-event .event-title {
    color: #ffffff;
    font-size: 18px;
    font-weight: 500;
    margin-bottom: 0;
    line-height: 1;
}

.main-modal-calendar-event .modal-body {
    padding: 20px;
    background-color: #ffffff;
}

.main-modal-calendar-event .event-start-date,
.main-modal-calendar-event .event-end-date {
    color: #8f9cc0;
    font-weight: 500;
}

.main-modal-calendar-event .event-desc {
    margin-top: 5px;
}

.main-modal-calendar-event .event-desc:empty {
    margin-bottom: 5px;
}

@media (min-width: 576px) {
    .main-modal-calendar-event .modal-header {
        padding: 20px 25px;
    }
}

@media (prefers-reduced-motion: reduce) {
    .main-modal-calendar-event .nav-modal-event .nav-link {
        transition: none;
    }
}

@media (min-width: 576px) {
    .main-modal-calendar-event .modal-body {
        padding: 30px;
    }
}

/* ###### Calendar  ###### */
/* ###### Chat  ###### */
@media (max-width: 991.98px) {
    .main-content-body-show .main-header-menu-icon {
        display: none;
    }

    .main-content-body-show .main-header-left .main-header-arrow {
        display: block;
    }

    .main-content-body-show .main-content-left-chat {
        display: none;
    }

    .main-content-body-show .main-content-body-chat {
        display: flex;
    }
}

.main-content-left-chat {
    width: 100%;
    position: relative;
    display: flex;
    flex-direction: column;
    padding: 0;
}

.main-nav-line-chat {
    border-bottom: 1px solid #e8e8f7;
    padding: 19px;
    flex-shrink: 0;
    flex-direction: row;
    padding-left: 20px;
}

.main-nav-line-chat .nav-link {
    font-size: 13px;
    font-weight: 700;
    color: #2e3649;
    text-transform: uppercase;
}

.main-nav-line-chat .nav-link:hover,
.main-nav-line-chat .nav-link:focus,
.main-nav-line-chat .nav-link:active {
    outline: none;
}

.main-nav-line-chat .nav-link+.nav-link {
    margin-top: 0;
    margin-left: 30px;
}

.main-chat-contacts-wrapper {
    padding: 10px 20px;
    flex-shrink: 0;
    border-bottom: 1px solid #e8e8f7;
    overflow: hidden;
}

.main-chat-contacts-wrapper .main-content-label,
.main-chat-contacts-wrapper .card-table-two .card-title {
    margin-bottom: 15px;
    line-height: 1;
}

@media (min-width: 992px) {
    .main-chat-contacts-wrapper {
        padding: 10px 0px 10px 15px;
    }
}

.card-table-two .main-chat-contacts-wrapper .card-title,
.main-chat-contacts-wrapper .card-dashboard-eight .card-title,
.card-dashboard-eight .main-chat-contacts-wrapper .card-title {
    margin-bottom: 15px;
    line-height: 1;
}

.main-chat-contacts-wrapper .lSSlideOuter,
.main-chat-contacts-wrapper .lSSlideWrapper {
    overflow: visible;
}

.main-chat-contacts {
    padding-left: 0px;
    display: flex;
}

.main-chat-contacts .lslide {
    display: flex;
    flex-direction: column;
    align-items: center;
    float: none;
}

.main-chat-contacts small {
    font-size: 11px;
    width: 36px;
    text-overflow: ellipsis;
    white-space: nowrap;
    overflow: hidden;
    margin-top: 3px;
    text-align: center;
}

.main-chat-contacts-more {
    width: 36px;
    height: 36px;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 100%;
    font-size: 12px;
    font-weight: 500;
    color: #ffffff;
}

@media (min-width: 992px) {
    #ChatList {
        max-height: 680px;
    }

    #ChatCalls {
        max-height: 680px;
    }

    #ChatContacts {
        max-height: 680px;
    }

    .ps>.ps__rail-y>.ps__thumb-y,
    .ps>.ps__rail-y {
        height: 0 !important;
    }
}

.main-chat-list .media {
    padding: 12px 20px;
    border: 1px solid transparent;
    position: relative;
}

.main-chat-list .media .main-img-user {
    flex-shrink: 0;
    top: 3px;
}

.main-chat-list .media+.media {
    margin-top: -1px;
    border-top: 1px solid #e8e8f7;
}

.main-chat-list .media.new {
    background-color: #ffffff;
}

.main-chat-list .media.new .main-img-user span {
    display: flex;
}

.main-chat-list .media.new .media-contact-name span:first-child {
    font-weight: 600;
    color: #181c27;
}

.main-chat-list .media.new .media-body p {
    color: #8f9cc0;
}

.main-chat-list .media:hover,
.main-chat-list .media:focus {
    cursor: pointer;
    background-color: #f8f9fa;
    border-top-color: #ecedef;
    border-bottom-color: #ecedef;
}

.main-chat-list .media:hover:first-child,
.main-chat-list .media:focus:first-child {
    border-top-color: transparent;
}

.main-chat-list .media.selected {
    background-color: #f8f9fa;
    border-top-color: #ecedef;
    border-bottom-color: #ecedef;
}

.main-chat-list .media.selected:first-child {
    border-top-color: transparent;
}

.main-chat-list .media.selected::after {
    display: block;
}

.main-chat-list .media.selected .media-contact-name span:first-child {
    color: #404c6d;
}

.main-chat-list .media.selected .media-body p {
    color: #8f9cc0;
}

.main-chat-list .main-img-user span {
    position: absolute;
    top: 0;
    left: -2px;
    width: 14px;
    height: 14px;
    display: none;
    align-items: center;
    justify-content: center;
    border-radius: 100%;
    font-size: 9px;
    font-weight: 500;
    color: #ffffff;
    background-color: #f16d75;
    box-shadow: 0 0 0 2px #ffffff;
}

.main-chat-list .media-body {
    margin-left: 15px;
}

.main-chat-list .media-body p {
    font-size: 13px;
    margin-bottom: 0;
    color: #a8afc7;
    line-height: 1.35;
}

.main-chat-list .media-contact-name {
    display: flex;
    align-items: center;
    justify-content: space-between;
    margin-bottom: 2px;
}

.main-chat-list .media-contact-name span:first-child {
    display: block;
    font-size: 15px;
    font-weight: 500;
    color: #404c6d;
}

.main-chat-list .media-contact-name span:last-child {
    display: block;
    font-size: 11px;
    color: #a8afc7;
}

@media (min-width: 992px) {
    .main-chat-list .media {
        padding: 12px 15px;
    }
}

.main-content-body-chat {
    flex-direction: column;
}

@media (min-width: 992px) {
    .main-content-body-chat {
        display: flex;
    }
}

.main-chat-header {
    flex-shrink: 0;
    display: flex;
    align-items: center;
    justify-content: flex-start;
    padding: 15px 12px;
    border-bottom: 1px solid #e8e8f7;
}

.main-chat-header .nav {
    margin-left: auto;
    align-items: center;
}

.main-chat-header .nav-link {
    padding: 0;
    color: #bcc2d2;
    font-size: 20px;
    display: none;
    font-weight: 600;
}

.main-chat-header .nav-link:first-child {
    display: block;
}

.main-chat-header .nav-link i {
    line-height: 0;
}

.main-chat-header .nav-link .typcn {
    line-height: .9;
}

.main-chat-header .nav-link .typcn::before {
    width: auto;
}

.main-chat-header .nav-link+.nav-link {
    margin-left: 15px;
}

@media (min-width: 576px) {
    .main-chat-header .nav-link {
        display: block;
    }

    .main-chat-header .nav-link:first-child {
        display: none;
    }
}

.main-chat-msg-name {
    margin-left: 15px;
}

.main-chat-msg-name h6 {
    margin-bottom: 0px;
    font-size: 15px;
    font-weight: 700;
    color: #000000;
}

.main-chat-msg-name small {
    font-size: 12px;
    color: #a8afc7;
}

.main-chat-body {
    position: relative;
}

.main-chat-body .content-inner {
    padding: 20px;
}

.main-chat-body .media+.media {
    margin-top: 20px;
}

.main-chat-body .media.flex-row-reverse .media-body {
    margin-left: 0;
    margin-right: 20px;
    align-items: flex-end;
}

.main-chat-body .media.flex-row-reverse .main-msg-wrapper {
    background-color: #ecedef;
    color: #1e1635;
    position: relative;
}

.main-chat-body .media.flex-row-reverse .main-msg-wrapper:before,
.main-chat-body .media.flex-row-reverse .main-msg-wrapper:after {
    right: auto;
    left: 100%;
    border-right-color: transparent;
    border-left-color: #ecedef;
}

.main-chat-body .media.flex-row-reverse .main-msg-wrapper:before {
    margin-top: -6px;
}

.main-chat-body .media.flex-row-reverse .main-msg-wrapper:after {
    border-width: 8px;
    margin-top: -8px;
}

@media (min-width: 992px) {
    .main-chat-body {
        padding-bottom: 0;
        height: calc(100% - 105px);
        overflow: hidden;
    }
}

@media (min-width: 576px) {
    .main-chat-body .media.flex-row-reverse .media-body {
        margin-left: 55px;
    }
}

.main-msg-wrapper {
    position: relative;
    padding: 10px 15px;
    background-color: #f8f9fa;
    font-size: 13px;
    margin-bottom: 5px;
    display: inline-block;
    border-radius: 11px;
}

.main-msg-wrapper:before,
.main-msg-wrapper:after {
    border-color: transparent #f4f6ff transparent transparent;
    border-image: none;
    border-style: solid;
    border-width: medium;
    content: " ";
    height: 0;
    pointer-events: none;
    position: absolute;
    right: 100%;
    top: 50%;
    width: 0;
}

.main-msg-wrapper:before {
    margin-top: -6px;
}

.main-msg-wrapper:after {
    border-width: 8px;
    margin-top: -8px;
}

.main-chat-body .media-body {
    margin-left: 20px;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
}

.main-chat-body .media-body>div:last-child {
    font-size: 11px;
    color: #a8afc7;
    display: flex;
    align-items: center;
}

@media (min-width: 576px) {
    .main-chat-body .media-body {
        margin-right: 55px;
    }
}

.main-chat-time {
    display: block;
    position: relative;
    text-align: center;
    margin: 20px 0;
}

.main-chat-time:first-of-type {
    margin-top: 0;
}

.main-chat-time span {
    font-size: 10px;
    font-weight: 500;
    text-transform: uppercase;
    letter-spacing: 1px;
    background: #ecedef;
    padding: 5px;
    border-radius: 4px;
}

.main-chat-footer {
    flex-shrink: 0;
    display: flex;
    align-items: center;
    height: 50px;
    padding: 0 20px;
    border-top: 1px solid #e8e8f7;
    background-color: #ffffff;
    position: fixed;
    bottom: 0;
    left: 0;
    right: 0;
    border-radius: 0 0 11px 11px;
}

.main-chat-footer .nav {
    align-items: center;
}

.main-chat-footer .nav-link {
    padding: 0;
    color: #a8afc7;
    font-size: 16px;
    display: none;
}

.main-chat-footer .nav-link+.nav-link {
    margin-left: 10px;
}

.main-chat-footer .form-control {
    flex: 1;
    margin: 0 10px;
    padding-left: 0;
    padding-right: 0;
    border-width: 0;
}

.main-chat-footer .form-control:hover,
.main-chat-footer .form-control:focus {
    box-shadow: none;
}

@media (min-width: 992px) {
    .main-chat-footer {
        position: relative;
        bottom: auto;
        left: auto;
        right: auto;
    }
}

@media (min-width: 576px) {
    .main-chat-footer .nav-link {
        display: block;
    }
}

@media (min-width: 576px) {
    .main-chat-footer .form-control {
        margin-left: 20px;
    }
}

@media (min-width: 768px) {
    .main-chat-footer .form-control {
        margin: 0 20px;
    }
}

.main-msg-send {
    font-size: 20px;
}

.main-content-left-chat .btn {
    background-color: transparent;
    margin-left: -6px;
    min-height: 40px;
    position: absolute;
    right: 0;
    left: auto;
    top: 0;
}

.main-content-left-chat .form-control {
    transition: none;
    height: 40px;
    border-radius: 10px !important;
    width: 100%;
    flex: inherit;
    border: 1px solid #eceef5;
}

.main-content-left-chat .form-control:focus {
    border-color: #eceef5;
}

.main-content-left.main-content-left-chat .search-element {
    position: relative;
}

/* ###### Chat  ###### */
/* ########## Contacts ########## */
@media (min-width: 768px) and (max-width: 991.98px) {
    .main-content-body-show .main-header-contacts .main-header-menu-icon {
        display: flex;
    }

    .main-content-body-show .main-content-left-contacts {
        display: block;
    }
}

.main-content-left-contacts {
    width: 100%;
    display: block;
    padding: 0;
}

@media (max-width: 768px) {
    .main-contacts-list {
        height: 570px !important;
        max-height: 570px !important;
    }
}

@media (min-width: 769px) {
    .main-contacts-list {
        height: 800px !important;
        max-height: 800px !important;
    }
}

.main-contact-label {
    padding-top: 20px;
    padding-bottom: 5px;
    padding-left: 20px;
    font-weight: 500;
    font-size: 12px;
    color: #a8afc7;
    position: relative;
    z-index: 0;
}

.main-contact-label::after {
    content: '';
    position: absolute;
    bottom: -1px;
    left: 0;
    right: 0;
    border-bottom: 1px solid #e8e8f7;
    z-index: 5;
}

.main-contact-item {
    padding: 10px 20px;
    border: 1px solid transparent;
    border-right-width: 0;
    display: flex;
    position: relative;
    cursor: pointer;
}

.main-contact-item+.main-contact-item {
    margin-top: -1px;
    border-top-color: transparent;
    border-top: 1px solid #e8e8f7;
}

.main-contact-item:hover,
.main-contact-item:focus {
    background-color: #f8f9fa;
    border-top-color: #ecedef;
    border-bottom-color: #ecedef;
}

.main-contact-item.selected {
    z-index: 0;
    border-left-color: #ecedef;
    border-top-color: #ecedef;
    border-bottom-color: #ecedef;
    background-color: #f9f9ff;
}

@media (min-width: 992px) {
    .main-contact-item {
        padding: 10px 15px;
    }
}

.main-contact-body {
    flex: 1;
    margin-left: 15px;
}

.main-contact-body h6 {
    color: #454567;
    font-weight: 500;
    margin-bottom: 2px;
}

.main-contact-body span {
    font-size: 13px;
    color: #a8afc7;
}

.main-contact-star {
    font-size: 16px;
    color: #a8afc7;
}

.main-contact-star:hover,
.main-contact-star:focus {
    color: #a8afc7;
}

.main-contact-star.active {
    color: #ff9e01;
}

@media (min-width: 992px) {
    .main-content-body-contacts {
        overflow: hidden;
    }
}

.main-contact-info-header {
    padding-top: 40px;
    padding-left: 20px;
    padding-bottom: 20px;
    border-bottom: 1px solid #e8e8f7;
    position: relative;
}

.main-contact-info-header .media {
    display: block;
}

.main-contact-info-header .main-img-user {
    width: 100px;
    height: 100px;
}

.main-contact-info-header .main-img-user::after {
    display: none;
}

.main-contact-info-header .main-img-user a {
    position: absolute;
    bottom: 0;
    right: 0;
    display: flex;
    align-items: center;
    justify-content: center;
    width: 32px;
    height: 32px;
    background-color: #f9f9ff;
    color: #454567;
    font-size: 18px;
    line-height: .9;
    box-shadow: 0 0 0 2px #ecedef;
    border-radius: 100%;
}

.main-contact-info-header .main-img-user a:hover,
.main-contact-info-header .main-img-user a:focus {
    color: #ffffff;
    box-shadow: 0 0 0 2px 557ef6;
}

.main-contact-info-header .media-body {
    margin-top: 30px;
}

.main-contact-info-header .media-body h4 {
    color: #454567;
    font-size: 21px;
    font-weight: 500;
    margin-bottom: 2px;
    line-height: 1;
}

.main-contact-info-header .media-body p {
    font-size: 13px;
    color: #3c4858;
    margin-bottom: 15px;
}

.main-contact-info-header .media-body .nav-link {
    padding: 0;
    display: flex;
    align-items: center;
    color: #a8afc7;
    font-size: 13px;
}

.main-contact-info-header .media-body .nav-link i {
    font-size: 18px;
    line-height: 0;
    margin-right: 5px;
}

.main-contact-info-header .media-body .nav-link i.typcn {
    line-height: .9;
}

.main-contact-info-header .media-body .nav-link i.typcn::before {
    width: auto;
}

.main-contact-info-header .media-body .nav-link+.nav-link {
    margin-left: 10px;
}

@media (min-width: 992px) {
    .main-contact-info-header .media {
        display: flex;
        align-items: center;
    }
}

@media (min-width: 992px) {
    .main-contact-info-header .media-body {
        margin-top: 0;
        margin-left: 30px;
    }
}

@media (min-width: 576px) {
    .main-contact-info-header .media-body .nav-link {
        font-size: 0.875rem;
    }
}

@media (min-width: 576px) {
    .main-contact-info-header .media-body .nav-link i {
        margin-right: 7px;
    }
}

@media (min-width: 576px) {
    .main-contact-info-header .media-body .nav-link+.nav-link {
        margin-left: 25px;
    }
}

.main-contact-action {
    position: absolute;
    top: 0;
    right: 20px;
    display: flex;
}

.main-contact-action a {
    display: flex;
    align-items: center;
    color: #a8afc7;
    font-size: 12px;
}

@media (min-width: 992px) {
    .main-contact-action {
        right: 0;
    }
}

.main-contact-info-body {
    padding: 1.25rem;
}

.main-contact-info-body .media-list {
    padding: 20px 0;
    padding: 15px 0;
}

.main-contact-info-body .media {
    align-items: center;
    position: relative;
}

.main-contact-info-body .media+.media {
    margin-top: 15px;
}

.main-contact-info-body .media:last-child {
    margin-bottom: 15px;
}

.main-contact-info-body .media-icon {
    font-size: 24px;
    color: #a8afc7;
    line-height: 1;
    width: 40px;
    text-align: center;
}

.main-contact-info-body .media-body>div+div {
    margin-top: 15px;
}

.main-contact-info-body .media-body label {
    color: #848eb1;
    margin-bottom: 0;
    display: block;
    font-size: 13px;
}

.main-contact-info-body .media-body span {
    display: block;
    color: #616c8c;
    font-weight: 500;
}

@media (min-width: 992px) {
    .main-contact-info-body {
        padding: 1.25rem;
        height: calc(100% - 126px);
        position: relative;
    }
}

@media (min-width: 992px) {
    .main-contact-info-body .media-icon {
        width: 100px;
    }
}

@media (min-width: 992px) {
    .main-contact-info-body .media-body {
        display: flex;
    }
}

@media (min-width: 992px) {
    .main-contact-info-body .media-body>div {
        flex: 1;
    }
}

@media (min-width: 992px) {
    .main-contact-info-body .media-body>div+div {
        margin-top: 0;
    }
}

/* ########## Contacts ########## */
/* ######  Error  ###### */
.main-signin-wrapper {
    flex: 1;
    display: flex;
    justify-content: center;
}

.main-card-signin {
    height: 560px;
    padding: 20px;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    background-color: rgba(255, 255, 255, 0.5);
}

@media (min-width: 480px) {
    .main-card-signin {
        border: 1px solid #e8e8f7;
        width: 360px;
        padding: 30px 35px;
    }
}

.main-signin-header h2 {
    font-weight: 500;
    letter-spacing: -1px;
}

.main-signin-header h4 {
    font-weight: 400;
    color: #8f9cc0;
    margin-bottom: 25px;
}

.main-signin-header label {
    color: #a8afc7;
}

.main-signin-header .form-control {
    color: #8f9cc0;
    font-weight: 500;
    border-width: 2px;
    border-color: #ecedef;
}

.main-signin-header .form-control:focus {
    border-color: #b4bdce;
    box-shadow: none;
}

.main-signin-header .form-control::placeholder {
    font-weight: 400;
    color: #a8afc7;
}

.main-signin-header .btn,
.main-signin-header .sp-container button {
    margin-top: 25px;
}

.sp-container .main-signin-header button {
    margin-top: 25px;
}

.main-signin-footer p {
    color: #a8afc7;
}

.main-signin-footer p:first-child {
    margin-bottom: 5px;
}

.main-signin-footer p:last-child {
    margin-bottom: 0;
}

.main-signin-footer a {
    color: #8f9cc0;
    font-weight: 700;
}

/*  ----- 7.10 Signup   ----- */
.main-signup-wrapper {
    flex: 1;
    display: flex;
    justify-content: center;
    background-color: rgba(244, 245, 248, 0.2);
}

@media (min-width: 992px) {
    .main-signup-wrapper {
        justify-content: flex-end;
    }
}

.main-column-signup-left {
    flex: 1;
    padding: 30px;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    display: none;
}

.main-column-signup-left>div {
    max-width: 500px;
}

.main-column-signup-left .typcn {
    font-size: 80px;
    margin-bottom: 50px;
}

.main-column-signup-left .typcn::before {
    width: auto;
}

.main-column-signup-left .main-logo {
    font-size: 40px;
    line-height: 1;
}

.main-column-signup-left h5 {
    color: #8f9cc0;
    font-weight: 500;
    font-size: 18px;
    margin-bottom: 25px;
}

.main-column-signup-left p {
    line-height: 1.7;
    margin-bottom: 25px;
}

.main-column-signup-left .btn,
.main-column-signup-left .sp-container button {
    border-width: 2px;
    padding-left: 25px;
    padding-right: 25px;
    font-weight: 700;
    text-transform: uppercase;
    height: 38px;
}

@media (min-width: 576px) {
    .main-column-signup-left {
        padding: 40px;
    }
}

@media (min-width: 992px) {
    .main-column-signup-left {
        display: flex;
    }
}

.sp-container .main-column-signup-left button {
    border-width: 2px;
    padding-left: 25px;
    padding-right: 25px;
    font-weight: 700;
    text-transform: uppercase;
    height: 38px;
}

.main-column-signup {
    background-color: #ffffff;
    padding: 30px;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
}

@media (min-width: 576px) {
    .main-column-signup {
        padding: 40px;
        width: 500px;
    }
}

@media (min-width: 992px) {
    .main-column-signup {
        border-left: 1px solid #e8e8f7;
    }
}

.main-signup-header h2 {
    font-weight: 500;
    letter-spacing: -1px;
}

.main-signup-header h4 {
    font-size: 20px;
    font-weight: 400;
    color: #8f9cc0;
    margin-bottom: 25px;
}

.main-signup-header label {
    color: #a8afc7;
}

.main-signup-header .form-control {
    color: #8f9cc0;
    font-weight: 500;
    border-width: 2px;
    border-color: #ecedef;
}

.main-signup-header .form-control:focus {
    border-color: #b4bdce;
    box-shadow: none;
}

.main-signup-header .form-control::placeholder {
    font-weight: 400;
    color: #a8afc7;
}

.main-signup-header>.btn {
    margin-top: 25px;
}

.sp-container .main-signup-header>button {
    margin-top: 25px;
}

.main-signup-header .row {
    margin-top: 20px;
}

.main-signup-header .row>div .btn i,
.main-signup-header .row>div .sp-container button i {
    font-size: 15px;
    line-height: 0;
    margin-right: 5px;
}

.sp-container .main-signup-header .row>div button i {
    font-size: 15px;
    line-height: 0;
    margin-right: 5px;
}

.main-signup-header .row>div:first-child .btn,
.main-signup-header .row>div:first-child .sp-container button {
    background-color: #4267b2;
    color: #ffffff;
}

.sp-container .main-signup-header .row>div:first-child button {
    background-color: #4267b2;
    color: #ffffff;
}

.main-signup-header .row>div:first-child .btn:hover,
.main-signup-header .row>div:first-child .sp-container button:hover {
    background-color: #375694;
    color: #ffffff;
}

.sp-container .main-signup-header .row>div:first-child button:hover {
    background-color: #375694;
    color: #ffffff;
}

.main-signup-header .row>div:first-child .btn:focus,
.main-signup-header .row>div:first-child .sp-container button:focus {
    background-color: #375694;
    color: #ffffff;
}

.sp-container .main-signup-header .row>div:first-child button:focus {
    background-color: #375694;
    color: #ffffff;
}

.main-signup-footer p {
    color: #a8afc7;
    margin-bottom: 0;
}

.main-signup-footer a {
    color: #8f9cc0;
    font-weight: 700;
}

/*  ----- 7.11 Error   ----- */
.main-error-wrapper {
    flex: 1;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
    padding: 20px;
    text-align: center;
}

.main-error-wrapper h1 {
    line-height: 1;
    font-size: 8rem;
    font-weight: 700;
    color: #8f9cc0;
}

.main-error-wrapper h2 {
    font-weight: 500;
    color: #2e3649;
    letter-spacing: -.5px;
    margin-bottom: 15px;
}

.main-error-wrapper h6 {
    margin-bottom: 40px;
    font-size: 14px;
}

.main-error-wrapper .btn,
.main-error-wrapper .sp-container button {
    border-width: 2px;
    font-weight: 400;
}

.sp-container .main-error-wrapper button {
    border-width: 2px;
    font-weight: 400;
}

@media (min-width: 1300px) {
    .signpages {
        width: 50%;
        border-radius: 6px;
        margin: 5em auto;
        display: flex;
    }

    .signpages2 {
        width: 50%;
        border-radius: 6px;
        display: flex;
    }
}

@media (max-width: 1299px) and (min-width: 991px) {
    .signpages {
        width: 60%;
        border-radius: 6px;
        margin: 5em auto;
        display: flex;
    }
}

@media (max-width: 990px) {
    .signpages {
        width: 60%;
        border-radius: 6px;
        margin: 5em auto;
        display: flex;
    }
}

.signpages .details {
    border-top-left-radius: 6px;
    border-bottom-left-radius: 6px;
    background: url(../img/pngs/bg.png);
    position: relative;
    background-size: cover;
    background-position: center;
}

.signpages .details:before {
    content: '';
    height: 100%;
    width: 100%;
    background: rgba(77, 76, 178, 0.9);
    position: absolute;
    left: 0;
    z-index: 0;
}

.signpages .row>h2 {
    color: #008080;
}

.signpages .login_form {
    background-color: #ffffff;
    border-top-right-radius: 6px;
    border-bottom-right-radius: 6px;
}

.signpages .form__input {
    width: 100%;
    border: 0px solid transparent;
    border-radius: 0;
    border-bottom: 1px solid #aaa;
    padding: 1em .5em .5em;
    padding-left: 2em;
    outline: none;
    margin: 1.5em auto;
    transition: all .5s ease;
}

.signpages .form__input:focus {
    border-bottom-color: #008080;
    box-shadow: 0 0 5px rgba(0, 80, 80, 0.4);
    border-radius: 4px;
}

@media screen and (max-width: 640px) {
    .signpages {
        width: 90%;
    }

    .signpages .company__info {
        display: none;
    }

    .signpages .login_form {
        border-top-left-radius: 6px;
        border-bottom-left-radius: 6px;
    }
}

@media screen and (min-width: 642px) and (max-width: 800px) {
    .signpages .main-content {
        width: 70%;
    }
}

#launch_date .countdown .number {
    border-radius: 11px;
    width: 60px;
    height: 60px;
    line-height: 60px;
    display: inherit;
}

.coming-form1 {
    width: 50px;
    height: 50px;
    background: #f5f6f8;
    border-radius: 11px;
    line-height: 46px;
}

.construction .coming-form1 a {
    color: #214fbe;
}

.error h1 {
    color: #5f66f5;
}

.error-2 {
    color: #d5d8de;
}

.error-1 {
    background: #5f66f5;
    border: 1px solid #5f66f5;
    color: #ffffff;
}

@media (min-width: 768px) {
    .construction {
        border-top-left-radius: 6px;
        border-bottom-left-radius: 6px;
        position: relative;
        background-size: cover;
        background-position: center;
        z-index: 0;
    }

    .construction:before {
        content: '';
        height: 100px;
        width: 242px;
        background: url(../img/brand/3.png);
        position: absolute;
        left: 25px;
        z-index: -1;
        top: -48px;
        display: block;
        background-repeat: no-repeat;
    }

    .construction:after {
        content: '';
        height: 100px;
        width: 242px;
        background: url(../img/brand/4.png);
        position: absolute;
        right: 34px;
        z-index: -1;
        bottom: -25px;
        background-repeat: no-repeat;
    }

    .sign1 {
        border-top-left-radius: 6px;
        border-bottom-left-radius: 6px;
        position: relative;
        background-size: cover;
        background-position: center;
        z-index: 0;
    }

    .sign1:before {
        content: '';
        height: 213px;
        width: 215px;
        background: url(../img/pngs/signin-1.png);
        position: absolute;
        left: -85px;
        z-index: -1;
        top: -90px;
        display: block;
        background-repeat: no-repeat;
        opacity: 0.3;
    }

    .sign1:after {
        content: '';
        height: 212px;
        width: 228px;
        background: url(../img/pngs/signin-2.png);
        position: absolute;
        right: -85px;
        z-index: -1;
        bottom: -90px;
        background-repeat: no-repeat;
        opacity: 0.3;
    }

    .sign2 {
        border-top-left-radius: 6px;
        border-bottom-left-radius: 6px;
        position: relative;
        background-size: cover;
        background-position: center;
        z-index: 0;
    }

    .sign2:before {
        content: '';
        height: 213px;
        width: 215px;
        background: url(../img/pngs/signin-1.png);
        position: absolute;
        left: -85px;
        z-index: -1;
        top: -90px;
        display: block;
        background-repeat: no-repeat;
        opacity: 0.3;
    }

    .sign2:after {
        content: '';
        height: 212px;
        width: 228px;
        background: url(../img/pngs/signin-2.png);
        position: absolute;
        right: -95px;
        z-index: -1;
        bottom: -95px;
        background-repeat: no-repeat;
        opacity: 0.3;
    }

    .sign-2 {
        border-top-left-radius: 6px;
        border-bottom-left-radius: 6px;
        position: relative;
        background-size: cover;
        background-position: center;
        z-index: 0;
        background: url(../img/pngs/signin-3.png);
    }

    .sign3 {
        border-top-left-radius: 6px;
        border-bottom-left-radius: 6px;
        position: relative;
        background-size: cover;
        background-position: center;
        z-index: 0;
    }

    .sign3:before {
        content: '';
        height: 231px;
        width: 277px;
        background: url(../img/pngs/signup-1.png);
        position: absolute;
        left: -70px;
        z-index: -1;
        top: -75px;
        display: block;
        background-repeat: no-repeat;
        opacity: 0.3;
    }

    .sign3:after {
        content: '';
        height: 228px;
        width: 277px;
        background: url(../img/pngs/signup-2.png);
        position: absolute;
        right: -60px;
        z-index: -1;
        bottom: -52px;
        background-repeat: no-repeat;
        opacity: 0.3;
    }

    .sign4 {
        border-top-left-radius: 6px;
        border-bottom-left-radius: 6px;
        position: relative;
        background-size: cover;
        background-position: center;
        z-index: 0;
    }

    .sign4:before {
        content: '';
        height: 231px;
        width: 277px;
        background: url(../img/pngs/signup-1.png);
        position: absolute;
        left: -57px;
        z-index: -1;
        top: -70px;
        display: block;
        background-repeat: no-repeat;
        opacity: 0.3;
    }

    .sign4:after {
        content: '';
        height: 228px;
        width: 277px;
        background: url(../img/pngs/signup-2.png);
        position: absolute;
        right: -60px;
        z-index: -1;
        bottom: -70px;
        background-repeat: no-repeat;
        opacity: 0.3;
    }

    .sign-3 {
        border-top-left-radius: 6px;
        border-bottom-left-radius: 6px;
        position: relative;
        background-size: cover;
        background-position: center;
        z-index: 0;
        background: url(../img/pngs/Backgrounds.png);
    }

    hr.divider:after {
        content: "or";
        display: inline-block;
        position: relative;
        top: -.9em;
        font-size: 1.2em;
        padding: 0 .25em;
        background: #ffffff;
    }

    .signinwrap {
        margin-top: auto;
        margin-bottom: auto;
        position: relative;
    }
}

@media (max-width: 1024px) and (min-width: 768px) {
    .wrapper-2 {
        display: block;
    }

    .wrapper-3 {
        margin: 0 auto;
    }

    .wrapper-3 .header-brand-img.desktop-logo.logo2 {
        display: none !important;
    }

    .wrapper-3 .header-brand-img.theme-logo.logo2 {
        display: none !important;
    }

    .signinwrap:after {
        display: none;
    }
}

@media (min-width: 992px) {
    .signinwrap:after {
        content: '';
        height: 600px;
        width: 277px;
        background: url(../img/pngs/Bitcoins.png);
        position: absolute;
        right: 0;
        z-index: -1;
        bottom: -375px;
        background-repeat: no-repeat;
    }

    .under-form .form-control {
        width: 300px !important;
    }
}

/* ######  Error  ###### */
/* ###### Invoice  ###### */
.main-content-left-invoice {
    display: block;
    padding: 0;
}

@media (max-width: 991.98px) {
    .main-content-left-invoice {
        width: 100%;
    }
}

@media (min-width: 992px) {
    .main-content-left-invoice {
        border-right: 1px solid #e8e8f7;
    }
}

.main-invoice-list {
    position: relative;
    border-top: 1px solid #e8e8f7;
}

.main-invoice-list .media {
    align-items: center;
    border: 1px solid transparent;
    border-right-width: 0;
    padding: 10px 20px;
    position: relative;
}

.main-invoice-list .media:hover,
.main-invoice-list .media:focus {
    cursor: pointer;
    background-color: #f8f9fa;
}

.main-invoice-list .media+.media {
    margin-top: -1px;
}

.main-invoice-list .media+.media::before {
    content: '';
    position: absolute;
    top: -1px;
    left: 55px;
    right: 0;
    border-top: 1px dotted #ecedef;
}

.main-invoice-list .media-icon {
    width: 24px;
    text-align: center;
    font-size: 32px;
    color: #a8afc7;
}

.main-invoice-list .media-body {
    margin-left: 15px;
}

.main-invoice-list .media-body h6 {
    font-weight: 500;
    color: #8f9cc0;
    margin-bottom: 3px;
    display: flex;
    align-items: center;
    justify-content: space-between;
}

.main-invoice-list .media-body div {
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.main-invoice-list .media-body p {
    margin-bottom: 0;
    font-size: 11px;
    font-family: Arial, sans-serif;
    color: #2e3649;
}

.main-invoice-list .media-body p span {
    color: #a8afc7;
}

.main-invoice-list .selected {
    background-color: #f8f9fa;
    border-top-color: #ecedef;
    border-bottom-color: #ecedef;
}

.main-invoice-list .selected:first-child {
    border-top-color: transparent;
}

@media (min-width: 992px) {
    .main-invoice-list {
        height: calc(100% - 65px);
    }
}

@media (min-width: 992px) {
    .main-invoice-list .media {
        padding: 10px 15px;
    }
}

.main-content-body-invoice {
    position: relative;
    display: none;
}

@media (min-width: 992px) {
    .main-content-body-invoice {
        display: block;
    }
}

.card-invoice {
    background-color: transparent;
    border-width: 0;
}

.card-invoice .card-body {
    padding: 20px;
}

@media (min-width: 992px) {
    .card-invoice .card-body {
        padding: 0 50px 50px;
    }
}

@media (min-width: 768px) {
    .invoice-header {
        display: flex;
        justify-content: space-between;
        flex-direction: row-reverse;
    }
}

.invoice-title {
    margin-bottom: 0;
    text-transform: uppercase;
    color: #ecedef;
    font-weight: 700;
}

.billed-from {
    margin-top: 25px;
    margin-bottom: 25px;
}

.billed-from h6 {
    color: #8f9cc0;
    font-size: 14px;
    font-weight: 700;
}

.billed-from p {
    font-size: 13px;
    margin-bottom: 0;
}

@media (min-width: 768px) {
    .billed-from {
        margin-top: 0;
    }
}

.billed-to h6 {
    color: #8f9cc0;
    font-size: 14px;
    font-weight: 700;
}

.billed-to p {
    font-size: 13px;
    margin-bottom: 0;
}

.invoice-info-row {
    display: flex;
    justify-content: space-between;
    padding: 5px 0;
    margin-bottom: 0;
    font-size: 13px;
}

.invoice-info-row+.invoice-info-row {
    border-top: 1px dotted #ecedef;
}

.invoice-info-row span:first-child {
    color: #3c4858;
}

.table-invoice thead>tr>th,
.table-invoice thead>tr>td {
    font-size: 11px;
    font-weight: 700;
}

.table-invoice tbody>tr>th:first-child,
.table-invoice tbody>tr>td:first-child {
    color: #76769c;
    font-weight: 500;
}

.table-invoice tbody>tr>th:first-child .invoice-notes,
.table-invoice tbody>tr>td:first-child .invoice-notes {
    margin-right: 20px;
}

.table-invoice tbody>tr>th:first-child .invoice-notes .section-label-sm,
.table-invoice tbody>tr>td:first-child .invoice-notes .section-label-sm {
    font-weight: 600;
}

.table-invoice tbody>tr>th:first-child .invoice-notes p,
.table-invoice tbody>tr>td:first-child .invoice-notes p {
    font-size: 13px;
    font-weight: 400;
    color: #8f9cc0;
}

/* ###### Invoice  ###### */
/* ###### Mail  ###### */
.main-content-mail .container,
.main-content-mail .container-fluid {
    padding: 20px 0 0;
}

.main-mail-list-items {
    height: 560px;
}

@media (min-width: 992px) {

    .main-content-mail .container,
    .main-content-mail .container-fluid {
        padding: 0;
    }
}

.main-content-left-mail {
    display: block;
}

.main-content-left-mail .btn-compose {
    margin-bottom: 20px;
    text-transform: uppercase;
    font-weight: 500;
    font-size: 11px;
    padding: 0 20px;
    letter-spacing: 2px;
    display: flex;
    align-items: center;
    justify-content: center;
    height: 38px;
}

@media (min-width: 992px) {
    .main-content-left-mail .btn-compose {
        margin-right: 0;
    }
}

.main-task-menu {
    position: relative;
    padding-right: 0;
}

.main-task-menu .nav-link {
    height: 38px;
}

.main-task-menu .nav-link i {
    font-size: 22px;
}

@media (min-width: 992px) {
    .main-task-menu {
        padding-right: 0;
    }
}

@media (min-width: 992px) {
    .main-task-menu .nav-link {
        font-size: 13px;
    }
}

.main-mail-header {
    display: flex;
    align-items: center;
    justify-content: space-between;
    margin-bottom: 20px;
    padding: 0 20px;
}

.main-mail-header>div:first-child p {
    font-size: 13px;
    margin-bottom: 0;
}

.main-mail-header>div:last-child {
    display: none;
}

.main-mail-header>div:last-child>span {
    font-size: 12px;
    margin-right: 10px;
}

.main-mail-header .btn-group .btn,
.main-mail-header .btn-group .sp-container button {
    font-size: 21px;
    display: flex;
    align-items: center;
    justify-content: center;
    width: 38px;
    height: 38px;
    line-height: 0;
    padding: 0;
    position: relative;
    z-index: 1;
    border-color: #e2e8f5;
    background-color: #ffffff;
}

@media (min-width: 992px) {
    .main-mail-header {
        padding: 20px 20px 0 20px;
        margin-bottom: 25px;
    }
}

@media (min-width: 768px) {
    .main-mail-header>div:last-child {
        display: flex;
        align-items: center;
    }
}

.sp-container .main-mail-header .btn-group button {
    font-size: 21px;
    display: flex;
    align-items: center;
    justify-content: center;
    width: 38px;
    height: 38px;
    line-height: 0;
    padding: 0;
    position: relative;
    z-index: 1;
    border-color: #e2e8f5;
    background-color: #ffffff;
}

.main-mail-header .btn-group .btn:hover,
.main-mail-header .btn-group .sp-container button:hover {
    color: #1c273c;
    background-color: #f6f9fd;
}

.sp-container .main-mail-header .btn-group button:hover {
    color: #1c273c;
    background-color: #f6f9fd;
}

.main-mail-header .btn-group .btn:focus,
.main-mail-header .btn-group .sp-container button:focus {
    color: #1c273c;
    background-color: #f6f9fd;
}

.sp-container .main-mail-header .btn-group button:focus {
    color: #1c273c;
    background-color: #f6f9fd;
}

.main-mail-header .btn-group .btn.disabled,
.main-mail-header .btn-group .sp-container button.disabled {
    background-color: #ffffff;
    color: #e2e8f5;
    border-color: #e2e8f5;
    z-index: 0;
}

.sp-container .main-mail-header .btn-group button.disabled {
    background-color: #ffffff;
    color: #e2e8f5;
    border-color: #e2e8f5;
    z-index: 0;
}

.main-mail-header .btn-group .btn.disabled:focus,
.main-mail-header .btn-group .sp-container button.disabled:focus {
    box-shadow: none;
}

.sp-container .main-mail-header .btn-group button.disabled:focus {
    box-shadow: none;
}

.main-mail-header .btn-group .btn.disabled:active,
.main-mail-header .btn-group .sp-container button.disabled:active {
    box-shadow: none;
}

.sp-container .main-mail-header .btn-group button.disabled:active {
    box-shadow: none;
}

.main-mail-header .btn-group .btn+.btn,
.main-mail-header .btn-group .sp-container button+.btn {
    margin-left: -2px;
}

.sp-container .main-mail-header .btn-group button+.btn,
.main-mail-header .btn-group .sp-container .btn+button,
.sp-container .main-mail-header .btn-group .btn+button,
.main-mail-header .btn-group .sp-container button+button,
.sp-container .main-mail-header .btn-group button+button {
    margin-left: -2px;
}

.main-mail-options {
    padding: 5px 10px 5px 20px;
    border: 1px solid #e2e8f5;
    border-left-width: 0;
    border-right-width: 0;
    display: none;
    align-items: center;
    justify-content: flex-end;
}

.main-mail-options .btn,
.main-mail-options .sp-container button {
    font-size: 22px;
    display: flex;
    align-items: center;
    justify-content: center;
    width: 36px;
    height: 36px;
    background-color: transparent;
}

@media (min-width: 992px) {
    .main-mail-options {
        padding: 19px 20px;
        display: flex;
        justify-content: space-between;
    }
}

.sp-container .main-mail-options button {
    font-size: 22px;
    display: flex;
    align-items: center;
    justify-content: center;
    width: 36px;
    height: 36px;
    background-color: transparent;
}

.main-mail-options .btn:hover,
.main-mail-options .sp-container button:hover {
    background-color: #f6f9fd;
}

.sp-container .main-mail-options button:hover {
    background-color: #f6f9fd;
}

.main-mail-options .btn:focus,
.main-mail-options .sp-container button:focus {
    background-color: #f6f9fd;
}

.sp-container .main-mail-options button:focus {
    background-color: #f6f9fd;
}

.main-mail-options .btn i,
.main-mail-options .sp-container button i {
    line-height: 0;
}

.sp-container .main-mail-options button i {
    line-height: 0;
}

.main-mail-options .btn i.typcn,
.main-mail-options .sp-container button i.typcn {
    line-height: .75;
}

.sp-container .main-mail-options button i.typcn {
    line-height: .75;
}

.main-mail-options .btn.disabled,
.main-mail-options .sp-container button.disabled {
    background-color: transparent;
    color: #7987a1;
}

.sp-container .main-mail-options button.disabled {
    background-color: transparent;
    color: #7987a1;
}

@media (min-width: 992px) {
    .main-mail-list {
        border-top-width: 0;
    }
}

.main-mail-item {
    padding: 10px 27px;
    border-top: 1px solid #e4ebf7;
    border-bottom: 1px solid #e4ebf7;
    background-color: rgba(189, 205, 228, 0.1);
    position: relative;
    display: flex;
    align-items: center;
    width: 100%;
}

.main-mail-item+.main-mail-item {
    margin-top: -1px;
}

.main-mail-item:first-child {
    border-top-width: 0;
}

.main-mail-item .main-img-user,
.main-mail-item .main-avatar {
    flex-shrink: 0;
    margin-right: 15px;
}

.main-mail-item .main-img-user::after,
.main-mail-item .main-avatar::after {
    display: none;
}

.main-mail-item:hover,
.main-mail-item:focus {
    background-color: #f6f9fd;
}

.main-mail-item.unread {
    background-color: #ffffff;
}

.main-mail-item.selected {
    background-color: white;
}

@media (min-width: 576px) {
    .main-content-body-mail1 .main-mail-item {
        padding: 10px 29px;
    }
}

@media (min-width: 992px) {
    .main-mail-item {
        width: auto;
        padding: 10px 1.5rem 10px 1.5rem;
    }
}

.main-mail-checkbox {
    margin-right: 15px;
    display: none;
}

@media (min-width: 992px) {
    .main-mail-checkbox {
        display: block;
    }
}

.main-mail-star {
    margin-right: 15px;
    font-size: 18px;
    line-height: .9;
    color: #e2e8f5;
    position: absolute;
    bottom: 10px;
    right: 0;
}

.main-mail-star.active {
    color: #f0ad4e;
}

@media (min-width: 992px) {
    .main-mail-star {
        position: relative;
        bottom: auto;
        top: 2px;
    }
}

.main-mail-body {
    width: calc(100% - 80px);
    cursor: pointer;
}

@media (min-width: 992px) {
    .main-mail-body {
        max-width: 460px;
        margin-right: 15px;
        flex: 1;
    }
}

@media (min-width: 1200px) {
    .main-mail-body {
        max-width: 690px;
    }

    .horizontalMenucontainer .tasks-list-box .main-mail-body,
    .tasks-list-box .main-mail-body {
        max-width: 811px;
    }
}

.main-mail-from {
    font-size: 13px;
}

@media (min-width: 576px) {
    .main-mail-subject {
        white-space: nowrap;
        text-overflow: ellipsis;
        overflow: hidden;
        width: 100%;
    }
}

.main-mail-subject strong {
    font-weight: 700;
    font-size: 15px;
    color: #1c273c;
    display: block;
    white-space: nowrap;
    text-overflow: ellipsis;
    overflow: hidden;
    width: 100%;
}

@media (min-width: 992px) {
    .main-mail-subject strong {
        display: inline;
        width: auto;
        white-space: normal;
        text-overflow: inherit;
        overflow: visible;
    }

    .task-actions {
        font-size: 16px;
        display: flex;
        list-style-type: none;
        padding: 0;
        float: right;
        margin-left: auto;
        margin-bottom: 0;
    }
}

@media (min-width: 991px) {
    .responsive-logo {
        display: none;
    }
}

@media (max-width: 991px) {
    .responsive-logo {
        display: block;
    }
}

@media (max-width: 991px) {
    .main-mail-subject strong {
        display: block;
        width: 100%;
        white-space: normal;
        text-overflow: inherit;
        overflow: visible;
    }

    .main-header-center .input-group {
        display: none;
    }

    .mail-container .tab-list-items.task-menu-show,
    .mail-container .tab-list-items.mail-menu-show {
        position: absolute;
        z-index: 12;
        width: 265px;
        height: 638px;
        left: 0;
        background: #ffffff;
        display: block;
        padding-left: 27px;
        box-shadow: 12px 7px 13px -3px #b4bfd8;
    }

    .task-actions {
        font-size: 16px;
        list-style-type: none;
        padding: 0;
        float: right;
        margin-left: 0;
        margin-bottom: 0;
        display: flex;
        width: 100%;
    }

    .task-actions li .task-action-items {
        line-height: 30px;
        display: flex;
    }

    .task-actions li .task-action-items i {
        color: #031b4e;
        border: 1px solid #e0e7f3;
        height: 33px;
        width: 33px;
        text-align: center;
        padding: 0 !important;
        border-radius: 5px;
        padding: 0;
        line-height: 1.62;
        margin: 12px 0 13px 0;
    }
}

#no-item-found {
    display: none;
}

#no-item-found.show {
    display: block;
}

.main-mail-subject span {
    font-size: 13px;
    color: #5c6980;
    display: none;
}

@media (min-width: 576px) {
    .main-mail-subject span {
        display: inline;
    }
}

.main-mail-attachment {
    margin-right: 15px;
    font-size: 21px;
    line-height: .9;
    display: none;
}

@media (min-width: 992px) {
    .main-mail-attachment {
        display: block;
        position: absolute;
        right: 63px;
        top: 8px;
    }
}

.card-box img {
    position: absolute;
    bottom: -3px;
    left: -3px;
}

.main-mail-date {
    font-size: 11px;
    position: absolute;
    top: 12px;
    right: 15px;
    color: #97a3b9;
    margin-left: auto;
}

@media (min-width: 992px) {
    .main-mail-date {
        position: absolute;
        font-size: 13px;
        top: 8px;
    }
}

.main-mail-compose {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(28, 39, 60, 0.5);
    z-index: 1000;
    display: none;
}

.main-mail-compose>div {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 100%;
    height: 100%;
}

@media (min-width: 992px) {
    .main-mail-compose .container {
        padding: 0;
    }
}

.main-mail-compose-box {
    box-shadow: 0 0 30px rgba(28, 39, 60, 0.2);
    border-radius: 3px;
}

.main-mail-compose-header {
    padding: 10px 20px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    background-color: #1c273c;
    color: #ffffff;
    font-size: 14px;
    font-weight: 500;
    border-top-left-radius: 3px;
    border-top-right-radius: 3px;
}

.main-mail-compose-header .nav-link {
    color: rgba(255, 255, 255, 0.3);
    font-size: 14px;
    line-height: 1;
    padding: 0;
    transition: all 0.2s ease-in-out;
}

.main-mail-compose-header .nav-link:hover,
.main-mail-compose-header .nav-link:focus {
    color: #ffffff;
}

.main-mail-compose-header .nav-link+.nav-link {
    margin-left: 15px;
}

.main-mail-compose-header .nav-link:nth-child(2) {
    display: none;
}

@media (min-width: 992px) {
    .main-mail-compose-header {
        padding: 20px 25px;
    }
}

@media (prefers-reduced-motion: reduce) {
    .main-mail-compose-header .nav-link {
        transition: none;
    }
}

@media (min-width: 768px) {
    .main-mail-compose-header .nav-link:nth-child(2) {
        display: block;
    }
}

.main-mail-compose-body {
    background-color: #ffffff;
    padding: 20px;
    border-bottom-right-radius: 3px;
    border-bottom-left-radius: 3px;
}

.main-mail-compose-body .form-group {
    display: flex;
    align-items: center;
}

.main-mail-compose-body .form-group>div {
    flex: 1;
    margin-left: 10px;
}

.main-mail-compose-body .form-group .form-label {
    margin: 0;
    color: #1c273c;
}

.main-mail-compose-body .form-group .form-control {
    border-width: 0;
    border-radius: 0;
    padding: 0;
}

.main-mail-compose-body .form-group .form-control:focus {
    box-shadow: none !important;
}

.main-mail-compose-body .form-group+.form-group {
    border-top: 1px dotted #e2e8f5;
    padding-top: 1rem;
}

.main-mail-compose-body .form-group:last-child {
    display: block;
}

.main-mail-compose-body .form-group:last-child .btn,
.main-mail-compose-body .form-group:last-child .sp-container button {
    width: 100%;
    margin-top: 15px;
    padding-left: 20px;
    padding-right: 20px;
}

@media (min-width: 992px) {
    .main-mail-compose-body {
        padding: 25px;
    }
}

@media (min-width: 576px) {
    .main-mail-compose-body .form-group:last-child {
        display: flex;
        justify-content: space-between;
    }
}

.sp-container .main-mail-compose-body .form-group:last-child button {
    width: 100%;
    margin-top: 15px;
    padding-left: 20px;
    padding-right: 20px;
}

@media (min-width: 576px) {

    .main-mail-compose-body .form-group:last-child .btn,
    .main-mail-compose-body .form-group:last-child .sp-container button {
        width: auto;
        margin-top: 0;
    }

    .sp-container .main-mail-compose-body .form-group:last-child button {
        width: auto;
        margin-top: 0;
    }
}

.main-mail-compose-body .form-group .nav-link {
    padding: 0;
    font-size: 18px;
    line-height: 0;
    color: #031b4e;
    position: relative;
    transition: all 0.2s ease-in-out;
}

.main-mail-compose-body .form-group .nav-link:hover,
.main-mail-compose-body .form-group .nav-link:focus {
    color: #1c273c;
}

.main-mail-compose-body .form-group .nav-link+.nav-link {
    margin-left: 15px;
}

@media (prefers-reduced-motion: reduce) {
    .main-mail-compose-body .form-group .nav-link {
        transition: none;
    }
}

.main-mail-compose-compress,
.main-mail-compose-minimize {
    top: auto;
    left: auto;
    bottom: 0;
    right: 30px;
    width: 560px;
    height: auto;
    background-color: transparent;
}

.main-mail-compose-compress .container {
    max-width: none;
    padding: 0;
}

.main-mail-compose-minimize .container {
    max-width: none;
    padding: 0;
}

.main-mail-compose-minimize .main-mail-compose-body {
    display: none;
}

/* ###### 7.7 Mail Two  ###### */
.main-mail-two .main-content {
    display: flex;
    flex-direction: column;
}

.main-mail-two .main-header {
    width: 100%;
    border-bottom: 1px solid #e2e8f5;
}

.main-mail-two .main-footer {
    width: 100%;
}

.main-mail-two .main-header-menu-icon {
    margin-right: 0;
}

.main-mail-two .main-content-body {
    display: flex;
    padding: 0;
}

.main-mail-left {
    background-color: #f9f9f9;
    width: 240px;
    border-right: 1px solid #b4bdce;
    padding: 20px;
    display: none;
}

.main-mail-left .btn-compose {
    display: block;
    margin-bottom: 20px;
}

.main-mail-left .main-mail-menu {
    padding-right: 0;
}

@media (min-width: 1200px) {
    .main-mail-left {
        display: block;
    }
}

.main-mail-content {
    background-color: #f1f5ff;
    flex: 1;
    max-width: 100vw -480px;
    background-color: #f8f9fa;
    max-width: 100vw -480px;
}

.main-mail-content .main-mail-header {
    margin-bottom: 0;
    padding: 20px;
}

.main-mail-content .main-mail-body {
    max-width: 590px;
}

.main-content-body-show .main-header-mail-arrow {
    font-size: 27px;
    display: inline-block;
    line-height: 0;
    padding: 13px 31px;
    background: #f1f5ff;
    width: 100%;
    font-size: 30px;
}

.main-mail-content-body {
    display: none;
}

.main-content-body-show .main-mail-content-body {
    display: block;
}

/* ###### Mail  ###### */
/*  ----- 7.7 Mail Two   ----- */
.mail-container .table .btn,
.sp-container button {
    font-weight: 600;
    color: #171b27;
    font-size: 20px;
}

.mail-compose .form-control {
    color: #666666;
    background-color: #e3e7ea;
    border: 1px solid #e3e7ea;
    border-radius: 11px;
    height: 50px;
}

.mail-compose .form-control::placeholder {
    color: #abafb2;
    opacity: 1;
}

.mail-compose textarea.form-control {
    height: auto;
    background: #f2f3f5;
    padding-top: 75px;
}

.editor1 {
    margin-top: 60px;
}

.main-content-body-mail2 .btn {
    color: #ffffff !important;
    background-color: #214fbe !important;
    border-color: #214fbe !important;
    border-radius: 11px !important;
}

.main-content-body-mail1 .custom-control {
    min-height: 1.5rem;
}

.main-content-body-mail1 .mail-header {
    background: #f5f6f8;
}

.main-content-body-mail1 .mail-buttons i {
    color: #214fbe;
}

.main-content-body-mail1 .avatar-status {
    position: absolute;
    right: -2px;
    bottom: -2px;
    width: .75rem;
    height: .75rem;
    border: 2px solid #ffffff;
    background: #868e96;
    border-radius: 50%;
}

.main-content-body-mail1 .table-inbox tr td {
    padding: 20px 14px !important;
}

.main-content-body-mail1 .table-inbox .mail-header td {
    padding: 14px !important;
}

.mail-buttons .btn-icon i {
    line-height: 0;
}

.mail-header1 .custom-control-label::before {
    width: 1.5rem;
    height: 1.5rem;
}

.mail-header1 .custom-control-label::after {
    width: 1.5rem;
    height: 1.5rem;
}

.email-img {
    position: absolute;
    top: 10px;
    right: 20px;
    z-index: 98;
}

.email-img1 {
    background: #b6b6b6;
    color: #ffffff;
    padding: 0 4px;
}

/* ###### Mail  ###### */
/* ###### Profile  ###### */
.profile-cover__action {
    display: -ms-flexbox;
    display: -webkit-box;
    display: flex;
    padding: 216px 30px 30px 185px;
    border-radius: 5px 5px 0 0;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    -ms-flex-pack: end;
    -webkit-box-pack: end;
    justify-content: flex-end;
    overflow: hidden;
    background: url(../img/media/bg-img.jpg) no-repeat;
    background-size: cover;
}

.profile-cover__action>.btn {
    margin-left: 10px;
    margin-bottom: 10px;
}

.panel.profile-cover {
    position: relative;
}

.btn-profile {
    position: absolute;
    right: 20px;
    bottom: 135px;
}

.profile-cover__img {
    position: absolute;
    top: 170px;
    left: 25px;
    text-align: center;
    z-index: 1;
}

.profile-cover__img>img {
    max-width: 120px;
    border: 5px solid #ffffff;
    border-radius: 50%;
}

.profile-cover__img>.h3 {
    color: #393939;
    font-size: 20px;
    line-height: 30px;
}

.profile-cover__img>img+.h3 {
    margin-top: 6px;
}

@media (min-width: 601px) {
    .profile-cover__info .nav {
        margin-right: 28px;
        padding: 15px 0 10px 170px;
        color: #999;
        font-size: 16px;
        line-height: 26px;
        font-weight: 300;
        text-align: center;
        text-transform: uppercase;
        -ms-flex-pack: end;
        -webkit-box-pack: end;
        justify-content: flex-end;
    }
}

.profile-cover__info .nav li {
    margin-top: 13px;
    margin-bottom: 13px;
    font-size: 14px;
    color: #464461;
    font-weight: 500;
}

.profile-cover__info .nav li:not(:first-child) {
    margin-left: 30px;
    padding-left: 30px;
    border-left: 1px solid #e8e8f7;
}

.profile-cover__info .nav strong {
    display: block;
    margin-bottom: 10px;
    font-size: 29px;
}

.profile-tab .main-nav-line .nav-link {
    font-weight: 500;
}

@media (min-width: 481px) {
    .profile-cover__action>.btn {
        min-width: 125px;
    }

    .profile-cover__action>.btn>span {
        display: inline-block;
    }
}

@media (max-width: 767px) {
    .profile-cover__info .nav {
        display: flex;
        padding-left: 0;
        padding-right: 0;
        margin-right: 28px;
        padding: 39px 0 10px 170px;
        margin-right: 0;
        padding: 0;
        display: flex;
        margin-right: 0;
        padding: 100px 0 10px 0;
        color: #999;
        font-size: 16px;
        line-height: 26px;
        font-weight: 300;
        text-align: center;
        text-transform: uppercase;
        -ms-flex-pack: end;
        -webkit-box-pack: end;
        justify-content: center;
    }

    .profile-cover__info .nav li {
        margin-top: 27px;
        margin-bottom: 0;
        margin-right: 1rem;
        font-size: 13px;
    }

    .profile-cover__info .nav li:not(:first-child) {
        margin-top: 8px;
        margin-left: 0;
        padding-top: 0;
        padding-left: 0;
        border-top: 1px solid #eee;
        border-left-width: 0;
        margin-top: 8px;
        margin-left: 0;
        padding-top: 18px;
        padding-left: 0;
        border-top: 0;
        border-left-width: 0;
    }

    .profile-cover__img {
        left: 0;
        right: 0;
        top: 150px;
    }

    .btn-profile {
        right: 0px;
        bottom: 85px;
        left: 0;
        margin: 0 auto;
        text-align: center;
    }

    .main-nav-line .nav-link+.nav-link {
        margin-top: 13px;
        margin-left: 0;
    }
}

.main-content-profile {
    flex: 1;
}

@media (max-width: 991.98px) {

    .main-content-profile .container,
    .main-content-profile .container-fluid {
        display: block;
    }
}

.main-content-left-profile {
    padding-left: 0;
    padding-right: 0;
    display: block;
    border-bottom: 1px solid #e8e8f7;
    padding-bottom: 25px;
    width: auto;
}

@media (min-width: 992px) {
    .main-content-left-profile {
        width: 270px;
        padding-right: 20px;
        padding-bottom: 0;
        border-right: 1px solid #e8e8f7;
        border-bottom: 0;
    }
}

@media (min-width: 1200px) {
    .main-content-left-profile {
        padding-right: 25px;
    }
}

.main-profile-overview .main-img-user {
    width: 100px;
    height: 100px;
    margin-bottom: 20px;
    margin: 0 auto;
}

.main-profile-overview .main-img-user::after {
    display: none;
}

.main-profile-overview .btn-icon-list .btn,
.main-profile-overview .btn-icon-list .sp-container button {
    border-radius: 100%;
}

.sp-container .main-profile-overview .btn-icon-list button {
    border-radius: 100%;
}

.main-profile-name {
    color: #8f9cc0;
    font-weight: 700;
    font-size: 20px;
    margin-bottom: 2px;
}

.main-profile-name-text {
    color: #a8afc7;
    font-size: 13px;
    margin-bottom: 0;
}

.main-profile-bio {
    font-size: 13px;
    margin-bottom: 20px;
}

.main-profile-social-list .media {
    align-items: center;
}

.main-profile-social-list .media+.media {
    margin-top: 20px;
}

.main-profile-social-list .media-body {
    margin-left: 20px;
}

.main-profile-social-list .media-body span {
    display: block;
    font-size: 12px;
}

.main-profile-social-list .media-body a {
    font-size: 13px;
}

.main-content-body-profile .nav {
    flex-direction: column;
    padding: 20px 20px 20px 20px;
    border-bottom: 1px solid #e8e8f7;
}

.main-content-body-profile .main-nav-line .nav-link {
    text-transform: uppercase;
    font-size: 13px;
    font-weight: 500;
    color: #2e3649;
}

.main-content-body-profile .main-nav-line .nav-link.active {
    font-weight: 500;
}

@media (min-width: 576px) {
    .main-content-body-profile .nav {
        flex-direction: row;
        align-items: center;
        padding-bottom: 10px;
    }
}

@media (min-width: 992px) {
    .main-content-body-profile .nav {
        padding-left: 20px;
    }
}

@media (min-width: 1200px) {
    .main-content-body-profile .nav {
        padding-left: 25px;
    }
}

@media (min-width: 576px) and (max-width: 767.98px) {
    .main-content-body-profile .main-nav-line .nav-link.active::before {
        width: auto;
        top: auto;
        left: 0;
        right: 0;
        height: 2px;
    }
}

@media (min-width: 576px) {
    .main-content-body-profile .main-nav-line .nav-link.active::before {
        bottom: -11px;
    }
}

@media (min-width: 576px) and (max-width: 767.98px) {
    .main-content-body-profile .main-nav-line .nav-link+.nav-link {
        margin-top: 0;
        margin-left: 20px;
    }
}

.main-profile-body {
    padding: 15px 0 0;
}

@media (min-width: 576px) {
    .main-profile-body {
        padding-top: 20px;
    }
}

@media (min-width: 992px) {
    .main-profile-body {
        padding: 25px 0 0 20px;
    }
}

@media (min-width: 1200px) {
    .main-profile-body {
        padding-left: 25px;
    }
}

.main-profile-view-chart {
    position: relative;
    width: calc(100% - 10px);
    height: 200px;
}

@media (min-width: 375px) {
    .main-profile-view-chart {
        width: 100%;
    }
}

@media (min-width: 576px) {
    .main-profile-view-chart {
        height: 250px;
    }
}

.main-profile-view-info {
    position: absolute;
    top: 0;
    left: 0;
}

.main-profile-view-info h6 {
    font-size: 32px;
    font-weight: 500;
    color: #8f9cc0;
    margin-bottom: 0;
}

.main-profile-view-info span {
    font-size: 12px;
    color: #f10075;
    margin-left: 5px;
}

.main-profile-view-info p {
    font-size: 13px;
    margin-bottom: 0;
}

.main-traffic-detail-item>div:first-child {
    display: flex;
    align-items: center;
    justify-content: space-between;
    font-size: 12px;
    margin-bottom: 7px;
}

.main-traffic-detail-item>div:first-child>span:first-child {
    color: #51586f;
    font-size: 14px;
}

.main-traffic-detail-item>div:first-child>span:last-child {
    font-size: 11px;
    font-weight: 700;
    color: #5e5e77;
}

.main-traffic-detail-item>div:first-child>span:last-child span {
    color: #a8afc7;
    font-weight: 400;
}

.main-traffic-detail-item+.main-traffic-detail-item {
    margin-top: 18px;
}

.main-profile-work-list .media+.media {
    margin-top: 25px;
}

.media-logo,
.media-icon {
    width: 40px;
    height: 40px;
    display: flex;
    align-items: center;
    justify-content: center;
    line-height: 0;
    color: #ffffff;
    font-size: 21px;
    position: relative;
    top: 2px;
    border-radius: 100%;
}

.main-profile-work-list .media-body {
    margin-left: 20px;
}

.main-profile-work-list .media-body h6 {
    color: #8f9cc0;
    font-weight: 500;
    margin-bottom: 2px;
}

.main-profile-work-list .media-body span {
    display: block;
    margin-bottom: 5px;
}

.main-profile-work-list .media-body p {
    margin-bottom: 0;
    font-size: 12px;
    color: #a8afc7;
}

.main-profile-contact-list .media {
    align-items: center;
}

.main-profile-contact-list .media+.media {
    margin-top: 25px;
}

.main-profile-contact-list .media-body {
    margin-left: 25px;
}

.main-profile-contact-list .media-body span {
    font-size: 12px;
    color: #a8afc7;
    display: block;
    line-height: 1.3;
}

.main-profile-contact-list .media-body div {
    font-weight: 500;
    color: #8f9cc0;
}

@media (max-width: 480px) {
    .profile-cover__img {
        top: 275px;
        left: auto;
    }
}

/* ###### Profile  ###### */
.crypto-transcation.list-unstyled li {
    display: flex;
    margin: 17px;
    padding: 15px 10px;
    border: 1px solid #eaedf7;
    border-radius: 6px;
}

.toolbar .btn {
    background: #ffffff;
    color: #222;
    border: 1px solid #e7e7e7;
    border-bottom: 2px solid #ddd;
    border-radius: 4px;
    padding: 2px 17px;
}

.crypto-card {
    position: relative;
    background-color: #ffffff;
    background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='28' height='49' viewBox='0 0 28 49'%3E%3Cg fill-rule='evenodd'%3E%3Cg id='hexagons' fill='%23eaedf7' fill-opacity='0.4' fill-rule='nonzero'%3E%3Cpath d='M13.99 9.25l13 7.5v15l-13 7.5L1 31.75v-15l12.99-7.5zM3 17.9v12.7l10.99 6.34 11-6.35V17.9l-11-6.34L3 17.9zM0 15l12.98-7.5V0h-2v6.35L0 12.69v2.3zm0 18.5L12.98 41v8h-2v-6.85L0 35.81v-2.3zM15 0v7.5L27.99 15H28v-2.31h-.01L17 6.35V0h-2zm0 49v-8l12.99-7.5H28v2.31h-.01L17 42.15V49h-2z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
}

.btn-default.active {
    background: #214fbe;
    color: #ffffff;
    border-bottom: 2px solid #433c9a;
}

@media (max-width: 991px) {
    .card-bitcoin .media {
        display: flex;
        align-items: flex-start;
        overflow-x: scroll;
    }
}

.card-bitcoin .media-icon {
    display: inline-table;
    text-align: center;
    line-height: 42px;
}

.card-bitcoin .media-body {
    margin-left: 20px;
    margin-bottom: 10px;
}

.card-bitcoin .row {
    flex-wrap: nowrap;
    white-space: nowrap;
    overflow-x: auto;
}

.card-bitcoin .row>div {
    flex-shrink: 0;
}

.card-bitcoin label {
    margin-bottom: 2px;
    text-transform: uppercase;
    font-weight: 500;
    font-size: 11px;
    letter-spacing: .5px;
    color: #8587a7;
}

.card-bitcoin p {
    margin-bottom: 0;
    color: #1c273c;
    font-weight: 700;
    font-size: 16px;
    font-family: "Archivo", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
}

.crypto-wallet {
    position: relative;
}

.crypto-wallet .chart-circle-value {
    position: absolute;
    top: 60px;
    left: 0;
    right: 0;
    margin-left: auto;
    margin-right: auto;
    bottom: 0;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-pack: center;
    justify-content: center;
    -ms-flex-align: center;
    align-items: center;
    -ms-flex-direction: column;
    flex-direction: column;
    line-height: 1;
    width: 130px;
    height: 130px;
    line-height: 70px;
    border-radius: 50%;
    font-size: 46px;
}

.crypto-wallet .chart-circle-value.circle-style {
    border: 2px dashed #9a93e8;
    background: #fcfcff;
}

.cryp-icon {
    width: 50px;
    height: 50px;
    font-size: 25px;
    border-radius: 11px;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #ffffff;
}

.img-bg {
    background: url(../img/media/Stars.png);
    background-position: right;
    background-size: auto;
    background-repeat: no-repeat;
}

.crypto-icon {
    width: 40px;
    height: 40px;
    font-size: 15px;
    border-radius: 11px;
    line-height: 40px;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #ffffff;
}

.buy-sell .form {
    border: 1px solid rgba(0, 0, 0, 0.1);
    background: rgba(0, 0, 0, 0.2);
    padding: 15px 0;
    border-radius: 4px;
}

.bg-background2 {
    background: url(../img/media/bitcoin-background.png);
    background-size: cover;
    background-position: center;
}

.bg-background2:before {
    content: '';
    position: absolute;
    width: 100%;
    height: 100%;
    left: 0;
    right: 0;
    display: block;
    z-index: 1;
    top: 0;
    background: rgba(33, 79, 190, 0.8);
}

.bg-background2:after {
    content: '';
    height: 600px;
    width: 277px;
    background: url(../img/media/bitcoin.png);
    position: absolute;
    right: -72px;
    z-index: 0;
    bottom: -142px;
    background-repeat: no-repeat;
}

.bg-background2 .header-text {
    position: relative;
    z-index: 1;
}

.buy-sell .form-control {
    height: 45px;
}

.buy-sell .select2-container--default .select2-selection--single {
    height: 45px;
}

.buy-sell .select2-container--default .select2-selection--single .select2-selection__rendered {
    line-height: 43px;
}

.buy-sell .select2-container--default .select2-selection--single .select2-selection__arrow {
    top: 3px;
}

.crypto-card .chart-wrapper {
    position: relative;
    right: 0;
    bottom: -13px;
    left: -13px;
    width: 111%;
}

.exchange-icon {
    position: absolute;
    height: 50px;
    width: 50px;
    background: #269c8e;
    border-radius: 50%;
    line-height: 50px;
    text-align: center;
    top: -22px;
    left: -70px;
}

.crypto-btc-usd .nav-link {
    padding: 0;
    margin: 0 3px;
    width: 33px;
    height: 28px;
    line-height: 28px;
    text-align: center;
}

.crypto-btc-usd .nav-link.active {
    background: #214fbe;
    border-radius: 3px;
    color: #ffffff;
}

.payment-list {
    list-style-type: none;
    display: flex;
    padding-left: 0;
}

.payment-list .payment-item {
    font-size: 14px;
    text-decoration: none;
    color: #c2c6d4;
    font-weight: 600;
    cursor: pointer;
    text-align: center;
    list-style: none;
    outline: none;
    -webkit-transition: all 0.3s ease-out;
    -moz-transition: all 0.3s ease-out;
    -ms-transition: all 0.3s ease-out;
    -o-transition: all 0.3s ease-out;
    transition: all 0.3s ease-out;
    text-transform: capitalize;
    display: inline-block;
    margin: 0 1%;
    float: left;
    width: 18%;
}

.payment-list .payment-item i {
    width: 100%;
    height: 66px;
    display: block;
    border: 1px solid #e6e9f3;
    padding: 15px 0px;
    margin-bottom: 15px;
    cursor: pointer;
    font-size: 30px;
    border-radius: 4px;
}

.payment-item.active i {
    border-color: #269c8e;
    color: #269c8e;
}

.payment-item.active span {
    color: #269c8e;
}

.cryptoicon {
    width: 30px;
    height: 30px;
    font-size: 13px;
    border-radius: 11px;
    align-items: center;
    display: inline-block !important;
    justify-content: center;
    text-align: center;
    margin-right: 15px;
    padding: 4px 0;
}

.payment-type {
    display: flex;
}

.payment-type input {
    display: none;
}

/* FORM */
.payment-cards {
    position: relative;
    color: #707894;
    background-color: transparent;
    font-size: 26px;
    text-align: center;
    height: 87px;
    line-height: 46px;
    display: block;
    font-size: 16px;
    cursor: pointer;
    border: 1px solid #eaedf7;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
    margin: 0 10px;
    border-radius: 11px;
    font-weight: 500;
}

.payment-cards img {
    position: absolute;
    top: 37px;
    opacity: 0.8;
    height: 32px;
    margin: 0 auto;
    justify-content: center;
    text-align: center;
    left: 0;
    right: 0;
}

input:checked+label.payment-cards {
    border-color: #214fbe !important;
    position: relative !important;
    display: block !important;
    border-width: 1px;
    color: #214fbe;
}

.form input:checked+label:after,
form input:checked+label:after {
    content: "";
    width: 20px;
    height: 20px;
    line-height: 17px;
    border-style: solid;
    border-width: 0 35px 35px 0px;
    border-color: #214fbe #214fbe transparent;
    display: block;
    position: absolute;
    top: 0;
    right: 0;
}

.form input:checked+label:after {
    content: "";
    width: 20px;
    height: 20px;
    line-height: 17px;
    border-style: solid;
    border-width: 0 35px 35px 0px;
    border-color: #214fbe #214fbe transparent;
    display: block;
    position: absolute;
    top: 0;
    right: 0;
}

.form input:checked+label:before {
    content: "\2713";
    z-index: 999;
    position: absolute;
    top: -11px;
    right: 4px;
    font-size: 14px;
    color: #ffffff;
}

form input:checked+label:before,
.form input:checked+label:before {
    content: "\2713";
    z-index: 999;
    position: absolute;
    top: -11px;
    right: 4px;
    font-size: 14px;
    color: #ffffff;
}

.crypto-buysell-card .nav.panel-tabs li {
    position: relative;
    z-index: 1;
    display: block;
    margin: 0;
    text-align: center;
    -webkit-flex: 1;
    -moz-flex: 1;
    -ms-flex: 1;
    flex: 1;
    line-height: 4;
    background: #ffffff;
}

.crypto-buysell-card .nav.panel-tabs li .active:before {
    position: absolute;
    top: 60px;
    left: 50%;
    margin-left: -10px;
    width: 0;
    height: 0;
    border: solid transparent;
    border-width: 10px;
    border-top-color: #214fbe;
    content: '';
    pointer-events: none;
}

.crypto-buysell-card .nav.panel-tabs li a {
    position: relative;
    display: block;
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
    line-height: 4;
}

.crypto-buysell-card .nav.panel-tabs li a.active {
    background: #214fbe;
    color: #ffffff;
}

.crypto-buysell-card .select2-container--default .select2-selection--single {
    height: 46px;
    border-radius: 0 11px 11px 0;
}

.crypto-buysell-card .select2-container--default .select2-selection--single .select2-selection__rendered {
    line-height: 45px;
}

.wallet .input-group-addon-right,
.wallet .input-group-addon {
    padding: .5rem .75rem;
    margin-bottom: 0;
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.25;
    color: #b7bec5;
    text-align: center;
    border: 1px solid #e3ebf3;
    border-radius: 0 .25rem .25rem 0;
}

.crypto-wallet .clipboard-icon {
    background-color: #214fbe !important;
    border-color: #214fbe !important;
    border-radius: 0 11px 11px 0 !important;
    top: 0;
    right: 0;
    font-size: 14px;
    background: #214fbe;
    border: 1px solid #214fbe;
    cursor: pointer;
    padding: 0.375rem 0.75rem;
    font-size: 0.875rem;
    line-height: 2.3 !important;
    color: #ffffff;
    position: relative;
}

.crypto-wallet .clipboard-icon:hover,
.crypto-wallet .clipboard-icon:focus {
    background-color: #214fbe !important;
    border-color: #214fbe !important;
    border-radius: 0 4px 4px 0 !important;
    top: 0;
    right: 0;
    font-size: 14px;
    background: #214fbe;
    border: 1px solid #214fbe;
    cursor: pointer;
    padding: 0.375rem 0.75rem;
    font-size: 0.875rem;
    line-height: 2.3 !important;
    color: #ffffff;
    position: relative;
}

.wallet .clipboard-icon {
    top: 0;
    right: 0;
    position: relative;
    padding: 11px 17px;
    background: #f2f1fd;
    border-radius: 0 11px 11px 0 !important;
    border-left: 0;
    height: 46px;
}

.wallet .input-group-addon-left {
    padding: 12px 17px;
    background: #f2f1fd;
    border-radius: 11px 0 0 11px !important;
    height: 46px;
    border: 1px solid #e3ebf3;
    border-right: 0;
}

.wallet .input-group i {
    font-size: 20px;
}

.transcation-crypto .table {
    border: 0;
}

.transcation-crypto .table tr {
    border-right: 0;
}

.transcation-crypto .table th,
.transcation-crypto .table td {
    padding: 17px 15px;
    margin: 0 14px;
}

.transcation-crypto .table.dataTable th,
.transcation-crypto .table.dataTable td {
    border-left: 0;
}

.transcation-crypto table.dataTable thead .sorting:before,
.transcation-crypto table.dataTable thead .sorting_asc:before,
.transcation-crypto table.dataTable thead .sorting_desc:before,
.transcation-crypto table.dataTable thead .sorting_asc_disabled:before,
.transcation-crypto table.dataTable thead .sorting_desc_disabled:before {
    right: 1em;
    content: "\2191";
    top: 16px;
}

.transcation-crypto table.dataTable thead .sorting:after,
.transcation-crypto table.dataTable thead .sorting_asc:after,
.transcation-crypto table.dataTable thead .sorting_desc:after {
    right: 0.5em;
    content: "\2193";
    top: 16px;
}

table.dataTable thead .sorting_asc_disabled:after,
.transcation-crypto table.dataTable thead .sorting_desc_disabled:after {
    right: 0.5em;
    content: "\2193";
    top: 16px;
}

@media (max-width: 767px) {
    .payment-cards img {
        top: 26px !important;
    }
}

.card-order i {
    background: #edebff;
    height: 40px;
    width: 40px;
    text-align: center;
    line-height: 40px;
    border-radius: 50%;
    font-size: 21px;
}

.owl-theme:before {
    content: '';
    display: block;
    left: 0;
    background: linear-gradient(to left, transparent 0%, #eaedf7 100%);
    bottom: 0px;
    position: absolute;
    width: 100px;
    height: 100%;
    z-index: 1;
}

.owl-theme:after {
    content: '';
    display: block;
    right: 0;
    background: linear-gradient(to right, transparent 0%, #eaedf7 100%);
    bottom: 0px;
    position: absolute;
    width: 100px;
    height: 100%;
    z-index: 1;
}

.table-crypto {
    display: block;
    width: 50px;
    height: 50px;
    text-align: center;
    border-radius: 11px;
    align-items: center;
    justify-content: center;
    float: left;
    background: #e8e9fe;
    margin-right: 10px;
    padding: 12px 0;
}

.table-crypto i {
    font-size: 25px;
    color: #214fbe;
}

#transcation-crypto label {
    padding: 1.5rem 1.5rem 0 1.5rem;
}

#transcation-crypto table.dataTable.no-footer {
    border-bottom-color: transparent;
}

#transcation-crypto div.dataTables_wrapper div.dataTables_paginate,
#transcation-crypto div.dataTables_wrapper div.dataTables_info {
    display: none;
}

#transcation-crypto.transcation-crypto .table th,
.transcation-crypto .table td {
    padding: 12px 9px;
    margin: 0 10px;
}

#transcation-crypto.transcation-crypto .btn,
.sp-container button {
    border-radius: 11px;
}

#transcation-crypto table.dataTable thead .sorting:after,
#transcation-crypto table.dataTable thead .sorting_asc:after,
#transcation-crypto table.dataTable thead .sorting_desc:after,
#transcation-crypto table.dataTable thead .sorting:before,
#transcation-crypto table.dataTable thead .sorting_asc:before,
#transcation-crypto table.dataTable thead .sorting_desc:before,
#transcation-crypto table.dataTable thead .sorting_asc_disabled:before,
#transcation-crypto table.dataTable thead .sorting_desc_disabled:before {
    top: 12px;
}

.apexcharts-toolbar {
    display: none !important;
}

#bitcoin-chart,
#ethereum-chart,
#ripple-chart,
#dash-chart,
#neo-chart,
#litecoin-chart {
    position: relative;
    bottom: -22px;
    width: 120% !important;
    left: -14px;
}

#transcation-crypto .custom-select-sm {
    height: 38px;
    padding-top: 0.25rem;
    padding-bottom: 0.25rem;
    padding-left: 18px;
    font-size: 0.76562rem;
    border-radius: 11px;
}

#transcation-crypto .custom-select {
    background: transparent !important;
}

#transcation-crypto-1 .btn-group-sm>.btn,
.btn-sm {
    border-radius: 8px;
}

.ratio {
    position: absolute;
    right: -10px;
    top: 20px;
    padding: 5px 15px;
    background-color: #222222;
    font-size: 13px;
    line-height: 20px;
    font-weight: 600;
    color: #ffffff;
    border-radius: 15px 0px 0px 15px;
}

.product-timeline ul.timeline-1 {
    list-style-type: none;
    position: relative;
}

.product-timeline ul.timeline-1>li {
    margin: 21.7px 0;
    padding-left: 1rem;
}

.product-timeline ul.timeline-1>li .product-icon {
    width: 37px;
    height: 37px;
    text-align: center;
    border-radius: 50%;
    position: absolute;
    left: 3px;
    background-color: #e8e6f7;
    font-size: 20px;
    line-height: 37px;
    font-size: 17px;
    color: #214fbe;
}

.product-timeline ul.timeline-1:before {
    content: ' ';
    margin: 20px 20px 0 22px;
    display: inline-block;
    position: absolute;
    left: -2px;
    height: 94%;
    z-index: 0;
    content: '';
    position: absolute;
    bottom: 0;
    border-left: 2px dotted #c0ccda;
}

.jvectormap-container {
    width: 100%;
    height: 100%;
    position: relative;
    overflow: hidden;
    -ms-touch-action: none;
    touch-action: none;
}

.countrywise-sale .list-group-item {
    padding: 10px 0;
    border-left-width: 0;
    border-right-width: 0;
    border-style: dotted;
    border-color: #e2e8f5;
    background-color: transparent;
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: flex-start;
}

.countrywise-sale .list-group-item span {
    display: block;
    margin-left: auto;
    font-weight: 600;
    font-family: 'Archivo', Arial, sans-serif;
    color: #1c273c;
}

.countrywise-sale .list-group-item p {
    margin-bottom: 0;
    margin-left: 10px;
}

.top-selling-products .product-item {
    display: flex;
    align-items: center;
    padding: 28px 0 0px 0;
    line-height: 1.2;
}

.top-selling-products .product-img {
    width: 44px;
    margin-right: 1rem;
}

.top-selling-products .price,
.top-selling-products .count {
    font-size: 0.8125rem;
    color: #8094ae;
    margin-top: 5px;
}

.top-selling-products .title,
.top-selling-products .amount {
    font-size: 0.9375rem;
    color: #364a63;
    margin-bottom: 0.25rem;
}

.top-selling-products .product-price {
    margin-left: auto;
    text-align: right;
    margin-bottom: 10px;
    font-weight: 600;
}

.top-selling-products .product-img img {
    border-radius: 4px;
}

.top-selling-products .product-amount {
    float: right;
    margin-left: auto;
}

.top-selling-products .product-name {
    font-weight: 500;
}

.top-selling-products .items-sold {
    color: #8094ae;
    font-size: 11px;
}

#revenuechart {
    height: 370px !important;
}

.table-filter {
    padding: 5px 0 15px;
    margin-bottom: 5px;
}

.table-filter .btn {
    float: right;
    border-radius: 0 4px 4px 0;
    margin-left: -1px;
}

.table-filter input {
    display: inline-block;
    margin-left: 5px;
    width: 200px;
    display: inline-block;
}

.table-filter select {
    display: inline-block;
    margin-left: 5px;
}

.filter-group select.form-control {
    width: 110px;
}

.show-entries select.form-control {
    width: 60px;
    margin: 0 5px;
}

.status {
    width: 7px;
    height: 7px;
    border-radius: 50%;
    margin: 2px 6px 4px 0;
    display: inline-block;
    vertical-align: middle;
    line-height: 10px;
    top: -9px;
}

.ecommerce.wizard {
    margin: 20px auto;
    background: #ffffff;
}

.ecommerce.wizard .nav-tabs {
    position: relative;
    margin: 40px auto;
    margin-bottom: 0;
    border-bottom-color: #e0e0e0;
}

.ecommerce.wizard>div.ecommerce.wizard-inner {
    position: relative;
}

.connecting-line {
    height: 2px;
    background: #e0e0e0;
    position: absolute;
    width: 80%;
    margin: 0 auto;
    left: 0;
    right: 0;
    top: 50%;
    z-index: 1;
}

/* ######## Ecommerce-wizrad ########*/
@media (min-width: 768px) {
    #checkoutsteps>.steps .number {
        background-color: #eaedf7;
        color: #9197ab;
        font-size: 20px;
        font-weight: 600;
        width: 45px;
        height: 45px;
        border-radius: 50%;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        justify-content: center;
        margin: 15px auto;
    }

    #checkoutsteps .checkoutline {
        height: 3px;
        background-color: #eaedf7;
        -webkit-transform: translateY(1.7rem);
        transform: translateY(1.7rem);
        margin: 0 11%;
        position: relative;
        z-index: 0;
        top: 26px;
    }
}

@media (max-width: 767px) {
    #checkoutsteps>.steps .number {
        background-color: #eaedf7;
        color: #9197ab;
        font-size: 15px;
        font-weight: 600;
        width: 35px;
        height: 35px;
        border-radius: 50%;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        justify-content: center;
        margin: 15px auto;
    }

    #checkoutsteps>.steps a {
        font-size: 12px !important;
    }

    #checkoutsteps .checkoutline {
        height: 3px;
        background-color: #eaedf7;
        -webkit-transform: translateY(1.7rem);
        transform: translateY(1.7rem);
        margin: 0 11%;
        position: relative;
        z-index: 0;
        top: 20px;
    }
}

#checkoutsteps>.actions a {
    display: block;
    padding: 9px 25px;
    line-height: 1.573;
    color: #ffffff;
    border-radius: 11px;
    background: #214fbe;
    white-space: nowrap;
}

#checkoutsteps>.actions .disabled a {
    opacity: 0.4;
}

#checkoutsteps>.steps {
    position: relative;
    display: block;
    width: 100%;
    border-radius: 3px;
    padding: 0;
}

#checkoutsteps ul {
    list-style: none !important;
    padding: 0;
    margin: 0;
    display: flex;
}

#checkoutsteps ul[role="tablist"] li {
    display: flex;
    z-index: 0;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -ms-flex-direction: column;
    flex-direction: column;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    -ms-flex-preferred-size: auto;
    flex-basis: auto;
    -webkit-box-flex: 1;
    -ms-flex: 1;
    flex: 1;
    flex-basis: auto;
    font-weight: 500;
    font-size: 1.1rem;
}

#checkoutsteps>.steps a {
    display: block;
    width: auto;
    background-color: transparent;
    color: #2d2c40;
    font-size: 16px;
    font-weight: 400;
    padding: 14px 0;
    text-decoration: none;
    border-radius: 30px;
    cursor: default;
    text-align: center;
    outline: none;
}

#checkoutsteps .actions .menu li {
    flex: inherit;
}

#checkoutsteps>.steps .current a .number {
    background: #214fbe;
    color: #ffffff;
}

#checkoutsteps ul[role="menu"] li {
    flex: inherit;
}

#checkoutsteps .item {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding-bottom: 30px;
    border: 1px solid #e8e8f7;
    margin-bottom: 30px;
    padding: 17px;
    border-radius: 11px;
}

#checkoutsteps .item .left {
    display: flex;
    align-items: center;
}

#checkoutsteps .item .thumb {
    width: 70px;
    height: 70px;
    background: #eaebed;
    border-radius: 11px;
    justify-content: center;
    align-items: center;
    display: flex;
    vertical-align: middle;
    padding: 8px;
}

#checkoutsteps .item .purchase {
    display: inline-block;
    margin-left: 21px;
    text-decoration: none;
}

#checkoutsteps .item .price {
    font-size: 16px;
}

#checkoutsteps .checkout {
    margin-bottom: 44px;
}

#checkoutsteps .checkout .subtotal {
    margin-bottom: 18px;
}

#checkoutsteps .checkout span.heading {
    font-weight: 500;
    margin-right: 5px;
}

#checkoutsteps .total {
    float: right;
    color: #214fbe;
}

.card-pay .tabs-menu {
    margin-bottom: 25px;
    border-radius: 5px;
    overflow: hidden;
}

.card-pay .tabs-menu.nav {
    background: #f0f3ff;
}

.card-pay .tabs-menu.nav li {
    border-right: 1px solid #d3dfea;
}

.card-pay .tabs-menu.nav li a {
    border-right: 0;
}

.card-pay .tabs-menu li {
    width: 33.3%;
    display: block;
}

.card-pay .tabs-menu li a {
    padding: 0.7rem 1rem;
    display: block;
    text-align: center;
}

.card-pay .tabs-menu li a.active {
    background: #214fbe;
    color: #ffffff;
}

@media (min-width: 992px) {
    #checkoutsteps>.content {
        padding: 38px;
    }

    #checkoutsteps>.actions {
        padding: 20px 38px;
    }
}

.item1-links li {
    width: 100%;
    display: block;
    border-top: 1px solid #e8e8f7;
}

.item1-links a {
    padding: .75rem 1.25rem;
    font-weight: 400;
    font-size: .875rem;
    color: #070510;
    border: 0 !important;
}

.item1-links a i {
    font-size: 17px;
    margin-right: 1rem;
}

.item1-links .nav-item a.active {
    background-color: #214fbe;
    color: #ffffff;
    border-radius: 0;
}

.item1-links .nav-link:hover,
.item1-links .nav-link:focus {
    background-color: #214fbe;
    color: #ffffff;
    border-radius: 0;
}

/*Order-track*/
.track {
    position: relative;
    background-color: #eaedf7;
    height: 7px;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    margin-bottom: 60px;
    margin-top: 50px;
}

.track .step {
    -webkit-box-flex: 1;
    -ms-flex-positive: 1;
    flex-grow: 1;
    width: 25%;
    margin-top: -18px;
    text-align: center;
    position: relative;
}

.track .text {
    display: block;
    margin-top: 7px;
}

.track .step.active .text {
    font-weight: 400;
    color: #000000;
}

.track .icon {
    display: inline-block;
    width: 40px;
    height: 40px;
    line-height: 40px;
    position: relative;
    border-radius: 100%;
    background: #eaedf7;
}

.track .step::before {
    height: 7px;
    position: absolute;
    content: "";
    width: 100%;
    left: 0;
    top: 18px;
}

.track .step.active:before {
    background: #214fbe;
}

.track .step.active .icon {
    background: #214fbe;
    color: #ffffff;
}

.btn-apply.coupon {
    border-radius: 0 4px 4px 0 !important;
}

/* ############### UTILITIES/HELPER CLASSES ############### */
/* ###### Backgrounds ###### */
.align-baseline {
    vertical-align: baseline !important;
}

.align-top {
    vertical-align: top !important;
}

.align-middle {
    vertical-align: middle !important;
}

.align-bottom {
    vertical-align: bottom !important;
}

.align-text-bottom {
    vertical-align: text-bottom !important;
}

.align-text-top {
    vertical-align: text-top !important;
}

.bg-secondary {
    background-color: #e54d26 !important;
}

a.bg-secondary:hover,
a.bg-secondary:focus {
    background-color: #e54d26 !important;
}

button.bg-secondary:hover,
button.bg-secondary:focus {
    background-color: #e54d26 !important;
}

.bg-success {
    background-color: #269c8e !important;
}

a.bg-success:hover,
a.bg-success:focus {
    background-color: #37ce4f !important;
}

button.bg-success:hover,
button.bg-success:focus {
    background-color: #37ce4f !important;
}

.bg-info {
    background-color: #00aeff !important;
}

a.bg-info:hover,
a.bg-info:focus {
    background-color: #06aff1 !important;
}

button.bg-info:hover,
button.bg-info:focus {
    background-color: #06aff1 !important;
}

.bg-warning {
    background-color: #ff9e01 !important;
}

a.bg-warning:hover,
a.bg-warning:focus {
    background-color: #d39e00 !important;
}

button.bg-warning:hover,
button.bg-warning:focus {
    background-color: #d39e00 !important;
}

.bg-danger {
    background-color: #f16d75 !important;
}

a.bg-danger:hover,
a.bg-danger:focus {
    background-color: #f16d75 !important;
}

button.bg-danger:hover,
button.bg-danger:focus {
    background-color: #f16d75 !important;
}

.bg-light {
    background-color: #f4f4fd !important;
}

a.bg-light:hover,
a.bg-light:focus {
    background-color: #dbe0ea !important;
}

button.bg-light:hover,
button.bg-light:focus {
    background-color: #dbe0ea !important;
}

.bg-light-1 {
    background-color: #ecedef !important;
}

a.bg-light-1:hover,
a.bg-light-1:focus {
    background-color: #d5d9dc !important;
}

button.bg-light-1:hover,
button.bg-light-1:focus {
    background-color: #d5d9dc !important;
}

.bg-dark {
    background-color: #2e3649 !important;
}

a.bg-dark:hover,
a.bg-dark:focus {
    background-color: #131212 !important;
}

button.bg-dark:hover,
button.bg-dark:focus {
    background-color: #131212 !important;
}

.bg-white {
    background-color: #ffffff !important;
}

.bg-transparent {
    background-color: transparent !important;
}

.bg-primary-gradient {
    background: linear-gradient(to top, #2556cc, #4785fc);
}

.bg-secondary-gradient {
    background: linear-gradient(to top, #f85c34, #fc7a58);
}

.bg-purple-gradient {
    background: linear-gradient(to top, #681dec, #7473e8);
}

.bg-success-gradient {
    background: linear-gradient(to top, #29ac9c, #5cc2b4);
}

.bg-warning-gradient {
    background: linear-gradient(to right, #f8c888 0%, #f45c6b 100%);
}

.bg-info-gradient {
    background: linear-gradient(to right, #9271fe 0%, #fb5ea3 100%);
}

.bg-white-1 {
    background-color: rgba(255, 255, 255, 0.1);
}

.bg-white-2 {
    background-color: rgba(255, 255, 255, 0.2);
}

.bg-white-3 {
    background-color: rgba(255, 255, 255, 0.3);
}

.bg-white-4 {
    background-color: rgba(255, 255, 255, 0.4);
}

.bg-white-5 {
    background-color: rgba(255, 255, 255, 0.5);
}

.bg-white-6 {
    background-color: rgba(255, 255, 255, 0.6);
}

.bg-white-7 {
    background-color: rgba(255, 255, 255, 0.7);
}

.bg-white-8 {
    background-color: rgba(255, 255, 255, 0.8);
}

.bg-white-9 {
    background-color: rgba(255, 255, 255, 0.9);
}

.bg-black-1 {
    background-color: rgba(0, 0, 0, 0.1);
}

.bg-black-2 {
    background-color: rgba(0, 0, 0, 0.2);
}

.bg-black-3 {
    background-color: rgba(0, 0, 0, 0.3);
}

.bg-black-4 {
    background-color: rgba(0, 0, 0, 0.4);
}

.bg-black-5 {
    background-color: rgba(0, 0, 0, 0.5);
}

.bg-black-6 {
    background-color: rgba(0, 0, 0, 0.6);
}

.bg-black-7 {
    background-color: rgba(0, 0, 0, 0.7);
}

.bg-black-8 {
    background-color: rgba(0, 0, 0, 0.8);
}

.bg-black-9 {
    background-color: rgba(0, 0, 0, 0.9);
}

.bg-indigo {
    background-color: #4b0082;
}

.bg-purple {
    background-color: #5f1dd7 !important;
}

.bg-pink {
    background-color: #fd006d !important;
}

.bg-orange {
    background-color: #fd7e14;
}

.bg-teal {
    background-color: #00cccc;
}

.bg-purple-dark {
    background-color: #59339d;
}

.instagram {
    background: #de497b;
}

.linkedin {
    background: #0077b5;
}

.twitter {
    background: #1da1f2;
}

.facebook {
    background: #3b5998;
}

/* ###### Backgrounds ###### */
/* ###### Display ###### */
.d-none {
    display: none !important;
}

.d-inline {
    display: inline !important;
}

.d-inline-block {
    display: inline-block !important;
}

.d-block {
    display: block !important;
}

.d-table {
    display: table !important;
}

.d-table-row {
    display: table-row !important;
}

.d-table-cell {
    display: table-cell !important;
}

.d-flex {
    display: flex !important;
}

.d-inline-flex {
    display: inline-flex !important;
}

@media (min-width: 576px) {
    .d-sm-none {
        display: none !important;
    }

    .d-sm-inline {
        display: inline !important;
    }

    .d-sm-inline-block {
        display: inline-block !important;
    }

    .d-sm-block {
        display: block !important;
    }

    .d-sm-table {
        display: table !important;
    }

    .d-sm-table-row {
        display: table-row !important;
    }

    .d-sm-table-cell {
        display: table-cell !important;
    }

    .d-sm-flex {
        display: flex !important;
    }

    .d-sm-inline-flex {
        display: inline-flex !important;
    }
}

@media (min-width: 768px) {
    .d-md-none {
        display: none !important;
    }

    .d-md-inline {
        display: inline !important;
    }

    .d-md-inline-block {
        display: inline-block !important;
    }

    .d-md-block {
        display: block !important;
    }

    .d-md-table {
        display: table !important;
    }

    .d-md-table-row {
        display: table-row !important;
    }

    .d-md-table-cell {
        display: table-cell !important;
    }

    .d-md-flex {
        display: flex !important;
    }

    .d-md-inline-flex {
        display: inline-flex !important;
    }
}

@media (min-width: 992px) {
    .d-lg-none {
        display: none !important;
    }

    .d-lg-inline {
        display: inline !important;
    }

    .d-lg-inline-block {
        display: inline-block !important;
    }

    .d-lg-block {
        display: block !important;
    }

    .d-lg-table {
        display: table !important;
    }

    .d-lg-table-row {
        display: table-row !important;
    }

    .d-lg-table-cell {
        display: table-cell !important;
    }

    .d-lg-flex {
        display: flex !important;
    }

    .d-lg-inline-flex {
        display: inline-flex !important;
    }
}

@media (min-width: 1200px) {
    .d-xl-none {
        display: none !important;
    }

    .d-xl-inline {
        display: inline !important;
    }

    .d-xl-inline-block {
        display: inline-block !important;
    }

    .d-xl-block {
        display: block !important;
    }

    .d-xl-table {
        display: table !important;
    }

    .d-xl-table-row {
        display: table-row !important;
    }

    .d-xl-table-cell {
        display: table-cell !important;
    }

    .d-xl-flex {
        display: flex !important;
    }

    .d-xl-inline-flex {
        display: inline-flex !important;
    }
}

@media print {
    .d-print-none {
        display: none !important;
    }

    .d-print-inline {
        display: inline !important;
    }

    .d-print-inline-block {
        display: inline-block !important;
    }

    .d-print-block {
        display: block !important;
    }

    .d-print-table {
        display: table !important;
    }

    .d-print-table-row {
        display: table-row !important;
    }

    .d-print-table-cell {
        display: table-cell !important;
    }

    .d-print-flex {
        display: flex !important;
    }

    .d-print-inline-flex {
        display: inline-flex !important;
    }
}

/* ###### Display ###### */
/* ###### Flex  ###### */
.flex-row {
    flex-direction: row !important;
}

.flex-column {
    flex-direction: column !important;
}

.flex-row-reverse {
    flex-direction: row-reverse !important;
}

.flex-column-reverse {
    flex-direction: column-reverse !important;
}

.flex-wrap {
    flex-wrap: wrap !important;
}

.flex-nowrap {
    flex-wrap: nowrap !important;
}

.flex-wrap-reverse {
    flex-wrap: wrap-reverse !important;
}

.flex-fill {
    flex: 1 1 auto !important;
}

.flex-grow-0 {
    flex-grow: 0 !important;
}

.flex-grow-1 {
    flex-grow: 1 !important;
}

.flex-shrink-0 {
    flex-shrink: 0 !important;
}

.flex-shrink-1 {
    flex-shrink: 1 !important;
}

.justify-content-start {
    justify-content: flex-start !important;
}

.justify-content-end {
    justify-content: flex-end !important;
}

.justify-content-center {
    justify-content: center !important;
}

.justify-content-between {
    justify-content: space-between !important;
}

.justify-content-around {
    justify-content: space-around !important;
}

.align-items-start {
    align-items: flex-start !important;
}

.align-items-end {
    align-items: flex-end !important;
}

.align-items-center {
    align-items: center !important;
}

.align-items-baseline {
    align-items: baseline !important;
}

.align-items-stretch {
    align-items: stretch !important;
}

.align-content-start {
    align-content: flex-start !important;
}

.align-content-end {
    align-content: flex-end !important;
}

.align-content-center {
    align-content: center !important;
}

.align-content-between {
    align-content: space-between !important;
}

.align-content-around {
    align-content: space-around !important;
}

.align-content-stretch {
    align-content: stretch !important;
}

.align-self-auto {
    align-self: auto !important;
}

.align-self-start {
    align-self: flex-start !important;
}

.align-self-end {
    align-self: flex-end !important;
}

.align-self-center {
    align-self: center !important;
}

.align-self-baseline {
    align-self: baseline !important;
}

.align-self-stretch {
    align-self: stretch !important;
}

@media (min-width: 576px) {
    .flex-sm-row {
        flex-direction: row !important;
    }

    .flex-sm-column {
        flex-direction: column !important;
    }

    .flex-sm-row-reverse {
        flex-direction: row-reverse !important;
    }

    .flex-sm-column-reverse {
        flex-direction: column-reverse !important;
    }

    .flex-sm-wrap {
        flex-wrap: wrap !important;
    }

    .flex-sm-nowrap {
        flex-wrap: nowrap !important;
    }

    .flex-sm-wrap-reverse {
        flex-wrap: wrap-reverse !important;
    }

    .flex-sm-fill {
        flex: 1 1 auto !important;
    }

    .flex-sm-grow-0 {
        flex-grow: 0 !important;
    }

    .flex-sm-grow-1 {
        flex-grow: 1 !important;
    }

    .flex-sm-shrink-0 {
        flex-shrink: 0 !important;
    }

    .flex-sm-shrink-1 {
        flex-shrink: 1 !important;
    }

    .justify-content-sm-start {
        justify-content: flex-start !important;
    }

    .justify-content-sm-end {
        justify-content: flex-end !important;
    }

    .justify-content-sm-center {
        justify-content: center !important;
    }

    .justify-content-sm-between {
        justify-content: space-between !important;
    }

    .justify-content-sm-around {
        justify-content: space-around !important;
    }

    .align-items-sm-start {
        align-items: flex-start !important;
    }

    .align-items-sm-end {
        align-items: flex-end !important;
    }

    .align-items-sm-center {
        align-items: center !important;
    }

    .align-items-sm-baseline {
        align-items: baseline !important;
    }

    .align-items-sm-stretch {
        align-items: stretch !important;
    }

    .align-content-sm-start {
        align-content: flex-start !important;
    }

    .align-content-sm-end {
        align-content: flex-end !important;
    }

    .align-content-sm-center {
        align-content: center !important;
    }

    .align-content-sm-between {
        align-content: space-between !important;
    }

    .align-content-sm-around {
        align-content: space-around !important;
    }

    .align-content-sm-stretch {
        align-content: stretch !important;
    }

    .align-self-sm-auto {
        align-self: auto !important;
    }

    .align-self-sm-start {
        align-self: flex-start !important;
    }

    .align-self-sm-end {
        align-self: flex-end !important;
    }

    .align-self-sm-center {
        align-self: center !important;
    }

    .align-self-sm-baseline {
        align-self: baseline !important;
    }

    .align-self-sm-stretch {
        align-self: stretch !important;
    }
}

@media (min-width: 768px) {
    .flex-md-row {
        flex-direction: row !important;
    }

    .flex-md-column {
        flex-direction: column !important;
    }

    .flex-md-row-reverse {
        flex-direction: row-reverse !important;
    }

    .flex-md-column-reverse {
        flex-direction: column-reverse !important;
    }

    .flex-md-wrap {
        flex-wrap: wrap !important;
    }

    .flex-md-nowrap {
        flex-wrap: nowrap !important;
    }

    .flex-md-wrap-reverse {
        flex-wrap: wrap-reverse !important;
    }

    .flex-md-fill {
        flex: 1 1 auto !important;
    }

    .flex-md-grow-0 {
        flex-grow: 0 !important;
    }

    .flex-md-grow-1 {
        flex-grow: 1 !important;
    }

    .flex-md-shrink-0 {
        flex-shrink: 0 !important;
    }

    .flex-md-shrink-1 {
        flex-shrink: 1 !important;
    }

    .justify-content-md-start {
        justify-content: flex-start !important;
    }

    .justify-content-md-end {
        justify-content: flex-end !important;
    }

    .justify-content-md-center {
        justify-content: center !important;
    }

    .justify-content-md-between {
        justify-content: space-between !important;
    }

    .justify-content-md-around {
        justify-content: space-around !important;
    }

    .align-items-md-start {
        align-items: flex-start !important;
    }

    .align-items-md-end {
        align-items: flex-end !important;
    }

    .align-items-md-center {
        align-items: center !important;
    }

    .align-items-md-baseline {
        align-items: baseline !important;
    }

    .align-items-md-stretch {
        align-items: stretch !important;
    }

    .align-content-md-start {
        align-content: flex-start !important;
    }

    .align-content-md-end {
        align-content: flex-end !important;
    }

    .align-content-md-center {
        align-content: center !important;
    }

    .align-content-md-between {
        align-content: space-between !important;
    }

    .align-content-md-around {
        align-content: space-around !important;
    }

    .align-content-md-stretch {
        align-content: stretch !important;
    }

    .align-self-md-auto {
        align-self: auto !important;
    }

    .align-self-md-start {
        align-self: flex-start !important;
    }

    .align-self-md-end {
        align-self: flex-end !important;
    }

    .align-self-md-center {
        align-self: center !important;
    }

    .align-self-md-baseline {
        align-self: baseline !important;
    }

    .align-self-md-stretch {
        align-self: stretch !important;
    }
}

@media (min-width: 992px) {
    .flex-lg-row {
        flex-direction: row !important;
    }

    .flex-lg-column {
        flex-direction: column !important;
    }

    .flex-lg-row-reverse {
        flex-direction: row-reverse !important;
    }

    .flex-lg-column-reverse {
        flex-direction: column-reverse !important;
    }

    .flex-lg-wrap {
        flex-wrap: wrap !important;
    }

    .flex-lg-nowrap {
        flex-wrap: nowrap !important;
    }

    .flex-lg-wrap-reverse {
        flex-wrap: wrap-reverse !important;
    }

    .flex-lg-fill {
        flex: 1 1 auto !important;
    }

    .flex-lg-grow-0 {
        flex-grow: 0 !important;
    }

    .flex-lg-grow-1 {
        flex-grow: 1 !important;
    }

    .flex-lg-shrink-0 {
        flex-shrink: 0 !important;
    }

    .flex-lg-shrink-1 {
        flex-shrink: 1 !important;
    }

    .justify-content-lg-start {
        justify-content: flex-start !important;
    }

    .justify-content-lg-end {
        justify-content: flex-end !important;
    }

    .justify-content-lg-center {
        justify-content: center !important;
    }

    .justify-content-lg-between {
        justify-content: space-between !important;
    }

    .justify-content-lg-around {
        justify-content: space-around !important;
    }

    .align-items-lg-start {
        align-items: flex-start !important;
    }

    .align-items-lg-end {
        align-items: flex-end !important;
    }

    .align-items-lg-center {
        align-items: center !important;
    }

    .align-items-lg-baseline {
        align-items: baseline !important;
    }

    .align-items-lg-stretch {
        align-items: stretch !important;
    }

    .align-content-lg-start {
        align-content: flex-start !important;
    }

    .align-content-lg-end {
        align-content: flex-end !important;
    }

    .align-content-lg-center {
        align-content: center !important;
    }

    .align-content-lg-between {
        align-content: space-between !important;
    }

    .align-content-lg-around {
        align-content: space-around !important;
    }

    .align-content-lg-stretch {
        align-content: stretch !important;
    }

    .align-self-lg-auto {
        align-self: auto !important;
    }

    .align-self-lg-start {
        align-self: flex-start !important;
    }

    .align-self-lg-end {
        align-self: flex-end !important;
    }

    .align-self-lg-center {
        align-self: center !important;
    }

    .align-self-lg-baseline {
        align-self: baseline !important;
    }

    .align-self-lg-stretch {
        align-self: stretch !important;
    }
}

@media (min-width: 1200px) {
    .flex-xl-row {
        flex-direction: row !important;
    }

    .flex-xl-column {
        flex-direction: column !important;
    }

    .flex-xl-row-reverse {
        flex-direction: row-reverse !important;
    }

    .flex-xl-column-reverse {
        flex-direction: column-reverse !important;
    }

    .flex-xl-wrap {
        flex-wrap: wrap !important;
    }

    .flex-xl-nowrap {
        flex-wrap: nowrap !important;
    }

    .flex-xl-wrap-reverse {
        flex-wrap: wrap-reverse !important;
    }

    .flex-xl-fill {
        flex: 1 1 auto !important;
    }

    .flex-xl-grow-0 {
        flex-grow: 0 !important;
    }

    .flex-xl-grow-1 {
        flex-grow: 1 !important;
    }

    .flex-xl-shrink-0 {
        flex-shrink: 0 !important;
    }

    .flex-xl-shrink-1 {
        flex-shrink: 1 !important;
    }

    .justify-content-xl-start {
        justify-content: flex-start !important;
    }

    .justify-content-xl-end {
        justify-content: flex-end !important;
    }

    .justify-content-xl-center {
        justify-content: center !important;
    }

    .justify-content-xl-between {
        justify-content: space-between !important;
    }

    .justify-content-xl-around {
        justify-content: space-around !important;
    }

    .align-items-xl-start {
        align-items: flex-start !important;
    }

    .align-items-xl-end {
        align-items: flex-end !important;
    }

    .align-items-xl-center {
        align-items: center !important;
    }

    .align-items-xl-baseline {
        align-items: baseline !important;
    }

    .align-items-xl-stretch {
        align-items: stretch !important;
    }

    .align-content-xl-start {
        align-content: flex-start !important;
    }

    .align-content-xl-end {
        align-content: flex-end !important;
    }

    .align-content-xl-center {
        align-content: center !important;
    }

    .align-content-xl-between {
        align-content: space-between !important;
    }

    .align-content-xl-around {
        align-content: space-around !important;
    }

    .align-content-xl-stretch {
        align-content: stretch !important;
    }

    .align-self-xl-auto {
        align-self: auto !important;
    }

    .align-self-xl-start {
        align-self: flex-start !important;
    }

    .align-self-xl-end {
        align-self: flex-end !important;
    }

    .align-self-xl-center {
        align-self: center !important;
    }

    .align-self-xl-baseline {
        align-self: baseline !important;
    }

    .align-self-xl-stretch {
        align-self: stretch !important;
    }
}

/* ###### Flex  ###### */
/* ###### 9.2 Border   ###### */
.border {
    border: 1px solid #ededf9 !important;
}

.border-top {
    border-top: 1px solid #e8e8f7 !important;
}

.border-right {
    border-right: 1px solid #e8e8f7 !important;
}

.border-bottom {
    border-bottom: 1px solid #e8e8f7 !important;
}

.border-left {
    border-left: 1px solid #e8e8f7 !important;
}

.border-0 {
    border: 0 !important;
}

.border-top-0 {
    border-top: 0 !important;
}

.border-right-0 {
    border-right: 0 !important;
}

.border-bottom-0 {
    border-bottom: 0 !important;
}

.border-left-0 {
    border-left: 0 !important;
}

.border-secondary {
    border-color: #a8afc7 !important;
}

.border-success {
    border-color: #269c8e !important;
}

.border-info {
    border-color: #00aeff !important;
}

.border-warning {
    border-color: #ff9e01 !important;
}

.border-danger {
    border-color: #f16d75 !important;
}

.border-light {
    border-color: #f8f9fa !important;
}

.border-dark {
    border-color: #2e3649 !important;
}

.border-white {
    border-color: #ffffff !important;
}

.text-pink {
    color: #fd006d !important;
}

.rounded-sm {
    border-radius: 0.2rem !important;
}

.rounded {
    border-radius: 3px !important;
}

.rounded-top {
    border-top-left-radius: 11px !important;
    border-top-right-radius: 11px !important;
}

.rounded-right {
    border-top-right-radius: 11px !important;
    border-bottom-right-radius: 11px !important;
}

.rounded-bottom {
    border-bottom-right-radius: 11px !important;
    border-bottom-left-radius: 11px !important;
}

.rounded-left {
    border-top-left-radius: 11px !important;
    border-bottom-left-radius: 11px !important;
}

.rounded-left-0 {
    border-top-left-radius: 0px !important;
    border-bottom-left-radius: 0px !important;
}

.rounded-right-0 {
    border-top-right-radius: 0px !important;
    border-bottom-right-radius: 0px !important;
}

.rounded-lg {
    border-radius: 0.3rem !important;
}

.rounded-circle {
    border-radius: 50% !important;
}

.rounded-pill {
    border-radius: 50rem !important;
}

.rounded-0 {
    border-radius: 0 !important;
}

.rounded-11 {
    border-radius: 11px !important;
}

.clearfix::after {
    display: block;
    clear: both;
    content: "";
}

.bd-transparent {
    border-color: transparent;
}

.bd {
    border: 1px solid #ccd2e2;
}

.bd-t {
    border-top: 1px solid #ccd2e2;
}

.bd-r {
    border-right: 1px solid #ccd2e2;
}

.bd-b {
    border-bottom: 1px solid #ccd2e2;
}

.bd-l {
    border-left: 1px solid #ccd2e2;
}

.bd-y {
    border-top: 1px solid #ccd2e2;
    border-bottom: 1px solid #ccd2e2;
}

.bd-x {
    border-left: 1px solid #ccd2e2;
    border-right: 1px solid #ccd2e2;
}

.bd-0 {
    border-width: 0;
}

.bd-1 {
    border-width: 1px;
}

.bd-2 {
    border-width: 2px;
}

.bd-3 {
    border-width: 3px;
}

.bd-4 {
    border-width: 4px;
}

.bd-5 {
    border-width: 5px;
}

.bd-t-0 {
    border-top: 0 !important;
}

.bd-r-0 {
    border-right: 0 !important;
}

.bd-b-0 {
    border-bottom: 0 !important;
}

.bd-l-0 {
    border-left: 0 !important;
}

.bd-t-0-f {
    border-top: 0 !important;
}

.bd-r-0-f {
    border-right: 0 !important;
}

.bd-b-0-f {
    border-bottom: 0 !important;
}

.bd-l-0-f {
    border-left: 0 !important;
}

.bd-y-0 {
    border-top-width: 0;
    border-bottom-width: 0;
}

.bd-y-1 {
    border-top-width: 1px;
    border-bottom-width: 1px;
}

.bd-x-0 {
    border-left-width: 0;
    border-right-width: 0;
}

.bd-x-1 {
    border-left-width: 1px;
    border-right-width: 1px;
}

.bd-secondary {
    border-color: #e54d26;
}

.bd-success {
    border-color: #269c8e;
}

.bd-warning {
    border-color: #ff9e01;
}

.bd-danger {
    border-color: #f16d75;
}

.bd-info {
    border-color: #00aeff;
}

.bd-white {
    border-color: #ffffff;
}

.bd-gray-100 {
    border-color: #f8f9fa;
}

.bd-gray-200,
.bd-gray-300 {
    border-color: #ecedef;
}

.bd-gray-400 {
    border-color: #b4bdce;
}

.bd-gray-500,
.bd-gray-600 {
    border-color: #a8afc7;
}

.bd-gray-700 {
    border-color: #3c4858;
}

.bd-gray-800 {
    border-color: #2e3649;
}

.bd-gray-900 {
    border-color: #8f9cc0;
}

.bd-white-1 {
    border-color: rgba(255, 255, 255, 0.1);
}

.bd-white-2 {
    border-color: rgba(255, 255, 255, 0.2);
}

.bd-white-3 {
    border-color: rgba(255, 255, 255, 0.3);
}

.bd-white-4 {
    border-color: rgba(255, 255, 255, 0.4);
}

.bd-white-5 {
    border-color: rgba(255, 255, 255, 0.5);
}

.bd-white-6 {
    border-color: rgba(255, 255, 255, 0.6);
}

.bd-white-7 {
    border-color: rgba(255, 255, 255, 0.7);
}

.bd-white-8 {
    border-color: rgba(255, 255, 255, 0.8);
}

.rounded-5 {
    border-radius: 5px;
}

.rounded-10 {
    border-radius: 10px;
}

.rounded-20 {
    border-radius: 20px;
}

.rounded-30 {
    border-radius: 30px;
}

.rounded-40 {
    border-radius: 40px;
}

.rounded-50 {
    border-radius: 50px;
}

.bd-dashed {
    border-style: dashed;
}

.bd-dotted {
    border-style: dotted;
}

@media (min-width: 480px) {
    .bd-xs {
        border: 1px solid #e8e8f7;
    }

    .bd-xs-t {
        border-top: 1px solid #e8e8f7;
    }

    .bd-xs-r {
        border-right: 1px solid #e8e8f7;
    }

    .bd-xs-b {
        border-bottom: 1px solid #e8e8f7;
    }

    .bd-xs-l {
        border-left: 1px solid #e8e8f7;
    }

    .bd-xs-y {
        border-top: 1px solid #e8e8f7;
        border-bottom: 1px solid #e8e8f7;
    }

    .bd-xs-x {
        border-left: 1px solid #e8e8f7;
        border-right: 1px solid #e8e8f7;
    }
}

@media (min-width: 576px) {
    .bd-sm {
        border: 1px solid #e8e8f7;
    }

    .bd-sm-t {
        border-top: 1px solid #e8e8f7;
    }

    .bd-sm-r {
        border-right: 1px solid #e8e8f7;
    }

    .bd-sm-b {
        border-bottom: 1px solid #e8e8f7;
    }

    .bd-sm-l {
        border-left: 1px solid #e8e8f7;
    }

    .bd-sm-y {
        border-top: 1px solid #e8e8f7;
        border-bottom: 1px solid #e8e8f7;
    }

    .bd-sm-x {
        border-left: 1px solid #e8e8f7;
        border-right: 1px solid #e8e8f7;
    }
}

@media (min-width: 768px) {
    .bd-md {
        border: 1px solid #e8e8f7;
    }

    .bd-md-t {
        border-top: 1px solid #e8e8f7;
    }

    .bd-md-r {
        border-right: 1px solid #e8e8f7;
    }

    .bd-md-b {
        border-bottom: 1px solid #e8e8f7;
    }

    .bd-md-l {
        border-left: 1px solid #e8e8f7;
    }

    .bd-md-y {
        border-top: 1px solid #e8e8f7;
        border-bottom: 1px solid #e8e8f7;
    }

    .bd-md-x {
        border-left: 1px solid #e8e8f7;
        border-right: 1px solid #e8e8f7;
    }
}

@media (min-width: 992px) {
    .bd-lg {
        border: 1px solid #e8e8f7;
    }

    .bd-lg-t {
        border-top: 1px solid #e8e8f7;
    }

    .bd-lg-r {
        border-right: 1px solid #e8e8f7;
    }

    .bd-lg-b {
        border-bottom: 1px solid #e8e8f7;
    }

    .bd-lg-l {
        border-left: 1px solid #e8e8f7;
    }

    .bd-lg-y {
        border-top: 1px solid #e8e8f7;
        border-bottom: 1px solid #e8e8f7;
    }

    .bd-lg-x {
        border-left: 1px solid #e8e8f7;
        border-right: 1px solid #e8e8f7;
    }
}

@media (min-width: 1200px) {
    .bd-xl {
        border: 1px solid #e8e8f7;
    }

    .bd-xl-t {
        border-top: 1px solid #e8e8f7;
    }

    .bd-xl-r {
        border-right: 1px solid #e8e8f7;
    }

    .bd-xl-b {
        border-bottom: 1px solid #e8e8f7;
    }

    .bd-xl-l {
        border-left: 1px solid #e8e8f7;
    }

    .bd-xl-y {
        border-top: 1px solid #e8e8f7;
        border-bottom: 1px solid #e8e8f7;
    }

    .bd-xl-x {
        border-left: 1px solid #e8e8f7;
        border-right: 1px solid #e8e8f7;
    }
}

.br-0 {
    border-radius: 0;
}

.br-0-f {
    border-radius: 0 !important;
}

/* ###### Border ###### */
/* ###### Height ###### */
.ht-5 {
    height: 5px;
}

.ht-5p {
    height: 5%;
}

.mx-ht-5p {
    max-height: 5%;
}

.mn-ht-5p {
    min-height: 5%;
}

.ht-5-f {
    height: 5px !important;
}

.ht-5p-f {
    height: 5% !important;
}

.ht-10 {
    height: 10px;
}

.ht-10p {
    height: 10%;
}

.mx-ht-10p {
    max-height: 10%;
}

.mn-ht-10p {
    min-height: 10%;
}

.ht-10-f {
    height: 10px !important;
}

.ht-10p-f {
    height: 10% !important;
}

.ht-15 {
    height: 15px;
}

.ht-15p {
    height: 15%;
}

.mx-ht-15p {
    max-height: 15%;
}

.mn-ht-15p {
    min-height: 15%;
}

.ht-15-f {
    height: 15px !important;
}

.ht-15p-f {
    height: 15% !important;
}

.ht-20 {
    height: 20px;
}

.ht-20p {
    height: 20%;
}

.mx-ht-20p {
    max-height: 20%;
}

.mn-ht-20p {
    min-height: 20%;
}

.ht-20-f {
    height: 20px !important;
}

.ht-20p-f {
    height: 20% !important;
}

.ht-25 {
    height: 25px;
}

.ht-25p {
    height: 25%;
}

.mx-ht-25p {
    max-height: 25%;
}

.mn-ht-25p {
    min-height: 25%;
}

.ht-25-f {
    height: 25px !important;
}

.ht-25p-f {
    height: 25% !important;
}

.ht-30 {
    height: 30px;
}

.ht-30p {
    height: 30%;
}

.mx-ht-30p {
    max-height: 30%;
}

.mn-ht-30p {
    min-height: 30%;
}

.ht-30-f {
    height: 30px !important;
}

.ht-30p-f {
    height: 30% !important;
}

.ht-35 {
    height: 35px;
}

.ht-38 {
    height: 38px;
}

.ht-35p {
    height: 35%;
}

.mx-ht-35p {
    max-height: 35%;
}

.mn-ht-35p {
    min-height: 35%;
}

.ht-35-f {
    height: 35px !important;
}

.ht-35p-f {
    height: 35% !important;
}

.ht-40 {
    height: 40px;
}

.ht-40p {
    height: 40%;
}

.mx-ht-40p {
    max-height: 40%;
}

.mn-ht-40p {
    min-height: 40%;
}

.ht-40-f {
    height: 40px !important;
}

.ht-40p-f {
    height: 40% !important;
}

.ht-45 {
    height: 45px;
}

.ht-45p {
    height: 45%;
}

.mx-ht-45p {
    max-height: 45%;
}

.mn-ht-45p {
    min-height: 45%;
}

.ht-45-f {
    height: 45px !important;
}

.ht-45p-f {
    height: 45% !important;
}

.ht-50 {
    height: 50px;
}

.ht-50p {
    height: 50%;
}

.mx-ht-50p {
    max-height: 50%;
}

.mn-ht-50p {
    min-height: 50%;
}

.ht-50-f {
    height: 50px !important;
}

.ht-50p-f {
    height: 50% !important;
}

.ht-55 {
    height: 55px;
}

.ht-55p {
    height: 55%;
}

.mx-ht-55p {
    max-height: 55%;
}

.mn-ht-55p {
    min-height: 55%;
}

.ht-55-f {
    height: 55px !important;
}

.ht-55p-f {
    height: 55% !important;
}

.ht-60 {
    height: 60px;
}

.ht-60p {
    height: 60%;
}

.mx-ht-60p {
    max-height: 60%;
}

.mn-ht-60p {
    min-height: 60%;
}

.ht-60-f {
    height: 60px !important;
}

.ht-60p-f {
    height: 60% !important;
}

.ht-65 {
    height: 65px;
}

.ht-65p {
    height: 65%;
}

.mx-ht-65p {
    max-height: 65%;
}

.mn-ht-65p {
    min-height: 65%;
}

.ht-65-f {
    height: 65px !important;
}

.ht-65p-f {
    height: 65% !important;
}

.ht-70 {
    height: 70px;
}

.ht-70p {
    height: 70%;
}

.mx-ht-70p {
    max-height: 70%;
}

.mn-ht-70p {
    min-height: 70%;
}

.ht-70-f {
    height: 70px !important;
}

.ht-70p-f {
    height: 70% !important;
}

.ht-75 {
    height: 75px;
}

.ht-75p {
    height: 75%;
}

.mx-ht-75p {
    max-height: 75%;
}

.mn-ht-75p {
    min-height: 75%;
}

.ht-75-f {
    height: 75px !important;
}

.ht-75p-f {
    height: 75% !important;
}

.ht-80 {
    height: 80px;
}

.ht-80p {
    height: 80%;
}

.mx-ht-80p {
    max-height: 80%;
}

.mn-ht-80p {
    min-height: 80%;
}

.ht-80-f {
    height: 80px !important;
}

.ht-80p-f {
    height: 80% !important;
}

.ht-85 {
    height: 85px;
}

.ht-85p {
    height: 85%;
}

.mx-ht-85p {
    max-height: 85%;
}

.mn-ht-85p {
    min-height: 85%;
}

.ht-85-f {
    height: 85px !important;
}

.ht-85p-f {
    height: 85% !important;
}

.ht-90 {
    height: 90px;
}

.ht-90p {
    height: 90%;
}

.mx-ht-90p {
    max-height: 90%;
}

.mn-ht-90p {
    min-height: 90%;
}

.ht-90-f {
    height: 90px !important;
}

.ht-90p-f {
    height: 90% !important;
}

.ht-95 {
    height: 95px;
}

.ht-95p {
    height: 95%;
}

.mx-ht-95p {
    max-height: 95%;
}

.mn-ht-95p {
    min-height: 95%;
}

.ht-95-f {
    height: 95px !important;
}

.ht-95p-f {
    height: 95% !important;
}

.ht-100 {
    height: 100px;
}

.ht-100p {
    height: 100%;
}

.mx-ht-100p {
    max-height: 100%;
}

.mn-ht-100p {
    min-height: 100%;
}

.ht-100-f {
    height: 100px !important;
}

.ht-100p-f {
    height: 100% !important;
}

.ht-150 {
    height: 150px;
}

.ht-200 {
    height: 200px;
}

.ht-200-f {
    height: 200px !important;
}

.ht-250 {
    height: 250px;
}

.ht-260 {
    height: 260px;
}

.ht-270 {
    height: 270px;
}

.ht-280 {
    height: 280px;
}

.ht-290 {
    height: 290px;
}

.ht-300 {
    height: 300px;
}

.ht-350 {
    height: 350px;
}

.ht-400 {
    height: 400px;
}

.ht-450 {
    height: 450px;
}

.ht-500 {
    height: 500px;
}

.ht-550 {
    height: 550px;
}

.ht-600 {
    height: 600px;
}

.ht-650 {
    height: 650px;
}

.ht-700 {
    height: 700px;
}

.ht-750 {
    height: 750px;
}

.ht-800 {
    height: 800px;
}

.ht-100v {
    height: 100vh;
}

.ht-1 {
    height: 1px;
}

.ht-2 {
    height: 2px;
}

.ht-3 {
    height: 3px;
}

.ht-4 {
    height: 4px;
}

.ht-6 {
    height: 6px;
}

.ht-7 {
    height: 7px;
}

.ht-8 {
    height: 8px;
}

.ht-9 {
    height: 9px;
}

.ht-auto {
    height: auto;
}

.ht-16 {
    height: 16px;
}

.ht-32 {
    height: 32px;
}

.ht-36 {
    height: 36px;
}

.ht-48 {
    height: 48px;
}

.ht-64 {
    height: 64px;
}

.ht-72 {
    height: 72px;
}

.ht-115 {
    height: 115px;
}

.ht-120 {
    height: 120px;
}

.ht-160 {
    height: 160px;
}

@media (min-width: 480px) {
    .ht-xs-5 {
        height: 5px;
    }

    .ht-xs-5p {
        height: 5%;
    }

    .mx-ht-xs-5p {
        max-height: 5%;
    }

    .mn-ht-xs-5p {
        min-height: 5%;
    }

    .ht-xs-5-f {
        height: 5px !important;
    }

    .ht-xs-5p-f {
        height: 5% !important;
    }

    .ht-xs-10 {
        height: 10px;
    }

    .ht-xs-10p {
        height: 10%;
    }

    .mx-ht-xs-10p {
        max-height: 10%;
    }

    .mn-ht-xs-10p {
        min-height: 10%;
    }

    .ht-xs-10-f {
        height: 10px !important;
    }

    .ht-xs-10p-f {
        height: 10% !important;
    }

    .ht-xs-15 {
        height: 15px;
    }

    .ht-xs-15p {
        height: 15%;
    }

    .mx-ht-xs-15p {
        max-height: 15%;
    }

    .mn-ht-xs-15p {
        min-height: 15%;
    }

    .ht-xs-15-f {
        height: 15px !important;
    }

    .ht-xs-15p-f {
        height: 15% !important;
    }

    .ht-xs-20 {
        height: 20px;
    }

    .ht-xs-20p {
        height: 20%;
    }

    .mx-ht-xs-20p {
        max-height: 20%;
    }

    .mn-ht-xs-20p {
        min-height: 20%;
    }

    .ht-xs-20-f {
        height: 20px !important;
    }

    .ht-xs-20p-f {
        height: 20% !important;
    }

    .ht-xs-25 {
        height: 25px;
    }

    .ht-xs-25p {
        height: 25%;
    }

    .mx-ht-xs-25p {
        max-height: 25%;
    }

    .mn-ht-xs-25p {
        min-height: 25%;
    }

    .ht-xs-25-f {
        height: 25px !important;
    }

    .ht-xs-25p-f {
        height: 25% !important;
    }

    .ht-xs-30 {
        height: 30px;
    }

    .ht-xs-30p {
        height: 30%;
    }

    .mx-ht-xs-30p {
        max-height: 30%;
    }

    .mn-ht-xs-30p {
        min-height: 30%;
    }

    .ht-xs-30-f {
        height: 30px !important;
    }

    .ht-xs-30p-f {
        height: 30% !important;
    }

    .ht-xs-35 {
        height: 35px;
    }

    .ht-xs-35p {
        height: 35%;
    }

    .mx-ht-xs-35p {
        max-height: 35%;
    }

    .mn-ht-xs-35p {
        min-height: 35%;
    }

    .ht-xs-35-f {
        height: 35px !important;
    }

    .ht-xs-35p-f {
        height: 35% !important;
    }

    .ht-xs-40 {
        height: 40px;
    }

    .ht-xs-40p {
        height: 40%;
    }

    .mx-ht-xs-40p {
        max-height: 40%;
    }

    .mn-ht-xs-40p {
        min-height: 40%;
    }

    .ht-xs-40-f {
        height: 40px !important;
    }

    .ht-xs-40p-f {
        height: 40% !important;
    }

    .ht-xs-45 {
        height: 45px;
    }

    .ht-xs-45p {
        height: 45%;
    }

    .mx-ht-xs-45p {
        max-height: 45%;
    }

    .mn-ht-xs-45p {
        min-height: 45%;
    }

    .ht-xs-45-f {
        height: 45px !important;
    }

    .ht-xs-45p-f {
        height: 45% !important;
    }

    .ht-xs-50 {
        height: 50px;
    }

    .ht-xs-50p {
        height: 50%;
    }

    .mx-ht-xs-50p {
        max-height: 50%;
    }

    .mn-ht-xs-50p {
        min-height: 50%;
    }

    .ht-xs-50-f {
        height: 50px !important;
    }

    .ht-xs-50p-f {
        height: 50% !important;
    }

    .ht-xs-55 {
        height: 55px;
    }

    .ht-xs-55p {
        height: 55%;
    }

    .mx-ht-xs-55p {
        max-height: 55%;
    }

    .mn-ht-xs-55p {
        min-height: 55%;
    }

    .ht-xs-55-f {
        height: 55px !important;
    }

    .ht-xs-55p-f {
        height: 55% !important;
    }

    .ht-xs-60 {
        height: 60px;
    }

    .ht-xs-60p {
        height: 60%;
    }

    .mx-ht-xs-60p {
        max-height: 60%;
    }

    .mn-ht-xs-60p {
        min-height: 60%;
    }

    .ht-xs-60-f {
        height: 60px !important;
    }

    .ht-xs-60p-f {
        height: 60% !important;
    }

    .ht-xs-65 {
        height: 65px;
    }

    .ht-xs-65p {
        height: 65%;
    }

    .mx-ht-xs-65p {
        max-height: 65%;
    }

    .mn-ht-xs-65p {
        min-height: 65%;
    }

    .ht-xs-65-f {
        height: 65px !important;
    }

    .ht-xs-65p-f {
        height: 65% !important;
    }

    .ht-xs-70 {
        height: 70px;
    }

    .ht-xs-70p {
        height: 70%;
    }

    .mx-ht-xs-70p {
        max-height: 70%;
    }

    .mn-ht-xs-70p {
        min-height: 70%;
    }

    .ht-xs-70-f {
        height: 70px !important;
    }

    .ht-xs-70p-f {
        height: 70% !important;
    }

    .ht-xs-75 {
        height: 75px;
    }

    .ht-xs-75p {
        height: 75%;
    }

    .mx-ht-xs-75p {
        max-height: 75%;
    }

    .mn-ht-xs-75p {
        min-height: 75%;
    }

    .ht-xs-75-f {
        height: 75px !important;
    }

    .ht-xs-75p-f {
        height: 75% !important;
    }

    .ht-xs-80 {
        height: 80px;
    }

    .ht-xs-80p {
        height: 80%;
    }

    .mx-ht-xs-80p {
        max-height: 80%;
    }

    .mn-ht-xs-80p {
        min-height: 80%;
    }

    .ht-xs-80-f {
        height: 80px !important;
    }

    .ht-xs-80p-f {
        height: 80% !important;
    }

    .ht-xs-85 {
        height: 85px;
    }

    .ht-xs-85p {
        height: 85%;
    }

    .mx-ht-xs-85p {
        max-height: 85%;
    }

    .mn-ht-xs-85p {
        min-height: 85%;
    }

    .ht-xs-85-f {
        height: 85px !important;
    }

    .ht-xs-85p-f {
        height: 85% !important;
    }

    .ht-xs-90 {
        height: 90px;
    }

    .ht-xs-90p {
        height: 90%;
    }

    .mx-ht-xs-90p {
        max-height: 90%;
    }

    .mn-ht-xs-90p {
        min-height: 90%;
    }

    .ht-xs-90-f {
        height: 90px !important;
    }

    .ht-xs-90p-f {
        height: 90% !important;
    }

    .ht-xs-95 {
        height: 95px;
    }

    .ht-xs-95p {
        height: 95%;
    }

    .mx-ht-xs-95p {
        max-height: 95%;
    }

    .mn-ht-xs-95p {
        min-height: 95%;
    }

    .ht-xs-95-f {
        height: 95px !important;
    }

    .ht-xs-95p-f {
        height: 95% !important;
    }

    .ht-xs-100 {
        height: 100px;
    }

    .ht-xs-100p {
        height: 100%;
    }

    .mx-ht-xs-100p {
        max-height: 100%;
    }

    .mn-ht-xs-100p {
        min-height: 100%;
    }

    .ht-xs-100-f {
        height: 100px !important;
    }

    .ht-xs-100p-f {
        height: 100% !important;
    }

    .ht-xs-150 {
        height: 150px;
    }

    .ht-xs-150p {
        height: 150%;
    }

    .mx-ht-xs-150p {
        max-height: 150%;
    }

    .mn-ht-xs-150p {
        min-height: 150%;
    }

    .ht-xs-150-f {
        height: 150px !important;
    }

    .ht-xs-150p-f {
        height: 150% !important;
    }

    .ht-xs-200 {
        height: 200px;
    }

    .ht-xs-200p {
        height: 200%;
    }

    .mx-ht-xs-200p {
        max-height: 200%;
    }

    .mn-ht-xs-200p {
        min-height: 200%;
    }

    .ht-xs-200-f {
        height: 200px !important;
    }

    .ht-xs-200p-f {
        height: 200% !important;
    }

    .ht-xs-250 {
        height: 250px;
    }

    .ht-xs-250p {
        height: 250%;
    }

    .mx-ht-xs-250p {
        max-height: 250%;
    }

    .mn-ht-xs-250p {
        min-height: 250%;
    }

    .ht-xs-250-f {
        height: 250px !important;
    }

    .ht-xs-250p-f {
        height: 250% !important;
    }

    .ht-xs-300 {
        height: 300px;
    }

    .ht-xs-300p {
        height: 300%;
    }

    .mx-ht-xs-300p {
        max-height: 300%;
    }

    .mn-ht-xs-300p {
        min-height: 300%;
    }

    .ht-xs-300-f {
        height: 300px !important;
    }

    .ht-xs-300p-f {
        height: 300% !important;
    }

    .ht-xs-350 {
        height: 350px;
    }

    .ht-xs-350p {
        height: 350%;
    }

    .mx-ht-xs-350p {
        max-height: 350%;
    }

    .mn-ht-xs-350p {
        min-height: 350%;
    }

    .ht-xs-350-f {
        height: 350px !important;
    }

    .ht-xs-350p-f {
        height: 350% !important;
    }

    .ht-xs-400 {
        height: 400px;
    }

    .ht-xs-400p {
        height: 400%;
    }

    .mx-ht-xs-400p {
        max-height: 400%;
    }

    .mn-ht-xs-400p {
        min-height: 400%;
    }

    .ht-xs-400-f {
        height: 400px !important;
    }

    .ht-xs-400p-f {
        height: 400% !important;
    }

    .ht-xs-450 {
        height: 450px;
    }

    .ht-xs-450p {
        height: 450%;
    }

    .mx-ht-xs-450p {
        max-height: 450%;
    }

    .mn-ht-xs-450p {
        min-height: 450%;
    }

    .ht-xs-450-f {
        height: 450px !important;
    }

    .ht-xs-450p-f {
        height: 450% !important;
    }

    .ht-xs-500 {
        height: 500px;
    }

    .ht-xs-500p {
        height: 500%;
    }

    .mx-ht-xs-500p {
        max-height: 500%;
    }

    .mn-ht-xs-500p {
        min-height: 500%;
    }

    .ht-xs-500-f {
        height: 500px !important;
    }

    .ht-xs-500p-f {
        height: 500% !important;
    }

    .ht-xs-550 {
        height: 550px;
    }

    .ht-xs-550p {
        height: 550%;
    }

    .mx-ht-xs-550p {
        max-height: 550%;
    }

    .mn-ht-xs-550p {
        min-height: 550%;
    }

    .ht-xs-550-f {
        height: 550px !important;
    }

    .ht-xs-550p-f {
        height: 550% !important;
    }

    .ht-xs-600 {
        height: 600px;
    }

    .ht-xs-600p {
        height: 600%;
    }

    .mx-ht-xs-600p {
        max-height: 600%;
    }

    .mn-ht-xs-600p {
        min-height: 600%;
    }

    .ht-xs-600-f {
        height: 600px !important;
    }

    .ht-xs-600p-f {
        height: 600% !important;
    }

    .ht-xs-650 {
        height: 650px;
    }

    .ht-xs-650p {
        height: 650%;
    }

    .mx-ht-xs-650p {
        max-height: 650%;
    }

    .mn-ht-xs-650p {
        min-height: 650%;
    }

    .ht-xs-650-f {
        height: 650px !important;
    }

    .ht-xs-650p-f {
        height: 650% !important;
    }

    .ht-xs-700 {
        height: 700px;
    }

    .ht-xs-700p {
        height: 700%;
    }

    .mx-ht-xs-700p {
        max-height: 700%;
    }

    .mn-ht-xs-700p {
        min-height: 700%;
    }

    .ht-xs-700-f {
        height: 700px !important;
    }

    .ht-xs-700p-f {
        height: 700% !important;
    }

    .ht-xs-750 {
        height: 750px;
    }

    .ht-xs-750p {
        height: 750%;
    }

    .mx-ht-xs-750p {
        max-height: 750%;
    }

    .mn-ht-xs-750p {
        min-height: 750%;
    }

    .ht-xs-750-f {
        height: 750px !important;
    }

    .ht-xs-750p-f {
        height: 750% !important;
    }

    .ht-xs-800 {
        height: 800px;
    }

    .ht-xs-800p {
        height: 800%;
    }

    .mx-ht-xs-800p {
        max-height: 800%;
    }

    .mn-ht-xs-800p {
        min-height: 800%;
    }

    .ht-xs-800-f {
        height: 800px !important;
    }

    .ht-xs-800p-f {
        height: 800% !important;
    }

    .ht-xs-850 {
        height: 850px;
    }

    .ht-xs-850p {
        height: 850%;
    }

    .mx-ht-xs-850p {
        max-height: 850%;
    }

    .mn-ht-xs-850p {
        min-height: 850%;
    }

    .ht-xs-850-f {
        height: 850px !important;
    }

    .ht-xs-850p-f {
        height: 850% !important;
    }

    .ht-xs-100v {
        height: 100vh;
    }
}

@media (min-width: 576px) {
    .ht-sm-5 {
        height: 5px;
    }

    .ht-sm-5p {
        height: 5%;
    }

    .mx-ht-sm-5p {
        max-height: 5%;
    }

    .mn-ht-sm-5p {
        min-height: 5%;
    }

    .ht-sm-5-f {
        height: 5px !important;
    }

    .ht-sm-5p-f {
        height: 5% !important;
    }

    .ht-sm-10 {
        height: 10px;
    }

    .ht-sm-10p {
        height: 10%;
    }

    .mx-ht-sm-10p {
        max-height: 10%;
    }

    .mn-ht-sm-10p {
        min-height: 10%;
    }

    .ht-sm-10-f {
        height: 10px !important;
    }

    .ht-sm-10p-f {
        height: 10% !important;
    }

    .ht-sm-15 {
        height: 15px;
    }

    .ht-sm-15p {
        height: 15%;
    }

    .mx-ht-sm-15p {
        max-height: 15%;
    }

    .mn-ht-sm-15p {
        min-height: 15%;
    }

    .ht-sm-15-f {
        height: 15px !important;
    }

    .ht-sm-15p-f {
        height: 15% !important;
    }

    .ht-sm-20 {
        height: 20px;
    }

    .ht-sm-20p {
        height: 20%;
    }

    .mx-ht-sm-20p {
        max-height: 20%;
    }

    .mn-ht-sm-20p {
        min-height: 20%;
    }

    .ht-sm-20-f {
        height: 20px !important;
    }

    .ht-sm-20p-f {
        height: 20% !important;
    }

    .ht-sm-25 {
        height: 25px;
    }

    .ht-sm-25p {
        height: 25%;
    }

    .mx-ht-sm-25p {
        max-height: 25%;
    }

    .mn-ht-sm-25p {
        min-height: 25%;
    }

    .ht-sm-25-f {
        height: 25px !important;
    }

    .ht-sm-25p-f {
        height: 25% !important;
    }

    .ht-sm-30 {
        height: 30px;
    }

    .ht-sm-30p {
        height: 30%;
    }

    .mx-ht-sm-30p {
        max-height: 30%;
    }

    .mn-ht-sm-30p {
        min-height: 30%;
    }

    .ht-sm-30-f {
        height: 30px !important;
    }

    .ht-sm-30p-f {
        height: 30% !important;
    }

    .ht-sm-35 {
        height: 35px;
    }

    .ht-sm-35p {
        height: 35%;
    }

    .mx-ht-sm-35p {
        max-height: 35%;
    }

    .mn-ht-sm-35p {
        min-height: 35%;
    }

    .ht-sm-35-f {
        height: 35px !important;
    }

    .ht-sm-35p-f {
        height: 35% !important;
    }

    .ht-sm-40 {
        height: 40px;
    }

    .ht-sm-40p {
        height: 40%;
    }

    .mx-ht-sm-40p {
        max-height: 40%;
    }

    .mn-ht-sm-40p {
        min-height: 40%;
    }

    .ht-sm-40-f {
        height: 40px !important;
    }

    .ht-sm-40p-f {
        height: 40% !important;
    }

    .ht-sm-45 {
        height: 45px;
    }

    .ht-sm-45p {
        height: 45%;
    }

    .mx-ht-sm-45p {
        max-height: 45%;
    }

    .mn-ht-sm-45p {
        min-height: 45%;
    }

    .ht-sm-45-f {
        height: 45px !important;
    }

    .ht-sm-45p-f {
        height: 45% !important;
    }

    .ht-sm-50 {
        height: 50px;
    }

    .ht-sm-50p {
        height: 50%;
    }

    .mx-ht-sm-50p {
        max-height: 50%;
    }

    .mn-ht-sm-50p {
        min-height: 50%;
    }

    .ht-sm-50-f {
        height: 50px !important;
    }

    .ht-sm-50p-f {
        height: 50% !important;
    }

    .ht-sm-55 {
        height: 55px;
    }

    .ht-sm-55p {
        height: 55%;
    }

    .mx-ht-sm-55p {
        max-height: 55%;
    }

    .mn-ht-sm-55p {
        min-height: 55%;
    }

    .ht-sm-55-f {
        height: 55px !important;
    }

    .ht-sm-55p-f {
        height: 55% !important;
    }

    .ht-sm-60 {
        height: 60px;
    }

    .ht-sm-60p {
        height: 60%;
    }

    .mx-ht-sm-60p {
        max-height: 60%;
    }

    .mn-ht-sm-60p {
        min-height: 60%;
    }

    .ht-sm-60-f {
        height: 60px !important;
    }

    .ht-sm-60p-f {
        height: 60% !important;
    }

    .ht-sm-65 {
        height: 65px;
    }

    .ht-sm-65p {
        height: 65%;
    }

    .mx-ht-sm-65p {
        max-height: 65%;
    }

    .mn-ht-sm-65p {
        min-height: 65%;
    }

    .ht-sm-65-f {
        height: 65px !important;
    }

    .ht-sm-65p-f {
        height: 65% !important;
    }

    .ht-sm-70 {
        height: 70px;
    }

    .ht-sm-70p {
        height: 70%;
    }

    .mx-ht-sm-70p {
        max-height: 70%;
    }

    .mn-ht-sm-70p {
        min-height: 70%;
    }

    .ht-sm-70-f {
        height: 70px !important;
    }

    .ht-sm-70p-f {
        height: 70% !important;
    }

    .ht-sm-75 {
        height: 75px;
    }

    .ht-sm-75p {
        height: 75%;
    }

    .mx-ht-sm-75p {
        max-height: 75%;
    }

    .mn-ht-sm-75p {
        min-height: 75%;
    }

    .ht-sm-75-f {
        height: 75px !important;
    }

    .ht-sm-75p-f {
        height: 75% !important;
    }

    .ht-sm-80 {
        height: 80px;
    }

    .ht-sm-80p {
        height: 80%;
    }

    .mx-ht-sm-80p {
        max-height: 80%;
    }

    .mn-ht-sm-80p {
        min-height: 80%;
    }

    .ht-sm-80-f {
        height: 80px !important;
    }

    .ht-sm-80p-f {
        height: 80% !important;
    }

    .ht-sm-85 {
        height: 85px;
    }

    .ht-sm-85p {
        height: 85%;
    }

    .mx-ht-sm-85p {
        max-height: 85%;
    }

    .mn-ht-sm-85p {
        min-height: 85%;
    }

    .ht-sm-85-f {
        height: 85px !important;
    }

    .ht-sm-85p-f {
        height: 85% !important;
    }

    .ht-sm-90 {
        height: 90px;
    }

    .ht-sm-90p {
        height: 90%;
    }

    .mx-ht-sm-90p {
        max-height: 90%;
    }

    .mn-ht-sm-90p {
        min-height: 90%;
    }

    .ht-sm-90-f {
        height: 90px !important;
    }

    .ht-sm-90p-f {
        height: 90% !important;
    }

    .ht-sm-95 {
        height: 95px;
    }

    .ht-sm-95p {
        height: 95%;
    }

    .mx-ht-sm-95p {
        max-height: 95%;
    }

    .mn-ht-sm-95p {
        min-height: 95%;
    }

    .ht-sm-95-f {
        height: 95px !important;
    }

    .ht-sm-95p-f {
        height: 95% !important;
    }

    .ht-sm-100 {
        height: 100px;
    }

    .ht-sm-100p {
        height: 100%;
    }

    .mx-ht-sm-100p {
        max-height: 100%;
    }

    .mn-ht-sm-100p {
        min-height: 100%;
    }

    .ht-sm-100-f {
        height: 100px !important;
    }

    .ht-sm-100p-f {
        height: 100% !important;
    }

    .ht-sm-150 {
        height: 150px;
    }

    .ht-sm-150p {
        height: 150%;
    }

    .mx-ht-sm-150p {
        max-height: 150%;
    }

    .mn-ht-sm-150p {
        min-height: 150%;
    }

    .ht-sm-150-f {
        height: 150px !important;
    }

    .ht-sm-150p-f {
        height: 150% !important;
    }

    .ht-sm-200 {
        height: 200px;
    }

    .ht-sm-200p {
        height: 200%;
    }

    .mx-ht-sm-200p {
        max-height: 200%;
    }

    .mn-ht-sm-200p {
        min-height: 200%;
    }

    .ht-sm-200-f {
        height: 200px !important;
    }

    .ht-sm-200p-f {
        height: 200% !important;
    }

    .ht-sm-250 {
        height: 250px;
    }

    .ht-sm-250p {
        height: 250%;
    }

    .mx-ht-sm-250p {
        max-height: 250%;
    }

    .mn-ht-sm-250p {
        min-height: 250%;
    }

    .ht-sm-250-f {
        height: 250px !important;
    }

    .ht-sm-250p-f {
        height: 250% !important;
    }

    .ht-sm-300 {
        height: 300px;
    }

    .ht-sm-300p {
        height: 300%;
    }

    .mx-ht-sm-300p {
        max-height: 300%;
    }

    .mn-ht-sm-300p {
        min-height: 300%;
    }

    .ht-sm-300-f {
        height: 300px !important;
    }

    .ht-sm-300p-f {
        height: 300% !important;
    }

    .ht-sm-350 {
        height: 350px;
    }

    .ht-sm-350p {
        height: 350%;
    }

    .mx-ht-sm-350p {
        max-height: 350%;
    }

    .mn-ht-sm-350p {
        min-height: 350%;
    }

    .ht-sm-350-f {
        height: 350px !important;
    }

    .ht-sm-350p-f {
        height: 350% !important;
    }

    .ht-sm-400 {
        height: 400px;
    }

    .ht-sm-400p {
        height: 400%;
    }

    .mx-ht-sm-400p {
        max-height: 400%;
    }

    .mn-ht-sm-400p {
        min-height: 400%;
    }

    .ht-sm-400-f {
        height: 400px !important;
    }

    .ht-sm-400p-f {
        height: 400% !important;
    }

    .ht-sm-450 {
        height: 450px;
    }

    .ht-sm-450p {
        height: 450%;
    }

    .mx-ht-sm-450p {
        max-height: 450%;
    }

    .mn-ht-sm-450p {
        min-height: 450%;
    }

    .ht-sm-450-f {
        height: 450px !important;
    }

    .ht-sm-450p-f {
        height: 450% !important;
    }

    .ht-sm-500 {
        height: 500px;
    }

    .ht-sm-500p {
        height: 500%;
    }

    .mx-ht-sm-500p {
        max-height: 500%;
    }

    .mn-ht-sm-500p {
        min-height: 500%;
    }

    .ht-sm-500-f {
        height: 500px !important;
    }

    .ht-sm-500p-f {
        height: 500% !important;
    }

    .ht-sm-550 {
        height: 550px;
    }

    .ht-sm-550p {
        height: 550%;
    }

    .mx-ht-sm-550p {
        max-height: 550%;
    }

    .mn-ht-sm-550p {
        min-height: 550%;
    }

    .ht-sm-550-f {
        height: 550px !important;
    }

    .ht-sm-550p-f {
        height: 550% !important;
    }

    .ht-sm-600 {
        height: 600px;
    }

    .ht-sm-600p {
        height: 600%;
    }

    .mx-ht-sm-600p {
        max-height: 600%;
    }

    .mn-ht-sm-600p {
        min-height: 600%;
    }

    .ht-sm-600-f {
        height: 600px !important;
    }

    .ht-sm-600p-f {
        height: 600% !important;
    }

    .ht-sm-650 {
        height: 650px;
    }

    .ht-sm-650p {
        height: 650%;
    }

    .mx-ht-sm-650p {
        max-height: 650%;
    }

    .mn-ht-sm-650p {
        min-height: 650%;
    }

    .ht-sm-650-f {
        height: 650px !important;
    }

    .ht-sm-650p-f {
        height: 650% !important;
    }

    .ht-sm-700 {
        height: 700px;
    }

    .ht-sm-700p {
        height: 700%;
    }

    .mx-ht-sm-700p {
        max-height: 700%;
    }

    .mn-ht-sm-700p {
        min-height: 700%;
    }

    .ht-sm-700-f {
        height: 700px !important;
    }

    .ht-sm-700p-f {
        height: 700% !important;
    }

    .ht-sm-750 {
        height: 750px;
    }

    .ht-sm-750p {
        height: 750%;
    }

    .mx-ht-sm-750p {
        max-height: 750%;
    }

    .mn-ht-sm-750p {
        min-height: 750%;
    }

    .ht-sm-750-f {
        height: 750px !important;
    }

    .ht-sm-750p-f {
        height: 750% !important;
    }

    .ht-sm-800 {
        height: 800px;
    }

    .ht-sm-800p {
        height: 800%;
    }

    .mx-ht-sm-800p {
        max-height: 800%;
    }

    .mn-ht-sm-800p {
        min-height: 800%;
    }

    .ht-sm-800-f {
        height: 800px !important;
    }

    .ht-sm-800p-f {
        height: 800% !important;
    }

    .ht-sm-850 {
        height: 850px;
    }

    .ht-sm-850p {
        height: 850%;
    }

    .mx-ht-sm-850p {
        max-height: 850%;
    }

    .mn-ht-sm-850p {
        min-height: 850%;
    }

    .ht-sm-850-f {
        height: 850px !important;
    }

    .ht-sm-850p-f {
        height: 850% !important;
    }

    .ht-sm-100v {
        height: 100vh;
    }
}

@media (min-width: 768px) {
    .ht-md-5 {
        height: 5px;
    }

    .ht-md-5p {
        height: 5%;
    }

    .mx-ht-md-5p {
        max-height: 5%;
    }

    .mn-ht-md-5p {
        min-height: 5%;
    }

    .ht-md-5-f {
        height: 5px !important;
    }

    .ht-md-5p-f {
        height: 5% !important;
    }

    .ht-md-10 {
        height: 10px;
    }

    .ht-md-10p {
        height: 10%;
    }

    .mx-ht-md-10p {
        max-height: 10%;
    }

    .mn-ht-md-10p {
        min-height: 10%;
    }

    .ht-md-10-f {
        height: 10px !important;
    }

    .ht-md-10p-f {
        height: 10% !important;
    }

    .ht-md-15 {
        height: 15px;
    }

    .ht-md-15p {
        height: 15%;
    }

    .mx-ht-md-15p {
        max-height: 15%;
    }

    .mn-ht-md-15p {
        min-height: 15%;
    }

    .ht-md-15-f {
        height: 15px !important;
    }

    .ht-md-15p-f {
        height: 15% !important;
    }

    .ht-md-20 {
        height: 20px;
    }

    .ht-md-20p {
        height: 20%;
    }

    .mx-ht-md-20p {
        max-height: 20%;
    }

    .mn-ht-md-20p {
        min-height: 20%;
    }

    .ht-md-20-f {
        height: 20px !important;
    }

    .ht-md-20p-f {
        height: 20% !important;
    }

    .ht-md-25 {
        height: 25px;
    }

    .ht-md-25p {
        height: 25%;
    }

    .mx-ht-md-25p {
        max-height: 25%;
    }

    .mn-ht-md-25p {
        min-height: 25%;
    }

    .ht-md-25-f {
        height: 25px !important;
    }

    .ht-md-25p-f {
        height: 25% !important;
    }

    .ht-md-30 {
        height: 30px;
    }

    .ht-md-30p {
        height: 30%;
    }

    .mx-ht-md-30p {
        max-height: 30%;
    }

    .mn-ht-md-30p {
        min-height: 30%;
    }

    .ht-md-30-f {
        height: 30px !important;
    }

    .ht-md-30p-f {
        height: 30% !important;
    }

    .ht-md-35 {
        height: 35px;
    }

    .ht-md-35p {
        height: 35%;
    }

    .mx-ht-md-35p {
        max-height: 35%;
    }

    .mn-ht-md-35p {
        min-height: 35%;
    }

    .ht-md-35-f {
        height: 35px !important;
    }

    .ht-md-35p-f {
        height: 35% !important;
    }

    .ht-md-40 {
        height: 40px;
    }

    .ht-md-40p {
        height: 40%;
    }

    .mx-ht-md-40p {
        max-height: 40%;
    }

    .mn-ht-md-40p {
        min-height: 40%;
    }

    .ht-md-40-f {
        height: 40px !important;
    }

    .ht-md-40p-f {
        height: 40% !important;
    }

    .ht-md-45 {
        height: 45px;
    }

    .ht-md-45p {
        height: 45%;
    }

    .mx-ht-md-45p {
        max-height: 45%;
    }

    .mn-ht-md-45p {
        min-height: 45%;
    }

    .ht-md-45-f {
        height: 45px !important;
    }

    .ht-md-45p-f {
        height: 45% !important;
    }

    .ht-md-50 {
        height: 50px;
    }

    .ht-md-50p {
        height: 50%;
    }

    .mx-ht-md-50p {
        max-height: 50%;
    }

    .mn-ht-md-50p {
        min-height: 50%;
    }

    .ht-md-50-f {
        height: 50px !important;
    }

    .ht-md-50p-f {
        height: 50% !important;
    }

    .ht-md-55 {
        height: 55px;
    }

    .ht-md-55p {
        height: 55%;
    }

    .mx-ht-md-55p {
        max-height: 55%;
    }

    .mn-ht-md-55p {
        min-height: 55%;
    }

    .ht-md-55-f {
        height: 55px !important;
    }

    .ht-md-55p-f {
        height: 55% !important;
    }

    .ht-md-60 {
        height: 60px;
    }

    .ht-md-60p {
        height: 60%;
    }

    .mx-ht-md-60p {
        max-height: 60%;
    }

    .mn-ht-md-60p {
        min-height: 60%;
    }

    .ht-md-60-f {
        height: 60px !important;
    }

    .ht-md-60p-f {
        height: 60% !important;
    }

    .ht-md-65 {
        height: 65px;
    }

    .ht-md-65p {
        height: 65%;
    }

    .mx-ht-md-65p {
        max-height: 65%;
    }

    .mn-ht-md-65p {
        min-height: 65%;
    }

    .ht-md-65-f {
        height: 65px !important;
    }

    .ht-md-65p-f {
        height: 65% !important;
    }

    .ht-md-70 {
        height: 70px;
    }

    .ht-md-70p {
        height: 70%;
    }

    .mx-ht-md-70p {
        max-height: 70%;
    }

    .mn-ht-md-70p {
        min-height: 70%;
    }

    .ht-md-70-f {
        height: 70px !important;
    }

    .ht-md-70p-f {
        height: 70% !important;
    }

    .ht-md-75 {
        height: 75px;
    }

    .ht-md-75p {
        height: 75%;
    }

    .mx-ht-md-75p {
        max-height: 75%;
    }

    .mn-ht-md-75p {
        min-height: 75%;
    }

    .ht-md-75-f {
        height: 75px !important;
    }

    .ht-md-75p-f {
        height: 75% !important;
    }

    .ht-md-80 {
        height: 80px;
    }

    .ht-md-80p {
        height: 80%;
    }

    .mx-ht-md-80p {
        max-height: 80%;
    }

    .mn-ht-md-80p {
        min-height: 80%;
    }

    .ht-md-80-f {
        height: 80px !important;
    }

    .ht-md-80p-f {
        height: 80% !important;
    }

    .ht-md-85 {
        height: 85px;
    }

    .ht-md-85p {
        height: 85%;
    }

    .mx-ht-md-85p {
        max-height: 85%;
    }

    .mn-ht-md-85p {
        min-height: 85%;
    }

    .ht-md-85-f {
        height: 85px !important;
    }

    .ht-md-85p-f {
        height: 85% !important;
    }

    .ht-md-90 {
        height: 90px;
    }

    .ht-md-90p {
        height: 90%;
    }

    .mx-ht-md-90p {
        max-height: 90%;
    }

    .mn-ht-md-90p {
        min-height: 90%;
    }

    .ht-md-90-f {
        height: 90px !important;
    }

    .ht-md-90p-f {
        height: 90% !important;
    }

    .ht-md-95 {
        height: 95px;
    }

    .ht-md-95p {
        height: 95%;
    }

    .mx-ht-md-95p {
        max-height: 95%;
    }

    .mn-ht-md-95p {
        min-height: 95%;
    }

    .ht-md-95-f {
        height: 95px !important;
    }

    .ht-md-95p-f {
        height: 95% !important;
    }

    .ht-md-100 {
        height: 100px;
    }

    .ht-md-100p {
        height: 100%;
    }

    .mx-ht-md-100p {
        max-height: 100%;
    }

    .mn-ht-md-100p {
        min-height: 100%;
    }

    .ht-md-100-f {
        height: 100px !important;
    }

    .ht-md-100p-f {
        height: 100% !important;
    }

    .ht-md-150 {
        height: 150px;
    }

    .ht-md-150p {
        height: 150%;
    }

    .mx-ht-md-150p {
        max-height: 150%;
    }

    .mn-ht-md-150p {
        min-height: 150%;
    }

    .ht-md-150-f {
        height: 150px !important;
    }

    .ht-md-150p-f {
        height: 150% !important;
    }

    .ht-md-200 {
        height: 200px;
    }

    .ht-md-200p {
        height: 200%;
    }

    .mx-ht-md-200p {
        max-height: 200%;
    }

    .mn-ht-md-200p {
        min-height: 200%;
    }

    .ht-md-200-f {
        height: 200px !important;
    }

    .ht-md-200p-f {
        height: 200% !important;
    }

    .ht-md-250 {
        height: 250px;
    }

    .ht-md-250p {
        height: 250%;
    }

    .mx-ht-md-250p {
        max-height: 250%;
    }

    .mn-ht-md-250p {
        min-height: 250%;
    }

    .ht-md-250-f {
        height: 250px !important;
    }

    .ht-md-250p-f {
        height: 250% !important;
    }

    .ht-md-300 {
        height: 300px;
    }

    .ht-md-300p {
        height: 300%;
    }

    .mx-ht-md-300p {
        max-height: 300%;
    }

    .mn-ht-md-300p {
        min-height: 300%;
    }

    .ht-md-300-f {
        height: 300px !important;
    }

    .ht-md-300p-f {
        height: 300% !important;
    }

    .ht-md-350 {
        height: 350px;
    }

    .ht-md-350p {
        height: 350%;
    }

    .mx-ht-md-350p {
        max-height: 350%;
    }

    .mn-ht-md-350p {
        min-height: 350%;
    }

    .ht-md-350-f {
        height: 350px !important;
    }

    .ht-md-350p-f {
        height: 350% !important;
    }

    .ht-md-400 {
        height: 400px;
    }

    .ht-md-400p {
        height: 400%;
    }

    .mx-ht-md-400p {
        max-height: 400%;
    }

    .mn-ht-md-400p {
        min-height: 400%;
    }

    .ht-md-400-f {
        height: 400px !important;
    }

    .ht-md-400p-f {
        height: 400% !important;
    }

    .ht-md-450 {
        height: 450px;
    }

    .ht-md-450p {
        height: 450%;
    }

    .mx-ht-md-450p {
        max-height: 450%;
    }

    .mn-ht-md-450p {
        min-height: 450%;
    }

    .ht-md-450-f {
        height: 450px !important;
    }

    .ht-md-450p-f {
        height: 450% !important;
    }

    .ht-md-500 {
        height: 500px;
    }

    .ht-md-500p {
        height: 500%;
    }

    .mx-ht-md-500p {
        max-height: 500%;
    }

    .mn-ht-md-500p {
        min-height: 500%;
    }

    .ht-md-500-f {
        height: 500px !important;
    }

    .ht-md-500p-f {
        height: 500% !important;
    }

    .ht-md-550 {
        height: 550px;
    }

    .ht-md-550p {
        height: 550%;
    }

    .mx-ht-md-550p {
        max-height: 550%;
    }

    .mn-ht-md-550p {
        min-height: 550%;
    }

    .ht-md-550-f {
        height: 550px !important;
    }

    .ht-md-550p-f {
        height: 550% !important;
    }

    .ht-md-600 {
        height: 600px;
    }

    .ht-md-600p {
        height: 600%;
    }

    .mx-ht-md-600p {
        max-height: 600%;
    }

    .mn-ht-md-600p {
        min-height: 600%;
    }

    .ht-md-600-f {
        height: 600px !important;
    }

    .ht-md-600p-f {
        height: 600% !important;
    }

    .ht-md-650 {
        height: 650px;
    }

    .ht-md-650p {
        height: 650%;
    }

    .mx-ht-md-650p {
        max-height: 650%;
    }

    .mn-ht-md-650p {
        min-height: 650%;
    }

    .ht-md-650-f {
        height: 650px !important;
    }

    .ht-md-650p-f {
        height: 650% !important;
    }

    .ht-md-700 {
        height: 700px;
    }

    .ht-md-700p {
        height: 700%;
    }

    .mx-ht-md-700p {
        max-height: 700%;
    }

    .mn-ht-md-700p {
        min-height: 700%;
    }

    .ht-md-700-f {
        height: 700px !important;
    }

    .ht-md-700p-f {
        height: 700% !important;
    }

    .ht-md-750 {
        height: 750px;
    }

    .ht-md-750p {
        height: 750%;
    }

    .mx-ht-md-750p {
        max-height: 750%;
    }

    .mn-ht-md-750p {
        min-height: 750%;
    }

    .ht-md-750-f {
        height: 750px !important;
    }

    .ht-md-750p-f {
        height: 750% !important;
    }

    .ht-md-800 {
        height: 800px;
    }

    .ht-md-800p {
        height: 800%;
    }

    .mx-ht-md-800p {
        max-height: 800%;
    }

    .mn-ht-md-800p {
        min-height: 800%;
    }

    .ht-md-800-f {
        height: 800px !important;
    }

    .ht-md-800p-f {
        height: 800% !important;
    }

    .ht-md-850 {
        height: 850px;
    }

    .ht-md-850p {
        height: 850%;
    }

    .mx-ht-md-850p {
        max-height: 850%;
    }

    .mn-ht-md-850p {
        min-height: 850%;
    }

    .ht-md-850-f {
        height: 850px !important;
    }

    .ht-md-850p-f {
        height: 850% !important;
    }

    .ht-md-100v {
        height: 100vh;
    }
}

@media (min-width: 992px) {
    .ht-lg-5 {
        height: 5px;
    }

    .ht-lg-5p {
        height: 5%;
    }

    .mx-ht-lg-5p {
        max-height: 5%;
    }

    .mn-ht-lg-5p {
        min-height: 5%;
    }

    .ht-lg-5-f {
        height: 5px !important;
    }

    .ht-lg-5p-f {
        height: 5% !important;
    }

    .ht-lg-10 {
        height: 10px;
    }

    .ht-lg-10p {
        height: 10%;
    }

    .mx-ht-lg-10p {
        max-height: 10%;
    }

    .mn-ht-lg-10p {
        min-height: 10%;
    }

    .ht-lg-10-f {
        height: 10px !important;
    }

    .ht-lg-10p-f {
        height: 10% !important;
    }

    .ht-lg-15 {
        height: 15px;
    }

    .ht-lg-15p {
        height: 15%;
    }

    .mx-ht-lg-15p {
        max-height: 15%;
    }

    .mn-ht-lg-15p {
        min-height: 15%;
    }

    .ht-lg-15-f {
        height: 15px !important;
    }

    .ht-lg-15p-f {
        height: 15% !important;
    }

    .ht-lg-20 {
        height: 20px;
    }

    .ht-lg-20p {
        height: 20%;
    }

    .mx-ht-lg-20p {
        max-height: 20%;
    }

    .mn-ht-lg-20p {
        min-height: 20%;
    }

    .ht-lg-20-f {
        height: 20px !important;
    }

    .ht-lg-20p-f {
        height: 20% !important;
    }

    .ht-lg-25 {
        height: 25px;
    }

    .ht-lg-25p {
        height: 25%;
    }

    .mx-ht-lg-25p {
        max-height: 25%;
    }

    .mn-ht-lg-25p {
        min-height: 25%;
    }

    .ht-lg-25-f {
        height: 25px !important;
    }

    .ht-lg-25p-f {
        height: 25% !important;
    }

    .ht-lg-30 {
        height: 30px;
    }

    .ht-lg-30p {
        height: 30%;
    }

    .mx-ht-lg-30p {
        max-height: 30%;
    }

    .mn-ht-lg-30p {
        min-height: 30%;
    }

    .ht-lg-30-f {
        height: 30px !important;
    }

    .ht-lg-30p-f {
        height: 30% !important;
    }

    .ht-lg-35 {
        height: 35px;
    }

    .ht-lg-35p {
        height: 35%;
    }

    .mx-ht-lg-35p {
        max-height: 35%;
    }

    .mn-ht-lg-35p {
        min-height: 35%;
    }

    .ht-lg-35-f {
        height: 35px !important;
    }

    .ht-lg-35p-f {
        height: 35% !important;
    }

    .ht-lg-40 {
        height: 40px;
    }

    .ht-lg-40p {
        height: 40%;
    }

    .mx-ht-lg-40p {
        max-height: 40%;
    }

    .mn-ht-lg-40p {
        min-height: 40%;
    }

    .ht-lg-40-f {
        height: 40px !important;
    }

    .ht-lg-40p-f {
        height: 40% !important;
    }

    .ht-lg-45 {
        height: 45px;
    }

    .ht-lg-45p {
        height: 45%;
    }

    .mx-ht-lg-45p {
        max-height: 45%;
    }

    .mn-ht-lg-45p {
        min-height: 45%;
    }

    .ht-lg-45-f {
        height: 45px !important;
    }

    .ht-lg-45p-f {
        height: 45% !important;
    }

    .ht-lg-50 {
        height: 50px;
    }

    .ht-lg-50p {
        height: 50%;
    }

    .mx-ht-lg-50p {
        max-height: 50%;
    }

    .mn-ht-lg-50p {
        min-height: 50%;
    }

    .ht-lg-50-f {
        height: 50px !important;
    }

    .ht-lg-50p-f {
        height: 50% !important;
    }

    .ht-lg-55 {
        height: 55px;
    }

    .ht-lg-55p {
        height: 55%;
    }

    .mx-ht-lg-55p {
        max-height: 55%;
    }

    .mn-ht-lg-55p {
        min-height: 55%;
    }

    .ht-lg-55-f {
        height: 55px !important;
    }

    .ht-lg-55p-f {
        height: 55% !important;
    }

    .ht-lg-60 {
        height: 60px;
    }

    .ht-lg-60p {
        height: 60%;
    }

    .mx-ht-lg-60p {
        max-height: 60%;
    }

    .mn-ht-lg-60p {
        min-height: 60%;
    }

    .ht-lg-60-f {
        height: 60px !important;
    }

    .ht-lg-60p-f {
        height: 60% !important;
    }

    .ht-lg-65 {
        height: 65px;
    }

    .ht-lg-65p {
        height: 65%;
    }

    .mx-ht-lg-65p {
        max-height: 65%;
    }

    .mn-ht-lg-65p {
        min-height: 65%;
    }

    .ht-lg-65-f {
        height: 65px !important;
    }

    .ht-lg-65p-f {
        height: 65% !important;
    }

    .ht-lg-70 {
        height: 70px;
    }

    .ht-lg-70p {
        height: 70%;
    }

    .mx-ht-lg-70p {
        max-height: 70%;
    }

    .mn-ht-lg-70p {
        min-height: 70%;
    }

    .ht-lg-70-f {
        height: 70px !important;
    }

    .ht-lg-70p-f {
        height: 70% !important;
    }

    .ht-lg-75 {
        height: 75px;
    }

    .ht-lg-75p {
        height: 75%;
    }

    .mx-ht-lg-75p {
        max-height: 75%;
    }

    .mn-ht-lg-75p {
        min-height: 75%;
    }

    .ht-lg-75-f {
        height: 75px !important;
    }

    .ht-lg-75p-f {
        height: 75% !important;
    }

    .ht-lg-80 {
        height: 80px;
    }

    .ht-lg-80p {
        height: 80%;
    }

    .mx-ht-lg-80p {
        max-height: 80%;
    }

    .mn-ht-lg-80p {
        min-height: 80%;
    }

    .ht-lg-80-f {
        height: 80px !important;
    }

    .ht-lg-80p-f {
        height: 80% !important;
    }

    .ht-lg-85 {
        height: 85px;
    }

    .ht-lg-85p {
        height: 85%;
    }

    .mx-ht-lg-85p {
        max-height: 85%;
    }

    .mn-ht-lg-85p {
        min-height: 85%;
    }

    .ht-lg-85-f {
        height: 85px !important;
    }

    .ht-lg-85p-f {
        height: 85% !important;
    }

    .ht-lg-90 {
        height: 90px;
    }

    .ht-lg-90p {
        height: 90%;
    }

    .mx-ht-lg-90p {
        max-height: 90%;
    }

    .mn-ht-lg-90p {
        min-height: 90%;
    }

    .ht-lg-90-f {
        height: 90px !important;
    }

    .ht-lg-90p-f {
        height: 90% !important;
    }

    .ht-lg-95 {
        height: 95px;
    }

    .ht-lg-95p {
        height: 95%;
    }

    .mx-ht-lg-95p {
        max-height: 95%;
    }

    .mn-ht-lg-95p {
        min-height: 95%;
    }

    .ht-lg-95-f {
        height: 95px !important;
    }

    .ht-lg-95p-f {
        height: 95% !important;
    }

    .ht-lg-100 {
        height: 100px;
    }

    .ht-lg-100p {
        height: 100%;
    }

    .mx-ht-lg-100p {
        max-height: 100%;
    }

    .mn-ht-lg-100p {
        min-height: 100%;
    }

    .ht-lg-100-f {
        height: 100px !important;
    }

    .ht-lg-100p-f {
        height: 100% !important;
    }

    .ht-lg-150 {
        height: 150px;
    }

    .ht-lg-150p {
        height: 150%;
    }

    .mx-ht-lg-150p {
        max-height: 150%;
    }

    .mn-ht-lg-150p {
        min-height: 150%;
    }

    .ht-lg-150-f {
        height: 150px !important;
    }

    .ht-lg-150p-f {
        height: 150% !important;
    }

    .ht-lg-200 {
        height: 200px;
    }

    .ht-lg-200p {
        height: 200%;
    }

    .mx-ht-lg-200p {
        max-height: 200%;
    }

    .mn-ht-lg-200p {
        min-height: 200%;
    }

    .ht-lg-200-f {
        height: 200px !important;
    }

    .ht-lg-200p-f {
        height: 200% !important;
    }

    .ht-lg-250 {
        height: 250px;
    }

    .ht-lg-250p {
        height: 250%;
    }

    .mx-ht-lg-250p {
        max-height: 250%;
    }

    .mn-ht-lg-250p {
        min-height: 250%;
    }

    .ht-lg-250-f {
        height: 250px !important;
    }

    .ht-lg-250p-f {
        height: 250% !important;
    }

    .ht-lg-300 {
        height: 300px;
    }

    .ht-lg-300p {
        height: 300%;
    }

    .mx-ht-lg-300p {
        max-height: 300%;
    }

    .mn-ht-lg-300p {
        min-height: 300%;
    }

    .ht-lg-300-f {
        height: 300px !important;
    }

    .ht-lg-300p-f {
        height: 300% !important;
    }

    .ht-lg-350 {
        height: 350px;
    }

    .ht-lg-350p {
        height: 350%;
    }

    .mx-ht-lg-350p {
        max-height: 350%;
    }

    .mn-ht-lg-350p {
        min-height: 350%;
    }

    .ht-lg-350-f {
        height: 350px !important;
    }

    .ht-lg-350p-f {
        height: 350% !important;
    }

    .ht-lg-400 {
        height: 400px;
    }

    .ht-lg-400p {
        height: 400%;
    }

    .mx-ht-lg-400p {
        max-height: 400%;
    }

    .mn-ht-lg-400p {
        min-height: 400%;
    }

    .ht-lg-400-f {
        height: 400px !important;
    }

    .ht-lg-400p-f {
        height: 400% !important;
    }

    .ht-lg-450 {
        height: 450px;
    }

    .ht-lg-450p {
        height: 450%;
    }

    .mx-ht-lg-450p {
        max-height: 450%;
    }

    .mn-ht-lg-450p {
        min-height: 450%;
    }

    .ht-lg-450-f {
        height: 450px !important;
    }

    .ht-lg-450p-f {
        height: 450% !important;
    }

    .ht-lg-500 {
        height: 500px;
    }

    .ht-lg-500p {
        height: 500%;
    }

    .mx-ht-lg-500p {
        max-height: 500%;
    }

    .mn-ht-lg-500p {
        min-height: 500%;
    }

    .ht-lg-500-f {
        height: 500px !important;
    }

    .ht-lg-500p-f {
        height: 500% !important;
    }

    .ht-lg-550 {
        height: 550px;
    }

    .ht-lg-550p {
        height: 550%;
    }

    .mx-ht-lg-550p {
        max-height: 550%;
    }

    .mn-ht-lg-550p {
        min-height: 550%;
    }

    .ht-lg-550-f {
        height: 550px !important;
    }

    .ht-lg-550p-f {
        height: 550% !important;
    }

    .ht-lg-600 {
        height: 600px;
    }

    .ht-lg-600p {
        height: 600%;
    }

    .mx-ht-lg-600p {
        max-height: 600%;
    }

    .mn-ht-lg-600p {
        min-height: 600%;
    }

    .ht-lg-600-f {
        height: 600px !important;
    }

    .ht-lg-600p-f {
        height: 600% !important;
    }

    .ht-lg-650 {
        height: 650px;
    }

    .ht-lg-650p {
        height: 650%;
    }

    .mx-ht-lg-650p {
        max-height: 650%;
    }

    .mn-ht-lg-650p {
        min-height: 650%;
    }

    .ht-lg-650-f {
        height: 650px !important;
    }

    .ht-lg-650p-f {
        height: 650% !important;
    }

    .ht-lg-700 {
        height: 700px;
    }

    .ht-lg-700p {
        height: 700%;
    }

    .mx-ht-lg-700p {
        max-height: 700%;
    }

    .mn-ht-lg-700p {
        min-height: 700%;
    }

    .ht-lg-700-f {
        height: 700px !important;
    }

    .ht-lg-700p-f {
        height: 700% !important;
    }

    .ht-lg-750 {
        height: 750px;
    }

    .ht-lg-750p {
        height: 750%;
    }

    .mx-ht-lg-750p {
        max-height: 750%;
    }

    .mn-ht-lg-750p {
        min-height: 750%;
    }

    .ht-lg-750-f {
        height: 750px !important;
    }

    .ht-lg-750p-f {
        height: 750% !important;
    }

    .ht-lg-800 {
        height: 800px;
    }

    .ht-lg-800p {
        height: 800%;
    }

    .mx-ht-lg-800p {
        max-height: 800%;
    }

    .mn-ht-lg-800p {
        min-height: 800%;
    }

    .ht-lg-800-f {
        height: 800px !important;
    }

    .ht-lg-800p-f {
        height: 800% !important;
    }

    .ht-lg-850 {
        height: 850px;
    }

    .ht-lg-850p {
        height: 850%;
    }

    .mx-ht-lg-850p {
        max-height: 850%;
    }

    .mn-ht-lg-850p {
        min-height: 850%;
    }

    .ht-lg-850-f {
        height: 850px !important;
    }

    .ht-lg-850p-f {
        height: 850% !important;
    }

    .ht-lg-100v {
        height: 100vh;
    }
}

@media (min-width: 1200px) {
    .ht-xl-5 {
        height: 5px;
    }

    .ht-xl-5p {
        height: 5%;
    }

    .mx-ht-xl-5p {
        max-height: 5%;
    }

    .mn-ht-xl-5p {
        min-height: 5%;
    }

    .ht-xl-5-f {
        height: 5px !important;
    }

    .ht-xl-5p-f {
        height: 5% !important;
    }

    .ht-xl-10 {
        height: 10px;
    }

    .ht-xl-10p {
        height: 10%;
    }

    .mx-ht-xl-10p {
        max-height: 10%;
    }

    .mn-ht-xl-10p {
        min-height: 10%;
    }

    .ht-xl-10-f {
        height: 10px !important;
    }

    .ht-xl-10p-f {
        height: 10% !important;
    }

    .ht-xl-15 {
        height: 15px;
    }

    .ht-xl-15p {
        height: 15%;
    }

    .mx-ht-xl-15p {
        max-height: 15%;
    }

    .mn-ht-xl-15p {
        min-height: 15%;
    }

    .ht-xl-15-f {
        height: 15px !important;
    }

    .ht-xl-15p-f {
        height: 15% !important;
    }

    .ht-xl-20 {
        height: 20px;
    }

    .ht-xl-20p {
        height: 20%;
    }

    .mx-ht-xl-20p {
        max-height: 20%;
    }

    .mn-ht-xl-20p {
        min-height: 20%;
    }

    .ht-xl-20-f {
        height: 20px !important;
    }

    .ht-xl-20p-f {
        height: 20% !important;
    }

    .ht-xl-25 {
        height: 25px;
    }

    .ht-xl-25p {
        height: 25%;
    }

    .mx-ht-xl-25p {
        max-height: 25%;
    }

    .mn-ht-xl-25p {
        min-height: 25%;
    }

    .ht-xl-25-f {
        height: 25px !important;
    }

    .ht-xl-25p-f {
        height: 25% !important;
    }

    .ht-xl-30 {
        height: 30px;
    }

    .ht-xl-30p {
        height: 30%;
    }

    .mx-ht-xl-30p {
        max-height: 30%;
    }

    .mn-ht-xl-30p {
        min-height: 30%;
    }

    .ht-xl-30-f {
        height: 30px !important;
    }

    .ht-xl-30p-f {
        height: 30% !important;
    }

    .ht-xl-35 {
        height: 35px;
    }

    .ht-xl-35p {
        height: 35%;
    }

    .mx-ht-xl-35p {
        max-height: 35%;
    }

    .mn-ht-xl-35p {
        min-height: 35%;
    }

    .ht-xl-35-f {
        height: 35px !important;
    }

    .ht-xl-35p-f {
        height: 35% !important;
    }

    .ht-xl-40 {
        height: 40px;
    }

    .ht-xl-40p {
        height: 40%;
    }

    .mx-ht-xl-40p {
        max-height: 40%;
    }

    .mn-ht-xl-40p {
        min-height: 40%;
    }

    .ht-xl-40-f {
        height: 40px !important;
    }

    .ht-xl-40p-f {
        height: 40% !important;
    }

    .ht-xl-45 {
        height: 45px;
    }

    .ht-xl-45p {
        height: 45%;
    }

    .mx-ht-xl-45p {
        max-height: 45%;
    }

    .mn-ht-xl-45p {
        min-height: 45%;
    }

    .ht-xl-45-f {
        height: 45px !important;
    }

    .ht-xl-45p-f {
        height: 45% !important;
    }

    .ht-xl-50 {
        height: 50px;
    }

    .ht-xl-50p {
        height: 50%;
    }

    .mx-ht-xl-50p {
        max-height: 50%;
    }

    .mn-ht-xl-50p {
        min-height: 50%;
    }

    .ht-xl-50-f {
        height: 50px !important;
    }

    .ht-xl-50p-f {
        height: 50% !important;
    }

    .ht-xl-55 {
        height: 55px;
    }

    .ht-xl-55p {
        height: 55%;
    }

    .mx-ht-xl-55p {
        max-height: 55%;
    }

    .mn-ht-xl-55p {
        min-height: 55%;
    }

    .ht-xl-55-f {
        height: 55px !important;
    }

    .ht-xl-55p-f {
        height: 55% !important;
    }

    .ht-xl-60 {
        height: 60px;
    }

    .ht-xl-60p {
        height: 60%;
    }

    .mx-ht-xl-60p {
        max-height: 60%;
    }

    .mn-ht-xl-60p {
        min-height: 60%;
    }

    .ht-xl-60-f {
        height: 60px !important;
    }

    .ht-xl-60p-f {
        height: 60% !important;
    }

    .ht-xl-65 {
        height: 65px;
    }

    .ht-xl-65p {
        height: 65%;
    }

    .mx-ht-xl-65p {
        max-height: 65%;
    }

    .mn-ht-xl-65p {
        min-height: 65%;
    }

    .ht-xl-65-f {
        height: 65px !important;
    }

    .ht-xl-65p-f {
        height: 65% !important;
    }

    .ht-xl-70 {
        height: 70px;
    }

    .ht-xl-70p {
        height: 70%;
    }

    .mx-ht-xl-70p {
        max-height: 70%;
    }

    .mn-ht-xl-70p {
        min-height: 70%;
    }

    .ht-xl-70-f {
        height: 70px !important;
    }

    .ht-xl-70p-f {
        height: 70% !important;
    }

    .ht-xl-75 {
        height: 75px;
    }

    .ht-xl-75p {
        height: 75%;
    }

    .mx-ht-xl-75p {
        max-height: 75%;
    }

    .mn-ht-xl-75p {
        min-height: 75%;
    }

    .ht-xl-75-f {
        height: 75px !important;
    }

    .ht-xl-75p-f {
        height: 75% !important;
    }

    .ht-xl-80 {
        height: 80px;
    }

    .ht-xl-80p {
        height: 80%;
    }

    .mx-ht-xl-80p {
        max-height: 80%;
    }

    .mn-ht-xl-80p {
        min-height: 80%;
    }

    .ht-xl-80-f {
        height: 80px !important;
    }

    .ht-xl-80p-f {
        height: 80% !important;
    }

    .ht-xl-85 {
        height: 85px;
    }

    .ht-xl-85p {
        height: 85%;
    }

    .mx-ht-xl-85p {
        max-height: 85%;
    }

    .mn-ht-xl-85p {
        min-height: 85%;
    }

    .ht-xl-85-f {
        height: 85px !important;
    }

    .ht-xl-85p-f {
        height: 85% !important;
    }

    .ht-xl-90 {
        height: 90px;
    }

    .ht-xl-90p {
        height: 90%;
    }

    .mx-ht-xl-90p {
        max-height: 90%;
    }

    .mn-ht-xl-90p {
        min-height: 90%;
    }

    .ht-xl-90-f {
        height: 90px !important;
    }

    .ht-xl-90p-f {
        height: 90% !important;
    }

    .ht-xl-95 {
        height: 95px;
    }

    .ht-xl-95p {
        height: 95%;
    }

    .mx-ht-xl-95p {
        max-height: 95%;
    }

    .mn-ht-xl-95p {
        min-height: 95%;
    }

    .ht-xl-95-f {
        height: 95px !important;
    }

    .ht-xl-95p-f {
        height: 95% !important;
    }

    .ht-xl-100 {
        height: 100px;
    }

    .ht-xl-100p {
        height: 100%;
    }

    .mx-ht-xl-100p {
        max-height: 100%;
    }

    .mn-ht-xl-100p {
        min-height: 100%;
    }

    .ht-xl-100-f {
        height: 100px !important;
    }

    .ht-xl-100p-f {
        height: 100% !important;
    }

    .ht-xl-150 {
        height: 150px;
    }

    .ht-xl-150p {
        height: 150%;
    }

    .mx-ht-xl-150p {
        max-height: 150%;
    }

    .mn-ht-xl-150p {
        min-height: 150%;
    }

    .ht-xl-150-f {
        height: 150px !important;
    }

    .ht-xl-150p-f {
        height: 150% !important;
    }

    .ht-xl-200 {
        height: 200px;
    }

    .ht-xl-200p {
        height: 200%;
    }

    .mx-ht-xl-200p {
        max-height: 200%;
    }

    .mn-ht-xl-200p {
        min-height: 200%;
    }

    .ht-xl-200-f {
        height: 200px !important;
    }

    .ht-xl-200p-f {
        height: 200% !important;
    }

    .ht-xl-250 {
        height: 250px;
    }

    .ht-xl-250p {
        height: 250%;
    }

    .mx-ht-xl-250p {
        max-height: 250%;
    }

    .mn-ht-xl-250p {
        min-height: 250%;
    }

    .ht-xl-250-f {
        height: 250px !important;
    }

    .ht-xl-250p-f {
        height: 250% !important;
    }

    .ht-xl-300 {
        height: 300px;
    }

    .ht-xl-300p {
        height: 300%;
    }

    .mx-ht-xl-300p {
        max-height: 300%;
    }

    .mn-ht-xl-300p {
        min-height: 300%;
    }

    .ht-xl-300-f {
        height: 300px !important;
    }

    .ht-xl-300p-f {
        height: 300% !important;
    }

    .ht-xl-350 {
        height: 350px;
    }

    .ht-xl-350p {
        height: 350%;
    }

    .mx-ht-xl-350p {
        max-height: 350%;
    }

    .mn-ht-xl-350p {
        min-height: 350%;
    }

    .ht-xl-350-f {
        height: 350px !important;
    }

    .ht-xl-350p-f {
        height: 350% !important;
    }

    .ht-xl-400 {
        height: 400px;
    }

    .ht-xl-400p {
        height: 400%;
    }

    .mx-ht-xl-400p {
        max-height: 400%;
    }

    .mn-ht-xl-400p {
        min-height: 400%;
    }

    .ht-xl-400-f {
        height: 400px !important;
    }

    .ht-xl-400p-f {
        height: 400% !important;
    }

    .ht-xl-450 {
        height: 450px;
    }

    .ht-xl-450p {
        height: 450%;
    }

    .mx-ht-xl-450p {
        max-height: 450%;
    }

    .mn-ht-xl-450p {
        min-height: 450%;
    }

    .ht-xl-450-f {
        height: 450px !important;
    }

    .ht-xl-450p-f {
        height: 450% !important;
    }

    .ht-xl-500 {
        height: 500px;
    }

    .ht-xl-500p {
        height: 500%;
    }

    .mx-ht-xl-500p {
        max-height: 500%;
    }

    .mn-ht-xl-500p {
        min-height: 500%;
    }

    .ht-xl-500-f {
        height: 500px !important;
    }

    .ht-xl-500p-f {
        height: 500% !important;
    }

    .ht-xl-550 {
        height: 550px;
    }

    .ht-xl-550p {
        height: 550%;
    }

    .mx-ht-xl-550p {
        max-height: 550%;
    }

    .mn-ht-xl-550p {
        min-height: 550%;
    }

    .ht-xl-550-f {
        height: 550px !important;
    }

    .ht-xl-550p-f {
        height: 550% !important;
    }

    .ht-xl-600 {
        height: 600px;
    }

    .ht-xl-600p {
        height: 600%;
    }

    .mx-ht-xl-600p {
        max-height: 600%;
    }

    .mn-ht-xl-600p {
        min-height: 600%;
    }

    .ht-xl-600-f {
        height: 600px !important;
    }

    .ht-xl-600p-f {
        height: 600% !important;
    }

    .ht-xl-650 {
        height: 650px;
    }

    .ht-xl-650p {
        height: 650%;
    }

    .mx-ht-xl-650p {
        max-height: 650%;
    }

    .mn-ht-xl-650p {
        min-height: 650%;
    }

    .ht-xl-650-f {
        height: 650px !important;
    }

    .ht-xl-650p-f {
        height: 650% !important;
    }

    .ht-xl-700 {
        height: 700px;
    }

    .ht-xl-700p {
        height: 700%;
    }

    .mx-ht-xl-700p {
        max-height: 700%;
    }

    .mn-ht-xl-700p {
        min-height: 700%;
    }

    .ht-xl-700-f {
        height: 700px !important;
    }

    .ht-xl-700p-f {
        height: 700% !important;
    }

    .ht-xl-750 {
        height: 750px;
    }

    .ht-xl-750p {
        height: 750%;
    }

    .mx-ht-xl-750p {
        max-height: 750%;
    }

    .mn-ht-xl-750p {
        min-height: 750%;
    }

    .ht-xl-750-f {
        height: 750px !important;
    }

    .ht-xl-750p-f {
        height: 750% !important;
    }

    .ht-xl-800 {
        height: 800px;
    }

    .ht-xl-800p {
        height: 800%;
    }

    .mx-ht-xl-800p {
        max-height: 800%;
    }

    .mn-ht-xl-800p {
        min-height: 800%;
    }

    .ht-xl-800-f {
        height: 800px !important;
    }

    .ht-xl-800p-f {
        height: 800% !important;
    }

    .ht-xl-850 {
        height: 850px;
    }

    .ht-xl-850p {
        height: 850%;
    }

    .mx-ht-xl-850p {
        max-height: 850%;
    }

    .mn-ht-xl-850p {
        min-height: 850%;
    }

    .ht-xl-850-f {
        height: 850px !important;
    }

    .ht-xl-850p-f {
        height: 850% !important;
    }

    .ht-xl-100v {
        height: 100vh;
    }
}

.lh-50 {
    line-height: 50px;
}

/* ###### Height ###### */
/* ###### Margin ###### */
.mg-0 {
    margin: 0px;
}

.mg-0-f {
    margin: 0px !important;
}

.mg-y-0 {
    margin-top: 0px;
    margin-bottom: 0px;
}

.mg-y-0-f {
    margin-top: 0px !important;
    margin-bottom: 0px !important;
}

.mg-x-0 {
    margin-left: 0px;
    margin-right: 0px;
}

.mg-x-0-f {
    margin-left: 0px !important;
    margin-right: 0px !important;
}

.mg-t-0 {
    margin-top: 0px;
}

.mg-r-0 {
    margin-right: 0px;
}

.mg-b-0 {
    margin-bottom: 0px;
}

.mg-l-0 {
    margin-left: 0px;
}

.mg-t-0-f {
    margin-top: 0px !important;
}

.mg-r-0-f {
    margin-right: 0px !important;
}

.mg-b-0-f {
    margin-bottom: 0px !important;
}

.mg-l-0-f {
    margin-left: 0px !important;
}

.mg-1 {
    margin: 1px;
}

.mg-1-f {
    margin: 1px !important;
}

.mg-y-1 {
    margin-top: 1px;
    margin-bottom: 1px;
}

.mg-y-1-f {
    margin-top: 1px !important;
    margin-bottom: 1px !important;
}

.mg-x-1 {
    margin-left: 1px;
    margin-right: 1px;
}

.mg-x-1-f {
    margin-left: 1px !important;
    margin-right: 1px !important;
}

.mg-t-1 {
    margin-top: 1px;
}

.mg-r-1 {
    margin-right: 1px;
}

.mg-b-1 {
    margin-bottom: 1px;
}

.mg-l-1 {
    margin-left: 1px;
}

.mg-t-1-f {
    margin-top: 1px !important;
}

.mg-r-1-f {
    margin-right: 1px !important;
}

.mg-b-1-f {
    margin-bottom: 1px !important;
}

.mg-l-1-f {
    margin-left: 1px !important;
}

.mg-2 {
    margin: 2px;
}

.mg-2-f {
    margin: 2px !important;
}

.mg-y-2 {
    margin-top: 2px;
    margin-bottom: 2px;
}

.mg-y-2-f {
    margin-top: 2px !important;
    margin-bottom: 2px !important;
}

.mg-x-2 {
    margin-left: 2px;
    margin-right: 2px;
}

.mg-x-2-f {
    margin-left: 2px !important;
    margin-right: 2px !important;
}

.mg-t-2 {
    margin-top: 2px;
}

.mg-r-2 {
    margin-right: 2px;
}

.mg-b-2 {
    margin-bottom: 2px;
}

.mg-l-2 {
    margin-left: 2px;
}

.mg-t-2-f {
    margin-top: 2px !important;
}

.mg-r-2-f {
    margin-right: 2px !important;
}

.mg-b-2-f {
    margin-bottom: 2px !important;
}

.mg-l-2-f {
    margin-left: 2px !important;
}

.mg-3 {
    margin: 3px;
}

.mg-3-f {
    margin: 3px !important;
}

.mg-y-3 {
    margin-top: 3px;
    margin-bottom: 3px;
}

.mg-y-3-f {
    margin-top: 3px !important;
    margin-bottom: 3px !important;
}

.mg-x-3 {
    margin-left: 3px;
    margin-right: 3px;
}

.mg-x-3-f {
    margin-left: 3px !important;
    margin-right: 3px !important;
}

.mg-t-3 {
    margin-top: 3px;
}

.mg-r-3 {
    margin-right: 3px;
}

.mg-b-3 {
    margin-bottom: 3px;
}

.mg-l-3 {
    margin-left: 3px;
}

.mg-t-3-f {
    margin-top: 3px !important;
}

.mg-r-3-f {
    margin-right: 3px !important;
}

.mg-b-3-f {
    margin-bottom: 3px !important;
}

.mg-l-3-f {
    margin-left: 3px !important;
}

.mg-4 {
    margin: 4px;
}

.mg-4-f {
    margin: 4px !important;
}

.mg-y-4 {
    margin-top: 4px;
    margin-bottom: 4px;
}

.mg-y-4-f {
    margin-top: 4px !important;
    margin-bottom: 4px !important;
}

.mg-x-4 {
    margin-left: 4px;
    margin-right: 4px;
}

.mg-x-4-f {
    margin-left: 4px !important;
    margin-right: 4px !important;
}

.mg-t-4 {
    margin-top: 4px;
}

.mg-r-4 {
    margin-right: 4px;
}

.mg-b-4 {
    margin-bottom: 4px;
}

.mg-l-4 {
    margin-left: 4px;
}

.mg-t-4-f {
    margin-top: 4px !important;
}

.mg-r-4-f {
    margin-right: 4px !important;
}

.mg-b-4-f {
    margin-bottom: 4px !important;
}

.mg-l-4-f {
    margin-left: 4px !important;
}

.mg-5 {
    margin: 5px;
}

.mg-5-f {
    margin: 5px !important;
}

.mg-y-5 {
    margin-top: 5px;
    margin-bottom: 5px;
}

.mg-y-5-f {
    margin-top: 5px !important;
    margin-bottom: 5px !important;
}

.mg-x-5 {
    margin-left: 5px;
    margin-right: 5px;
}

.mg-x-5-f {
    margin-left: 5px !important;
    margin-right: 5px !important;
}

.mg-t-5 {
    margin-top: 5px;
}

.mg-r-5 {
    margin-right: 5px;
}

.mg-b-5 {
    margin-bottom: 5px;
}

.mg-l-5 {
    margin-left: 5px;
}

.mg-t-5-f {
    margin-top: 5px !important;
}

.mg-r-5-f {
    margin-right: 5px !important;
}

.mg-b-5-f {
    margin-bottom: 5px !important;
}

.mg-l-5-f {
    margin-left: 5px !important;
}

.mg-6 {
    margin: 6px;
}

.mg-6-f {
    margin: 6px !important;
}

.mg-y-6 {
    margin-top: 6px;
    margin-bottom: 6px;
}

.mg-y-6-f {
    margin-top: 6px !important;
    margin-bottom: 6px !important;
}

.mg-x-6 {
    margin-left: 6px;
    margin-right: 6px;
}

.mg-x-6-f {
    margin-left: 6px !important;
    margin-right: 6px !important;
}

.mg-t-6 {
    margin-top: 6px;
}

.mg-r-6 {
    margin-right: 6px;
}

.mg-b-6 {
    margin-bottom: 6px;
}

.mg-l-6 {
    margin-left: 6px;
}

.mg-t-6-f {
    margin-top: 6px !important;
}

.mg-r-6-f {
    margin-right: 6px !important;
}

.mg-b-6-f {
    margin-bottom: 6px !important;
}

.mg-l-6-f {
    margin-left: 6px !important;
}

.mg-7 {
    margin: 7px;
}

.mg-7-f {
    margin: 7px !important;
}

.mg-y-7 {
    margin-top: 7px;
    margin-bottom: 7px;
}

.mg-y-7-f {
    margin-top: 7px !important;
    margin-bottom: 7px !important;
}

.mg-x-7 {
    margin-left: 7px;
    margin-right: 7px;
}

.mg-x-7-f {
    margin-left: 7px !important;
    margin-right: 7px !important;
}

.mg-t-7 {
    margin-top: 7px;
}

.mg-r-7 {
    margin-right: 7px;
}

.mg-b-7 {
    margin-bottom: 7px;
}

.mg-l-7 {
    margin-left: 7px;
}

.mg-t-7-f {
    margin-top: 7px !important;
}

.mg-r-7-f {
    margin-right: 7px !important;
}

.mg-b-7-f {
    margin-bottom: 7px !important;
}

.mg-l-7-f {
    margin-left: 7px !important;
}

.mg-8 {
    margin: 8px;
}

.mg-8-f {
    margin: 8px !important;
}

.mg-y-8 {
    margin-top: 8px;
    margin-bottom: 8px;
}

.mg-y-8-f {
    margin-top: 8px !important;
    margin-bottom: 8px !important;
}

.mg-x-8 {
    margin-left: 8px;
    margin-right: 8px;
}

.mg-x-8-f {
    margin-left: 8px !important;
    margin-right: 8px !important;
}

.mg-t-8 {
    margin-top: 8px;
}

.mg-r-8 {
    margin-right: 8px;
}

.mg-b-8 {
    margin-bottom: 8px;
}

.mg-l-8 {
    margin-left: 8px;
}

.mg-t-8-f {
    margin-top: 8px !important;
}

.mg-r-8-f {
    margin-right: 8px !important;
}

.mg-b-8-f {
    margin-bottom: 8px !important;
}

.mg-l-8-f {
    margin-left: 8px !important;
}

.mg-9 {
    margin: 9px;
}

.mg-9-f {
    margin: 9px !important;
}

.mg-y-9 {
    margin-top: 9px;
    margin-bottom: 9px;
}

.mg-y-9-f {
    margin-top: 9px !important;
    margin-bottom: 9px !important;
}

.mg-x-9 {
    margin-left: 9px;
    margin-right: 9px;
}

.mg-x-9-f {
    margin-left: 9px !important;
    margin-right: 9px !important;
}

.mg-t-9 {
    margin-top: 9px;
}

.mg-r-9 {
    margin-right: 9px;
}

.mg-b-9 {
    margin-bottom: 9px;
}

.mg-l-9 {
    margin-left: 9px;
}

.mg-t-9-f {
    margin-top: 9px !important;
}

.mg-r-9-f {
    margin-right: 9px !important;
}

.mg-b-9-f {
    margin-bottom: 9px !important;
}

.mg-l-9-f {
    margin-left: 9px !important;
}

.mg-10 {
    margin: 10px;
}

.mg-10-f {
    margin: 10px !important;
}

.mg-y-10 {
    margin-top: 10px;
    margin-bottom: 10px;
}

.mg-y-10-f {
    margin-top: 10px !important;
    margin-bottom: 10px !important;
}

.mg-x-10 {
    margin-left: 10px;
    margin-right: 10px;
}

.mg-x-10-f {
    margin-left: 10px !important;
    margin-right: 10px !important;
}

.mg-t-10 {
    margin-top: 10px;
}

.mg-r-10 {
    margin-right: 10px;
}

.mg-b-10 {
    margin-bottom: 10px;
}

.mg-l-10 {
    margin-left: 10px;
}

.mg-t-10-f {
    margin-top: 10px !important;
}

.mg-r-10-f {
    margin-right: 10px !important;
}

.mg-b-10-f {
    margin-bottom: 10px !important;
}

.mg-l-10-f {
    margin-left: 10px !important;
}

.mg-15 {
    margin: 15px;
}

.mg-15-f {
    margin: 15px !important;
}

.mg-y-15 {
    margin-top: 15px;
    margin-bottom: 15px;
}

.mg-y-15-f {
    margin-top: 15px !important;
    margin-bottom: 15px !important;
}

.mg-x-15 {
    margin-left: 15px;
    margin-right: 15px;
}

.mg-x-15-f {
    margin-left: 15px !important;
    margin-right: 15px !important;
}

.mg-t-15 {
    margin-top: 15px;
}

.mg-r-15 {
    margin-right: 15px;
}

.mg-b-15 {
    margin-bottom: 15px;
}

.mg-l-15 {
    margin-left: 15px;
}

.mg-t-15-f {
    margin-top: 15px !important;
}

.mg-r-15-f {
    margin-right: 15px !important;
}

.mg-b-15-f {
    margin-bottom: 15px !important;
}

.mg-l-15-f {
    margin-left: 15px !important;
}

.mg-20 {
    margin: 20px;
}

.mg-20-f {
    margin: 20px !important;
}

.mg-y-20 {
    margin-top: 20px;
    margin-bottom: 20px;
}

.mg-y-20-f {
    margin-top: 20px !important;
    margin-bottom: 20px !important;
}

.mg-x-20 {
    margin-left: 20px;
    margin-right: 20px;
}

.mg-x-20-f {
    margin-left: 20px !important;
    margin-right: 20px !important;
}

.mg-t-20 {
    margin-top: 20px;
}

.mg-r-20 {
    margin-right: 20px;
}

.mg-b-20 {
    margin-bottom: 20px;
}

.mg-l-20 {
    margin-left: 20px;
}

.mg-t-20-f {
    margin-top: 20px !important;
}

.mg-r-20-f {
    margin-right: 20px !important;
}

.mg-b-20-f {
    margin-bottom: 20px !important;
}

.mg-l-20-f {
    margin-left: 20px !important;
}

.mg-25 {
    margin: 25px;
}

.mg-25-f {
    margin: 25px !important;
}

.mg-y-25 {
    margin-top: 25px;
    margin-bottom: 25px;
}

.mg-y-25-f {
    margin-top: 25px !important;
    margin-bottom: 25px !important;
}

.mg-x-25 {
    margin-left: 25px;
    margin-right: 25px;
}

.mg-x-25-f {
    margin-left: 25px !important;
    margin-right: 25px !important;
}

.mg-t-25 {
    margin-top: 25px;
}

.mg-r-25 {
    margin-right: 25px;
}

.mg-b-25 {
    margin-bottom: 25px;
}

.mg-l-25 {
    margin-left: 25px;
}

.mg-t-25-f {
    margin-top: 25px !important;
}

.mg-r-25-f {
    margin-right: 25px !important;
}

.mg-b-25-f {
    margin-bottom: 25px !important;
}

.mg-l-25-f {
    margin-left: 25px !important;
}

.mg-30 {
    margin: 30px;
}

.mg-30-f {
    margin: 30px !important;
}

.mg-y-30 {
    margin-top: 30px;
    margin-bottom: 30px;
}

.mg-y-30-f {
    margin-top: 30px !important;
    margin-bottom: 30px !important;
}

.mg-x-30 {
    margin-left: 30px;
    margin-right: 30px;
}

.mg-x-30-f {
    margin-left: 30px !important;
    margin-right: 30px !important;
}

.mg-t-30 {
    margin-top: 30px;
}

.mg-r-30 {
    margin-right: 30px;
}

.mg-b-30 {
    margin-bottom: 30px;
}

.mg-l-30 {
    margin-left: 30px;
}

.mg-t-30-f {
    margin-top: 30px !important;
}

.mg-r-30-f {
    margin-right: 30px !important;
}

.mg-b-30-f {
    margin-bottom: 30px !important;
}

.mg-l-30-f {
    margin-left: 30px !important;
}

.mg-35 {
    margin: 35px;
}

.mg-35-f {
    margin: 35px !important;
}

.mg-y-35 {
    margin-top: 35px;
    margin-bottom: 35px;
}

.mg-y-35-f {
    margin-top: 35px !important;
    margin-bottom: 35px !important;
}

.mg-x-35 {
    margin-left: 35px;
    margin-right: 35px;
}

.mg-x-35-f {
    margin-left: 35px !important;
    margin-right: 35px !important;
}

.mg-t-35 {
    margin-top: 35px;
}

.mg-r-35 {
    margin-right: 35px;
}

.mg-b-35 {
    margin-bottom: 35px;
}

.mg-l-35 {
    margin-left: 35px;
}

.mg-t-35-f {
    margin-top: 35px !important;
}

.mg-r-35-f {
    margin-right: 35px !important;
}

.mg-b-35-f {
    margin-bottom: 35px !important;
}

.mg-l-35-f {
    margin-left: 35px !important;
}

.mg-40 {
    margin: 40px;
}

.mg-40-f {
    margin: 40px !important;
}

.mg-y-40 {
    margin-top: 40px;
    margin-bottom: 40px;
}

.mg-y-40-f {
    margin-top: 40px !important;
    margin-bottom: 40px !important;
}

.mg-x-40 {
    margin-left: 40px;
    margin-right: 40px;
}

.mg-x-40-f {
    margin-left: 40px !important;
    margin-right: 40px !important;
}

.mg-t-40 {
    margin-top: 40px;
}

.mg-r-40 {
    margin-right: 40px;
}

.mg-b-40 {
    margin-bottom: 40px;
}

.mg-l-40 {
    margin-left: 40px;
}

.mg-t-40-f {
    margin-top: 40px !important;
}

.mg-r-40-f {
    margin-right: 40px !important;
}

.mg-b-40-f {
    margin-bottom: 40px !important;
}

.mg-l-40-f {
    margin-left: 40px !important;
}

.mg-45 {
    margin: 45px;
}

.mg-45-f {
    margin: 45px !important;
}

.mg-y-45 {
    margin-top: 45px;
    margin-bottom: 45px;
}

.mg-y-45-f {
    margin-top: 45px !important;
    margin-bottom: 45px !important;
}

.mg-x-45 {
    margin-left: 45px;
    margin-right: 45px;
}

.mg-x-45-f {
    margin-left: 45px !important;
    margin-right: 45px !important;
}

.mg-t-45 {
    margin-top: 45px;
}

.mg-r-45 {
    margin-right: 45px;
}

.mg-b-45 {
    margin-bottom: 45px;
}

.mg-l-45 {
    margin-left: 45px;
}

.mg-t-45-f {
    margin-top: 45px !important;
}

.mg-r-45-f {
    margin-right: 45px !important;
}

.mg-b-45-f {
    margin-bottom: 45px !important;
}

.mg-l-45-f {
    margin-left: 45px !important;
}

.mg-50 {
    margin: 50px;
}

.mg-50-f {
    margin: 50px !important;
}

.mg-y-50 {
    margin-top: 50px;
    margin-bottom: 50px;
}

.mg-y-50-f {
    margin-top: 50px !important;
    margin-bottom: 50px !important;
}

.mg-x-50 {
    margin-left: 50px;
    margin-right: 50px;
}

.mg-x-50-f {
    margin-left: 50px !important;
    margin-right: 50px !important;
}

.mg-t-50 {
    margin-top: 50px;
}

.mg-r-50 {
    margin-right: 50px;
}

.mg-b-50 {
    margin-bottom: 50px;
}

.mg-l-50 {
    margin-left: 50px;
}

.mg-t-50-f {
    margin-top: 50px !important;
}

.mg-r-50-f {
    margin-right: 50px !important;
}

.mg-b-50-f {
    margin-bottom: 50px !important;
}

.mg-l-50-f {
    margin-left: 50px !important;
}

.mg-55 {
    margin: 55px;
}

.mg-55-f {
    margin: 55px !important;
}

.mg-y-55 {
    margin-top: 55px;
    margin-bottom: 55px;
}

.mg-y-55-f {
    margin-top: 55px !important;
    margin-bottom: 55px !important;
}

.mg-x-55 {
    margin-left: 55px;
    margin-right: 55px;
}

.mg-x-55-f {
    margin-left: 55px !important;
    margin-right: 55px !important;
}

.mg-t-55 {
    margin-top: 55px;
}

.mg-r-55 {
    margin-right: 55px;
}

.mg-b-55 {
    margin-bottom: 55px;
}

.mg-l-55 {
    margin-left: 55px;
}

.mg-t-55-f {
    margin-top: 55px !important;
}

.mg-r-55-f {
    margin-right: 55px !important;
}

.mg-b-55-f {
    margin-bottom: 55px !important;
}

.mg-l-55-f {
    margin-left: 55px !important;
}

.mg-60 {
    margin: 60px;
}

.mg-60-f {
    margin: 60px !important;
}

.mg-y-60 {
    margin-top: 60px;
    margin-bottom: 60px;
}

.mg-y-60-f {
    margin-top: 60px !important;
    margin-bottom: 60px !important;
}

.mg-x-60 {
    margin-left: 60px;
    margin-right: 60px;
}

.mg-x-60-f {
    margin-left: 60px !important;
    margin-right: 60px !important;
}

.mg-t-60 {
    margin-top: 60px;
}

.mg-r-60 {
    margin-right: 60px;
}

.mg-b-60 {
    margin-bottom: 60px;
}

.mg-l-60 {
    margin-left: 60px;
}

.mg-t-60-f {
    margin-top: 60px !important;
}

.mg-r-60-f {
    margin-right: 60px !important;
}

.mg-b-60-f {
    margin-bottom: 60px !important;
}

.mg-l-60-f {
    margin-left: 60px !important;
}

.mg-65 {
    margin: 65px;
}

.mg-65-f {
    margin: 65px !important;
}

.mg-y-65 {
    margin-top: 65px;
    margin-bottom: 65px;
}

.mg-y-65-f {
    margin-top: 65px !important;
    margin-bottom: 65px !important;
}

.mg-x-65 {
    margin-left: 65px;
    margin-right: 65px;
}

.mg-x-65-f {
    margin-left: 65px !important;
    margin-right: 65px !important;
}

.mg-t-65 {
    margin-top: 65px;
}

.mg-r-65 {
    margin-right: 65px;
}

.mg-b-65 {
    margin-bottom: 65px;
}

.mg-l-65 {
    margin-left: 65px;
}

.mg-t-65-f {
    margin-top: 65px !important;
}

.mg-r-65-f {
    margin-right: 65px !important;
}

.mg-b-65-f {
    margin-bottom: 65px !important;
}

.mg-l-65-f {
    margin-left: 65px !important;
}

.mg-70 {
    margin: 70px;
}

.mg-70-f {
    margin: 70px !important;
}

.mg-y-70 {
    margin-top: 70px;
    margin-bottom: 70px;
}

.mg-y-70-f {
    margin-top: 70px !important;
    margin-bottom: 70px !important;
}

.mg-x-70 {
    margin-left: 70px;
    margin-right: 70px;
}

.mg-x-70-f {
    margin-left: 70px !important;
    margin-right: 70px !important;
}

.mg-t-70 {
    margin-top: 70px;
}

.mg-r-70 {
    margin-right: 70px;
}

.mg-b-70 {
    margin-bottom: 70px;
}

.mg-l-70 {
    margin-left: 70px;
}

.mg-t-70-f {
    margin-top: 70px !important;
}

.mg-r-70-f {
    margin-right: 70px !important;
}

.mg-b-70-f {
    margin-bottom: 70px !important;
}

.mg-l-70-f {
    margin-left: 70px !important;
}

.mg-75 {
    margin: 75px;
}

.mg-75-f {
    margin: 75px !important;
}

.mg-y-75 {
    margin-top: 75px;
    margin-bottom: 75px;
}

.mg-y-75-f {
    margin-top: 75px !important;
    margin-bottom: 75px !important;
}

.mg-x-75 {
    margin-left: 75px;
    margin-right: 75px;
}

.mg-x-75-f {
    margin-left: 75px !important;
    margin-right: 75px !important;
}

.mg-t-75 {
    margin-top: 75px;
}

.mg-r-75 {
    margin-right: 75px;
}

.mg-b-75 {
    margin-bottom: 75px;
}

.mg-l-75 {
    margin-left: 75px;
}

.mg-t-75-f {
    margin-top: 75px !important;
}

.mg-r-75-f {
    margin-right: 75px !important;
}

.mg-b-75-f {
    margin-bottom: 75px !important;
}

.mg-l-75-f {
    margin-left: 75px !important;
}

.mg-80 {
    margin: 80px;
}

.mg-80-f {
    margin: 80px !important;
}

.mg-y-80 {
    margin-top: 80px;
    margin-bottom: 80px;
}

.mg-y-80-f {
    margin-top: 80px !important;
    margin-bottom: 80px !important;
}

.mg-x-80 {
    margin-left: 80px;
    margin-right: 80px;
}

.mg-x-80-f {
    margin-left: 80px !important;
    margin-right: 80px !important;
}

.mg-t-80 {
    margin-top: 80px;
}

.mg-r-80 {
    margin-right: 80px;
}

.mg-b-80 {
    margin-bottom: 80px;
}

.mg-l-80 {
    margin-left: 80px;
}

.mg-t-80-f {
    margin-top: 80px !important;
}

.mg-r-80-f {
    margin-right: 80px !important;
}

.mg-b-80-f {
    margin-bottom: 80px !important;
}

.mg-l-80-f {
    margin-left: 80px !important;
}

.mg-85 {
    margin: 85px;
}

.mg-85-f {
    margin: 85px !important;
}

.mg-y-85 {
    margin-top: 85px;
    margin-bottom: 85px;
}

.mg-y-85-f {
    margin-top: 85px !important;
    margin-bottom: 85px !important;
}

.mg-x-85 {
    margin-left: 85px;
    margin-right: 85px;
}

.mg-x-85-f {
    margin-left: 85px !important;
    margin-right: 85px !important;
}

.mg-t-85 {
    margin-top: 85px;
}

.mg-r-85 {
    margin-right: 85px;
}

.mg-b-85 {
    margin-bottom: 85px;
}

.mg-l-85 {
    margin-left: 85px;
}

.mg-t-85-f {
    margin-top: 85px !important;
}

.mg-r-85-f {
    margin-right: 85px !important;
}

.mg-b-85-f {
    margin-bottom: 85px !important;
}

.mg-l-85-f {
    margin-left: 85px !important;
}

.mg-90 {
    margin: 90px;
}

.mg-90-f {
    margin: 90px !important;
}

.mg-y-90 {
    margin-top: 90px;
    margin-bottom: 90px;
}

.mg-y-90-f {
    margin-top: 90px !important;
    margin-bottom: 90px !important;
}

.mg-x-90 {
    margin-left: 90px;
    margin-right: 90px;
}

.mg-x-90-f {
    margin-left: 90px !important;
    margin-right: 90px !important;
}

.mg-t-90 {
    margin-top: 90px;
}

.mg-r-90 {
    margin-right: 90px;
}

.mg-b-90 {
    margin-bottom: 90px;
}

.mg-l-90 {
    margin-left: 90px;
}

.mg-t-90-f {
    margin-top: 90px !important;
}

.mg-r-90-f {
    margin-right: 90px !important;
}

.mg-b-90-f {
    margin-bottom: 90px !important;
}

.mg-l-90-f {
    margin-left: 90px !important;
}

.mg-95 {
    margin: 95px;
}

.mg-95-f {
    margin: 95px !important;
}

.mg-y-95 {
    margin-top: 95px;
    margin-bottom: 95px;
}

.mg-y-95-f {
    margin-top: 95px !important;
    margin-bottom: 95px !important;
}

.mg-x-95 {
    margin-left: 95px;
    margin-right: 95px;
}

.mg-x-95-f {
    margin-left: 95px !important;
    margin-right: 95px !important;
}

.mg-t-95 {
    margin-top: 95px;
}

.mg-r-95 {
    margin-right: 95px;
}

.mg-b-95 {
    margin-bottom: 95px;
}

.mg-l-95 {
    margin-left: 95px;
}

.mg-t-95-f {
    margin-top: 95px !important;
}

.mg-r-95-f {
    margin-right: 95px !important;
}

.mg-b-95-f {
    margin-bottom: 95px !important;
}

.mg-l-95-f {
    margin-left: 95px !important;
}

.mg-100 {
    margin: 100px;
}

.mg-100-f {
    margin: 100px !important;
}

.mg-y-100 {
    margin-top: 100px;
    margin-bottom: 100px;
}

.mg-y-100-f {
    margin-top: 100px !important;
    margin-bottom: 100px !important;
}

.mg-x-100 {
    margin-left: 100px;
    margin-right: 100px;
}

.mg-x-100-f {
    margin-left: 100px !important;
    margin-right: 100px !important;
}

.mg-t-100 {
    margin-top: 100px;
}

.mg-r-100 {
    margin-right: 100px;
}

.mg-b-100 {
    margin-bottom: 100px;
}

.mg-l-100 {
    margin-left: 100px;
}

.mg-t-100-f {
    margin-top: 100px !important;
}

.mg-r-100-f {
    margin-right: 100px !important;
}

.mg-b-100-f {
    margin-bottom: 100px !important;
}

.mg-l-100-f {
    margin-left: 100px !important;
}

.mg-105 {
    margin: 105px;
}

.mg-105-f {
    margin: 105px !important;
}

.mg-y-105 {
    margin-top: 105px;
    margin-bottom: 105px;
}

.mg-y-105-f {
    margin-top: 105px !important;
    margin-bottom: 105px !important;
}

.mg-x-105 {
    margin-left: 105px;
    margin-right: 105px;
}

.mg-x-105-f {
    margin-left: 105px !important;
    margin-right: 105px !important;
}

.mg-t-105 {
    margin-top: 105px;
}

.mg-r-105 {
    margin-right: 105px;
}

.mg-b-105 {
    margin-bottom: 105px;
}

.mg-l-105 {
    margin-left: 105px;
}

.mg-t-105-f {
    margin-top: 105px !important;
}

.mg-r-105-f {
    margin-right: 105px !important;
}

.mg-b-105-f {
    margin-bottom: 105px !important;
}

.mg-l-105-f {
    margin-left: 105px !important;
}

.mg-110 {
    margin: 110px;
}

.mg-110-f {
    margin: 110px !important;
}

.mg-y-110 {
    margin-top: 110px;
    margin-bottom: 110px;
}

.mg-y-110-f {
    margin-top: 110px !important;
    margin-bottom: 110px !important;
}

.mg-x-110 {
    margin-left: 110px;
    margin-right: 110px;
}

.mg-x-110-f {
    margin-left: 110px !important;
    margin-right: 110px !important;
}

.mg-t-110 {
    margin-top: 110px;
}

.mg-r-110 {
    margin-right: 110px;
}

.mg-b-110 {
    margin-bottom: 110px;
}

.mg-l-110 {
    margin-left: 110px;
}

.mg-t-110-f {
    margin-top: 110px !important;
}

.mg-r-110-f {
    margin-right: 110px !important;
}

.mg-b-110-f {
    margin-bottom: 110px !important;
}

.mg-l-110-f {
    margin-left: 110px !important;
}

.mg-115 {
    margin: 115px;
}

.mg-115-f {
    margin: 115px !important;
}

.mg-y-115 {
    margin-top: 115px;
    margin-bottom: 115px;
}

.mg-y-115-f {
    margin-top: 115px !important;
    margin-bottom: 115px !important;
}

.mg-x-115 {
    margin-left: 115px;
    margin-right: 115px;
}

.mg-x-115-f {
    margin-left: 115px !important;
    margin-right: 115px !important;
}

.mg-t-115 {
    margin-top: 115px;
}

.mg-r-115 {
    margin-right: 115px;
}

.mg-b-115 {
    margin-bottom: 115px;
}

.mg-l-115 {
    margin-left: 115px;
}

.mg-t-115-f {
    margin-top: 115px !important;
}

.mg-r-115-f {
    margin-right: 115px !important;
}

.mg-b-115-f {
    margin-bottom: 115px !important;
}

.mg-l-115-f {
    margin-left: 115px !important;
}

.mg-120 {
    margin: 120px;
}

.mg-120-f {
    margin: 120px !important;
}

.mg-y-120 {
    margin-top: 120px;
    margin-bottom: 120px;
}

.mg-y-120-f {
    margin-top: 120px !important;
    margin-bottom: 120px !important;
}

.mg-x-120 {
    margin-left: 120px;
    margin-right: 120px;
}

.mg-x-120-f {
    margin-left: 120px !important;
    margin-right: 120px !important;
}

.mg-t-120 {
    margin-top: 120px;
}

.mg-r-120 {
    margin-right: 120px;
}

.mg-b-120 {
    margin-bottom: 120px;
}

.mg-l-120 {
    margin-left: 120px;
}

.mg-t-120-f {
    margin-top: 120px !important;
}

.mg-r-120-f {
    margin-right: 120px !important;
}

.mg-b-120-f {
    margin-bottom: 120px !important;
}

.mg-l-120-f {
    margin-left: 120px !important;
}

.mg-t-auto {
    margin-top: auto;
}

.mg-r-auto {
    margin-right: auto;
}

.mg-b-auto {
    margin-bottom: auto;
}

.mg-l-auto {
    margin-left: auto;
}

.mg-x-auto {
    margin: auto;
}

@media (min-width: 480px) {
    .mg-xs-0 {
        margin: 0px;
    }

    .mg-xs-0-f {
        margin: 0px !important;
    }

    .mg-xs-y-0 {
        margin-top: 0px;
        margin-bottom: 0px;
    }

    .mg-xs-y-0-f {
        margin-top: 0px !important;
        margin-bottom: 0px !important;
    }

    .mg-xs-x-0 {
        margin-left: 0px;
        margin-right: 0px;
    }

    .mg-xs-x-0-f {
        margin-left: 0px !important;
        margin-right: 0px !important;
    }

    .mg-xs-t-0 {
        margin-top: 0px;
    }

    .mg-xs-r-0 {
        margin-right: 0px;
    }

    .mg-xs-b-0 {
        margin-bottom: 0px;
    }

    .mg-xs-l-0 {
        margin-left: 0px;
    }

    .mg-xs-t-0-f {
        margin-top: 0px !important;
    }

    .mg-xs-r-0-f {
        margin-right: 0px !important;
    }

    .mg-xs-b-0-f {
        margin-bottom: 0px !important;
    }

    .mg-xs-l-0-f {
        margin-left: 0px !important;
    }

    .mg-xs-1 {
        margin: 1px;
    }

    .mg-xs-1-f {
        margin: 1px !important;
    }

    .mg-xs-y-1 {
        margin-top: 1px;
        margin-bottom: 1px;
    }

    .mg-xs-y-1-f {
        margin-top: 1px !important;
        margin-bottom: 1px !important;
    }

    .mg-xs-x-1 {
        margin-left: 1px;
        margin-right: 1px;
    }

    .mg-xs-x-1-f {
        margin-left: 1px !important;
        margin-right: 1px !important;
    }

    .mg-xs-t-1 {
        margin-top: 1px;
    }

    .mg-xs-r-1 {
        margin-right: 1px;
    }

    .mg-xs-b-1 {
        margin-bottom: 1px;
    }

    .mg-xs-l-1 {
        margin-left: 1px;
    }

    .mg-xs-t-1-f {
        margin-top: 1px !important;
    }

    .mg-xs-r-1-f {
        margin-right: 1px !important;
    }

    .mg-xs-b-1-f {
        margin-bottom: 1px !important;
    }

    .mg-xs-l-1-f {
        margin-left: 1px !important;
    }

    .mg-xs-2 {
        margin: 2px;
    }

    .mg-xs-2-f {
        margin: 2px !important;
    }

    .mg-xs-y-2 {
        margin-top: 2px;
        margin-bottom: 2px;
    }

    .mg-xs-y-2-f {
        margin-top: 2px !important;
        margin-bottom: 2px !important;
    }

    .mg-xs-x-2 {
        margin-left: 2px;
        margin-right: 2px;
    }

    .mg-xs-x-2-f {
        margin-left: 2px !important;
        margin-right: 2px !important;
    }

    .mg-xs-t-2 {
        margin-top: 2px;
    }

    .mg-xs-r-2 {
        margin-right: 2px;
    }

    .mg-xs-b-2 {
        margin-bottom: 2px;
    }

    .mg-xs-l-2 {
        margin-left: 2px;
    }

    .mg-xs-t-2-f {
        margin-top: 2px !important;
    }

    .mg-xs-r-2-f {
        margin-right: 2px !important;
    }

    .mg-xs-b-2-f {
        margin-bottom: 2px !important;
    }

    .mg-xs-l-2-f {
        margin-left: 2px !important;
    }

    .mg-xs-3 {
        margin: 3px;
    }

    .mg-xs-3-f {
        margin: 3px !important;
    }

    .mg-xs-y-3 {
        margin-top: 3px;
        margin-bottom: 3px;
    }

    .mg-xs-y-3-f {
        margin-top: 3px !important;
        margin-bottom: 3px !important;
    }

    .mg-xs-x-3 {
        margin-left: 3px;
        margin-right: 3px;
    }

    .mg-xs-x-3-f {
        margin-left: 3px !important;
        margin-right: 3px !important;
    }

    .mg-xs-t-3 {
        margin-top: 3px;
    }

    .mg-xs-r-3 {
        margin-right: 3px;
    }

    .mg-xs-b-3 {
        margin-bottom: 3px;
    }

    .mg-xs-l-3 {
        margin-left: 3px;
    }

    .mg-xs-t-3-f {
        margin-top: 3px !important;
    }

    .mg-xs-r-3-f {
        margin-right: 3px !important;
    }

    .mg-xs-b-3-f {
        margin-bottom: 3px !important;
    }

    .mg-xs-l-3-f {
        margin-left: 3px !important;
    }

    .mg-xs-4 {
        margin: 4px;
    }

    .mg-xs-4-f {
        margin: 4px !important;
    }

    .mg-xs-y-4 {
        margin-top: 4px;
        margin-bottom: 4px;
    }

    .mg-xs-y-4-f {
        margin-top: 4px !important;
        margin-bottom: 4px !important;
    }

    .mg-xs-x-4 {
        margin-left: 4px;
        margin-right: 4px;
    }

    .mg-xs-x-4-f {
        margin-left: 4px !important;
        margin-right: 4px !important;
    }

    .mg-xs-t-4 {
        margin-top: 4px;
    }

    .mg-xs-r-4 {
        margin-right: 4px;
    }

    .mg-xs-b-4 {
        margin-bottom: 4px;
    }

    .mg-xs-l-4 {
        margin-left: 4px;
    }

    .mg-xs-t-4-f {
        margin-top: 4px !important;
    }

    .mg-xs-r-4-f {
        margin-right: 4px !important;
    }

    .mg-xs-b-4-f {
        margin-bottom: 4px !important;
    }

    .mg-xs-l-4-f {
        margin-left: 4px !important;
    }

    .mg-xs-5 {
        margin: 5px;
    }

    .mg-xs-5-f {
        margin: 5px !important;
    }

    .mg-xs-y-5 {
        margin-top: 5px;
        margin-bottom: 5px;
    }

    .mg-xs-y-5-f {
        margin-top: 5px !important;
        margin-bottom: 5px !important;
    }

    .mg-xs-x-5 {
        margin-left: 5px;
        margin-right: 5px;
    }

    .mg-xs-x-5-f {
        margin-left: 5px !important;
        margin-right: 5px !important;
    }

    .mg-xs-t-5 {
        margin-top: 5px;
    }

    .mg-xs-r-5 {
        margin-right: 5px;
    }

    .mg-xs-b-5 {
        margin-bottom: 5px;
    }

    .mg-xs-l-5 {
        margin-left: 5px;
    }

    .mg-xs-t-5-f {
        margin-top: 5px !important;
    }

    .mg-xs-r-5-f {
        margin-right: 5px !important;
    }

    .mg-xs-b-5-f {
        margin-bottom: 5px !important;
    }

    .mg-xs-l-5-f {
        margin-left: 5px !important;
    }

    .mg-xs-6 {
        margin: 6px;
    }

    .mg-xs-6-f {
        margin: 6px !important;
    }

    .mg-xs-y-6 {
        margin-top: 6px;
        margin-bottom: 6px;
    }

    .mg-xs-y-6-f {
        margin-top: 6px !important;
        margin-bottom: 6px !important;
    }

    .mg-xs-x-6 {
        margin-left: 6px;
        margin-right: 6px;
    }

    .mg-xs-x-6-f {
        margin-left: 6px !important;
        margin-right: 6px !important;
    }

    .mg-xs-t-6 {
        margin-top: 6px;
    }

    .mg-xs-r-6 {
        margin-right: 6px;
    }

    .mg-xs-b-6 {
        margin-bottom: 6px;
    }

    .mg-xs-l-6 {
        margin-left: 6px;
    }

    .mg-xs-t-6-f {
        margin-top: 6px !important;
    }

    .mg-xs-r-6-f {
        margin-right: 6px !important;
    }

    .mg-xs-b-6-f {
        margin-bottom: 6px !important;
    }

    .mg-xs-l-6-f {
        margin-left: 6px !important;
    }

    .mg-xs-7 {
        margin: 7px;
    }

    .mg-xs-7-f {
        margin: 7px !important;
    }

    .mg-xs-y-7 {
        margin-top: 7px;
        margin-bottom: 7px;
    }

    .mg-xs-y-7-f {
        margin-top: 7px !important;
        margin-bottom: 7px !important;
    }

    .mg-xs-x-7 {
        margin-left: 7px;
        margin-right: 7px;
    }

    .mg-xs-x-7-f {
        margin-left: 7px !important;
        margin-right: 7px !important;
    }

    .mg-xs-t-7 {
        margin-top: 7px;
    }

    .mg-xs-r-7 {
        margin-right: 7px;
    }

    .mg-xs-b-7 {
        margin-bottom: 7px;
    }

    .mg-xs-l-7 {
        margin-left: 7px;
    }

    .mg-xs-t-7-f {
        margin-top: 7px !important;
    }

    .mg-xs-r-7-f {
        margin-right: 7px !important;
    }

    .mg-xs-b-7-f {
        margin-bottom: 7px !important;
    }

    .mg-xs-l-7-f {
        margin-left: 7px !important;
    }

    .mg-xs-8 {
        margin: 8px;
    }

    .mg-xs-8-f {
        margin: 8px !important;
    }

    .mg-xs-y-8 {
        margin-top: 8px;
        margin-bottom: 8px;
    }

    .mg-xs-y-8-f {
        margin-top: 8px !important;
        margin-bottom: 8px !important;
    }

    .mg-xs-x-8 {
        margin-left: 8px;
        margin-right: 8px;
    }

    .mg-xs-x-8-f {
        margin-left: 8px !important;
        margin-right: 8px !important;
    }

    .mg-xs-t-8 {
        margin-top: 8px;
    }

    .mg-xs-r-8 {
        margin-right: 8px;
    }

    .mg-xs-b-8 {
        margin-bottom: 8px;
    }

    .mg-xs-l-8 {
        margin-left: 8px;
    }

    .mg-xs-t-8-f {
        margin-top: 8px !important;
    }

    .mg-xs-r-8-f {
        margin-right: 8px !important;
    }

    .mg-xs-b-8-f {
        margin-bottom: 8px !important;
    }

    .mg-xs-l-8-f {
        margin-left: 8px !important;
    }

    .mg-xs-9 {
        margin: 9px;
    }

    .mg-xs-9-f {
        margin: 9px !important;
    }

    .mg-xs-y-9 {
        margin-top: 9px;
        margin-bottom: 9px;
    }

    .mg-xs-y-9-f {
        margin-top: 9px !important;
        margin-bottom: 9px !important;
    }

    .mg-xs-x-9 {
        margin-left: 9px;
        margin-right: 9px;
    }

    .mg-xs-x-9-f {
        margin-left: 9px !important;
        margin-right: 9px !important;
    }

    .mg-xs-t-9 {
        margin-top: 9px;
    }

    .mg-xs-r-9 {
        margin-right: 9px;
    }

    .mg-xs-b-9 {
        margin-bottom: 9px;
    }

    .mg-xs-l-9 {
        margin-left: 9px;
    }

    .mg-xs-t-9-f {
        margin-top: 9px !important;
    }

    .mg-xs-r-9-f {
        margin-right: 9px !important;
    }

    .mg-xs-b-9-f {
        margin-bottom: 9px !important;
    }

    .mg-xs-l-9-f {
        margin-left: 9px !important;
    }

    .mg-xs-10 {
        margin: 10px;
    }

    .mg-xs-10-f {
        margin: 10px !important;
    }

    .mg-xs-y-10 {
        margin-top: 10px;
        margin-bottom: 10px;
    }

    .mg-xs-y-10-f {
        margin-top: 10px !important;
        margin-bottom: 10px !important;
    }

    .mg-xs-x-10 {
        margin-left: 10px;
        margin-right: 10px;
    }

    .mg-xs-x-10-f {
        margin-left: 10px !important;
        margin-right: 10px !important;
    }

    .mg-xs-t-10 {
        margin-top: 10px;
    }

    .mg-xs-r-10 {
        margin-right: 10px;
    }

    .mg-xs-b-10 {
        margin-bottom: 10px;
    }

    .mg-xs-l-10 {
        margin-left: 10px;
    }

    .mg-xs-t-10-f {
        margin-top: 10px !important;
    }

    .mg-xs-r-10-f {
        margin-right: 10px !important;
    }

    .mg-xs-b-10-f {
        margin-bottom: 10px !important;
    }

    .mg-xs-l-10-f {
        margin-left: 10px !important;
    }

    .mg-xs-15 {
        margin: 15px;
    }

    .mg-xs-15-f {
        margin: 15px !important;
    }

    .mg-xs-y-15 {
        margin-top: 15px;
        margin-bottom: 15px;
    }

    .mg-xs-y-15-f {
        margin-top: 15px !important;
        margin-bottom: 15px !important;
    }

    .mg-xs-x-15 {
        margin-left: 15px;
        margin-right: 15px;
    }

    .mg-xs-x-15-f {
        margin-left: 15px !important;
        margin-right: 15px !important;
    }

    .mg-xs-t-15 {
        margin-top: 15px;
    }

    .mg-xs-r-15 {
        margin-right: 15px;
    }

    .mg-xs-b-15 {
        margin-bottom: 15px;
    }

    .mg-xs-l-15 {
        margin-left: 15px;
    }

    .mg-xs-t-15-f {
        margin-top: 15px !important;
    }

    .mg-xs-r-15-f {
        margin-right: 15px !important;
    }

    .mg-xs-b-15-f {
        margin-bottom: 15px !important;
    }

    .mg-xs-l-15-f {
        margin-left: 15px !important;
    }

    .mg-xs-20 {
        margin: 20px;
    }

    .mg-xs-20-f {
        margin: 20px !important;
    }

    .mg-xs-y-20 {
        margin-top: 20px;
        margin-bottom: 20px;
    }

    .mg-xs-y-20-f {
        margin-top: 20px !important;
        margin-bottom: 20px !important;
    }

    .mg-xs-x-20 {
        margin-left: 20px;
        margin-right: 20px;
    }

    .mg-xs-x-20-f {
        margin-left: 20px !important;
        margin-right: 20px !important;
    }

    .mg-xs-t-20 {
        margin-top: 20px;
    }

    .mg-xs-r-20 {
        margin-right: 20px;
    }

    .mg-xs-b-20 {
        margin-bottom: 20px;
    }

    .mg-xs-l-20 {
        margin-left: 20px;
    }

    .mg-xs-t-20-f {
        margin-top: 20px !important;
    }

    .mg-xs-r-20-f {
        margin-right: 20px !important;
    }

    .mg-xs-b-20-f {
        margin-bottom: 20px !important;
    }

    .mg-xs-l-20-f {
        margin-left: 20px !important;
    }

    .mg-xs-25 {
        margin: 25px;
    }

    .mg-xs-25-f {
        margin: 25px !important;
    }

    .mg-xs-y-25 {
        margin-top: 25px;
        margin-bottom: 25px;
    }

    .mg-xs-y-25-f {
        margin-top: 25px !important;
        margin-bottom: 25px !important;
    }

    .mg-xs-x-25 {
        margin-left: 25px;
        margin-right: 25px;
    }

    .mg-xs-x-25-f {
        margin-left: 25px !important;
        margin-right: 25px !important;
    }

    .mg-xs-t-25 {
        margin-top: 25px;
    }

    .mg-xs-r-25 {
        margin-right: 25px;
    }

    .mg-xs-b-25 {
        margin-bottom: 25px;
    }

    .mg-xs-l-25 {
        margin-left: 25px;
    }

    .mg-xs-t-25-f {
        margin-top: 25px !important;
    }

    .mg-xs-r-25-f {
        margin-right: 25px !important;
    }

    .mg-xs-b-25-f {
        margin-bottom: 25px !important;
    }

    .mg-xs-l-25-f {
        margin-left: 25px !important;
    }

    .mg-xs-30 {
        margin: 30px;
    }

    .mg-xs-30-f {
        margin: 30px !important;
    }

    .mg-xs-y-30 {
        margin-top: 30px;
        margin-bottom: 30px;
    }

    .mg-xs-y-30-f {
        margin-top: 30px !important;
        margin-bottom: 30px !important;
    }

    .mg-xs-x-30 {
        margin-left: 30px;
        margin-right: 30px;
    }

    .mg-xs-x-30-f {
        margin-left: 30px !important;
        margin-right: 30px !important;
    }

    .mg-xs-t-30 {
        margin-top: 30px;
    }

    .mg-xs-r-30 {
        margin-right: 30px;
    }

    .mg-xs-b-30 {
        margin-bottom: 30px;
    }

    .mg-xs-l-30 {
        margin-left: 30px;
    }

    .mg-xs-t-30-f {
        margin-top: 30px !important;
    }

    .mg-xs-r-30-f {
        margin-right: 30px !important;
    }

    .mg-xs-b-30-f {
        margin-bottom: 30px !important;
    }

    .mg-xs-l-30-f {
        margin-left: 30px !important;
    }

    .mg-xs-35 {
        margin: 35px;
    }

    .mg-xs-35-f {
        margin: 35px !important;
    }

    .mg-xs-y-35 {
        margin-top: 35px;
        margin-bottom: 35px;
    }

    .mg-xs-y-35-f {
        margin-top: 35px !important;
        margin-bottom: 35px !important;
    }

    .mg-xs-x-35 {
        margin-left: 35px;
        margin-right: 35px;
    }

    .mg-xs-x-35-f {
        margin-left: 35px !important;
        margin-right: 35px !important;
    }

    .mg-xs-t-35 {
        margin-top: 35px;
    }

    .mg-xs-r-35 {
        margin-right: 35px;
    }

    .mg-xs-b-35 {
        margin-bottom: 35px;
    }

    .mg-xs-l-35 {
        margin-left: 35px;
    }

    .mg-xs-t-35-f {
        margin-top: 35px !important;
    }

    .mg-xs-r-35-f {
        margin-right: 35px !important;
    }

    .mg-xs-b-35-f {
        margin-bottom: 35px !important;
    }

    .mg-xs-l-35-f {
        margin-left: 35px !important;
    }

    .mg-xs-40 {
        margin: 40px;
    }

    .mg-xs-40-f {
        margin: 40px !important;
    }

    .mg-xs-y-40 {
        margin-top: 40px;
        margin-bottom: 40px;
    }

    .mg-xs-y-40-f {
        margin-top: 40px !important;
        margin-bottom: 40px !important;
    }

    .mg-xs-x-40 {
        margin-left: 40px;
        margin-right: 40px;
    }

    .mg-xs-x-40-f {
        margin-left: 40px !important;
        margin-right: 40px !important;
    }

    .mg-xs-t-40 {
        margin-top: 40px;
    }

    .mg-xs-r-40 {
        margin-right: 40px;
    }

    .mg-xs-b-40 {
        margin-bottom: 40px;
    }

    .mg-xs-l-40 {
        margin-left: 40px;
    }

    .mg-xs-t-40-f {
        margin-top: 40px !important;
    }

    .mg-xs-r-40-f {
        margin-right: 40px !important;
    }

    .mg-xs-b-40-f {
        margin-bottom: 40px !important;
    }

    .mg-xs-l-40-f {
        margin-left: 40px !important;
    }

    .mg-xs-45 {
        margin: 45px;
    }

    .mg-xs-45-f {
        margin: 45px !important;
    }

    .mg-xs-y-45 {
        margin-top: 45px;
        margin-bottom: 45px;
    }

    .mg-xs-y-45-f {
        margin-top: 45px !important;
        margin-bottom: 45px !important;
    }

    .mg-xs-x-45 {
        margin-left: 45px;
        margin-right: 45px;
    }

    .mg-xs-x-45-f {
        margin-left: 45px !important;
        margin-right: 45px !important;
    }

    .mg-xs-t-45 {
        margin-top: 45px;
    }

    .mg-xs-r-45 {
        margin-right: 45px;
    }

    .mg-xs-b-45 {
        margin-bottom: 45px;
    }

    .mg-xs-l-45 {
        margin-left: 45px;
    }

    .mg-xs-t-45-f {
        margin-top: 45px !important;
    }

    .mg-xs-r-45-f {
        margin-right: 45px !important;
    }

    .mg-xs-b-45-f {
        margin-bottom: 45px !important;
    }

    .mg-xs-l-45-f {
        margin-left: 45px !important;
    }

    .mg-xs-50 {
        margin: 50px;
    }

    .mg-xs-50-f {
        margin: 50px !important;
    }

    .mg-xs-y-50 {
        margin-top: 50px;
        margin-bottom: 50px;
    }

    .mg-xs-y-50-f {
        margin-top: 50px !important;
        margin-bottom: 50px !important;
    }

    .mg-xs-x-50 {
        margin-left: 50px;
        margin-right: 50px;
    }

    .mg-xs-x-50-f {
        margin-left: 50px !important;
        margin-right: 50px !important;
    }

    .mg-xs-t-50 {
        margin-top: 50px;
    }

    .mg-xs-r-50 {
        margin-right: 50px;
    }

    .mg-xs-b-50 {
        margin-bottom: 50px;
    }

    .mg-xs-l-50 {
        margin-left: 50px;
    }

    .mg-xs-t-50-f {
        margin-top: 50px !important;
    }

    .mg-xs-r-50-f {
        margin-right: 50px !important;
    }

    .mg-xs-b-50-f {
        margin-bottom: 50px !important;
    }

    .mg-xs-l-50-f {
        margin-left: 50px !important;
    }

    .mg-xs-55 {
        margin: 55px;
    }

    .mg-xs-55-f {
        margin: 55px !important;
    }

    .mg-xs-y-55 {
        margin-top: 55px;
        margin-bottom: 55px;
    }

    .mg-xs-y-55-f {
        margin-top: 55px !important;
        margin-bottom: 55px !important;
    }

    .mg-xs-x-55 {
        margin-left: 55px;
        margin-right: 55px;
    }

    .mg-xs-x-55-f {
        margin-left: 55px !important;
        margin-right: 55px !important;
    }

    .mg-xs-t-55 {
        margin-top: 55px;
    }

    .mg-xs-r-55 {
        margin-right: 55px;
    }

    .mg-xs-b-55 {
        margin-bottom: 55px;
    }

    .mg-xs-l-55 {
        margin-left: 55px;
    }

    .mg-xs-t-55-f {
        margin-top: 55px !important;
    }

    .mg-xs-r-55-f {
        margin-right: 55px !important;
    }

    .mg-xs-b-55-f {
        margin-bottom: 55px !important;
    }

    .mg-xs-l-55-f {
        margin-left: 55px !important;
    }

    .mg-xs-60 {
        margin: 60px;
    }

    .mg-xs-60-f {
        margin: 60px !important;
    }

    .mg-xs-y-60 {
        margin-top: 60px;
        margin-bottom: 60px;
    }

    .mg-xs-y-60-f {
        margin-top: 60px !important;
        margin-bottom: 60px !important;
    }

    .mg-xs-x-60 {
        margin-left: 60px;
        margin-right: 60px;
    }

    .mg-xs-x-60-f {
        margin-left: 60px !important;
        margin-right: 60px !important;
    }

    .mg-xs-t-60 {
        margin-top: 60px;
    }

    .mg-xs-r-60 {
        margin-right: 60px;
    }

    .mg-xs-b-60 {
        margin-bottom: 60px;
    }

    .mg-xs-l-60 {
        margin-left: 60px;
    }

    .mg-xs-t-60-f {
        margin-top: 60px !important;
    }

    .mg-xs-r-60-f {
        margin-right: 60px !important;
    }

    .mg-xs-b-60-f {
        margin-bottom: 60px !important;
    }

    .mg-xs-l-60-f {
        margin-left: 60px !important;
    }

    .mg-xs-65 {
        margin: 65px;
    }

    .mg-xs-65-f {
        margin: 65px !important;
    }

    .mg-xs-y-65 {
        margin-top: 65px;
        margin-bottom: 65px;
    }

    .mg-xs-y-65-f {
        margin-top: 65px !important;
        margin-bottom: 65px !important;
    }

    .mg-xs-x-65 {
        margin-left: 65px;
        margin-right: 65px;
    }

    .mg-xs-x-65-f {
        margin-left: 65px !important;
        margin-right: 65px !important;
    }

    .mg-xs-t-65 {
        margin-top: 65px;
    }

    .mg-xs-r-65 {
        margin-right: 65px;
    }

    .mg-xs-b-65 {
        margin-bottom: 65px;
    }

    .mg-xs-l-65 {
        margin-left: 65px;
    }

    .mg-xs-t-65-f {
        margin-top: 65px !important;
    }

    .mg-xs-r-65-f {
        margin-right: 65px !important;
    }

    .mg-xs-b-65-f {
        margin-bottom: 65px !important;
    }

    .mg-xs-l-65-f {
        margin-left: 65px !important;
    }

    .mg-xs-70 {
        margin: 70px;
    }

    .mg-xs-70-f {
        margin: 70px !important;
    }

    .mg-xs-y-70 {
        margin-top: 70px;
        margin-bottom: 70px;
    }

    .mg-xs-y-70-f {
        margin-top: 70px !important;
        margin-bottom: 70px !important;
    }

    .mg-xs-x-70 {
        margin-left: 70px;
        margin-right: 70px;
    }

    .mg-xs-x-70-f {
        margin-left: 70px !important;
        margin-right: 70px !important;
    }

    .mg-xs-t-70 {
        margin-top: 70px;
    }

    .mg-xs-r-70 {
        margin-right: 70px;
    }

    .mg-xs-b-70 {
        margin-bottom: 70px;
    }

    .mg-xs-l-70 {
        margin-left: 70px;
    }

    .mg-xs-t-70-f {
        margin-top: 70px !important;
    }

    .mg-xs-r-70-f {
        margin-right: 70px !important;
    }

    .mg-xs-b-70-f {
        margin-bottom: 70px !important;
    }

    .mg-xs-l-70-f {
        margin-left: 70px !important;
    }

    .mg-xs-75 {
        margin: 75px;
    }

    .mg-xs-75-f {
        margin: 75px !important;
    }

    .mg-xs-y-75 {
        margin-top: 75px;
        margin-bottom: 75px;
    }

    .mg-xs-y-75-f {
        margin-top: 75px !important;
        margin-bottom: 75px !important;
    }

    .mg-xs-x-75 {
        margin-left: 75px;
        margin-right: 75px;
    }

    .mg-xs-x-75-f {
        margin-left: 75px !important;
        margin-right: 75px !important;
    }

    .mg-xs-t-75 {
        margin-top: 75px;
    }

    .mg-xs-r-75 {
        margin-right: 75px;
    }

    .mg-xs-b-75 {
        margin-bottom: 75px;
    }

    .mg-xs-l-75 {
        margin-left: 75px;
    }

    .mg-xs-t-75-f {
        margin-top: 75px !important;
    }

    .mg-xs-r-75-f {
        margin-right: 75px !important;
    }

    .mg-xs-b-75-f {
        margin-bottom: 75px !important;
    }

    .mg-xs-l-75-f {
        margin-left: 75px !important;
    }

    .mg-xs-80 {
        margin: 80px;
    }

    .mg-xs-80-f {
        margin: 80px !important;
    }

    .mg-xs-y-80 {
        margin-top: 80px;
        margin-bottom: 80px;
    }

    .mg-xs-y-80-f {
        margin-top: 80px !important;
        margin-bottom: 80px !important;
    }

    .mg-xs-x-80 {
        margin-left: 80px;
        margin-right: 80px;
    }

    .mg-xs-x-80-f {
        margin-left: 80px !important;
        margin-right: 80px !important;
    }

    .mg-xs-t-80 {
        margin-top: 80px;
    }

    .mg-xs-r-80 {
        margin-right: 80px;
    }

    .mg-xs-b-80 {
        margin-bottom: 80px;
    }

    .mg-xs-l-80 {
        margin-left: 80px;
    }

    .mg-xs-t-80-f {
        margin-top: 80px !important;
    }

    .mg-xs-r-80-f {
        margin-right: 80px !important;
    }

    .mg-xs-b-80-f {
        margin-bottom: 80px !important;
    }

    .mg-xs-l-80-f {
        margin-left: 80px !important;
    }

    .mg-xs-85 {
        margin: 85px;
    }

    .mg-xs-85-f {
        margin: 85px !important;
    }

    .mg-xs-y-85 {
        margin-top: 85px;
        margin-bottom: 85px;
    }

    .mg-xs-y-85-f {
        margin-top: 85px !important;
        margin-bottom: 85px !important;
    }

    .mg-xs-x-85 {
        margin-left: 85px;
        margin-right: 85px;
    }

    .mg-xs-x-85-f {
        margin-left: 85px !important;
        margin-right: 85px !important;
    }

    .mg-xs-t-85 {
        margin-top: 85px;
    }

    .mg-xs-r-85 {
        margin-right: 85px;
    }

    .mg-xs-b-85 {
        margin-bottom: 85px;
    }

    .mg-xs-l-85 {
        margin-left: 85px;
    }

    .mg-xs-t-85-f {
        margin-top: 85px !important;
    }

    .mg-xs-r-85-f {
        margin-right: 85px !important;
    }

    .mg-xs-b-85-f {
        margin-bottom: 85px !important;
    }

    .mg-xs-l-85-f {
        margin-left: 85px !important;
    }

    .mg-xs-90 {
        margin: 90px;
    }

    .mg-xs-90-f {
        margin: 90px !important;
    }

    .mg-xs-y-90 {
        margin-top: 90px;
        margin-bottom: 90px;
    }

    .mg-xs-y-90-f {
        margin-top: 90px !important;
        margin-bottom: 90px !important;
    }

    .mg-xs-x-90 {
        margin-left: 90px;
        margin-right: 90px;
    }

    .mg-xs-x-90-f {
        margin-left: 90px !important;
        margin-right: 90px !important;
    }

    .mg-xs-t-90 {
        margin-top: 90px;
    }

    .mg-xs-r-90 {
        margin-right: 90px;
    }

    .mg-xs-b-90 {
        margin-bottom: 90px;
    }

    .mg-xs-l-90 {
        margin-left: 90px;
    }

    .mg-xs-t-90-f {
        margin-top: 90px !important;
    }

    .mg-xs-r-90-f {
        margin-right: 90px !important;
    }

    .mg-xs-b-90-f {
        margin-bottom: 90px !important;
    }

    .mg-xs-l-90-f {
        margin-left: 90px !important;
    }

    .mg-xs-95 {
        margin: 95px;
    }

    .mg-xs-95-f {
        margin: 95px !important;
    }

    .mg-xs-y-95 {
        margin-top: 95px;
        margin-bottom: 95px;
    }

    .mg-xs-y-95-f {
        margin-top: 95px !important;
        margin-bottom: 95px !important;
    }

    .mg-xs-x-95 {
        margin-left: 95px;
        margin-right: 95px;
    }

    .mg-xs-x-95-f {
        margin-left: 95px !important;
        margin-right: 95px !important;
    }

    .mg-xs-t-95 {
        margin-top: 95px;
    }

    .mg-xs-r-95 {
        margin-right: 95px;
    }

    .mg-xs-b-95 {
        margin-bottom: 95px;
    }

    .mg-xs-l-95 {
        margin-left: 95px;
    }

    .mg-xs-t-95-f {
        margin-top: 95px !important;
    }

    .mg-xs-r-95-f {
        margin-right: 95px !important;
    }

    .mg-xs-b-95-f {
        margin-bottom: 95px !important;
    }

    .mg-xs-l-95-f {
        margin-left: 95px !important;
    }

    .mg-xs-100 {
        margin: 100px;
    }

    .mg-xs-100-f {
        margin: 100px !important;
    }

    .mg-xs-y-100 {
        margin-top: 100px;
        margin-bottom: 100px;
    }

    .mg-xs-y-100-f {
        margin-top: 100px !important;
        margin-bottom: 100px !important;
    }

    .mg-xs-x-100 {
        margin-left: 100px;
        margin-right: 100px;
    }

    .mg-xs-x-100-f {
        margin-left: 100px !important;
        margin-right: 100px !important;
    }

    .mg-xs-t-100 {
        margin-top: 100px;
    }

    .mg-xs-r-100 {
        margin-right: 100px;
    }

    .mg-xs-b-100 {
        margin-bottom: 100px;
    }

    .mg-xs-l-100 {
        margin-left: 100px;
    }

    .mg-xs-t-100-f {
        margin-top: 100px !important;
    }

    .mg-xs-r-100-f {
        margin-right: 100px !important;
    }

    .mg-xs-b-100-f {
        margin-bottom: 100px !important;
    }

    .mg-xs-l-100-f {
        margin-left: 100px !important;
    }

    .mg-xs-t-auto {
        margin-top: auto;
    }

    .mg-xs-r-auto {
        margin-right: auto;
    }

    .mg-xs-b-auto {
        margin-bottom: auto;
    }

    .mg-xs-l-auto {
        margin-left: auto;
    }

    .mg-xs-auto {
        margin: auto;
    }

    .mg-xs-x-auto {
        margin-left: auto;
        margin-right: auto;
    }
}

@media (min-width: 576px) {
    .mg-sm-0 {
        margin: 0px;
    }

    .mg-sm-0-f {
        margin: 0px !important;
    }

    .mg-sm-y-0 {
        margin-top: 0px;
        margin-bottom: 0px;
    }

    .mg-sm-y-0-f {
        margin-top: 0px !important;
        margin-bottom: 0px !important;
    }

    .mg-sm-x-0 {
        margin-left: 0px;
        margin-right: 0px;
    }

    .mg-sm-x-0-f {
        margin-left: 0px !important;
        margin-right: 0px !important;
    }

    .mg-sm-t-0 {
        margin-top: 0px;
    }

    .mg-sm-r-0 {
        margin-right: 0px;
    }

    .mg-sm-b-0 {
        margin-bottom: 0px;
    }

    .mg-sm-l-0 {
        margin-left: 0px;
    }

    .mg-sm-t-0-f {
        margin-top: 0px !important;
    }

    .mg-sm-r-0-f {
        margin-right: 0px !important;
    }

    .mg-sm-b-0-f {
        margin-bottom: 0px !important;
    }

    .mg-sm-l-0-f {
        margin-left: 0px !important;
    }

    .mg-sm-1 {
        margin: 1px;
    }

    .mg-sm-1-f {
        margin: 1px !important;
    }

    .mg-sm-y-1 {
        margin-top: 1px;
        margin-bottom: 1px;
    }

    .mg-sm-y-1-f {
        margin-top: 1px !important;
        margin-bottom: 1px !important;
    }

    .mg-sm-x-1 {
        margin-left: 1px;
        margin-right: 1px;
    }

    .mg-sm-x-1-f {
        margin-left: 1px !important;
        margin-right: 1px !important;
    }

    .mg-sm-t-1 {
        margin-top: 1px;
    }

    .mg-sm-r-1 {
        margin-right: 1px;
    }

    .mg-sm-b-1 {
        margin-bottom: 1px;
    }

    .mg-sm-l-1 {
        margin-left: 1px;
    }

    .mg-sm-t-1-f {
        margin-top: 1px !important;
    }

    .mg-sm-r-1-f {
        margin-right: 1px !important;
    }

    .mg-sm-b-1-f {
        margin-bottom: 1px !important;
    }

    .mg-sm-l-1-f {
        margin-left: 1px !important;
    }

    .mg-sm-2 {
        margin: 2px;
    }

    .mg-sm-2-f {
        margin: 2px !important;
    }

    .mg-sm-y-2 {
        margin-top: 2px;
        margin-bottom: 2px;
    }

    .mg-sm-y-2-f {
        margin-top: 2px !important;
        margin-bottom: 2px !important;
    }

    .mg-sm-x-2 {
        margin-left: 2px;
        margin-right: 2px;
    }

    .mg-sm-x-2-f {
        margin-left: 2px !important;
        margin-right: 2px !important;
    }

    .mg-sm-t-2 {
        margin-top: 2px;
    }

    .mg-sm-r-2 {
        margin-right: 2px;
    }

    .mg-sm-b-2 {
        margin-bottom: 2px;
    }

    .mg-sm-l-2 {
        margin-left: 2px;
    }

    .mg-sm-t-2-f {
        margin-top: 2px !important;
    }

    .mg-sm-r-2-f {
        margin-right: 2px !important;
    }

    .mg-sm-b-2-f {
        margin-bottom: 2px !important;
    }

    .mg-sm-l-2-f {
        margin-left: 2px !important;
    }

    .mg-sm-3 {
        margin: 3px;
    }

    .mg-sm-3-f {
        margin: 3px !important;
    }

    .mg-sm-y-3 {
        margin-top: 3px;
        margin-bottom: 3px;
    }

    .mg-sm-y-3-f {
        margin-top: 3px !important;
        margin-bottom: 3px !important;
    }

    .mg-sm-x-3 {
        margin-left: 3px;
        margin-right: 3px;
    }

    .mg-sm-x-3-f {
        margin-left: 3px !important;
        margin-right: 3px !important;
    }

    .mg-sm-t-3 {
        margin-top: 3px;
    }

    .mg-sm-r-3 {
        margin-right: 3px;
    }

    .mg-sm-b-3 {
        margin-bottom: 3px;
    }

    .mg-sm-l-3 {
        margin-left: 3px;
    }

    .mg-sm-t-3-f {
        margin-top: 3px !important;
    }

    .mg-sm-r-3-f {
        margin-right: 3px !important;
    }

    .mg-sm-b-3-f {
        margin-bottom: 3px !important;
    }

    .mg-sm-l-3-f {
        margin-left: 3px !important;
    }

    .mg-sm-4 {
        margin: 4px;
    }

    .mg-sm-4-f {
        margin: 4px !important;
    }

    .mg-sm-y-4 {
        margin-top: 4px;
        margin-bottom: 4px;
    }

    .mg-sm-y-4-f {
        margin-top: 4px !important;
        margin-bottom: 4px !important;
    }

    .mg-sm-x-4 {
        margin-left: 4px;
        margin-right: 4px;
    }

    .mg-sm-x-4-f {
        margin-left: 4px !important;
        margin-right: 4px !important;
    }

    .mg-sm-t-4 {
        margin-top: 4px;
    }

    .mg-sm-r-4 {
        margin-right: 4px;
    }

    .mg-sm-b-4 {
        margin-bottom: 4px;
    }

    .mg-sm-l-4 {
        margin-left: 4px;
    }

    .mg-sm-t-4-f {
        margin-top: 4px !important;
    }

    .mg-sm-r-4-f {
        margin-right: 4px !important;
    }

    .mg-sm-b-4-f {
        margin-bottom: 4px !important;
    }

    .mg-sm-l-4-f {
        margin-left: 4px !important;
    }

    .mg-sm-5 {
        margin: 5px;
    }

    .mg-sm-5-f {
        margin: 5px !important;
    }

    .mg-sm-y-5 {
        margin-top: 5px;
        margin-bottom: 5px;
    }

    .mg-sm-y-5-f {
        margin-top: 5px !important;
        margin-bottom: 5px !important;
    }

    .mg-sm-x-5 {
        margin-left: 5px;
        margin-right: 5px;
    }

    .mg-sm-x-5-f {
        margin-left: 5px !important;
        margin-right: 5px !important;
    }

    .mg-sm-t-5 {
        margin-top: 5px;
    }

    .mg-sm-r-5 {
        margin-right: 5px;
    }

    .mg-sm-b-5 {
        margin-bottom: 5px;
    }

    .mg-sm-l-5 {
        margin-left: 5px;
    }

    .mg-sm-t-5-f {
        margin-top: 5px !important;
    }

    .mg-sm-r-5-f {
        margin-right: 5px !important;
    }

    .mg-sm-b-5-f {
        margin-bottom: 5px !important;
    }

    .mg-sm-l-5-f {
        margin-left: 5px !important;
    }

    .mg-sm-6 {
        margin: 6px;
    }

    .mg-sm-6-f {
        margin: 6px !important;
    }

    .mg-sm-y-6 {
        margin-top: 6px;
        margin-bottom: 6px;
    }

    .mg-sm-y-6-f {
        margin-top: 6px !important;
        margin-bottom: 6px !important;
    }

    .mg-sm-x-6 {
        margin-left: 6px;
        margin-right: 6px;
    }

    .mg-sm-x-6-f {
        margin-left: 6px !important;
        margin-right: 6px !important;
    }

    .mg-sm-t-6 {
        margin-top: 6px;
    }

    .mg-sm-r-6 {
        margin-right: 6px;
    }

    .mg-sm-b-6 {
        margin-bottom: 6px;
    }

    .mg-sm-l-6 {
        margin-left: 6px;
    }

    .mg-sm-t-6-f {
        margin-top: 6px !important;
    }

    .mg-sm-r-6-f {
        margin-right: 6px !important;
    }

    .mg-sm-b-6-f {
        margin-bottom: 6px !important;
    }

    .mg-sm-l-6-f {
        margin-left: 6px !important;
    }

    .mg-sm-7 {
        margin: 7px;
    }

    .mg-sm-7-f {
        margin: 7px !important;
    }

    .mg-sm-y-7 {
        margin-top: 7px;
        margin-bottom: 7px;
    }

    .mg-sm-y-7-f {
        margin-top: 7px !important;
        margin-bottom: 7px !important;
    }

    .mg-sm-x-7 {
        margin-left: 7px;
        margin-right: 7px;
    }

    .mg-sm-x-7-f {
        margin-left: 7px !important;
        margin-right: 7px !important;
    }

    .mg-sm-t-7 {
        margin-top: 7px;
    }

    .mg-sm-r-7 {
        margin-right: 7px;
    }

    .mg-sm-b-7 {
        margin-bottom: 7px;
    }

    .mg-sm-l-7 {
        margin-left: 7px;
    }

    .mg-sm-t-7-f {
        margin-top: 7px !important;
    }

    .mg-sm-r-7-f {
        margin-right: 7px !important;
    }

    .mg-sm-b-7-f {
        margin-bottom: 7px !important;
    }

    .mg-sm-l-7-f {
        margin-left: 7px !important;
    }

    .mg-sm-8 {
        margin: 8px;
    }

    .mg-sm-8-f {
        margin: 8px !important;
    }

    .mg-sm-y-8 {
        margin-top: 8px;
        margin-bottom: 8px;
    }

    .mg-sm-y-8-f {
        margin-top: 8px !important;
        margin-bottom: 8px !important;
    }

    .mg-sm-x-8 {
        margin-left: 8px;
        margin-right: 8px;
    }

    .mg-sm-x-8-f {
        margin-left: 8px !important;
        margin-right: 8px !important;
    }

    .mg-sm-t-8 {
        margin-top: 8px;
    }

    .mg-sm-r-8 {
        margin-right: 8px;
    }

    .mg-sm-b-8 {
        margin-bottom: 8px;
    }

    .mg-sm-l-8 {
        margin-left: 8px;
    }

    .mg-sm-t-8-f {
        margin-top: 8px !important;
    }

    .mg-sm-r-8-f {
        margin-right: 8px !important;
    }

    .mg-sm-b-8-f {
        margin-bottom: 8px !important;
    }

    .mg-sm-l-8-f {
        margin-left: 8px !important;
    }

    .mg-sm-9 {
        margin: 9px;
    }

    .mg-sm-9-f {
        margin: 9px !important;
    }

    .mg-sm-y-9 {
        margin-top: 9px;
        margin-bottom: 9px;
    }

    .mg-sm-y-9-f {
        margin-top: 9px !important;
        margin-bottom: 9px !important;
    }

    .mg-sm-x-9 {
        margin-left: 9px;
        margin-right: 9px;
    }

    .mg-sm-x-9-f {
        margin-left: 9px !important;
        margin-right: 9px !important;
    }

    .mg-sm-t-9 {
        margin-top: 9px;
    }

    .mg-sm-r-9 {
        margin-right: 9px;
    }

    .mg-sm-b-9 {
        margin-bottom: 9px;
    }

    .mg-sm-l-9 {
        margin-left: 9px;
    }

    .mg-sm-t-9-f {
        margin-top: 9px !important;
    }

    .mg-sm-r-9-f {
        margin-right: 9px !important;
    }

    .mg-sm-b-9-f {
        margin-bottom: 9px !important;
    }

    .mg-sm-l-9-f {
        margin-left: 9px !important;
    }

    .mg-sm-10 {
        margin: 10px;
    }

    .mg-sm-10-f {
        margin: 10px !important;
    }

    .mg-sm-y-10 {
        margin-top: 10px;
        margin-bottom: 10px;
    }

    .mg-sm-y-10-f {
        margin-top: 10px !important;
        margin-bottom: 10px !important;
    }

    .mg-sm-x-10 {
        margin-left: 10px;
        margin-right: 10px;
    }

    .mg-sm-x-10-f {
        margin-left: 10px !important;
        margin-right: 10px !important;
    }

    .mg-sm-t-10 {
        margin-top: 10px;
    }

    .mg-sm-r-10 {
        margin-right: 10px;
    }

    .mg-sm-b-10 {
        margin-bottom: 10px;
    }

    .mg-sm-l-10 {
        margin-left: 10px;
    }

    .mg-sm-t-10-f {
        margin-top: 10px !important;
    }

    .mg-sm-r-10-f {
        margin-right: 10px !important;
    }

    .mg-sm-b-10-f {
        margin-bottom: 10px !important;
    }

    .mg-sm-l-10-f {
        margin-left: 10px !important;
    }

    .mg-sm-15 {
        margin: 15px;
    }

    .mg-sm-15-f {
        margin: 15px !important;
    }

    .mg-sm-y-15 {
        margin-top: 15px;
        margin-bottom: 15px;
    }

    .mg-sm-y-15-f {
        margin-top: 15px !important;
        margin-bottom: 15px !important;
    }

    .mg-sm-x-15 {
        margin-left: 15px;
        margin-right: 15px;
    }

    .mg-sm-x-15-f {
        margin-left: 15px !important;
        margin-right: 15px !important;
    }

    .mg-sm-t-15 {
        margin-top: 15px;
    }

    .mg-sm-r-15 {
        margin-right: 15px;
    }

    .mg-sm-b-15 {
        margin-bottom: 15px;
    }

    .mg-sm-l-15 {
        margin-left: 15px;
    }

    .mg-sm-t-15-f {
        margin-top: 15px !important;
    }

    .mg-sm-r-15-f {
        margin-right: 15px !important;
    }

    .mg-sm-b-15-f {
        margin-bottom: 15px !important;
    }

    .mg-sm-l-15-f {
        margin-left: 15px !important;
    }

    .mg-sm-20 {
        margin: 20px;
    }

    .mg-sm-20-f {
        margin: 20px !important;
    }

    .mg-sm-y-20 {
        margin-top: 20px;
        margin-bottom: 20px;
    }

    .mg-sm-y-20-f {
        margin-top: 20px !important;
        margin-bottom: 20px !important;
    }

    .mg-sm-x-20 {
        margin-left: 20px;
        margin-right: 20px;
    }

    .mg-sm-x-20-f {
        margin-left: 20px !important;
        margin-right: 20px !important;
    }

    .mg-sm-t-20 {
        margin-top: 20px;
    }

    .mg-sm-r-20 {
        margin-right: 20px;
    }

    .mg-sm-b-20 {
        margin-bottom: 20px;
    }

    .mg-sm-l-20 {
        margin-left: 20px;
    }

    .mg-sm-t-20-f {
        margin-top: 20px !important;
    }

    .mg-sm-r-20-f {
        margin-right: 20px !important;
    }

    .mg-sm-b-20-f {
        margin-bottom: 20px !important;
    }

    .mg-sm-l-20-f {
        margin-left: 20px !important;
    }

    .mg-sm-25 {
        margin: 25px;
    }

    .mg-sm-25-f {
        margin: 25px !important;
    }

    .mg-sm-y-25 {
        margin-top: 25px;
        margin-bottom: 25px;
    }

    .mg-sm-y-25-f {
        margin-top: 25px !important;
        margin-bottom: 25px !important;
    }

    .mg-sm-x-25 {
        margin-left: 25px;
        margin-right: 25px;
    }

    .mg-sm-x-25-f {
        margin-left: 25px !important;
        margin-right: 25px !important;
    }

    .mg-sm-t-25 {
        margin-top: 25px;
    }

    .mg-sm-r-25 {
        margin-right: 25px;
    }

    .mg-sm-b-25 {
        margin-bottom: 25px;
    }

    .mg-sm-l-25 {
        margin-left: 25px;
    }

    .mg-sm-t-25-f {
        margin-top: 25px !important;
    }

    .mg-sm-r-25-f {
        margin-right: 25px !important;
    }

    .mg-sm-b-25-f {
        margin-bottom: 25px !important;
    }

    .mg-sm-l-25-f {
        margin-left: 25px !important;
    }

    .mg-sm-30 {
        margin: 30px;
    }

    .mg-sm-30-f {
        margin: 30px !important;
    }

    .mg-sm-y-30 {
        margin-top: 30px;
        margin-bottom: 30px;
    }

    .mg-sm-y-30-f {
        margin-top: 30px !important;
        margin-bottom: 30px !important;
    }

    .mg-sm-x-30 {
        margin-left: 30px;
        margin-right: 30px;
    }

    .mg-sm-x-30-f {
        margin-left: 30px !important;
        margin-right: 30px !important;
    }

    .mg-sm-t-30 {
        margin-top: 30px;
    }

    .mg-sm-r-30 {
        margin-right: 30px;
    }

    .mg-sm-b-30 {
        margin-bottom: 30px;
    }

    .mg-sm-l-30 {
        margin-left: 30px;
    }

    .mg-sm-t-30-f {
        margin-top: 30px !important;
    }

    .mg-sm-r-30-f {
        margin-right: 30px !important;
    }

    .mg-sm-b-30-f {
        margin-bottom: 30px !important;
    }

    .mg-sm-l-30-f {
        margin-left: 30px !important;
    }

    .mg-sm-35 {
        margin: 35px;
    }

    .mg-sm-35-f {
        margin: 35px !important;
    }

    .mg-sm-y-35 {
        margin-top: 35px;
        margin-bottom: 35px;
    }

    .mg-sm-y-35-f {
        margin-top: 35px !important;
        margin-bottom: 35px !important;
    }

    .mg-sm-x-35 {
        margin-left: 35px;
        margin-right: 35px;
    }

    .mg-sm-x-35-f {
        margin-left: 35px !important;
        margin-right: 35px !important;
    }

    .mg-sm-t-35 {
        margin-top: 35px;
    }

    .mg-sm-r-35 {
        margin-right: 35px;
    }

    .mg-sm-b-35 {
        margin-bottom: 35px;
    }

    .mg-sm-l-35 {
        margin-left: 35px;
    }

    .mg-sm-t-35-f {
        margin-top: 35px !important;
    }

    .mg-sm-r-35-f {
        margin-right: 35px !important;
    }

    .mg-sm-b-35-f {
        margin-bottom: 35px !important;
    }

    .mg-sm-l-35-f {
        margin-left: 35px !important;
    }

    .mg-sm-40 {
        margin: 40px;
    }

    .mg-sm-40-f {
        margin: 40px !important;
    }

    .mg-sm-y-40 {
        margin-top: 40px;
        margin-bottom: 40px;
    }

    .mg-sm-y-40-f {
        margin-top: 40px !important;
        margin-bottom: 40px !important;
    }

    .mg-sm-x-40 {
        margin-left: 40px;
        margin-right: 40px;
    }

    .mg-sm-x-40-f {
        margin-left: 40px !important;
        margin-right: 40px !important;
    }

    .mg-sm-t-40 {
        margin-top: 40px;
    }

    .mg-sm-r-40 {
        margin-right: 40px;
    }

    .mg-sm-b-40 {
        margin-bottom: 40px;
    }

    .mg-sm-l-40 {
        margin-left: 40px;
    }

    .mg-sm-t-40-f {
        margin-top: 40px !important;
    }

    .mg-sm-r-40-f {
        margin-right: 40px !important;
    }

    .mg-sm-b-40-f {
        margin-bottom: 40px !important;
    }

    .mg-sm-l-40-f {
        margin-left: 40px !important;
    }

    .mg-sm-45 {
        margin: 45px;
    }

    .mg-sm-45-f {
        margin: 45px !important;
    }

    .mg-sm-y-45 {
        margin-top: 45px;
        margin-bottom: 45px;
    }

    .mg-sm-y-45-f {
        margin-top: 45px !important;
        margin-bottom: 45px !important;
    }

    .mg-sm-x-45 {
        margin-left: 45px;
        margin-right: 45px;
    }

    .mg-sm-x-45-f {
        margin-left: 45px !important;
        margin-right: 45px !important;
    }

    .mg-sm-t-45 {
        margin-top: 45px;
    }

    .mg-sm-r-45 {
        margin-right: 45px;
    }

    .mg-sm-b-45 {
        margin-bottom: 45px;
    }

    .mg-sm-l-45 {
        margin-left: 45px;
    }

    .mg-sm-t-45-f {
        margin-top: 45px !important;
    }

    .mg-sm-r-45-f {
        margin-right: 45px !important;
    }

    .mg-sm-b-45-f {
        margin-bottom: 45px !important;
    }

    .mg-sm-l-45-f {
        margin-left: 45px !important;
    }

    .mg-sm-50 {
        margin: 50px;
    }

    .mg-sm-50-f {
        margin: 50px !important;
    }

    .mg-sm-y-50 {
        margin-top: 50px;
        margin-bottom: 50px;
    }

    .mg-sm-y-50-f {
        margin-top: 50px !important;
        margin-bottom: 50px !important;
    }

    .mg-sm-x-50 {
        margin-left: 50px;
        margin-right: 50px;
    }

    .mg-sm-x-50-f {
        margin-left: 50px !important;
        margin-right: 50px !important;
    }

    .mg-sm-t-50 {
        margin-top: 50px;
    }

    .mg-sm-r-50 {
        margin-right: 50px;
    }

    .mg-sm-b-50 {
        margin-bottom: 50px;
    }

    .mg-sm-l-50 {
        margin-left: 50px;
    }

    .mg-sm-t-50-f {
        margin-top: 50px !important;
    }

    .mg-sm-r-50-f {
        margin-right: 50px !important;
    }

    .mg-sm-b-50-f {
        margin-bottom: 50px !important;
    }

    .mg-sm-l-50-f {
        margin-left: 50px !important;
    }

    .mg-sm-55 {
        margin: 55px;
    }

    .mg-sm-55-f {
        margin: 55px !important;
    }

    .mg-sm-y-55 {
        margin-top: 55px;
        margin-bottom: 55px;
    }

    .mg-sm-y-55-f {
        margin-top: 55px !important;
        margin-bottom: 55px !important;
    }

    .mg-sm-x-55 {
        margin-left: 55px;
        margin-right: 55px;
    }

    .mg-sm-x-55-f {
        margin-left: 55px !important;
        margin-right: 55px !important;
    }

    .mg-sm-t-55 {
        margin-top: 55px;
    }

    .mg-sm-r-55 {
        margin-right: 55px;
    }

    .mg-sm-b-55 {
        margin-bottom: 55px;
    }

    .mg-sm-l-55 {
        margin-left: 55px;
    }

    .mg-sm-t-55-f {
        margin-top: 55px !important;
    }

    .mg-sm-r-55-f {
        margin-right: 55px !important;
    }

    .mg-sm-b-55-f {
        margin-bottom: 55px !important;
    }

    .mg-sm-l-55-f {
        margin-left: 55px !important;
    }

    .mg-sm-60 {
        margin: 60px;
    }

    .mg-sm-60-f {
        margin: 60px !important;
    }

    .mg-sm-y-60 {
        margin-top: 60px;
        margin-bottom: 60px;
    }

    .mg-sm-y-60-f {
        margin-top: 60px !important;
        margin-bottom: 60px !important;
    }

    .mg-sm-x-60 {
        margin-left: 60px;
        margin-right: 60px;
    }

    .mg-sm-x-60-f {
        margin-left: 60px !important;
        margin-right: 60px !important;
    }

    .mg-sm-t-60 {
        margin-top: 60px;
    }

    .mg-sm-r-60 {
        margin-right: 60px;
    }

    .mg-sm-b-60 {
        margin-bottom: 60px;
    }

    .mg-sm-l-60 {
        margin-left: 60px;
    }

    .mg-sm-t-60-f {
        margin-top: 60px !important;
    }

    .mg-sm-r-60-f {
        margin-right: 60px !important;
    }

    .mg-sm-b-60-f {
        margin-bottom: 60px !important;
    }

    .mg-sm-l-60-f {
        margin-left: 60px !important;
    }

    .mg-sm-65 {
        margin: 65px;
    }

    .mg-sm-65-f {
        margin: 65px !important;
    }

    .mg-sm-y-65 {
        margin-top: 65px;
        margin-bottom: 65px;
    }

    .mg-sm-y-65-f {
        margin-top: 65px !important;
        margin-bottom: 65px !important;
    }

    .mg-sm-x-65 {
        margin-left: 65px;
        margin-right: 65px;
    }

    .mg-sm-x-65-f {
        margin-left: 65px !important;
        margin-right: 65px !important;
    }

    .mg-sm-t-65 {
        margin-top: 65px;
    }

    .mg-sm-r-65 {
        margin-right: 65px;
    }

    .mg-sm-b-65 {
        margin-bottom: 65px;
    }

    .mg-sm-l-65 {
        margin-left: 65px;
    }

    .mg-sm-t-65-f {
        margin-top: 65px !important;
    }

    .mg-sm-r-65-f {
        margin-right: 65px !important;
    }

    .mg-sm-b-65-f {
        margin-bottom: 65px !important;
    }

    .mg-sm-l-65-f {
        margin-left: 65px !important;
    }

    .mg-sm-70 {
        margin: 70px;
    }

    .mg-sm-70-f {
        margin: 70px !important;
    }

    .mg-sm-y-70 {
        margin-top: 70px;
        margin-bottom: 70px;
    }

    .mg-sm-y-70-f {
        margin-top: 70px !important;
        margin-bottom: 70px !important;
    }

    .mg-sm-x-70 {
        margin-left: 70px;
        margin-right: 70px;
    }

    .mg-sm-x-70-f {
        margin-left: 70px !important;
        margin-right: 70px !important;
    }

    .mg-sm-t-70 {
        margin-top: 70px;
    }

    .mg-sm-r-70 {
        margin-right: 70px;
    }

    .mg-sm-b-70 {
        margin-bottom: 70px;
    }

    .mg-sm-l-70 {
        margin-left: 70px;
    }

    .mg-sm-t-70-f {
        margin-top: 70px !important;
    }

    .mg-sm-r-70-f {
        margin-right: 70px !important;
    }

    .mg-sm-b-70-f {
        margin-bottom: 70px !important;
    }

    .mg-sm-l-70-f {
        margin-left: 70px !important;
    }

    .mg-sm-75 {
        margin: 75px;
    }

    .mg-sm-75-f {
        margin: 75px !important;
    }

    .mg-sm-y-75 {
        margin-top: 75px;
        margin-bottom: 75px;
    }

    .mg-sm-y-75-f {
        margin-top: 75px !important;
        margin-bottom: 75px !important;
    }

    .mg-sm-x-75 {
        margin-left: 75px;
        margin-right: 75px;
    }

    .mg-sm-x-75-f {
        margin-left: 75px !important;
        margin-right: 75px !important;
    }

    .mg-sm-t-75 {
        margin-top: 75px;
    }

    .mg-sm-r-75 {
        margin-right: 75px;
    }

    .mg-sm-b-75 {
        margin-bottom: 75px;
    }

    .mg-sm-l-75 {
        margin-left: 75px;
    }

    .mg-sm-t-75-f {
        margin-top: 75px !important;
    }

    .mg-sm-r-75-f {
        margin-right: 75px !important;
    }

    .mg-sm-b-75-f {
        margin-bottom: 75px !important;
    }

    .mg-sm-l-75-f {
        margin-left: 75px !important;
    }

    .mg-sm-80 {
        margin: 80px;
    }

    .mg-sm-80-f {
        margin: 80px !important;
    }

    .mg-sm-y-80 {
        margin-top: 80px;
        margin-bottom: 80px;
    }

    .mg-sm-y-80-f {
        margin-top: 80px !important;
        margin-bottom: 80px !important;
    }

    .mg-sm-x-80 {
        margin-left: 80px;
        margin-right: 80px;
    }

    .mg-sm-x-80-f {
        margin-left: 80px !important;
        margin-right: 80px !important;
    }

    .mg-sm-t-80 {
        margin-top: 80px;
    }

    .mg-sm-r-80 {
        margin-right: 80px;
    }

    .mg-sm-b-80 {
        margin-bottom: 80px;
    }

    .mg-sm-l-80 {
        margin-left: 80px;
    }

    .mg-sm-t-80-f {
        margin-top: 80px !important;
    }

    .mg-sm-r-80-f {
        margin-right: 80px !important;
    }

    .mg-sm-b-80-f {
        margin-bottom: 80px !important;
    }

    .mg-sm-l-80-f {
        margin-left: 80px !important;
    }

    .mg-sm-85 {
        margin: 85px;
    }

    .mg-sm-85-f {
        margin: 85px !important;
    }

    .mg-sm-y-85 {
        margin-top: 85px;
        margin-bottom: 85px;
    }

    .mg-sm-y-85-f {
        margin-top: 85px !important;
        margin-bottom: 85px !important;
    }

    .mg-sm-x-85 {
        margin-left: 85px;
        margin-right: 85px;
    }

    .mg-sm-x-85-f {
        margin-left: 85px !important;
        margin-right: 85px !important;
    }

    .mg-sm-t-85 {
        margin-top: 85px;
    }

    .mg-sm-r-85 {
        margin-right: 85px;
    }

    .mg-sm-b-85 {
        margin-bottom: 85px;
    }

    .mg-sm-l-85 {
        margin-left: 85px;
    }

    .mg-sm-t-85-f {
        margin-top: 85px !important;
    }

    .mg-sm-r-85-f {
        margin-right: 85px !important;
    }

    .mg-sm-b-85-f {
        margin-bottom: 85px !important;
    }

    .mg-sm-l-85-f {
        margin-left: 85px !important;
    }

    .mg-sm-90 {
        margin: 90px;
    }

    .mg-sm-90-f {
        margin: 90px !important;
    }

    .mg-sm-y-90 {
        margin-top: 90px;
        margin-bottom: 90px;
    }

    .mg-sm-y-90-f {
        margin-top: 90px !important;
        margin-bottom: 90px !important;
    }

    .mg-sm-x-90 {
        margin-left: 90px;
        margin-right: 90px;
    }

    .mg-sm-x-90-f {
        margin-left: 90px !important;
        margin-right: 90px !important;
    }

    .mg-sm-t-90 {
        margin-top: 90px;
    }

    .mg-sm-r-90 {
        margin-right: 90px;
    }

    .mg-sm-b-90 {
        margin-bottom: 90px;
    }

    .mg-sm-l-90 {
        margin-left: 90px;
    }

    .mg-sm-t-90-f {
        margin-top: 90px !important;
    }

    .mg-sm-r-90-f {
        margin-right: 90px !important;
    }

    .mg-sm-b-90-f {
        margin-bottom: 90px !important;
    }

    .mg-sm-l-90-f {
        margin-left: 90px !important;
    }

    .mg-sm-95 {
        margin: 95px;
    }

    .mg-sm-95-f {
        margin: 95px !important;
    }

    .mg-sm-y-95 {
        margin-top: 95px;
        margin-bottom: 95px;
    }

    .mg-sm-y-95-f {
        margin-top: 95px !important;
        margin-bottom: 95px !important;
    }

    .mg-sm-x-95 {
        margin-left: 95px;
        margin-right: 95px;
    }

    .mg-sm-x-95-f {
        margin-left: 95px !important;
        margin-right: 95px !important;
    }

    .mg-sm-t-95 {
        margin-top: 95px;
    }

    .mg-sm-r-95 {
        margin-right: 95px;
    }

    .mg-sm-b-95 {
        margin-bottom: 95px;
    }

    .mg-sm-l-95 {
        margin-left: 95px;
    }

    .mg-sm-t-95-f {
        margin-top: 95px !important;
    }

    .mg-sm-r-95-f {
        margin-right: 95px !important;
    }

    .mg-sm-b-95-f {
        margin-bottom: 95px !important;
    }

    .mg-sm-l-95-f {
        margin-left: 95px !important;
    }

    .mg-sm-100 {
        margin: 100px;
    }

    .mg-sm-100-f {
        margin: 100px !important;
    }

    .mg-sm-y-100 {
        margin-top: 100px;
        margin-bottom: 100px;
    }

    .mg-sm-y-100-f {
        margin-top: 100px !important;
        margin-bottom: 100px !important;
    }

    .mg-sm-x-100 {
        margin-left: 100px;
        margin-right: 100px;
    }

    .mg-sm-x-100-f {
        margin-left: 100px !important;
        margin-right: 100px !important;
    }

    .mg-sm-t-100 {
        margin-top: 100px;
    }

    .mg-sm-r-100 {
        margin-right: 100px;
    }

    .mg-sm-b-100 {
        margin-bottom: 100px;
    }

    .mg-sm-l-100 {
        margin-left: 100px;
    }

    .mg-sm-t-100-f {
        margin-top: 100px !important;
    }

    .mg-sm-r-100-f {
        margin-right: 100px !important;
    }

    .mg-sm-b-100-f {
        margin-bottom: 100px !important;
    }

    .mg-sm-l-100-f {
        margin-left: 100px !important;
    }

    .mg-sm-t-auto {
        margin-top: auto;
    }

    .mg-sm-r-auto {
        margin-right: auto;
    }

    .mg-sm-b-auto {
        margin-bottom: auto;
    }

    .mg-sm-l-auto {
        margin-left: auto;
    }

    .mg-sm-auto {
        margin: auto;
    }

    .mg-sm-x-auto {
        margin-left: auto;
        margin-right: auto;
    }
}

@media (min-width: 768px) {
    .mg-md-0 {
        margin: 0px;
    }

    .mg-md-0-f {
        margin: 0px !important;
    }

    .mg-md-y-0 {
        margin-top: 0px;
        margin-bottom: 0px;
    }

    .mg-md-y-0-f {
        margin-top: 0px !important;
        margin-bottom: 0px !important;
    }

    .mg-md-x-0 {
        margin-left: 0px;
        margin-right: 0px;
    }

    .mg-md-x-0-f {
        margin-left: 0px !important;
        margin-right: 0px !important;
    }

    .mg-md-t-0 {
        margin-top: 0px;
    }

    .mg-md-r-0 {
        margin-right: 0px;
    }

    .mg-md-b-0 {
        margin-bottom: 0px;
    }

    .mg-md-l-0 {
        margin-left: 0px;
    }

    .mg-md-t-0-f {
        margin-top: 0px !important;
    }

    .mg-md-r-0-f {
        margin-right: 0px !important;
    }

    .mg-md-b-0-f {
        margin-bottom: 0px !important;
    }

    .mg-md-l-0-f {
        margin-left: 0px !important;
    }

    .mg-md-1 {
        margin: 1px;
    }

    .mg-md-1-f {
        margin: 1px !important;
    }

    .mg-md-y-1 {
        margin-top: 1px;
        margin-bottom: 1px;
    }

    .mg-md-y-1-f {
        margin-top: 1px !important;
        margin-bottom: 1px !important;
    }

    .mg-md-x-1 {
        margin-left: 1px;
        margin-right: 1px;
    }

    .mg-md-x-1-f {
        margin-left: 1px !important;
        margin-right: 1px !important;
    }

    .mg-md-t-1 {
        margin-top: 1px;
    }

    .mg-md-r-1 {
        margin-right: 1px;
    }

    .mg-md-b-1 {
        margin-bottom: 1px;
    }

    .mg-md-l-1 {
        margin-left: 1px;
    }

    .mg-md-t-1-f {
        margin-top: 1px !important;
    }

    .mg-md-r-1-f {
        margin-right: 1px !important;
    }

    .mg-md-b-1-f {
        margin-bottom: 1px !important;
    }

    .mg-md-l-1-f {
        margin-left: 1px !important;
    }

    .mg-md-2 {
        margin: 2px;
    }

    .mg-md-2-f {
        margin: 2px !important;
    }

    .mg-md-y-2 {
        margin-top: 2px;
        margin-bottom: 2px;
    }

    .mg-md-y-2-f {
        margin-top: 2px !important;
        margin-bottom: 2px !important;
    }

    .mg-md-x-2 {
        margin-left: 2px;
        margin-right: 2px;
    }

    .mg-md-x-2-f {
        margin-left: 2px !important;
        margin-right: 2px !important;
    }

    .mg-md-t-2 {
        margin-top: 2px;
    }

    .mg-md-r-2 {
        margin-right: 2px;
    }

    .mg-md-b-2 {
        margin-bottom: 2px;
    }

    .mg-md-l-2 {
        margin-left: 2px;
    }

    .mg-md-t-2-f {
        margin-top: 2px !important;
    }

    .mg-md-r-2-f {
        margin-right: 2px !important;
    }

    .mg-md-b-2-f {
        margin-bottom: 2px !important;
    }

    .mg-md-l-2-f {
        margin-left: 2px !important;
    }

    .mg-md-3 {
        margin: 3px;
    }

    .mg-md-3-f {
        margin: 3px !important;
    }

    .mg-md-y-3 {
        margin-top: 3px;
        margin-bottom: 3px;
    }

    .mg-md-y-3-f {
        margin-top: 3px !important;
        margin-bottom: 3px !important;
    }

    .mg-md-x-3 {
        margin-left: 3px;
        margin-right: 3px;
    }

    .mg-md-x-3-f {
        margin-left: 3px !important;
        margin-right: 3px !important;
    }

    .mg-md-t-3 {
        margin-top: 3px;
    }

    .mg-md-r-3 {
        margin-right: 3px;
    }

    .mg-md-b-3 {
        margin-bottom: 3px;
    }

    .mg-md-l-3 {
        margin-left: 3px;
    }

    .mg-md-t-3-f {
        margin-top: 3px !important;
    }

    .mg-md-r-3-f {
        margin-right: 3px !important;
    }

    .mg-md-b-3-f {
        margin-bottom: 3px !important;
    }

    .mg-md-l-3-f {
        margin-left: 3px !important;
    }

    .mg-md-4 {
        margin: 4px;
    }

    .mg-md-4-f {
        margin: 4px !important;
    }

    .mg-md-y-4 {
        margin-top: 4px;
        margin-bottom: 4px;
    }

    .mg-md-y-4-f {
        margin-top: 4px !important;
        margin-bottom: 4px !important;
    }

    .mg-md-x-4 {
        margin-left: 4px;
        margin-right: 4px;
    }

    .mg-md-x-4-f {
        margin-left: 4px !important;
        margin-right: 4px !important;
    }

    .mg-md-t-4 {
        margin-top: 4px;
    }

    .mg-md-r-4 {
        margin-right: 4px;
    }

    .mg-md-b-4 {
        margin-bottom: 4px;
    }

    .mg-md-l-4 {
        margin-left: 4px;
    }

    .mg-md-t-4-f {
        margin-top: 4px !important;
    }

    .mg-md-r-4-f {
        margin-right: 4px !important;
    }

    .mg-md-b-4-f {
        margin-bottom: 4px !important;
    }

    .mg-md-l-4-f {
        margin-left: 4px !important;
    }

    .mg-md-5 {
        margin: 5px;
    }

    .mg-md-5-f {
        margin: 5px !important;
    }

    .mg-md-y-5 {
        margin-top: 5px;
        margin-bottom: 5px;
    }

    .mg-md-y-5-f {
        margin-top: 5px !important;
        margin-bottom: 5px !important;
    }

    .mg-md-x-5 {
        margin-left: 5px;
        margin-right: 5px;
    }

    .mg-md-x-5-f {
        margin-left: 5px !important;
        margin-right: 5px !important;
    }

    .mg-md-t-5 {
        margin-top: 5px;
    }

    .mg-md-r-5 {
        margin-right: 5px;
    }

    .mg-md-b-5 {
        margin-bottom: 5px;
    }

    .mg-md-l-5 {
        margin-left: 5px;
    }

    .mg-md-t-5-f {
        margin-top: 5px !important;
    }

    .mg-md-r-5-f {
        margin-right: 5px !important;
    }

    .mg-md-b-5-f {
        margin-bottom: 5px !important;
    }

    .mg-md-l-5-f {
        margin-left: 5px !important;
    }

    .mg-md-6 {
        margin: 6px;
    }

    .mg-md-6-f {
        margin: 6px !important;
    }

    .mg-md-y-6 {
        margin-top: 6px;
        margin-bottom: 6px;
    }

    .mg-md-y-6-f {
        margin-top: 6px !important;
        margin-bottom: 6px !important;
    }

    .mg-md-x-6 {
        margin-left: 6px;
        margin-right: 6px;
    }

    .mg-md-x-6-f {
        margin-left: 6px !important;
        margin-right: 6px !important;
    }

    .mg-md-t-6 {
        margin-top: 6px;
    }

    .mg-md-r-6 {
        margin-right: 6px;
    }

    .mg-md-b-6 {
        margin-bottom: 6px;
    }

    .mg-md-l-6 {
        margin-left: 6px;
    }

    .mg-md-t-6-f {
        margin-top: 6px !important;
    }

    .mg-md-r-6-f {
        margin-right: 6px !important;
    }

    .mg-md-b-6-f {
        margin-bottom: 6px !important;
    }

    .mg-md-l-6-f {
        margin-left: 6px !important;
    }

    .mg-md-7 {
        margin: 7px;
    }

    .mg-md-7-f {
        margin: 7px !important;
    }

    .mg-md-y-7 {
        margin-top: 7px;
        margin-bottom: 7px;
    }

    .mg-md-y-7-f {
        margin-top: 7px !important;
        margin-bottom: 7px !important;
    }

    .mg-md-x-7 {
        margin-left: 7px;
        margin-right: 7px;
    }

    .mg-md-x-7-f {
        margin-left: 7px !important;
        margin-right: 7px !important;
    }

    .mg-md-t-7 {
        margin-top: 7px;
    }

    .mg-md-r-7 {
        margin-right: 7px;
    }

    .mg-md-b-7 {
        margin-bottom: 7px;
    }

    .mg-md-l-7 {
        margin-left: 7px;
    }

    .mg-md-t-7-f {
        margin-top: 7px !important;
    }

    .mg-md-r-7-f {
        margin-right: 7px !important;
    }

    .mg-md-b-7-f {
        margin-bottom: 7px !important;
    }

    .mg-md-l-7-f {
        margin-left: 7px !important;
    }

    .mg-md-8 {
        margin: 8px;
    }

    .mg-md-8-f {
        margin: 8px !important;
    }

    .mg-md-y-8 {
        margin-top: 8px;
        margin-bottom: 8px;
    }

    .mg-md-y-8-f {
        margin-top: 8px !important;
        margin-bottom: 8px !important;
    }

    .mg-md-x-8 {
        margin-left: 8px;
        margin-right: 8px;
    }

    .mg-md-x-8-f {
        margin-left: 8px !important;
        margin-right: 8px !important;
    }

    .mg-md-t-8 {
        margin-top: 8px;
    }

    .mg-md-r-8 {
        margin-right: 8px;
    }

    .mg-md-b-8 {
        margin-bottom: 8px;
    }

    .mg-md-l-8 {
        margin-left: 8px;
    }

    .mg-md-t-8-f {
        margin-top: 8px !important;
    }

    .mg-md-r-8-f {
        margin-right: 8px !important;
    }

    .mg-md-b-8-f {
        margin-bottom: 8px !important;
    }

    .mg-md-l-8-f {
        margin-left: 8px !important;
    }

    .mg-md-9 {
        margin: 9px;
    }

    .mg-md-9-f {
        margin: 9px !important;
    }

    .mg-md-y-9 {
        margin-top: 9px;
        margin-bottom: 9px;
    }

    .mg-md-y-9-f {
        margin-top: 9px !important;
        margin-bottom: 9px !important;
    }

    .mg-md-x-9 {
        margin-left: 9px;
        margin-right: 9px;
    }

    .mg-md-x-9-f {
        margin-left: 9px !important;
        margin-right: 9px !important;
    }

    .mg-md-t-9 {
        margin-top: 9px;
    }

    .mg-md-r-9 {
        margin-right: 9px;
    }

    .mg-md-b-9 {
        margin-bottom: 9px;
    }

    .mg-md-l-9 {
        margin-left: 9px;
    }

    .mg-md-t-9-f {
        margin-top: 9px !important;
    }

    .mg-md-r-9-f {
        margin-right: 9px !important;
    }

    .mg-md-b-9-f {
        margin-bottom: 9px !important;
    }

    .mg-md-l-9-f {
        margin-left: 9px !important;
    }

    .mg-md-10 {
        margin: 10px;
    }

    .mg-md-10-f {
        margin: 10px !important;
    }

    .mg-md-y-10 {
        margin-top: 10px;
        margin-bottom: 10px;
    }

    .mg-md-y-10-f {
        margin-top: 10px !important;
        margin-bottom: 10px !important;
    }

    .mg-md-x-10 {
        margin-left: 10px;
        margin-right: 10px;
    }

    .mg-md-x-10-f {
        margin-left: 10px !important;
        margin-right: 10px !important;
    }

    .mg-md-t-10 {
        margin-top: 10px;
    }

    .mg-md-r-10 {
        margin-right: 10px;
    }

    .mg-md-b-10 {
        margin-bottom: 10px;
    }

    .mg-md-l-10 {
        margin-left: 10px;
    }

    .mg-md-t-10-f {
        margin-top: 10px !important;
    }

    .mg-md-r-10-f {
        margin-right: 10px !important;
    }

    .mg-md-b-10-f {
        margin-bottom: 10px !important;
    }

    .mg-md-l-10-f {
        margin-left: 10px !important;
    }

    .mg-md-15 {
        margin: 15px;
    }

    .mg-md-15-f {
        margin: 15px !important;
    }

    .mg-md-y-15 {
        margin-top: 15px;
        margin-bottom: 15px;
    }

    .mg-md-y-15-f {
        margin-top: 15px !important;
        margin-bottom: 15px !important;
    }

    .mg-md-x-15 {
        margin-left: 15px;
        margin-right: 15px;
    }

    .mg-md-x-15-f {
        margin-left: 15px !important;
        margin-right: 15px !important;
    }

    .mg-md-t-15 {
        margin-top: 15px;
    }

    .mg-md-r-15 {
        margin-right: 15px;
    }

    .mg-md-b-15 {
        margin-bottom: 15px;
    }

    .mg-md-l-15 {
        margin-left: 15px;
    }

    .mg-md-t-15-f {
        margin-top: 15px !important;
    }

    .mg-md-r-15-f {
        margin-right: 15px !important;
    }

    .mg-md-b-15-f {
        margin-bottom: 15px !important;
    }

    .mg-md-l-15-f {
        margin-left: 15px !important;
    }

    .mg-md-20 {
        margin: 20px;
    }

    .mg-md-20-f {
        margin: 20px !important;
    }

    .mg-md-y-20 {
        margin-top: 20px;
        margin-bottom: 20px;
    }

    .mg-md-y-20-f {
        margin-top: 20px !important;
        margin-bottom: 20px !important;
    }

    .mg-md-x-20 {
        margin-left: 20px;
        margin-right: 20px;
    }

    .mg-md-x-20-f {
        margin-left: 20px !important;
        margin-right: 20px !important;
    }

    .mg-md-t-20 {
        margin-top: 20px;
    }

    .mg-md-r-20 {
        margin-right: 20px;
    }

    .mg-md-b-20 {
        margin-bottom: 20px;
    }

    .mg-md-l-20 {
        margin-left: 20px;
    }

    .mg-md-t-20-f {
        margin-top: 20px !important;
    }

    .mg-md-r-20-f {
        margin-right: 20px !important;
    }

    .mg-md-b-20-f {
        margin-bottom: 20px !important;
    }

    .mg-md-l-20-f {
        margin-left: 20px !important;
    }

    .mg-md-25 {
        margin: 25px;
    }

    .mg-md-25-f {
        margin: 25px !important;
    }

    .mg-md-y-25 {
        margin-top: 25px;
        margin-bottom: 25px;
    }

    .mg-md-y-25-f {
        margin-top: 25px !important;
        margin-bottom: 25px !important;
    }

    .mg-md-x-25 {
        margin-left: 25px;
        margin-right: 25px;
    }

    .mg-md-x-25-f {
        margin-left: 25px !important;
        margin-right: 25px !important;
    }

    .mg-md-t-25 {
        margin-top: 25px;
    }

    .mg-md-r-25 {
        margin-right: 25px;
    }

    .mg-md-b-25 {
        margin-bottom: 25px;
    }

    .mg-md-l-25 {
        margin-left: 25px;
    }

    .mg-md-t-25-f {
        margin-top: 25px !important;
    }

    .mg-md-r-25-f {
        margin-right: 25px !important;
    }

    .mg-md-b-25-f {
        margin-bottom: 25px !important;
    }

    .mg-md-l-25-f {
        margin-left: 25px !important;
    }

    .mg-md-30 {
        margin: 30px;
    }

    .mg-md-30-f {
        margin: 30px !important;
    }

    .mg-md-y-30 {
        margin-top: 30px;
        margin-bottom: 30px;
    }

    .mg-md-y-30-f {
        margin-top: 30px !important;
        margin-bottom: 30px !important;
    }

    .mg-md-x-30 {
        margin-left: 30px;
        margin-right: 30px;
    }

    .mg-md-x-30-f {
        margin-left: 30px !important;
        margin-right: 30px !important;
    }

    .mg-md-t-30 {
        margin-top: 30px;
    }

    .mg-md-r-30 {
        margin-right: 30px;
    }

    .mg-md-b-30 {
        margin-bottom: 30px;
    }

    .mg-md-l-30 {
        margin-left: 30px;
    }

    .mg-md-t-30-f {
        margin-top: 30px !important;
    }

    .mg-md-r-30-f {
        margin-right: 30px !important;
    }

    .mg-md-b-30-f {
        margin-bottom: 30px !important;
    }

    .mg-md-l-30-f {
        margin-left: 30px !important;
    }

    .mg-md-35 {
        margin: 35px;
    }

    .mg-md-35-f {
        margin: 35px !important;
    }

    .mg-md-y-35 {
        margin-top: 35px;
        margin-bottom: 35px;
    }

    .mg-md-y-35-f {
        margin-top: 35px !important;
        margin-bottom: 35px !important;
    }

    .mg-md-x-35 {
        margin-left: 35px;
        margin-right: 35px;
    }

    .mg-md-x-35-f {
        margin-left: 35px !important;
        margin-right: 35px !important;
    }

    .mg-md-t-35 {
        margin-top: 35px;
    }

    .mg-md-r-35 {
        margin-right: 35px;
    }

    .mg-md-b-35 {
        margin-bottom: 35px;
    }

    .mg-md-l-35 {
        margin-left: 35px;
    }

    .mg-md-t-35-f {
        margin-top: 35px !important;
    }

    .mg-md-r-35-f {
        margin-right: 35px !important;
    }

    .mg-md-b-35-f {
        margin-bottom: 35px !important;
    }

    .mg-md-l-35-f {
        margin-left: 35px !important;
    }

    .mg-md-40 {
        margin: 40px;
    }

    .mg-md-40-f {
        margin: 40px !important;
    }

    .mg-md-y-40 {
        margin-top: 40px;
        margin-bottom: 40px;
    }

    .mg-md-y-40-f {
        margin-top: 40px !important;
        margin-bottom: 40px !important;
    }

    .mg-md-x-40 {
        margin-left: 40px;
        margin-right: 40px;
    }

    .mg-md-x-40-f {
        margin-left: 40px !important;
        margin-right: 40px !important;
    }

    .mg-md-t-40 {
        margin-top: 40px;
    }

    .mg-md-r-40 {
        margin-right: 40px;
    }

    .mg-md-b-40 {
        margin-bottom: 40px;
    }

    .mg-md-l-40 {
        margin-left: 40px;
    }

    .mg-md-t-40-f {
        margin-top: 40px !important;
    }

    .mg-md-r-40-f {
        margin-right: 40px !important;
    }

    .mg-md-b-40-f {
        margin-bottom: 40px !important;
    }

    .mg-md-l-40-f {
        margin-left: 40px !important;
    }

    .mg-md-45 {
        margin: 45px;
    }

    .mg-md-45-f {
        margin: 45px !important;
    }

    .mg-md-y-45 {
        margin-top: 45px;
        margin-bottom: 45px;
    }

    .mg-md-y-45-f {
        margin-top: 45px !important;
        margin-bottom: 45px !important;
    }

    .mg-md-x-45 {
        margin-left: 45px;
        margin-right: 45px;
    }

    .mg-md-x-45-f {
        margin-left: 45px !important;
        margin-right: 45px !important;
    }

    .mg-md-t-45 {
        margin-top: 45px;
    }

    .mg-md-r-45 {
        margin-right: 45px;
    }

    .mg-md-b-45 {
        margin-bottom: 45px;
    }

    .mg-md-l-45 {
        margin-left: 45px;
    }

    .mg-md-t-45-f {
        margin-top: 45px !important;
    }

    .mg-md-r-45-f {
        margin-right: 45px !important;
    }

    .mg-md-b-45-f {
        margin-bottom: 45px !important;
    }

    .mg-md-l-45-f {
        margin-left: 45px !important;
    }

    .mg-md-50 {
        margin: 50px;
    }

    .mg-md-50-f {
        margin: 50px !important;
    }

    .mg-md-y-50 {
        margin-top: 50px;
        margin-bottom: 50px;
    }

    .mg-md-y-50-f {
        margin-top: 50px !important;
        margin-bottom: 50px !important;
    }

    .mg-md-x-50 {
        margin-left: 50px;
        margin-right: 50px;
    }

    .mg-md-x-50-f {
        margin-left: 50px !important;
        margin-right: 50px !important;
    }

    .mg-md-t-50 {
        margin-top: 50px;
    }

    .mg-md-r-50 {
        margin-right: 50px;
    }

    .mg-md-b-50 {
        margin-bottom: 50px;
    }

    .mg-md-l-50 {
        margin-left: 50px;
    }

    .mg-md-t-50-f {
        margin-top: 50px !important;
    }

    .mg-md-r-50-f {
        margin-right: 50px !important;
    }

    .mg-md-b-50-f {
        margin-bottom: 50px !important;
    }

    .mg-md-l-50-f {
        margin-left: 50px !important;
    }

    .mg-md-55 {
        margin: 55px;
    }

    .mg-md-55-f {
        margin: 55px !important;
    }

    .mg-md-y-55 {
        margin-top: 55px;
        margin-bottom: 55px;
    }

    .mg-md-y-55-f {
        margin-top: 55px !important;
        margin-bottom: 55px !important;
    }

    .mg-md-x-55 {
        margin-left: 55px;
        margin-right: 55px;
    }

    .mg-md-x-55-f {
        margin-left: 55px !important;
        margin-right: 55px !important;
    }

    .mg-md-t-55 {
        margin-top: 55px;
    }

    .mg-md-r-55 {
        margin-right: 55px;
    }

    .mg-md-b-55 {
        margin-bottom: 55px;
    }

    .mg-md-l-55 {
        margin-left: 55px;
    }

    .mg-md-t-55-f {
        margin-top: 55px !important;
    }

    .mg-md-r-55-f {
        margin-right: 55px !important;
    }

    .mg-md-b-55-f {
        margin-bottom: 55px !important;
    }

    .mg-md-l-55-f {
        margin-left: 55px !important;
    }

    .mg-md-60 {
        margin: 60px;
    }

    .mg-md-60-f {
        margin: 60px !important;
    }

    .mg-md-y-60 {
        margin-top: 60px;
        margin-bottom: 60px;
    }

    .mg-md-y-60-f {
        margin-top: 60px !important;
        margin-bottom: 60px !important;
    }

    .mg-md-x-60 {
        margin-left: 60px;
        margin-right: 60px;
    }

    .mg-md-x-60-f {
        margin-left: 60px !important;
        margin-right: 60px !important;
    }

    .mg-md-t-60 {
        margin-top: 60px;
    }

    .mg-md-r-60 {
        margin-right: 60px;
    }

    .mg-md-b-60 {
        margin-bottom: 60px;
    }

    .mg-md-l-60 {
        margin-left: 60px;
    }

    .mg-md-t-60-f {
        margin-top: 60px !important;
    }

    .mg-md-r-60-f {
        margin-right: 60px !important;
    }

    .mg-md-b-60-f {
        margin-bottom: 60px !important;
    }

    .mg-md-l-60-f {
        margin-left: 60px !important;
    }

    .mg-md-65 {
        margin: 65px;
    }

    .mg-md-65-f {
        margin: 65px !important;
    }

    .mg-md-y-65 {
        margin-top: 65px;
        margin-bottom: 65px;
    }

    .mg-md-y-65-f {
        margin-top: 65px !important;
        margin-bottom: 65px !important;
    }

    .mg-md-x-65 {
        margin-left: 65px;
        margin-right: 65px;
    }

    .mg-md-x-65-f {
        margin-left: 65px !important;
        margin-right: 65px !important;
    }

    .mg-md-t-65 {
        margin-top: 65px;
    }

    .mg-md-r-65 {
        margin-right: 65px;
    }

    .mg-md-b-65 {
        margin-bottom: 65px;
    }

    .mg-md-l-65 {
        margin-left: 65px;
    }

    .mg-md-t-65-f {
        margin-top: 65px !important;
    }

    .mg-md-r-65-f {
        margin-right: 65px !important;
    }

    .mg-md-b-65-f {
        margin-bottom: 65px !important;
    }

    .mg-md-l-65-f {
        margin-left: 65px !important;
    }

    .mg-md-70 {
        margin: 70px;
    }

    .mg-md-70-f {
        margin: 70px !important;
    }

    .mg-md-y-70 {
        margin-top: 70px;
        margin-bottom: 70px;
    }

    .mg-md-y-70-f {
        margin-top: 70px !important;
        margin-bottom: 70px !important;
    }

    .mg-md-x-70 {
        margin-left: 70px;
        margin-right: 70px;
    }

    .mg-md-x-70-f {
        margin-left: 70px !important;
        margin-right: 70px !important;
    }

    .mg-md-t-70 {
        margin-top: 70px;
    }

    .mg-md-r-70 {
        margin-right: 70px;
    }

    .mg-md-b-70 {
        margin-bottom: 70px;
    }

    .mg-md-l-70 {
        margin-left: 70px;
    }

    .mg-md-t-70-f {
        margin-top: 70px !important;
    }

    .mg-md-r-70-f {
        margin-right: 70px !important;
    }

    .mg-md-b-70-f {
        margin-bottom: 70px !important;
    }

    .mg-md-l-70-f {
        margin-left: 70px !important;
    }

    .mg-md-75 {
        margin: 75px;
    }

    .mg-md-75-f {
        margin: 75px !important;
    }

    .mg-md-y-75 {
        margin-top: 75px;
        margin-bottom: 75px;
    }

    .mg-md-y-75-f {
        margin-top: 75px !important;
        margin-bottom: 75px !important;
    }

    .mg-md-x-75 {
        margin-left: 75px;
        margin-right: 75px;
    }

    .mg-md-x-75-f {
        margin-left: 75px !important;
        margin-right: 75px !important;
    }

    .mg-md-t-75 {
        margin-top: 75px;
    }

    .mg-md-r-75 {
        margin-right: 75px;
    }

    .mg-md-b-75 {
        margin-bottom: 75px;
    }

    .mg-md-l-75 {
        margin-left: 75px;
    }

    .mg-md-t-75-f {
        margin-top: 75px !important;
    }

    .mg-md-r-75-f {
        margin-right: 75px !important;
    }

    .mg-md-b-75-f {
        margin-bottom: 75px !important;
    }

    .mg-md-l-75-f {
        margin-left: 75px !important;
    }

    .mg-md-80 {
        margin: 80px;
    }

    .mg-md-80-f {
        margin: 80px !important;
    }

    .mg-md-y-80 {
        margin-top: 80px;
        margin-bottom: 80px;
    }

    .mg-md-y-80-f {
        margin-top: 80px !important;
        margin-bottom: 80px !important;
    }

    .mg-md-x-80 {
        margin-left: 80px;
        margin-right: 80px;
    }

    .mg-md-x-80-f {
        margin-left: 80px !important;
        margin-right: 80px !important;
    }

    .mg-md-t-80 {
        margin-top: 80px;
    }

    .mg-md-r-80 {
        margin-right: 80px;
    }

    .mg-md-b-80 {
        margin-bottom: 80px;
    }

    .mg-md-l-80 {
        margin-left: 80px;
    }

    .mg-md-t-80-f {
        margin-top: 80px !important;
    }

    .mg-md-r-80-f {
        margin-right: 80px !important;
    }

    .mg-md-b-80-f {
        margin-bottom: 80px !important;
    }

    .mg-md-l-80-f {
        margin-left: 80px !important;
    }

    .mg-md-85 {
        margin: 85px;
    }

    .mg-md-85-f {
        margin: 85px !important;
    }

    .mg-md-y-85 {
        margin-top: 85px;
        margin-bottom: 85px;
    }

    .mg-md-y-85-f {
        margin-top: 85px !important;
        margin-bottom: 85px !important;
    }

    .mg-md-x-85 {
        margin-left: 85px;
        margin-right: 85px;
    }

    .mg-md-x-85-f {
        margin-left: 85px !important;
        margin-right: 85px !important;
    }

    .mg-md-t-85 {
        margin-top: 85px;
    }

    .mg-md-r-85 {
        margin-right: 85px;
    }

    .mg-md-b-85 {
        margin-bottom: 85px;
    }

    .mg-md-l-85 {
        margin-left: 85px;
    }

    .mg-md-t-85-f {
        margin-top: 85px !important;
    }

    .mg-md-r-85-f {
        margin-right: 85px !important;
    }

    .mg-md-b-85-f {
        margin-bottom: 85px !important;
    }

    .mg-md-l-85-f {
        margin-left: 85px !important;
    }

    .mg-md-90 {
        margin: 90px;
    }

    .mg-md-90-f {
        margin: 90px !important;
    }

    .mg-md-y-90 {
        margin-top: 90px;
        margin-bottom: 90px;
    }

    .mg-md-y-90-f {
        margin-top: 90px !important;
        margin-bottom: 90px !important;
    }

    .mg-md-x-90 {
        margin-left: 90px;
        margin-right: 90px;
    }

    .mg-md-x-90-f {
        margin-left: 90px !important;
        margin-right: 90px !important;
    }

    .mg-md-t-90 {
        margin-top: 90px;
    }

    .mg-md-r-90 {
        margin-right: 90px;
    }

    .mg-md-b-90 {
        margin-bottom: 90px;
    }

    .mg-md-l-90 {
        margin-left: 90px;
    }

    .mg-md-t-90-f {
        margin-top: 90px !important;
    }

    .mg-md-r-90-f {
        margin-right: 90px !important;
    }

    .mg-md-b-90-f {
        margin-bottom: 90px !important;
    }

    .mg-md-l-90-f {
        margin-left: 90px !important;
    }

    .mg-md-95 {
        margin: 95px;
    }

    .mg-md-95-f {
        margin: 95px !important;
    }

    .mg-md-y-95 {
        margin-top: 95px;
        margin-bottom: 95px;
    }

    .mg-md-y-95-f {
        margin-top: 95px !important;
        margin-bottom: 95px !important;
    }

    .mg-md-x-95 {
        margin-left: 95px;
        margin-right: 95px;
    }

    .mg-md-x-95-f {
        margin-left: 95px !important;
        margin-right: 95px !important;
    }

    .mg-md-t-95 {
        margin-top: 95px;
    }

    .mg-md-r-95 {
        margin-right: 95px;
    }

    .mg-md-b-95 {
        margin-bottom: 95px;
    }

    .mg-md-l-95 {
        margin-left: 95px;
    }

    .mg-md-t-95-f {
        margin-top: 95px !important;
    }

    .mg-md-r-95-f {
        margin-right: 95px !important;
    }

    .mg-md-b-95-f {
        margin-bottom: 95px !important;
    }

    .mg-md-l-95-f {
        margin-left: 95px !important;
    }

    .mg-md-100 {
        margin: 100px;
    }

    .mg-md-100-f {
        margin: 100px !important;
    }

    .mg-md-y-100 {
        margin-top: 100px;
        margin-bottom: 100px;
    }

    .mg-md-y-100-f {
        margin-top: 100px !important;
        margin-bottom: 100px !important;
    }

    .mg-md-x-100 {
        margin-left: 100px;
        margin-right: 100px;
    }

    .mg-md-x-100-f {
        margin-left: 100px !important;
        margin-right: 100px !important;
    }

    .mg-md-t-100 {
        margin-top: 100px;
    }

    .mg-md-r-100 {
        margin-right: 100px;
    }

    .mg-md-b-100 {
        margin-bottom: 100px;
    }

    .mg-md-l-100 {
        margin-left: 100px;
    }

    .mg-md-t-100-f {
        margin-top: 100px !important;
    }

    .mg-md-r-100-f {
        margin-right: 100px !important;
    }

    .mg-md-b-100-f {
        margin-bottom: 100px !important;
    }

    .mg-md-l-100-f {
        margin-left: 100px !important;
    }

    .mg-md-t-auto {
        margin-top: auto;
    }

    .mg-md-r-auto {
        margin-right: auto;
    }

    .mg-md-b-auto {
        margin-bottom: auto;
    }

    .mg-md-l-auto {
        margin-left: auto;
    }

    .mg-md-auto {
        margin: auto;
    }

    .mg-md-x-auto {
        margin-left: auto;
        margin-right: auto;
    }
}

@media (min-width: 992px) {
    .mg-lg-0 {
        margin: 0px;
    }

    .mg-lg-0-f {
        margin: 0px !important;
    }

    .mg-lg-y-0 {
        margin-top: 0px;
        margin-bottom: 0px;
    }

    .mg-lg-y-0-f {
        margin-top: 0px !important;
        margin-bottom: 0px !important;
    }

    .mg-lg-x-0 {
        margin-left: 0px;
        margin-right: 0px;
    }

    .mg-lg-x-0-f {
        margin-left: 0px !important;
        margin-right: 0px !important;
    }

    .mg-lg-t-0 {
        margin-top: 0px;
    }

    .mg-lg-r-0 {
        margin-right: 0px;
    }

    .mg-lg-b-0 {
        margin-bottom: 0px;
    }

    .mg-lg-l-0 {
        margin-left: 0px;
    }

    .mg-lg-t-0-f {
        margin-top: 0px !important;
    }

    .mg-lg-r-0-f {
        margin-right: 0px !important;
    }

    .mg-lg-b-0-f {
        margin-bottom: 0px !important;
    }

    .mg-lg-l-0-f {
        margin-left: 0px !important;
    }

    .mg-lg-1 {
        margin: 1px;
    }

    .mg-lg-1-f {
        margin: 1px !important;
    }

    .mg-lg-y-1 {
        margin-top: 1px;
        margin-bottom: 1px;
    }

    .mg-lg-y-1-f {
        margin-top: 1px !important;
        margin-bottom: 1px !important;
    }

    .mg-lg-x-1 {
        margin-left: 1px;
        margin-right: 1px;
    }

    .mg-lg-x-1-f {
        margin-left: 1px !important;
        margin-right: 1px !important;
    }

    .mg-lg-t-1 {
        margin-top: 1px;
    }

    .mg-lg-r-1 {
        margin-right: 1px;
    }

    .mg-lg-b-1 {
        margin-bottom: 1px;
    }

    .mg-lg-l-1 {
        margin-left: 1px;
    }

    .mg-lg-t-1-f {
        margin-top: 1px !important;
    }

    .mg-lg-r-1-f {
        margin-right: 1px !important;
    }

    .mg-lg-b-1-f {
        margin-bottom: 1px !important;
    }

    .mg-lg-l-1-f {
        margin-left: 1px !important;
    }

    .mg-lg-2 {
        margin: 2px;
    }

    .mg-lg-2-f {
        margin: 2px !important;
    }

    .mg-lg-y-2 {
        margin-top: 2px;
        margin-bottom: 2px;
    }

    .mg-lg-y-2-f {
        margin-top: 2px !important;
        margin-bottom: 2px !important;
    }

    .mg-lg-x-2 {
        margin-left: 2px;
        margin-right: 2px;
    }

    .mg-lg-x-2-f {
        margin-left: 2px !important;
        margin-right: 2px !important;
    }

    .mg-lg-t-2 {
        margin-top: 2px;
    }

    .mg-lg-r-2 {
        margin-right: 2px;
    }

    .mg-lg-b-2 {
        margin-bottom: 2px;
    }

    .mg-lg-l-2 {
        margin-left: 2px;
    }

    .mg-lg-t-2-f {
        margin-top: 2px !important;
    }

    .mg-lg-r-2-f {
        margin-right: 2px !important;
    }

    .mg-lg-b-2-f {
        margin-bottom: 2px !important;
    }

    .mg-lg-l-2-f {
        margin-left: 2px !important;
    }

    .mg-lg-3 {
        margin: 3px;
    }

    .mg-lg-3-f {
        margin: 3px !important;
    }

    .mg-lg-y-3 {
        margin-top: 3px;
        margin-bottom: 3px;
    }

    .mg-lg-y-3-f {
        margin-top: 3px !important;
        margin-bottom: 3px !important;
    }

    .mg-lg-x-3 {
        margin-left: 3px;
        margin-right: 3px;
    }

    .mg-lg-x-3-f {
        margin-left: 3px !important;
        margin-right: 3px !important;
    }

    .mg-lg-t-3 {
        margin-top: 3px;
    }

    .mg-lg-r-3 {
        margin-right: 3px;
    }

    .mg-lg-b-3 {
        margin-bottom: 3px;
    }

    .mg-lg-l-3 {
        margin-left: 3px;
    }

    .mg-lg-t-3-f {
        margin-top: 3px !important;
    }

    .mg-lg-r-3-f {
        margin-right: 3px !important;
    }

    .mg-lg-b-3-f {
        margin-bottom: 3px !important;
    }

    .mg-lg-l-3-f {
        margin-left: 3px !important;
    }

    .mg-lg-4 {
        margin: 4px;
    }

    .mg-lg-4-f {
        margin: 4px !important;
    }

    .mg-lg-y-4 {
        margin-top: 4px;
        margin-bottom: 4px;
    }

    .mg-lg-y-4-f {
        margin-top: 4px !important;
        margin-bottom: 4px !important;
    }

    .mg-lg-x-4 {
        margin-left: 4px;
        margin-right: 4px;
    }

    .mg-lg-x-4-f {
        margin-left: 4px !important;
        margin-right: 4px !important;
    }

    .mg-lg-t-4 {
        margin-top: 4px;
    }

    .mg-lg-r-4 {
        margin-right: 4px;
    }

    .mg-lg-b-4 {
        margin-bottom: 4px;
    }

    .mg-lg-l-4 {
        margin-left: 4px;
    }

    .mg-lg-t-4-f {
        margin-top: 4px !important;
    }

    .mg-lg-r-4-f {
        margin-right: 4px !important;
    }

    .mg-lg-b-4-f {
        margin-bottom: 4px !important;
    }

    .mg-lg-l-4-f {
        margin-left: 4px !important;
    }

    .mg-lg-5 {
        margin: 5px;
    }

    .mg-lg-5-f {
        margin: 5px !important;
    }

    .mg-lg-y-5 {
        margin-top: 5px;
        margin-bottom: 5px;
    }

    .mg-lg-y-5-f {
        margin-top: 5px !important;
        margin-bottom: 5px !important;
    }

    .mg-lg-x-5 {
        margin-left: 5px;
        margin-right: 5px;
    }

    .mg-lg-x-5-f {
        margin-left: 5px !important;
        margin-right: 5px !important;
    }

    .mg-lg-t-5 {
        margin-top: 5px;
    }

    .mg-lg-r-5 {
        margin-right: 5px;
    }

    .mg-lg-b-5 {
        margin-bottom: 5px;
    }

    .mg-lg-l-5 {
        margin-left: 5px;
    }

    .mg-lg-t-5-f {
        margin-top: 5px !important;
    }

    .mg-lg-r-5-f {
        margin-right: 5px !important;
    }

    .mg-lg-b-5-f {
        margin-bottom: 5px !important;
    }

    .mg-lg-l-5-f {
        margin-left: 5px !important;
    }

    .mg-lg-6 {
        margin: 6px;
    }

    .mg-lg-6-f {
        margin: 6px !important;
    }

    .mg-lg-y-6 {
        margin-top: 6px;
        margin-bottom: 6px;
    }

    .mg-lg-y-6-f {
        margin-top: 6px !important;
        margin-bottom: 6px !important;
    }

    .mg-lg-x-6 {
        margin-left: 6px;
        margin-right: 6px;
    }

    .mg-lg-x-6-f {
        margin-left: 6px !important;
        margin-right: 6px !important;
    }

    .mg-lg-t-6 {
        margin-top: 6px;
    }

    .mg-lg-r-6 {
        margin-right: 6px;
    }

    .mg-lg-b-6 {
        margin-bottom: 6px;
    }

    .mg-lg-l-6 {
        margin-left: 6px;
    }

    .mg-lg-t-6-f {
        margin-top: 6px !important;
    }

    .mg-lg-r-6-f {
        margin-right: 6px !important;
    }

    .mg-lg-b-6-f {
        margin-bottom: 6px !important;
    }

    .mg-lg-l-6-f {
        margin-left: 6px !important;
    }

    .mg-lg-7 {
        margin: 7px;
    }

    .mg-lg-7-f {
        margin: 7px !important;
    }

    .mg-lg-y-7 {
        margin-top: 7px;
        margin-bottom: 7px;
    }

    .mg-lg-y-7-f {
        margin-top: 7px !important;
        margin-bottom: 7px !important;
    }

    .mg-lg-x-7 {
        margin-left: 7px;
        margin-right: 7px;
    }

    .mg-lg-x-7-f {
        margin-left: 7px !important;
        margin-right: 7px !important;
    }

    .mg-lg-t-7 {
        margin-top: 7px;
    }

    .mg-lg-r-7 {
        margin-right: 7px;
    }

    .mg-lg-b-7 {
        margin-bottom: 7px;
    }

    .mg-lg-l-7 {
        margin-left: 7px;
    }

    .mg-lg-t-7-f {
        margin-top: 7px !important;
    }

    .mg-lg-r-7-f {
        margin-right: 7px !important;
    }

    .mg-lg-b-7-f {
        margin-bottom: 7px !important;
    }

    .mg-lg-l-7-f {
        margin-left: 7px !important;
    }

    .mg-lg-8 {
        margin: 8px;
    }

    .mg-lg-8-f {
        margin: 8px !important;
    }

    .mg-lg-y-8 {
        margin-top: 8px;
        margin-bottom: 8px;
    }

    .mg-lg-y-8-f {
        margin-top: 8px !important;
        margin-bottom: 8px !important;
    }

    .mg-lg-x-8 {
        margin-left: 8px;
        margin-right: 8px;
    }

    .mg-lg-x-8-f {
        margin-left: 8px !important;
        margin-right: 8px !important;
    }

    .mg-lg-t-8 {
        margin-top: 8px;
    }

    .mg-lg-r-8 {
        margin-right: 8px;
    }

    .mg-lg-b-8 {
        margin-bottom: 8px;
    }

    .mg-lg-l-8 {
        margin-left: 8px;
    }

    .mg-lg-t-8-f {
        margin-top: 8px !important;
    }

    .mg-lg-r-8-f {
        margin-right: 8px !important;
    }

    .mg-lg-b-8-f {
        margin-bottom: 8px !important;
    }

    .mg-lg-l-8-f {
        margin-left: 8px !important;
    }

    .mg-lg-9 {
        margin: 9px;
    }

    .mg-lg-9-f {
        margin: 9px !important;
    }

    .mg-lg-y-9 {
        margin-top: 9px;
        margin-bottom: 9px;
    }

    .mg-lg-y-9-f {
        margin-top: 9px !important;
        margin-bottom: 9px !important;
    }

    .mg-lg-x-9 {
        margin-left: 9px;
        margin-right: 9px;
    }

    .mg-lg-x-9-f {
        margin-left: 9px !important;
        margin-right: 9px !important;
    }

    .mg-lg-t-9 {
        margin-top: 9px;
    }

    .mg-lg-r-9 {
        margin-right: 9px;
    }

    .mg-lg-b-9 {
        margin-bottom: 9px;
    }

    .mg-lg-l-9 {
        margin-left: 9px;
    }

    .mg-lg-t-9-f {
        margin-top: 9px !important;
    }

    .mg-lg-r-9-f {
        margin-right: 9px !important;
    }

    .mg-lg-b-9-f {
        margin-bottom: 9px !important;
    }

    .mg-lg-l-9-f {
        margin-left: 9px !important;
    }

    .mg-lg-10 {
        margin: 10px;
    }

    .mg-lg-10-f {
        margin: 10px !important;
    }

    .mg-lg-y-10 {
        margin-top: 10px;
        margin-bottom: 10px;
    }

    .mg-lg-y-10-f {
        margin-top: 10px !important;
        margin-bottom: 10px !important;
    }

    .mg-lg-x-10 {
        margin-left: 10px;
        margin-right: 10px;
    }

    .mg-lg-x-10-f {
        margin-left: 10px !important;
        margin-right: 10px !important;
    }

    .mg-lg-t-10 {
        margin-top: 10px;
    }

    .mg-lg-r-10 {
        margin-right: 10px;
    }

    .mg-lg-b-10 {
        margin-bottom: 10px;
    }

    .mg-lg-l-10 {
        margin-left: 10px;
    }

    .mg-lg-t-10-f {
        margin-top: 10px !important;
    }

    .mg-lg-r-10-f {
        margin-right: 10px !important;
    }

    .mg-lg-b-10-f {
        margin-bottom: 10px !important;
    }

    .mg-lg-l-10-f {
        margin-left: 10px !important;
    }

    .mg-lg-15 {
        margin: 15px;
    }

    .mg-lg-15-f {
        margin: 15px !important;
    }

    .mg-lg-y-15 {
        margin-top: 15px;
        margin-bottom: 15px;
    }

    .mg-lg-y-15-f {
        margin-top: 15px !important;
        margin-bottom: 15px !important;
    }

    .mg-lg-x-15 {
        margin-left: 15px;
        margin-right: 15px;
    }

    .mg-lg-x-15-f {
        margin-left: 15px !important;
        margin-right: 15px !important;
    }

    .mg-lg-t-15 {
        margin-top: 15px;
    }

    .mg-lg-r-15 {
        margin-right: 15px;
    }

    .mg-lg-b-15 {
        margin-bottom: 15px;
    }

    .mg-lg-l-15 {
        margin-left: 15px;
    }

    .mg-lg-t-15-f {
        margin-top: 15px !important;
    }

    .mg-lg-r-15-f {
        margin-right: 15px !important;
    }

    .mg-lg-b-15-f {
        margin-bottom: 15px !important;
    }

    .mg-lg-l-15-f {
        margin-left: 15px !important;
    }

    .mg-lg-20 {
        margin: 20px;
    }

    .mg-lg-20-f {
        margin: 20px !important;
    }

    .mg-lg-y-20 {
        margin-top: 20px;
        margin-bottom: 20px;
    }

    .mg-lg-y-20-f {
        margin-top: 20px !important;
        margin-bottom: 20px !important;
    }

    .mg-lg-x-20 {
        margin-left: 20px;
        margin-right: 20px;
    }

    .mg-lg-x-20-f {
        margin-left: 20px !important;
        margin-right: 20px !important;
    }

    .mg-lg-t-20 {
        margin-top: 20px;
    }

    .mg-lg-r-20 {
        margin-right: 20px;
    }

    .mg-lg-b-20 {
        margin-bottom: 20px;
    }

    .mg-lg-l-20 {
        margin-left: 20px;
    }

    .mg-lg-t-20-f {
        margin-top: 20px !important;
    }

    .mg-lg-r-20-f {
        margin-right: 20px !important;
    }

    .mg-lg-b-20-f {
        margin-bottom: 20px !important;
    }

    .mg-lg-l-20-f {
        margin-left: 20px !important;
    }

    .mg-lg-25 {
        margin: 25px;
    }

    .mg-lg-25-f {
        margin: 25px !important;
    }

    .mg-lg-y-25 {
        margin-top: 25px;
        margin-bottom: 25px;
    }

    .mg-lg-y-25-f {
        margin-top: 25px !important;
        margin-bottom: 25px !important;
    }

    .mg-lg-x-25 {
        margin-left: 25px;
        margin-right: 25px;
    }

    .mg-lg-x-25-f {
        margin-left: 25px !important;
        margin-right: 25px !important;
    }

    .mg-lg-t-25 {
        margin-top: 25px;
    }

    .mg-lg-r-25 {
        margin-right: 25px;
    }

    .mg-lg-b-25 {
        margin-bottom: 25px;
    }

    .mg-lg-l-25 {
        margin-left: 25px;
    }

    .mg-lg-t-25-f {
        margin-top: 25px !important;
    }

    .mg-lg-r-25-f {
        margin-right: 25px !important;
    }

    .mg-lg-b-25-f {
        margin-bottom: 25px !important;
    }

    .mg-lg-l-25-f {
        margin-left: 25px !important;
    }

    .mg-lg-30 {
        margin: 30px;
    }

    .mg-lg-30-f {
        margin: 30px !important;
    }

    .mg-lg-y-30 {
        margin-top: 30px;
        margin-bottom: 30px;
    }

    .mg-lg-y-30-f {
        margin-top: 30px !important;
        margin-bottom: 30px !important;
    }

    .mg-lg-x-30 {
        margin-left: 30px;
        margin-right: 30px;
    }

    .mg-lg-x-30-f {
        margin-left: 30px !important;
        margin-right: 30px !important;
    }

    .mg-lg-t-30 {
        margin-top: 30px;
    }

    .mg-lg-r-30 {
        margin-right: 30px;
    }

    .mg-lg-b-30 {
        margin-bottom: 30px;
    }

    .mg-lg-l-30 {
        margin-left: 30px;
    }

    .mg-lg-t-30-f {
        margin-top: 30px !important;
    }

    .mg-lg-r-30-f {
        margin-right: 30px !important;
    }

    .mg-lg-b-30-f {
        margin-bottom: 30px !important;
    }

    .mg-lg-l-30-f {
        margin-left: 30px !important;
    }

    .mg-lg-35 {
        margin: 35px;
    }

    .mg-lg-35-f {
        margin: 35px !important;
    }

    .mg-lg-y-35 {
        margin-top: 35px;
        margin-bottom: 35px;
    }

    .mg-lg-y-35-f {
        margin-top: 35px !important;
        margin-bottom: 35px !important;
    }

    .mg-lg-x-35 {
        margin-left: 35px;
        margin-right: 35px;
    }

    .mg-lg-x-35-f {
        margin-left: 35px !important;
        margin-right: 35px !important;
    }

    .mg-lg-t-35 {
        margin-top: 35px;
    }

    .mg-lg-r-35 {
        margin-right: 35px;
    }

    .mg-lg-b-35 {
        margin-bottom: 35px;
    }

    .mg-lg-l-35 {
        margin-left: 35px;
    }

    .mg-lg-t-35-f {
        margin-top: 35px !important;
    }

    .mg-lg-r-35-f {
        margin-right: 35px !important;
    }

    .mg-lg-b-35-f {
        margin-bottom: 35px !important;
    }

    .mg-lg-l-35-f {
        margin-left: 35px !important;
    }

    .mg-lg-40 {
        margin: 40px;
    }

    .mg-lg-40-f {
        margin: 40px !important;
    }

    .mg-lg-y-40 {
        margin-top: 40px;
        margin-bottom: 40px;
    }

    .mg-lg-y-40-f {
        margin-top: 40px !important;
        margin-bottom: 40px !important;
    }

    .mg-lg-x-40 {
        margin-left: 40px;
        margin-right: 40px;
    }

    .mg-lg-x-40-f {
        margin-left: 40px !important;
        margin-right: 40px !important;
    }

    .mg-lg-t-40 {
        margin-top: 40px;
    }

    .mg-lg-r-40 {
        margin-right: 40px;
    }

    .mg-lg-b-40 {
        margin-bottom: 40px;
    }

    .mg-lg-l-40 {
        margin-left: 40px;
    }

    .mg-lg-t-40-f {
        margin-top: 40px !important;
    }

    .mg-lg-r-40-f {
        margin-right: 40px !important;
    }

    .mg-lg-b-40-f {
        margin-bottom: 40px !important;
    }

    .mg-lg-l-40-f {
        margin-left: 40px !important;
    }

    .mg-lg-45 {
        margin: 45px;
    }

    .mg-lg-45-f {
        margin: 45px !important;
    }

    .mg-lg-y-45 {
        margin-top: 45px;
        margin-bottom: 45px;
    }

    .mg-lg-y-45-f {
        margin-top: 45px !important;
        margin-bottom: 45px !important;
    }

    .mg-lg-x-45 {
        margin-left: 45px;
        margin-right: 45px;
    }

    .mg-lg-x-45-f {
        margin-left: 45px !important;
        margin-right: 45px !important;
    }

    .mg-lg-t-45 {
        margin-top: 45px;
    }

    .mg-lg-r-45 {
        margin-right: 45px;
    }

    .mg-lg-b-45 {
        margin-bottom: 45px;
    }

    .mg-lg-l-45 {
        margin-left: 45px;
    }

    .mg-lg-t-45-f {
        margin-top: 45px !important;
    }

    .mg-lg-r-45-f {
        margin-right: 45px !important;
    }

    .mg-lg-b-45-f {
        margin-bottom: 45px !important;
    }

    .mg-lg-l-45-f {
        margin-left: 45px !important;
    }

    .mg-lg-50 {
        margin: 50px;
    }

    .mg-lg-50-f {
        margin: 50px !important;
    }

    .mg-lg-y-50 {
        margin-top: 50px;
        margin-bottom: 50px;
    }

    .mg-lg-y-50-f {
        margin-top: 50px !important;
        margin-bottom: 50px !important;
    }

    .mg-lg-x-50 {
        margin-left: 50px;
        margin-right: 50px;
    }

    .mg-lg-x-50-f {
        margin-left: 50px !important;
        margin-right: 50px !important;
    }

    .mg-lg-t-50 {
        margin-top: 50px;
    }

    .mg-lg-r-50 {
        margin-right: 50px;
    }

    .mg-lg-b-50 {
        margin-bottom: 50px;
    }

    .mg-lg-l-50 {
        margin-left: 50px;
    }

    .mg-lg-t-50-f {
        margin-top: 50px !important;
    }

    .mg-lg-r-50-f {
        margin-right: 50px !important;
    }

    .mg-lg-b-50-f {
        margin-bottom: 50px !important;
    }

    .mg-lg-l-50-f {
        margin-left: 50px !important;
    }

    .mg-lg-55 {
        margin: 55px;
    }

    .mg-lg-55-f {
        margin: 55px !important;
    }

    .mg-lg-y-55 {
        margin-top: 55px;
        margin-bottom: 55px;
    }

    .mg-lg-y-55-f {
        margin-top: 55px !important;
        margin-bottom: 55px !important;
    }

    .mg-lg-x-55 {
        margin-left: 55px;
        margin-right: 55px;
    }

    .mg-lg-x-55-f {
        margin-left: 55px !important;
        margin-right: 55px !important;
    }

    .mg-lg-t-55 {
        margin-top: 55px;
    }

    .mg-lg-r-55 {
        margin-right: 55px;
    }

    .mg-lg-b-55 {
        margin-bottom: 55px;
    }

    .mg-lg-l-55 {
        margin-left: 55px;
    }

    .mg-lg-t-55-f {
        margin-top: 55px !important;
    }

    .mg-lg-r-55-f {
        margin-right: 55px !important;
    }

    .mg-lg-b-55-f {
        margin-bottom: 55px !important;
    }

    .mg-lg-l-55-f {
        margin-left: 55px !important;
    }

    .mg-lg-60 {
        margin: 60px;
    }

    .mg-lg-60-f {
        margin: 60px !important;
    }

    .mg-lg-y-60 {
        margin-top: 60px;
        margin-bottom: 60px;
    }

    .mg-lg-y-60-f {
        margin-top: 60px !important;
        margin-bottom: 60px !important;
    }

    .mg-lg-x-60 {
        margin-left: 60px;
        margin-right: 60px;
    }

    .mg-lg-x-60-f {
        margin-left: 60px !important;
        margin-right: 60px !important;
    }

    .mg-lg-t-60 {
        margin-top: 60px;
    }

    .mg-lg-r-60 {
        margin-right: 60px;
    }

    .mg-lg-b-60 {
        margin-bottom: 60px;
    }

    .mg-lg-l-60 {
        margin-left: 60px;
    }

    .mg-lg-t-60-f {
        margin-top: 60px !important;
    }

    .mg-lg-r-60-f {
        margin-right: 60px !important;
    }

    .mg-lg-b-60-f {
        margin-bottom: 60px !important;
    }

    .mg-lg-l-60-f {
        margin-left: 60px !important;
    }

    .mg-lg-65 {
        margin: 65px;
    }

    .mg-lg-65-f {
        margin: 65px !important;
    }

    .mg-lg-y-65 {
        margin-top: 65px;
        margin-bottom: 65px;
    }

    .mg-lg-y-65-f {
        margin-top: 65px !important;
        margin-bottom: 65px !important;
    }

    .mg-lg-x-65 {
        margin-left: 65px;
        margin-right: 65px;
    }

    .mg-lg-x-65-f {
        margin-left: 65px !important;
        margin-right: 65px !important;
    }

    .mg-lg-t-65 {
        margin-top: 65px;
    }

    .mg-lg-r-65 {
        margin-right: 65px;
    }

    .mg-lg-b-65 {
        margin-bottom: 65px;
    }

    .mg-lg-l-65 {
        margin-left: 65px;
    }

    .mg-lg-t-65-f {
        margin-top: 65px !important;
    }

    .mg-lg-r-65-f {
        margin-right: 65px !important;
    }

    .mg-lg-b-65-f {
        margin-bottom: 65px !important;
    }

    .mg-lg-l-65-f {
        margin-left: 65px !important;
    }

    .mg-lg-70 {
        margin: 70px;
    }

    .mg-lg-70-f {
        margin: 70px !important;
    }

    .mg-lg-y-70 {
        margin-top: 70px;
        margin-bottom: 70px;
    }

    .mg-lg-y-70-f {
        margin-top: 70px !important;
        margin-bottom: 70px !important;
    }

    .mg-lg-x-70 {
        margin-left: 70px;
        margin-right: 70px;
    }

    .mg-lg-x-70-f {
        margin-left: 70px !important;
        margin-right: 70px !important;
    }

    .mg-lg-t-70 {
        margin-top: 70px;
    }

    .mg-lg-r-70 {
        margin-right: 70px;
    }

    .mg-lg-b-70 {
        margin-bottom: 70px;
    }

    .mg-lg-l-70 {
        margin-left: 70px;
    }

    .mg-lg-t-70-f {
        margin-top: 70px !important;
    }

    .mg-lg-r-70-f {
        margin-right: 70px !important;
    }

    .mg-lg-b-70-f {
        margin-bottom: 70px !important;
    }

    .mg-lg-l-70-f {
        margin-left: 70px !important;
    }

    .mg-lg-75 {
        margin: 75px;
    }

    .mg-lg-75-f {
        margin: 75px !important;
    }

    .mg-lg-y-75 {
        margin-top: 75px;
        margin-bottom: 75px;
    }

    .mg-lg-y-75-f {
        margin-top: 75px !important;
        margin-bottom: 75px !important;
    }

    .mg-lg-x-75 {
        margin-left: 75px;
        margin-right: 75px;
    }

    .mg-lg-x-75-f {
        margin-left: 75px !important;
        margin-right: 75px !important;
    }

    .mg-lg-t-75 {
        margin-top: 75px;
    }

    .mg-lg-r-75 {
        margin-right: 75px;
    }

    .mg-lg-b-75 {
        margin-bottom: 75px;
    }

    .mg-lg-l-75 {
        margin-left: 75px;
    }

    .mg-lg-t-75-f {
        margin-top: 75px !important;
    }

    .mg-lg-r-75-f {
        margin-right: 75px !important;
    }

    .mg-lg-b-75-f {
        margin-bottom: 75px !important;
    }

    .mg-lg-l-75-f {
        margin-left: 75px !important;
    }

    .mg-lg-80 {
        margin: 80px;
    }

    .mg-lg-80-f {
        margin: 80px !important;
    }

    .mg-lg-y-80 {
        margin-top: 80px;
        margin-bottom: 80px;
    }

    .mg-lg-y-80-f {
        margin-top: 80px !important;
        margin-bottom: 80px !important;
    }

    .mg-lg-x-80 {
        margin-left: 80px;
        margin-right: 80px;
    }

    .mg-lg-x-80-f {
        margin-left: 80px !important;
        margin-right: 80px !important;
    }

    .mg-lg-t-80 {
        margin-top: 80px;
    }

    .mg-lg-r-80 {
        margin-right: 80px;
    }

    .mg-lg-b-80 {
        margin-bottom: 80px;
    }

    .mg-lg-l-80 {
        margin-left: 80px;
    }

    .mg-lg-t-80-f {
        margin-top: 80px !important;
    }

    .mg-lg-r-80-f {
        margin-right: 80px !important;
    }

    .mg-lg-b-80-f {
        margin-bottom: 80px !important;
    }

    .mg-lg-l-80-f {
        margin-left: 80px !important;
    }

    .mg-lg-85 {
        margin: 85px;
    }

    .mg-lg-85-f {
        margin: 85px !important;
    }

    .mg-lg-y-85 {
        margin-top: 85px;
        margin-bottom: 85px;
    }

    .mg-lg-y-85-f {
        margin-top: 85px !important;
        margin-bottom: 85px !important;
    }

    .mg-lg-x-85 {
        margin-left: 85px;
        margin-right: 85px;
    }

    .mg-lg-x-85-f {
        margin-left: 85px !important;
        margin-right: 85px !important;
    }

    .mg-lg-t-85 {
        margin-top: 85px;
    }

    .mg-lg-r-85 {
        margin-right: 85px;
    }

    .mg-lg-b-85 {
        margin-bottom: 85px;
    }

    .mg-lg-l-85 {
        margin-left: 85px;
    }

    .mg-lg-t-85-f {
        margin-top: 85px !important;
    }

    .mg-lg-r-85-f {
        margin-right: 85px !important;
    }

    .mg-lg-b-85-f {
        margin-bottom: 85px !important;
    }

    .mg-lg-l-85-f {
        margin-left: 85px !important;
    }

    .mg-lg-90 {
        margin: 90px;
    }

    .mg-lg-90-f {
        margin: 90px !important;
    }

    .mg-lg-y-90 {
        margin-top: 90px;
        margin-bottom: 90px;
    }

    .mg-lg-y-90-f {
        margin-top: 90px !important;
        margin-bottom: 90px !important;
    }

    .mg-lg-x-90 {
        margin-left: 90px;
        margin-right: 90px;
    }

    .mg-lg-x-90-f {
        margin-left: 90px !important;
        margin-right: 90px !important;
    }

    .mg-lg-t-90 {
        margin-top: 90px;
    }

    .mg-lg-r-90 {
        margin-right: 90px;
    }

    .mg-lg-b-90 {
        margin-bottom: 90px;
    }

    .mg-lg-l-90 {
        margin-left: 90px;
    }

    .mg-lg-t-90-f {
        margin-top: 90px !important;
    }

    .mg-lg-r-90-f {
        margin-right: 90px !important;
    }

    .mg-lg-b-90-f {
        margin-bottom: 90px !important;
    }

    .mg-lg-l-90-f {
        margin-left: 90px !important;
    }

    .mg-lg-95 {
        margin: 95px;
    }

    .mg-lg-95-f {
        margin: 95px !important;
    }

    .mg-lg-y-95 {
        margin-top: 95px;
        margin-bottom: 95px;
    }

    .mg-lg-y-95-f {
        margin-top: 95px !important;
        margin-bottom: 95px !important;
    }

    .mg-lg-x-95 {
        margin-left: 95px;
        margin-right: 95px;
    }

    .mg-lg-x-95-f {
        margin-left: 95px !important;
        margin-right: 95px !important;
    }

    .mg-lg-t-95 {
        margin-top: 95px;
    }

    .mg-lg-r-95 {
        margin-right: 95px;
    }

    .mg-lg-b-95 {
        margin-bottom: 95px;
    }

    .mg-lg-l-95 {
        margin-left: 95px;
    }

    .mg-lg-t-95-f {
        margin-top: 95px !important;
    }

    .mg-lg-r-95-f {
        margin-right: 95px !important;
    }

    .mg-lg-b-95-f {
        margin-bottom: 95px !important;
    }

    .mg-lg-l-95-f {
        margin-left: 95px !important;
    }

    .mg-lg-100 {
        margin: 100px;
    }

    .mg-lg-100-f {
        margin: 100px !important;
    }

    .mg-lg-y-100 {
        margin-top: 100px;
        margin-bottom: 100px;
    }

    .mg-lg-y-100-f {
        margin-top: 100px !important;
        margin-bottom: 100px !important;
    }

    .mg-lg-x-100 {
        margin-left: 100px;
        margin-right: 100px;
    }

    .mg-lg-x-100-f {
        margin-left: 100px !important;
        margin-right: 100px !important;
    }

    .mg-lg-t-100 {
        margin-top: 100px;
    }

    .mg-lg-r-100 {
        margin-right: 100px;
    }

    .mg-lg-b-100 {
        margin-bottom: 100px;
    }

    .mg-lg-l-100 {
        margin-left: 100px;
    }

    .mg-lg-t-100-f {
        margin-top: 100px !important;
    }

    .mg-lg-r-100-f {
        margin-right: 100px !important;
    }

    .mg-lg-b-100-f {
        margin-bottom: 100px !important;
    }

    .mg-lg-l-100-f {
        margin-left: 100px !important;
    }

    .mg-lg-t-auto {
        margin-top: auto;
    }

    .mg-lg-r-auto {
        margin-right: auto;
    }

    .mg-lg-b-auto {
        margin-bottom: auto;
    }

    .mg-lg-l-auto {
        margin-left: auto;
    }

    .mg-lg-auto {
        margin: auto;
    }

    .mg-lg-x-auto {
        margin-left: auto;
        margin-right: auto;
    }
}

@media (min-width: 1200px) {
    .mg-xl-0 {
        margin: 0px;
    }

    .mg-xl-0-f {
        margin: 0px !important;
    }

    .mg-xl-y-0 {
        margin-top: 0px;
        margin-bottom: 0px;
    }

    .mg-xl-y-0-f {
        margin-top: 0px !important;
        margin-bottom: 0px !important;
    }

    .mg-xl-x-0 {
        margin-left: 0px;
        margin-right: 0px;
    }

    .mg-xl-x-0-f {
        margin-left: 0px !important;
        margin-right: 0px !important;
    }

    .mg-xl-t-0 {
        margin-top: 0px;
    }

    .mg-xl-r-0 {
        margin-right: 0px;
    }

    .mg-xl-b-0 {
        margin-bottom: 0px;
    }

    .mg-xl-l-0 {
        margin-left: 0px;
    }

    .mg-xl-t-0-f {
        margin-top: 0px !important;
    }

    .mg-xl-r-0-f {
        margin-right: 0px !important;
    }

    .mg-xl-b-0-f {
        margin-bottom: 0px !important;
    }

    .mg-xl-l-0-f {
        margin-left: 0px !important;
    }

    .mg-xl-1 {
        margin: 1px;
    }

    .mg-xl-1-f {
        margin: 1px !important;
    }

    .mg-xl-y-1 {
        margin-top: 1px;
        margin-bottom: 1px;
    }

    .mg-xl-y-1-f {
        margin-top: 1px !important;
        margin-bottom: 1px !important;
    }

    .mg-xl-x-1 {
        margin-left: 1px;
        margin-right: 1px;
    }

    .mg-xl-x-1-f {
        margin-left: 1px !important;
        margin-right: 1px !important;
    }

    .mg-xl-t-1 {
        margin-top: 1px;
    }

    .mg-xl-r-1 {
        margin-right: 1px;
    }

    .mg-xl-b-1 {
        margin-bottom: 1px;
    }

    .mg-xl-l-1 {
        margin-left: 1px;
    }

    .mg-xl-t-1-f {
        margin-top: 1px !important;
    }

    .mg-xl-r-1-f {
        margin-right: 1px !important;
    }

    .mg-xl-b-1-f {
        margin-bottom: 1px !important;
    }

    .mg-xl-l-1-f {
        margin-left: 1px !important;
    }

    .mg-xl-2 {
        margin: 2px;
    }

    .mg-xl-2-f {
        margin: 2px !important;
    }

    .mg-xl-y-2 {
        margin-top: 2px;
        margin-bottom: 2px;
    }

    .mg-xl-y-2-f {
        margin-top: 2px !important;
        margin-bottom: 2px !important;
    }

    .mg-xl-x-2 {
        margin-left: 2px;
        margin-right: 2px;
    }

    .mg-xl-x-2-f {
        margin-left: 2px !important;
        margin-right: 2px !important;
    }

    .mg-xl-t-2 {
        margin-top: 2px;
    }

    .mg-xl-r-2 {
        margin-right: 2px;
    }

    .mg-xl-b-2 {
        margin-bottom: 2px;
    }

    .mg-xl-l-2 {
        margin-left: 2px;
    }

    .mg-xl-t-2-f {
        margin-top: 2px !important;
    }

    .mg-xl-r-2-f {
        margin-right: 2px !important;
    }

    .mg-xl-b-2-f {
        margin-bottom: 2px !important;
    }

    .mg-xl-l-2-f {
        margin-left: 2px !important;
    }

    .mg-xl-3 {
        margin: 3px;
    }

    .mg-xl-3-f {
        margin: 3px !important;
    }

    .mg-xl-y-3 {
        margin-top: 3px;
        margin-bottom: 3px;
    }

    .mg-xl-y-3-f {
        margin-top: 3px !important;
        margin-bottom: 3px !important;
    }

    .mg-xl-x-3 {
        margin-left: 3px;
        margin-right: 3px;
    }

    .mg-xl-x-3-f {
        margin-left: 3px !important;
        margin-right: 3px !important;
    }

    .mg-xl-t-3 {
        margin-top: 3px;
    }

    .mg-xl-r-3 {
        margin-right: 3px;
    }

    .mg-xl-b-3 {
        margin-bottom: 3px;
    }

    .mg-xl-l-3 {
        margin-left: 3px;
    }

    .mg-xl-t-3-f {
        margin-top: 3px !important;
    }

    .mg-xl-r-3-f {
        margin-right: 3px !important;
    }

    .mg-xl-b-3-f {
        margin-bottom: 3px !important;
    }

    .mg-xl-l-3-f {
        margin-left: 3px !important;
    }

    .mg-xl-4 {
        margin: 4px;
    }

    .mg-xl-4-f {
        margin: 4px !important;
    }

    .mg-xl-y-4 {
        margin-top: 4px;
        margin-bottom: 4px;
    }

    .mg-xl-y-4-f {
        margin-top: 4px !important;
        margin-bottom: 4px !important;
    }

    .mg-xl-x-4 {
        margin-left: 4px;
        margin-right: 4px;
    }

    .mg-xl-x-4-f {
        margin-left: 4px !important;
        margin-right: 4px !important;
    }

    .mg-xl-t-4 {
        margin-top: 4px;
    }

    .mg-xl-r-4 {
        margin-right: 4px;
    }

    .mg-xl-b-4 {
        margin-bottom: 4px;
    }

    .mg-xl-l-4 {
        margin-left: 4px;
    }

    .mg-xl-t-4-f {
        margin-top: 4px !important;
    }

    .mg-xl-r-4-f {
        margin-right: 4px !important;
    }

    .mg-xl-b-4-f {
        margin-bottom: 4px !important;
    }

    .mg-xl-l-4-f {
        margin-left: 4px !important;
    }

    .mg-xl-5 {
        margin: 5px;
    }

    .mg-xl-5-f {
        margin: 5px !important;
    }

    .mg-xl-y-5 {
        margin-top: 5px;
        margin-bottom: 5px;
    }

    .mg-xl-y-5-f {
        margin-top: 5px !important;
        margin-bottom: 5px !important;
    }

    .mg-xl-x-5 {
        margin-left: 5px;
        margin-right: 5px;
    }

    .mg-xl-x-5-f {
        margin-left: 5px !important;
        margin-right: 5px !important;
    }

    .mg-xl-t-5 {
        margin-top: 5px;
    }

    .mg-xl-r-5 {
        margin-right: 5px;
    }

    .mg-xl-b-5 {
        margin-bottom: 5px;
    }

    .mg-xl-l-5 {
        margin-left: 5px;
    }

    .mg-xl-t-5-f {
        margin-top: 5px !important;
    }

    .mg-xl-r-5-f {
        margin-right: 5px !important;
    }

    .mg-xl-b-5-f {
        margin-bottom: 5px !important;
    }

    .mg-xl-l-5-f {
        margin-left: 5px !important;
    }

    .mg-xl-6 {
        margin: 6px;
    }

    .mg-xl-6-f {
        margin: 6px !important;
    }

    .mg-xl-y-6 {
        margin-top: 6px;
        margin-bottom: 6px;
    }

    .mg-xl-y-6-f {
        margin-top: 6px !important;
        margin-bottom: 6px !important;
    }

    .mg-xl-x-6 {
        margin-left: 6px;
        margin-right: 6px;
    }

    .mg-xl-x-6-f {
        margin-left: 6px !important;
        margin-right: 6px !important;
    }

    .mg-xl-t-6 {
        margin-top: 6px;
    }

    .mg-xl-r-6 {
        margin-right: 6px;
    }

    .mg-xl-b-6 {
        margin-bottom: 6px;
    }

    .mg-xl-l-6 {
        margin-left: 6px;
    }

    .mg-xl-t-6-f {
        margin-top: 6px !important;
    }

    .mg-xl-r-6-f {
        margin-right: 6px !important;
    }

    .mg-xl-b-6-f {
        margin-bottom: 6px !important;
    }

    .mg-xl-l-6-f {
        margin-left: 6px !important;
    }

    .mg-xl-7 {
        margin: 7px;
    }

    .mg-xl-7-f {
        margin: 7px !important;
    }

    .mg-xl-y-7 {
        margin-top: 7px;
        margin-bottom: 7px;
    }

    .mg-xl-y-7-f {
        margin-top: 7px !important;
        margin-bottom: 7px !important;
    }

    .mg-xl-x-7 {
        margin-left: 7px;
        margin-right: 7px;
    }

    .mg-xl-x-7-f {
        margin-left: 7px !important;
        margin-right: 7px !important;
    }

    .mg-xl-t-7 {
        margin-top: 7px;
    }

    .mg-xl-r-7 {
        margin-right: 7px;
    }

    .mg-xl-b-7 {
        margin-bottom: 7px;
    }

    .mg-xl-l-7 {
        margin-left: 7px;
    }

    .mg-xl-t-7-f {
        margin-top: 7px !important;
    }

    .mg-xl-r-7-f {
        margin-right: 7px !important;
    }

    .mg-xl-b-7-f {
        margin-bottom: 7px !important;
    }

    .mg-xl-l-7-f {
        margin-left: 7px !important;
    }

    .mg-xl-8 {
        margin: 8px;
    }

    .mg-xl-8-f {
        margin: 8px !important;
    }

    .mg-xl-y-8 {
        margin-top: 8px;
        margin-bottom: 8px;
    }

    .mg-xl-y-8-f {
        margin-top: 8px !important;
        margin-bottom: 8px !important;
    }

    .mg-xl-x-8 {
        margin-left: 8px;
        margin-right: 8px;
    }

    .mg-xl-x-8-f {
        margin-left: 8px !important;
        margin-right: 8px !important;
    }

    .mg-xl-t-8 {
        margin-top: 8px;
    }

    .mg-xl-r-8 {
        margin-right: 8px;
    }

    .mg-xl-b-8 {
        margin-bottom: 8px;
    }

    .mg-xl-l-8 {
        margin-left: 8px;
    }

    .mg-xl-t-8-f {
        margin-top: 8px !important;
    }

    .mg-xl-r-8-f {
        margin-right: 8px !important;
    }

    .mg-xl-b-8-f {
        margin-bottom: 8px !important;
    }

    .mg-xl-l-8-f {
        margin-left: 8px !important;
    }

    .mg-xl-9 {
        margin: 9px;
    }

    .mg-xl-9-f {
        margin: 9px !important;
    }

    .mg-xl-y-9 {
        margin-top: 9px;
        margin-bottom: 9px;
    }

    .mg-xl-y-9-f {
        margin-top: 9px !important;
        margin-bottom: 9px !important;
    }

    .mg-xl-x-9 {
        margin-left: 9px;
        margin-right: 9px;
    }

    .mg-xl-x-9-f {
        margin-left: 9px !important;
        margin-right: 9px !important;
    }

    .mg-xl-t-9 {
        margin-top: 9px;
    }

    .mg-xl-r-9 {
        margin-right: 9px;
    }

    .mg-xl-b-9 {
        margin-bottom: 9px;
    }

    .mg-xl-l-9 {
        margin-left: 9px;
    }

    .mg-xl-t-9-f {
        margin-top: 9px !important;
    }

    .mg-xl-r-9-f {
        margin-right: 9px !important;
    }

    .mg-xl-b-9-f {
        margin-bottom: 9px !important;
    }

    .mg-xl-l-9-f {
        margin-left: 9px !important;
    }

    .mg-xl-10 {
        margin: 10px;
    }

    .mg-xl-10-f {
        margin: 10px !important;
    }

    .mg-xl-y-10 {
        margin-top: 10px;
        margin-bottom: 10px;
    }

    .mg-xl-y-10-f {
        margin-top: 10px !important;
        margin-bottom: 10px !important;
    }

    .mg-xl-x-10 {
        margin-left: 10px;
        margin-right: 10px;
    }

    .mg-xl-x-10-f {
        margin-left: 10px !important;
        margin-right: 10px !important;
    }

    .mg-xl-t-10 {
        margin-top: 10px;
    }

    .mg-xl-r-10 {
        margin-right: 10px;
    }

    .mg-xl-b-10 {
        margin-bottom: 10px;
    }

    .mg-xl-l-10 {
        margin-left: 10px;
    }

    .mg-xl-t-10-f {
        margin-top: 10px !important;
    }

    .mg-xl-r-10-f {
        margin-right: 10px !important;
    }

    .mg-xl-b-10-f {
        margin-bottom: 10px !important;
    }

    .mg-xl-l-10-f {
        margin-left: 10px !important;
    }

    .mg-xl-15 {
        margin: 15px;
    }

    .mg-xl-15-f {
        margin: 15px !important;
    }

    .mg-xl-y-15 {
        margin-top: 15px;
        margin-bottom: 15px;
    }

    .mg-xl-y-15-f {
        margin-top: 15px !important;
        margin-bottom: 15px !important;
    }

    .mg-xl-x-15 {
        margin-left: 15px;
        margin-right: 15px;
    }

    .mg-xl-x-15-f {
        margin-left: 15px !important;
        margin-right: 15px !important;
    }

    .mg-xl-t-15 {
        margin-top: 15px;
    }

    .mg-xl-r-15 {
        margin-right: 15px;
    }

    .mg-xl-b-15 {
        margin-bottom: 15px;
    }

    .mg-xl-l-15 {
        margin-left: 15px;
    }

    .mg-xl-t-15-f {
        margin-top: 15px !important;
    }

    .mg-xl-r-15-f {
        margin-right: 15px !important;
    }

    .mg-xl-b-15-f {
        margin-bottom: 15px !important;
    }

    .mg-xl-l-15-f {
        margin-left: 15px !important;
    }

    .mg-xl-20 {
        margin: 20px;
    }

    .mg-xl-20-f {
        margin: 20px !important;
    }

    .mg-xl-y-20 {
        margin-top: 20px;
        margin-bottom: 20px;
    }

    .mg-xl-y-20-f {
        margin-top: 20px !important;
        margin-bottom: 20px !important;
    }

    .mg-xl-x-20 {
        margin-left: 20px;
        margin-right: 20px;
    }

    .mg-xl-x-20-f {
        margin-left: 20px !important;
        margin-right: 20px !important;
    }

    .mg-xl-t-20 {
        margin-top: 20px;
    }

    .mg-xl-r-20 {
        margin-right: 20px;
    }

    .mg-xl-b-20 {
        margin-bottom: 20px;
    }

    .mg-xl-l-20 {
        margin-left: 20px;
    }

    .mg-xl-t-20-f {
        margin-top: 20px !important;
    }

    .mg-xl-r-20-f {
        margin-right: 20px !important;
    }

    .mg-xl-b-20-f {
        margin-bottom: 20px !important;
    }

    .mg-xl-l-20-f {
        margin-left: 20px !important;
    }

    .mg-xl-25 {
        margin: 25px;
    }

    .mg-xl-25-f {
        margin: 25px !important;
    }

    .mg-xl-y-25 {
        margin-top: 25px;
        margin-bottom: 25px;
    }

    .mg-xl-y-25-f {
        margin-top: 25px !important;
        margin-bottom: 25px !important;
    }

    .mg-xl-x-25 {
        margin-left: 25px;
        margin-right: 25px;
    }

    .mg-xl-x-25-f {
        margin-left: 25px !important;
        margin-right: 25px !important;
    }

    .mg-xl-t-25 {
        margin-top: 25px;
    }

    .mg-xl-r-25 {
        margin-right: 25px;
    }

    .mg-xl-b-25 {
        margin-bottom: 25px;
    }

    .mg-xl-l-25 {
        margin-left: 25px;
    }

    .mg-xl-t-25-f {
        margin-top: 25px !important;
    }

    .mg-xl-r-25-f {
        margin-right: 25px !important;
    }

    .mg-xl-b-25-f {
        margin-bottom: 25px !important;
    }

    .mg-xl-l-25-f {
        margin-left: 25px !important;
    }

    .mg-xl-30 {
        margin: 30px;
    }

    .mg-xl-30-f {
        margin: 30px !important;
    }

    .mg-xl-y-30 {
        margin-top: 30px;
        margin-bottom: 30px;
    }

    .mg-xl-y-30-f {
        margin-top: 30px !important;
        margin-bottom: 30px !important;
    }

    .mg-xl-x-30 {
        margin-left: 30px;
        margin-right: 30px;
    }

    .mg-xl-x-30-f {
        margin-left: 30px !important;
        margin-right: 30px !important;
    }

    .mg-xl-t-30 {
        margin-top: 30px;
    }

    .mg-xl-r-30 {
        margin-right: 30px;
    }

    .mg-xl-b-30 {
        margin-bottom: 30px;
    }

    .mg-xl-l-30 {
        margin-left: 30px;
    }

    .mg-xl-t-30-f {
        margin-top: 30px !important;
    }

    .mg-xl-r-30-f {
        margin-right: 30px !important;
    }

    .mg-xl-b-30-f {
        margin-bottom: 30px !important;
    }

    .mg-xl-l-30-f {
        margin-left: 30px !important;
    }

    .mg-xl-35 {
        margin: 35px;
    }

    .mg-xl-35-f {
        margin: 35px !important;
    }

    .mg-xl-y-35 {
        margin-top: 35px;
        margin-bottom: 35px;
    }

    .mg-xl-y-35-f {
        margin-top: 35px !important;
        margin-bottom: 35px !important;
    }

    .mg-xl-x-35 {
        margin-left: 35px;
        margin-right: 35px;
    }

    .mg-xl-x-35-f {
        margin-left: 35px !important;
        margin-right: 35px !important;
    }

    .mg-xl-t-35 {
        margin-top: 35px;
    }

    .mg-xl-r-35 {
        margin-right: 35px;
    }

    .mg-xl-b-35 {
        margin-bottom: 35px;
    }

    .mg-xl-l-35 {
        margin-left: 35px;
    }

    .mg-xl-t-35-f {
        margin-top: 35px !important;
    }

    .mg-xl-r-35-f {
        margin-right: 35px !important;
    }

    .mg-xl-b-35-f {
        margin-bottom: 35px !important;
    }

    .mg-xl-l-35-f {
        margin-left: 35px !important;
    }

    .mg-xl-40 {
        margin: 40px;
    }

    .mg-xl-40-f {
        margin: 40px !important;
    }

    .mg-xl-y-40 {
        margin-top: 40px;
        margin-bottom: 40px;
    }

    .mg-xl-y-40-f {
        margin-top: 40px !important;
        margin-bottom: 40px !important;
    }

    .mg-xl-x-40 {
        margin-left: 40px;
        margin-right: 40px;
    }

    .mg-xl-x-40-f {
        margin-left: 40px !important;
        margin-right: 40px !important;
    }

    .mg-xl-t-40 {
        margin-top: 40px;
    }

    .mg-xl-r-40 {
        margin-right: 40px;
    }

    .mg-xl-b-40 {
        margin-bottom: 40px;
    }

    .mg-xl-l-40 {
        margin-left: 40px;
    }

    .mg-xl-t-40-f {
        margin-top: 40px !important;
    }

    .mg-xl-r-40-f {
        margin-right: 40px !important;
    }

    .mg-xl-b-40-f {
        margin-bottom: 40px !important;
    }

    .mg-xl-l-40-f {
        margin-left: 40px !important;
    }

    .mg-xl-45 {
        margin: 45px;
    }

    .mg-xl-45-f {
        margin: 45px !important;
    }

    .mg-xl-y-45 {
        margin-top: 45px;
        margin-bottom: 45px;
    }

    .mg-xl-y-45-f {
        margin-top: 45px !important;
        margin-bottom: 45px !important;
    }

    .mg-xl-x-45 {
        margin-left: 45px;
        margin-right: 45px;
    }

    .mg-xl-x-45-f {
        margin-left: 45px !important;
        margin-right: 45px !important;
    }

    .mg-xl-t-45 {
        margin-top: 45px;
    }

    .mg-xl-r-45 {
        margin-right: 45px;
    }

    .mg-xl-b-45 {
        margin-bottom: 45px;
    }

    .mg-xl-l-45 {
        margin-left: 45px;
    }

    .mg-xl-t-45-f {
        margin-top: 45px !important;
    }

    .mg-xl-r-45-f {
        margin-right: 45px !important;
    }

    .mg-xl-b-45-f {
        margin-bottom: 45px !important;
    }

    .mg-xl-l-45-f {
        margin-left: 45px !important;
    }

    .mg-xl-50 {
        margin: 50px;
    }

    .mg-xl-50-f {
        margin: 50px !important;
    }

    .mg-xl-y-50 {
        margin-top: 50px;
        margin-bottom: 50px;
    }

    .mg-xl-y-50-f {
        margin-top: 50px !important;
        margin-bottom: 50px !important;
    }

    .mg-xl-x-50 {
        margin-left: 50px;
        margin-right: 50px;
    }

    .mg-xl-x-50-f {
        margin-left: 50px !important;
        margin-right: 50px !important;
    }

    .mg-xl-t-50 {
        margin-top: 50px;
    }

    .mg-xl-r-50 {
        margin-right: 50px;
    }

    .mg-xl-b-50 {
        margin-bottom: 50px;
    }

    .mg-xl-l-50 {
        margin-left: 50px;
    }

    .mg-xl-t-50-f {
        margin-top: 50px !important;
    }

    .mg-xl-r-50-f {
        margin-right: 50px !important;
    }

    .mg-xl-b-50-f {
        margin-bottom: 50px !important;
    }

    .mg-xl-l-50-f {
        margin-left: 50px !important;
    }

    .mg-xl-55 {
        margin: 55px;
    }

    .mg-xl-55-f {
        margin: 55px !important;
    }

    .mg-xl-y-55 {
        margin-top: 55px;
        margin-bottom: 55px;
    }

    .mg-xl-y-55-f {
        margin-top: 55px !important;
        margin-bottom: 55px !important;
    }

    .mg-xl-x-55 {
        margin-left: 55px;
        margin-right: 55px;
    }

    .mg-xl-x-55-f {
        margin-left: 55px !important;
        margin-right: 55px !important;
    }

    .mg-xl-t-55 {
        margin-top: 55px;
    }

    .mg-xl-r-55 {
        margin-right: 55px;
    }

    .mg-xl-b-55 {
        margin-bottom: 55px;
    }

    .mg-xl-l-55 {
        margin-left: 55px;
    }

    .mg-xl-t-55-f {
        margin-top: 55px !important;
    }

    .mg-xl-r-55-f {
        margin-right: 55px !important;
    }

    .mg-xl-b-55-f {
        margin-bottom: 55px !important;
    }

    .mg-xl-l-55-f {
        margin-left: 55px !important;
    }

    .mg-xl-60 {
        margin: 60px;
    }

    .mg-xl-60-f {
        margin: 60px !important;
    }

    .mg-xl-y-60 {
        margin-top: 60px;
        margin-bottom: 60px;
    }

    .mg-xl-y-60-f {
        margin-top: 60px !important;
        margin-bottom: 60px !important;
    }

    .mg-xl-x-60 {
        margin-left: 60px;
        margin-right: 60px;
    }

    .mg-xl-x-60-f {
        margin-left: 60px !important;
        margin-right: 60px !important;
    }

    .mg-xl-t-60 {
        margin-top: 60px;
    }

    .mg-xl-r-60 {
        margin-right: 60px;
    }

    .mg-xl-b-60 {
        margin-bottom: 60px;
    }

    .mg-xl-l-60 {
        margin-left: 60px;
    }

    .mg-xl-t-60-f {
        margin-top: 60px !important;
    }

    .mg-xl-r-60-f {
        margin-right: 60px !important;
    }

    .mg-xl-b-60-f {
        margin-bottom: 60px !important;
    }

    .mg-xl-l-60-f {
        margin-left: 60px !important;
    }

    .mg-xl-65 {
        margin: 65px;
    }

    .mg-xl-65-f {
        margin: 65px !important;
    }

    .mg-xl-y-65 {
        margin-top: 65px;
        margin-bottom: 65px;
    }

    .mg-xl-y-65-f {
        margin-top: 65px !important;
        margin-bottom: 65px !important;
    }

    .mg-xl-x-65 {
        margin-left: 65px;
        margin-right: 65px;
    }

    .mg-xl-x-65-f {
        margin-left: 65px !important;
        margin-right: 65px !important;
    }

    .mg-xl-t-65 {
        margin-top: 65px;
    }

    .mg-xl-r-65 {
        margin-right: 65px;
    }

    .mg-xl-b-65 {
        margin-bottom: 65px;
    }

    .mg-xl-l-65 {
        margin-left: 65px;
    }

    .mg-xl-t-65-f {
        margin-top: 65px !important;
    }

    .mg-xl-r-65-f {
        margin-right: 65px !important;
    }

    .mg-xl-b-65-f {
        margin-bottom: 65px !important;
    }

    .mg-xl-l-65-f {
        margin-left: 65px !important;
    }

    .mg-xl-70 {
        margin: 70px;
    }

    .mg-xl-70-f {
        margin: 70px !important;
    }

    .mg-xl-y-70 {
        margin-top: 70px;
        margin-bottom: 70px;
    }

    .mg-xl-y-70-f {
        margin-top: 70px !important;
        margin-bottom: 70px !important;
    }

    .mg-xl-x-70 {
        margin-left: 70px;
        margin-right: 70px;
    }

    .mg-xl-x-70-f {
        margin-left: 70px !important;
        margin-right: 70px !important;
    }

    .mg-xl-t-70 {
        margin-top: 70px;
    }

    .mg-xl-r-70 {
        margin-right: 70px;
    }

    .mg-xl-b-70 {
        margin-bottom: 70px;
    }

    .mg-xl-l-70 {
        margin-left: 70px;
    }

    .mg-xl-t-70-f {
        margin-top: 70px !important;
    }

    .mg-xl-r-70-f {
        margin-right: 70px !important;
    }

    .mg-xl-b-70-f {
        margin-bottom: 70px !important;
    }

    .mg-xl-l-70-f {
        margin-left: 70px !important;
    }

    .mg-xl-75 {
        margin: 75px;
    }

    .mg-xl-75-f {
        margin: 75px !important;
    }

    .mg-xl-y-75 {
        margin-top: 75px;
        margin-bottom: 75px;
    }

    .mg-xl-y-75-f {
        margin-top: 75px !important;
        margin-bottom: 75px !important;
    }

    .mg-xl-x-75 {
        margin-left: 75px;
        margin-right: 75px;
    }

    .mg-xl-x-75-f {
        margin-left: 75px !important;
        margin-right: 75px !important;
    }

    .mg-xl-t-75 {
        margin-top: 75px;
    }

    .mg-xl-r-75 {
        margin-right: 75px;
    }

    .mg-xl-b-75 {
        margin-bottom: 75px;
    }

    .mg-xl-l-75 {
        margin-left: 75px;
    }

    .mg-xl-t-75-f {
        margin-top: 75px !important;
    }

    .mg-xl-r-75-f {
        margin-right: 75px !important;
    }

    .mg-xl-b-75-f {
        margin-bottom: 75px !important;
    }

    .mg-xl-l-75-f {
        margin-left: 75px !important;
    }

    .mg-xl-80 {
        margin: 80px;
    }

    .mg-xl-80-f {
        margin: 80px !important;
    }

    .mg-xl-y-80 {
        margin-top: 80px;
        margin-bottom: 80px;
    }

    .mg-xl-y-80-f {
        margin-top: 80px !important;
        margin-bottom: 80px !important;
    }

    .mg-xl-x-80 {
        margin-left: 80px;
        margin-right: 80px;
    }

    .mg-xl-x-80-f {
        margin-left: 80px !important;
        margin-right: 80px !important;
    }

    .mg-xl-t-80 {
        margin-top: 80px;
    }

    .mg-xl-r-80 {
        margin-right: 80px;
    }

    .mg-xl-b-80 {
        margin-bottom: 80px;
    }

    .mg-xl-l-80 {
        margin-left: 80px;
    }

    .mg-xl-t-80-f {
        margin-top: 80px !important;
    }

    .mg-xl-r-80-f {
        margin-right: 80px !important;
    }

    .mg-xl-b-80-f {
        margin-bottom: 80px !important;
    }

    .mg-xl-l-80-f {
        margin-left: 80px !important;
    }

    .mg-xl-85 {
        margin: 85px;
    }

    .mg-xl-85-f {
        margin: 85px !important;
    }

    .mg-xl-y-85 {
        margin-top: 85px;
        margin-bottom: 85px;
    }

    .mg-xl-y-85-f {
        margin-top: 85px !important;
        margin-bottom: 85px !important;
    }

    .mg-xl-x-85 {
        margin-left: 85px;
        margin-right: 85px;
    }

    .mg-xl-x-85-f {
        margin-left: 85px !important;
        margin-right: 85px !important;
    }

    .mg-xl-t-85 {
        margin-top: 85px;
    }

    .mg-xl-r-85 {
        margin-right: 85px;
    }

    .mg-xl-b-85 {
        margin-bottom: 85px;
    }

    .mg-xl-l-85 {
        margin-left: 85px;
    }

    .mg-xl-t-85-f {
        margin-top: 85px !important;
    }

    .mg-xl-r-85-f {
        margin-right: 85px !important;
    }

    .mg-xl-b-85-f {
        margin-bottom: 85px !important;
    }

    .mg-xl-l-85-f {
        margin-left: 85px !important;
    }

    .mg-xl-90 {
        margin: 90px;
    }

    .mg-xl-90-f {
        margin: 90px !important;
    }

    .mg-xl-y-90 {
        margin-top: 90px;
        margin-bottom: 90px;
    }

    .mg-xl-y-90-f {
        margin-top: 90px !important;
        margin-bottom: 90px !important;
    }

    .mg-xl-x-90 {
        margin-left: 90px;
        margin-right: 90px;
    }

    .mg-xl-x-90-f {
        margin-left: 90px !important;
        margin-right: 90px !important;
    }

    .mg-xl-t-90 {
        margin-top: 90px;
    }

    .mg-xl-r-90 {
        margin-right: 90px;
    }

    .mg-xl-b-90 {
        margin-bottom: 90px;
    }

    .mg-xl-l-90 {
        margin-left: 90px;
    }

    .mg-xl-t-90-f {
        margin-top: 90px !important;
    }

    .mg-xl-r-90-f {
        margin-right: 90px !important;
    }

    .mg-xl-b-90-f {
        margin-bottom: 90px !important;
    }

    .mg-xl-l-90-f {
        margin-left: 90px !important;
    }

    .mg-xl-95 {
        margin: 95px;
    }

    .mg-xl-95-f {
        margin: 95px !important;
    }

    .mg-xl-y-95 {
        margin-top: 95px;
        margin-bottom: 95px;
    }

    .mg-xl-y-95-f {
        margin-top: 95px !important;
        margin-bottom: 95px !important;
    }

    .mg-xl-x-95 {
        margin-left: 95px;
        margin-right: 95px;
    }

    .mg-xl-x-95-f {
        margin-left: 95px !important;
        margin-right: 95px !important;
    }

    .mg-xl-t-95 {
        margin-top: 95px;
    }

    .mg-xl-r-95 {
        margin-right: 95px;
    }

    .mg-xl-b-95 {
        margin-bottom: 95px;
    }

    .mg-xl-l-95 {
        margin-left: 95px;
    }

    .mg-xl-t-95-f {
        margin-top: 95px !important;
    }

    .mg-xl-r-95-f {
        margin-right: 95px !important;
    }

    .mg-xl-b-95-f {
        margin-bottom: 95px !important;
    }

    .mg-xl-l-95-f {
        margin-left: 95px !important;
    }

    .mg-xl-100 {
        margin: 100px;
    }

    .mg-xl-100-f {
        margin: 100px !important;
    }

    .mg-xl-y-100 {
        margin-top: 100px;
        margin-bottom: 100px;
    }

    .mg-xl-y-100-f {
        margin-top: 100px !important;
        margin-bottom: 100px !important;
    }

    .mg-xl-x-100 {
        margin-left: 100px;
        margin-right: 100px;
    }

    .mg-xl-x-100-f {
        margin-left: 100px !important;
        margin-right: 100px !important;
    }

    .mg-xl-t-100 {
        margin-top: 100px;
    }

    .mg-xl-r-100 {
        margin-right: 100px;
    }

    .mg-xl-b-100 {
        margin-bottom: 100px;
    }

    .mg-xl-l-100 {
        margin-left: 100px;
    }

    .mg-xl-t-100-f {
        margin-top: 100px !important;
    }

    .mg-xl-r-100-f {
        margin-right: 100px !important;
    }

    .mg-xl-b-100-f {
        margin-bottom: 100px !important;
    }

    .mg-xl-l-100-f {
        margin-left: 100px !important;
    }

    .mg-xl-t-auto {
        margin-top: auto;
    }

    .mg-xl-r-auto {
        margin-right: auto;
    }

    .mg-xl-b-auto {
        margin-bottom: auto;
    }

    .mg-xl-l-auto {
        margin-left: auto;
    }

    .mg-xl-auto {
        margin: auto;
    }

    .mg-xl-x-auto {
        margin-left: auto;
        margin-right: auto;
    }
}

.m-0 {
    margin: 0 !important;
}

.mt-0,
.my-0 {
    margin-top: 0 !important;
}

.mr-0,
.mx-0 {
    margin-right: 0 !important;
}

.mb-0,
.my-0 {
    margin-bottom: 0 !important;
}

.ml-0,
.mx-0 {
    margin-left: 0 !important;
}

.m-1 {
    margin: 0.25rem !important;
}

.mt-1,
.my-1 {
    margin-top: 0.25rem !important;
}

.mr-1,
.mx-1 {
    margin-right: 0.25rem !important;
}

.mb-1,
.my-1 {
    margin-bottom: 0.25rem !important;
}

.ml-1,
.mx-1 {
    margin-left: 0.25rem !important;
}

.m-2 {
    margin: 0.5rem !important;
}

.mt-2,
.my-2 {
    margin-top: 0.5rem !important;
}

.mr-2,
.mx-2 {
    margin-right: 0.5rem !important;
}

.mb-2,
.my-2 {
    margin-bottom: 0.5rem !important;
}

.ml-2,
.mx-2 {
    margin-left: 0.5rem !important;
}

.m-3 {
    margin: 1rem !important;
}

.mt-3,
.my-3 {
    margin-top: 1rem !important;
}

.mr-3,
.mx-3 {
    margin-right: 1rem !important;
}

.mb-3,
.my-3 {
    margin-bottom: 1rem !important;
}

.ml-3,
.mx-3 {
    margin-left: 1rem !important;
}

.m-4 {
    margin: 1.5rem !important;
}

.mt-4,
.my-4 {
    margin-top: 1.5rem !important;
}

.mr-4,
.mx-4 {
    margin-right: 1.5rem !important;
}

.mb-4,
.my-4 {
    margin-bottom: 1.5rem !important;
}

.ml-4,
.mx-4 {
    margin-left: 1.5rem !important;
}

.m-5 {
    margin: 3rem !important;
}

.mt-5,
.my-5 {
    margin-top: 3rem !important;
}

.mr-5,
.mx-5 {
    margin-right: 3rem !important;
}

.mb-5,
.my-5 {
    margin-bottom: 3rem !important;
}

.ml-5,
.mx-5 {
    margin-left: 3rem !important;
}

.p-0 {
    padding: 0 !important;
}

.pt-0,
.py-0 {
    padding-top: 0 !important;
}

.pr-0,
.px-0 {
    padding-right: 0 !important;
}

.pb-0,
.py-0 {
    padding-bottom: 0 !important;
}

.pl-0,
.px-0 {
    padding-left: 0 !important;
}

.p-1 {
    padding: 0.25rem !important;
}

.pt-1,
.py-1 {
    padding-top: 0.25rem !important;
}

.pr-1,
.px-1 {
    padding-right: 0.25rem !important;
}

.pb-1,
.py-1 {
    padding-bottom: 0.25rem !important;
}

.pl-1,
.px-1 {
    padding-left: 0.25rem !important;
}

.p-2 {
    padding: 0.5rem !important;
}

.pt-2,
.py-2 {
    padding-top: 0.5rem !important;
}

.pr-2,
.px-2 {
    padding-right: 0.5rem !important;
}

.pb-2,
.py-2 {
    padding-bottom: 0.5rem !important;
}

.pl-2,
.px-2 {
    padding-left: 0.5rem !important;
}

.p-3 {
    padding: 1rem !important;
}

.pt-3,
.py-3 {
    padding-top: 1rem !important;
}

.pr-3,
.px-3 {
    padding-right: 1rem !important;
}

.pb-3,
.py-3 {
    padding-bottom: 1rem !important;
}

.pl-3,
.px-3 {
    padding-left: 1rem !important;
}

.p-4 {
    padding: 1.5rem !important;
}

.pt-4,
.py-4 {
    padding-top: 1.5rem !important;
}

.pr-4,
.px-4 {
    padding-right: 1.5rem !important;
}

.pb-4,
.py-4 {
    padding-bottom: 1.5rem !important;
}

.pl-4,
.px-4 {
    padding-left: 1.5rem !important;
}

.p-5 {
    padding: 3rem !important;
}

.pt-5,
.py-5 {
    padding-top: 3rem !important;
}

.pr-5,
.px-5 {
    padding-right: 3rem !important;
}

.pb-5,
.py-5 {
    padding-bottom: 3rem !important;
}

.pl-5,
.px-5 {
    padding-left: 3rem !important;
}

.m-n1 {
    margin: -0.25rem !important;
}

.mt-n1,
.my-n1 {
    margin-top: -0.25rem !important;
}

.mr-n1,
.mx-n1 {
    margin-right: -0.25rem !important;
}

.mb-n1,
.my-n1 {
    margin-bottom: -0.25rem !important;
}

.ml-n1,
.mx-n1 {
    margin-left: -0.25rem !important;
}

.m-n2 {
    margin: -0.5rem !important;
}

.mt-n2,
.my-n2 {
    margin-top: -0.5rem !important;
}

.mr-n2,
.mx-n2 {
    margin-right: -0.5rem !important;
}

.mb-n2,
.my-n2 {
    margin-bottom: -0.5rem !important;
}

.ml-n2,
.mx-n2 {
    margin-left: -0.5rem !important;
}

.m-n3 {
    margin: -1rem !important;
}

.mt-n3,
.my-n3 {
    margin-top: -1rem !important;
}

.mr-n3,
.mx-n3 {
    margin-right: -1rem !important;
}

.mb-n3,
.my-n3 {
    margin-bottom: -1rem !important;
}

.ml-n3,
.mx-n3 {
    margin-left: -1rem !important;
}

.m-n4 {
    margin: -1.5rem !important;
}

.mt-n4,
.my-n4 {
    margin-top: -1.5rem !important;
}

.mr-n4,
.mx-n4 {
    margin-right: -1.5rem !important;
}

.mb-n4,
.my-n4 {
    margin-bottom: -1.5rem !important;
}

.ml-n4,
.mx-n4 {
    margin-left: -1.5rem !important;
}

.m-n5 {
    margin: -3rem !important;
}

.mt-n5,
.my-n5 {
    margin-top: -3rem !important;
}

.mr-n5,
.mx-n5 {
    margin-right: -3rem !important;
}

.mb-n5,
.my-n5 {
    margin-bottom: -3rem !important;
}

.ml-n5,
.mx-n5 {
    margin-left: -3rem !important;
}

.m-auto {
    margin: auto !important;
}

.mt-auto,
.my-auto {
    margin-top: auto !important;
}

.mr-auto,
.mx-auto {
    margin-right: auto !important;
}

.mb-auto,
.my-auto {
    margin-bottom: auto !important;
}

.ml-auto,
.mx-auto {
    margin-left: auto !important;
}

@media (min-width: 576px) {
    .m-sm-0 {
        margin: 0 !important;
    }

    .mt-sm-0,
    .my-sm-0 {
        margin-top: 0 !important;
    }

    .mr-sm-0,
    .mx-sm-0 {
        margin-right: 0 !important;
    }

    .mb-sm-0,
    .my-sm-0 {
        margin-bottom: 0 !important;
    }

    .ml-sm-0,
    .mx-sm-0 {
        margin-left: 0 !important;
    }

    .m-sm-1 {
        margin: 0.25rem !important;
    }

    .mt-sm-1,
    .my-sm-1 {
        margin-top: 0.25rem !important;
    }

    .mr-sm-1,
    .mx-sm-1 {
        margin-right: 0.25rem !important;
    }

    .mb-sm-1,
    .my-sm-1 {
        margin-bottom: 0.25rem !important;
    }

    .ml-sm-1,
    .mx-sm-1 {
        margin-left: 0.25rem !important;
    }

    .m-sm-2 {
        margin: 0.5rem !important;
    }

    .mt-sm-2,
    .my-sm-2 {
        margin-top: 0.5rem !important;
    }

    .mr-sm-2,
    .mx-sm-2 {
        margin-right: 0.5rem !important;
    }

    .mb-sm-2,
    .my-sm-2 {
        margin-bottom: 0.5rem !important;
    }

    .ml-sm-2,
    .mx-sm-2 {
        margin-left: 0.5rem !important;
    }

    .m-sm-3 {
        margin: 1rem !important;
    }

    .mt-sm-3,
    .my-sm-3 {
        margin-top: 1rem !important;
    }

    .mr-sm-3,
    .mx-sm-3 {
        margin-right: 1rem !important;
    }

    .mb-sm-3,
    .my-sm-3 {
        margin-bottom: 1rem !important;
    }

    .ml-sm-3,
    .mx-sm-3 {
        margin-left: 1rem !important;
    }

    .m-sm-4 {
        margin: 1.5rem !important;
    }

    .mt-sm-4,
    .my-sm-4 {
        margin-top: 1.5rem !important;
    }

    .mr-sm-4,
    .mx-sm-4 {
        margin-right: 1.5rem !important;
    }

    .mb-sm-4,
    .my-sm-4 {
        margin-bottom: 1.5rem !important;
    }

    .ml-sm-4,
    .mx-sm-4 {
        margin-left: 1.5rem !important;
    }

    .m-sm-5 {
        margin: 3rem !important;
    }

    .mt-sm-5,
    .my-sm-5 {
        margin-top: 3rem !important;
    }

    .mr-sm-5,
    .mx-sm-5 {
        margin-right: 3rem !important;
    }

    .mb-sm-5,
    .my-sm-5 {
        margin-bottom: 3rem !important;
    }

    .ml-sm-5,
    .mx-sm-5 {
        margin-left: 3rem !important;
    }

    .p-sm-0 {
        padding: 0 !important;
    }

    .pt-sm-0,
    .py-sm-0 {
        padding-top: 0 !important;
    }

    .pr-sm-0,
    .px-sm-0 {
        padding-right: 0 !important;
    }

    .pb-sm-0,
    .py-sm-0 {
        padding-bottom: 0 !important;
    }

    .pl-sm-0,
    .px-sm-0 {
        padding-left: 0 !important;
    }

    .p-sm-1 {
        padding: 0.25rem !important;
    }

    .pt-sm-1,
    .py-sm-1 {
        padding-top: 0.25rem !important;
    }

    .pr-sm-1,
    .px-sm-1 {
        padding-right: 0.25rem !important;
    }

    .pb-sm-1,
    .py-sm-1 {
        padding-bottom: 0.25rem !important;
    }

    .pl-sm-1,
    .px-sm-1 {
        padding-left: 0.25rem !important;
    }

    .p-sm-2 {
        padding: 0.5rem !important;
    }

    .pt-sm-2,
    .py-sm-2 {
        padding-top: 0.5rem !important;
    }

    .pr-sm-2,
    .px-sm-2 {
        padding-right: 0.5rem !important;
    }

    .pb-sm-2,
    .py-sm-2 {
        padding-bottom: 0.5rem !important;
    }

    .pl-sm-2,
    .px-sm-2 {
        padding-left: 0.5rem !important;
    }

    .p-sm-3 {
        padding: 1rem !important;
    }

    .pt-sm-3,
    .py-sm-3 {
        padding-top: 1rem !important;
    }

    .pr-sm-3,
    .px-sm-3 {
        padding-right: 1rem !important;
    }

    .pb-sm-3,
    .py-sm-3 {
        padding-bottom: 1rem !important;
    }

    .pl-sm-3,
    .px-sm-3 {
        padding-left: 1rem !important;
    }

    .p-sm-4 {
        padding: 1.5rem !important;
    }

    .pt-sm-4,
    .py-sm-4 {
        padding-top: 1.5rem !important;
    }

    .pr-sm-4,
    .px-sm-4 {
        padding-right: 1.5rem !important;
    }

    .pb-sm-4,
    .py-sm-4 {
        padding-bottom: 1.5rem !important;
    }

    .pl-sm-4,
    .px-sm-4 {
        padding-left: 1.5rem !important;
    }

    .p-sm-5 {
        padding: 3rem !important;
    }

    .pt-sm-5,
    .py-sm-5 {
        padding-top: 3rem !important;
    }

    .pr-sm-5,
    .px-sm-5 {
        padding-right: 3rem !important;
    }

    .pb-sm-5,
    .py-sm-5 {
        padding-bottom: 3rem !important;
    }

    .pl-sm-5,
    .px-sm-5 {
        padding-left: 3rem !important;
    }

    .m-sm-n1 {
        margin: -0.25rem !important;
    }

    .mt-sm-n1,
    .my-sm-n1 {
        margin-top: -0.25rem !important;
    }

    .mr-sm-n1,
    .mx-sm-n1 {
        margin-right: -0.25rem !important;
    }

    .mb-sm-n1,
    .my-sm-n1 {
        margin-bottom: -0.25rem !important;
    }

    .ml-sm-n1,
    .mx-sm-n1 {
        margin-left: -0.25rem !important;
    }

    .m-sm-n2 {
        margin: -0.5rem !important;
    }

    .mt-sm-n2,
    .my-sm-n2 {
        margin-top: -0.5rem !important;
    }

    .mr-sm-n2,
    .mx-sm-n2 {
        margin-right: -0.5rem !important;
    }

    .mb-sm-n2,
    .my-sm-n2 {
        margin-bottom: -0.5rem !important;
    }

    .ml-sm-n2,
    .mx-sm-n2 {
        margin-left: -0.5rem !important;
    }

    .m-sm-n3 {
        margin: -1rem !important;
    }

    .mt-sm-n3,
    .my-sm-n3 {
        margin-top: -1rem !important;
    }

    .mr-sm-n3,
    .mx-sm-n3 {
        margin-right: -1rem !important;
    }

    .mb-sm-n3,
    .my-sm-n3 {
        margin-bottom: -1rem !important;
    }

    .ml-sm-n3,
    .mx-sm-n3 {
        margin-left: -1rem !important;
    }

    .m-sm-n4 {
        margin: -1.5rem !important;
    }

    .mt-sm-n4,
    .my-sm-n4 {
        margin-top: -1.5rem !important;
    }

    .mr-sm-n4,
    .mx-sm-n4 {
        margin-right: -1.5rem !important;
    }

    .mb-sm-n4,
    .my-sm-n4 {
        margin-bottom: -1.5rem !important;
    }

    .ml-sm-n4,
    .mx-sm-n4 {
        margin-left: -1.5rem !important;
    }

    .m-sm-n5 {
        margin: -3rem !important;
    }

    .mt-sm-n5,
    .my-sm-n5 {
        margin-top: -3rem !important;
    }

    .mr-sm-n5,
    .mx-sm-n5 {
        margin-right: -3rem !important;
    }

    .mb-sm-n5,
    .my-sm-n5 {
        margin-bottom: -3rem !important;
    }

    .ml-sm-n5,
    .mx-sm-n5 {
        margin-left: -3rem !important;
    }

    .m-sm-auto {
        margin: auto !important;
    }

    .mt-sm-auto,
    .my-sm-auto {
        margin-top: auto !important;
    }

    .mr-sm-auto,
    .mx-sm-auto {
        margin-right: auto !important;
    }

    .mb-sm-auto,
    .my-sm-auto {
        margin-bottom: auto !important;
    }

    .ml-sm-auto,
    .mx-sm-auto {
        margin-left: auto !important;
    }
}

@media (min-width: 768px) {
    .m-md-0 {
        margin: 0 !important;
    }

    .mt-md-0,
    .my-md-0 {
        margin-top: 0 !important;
    }

    .mr-md-0,
    .mx-md-0 {
        margin-right: 0 !important;
    }

    .mb-md-0,
    .my-md-0 {
        margin-bottom: 0 !important;
    }

    .ml-md-0,
    .mx-md-0 {
        margin-left: 0 !important;
    }

    .m-md-1 {
        margin: 0.25rem !important;
    }

    .mt-md-1,
    .my-md-1 {
        margin-top: 0.25rem !important;
    }

    .mr-md-1,
    .mx-md-1 {
        margin-right: 0.25rem !important;
    }

    .mb-md-1,
    .my-md-1 {
        margin-bottom: 0.25rem !important;
    }

    .ml-md-1,
    .mx-md-1 {
        margin-left: 0.25rem !important;
    }

    .m-md-2 {
        margin: 0.5rem !important;
    }

    .mt-md-2,
    .my-md-2 {
        margin-top: 0.5rem !important;
    }

    .mr-md-2,
    .mx-md-2 {
        margin-right: 0.5rem !important;
    }

    .mb-md-2,
    .my-md-2 {
        margin-bottom: 0.5rem !important;
    }

    .ml-md-2,
    .mx-md-2 {
        margin-left: 0.5rem !important;
    }

    .m-md-3 {
        margin: 1rem !important;
    }

    .mt-md-3,
    .my-md-3 {
        margin-top: 1rem !important;
    }

    .mr-md-3,
    .mx-md-3 {
        margin-right: 1rem !important;
    }

    .mb-md-3,
    .my-md-3 {
        margin-bottom: 1rem !important;
    }

    .ml-md-3,
    .mx-md-3 {
        margin-left: 1rem !important;
    }

    .m-md-4 {
        margin: 1.5rem !important;
    }

    .mt-md-4,
    .my-md-4 {
        margin-top: 1.5rem !important;
    }

    .mr-md-4,
    .mx-md-4 {
        margin-right: 1.5rem !important;
    }

    .mb-md-4,
    .my-md-4 {
        margin-bottom: 1.5rem !important;
    }

    .ml-md-4,
    .mx-md-4 {
        margin-left: 1.5rem !important;
    }

    .m-md-5 {
        margin: 3rem !important;
    }

    .mt-md-5,
    .my-md-5 {
        margin-top: 3rem !important;
    }

    .mr-md-5,
    .mx-md-5 {
        margin-right: 3rem !important;
    }

    .mb-md-5,
    .my-md-5 {
        margin-bottom: 3rem !important;
    }

    .ml-md-5,
    .mx-md-5 {
        margin-left: 3rem !important;
    }

    .p-md-0 {
        padding: 0 !important;
    }

    .pt-md-0,
    .py-md-0 {
        padding-top: 0 !important;
    }

    .pr-md-0,
    .px-md-0 {
        padding-right: 0 !important;
    }

    .pb-md-0,
    .py-md-0 {
        padding-bottom: 0 !important;
    }

    .pl-md-0,
    .px-md-0 {
        padding-left: 0 !important;
    }

    .p-md-1 {
        padding: 0.25rem !important;
    }

    .pt-md-1,
    .py-md-1 {
        padding-top: 0.25rem !important;
    }

    .pr-md-1,
    .px-md-1 {
        padding-right: 0.25rem !important;
    }

    .pb-md-1,
    .py-md-1 {
        padding-bottom: 0.25rem !important;
    }

    .pl-md-1,
    .px-md-1 {
        padding-left: 0.25rem !important;
    }

    .p-md-2 {
        padding: 0.5rem !important;
    }

    .pt-md-2,
    .py-md-2 {
        padding-top: 0.5rem !important;
    }

    .pr-md-2,
    .px-md-2 {
        padding-right: 0.5rem !important;
    }

    .pb-md-2,
    .py-md-2 {
        padding-bottom: 0.5rem !important;
    }

    .pl-md-2,
    .px-md-2 {
        padding-left: 0.5rem !important;
    }

    .p-md-3 {
        padding: 1rem !important;
    }

    .pt-md-3,
    .py-md-3 {
        padding-top: 1rem !important;
    }

    .pr-md-3,
    .px-md-3 {
        padding-right: 1rem !important;
    }

    .pb-md-3,
    .py-md-3 {
        padding-bottom: 1rem !important;
    }

    .pl-md-3,
    .px-md-3 {
        padding-left: 1rem !important;
    }

    .p-md-4 {
        padding: 1.5rem !important;
    }

    .pt-md-4,
    .py-md-4 {
        padding-top: 1.5rem !important;
    }

    .pr-md-4,
    .px-md-4 {
        padding-right: 1.5rem !important;
    }

    .pb-md-4,
    .py-md-4 {
        padding-bottom: 1.5rem !important;
    }

    .pl-md-4,
    .px-md-4 {
        padding-left: 1.5rem !important;
    }

    .p-md-5 {
        padding: 3rem !important;
    }

    .pt-md-5,
    .py-md-5 {
        padding-top: 3rem !important;
    }

    .pr-md-5,
    .px-md-5 {
        padding-right: 3rem !important;
    }

    .pb-md-5,
    .py-md-5 {
        padding-bottom: 3rem !important;
    }

    .pl-md-5,
    .px-md-5 {
        padding-left: 3rem !important;
    }

    .m-md-n1 {
        margin: -0.25rem !important;
    }

    .mt-md-n1,
    .my-md-n1 {
        margin-top: -0.25rem !important;
    }

    .mr-md-n1,
    .mx-md-n1 {
        margin-right: -0.25rem !important;
    }

    .mb-md-n1,
    .my-md-n1 {
        margin-bottom: -0.25rem !important;
    }

    .ml-md-n1,
    .mx-md-n1 {
        margin-left: -0.25rem !important;
    }

    .m-md-n2 {
        margin: -0.5rem !important;
    }

    .mt-md-n2,
    .my-md-n2 {
        margin-top: -0.5rem !important;
    }

    .mr-md-n2,
    .mx-md-n2 {
        margin-right: -0.5rem !important;
    }

    .mb-md-n2,
    .my-md-n2 {
        margin-bottom: -0.5rem !important;
    }

    .ml-md-n2,
    .mx-md-n2 {
        margin-left: -0.5rem !important;
    }

    .m-md-n3 {
        margin: -1rem !important;
    }

    .mt-md-n3,
    .my-md-n3 {
        margin-top: -1rem !important;
    }

    .mr-md-n3,
    .mx-md-n3 {
        margin-right: -1rem !important;
    }

    .mb-md-n3,
    .my-md-n3 {
        margin-bottom: -1rem !important;
    }

    .ml-md-n3,
    .mx-md-n3 {
        margin-left: -1rem !important;
    }

    .m-md-n4 {
        margin: -1.5rem !important;
    }

    .mt-md-n4,
    .my-md-n4 {
        margin-top: -1.5rem !important;
    }

    .mr-md-n4,
    .mx-md-n4 {
        margin-right: -1.5rem !important;
    }

    .mb-md-n4,
    .my-md-n4 {
        margin-bottom: -1.5rem !important;
    }

    .ml-md-n4,
    .mx-md-n4 {
        margin-left: -1.5rem !important;
    }

    .m-md-n5 {
        margin: -3rem !important;
    }

    .mt-md-n5,
    .my-md-n5 {
        margin-top: -3rem !important;
    }

    .mr-md-n5,
    .mx-md-n5 {
        margin-right: -3rem !important;
    }

    .mb-md-n5,
    .my-md-n5 {
        margin-bottom: -3rem !important;
    }

    .ml-md-n5,
    .mx-md-n5 {
        margin-left: -3rem !important;
    }

    .m-md-auto {
        margin: auto !important;
    }

    .mt-md-auto,
    .my-md-auto {
        margin-top: auto !important;
    }

    .mr-md-auto,
    .mx-md-auto {
        margin-right: auto !important;
    }

    .mb-md-auto,
    .my-md-auto {
        margin-bottom: auto !important;
    }

    .ml-md-auto,
    .mx-md-auto {
        margin-left: auto !important;
    }
}

@media (min-width: 992px) {
    .m-lg-0 {
        margin: 0 !important;
    }

    .mt-lg-0,
    .my-lg-0 {
        margin-top: 0 !important;
    }

    .mr-lg-0,
    .mx-lg-0 {
        margin-right: 0 !important;
    }

    .mb-lg-0,
    .my-lg-0 {
        margin-bottom: 0 !important;
    }

    .ml-lg-0,
    .mx-lg-0 {
        margin-left: 0 !important;
    }

    .m-lg-1 {
        margin: 0.25rem !important;
    }

    .mt-lg-1,
    .my-lg-1 {
        margin-top: 0.25rem !important;
    }

    .mr-lg-1,
    .mx-lg-1 {
        margin-right: 0.25rem !important;
    }

    .mb-lg-1,
    .my-lg-1 {
        margin-bottom: 0.25rem !important;
    }

    .ml-lg-1,
    .mx-lg-1 {
        margin-left: 0.25rem !important;
    }

    .m-lg-2 {
        margin: 0.5rem !important;
    }

    .mt-lg-2,
    .my-lg-2 {
        margin-top: 0.5rem !important;
    }

    .mr-lg-2,
    .mx-lg-2 {
        margin-right: 0.5rem !important;
    }

    .mb-lg-2,
    .my-lg-2 {
        margin-bottom: 0.5rem !important;
    }

    .ml-lg-2,
    .mx-lg-2 {
        margin-left: 0.5rem !important;
    }

    .m-lg-3 {
        margin: 1rem !important;
    }

    .mt-lg-3,
    .my-lg-3 {
        margin-top: 1rem !important;
    }

    .mr-lg-3,
    .mx-lg-3 {
        margin-right: 1rem !important;
    }

    .mb-lg-3,
    .my-lg-3 {
        margin-bottom: 1rem !important;
    }

    .ml-lg-3,
    .mx-lg-3 {
        margin-left: 1rem !important;
    }

    .m-lg-4 {
        margin: 1.5rem !important;
    }

    .mt-lg-4,
    .my-lg-4 {
        margin-top: 1.5rem !important;
    }

    .mr-lg-4,
    .mx-lg-4 {
        margin-right: 1.5rem !important;
    }

    .mb-lg-4,
    .my-lg-4 {
        margin-bottom: 1.5rem !important;
    }

    .ml-lg-4,
    .mx-lg-4 {
        margin-left: 1.5rem !important;
    }

    .m-lg-5 {
        margin: 3rem !important;
    }

    .mt-lg-5,
    .my-lg-5 {
        margin-top: 3rem !important;
    }

    .mr-lg-5,
    .mx-lg-5 {
        margin-right: 3rem !important;
    }

    .mb-lg-5,
    .my-lg-5 {
        margin-bottom: 3rem !important;
    }

    .ml-lg-5,
    .mx-lg-5 {
        margin-left: 3rem !important;
    }

    .p-lg-0 {
        padding: 0 !important;
    }

    .pt-lg-0,
    .py-lg-0 {
        padding-top: 0 !important;
    }

    .pr-lg-0,
    .px-lg-0 {
        padding-right: 0 !important;
    }

    .pb-lg-0,
    .py-lg-0 {
        padding-bottom: 0 !important;
    }

    .pl-lg-0,
    .px-lg-0 {
        padding-left: 0 !important;
    }

    .p-lg-1 {
        padding: 0.25rem !important;
    }

    .pt-lg-1,
    .py-lg-1 {
        padding-top: 0.25rem !important;
    }

    .pr-lg-1,
    .px-lg-1 {
        padding-right: 0.25rem !important;
    }

    .pb-lg-1,
    .py-lg-1 {
        padding-bottom: 0.25rem !important;
    }

    .pl-lg-1,
    .px-lg-1 {
        padding-left: 0.25rem !important;
    }

    .p-lg-2 {
        padding: 0.5rem !important;
    }

    .pt-lg-2,
    .py-lg-2 {
        padding-top: 0.5rem !important;
    }

    .pr-lg-2,
    .px-lg-2 {
        padding-right: 0.5rem !important;
    }

    .pb-lg-2,
    .py-lg-2 {
        padding-bottom: 0.5rem !important;
    }

    .pl-lg-2,
    .px-lg-2 {
        padding-left: 0.5rem !important;
    }

    .p-lg-3 {
        padding: 1rem !important;
    }

    .pt-lg-3,
    .py-lg-3 {
        padding-top: 1rem !important;
    }

    .pr-lg-3,
    .px-lg-3 {
        padding-right: 1rem !important;
    }

    .pb-lg-3,
    .py-lg-3 {
        padding-bottom: 1rem !important;
    }

    .pl-lg-3,
    .px-lg-3 {
        padding-left: 1rem !important;
    }

    .p-lg-4 {
        padding: 1.5rem !important;
    }

    .pt-lg-4,
    .py-lg-4 {
        padding-top: 1.5rem !important;
    }

    .pr-lg-4,
    .px-lg-4 {
        padding-right: 1.5rem !important;
    }

    .pb-lg-4,
    .py-lg-4 {
        padding-bottom: 1.5rem !important;
    }

    .pl-lg-4,
    .px-lg-4 {
        padding-left: 1.5rem !important;
    }

    .p-lg-5 {
        padding: 3rem !important;
    }

    .pt-lg-5,
    .py-lg-5 {
        padding-top: 3rem !important;
    }

    .pr-lg-5,
    .px-lg-5 {
        padding-right: 3rem !important;
    }

    .pb-lg-5,
    .py-lg-5 {
        padding-bottom: 3rem !important;
    }

    .pl-lg-5,
    .px-lg-5 {
        padding-left: 3rem !important;
    }

    .m-lg-n1 {
        margin: -0.25rem !important;
    }

    .mt-lg-n1,
    .my-lg-n1 {
        margin-top: -0.25rem !important;
    }

    .mr-lg-n1,
    .mx-lg-n1 {
        margin-right: -0.25rem !important;
    }

    .mb-lg-n1,
    .my-lg-n1 {
        margin-bottom: -0.25rem !important;
    }

    .ml-lg-n1,
    .mx-lg-n1 {
        margin-left: -0.25rem !important;
    }

    .m-lg-n2 {
        margin: -0.5rem !important;
    }

    .mt-lg-n2,
    .my-lg-n2 {
        margin-top: -0.5rem !important;
    }

    .mr-lg-n2,
    .mx-lg-n2 {
        margin-right: -0.5rem !important;
    }

    .mb-lg-n2,
    .my-lg-n2 {
        margin-bottom: -0.5rem !important;
    }

    .ml-lg-n2,
    .mx-lg-n2 {
        margin-left: -0.5rem !important;
    }

    .m-lg-n3 {
        margin: -1rem !important;
    }

    .mt-lg-n3,
    .my-lg-n3 {
        margin-top: -1rem !important;
    }

    .mr-lg-n3,
    .mx-lg-n3 {
        margin-right: -1rem !important;
    }

    .mb-lg-n3,
    .my-lg-n3 {
        margin-bottom: -1rem !important;
    }

    .ml-lg-n3,
    .mx-lg-n3 {
        margin-left: -1rem !important;
    }

    .m-lg-n4 {
        margin: -1.5rem !important;
    }

    .mt-lg-n4,
    .my-lg-n4 {
        margin-top: -1.5rem !important;
    }

    .mr-lg-n4,
    .mx-lg-n4 {
        margin-right: -1.5rem !important;
    }

    .mb-lg-n4,
    .my-lg-n4 {
        margin-bottom: -1.5rem !important;
    }

    .ml-lg-n4,
    .mx-lg-n4 {
        margin-left: -1.5rem !important;
    }

    .m-lg-n5 {
        margin: -3rem !important;
    }

    .mt-lg-n5,
    .my-lg-n5 {
        margin-top: -3rem !important;
    }

    .mr-lg-n5,
    .mx-lg-n5 {
        margin-right: -3rem !important;
    }

    .mb-lg-n5,
    .my-lg-n5 {
        margin-bottom: -3rem !important;
    }

    .ml-lg-n5,
    .mx-lg-n5 {
        margin-left: -3rem !important;
    }

    .m-lg-auto {
        margin: auto !important;
    }

    .mt-lg-auto,
    .my-lg-auto {
        margin-top: auto !important;
    }

    .mr-lg-auto,
    .mx-lg-auto {
        margin-right: auto !important;
    }

    .mb-lg-auto,
    .my-lg-auto {
        margin-bottom: auto !important;
    }

    .ml-lg-auto,
    .mx-lg-auto {
        margin-left: auto !important;
    }
}

@media (min-width: 1200px) {
    .m-xl-0 {
        margin: 0 !important;
    }

    .mt-xl-0,
    .my-xl-0 {
        margin-top: 0 !important;
    }

    .mr-xl-0,
    .mx-xl-0 {
        margin-right: 0 !important;
    }

    .mb-xl-0,
    .my-xl-0 {
        margin-bottom: 0 !important;
    }

    .ml-xl-0,
    .mx-xl-0 {
        margin-left: 0 !important;
    }

    .m-xl-1 {
        margin: 0.25rem !important;
    }

    .mt-xl-1,
    .my-xl-1 {
        margin-top: 0.25rem !important;
    }

    .mr-xl-1,
    .mx-xl-1 {
        margin-right: 0.25rem !important;
    }

    .mb-xl-1,
    .my-xl-1 {
        margin-bottom: 0.25rem !important;
    }

    .ml-xl-1,
    .mx-xl-1 {
        margin-left: 0.25rem !important;
    }

    .m-xl-2 {
        margin: 0.5rem !important;
    }

    .mt-xl-2,
    .my-xl-2 {
        margin-top: 0.5rem !important;
    }

    .mr-xl-2,
    .mx-xl-2 {
        margin-right: 0.5rem !important;
    }

    .mb-xl-2,
    .my-xl-2 {
        margin-bottom: 0.5rem !important;
    }

    .ml-xl-2,
    .mx-xl-2 {
        margin-left: 0.5rem !important;
    }

    .m-xl-3 {
        margin: 1rem !important;
    }

    .mt-xl-3,
    .my-xl-3 {
        margin-top: 1rem !important;
    }

    .mr-xl-3,
    .mx-xl-3 {
        margin-right: 1rem !important;
    }

    .mb-xl-3,
    .my-xl-3 {
        margin-bottom: 1rem !important;
    }

    .ml-xl-3,
    .mx-xl-3 {
        margin-left: 1rem !important;
    }

    .m-xl-4 {
        margin: 1.5rem !important;
    }

    .mt-xl-4,
    .my-xl-4 {
        margin-top: 1.5rem !important;
    }

    .mr-xl-4,
    .mx-xl-4 {
        margin-right: 1.5rem !important;
    }

    .mb-xl-4,
    .my-xl-4 {
        margin-bottom: 1.5rem !important;
    }

    .ml-xl-4,
    .mx-xl-4 {
        margin-left: 1.5rem !important;
    }

    .m-xl-5 {
        margin: 3rem !important;
    }

    .mt-xl-5,
    .my-xl-5 {
        margin-top: 3rem !important;
    }

    .mr-xl-5,
    .mx-xl-5 {
        margin-right: 3rem !important;
    }

    .mb-xl-5,
    .my-xl-5 {
        margin-bottom: 3rem !important;
    }

    .ml-xl-5,
    .mx-xl-5 {
        margin-left: 3rem !important;
    }

    .p-xl-0 {
        padding: 0 !important;
    }

    .pt-xl-0,
    .py-xl-0 {
        padding-top: 0 !important;
    }

    .pr-xl-0,
    .px-xl-0 {
        padding-right: 0 !important;
    }

    .pb-xl-0,
    .py-xl-0 {
        padding-bottom: 0 !important;
    }

    .pl-xl-0,
    .px-xl-0 {
        padding-left: 0 !important;
    }

    .p-xl-1 {
        padding: 0.25rem !important;
    }

    .pt-xl-1,
    .py-xl-1 {
        padding-top: 0.25rem !important;
    }

    .pr-xl-1,
    .px-xl-1 {
        padding-right: 0.25rem !important;
    }

    .pb-xl-1,
    .py-xl-1 {
        padding-bottom: 0.25rem !important;
    }

    .pl-xl-1,
    .px-xl-1 {
        padding-left: 0.25rem !important;
    }

    .p-xl-2 {
        padding: 0.5rem !important;
    }

    .pt-xl-2,
    .py-xl-2 {
        padding-top: 0.5rem !important;
    }

    .pr-xl-2,
    .px-xl-2 {
        padding-right: 0.5rem !important;
    }

    .pb-xl-2,
    .py-xl-2 {
        padding-bottom: 0.5rem !important;
    }

    .pl-xl-2,
    .px-xl-2 {
        padding-left: 0.5rem !important;
    }

    .p-xl-3 {
        padding: 1rem !important;
    }

    .pt-xl-3,
    .py-xl-3 {
        padding-top: 1rem !important;
    }

    .pr-xl-3,
    .px-xl-3 {
        padding-right: 1rem !important;
    }

    .pb-xl-3,
    .py-xl-3 {
        padding-bottom: 1rem !important;
    }

    .pl-xl-3,
    .px-xl-3 {
        padding-left: 1rem !important;
    }

    .p-xl-4 {
        padding: 1.5rem !important;
    }

    .pt-xl-4,
    .py-xl-4 {
        padding-top: 1.5rem !important;
    }

    .pr-xl-4,
    .px-xl-4 {
        padding-right: 1.5rem !important;
    }

    .pb-xl-4,
    .py-xl-4 {
        padding-bottom: 1.5rem !important;
    }

    .pl-xl-4,
    .px-xl-4 {
        padding-left: 1.5rem !important;
    }

    .p-xl-5 {
        padding: 3rem !important;
    }

    .pt-xl-5,
    .py-xl-5 {
        padding-top: 3rem !important;
    }

    .pr-xl-5,
    .px-xl-5 {
        padding-right: 3rem !important;
    }

    .pb-xl-5,
    .py-xl-5 {
        padding-bottom: 3rem !important;
    }

    .pl-xl-5,
    .px-xl-5 {
        padding-left: 3rem !important;
    }

    .m-xl-n1 {
        margin: -0.25rem !important;
    }

    .mt-xl-n1,
    .my-xl-n1 {
        margin-top: -0.25rem !important;
    }

    .mr-xl-n1,
    .mx-xl-n1 {
        margin-right: -0.25rem !important;
    }

    .mb-xl-n1,
    .my-xl-n1 {
        margin-bottom: -0.25rem !important;
    }

    .ml-xl-n1,
    .mx-xl-n1 {
        margin-left: -0.25rem !important;
    }

    .m-xl-n2 {
        margin: -0.5rem !important;
    }

    .mt-xl-n2,
    .my-xl-n2 {
        margin-top: -0.5rem !important;
    }

    .mr-xl-n2,
    .mx-xl-n2 {
        margin-right: -0.5rem !important;
    }

    .mb-xl-n2,
    .my-xl-n2 {
        margin-bottom: -0.5rem !important;
    }

    .ml-xl-n2,
    .mx-xl-n2 {
        margin-left: -0.5rem !important;
    }

    .m-xl-n3 {
        margin: -1rem !important;
    }

    .mt-xl-n3,
    .my-xl-n3 {
        margin-top: -1rem !important;
    }

    .mr-xl-n3,
    .mx-xl-n3 {
        margin-right: -1rem !important;
    }

    .mb-xl-n3,
    .my-xl-n3 {
        margin-bottom: -1rem !important;
    }

    .ml-xl-n3,
    .mx-xl-n3 {
        margin-left: -1rem !important;
    }

    .m-xl-n4 {
        margin: -1.5rem !important;
    }

    .mt-xl-n4,
    .my-xl-n4 {
        margin-top: -1.5rem !important;
    }

    .mr-xl-n4,
    .mx-xl-n4 {
        margin-right: -1.5rem !important;
    }

    .mb-xl-n4,
    .my-xl-n4 {
        margin-bottom: -1.5rem !important;
    }

    .ml-xl-n4,
    .mx-xl-n4 {
        margin-left: -1.5rem !important;
    }

    .m-xl-n5 {
        margin: -3rem !important;
    }

    .mt-xl-n5,
    .my-xl-n5 {
        margin-top: -3rem !important;
    }

    .mr-xl-n5,
    .mx-xl-n5 {
        margin-right: -3rem !important;
    }

    .mb-xl-n5,
    .my-xl-n5 {
        margin-bottom: -3rem !important;
    }

    .ml-xl-n5,
    .mx-xl-n5 {
        margin-left: -3rem !important;
    }

    .m-xl-auto {
        margin: auto !important;
    }

    .mt-xl-auto,
    .my-xl-auto {
        margin-top: auto !important;
    }

    .mr-xl-auto,
    .mx-xl-auto {
        margin-right: auto !important;
    }

    .mb-xl-auto,
    .my-xl-auto {
        margin-bottom: auto !important;
    }

    .ml-xl-auto,
    .mx-xl-auto {
        margin-left: auto !important;
    }
}

/* ###### Margin ###### */
/* ###### Opacity  ###### */
.op-0 {
    opacity: 0;
}

.op-0-f {
    opacity: 0 !important;
}

.op-1 {
    opacity: 0.1;
}

.op-1-f {
    opacity: 0.1 !important;
}

.op-2 {
    opacity: 0.2;
}

.op-2-f {
    opacity: 0.2 !important;
}

.op-3 {
    opacity: 0.3;
}

.op-3-f {
    opacity: 0.3 !important;
}

.op-4 {
    opacity: 0.4;
}

.op-4-f {
    opacity: 0.4 !important;
}

.op-5 {
    opacity: 0.5;
}

.op-5-f {
    opacity: 0.5 !important;
}

.op-6 {
    opacity: 0.6;
}

.op-6-f {
    opacity: 0.6 !important;
}

.op-7 {
    opacity: 0.7;
}

.op-7-f {
    opacity: 0.7 !important;
}

.op-8 {
    opacity: 0.8;
}

.op-8-f {
    opacity: 0.8 !important;
}

.op-9 {
    opacity: 0.9;
}

.op-9-f {
    opacity: 0.9 !important;
}

.opacity-1 {
    opacity: 1;
}

.shadow-base {
    box-shadow: 0 8px 16px 0 rgba(162, 169, 204, 0.24);
}

.shadow-1 {
    box-shadow: 0 0 7px 7px rgba(28, 39, 60, 0.1);
}

.shadow-2 {
    box-shadow: 0 0 30px rgba(28, 39, 60, 0.08);
}

.shadow-sm {
    box-shadow: 0 0.125rem 0.25rem rgba(162, 169, 204, 0.075) !important;
}

.shadow {
    box-shadow: 0 0.5rem 1rem rgba(162, 169, 204, 0.15) !important;
}

.shadow-lg {
    box-shadow: 0 1rem 3rem rgba(162, 169, 204, 0.175) !important;
}

.shadow-none {
    box-shadow: none !important;
}

.overflow-y-auto {
    overflow-y: auto;
}

.flex-1 {
    flex: 1;
}

.flex-0 {
    flex: 0;
}

.img-fit-cover {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

@media (min-width: 480px) {
    .op-xs-0 {
        opacity: 0;
    }

    .op-xs-0-f {
        opacity: 0 !important;
    }

    .op-xs-1 {
        opacity: 0.1;
    }

    .op-xs-1-f {
        opacity: 0.1 !important;
    }

    .op-xs-2 {
        opacity: 0.2;
    }

    .op-xs-2-f {
        opacity: 0.2 !important;
    }

    .op-xs-3 {
        opacity: 0.3;
    }

    .op-xs-3-f {
        opacity: 0.3 !important;
    }

    .op-xs-4 {
        opacity: 0.4;
    }

    .op-xs-4-f {
        opacity: 0.4 !important;
    }

    .op-xs-5 {
        opacity: 0.5;
    }

    .op-xs-5-f {
        opacity: 0.5 !important;
    }

    .op-xs-6 {
        opacity: 0.6;
    }

    .op-xs-6-f {
        opacity: 0.6 !important;
    }

    .op-xs-7 {
        opacity: 0.7;
    }

    .op-xs-7-f {
        opacity: 0.7 !important;
    }

    .op-xs-8 {
        opacity: 0.8;
    }

    .op-xs-8-f {
        opacity: 0.8 !important;
    }

    .op-xs-9 {
        opacity: 0.9;
    }

    .op-xs-9-f {
        opacity: 0.9 !important;
    }
}

@media (min-width: 576px) {
    .op-sm-0 {
        opacity: 0;
    }

    .op-sm-0-f {
        opacity: 0 !important;
    }

    .op-sm-1 {
        opacity: 0.1;
    }

    .op-sm-1-f {
        opacity: 0.1 !important;
    }

    .op-sm-2 {
        opacity: 0.2;
    }

    .op-sm-2-f {
        opacity: 0.2 !important;
    }

    .op-sm-3 {
        opacity: 0.3;
    }

    .op-sm-3-f {
        opacity: 0.3 !important;
    }

    .op-sm-4 {
        opacity: 0.4;
    }

    .op-sm-4-f {
        opacity: 0.4 !important;
    }

    .op-sm-5 {
        opacity: 0.5;
    }

    .op-sm-5-f {
        opacity: 0.5 !important;
    }

    .op-sm-6 {
        opacity: 0.6;
    }

    .op-sm-6-f {
        opacity: 0.6 !important;
    }

    .op-sm-7 {
        opacity: 0.7;
    }

    .op-sm-7-f {
        opacity: 0.7 !important;
    }

    .op-sm-8 {
        opacity: 0.8;
    }

    .op-sm-8-f {
        opacity: 0.8 !important;
    }

    .op-sm-9 {
        opacity: 0.9;
    }

    .op-sm-9-f {
        opacity: 0.9 !important;
    }
}

@media (min-width: 768px) {
    .op-md-0 {
        opacity: 0;
    }

    .op-md-0-f {
        opacity: 0 !important;
    }

    .op-md-1 {
        opacity: 0.1;
    }

    .op-md-1-f {
        opacity: 0.1 !important;
    }

    .op-md-2 {
        opacity: 0.2;
    }

    .op-md-2-f {
        opacity: 0.2 !important;
    }

    .op-md-3 {
        opacity: 0.3;
    }

    .op-md-3-f {
        opacity: 0.3 !important;
    }

    .op-md-4 {
        opacity: 0.4;
    }

    .op-md-4-f {
        opacity: 0.4 !important;
    }

    .op-md-5 {
        opacity: 0.5;
    }

    .op-md-5-f {
        opacity: 0.5 !important;
    }

    .op-md-6 {
        opacity: 0.6;
    }

    .op-md-6-f {
        opacity: 0.6 !important;
    }

    .op-md-7 {
        opacity: 0.7;
    }

    .op-md-7-f {
        opacity: 0.7 !important;
    }

    .op-md-8 {
        opacity: 0.8;
    }

    .op-md-8-f {
        opacity: 0.8 !important;
    }

    .op-md-9 {
        opacity: 0.9;
    }

    .op-md-9-f {
        opacity: 0.9 !important;
    }
}

@media (min-width: 992px) {
    .op-lg-0 {
        opacity: 0;
    }

    .op-lg-0-f {
        opacity: 0 !important;
    }

    .op-lg-1 {
        opacity: 0.1;
    }

    .op-lg-1-f {
        opacity: 0.1 !important;
    }

    .op-lg-2 {
        opacity: 0.2;
    }

    .op-lg-2-f {
        opacity: 0.2 !important;
    }

    .op-lg-3 {
        opacity: 0.3;
    }

    .op-lg-3-f {
        opacity: 0.3 !important;
    }

    .op-lg-4 {
        opacity: 0.4;
    }

    .op-lg-4-f {
        opacity: 0.4 !important;
    }

    .op-lg-5 {
        opacity: 0.5;
    }

    .op-lg-5-f {
        opacity: 0.5 !important;
    }

    .op-lg-6 {
        opacity: 0.6;
    }

    .op-lg-6-f {
        opacity: 0.6 !important;
    }

    .op-lg-7 {
        opacity: 0.7;
    }

    .op-lg-7-f {
        opacity: 0.7 !important;
    }

    .op-lg-8 {
        opacity: 0.8;
    }

    .op-lg-8-f {
        opacity: 0.8 !important;
    }

    .op-lg-9 {
        opacity: 0.9;
    }

    .op-lg-9-f {
        opacity: 0.9 !important;
    }
}

@media (min-width: 1200px) {
    .op-xl-0 {
        opacity: 0;
    }

    .op-xl-0-f {
        opacity: 0 !important;
    }

    .op-xl-1 {
        opacity: 0.1;
    }

    .op-xl-1-f {
        opacity: 0.1 !important;
    }

    .op-xl-2 {
        opacity: 0.2;
    }

    .op-xl-2-f {
        opacity: 0.2 !important;
    }

    .op-xl-3 {
        opacity: 0.3;
    }

    .op-xl-3-f {
        opacity: 0.3 !important;
    }

    .op-xl-4 {
        opacity: 0.4;
    }

    .op-xl-4-f {
        opacity: 0.4 !important;
    }

    .op-xl-5 {
        opacity: 0.5;
    }

    .op-xl-5-f {
        opacity: 0.5 !important;
    }

    .op-xl-6 {
        opacity: 0.6;
    }

    .op-xl-6-f {
        opacity: 0.6 !important;
    }

    .op-xl-7 {
        opacity: 0.7;
    }

    .op-xl-7-f {
        opacity: 0.7 !important;
    }

    .op-xl-8 {
        opacity: 0.8;
    }

    .op-xl-8-f {
        opacity: 0.8 !important;
    }

    .op-xl-9 {
        opacity: 0.9;
    }

    .op-xl-9-f {
        opacity: 0.9 !important;
    }
}

/* ###### Opacity  ###### */
/* ###### Padding  ###### */
.pd-0 {
    padding: 0px;
}

.pd-0-f {
    padding: 0px !important;
}

.pd-y-0 {
    padding-top: 0px;
    padding-bottom: 0px;
}

.pd-y-0-f {
    padding-top: 0px !important;
    padding-bottom: 0px !important;
}

.pd-x-0 {
    padding-left: 0px;
    padding-right: 0px;
}

.pd-x-0-f {
    padding-left: 0px !important;
    padding-right: 0px !important;
}

.pd-t-0 {
    padding-top: 0px;
}

.pd-r-0 {
    padding-right: 0px;
}

.pd-b-0 {
    padding-bottom: 0px;
}

.pd-l-0 {
    padding-left: 0px;
}

.pd-t-0-f {
    padding-top: 0px !important;
}

.pd-r-0-f {
    padding-right: 0px !important;
}

.pd-b-0-f {
    padding-bottom: 0px !important;
}

.pd-l-0-f {
    padding-left: 0px !important;
}

.pd-1 {
    padding: 1px;
}

.pd-1-f {
    padding: 1px !important;
}

.pd-y-1 {
    padding-top: 1px;
    padding-bottom: 1px;
}

.pd-y-1-f {
    padding-top: 1px !important;
    padding-bottom: 1px !important;
}

.pd-x-1 {
    padding-left: 1px;
    padding-right: 1px;
}

.pd-x-1-f {
    padding-left: 1px !important;
    padding-right: 1px !important;
}

.pd-t-1 {
    padding-top: 1px;
}

.pd-r-1 {
    padding-right: 1px;
}

.pd-b-1 {
    padding-bottom: 1px;
}

.pd-l-1 {
    padding-left: 1px;
}

.pd-t-1-f {
    padding-top: 1px !important;
}

.pd-r-1-f {
    padding-right: 1px !important;
}

.pd-b-1-f {
    padding-bottom: 1px !important;
}

.pd-l-1-f {
    padding-left: 1px !important;
}

.pd-2 {
    padding: 2px;
}

.pd-2-f {
    padding: 2px !important;
}

.pd-y-2 {
    padding-top: 2px;
    padding-bottom: 2px;
}

.pd-y-2-f {
    padding-top: 2px !important;
    padding-bottom: 2px !important;
}

.pd-x-2 {
    padding-left: 2px;
    padding-right: 2px;
}

.pd-x-2-f {
    padding-left: 2px !important;
    padding-right: 2px !important;
}

.pd-t-2 {
    padding-top: 2px;
}

.pd-r-2 {
    padding-right: 2px;
}

.pd-b-2 {
    padding-bottom: 2px;
}

.pd-l-2 {
    padding-left: 2px;
}

.pd-t-2-f {
    padding-top: 2px !important;
}

.pd-r-2-f {
    padding-right: 2px !important;
}

.pd-b-2-f {
    padding-bottom: 2px !important;
}

.pd-l-2-f {
    padding-left: 2px !important;
}

.pd-3 {
    padding: 3px;
}

.pd-3-f {
    padding: 3px !important;
}

.pd-y-3 {
    padding-top: 3px;
    padding-bottom: 3px;
}

.pd-y-3-f {
    padding-top: 3px !important;
    padding-bottom: 3px !important;
}

.pd-x-3 {
    padding-left: 3px;
    padding-right: 3px;
}

.pd-x-3-f {
    padding-left: 3px !important;
    padding-right: 3px !important;
}

.pd-t-3 {
    padding-top: 3px;
}

.pd-r-3 {
    padding-right: 3px;
}

.pd-b-3 {
    padding-bottom: 3px;
}

.pd-l-3 {
    padding-left: 3px;
}

.pd-t-3-f {
    padding-top: 3px !important;
}

.pd-r-3-f {
    padding-right: 3px !important;
}

.pd-b-3-f {
    padding-bottom: 3px !important;
}

.pd-l-3-f {
    padding-left: 3px !important;
}

.pd-4 {
    padding: 4px;
}

.pd-4-f {
    padding: 4px !important;
}

.pd-y-4 {
    padding-top: 4px;
    padding-bottom: 4px;
}

.pd-y-4-f {
    padding-top: 4px !important;
    padding-bottom: 4px !important;
}

.pd-x-4 {
    padding-left: 4px;
    padding-right: 4px;
}

.pd-x-4-f {
    padding-left: 4px !important;
    padding-right: 4px !important;
}

.pd-t-4 {
    padding-top: 4px;
}

.pd-r-4 {
    padding-right: 4px;
}

.pd-b-4 {
    padding-bottom: 4px;
}

.pd-l-4 {
    padding-left: 4px;
}

.pd-t-4-f {
    padding-top: 4px !important;
}

.pd-r-4-f {
    padding-right: 4px !important;
}

.pd-b-4-f {
    padding-bottom: 4px !important;
}

.pd-l-4-f {
    padding-left: 4px !important;
}

.pd-5 {
    padding: 5px;
}

.pd-5-f {
    padding: 5px !important;
}

.pd-y-5 {
    padding-top: 5px;
    padding-bottom: 5px;
}

.pd-y-5-f {
    padding-top: 5px !important;
    padding-bottom: 5px !important;
}

.pd-x-5 {
    padding-left: 5px;
    padding-right: 5px;
}

.pd-x-5-f {
    padding-left: 5px !important;
    padding-right: 5px !important;
}

.pd-t-5 {
    padding-top: 5px;
}

.pd-r-5 {
    padding-right: 5px;
}

.pd-b-5 {
    padding-bottom: 5px;
}

.pd-l-5 {
    padding-left: 5px;
}

.pd-t-5-f {
    padding-top: 5px !important;
}

.pd-r-5-f {
    padding-right: 5px !important;
}

.pd-b-5-f {
    padding-bottom: 5px !important;
}

.pd-l-5-f {
    padding-left: 5px !important;
}

.pd-6 {
    padding: 6px;
}

.pd-6-f {
    padding: 6px !important;
}

.pd-y-6 {
    padding-top: 6px;
    padding-bottom: 6px;
}

.pd-y-6-f {
    padding-top: 6px !important;
    padding-bottom: 6px !important;
}

.pd-x-6 {
    padding-left: 6px;
    padding-right: 6px;
}

.pd-x-6-f {
    padding-left: 6px !important;
    padding-right: 6px !important;
}

.pd-t-6 {
    padding-top: 6px;
}

.pd-r-6 {
    padding-right: 6px;
}

.pd-b-6 {
    padding-bottom: 6px;
}

.pd-l-6 {
    padding-left: 6px;
}

.pd-t-6-f {
    padding-top: 6px !important;
}

.pd-r-6-f {
    padding-right: 6px !important;
}

.pd-b-6-f {
    padding-bottom: 6px !important;
}

.pd-l-6-f {
    padding-left: 6px !important;
}

.pd-7 {
    padding: 7px;
}

.pd-7-f {
    padding: 7px !important;
}

.pd-y-7 {
    padding-top: 7px;
    padding-bottom: 7px;
}

.pd-y-7-f {
    padding-top: 7px !important;
    padding-bottom: 7px !important;
}

.pd-x-7 {
    padding-left: 7px;
    padding-right: 7px;
}

.pd-x-7-f {
    padding-left: 7px !important;
    padding-right: 7px !important;
}

.pd-t-7 {
    padding-top: 7px;
}

.pd-r-7 {
    padding-right: 7px;
}

.pd-b-7 {
    padding-bottom: 7px;
}

.pd-l-7 {
    padding-left: 7px;
}

.pd-t-7-f {
    padding-top: 7px !important;
}

.pd-r-7-f {
    padding-right: 7px !important;
}

.pd-b-7-f {
    padding-bottom: 7px !important;
}

.pd-l-7-f {
    padding-left: 7px !important;
}

.pd-8 {
    padding: 8px;
}

.pd-8-f {
    padding: 8px !important;
}

.pd-y-8 {
    padding-top: 8px;
    padding-bottom: 8px;
}

.pd-y-8-f {
    padding-top: 8px !important;
    padding-bottom: 8px !important;
}

.pd-x-8 {
    padding-left: 8px;
    padding-right: 8px;
}

.pd-x-8-f {
    padding-left: 8px !important;
    padding-right: 8px !important;
}

.pd-t-8 {
    padding-top: 8px;
}

.pd-r-8 {
    padding-right: 8px;
}

.pd-b-8 {
    padding-bottom: 8px;
}

.pd-l-8 {
    padding-left: 8px;
}

.pd-t-8-f {
    padding-top: 8px !important;
}

.pd-r-8-f {
    padding-right: 8px !important;
}

.pd-b-8-f {
    padding-bottom: 8px !important;
}

.pd-l-8-f {
    padding-left: 8px !important;
}

.pd-9 {
    padding: 9px;
}

.pd-9-f {
    padding: 9px !important;
}

.pd-y-9 {
    padding-top: 9px;
    padding-bottom: 9px;
}

.pd-y-9-f {
    padding-top: 9px !important;
    padding-bottom: 9px !important;
}

.pd-x-9 {
    padding-left: 9px;
    padding-right: 9px;
}

.pd-x-9-f {
    padding-left: 9px !important;
    padding-right: 9px !important;
}

.pd-t-9 {
    padding-top: 9px;
}

.pd-r-9 {
    padding-right: 9px;
}

.pd-b-9 {
    padding-bottom: 9px;
}

.pd-l-9 {
    padding-left: 9px;
}

.pd-t-9-f {
    padding-top: 9px !important;
}

.pd-r-9-f {
    padding-right: 9px !important;
}

.pd-b-9-f {
    padding-bottom: 9px !important;
}

.pd-l-9-f {
    padding-left: 9px !important;
}

.pd-10 {
    padding: 10px;
}

.pd-10-f {
    padding: 10px !important;
}

.pd-y-10 {
    padding-top: 10px;
    padding-bottom: 10px;
}

.pd-y-10-f {
    padding-top: 10px !important;
    padding-bottom: 10px !important;
}

.pd-x-10 {
    padding-left: 10px;
    padding-right: 10px;
}

.pd-x-10-f {
    padding-left: 10px !important;
    padding-right: 10px !important;
}

.pd-t-10 {
    padding-top: 10px;
}

.pd-r-10 {
    padding-right: 10px;
}

.pd-b-10 {
    padding-bottom: 10px;
}

.pd-l-10 {
    padding-left: 10px;
}

.pd-t-10-f {
    padding-top: 10px !important;
}

.pd-r-10-f {
    padding-right: 10px !important;
}

.pd-b-10-f {
    padding-bottom: 10px !important;
}

.pd-l-10-f {
    padding-left: 10px !important;
}

.pd-15 {
    padding: 15px;
}

.pd-15-f {
    padding: 15px !important;
}

.pd-y-15 {
    padding-top: 15px;
    padding-bottom: 15px;
}

.pd-y-15-f {
    padding-top: 15px !important;
    padding-bottom: 15px !important;
}

.pd-x-15 {
    padding-left: 15px;
    padding-right: 15px;
}

.pd-x-15-f {
    padding-left: 15px !important;
    padding-right: 15px !important;
}

.pd-t-15 {
    padding-top: 15px;
}

.pd-r-15 {
    padding-right: 15px;
}

.pd-b-15 {
    padding-bottom: 15px;
}

.pd-l-15 {
    padding-left: 15px;
}

.pd-t-15-f {
    padding-top: 15px !important;
}

.pd-r-15-f {
    padding-right: 15px !important;
}

.pd-b-15-f {
    padding-bottom: 15px !important;
}

.pd-l-15-f {
    padding-left: 15px !important;
}

.pd-20 {
    padding: 20px;
}

.pd-20-f {
    padding: 20px !important;
}

.pd-y-20 {
    padding-top: 20px;
    padding-bottom: 20px;
}

.pd-y-20-f {
    padding-top: 20px !important;
    padding-bottom: 20px !important;
}

.pd-x-20 {
    padding-left: 20px;
    padding-right: 20px;
}

.pd-x-20-f {
    padding-left: 20px !important;
    padding-right: 20px !important;
}

.pd-t-20 {
    padding-top: 20px;
}

.pd-r-20 {
    padding-right: 20px;
}

.pd-b-20 {
    padding-bottom: 20px;
}

.pd-l-20 {
    padding-left: 20px;
}

.pd-t-20-f {
    padding-top: 20px !important;
}

.pd-r-20-f {
    padding-right: 20px !important;
}

.pd-b-20-f {
    padding-bottom: 20px !important;
}

.pd-l-20-f {
    padding-left: 20px !important;
}

.pd-25 {
    padding: 25px;
}

.pd-25-f {
    padding: 25px !important;
}

.pd-y-25 {
    padding-top: 25px;
    padding-bottom: 25px;
}

.pd-y-25-f {
    padding-top: 25px !important;
    padding-bottom: 25px !important;
}

.pd-x-25 {
    padding-left: 25px;
    padding-right: 25px;
}

.pd-x-25-f {
    padding-left: 25px !important;
    padding-right: 25px !important;
}

.pd-t-25 {
    padding-top: 25px;
}

.pd-r-25 {
    padding-right: 25px;
}

.pd-b-25 {
    padding-bottom: 25px;
}

.pd-l-25 {
    padding-left: 25px;
}

.pd-t-25-f {
    padding-top: 25px !important;
}

.pd-r-25-f {
    padding-right: 25px !important;
}

.pd-b-25-f {
    padding-bottom: 25px !important;
}

.pd-l-25-f {
    padding-left: 25px !important;
}

.pd-30 {
    padding: 30px;
}

.pd-30-f {
    padding: 30px !important;
}

.pd-y-30 {
    padding-top: 30px;
    padding-bottom: 30px;
}

.pd-y-30-f {
    padding-top: 30px !important;
    padding-bottom: 30px !important;
}

.pd-x-30 {
    padding-left: 30px;
    padding-right: 30px;
}

.pd-x-30-f {
    padding-left: 30px !important;
    padding-right: 30px !important;
}

.pd-t-30 {
    padding-top: 30px;
}

.pd-r-30 {
    padding-right: 30px;
}

.pd-b-30 {
    padding-bottom: 30px;
}

.pd-l-30 {
    padding-left: 30px;
}

.pd-t-30-f {
    padding-top: 30px !important;
}

.pd-r-30-f {
    padding-right: 30px !important;
}

.pd-b-30-f {
    padding-bottom: 30px !important;
}

.pd-l-30-f {
    padding-left: 30px !important;
}

.pd-35 {
    padding: 35px;
}

.pd-35-f {
    padding: 35px !important;
}

.pd-y-35 {
    padding-top: 35px;
    padding-bottom: 35px;
}

.pd-y-35-f {
    padding-top: 35px !important;
    padding-bottom: 35px !important;
}

.pd-x-35 {
    padding-left: 35px;
    padding-right: 35px;
}

.pd-x-35-f {
    padding-left: 35px !important;
    padding-right: 35px !important;
}

.pd-t-35 {
    padding-top: 35px;
}

.pd-r-35 {
    padding-right: 35px;
}

.pd-b-35 {
    padding-bottom: 35px;
}

.pd-l-35 {
    padding-left: 35px;
}

.pd-t-35-f {
    padding-top: 35px !important;
}

.pd-r-35-f {
    padding-right: 35px !important;
}

.pd-b-35-f {
    padding-bottom: 35px !important;
}

.pd-l-35-f {
    padding-left: 35px !important;
}

.pd-40 {
    padding: 40px;
}

.pd-40-f {
    padding: 40px !important;
}

.pd-y-40 {
    padding-top: 40px;
    padding-bottom: 40px;
}

.pd-y-40-f {
    padding-top: 40px !important;
    padding-bottom: 40px !important;
}

.pd-x-40 {
    padding-left: 40px;
    padding-right: 40px;
}

.pd-x-40-f {
    padding-left: 40px !important;
    padding-right: 40px !important;
}

.pd-t-40 {
    padding-top: 40px;
}

.pd-r-40 {
    padding-right: 40px;
}

.pd-b-40 {
    padding-bottom: 40px;
}

.pd-l-40 {
    padding-left: 40px;
}

.pd-t-40-f {
    padding-top: 40px !important;
}

.pd-r-40-f {
    padding-right: 40px !important;
}

.pd-b-40-f {
    padding-bottom: 40px !important;
}

.pd-l-40-f {
    padding-left: 40px !important;
}

.pd-45 {
    padding: 45px;
}

.pd-45-f {
    padding: 45px !important;
}

.pd-y-45 {
    padding-top: 45px;
    padding-bottom: 45px;
}

.pd-y-45-f {
    padding-top: 45px !important;
    padding-bottom: 45px !important;
}

.pd-x-45 {
    padding-left: 45px;
    padding-right: 45px;
}

.pd-x-45-f {
    padding-left: 45px !important;
    padding-right: 45px !important;
}

.pd-t-45 {
    padding-top: 45px;
}

.pd-r-45 {
    padding-right: 45px;
}

.pd-b-45 {
    padding-bottom: 45px;
}

.pd-l-45 {
    padding-left: 45px;
}

.pd-t-45-f {
    padding-top: 45px !important;
}

.pd-r-45-f {
    padding-right: 45px !important;
}

.pd-b-45-f {
    padding-bottom: 45px !important;
}

.pd-l-45-f {
    padding-left: 45px !important;
}

.pd-50 {
    padding: 50px;
}

.pd-50-f {
    padding: 50px !important;
}

.pd-y-50 {
    padding-top: 50px;
    padding-bottom: 50px;
}

.pd-y-50-f {
    padding-top: 50px !important;
    padding-bottom: 50px !important;
}

.pd-x-50 {
    padding-left: 50px;
    padding-right: 50px;
}

.pd-x-50-f {
    padding-left: 50px !important;
    padding-right: 50px !important;
}

.pd-t-50 {
    padding-top: 50px;
}

.pd-r-50 {
    padding-right: 50px;
}

.pd-b-50 {
    padding-bottom: 50px;
}

.pd-l-50 {
    padding-left: 50px;
}

.pd-t-50-f {
    padding-top: 50px !important;
}

.pd-r-50-f {
    padding-right: 50px !important;
}

.pd-b-50-f {
    padding-bottom: 50px !important;
}

.pd-l-50-f {
    padding-left: 50px !important;
}

.pd-55 {
    padding: 55px;
}

.pd-55-f {
    padding: 55px !important;
}

.pd-y-55 {
    padding-top: 55px;
    padding-bottom: 55px;
}

.pd-y-55-f {
    padding-top: 55px !important;
    padding-bottom: 55px !important;
}

.pd-x-55 {
    padding-left: 55px;
    padding-right: 55px;
}

.pd-x-55-f {
    padding-left: 55px !important;
    padding-right: 55px !important;
}

.pd-t-55 {
    padding-top: 55px;
}

.pd-r-55 {
    padding-right: 55px;
}

.pd-b-55 {
    padding-bottom: 55px;
}

.pd-l-55 {
    padding-left: 55px;
}

.pd-t-55-f {
    padding-top: 55px !important;
}

.pd-r-55-f {
    padding-right: 55px !important;
}

.pd-b-55-f {
    padding-bottom: 55px !important;
}

.pd-l-55-f {
    padding-left: 55px !important;
}

.pd-60 {
    padding: 60px;
}

.pd-60-f {
    padding: 60px !important;
}

.pd-y-60 {
    padding-top: 60px;
    padding-bottom: 60px;
}

.pd-y-60-f {
    padding-top: 60px !important;
    padding-bottom: 60px !important;
}

.pd-x-60 {
    padding-left: 60px;
    padding-right: 60px;
}

.pd-x-60-f {
    padding-left: 60px !important;
    padding-right: 60px !important;
}

.pd-t-60 {
    padding-top: 60px;
}

.pd-r-60 {
    padding-right: 60px;
}

.pd-b-60 {
    padding-bottom: 60px;
}

.pd-l-60 {
    padding-left: 60px;
}

.pd-t-60-f {
    padding-top: 60px !important;
}

.pd-r-60-f {
    padding-right: 60px !important;
}

.pd-b-60-f {
    padding-bottom: 60px !important;
}

.pd-l-60-f {
    padding-left: 60px !important;
}

.pd-65 {
    padding: 65px;
}

.pd-65-f {
    padding: 65px !important;
}

.pd-y-65 {
    padding-top: 65px;
    padding-bottom: 65px;
}

.pd-y-65-f {
    padding-top: 65px !important;
    padding-bottom: 65px !important;
}

.pd-x-65 {
    padding-left: 65px;
    padding-right: 65px;
}

.pd-x-65-f {
    padding-left: 65px !important;
    padding-right: 65px !important;
}

.pd-t-65 {
    padding-top: 65px;
}

.pd-r-65 {
    padding-right: 65px;
}

.pd-b-65 {
    padding-bottom: 65px;
}

.pd-l-65 {
    padding-left: 65px;
}

.pd-t-65-f {
    padding-top: 65px !important;
}

.pd-r-65-f {
    padding-right: 65px !important;
}

.pd-b-65-f {
    padding-bottom: 65px !important;
}

.pd-l-65-f {
    padding-left: 65px !important;
}

.pd-70 {
    padding: 70px;
}

.pd-70-f {
    padding: 70px !important;
}

.pd-y-70 {
    padding-top: 70px;
    padding-bottom: 70px;
}

.pd-y-70-f {
    padding-top: 70px !important;
    padding-bottom: 70px !important;
}

.pd-x-70 {
    padding-left: 70px;
    padding-right: 70px;
}

.pd-x-70-f {
    padding-left: 70px !important;
    padding-right: 70px !important;
}

.pd-t-70 {
    padding-top: 70px;
}

.pd-r-70 {
    padding-right: 70px;
}

.pd-b-70 {
    padding-bottom: 70px;
}

.pd-l-70 {
    padding-left: 70px;
}

.pd-t-70-f {
    padding-top: 70px !important;
}

.pd-r-70-f {
    padding-right: 70px !important;
}

.pd-b-70-f {
    padding-bottom: 70px !important;
}

.pd-l-70-f {
    padding-left: 70px !important;
}

.pd-75 {
    padding: 75px;
}

.pd-75-f {
    padding: 75px !important;
}

.pd-y-75 {
    padding-top: 75px;
    padding-bottom: 75px;
}

.pd-y-75-f {
    padding-top: 75px !important;
    padding-bottom: 75px !important;
}

.pd-x-75 {
    padding-left: 75px;
    padding-right: 75px;
}

.pd-x-75-f {
    padding-left: 75px !important;
    padding-right: 75px !important;
}

.pd-t-75 {
    padding-top: 75px;
}

.pd-r-75 {
    padding-right: 75px;
}

.pd-b-75 {
    padding-bottom: 75px;
}

.pd-l-75 {
    padding-left: 75px;
}

.pd-t-75-f {
    padding-top: 75px !important;
}

.pd-r-75-f {
    padding-right: 75px !important;
}

.pd-b-75-f {
    padding-bottom: 75px !important;
}

.pd-l-75-f {
    padding-left: 75px !important;
}

.pd-80 {
    padding: 80px;
}

.pd-80-f {
    padding: 80px !important;
}

.pd-y-80 {
    padding-top: 80px;
    padding-bottom: 80px;
}

.pd-y-80-f {
    padding-top: 80px !important;
    padding-bottom: 80px !important;
}

.pd-x-80 {
    padding-left: 80px;
    padding-right: 80px;
}

.pd-x-80-f {
    padding-left: 80px !important;
    padding-right: 80px !important;
}

.pd-t-80 {
    padding-top: 80px;
}

.pd-r-80 {
    padding-right: 80px;
}

.pd-b-80 {
    padding-bottom: 80px;
}

.pd-l-80 {
    padding-left: 80px;
}

.pd-t-80-f {
    padding-top: 80px !important;
}

.pd-r-80-f {
    padding-right: 80px !important;
}

.pd-b-80-f {
    padding-bottom: 80px !important;
}

.pd-l-80-f {
    padding-left: 80px !important;
}

.pd-85 {
    padding: 85px;
}

.pd-85-f {
    padding: 85px !important;
}

.pd-y-85 {
    padding-top: 85px;
    padding-bottom: 85px;
}

.pd-y-85-f {
    padding-top: 85px !important;
    padding-bottom: 85px !important;
}

.pd-x-85 {
    padding-left: 85px;
    padding-right: 85px;
}

.pd-x-85-f {
    padding-left: 85px !important;
    padding-right: 85px !important;
}

.pd-t-85 {
    padding-top: 85px;
}

.pd-r-85 {
    padding-right: 85px;
}

.pd-b-85 {
    padding-bottom: 85px;
}

.pd-l-85 {
    padding-left: 85px;
}

.pd-t-85-f {
    padding-top: 85px !important;
}

.pd-r-85-f {
    padding-right: 85px !important;
}

.pd-b-85-f {
    padding-bottom: 85px !important;
}

.pd-l-85-f {
    padding-left: 85px !important;
}

.pd-90 {
    padding: 90px;
}

.pd-90-f {
    padding: 90px !important;
}

.pd-y-90 {
    padding-top: 90px;
    padding-bottom: 90px;
}

.pd-y-90-f {
    padding-top: 90px !important;
    padding-bottom: 90px !important;
}

.pd-x-90 {
    padding-left: 90px;
    padding-right: 90px;
}

.pd-x-90-f {
    padding-left: 90px !important;
    padding-right: 90px !important;
}

.pd-t-90 {
    padding-top: 90px;
}

.pd-r-90 {
    padding-right: 90px;
}

.pd-b-90 {
    padding-bottom: 90px;
}

.pd-l-90 {
    padding-left: 90px;
}

.pd-t-90-f {
    padding-top: 90px !important;
}

.pd-r-90-f {
    padding-right: 90px !important;
}

.pd-b-90-f {
    padding-bottom: 90px !important;
}

.pd-l-90-f {
    padding-left: 90px !important;
}

.pd-95 {
    padding: 95px;
}

.pd-95-f {
    padding: 95px !important;
}

.pd-y-95 {
    padding-top: 95px;
    padding-bottom: 95px;
}

.pd-y-95-f {
    padding-top: 95px !important;
    padding-bottom: 95px !important;
}

.pd-x-95 {
    padding-left: 95px;
    padding-right: 95px;
}

.pd-x-95-f {
    padding-left: 95px !important;
    padding-right: 95px !important;
}

.pd-t-95 {
    padding-top: 95px;
}

.pd-r-95 {
    padding-right: 95px;
}

.pd-b-95 {
    padding-bottom: 95px;
}

.pd-l-95 {
    padding-left: 95px;
}

.pd-t-95-f {
    padding-top: 95px !important;
}

.pd-r-95-f {
    padding-right: 95px !important;
}

.pd-b-95-f {
    padding-bottom: 95px !important;
}

.pd-l-95-f {
    padding-left: 95px !important;
}

.pd-100 {
    padding: 100px;
}

.pd-100-f {
    padding: 100px !important;
}

.pd-y-100 {
    padding-top: 100px;
    padding-bottom: 100px;
}

.pd-y-100-f {
    padding-top: 100px !important;
    padding-bottom: 100px !important;
}

.pd-x-100 {
    padding-left: 100px;
    padding-right: 100px;
}

.pd-x-100-f {
    padding-left: 100px !important;
    padding-right: 100px !important;
}

.pd-t-100 {
    padding-top: 100px;
}

.pd-r-100 {
    padding-right: 100px;
}

.pd-b-100 {
    padding-bottom: 100px;
}

.pd-l-100 {
    padding-left: 100px;
}

.pd-t-100-f {
    padding-top: 100px !important;
}

.pd-r-100-f {
    padding-right: 100px !important;
}

.pd-b-100-f {
    padding-bottom: 100px !important;
}

.pd-l-100-f {
    padding-left: 100px !important;
}

.pd-110 {
    padding: 110px;
}

.pd-110-f {
    padding: 110px !important;
}

.pd-y-110 {
    padding-top: 110px;
    padding-bottom: 110px;
}

.pd-y-110-f {
    padding-top: 110px !important;
    padding-bottom: 110px !important;
}

.pd-x-110 {
    padding-left: 110px;
    padding-right: 110px;
}

.pd-x-110-f {
    padding-left: 110px !important;
    padding-right: 110px !important;
}

.pd-t-110 {
    padding-top: 110px;
}

.pd-r-110 {
    padding-right: 110px;
}

.pd-b-110 {
    padding-bottom: 110px;
}

.pd-l-110 {
    padding-left: 110px;
}

.pd-t-110-f {
    padding-top: 110px !important;
}

.pd-r-110-f {
    padding-right: 110px !important;
}

.pd-b-110-f {
    padding-bottom: 110px !important;
}

.pd-l-110-f {
    padding-left: 110px !important;
}

.pd-120 {
    padding: 120px;
}

.pd-120-f {
    padding: 120px !important;
}

.pd-y-120 {
    padding-top: 120px;
    padding-bottom: 120px;
}

.pd-y-120-f {
    padding-top: 120px !important;
    padding-bottom: 120px !important;
}

.pd-x-120 {
    padding-left: 120px;
    padding-right: 120px;
}

.pd-x-120-f {
    padding-left: 120px !important;
    padding-right: 120px !important;
}

.pd-t-120 {
    padding-top: 120px;
}

.pd-r-120 {
    padding-right: 120px;
}

.pd-b-120 {
    padding-bottom: 120px;
}

.pd-l-120 {
    padding-left: 120px;
}

.pd-t-120-f {
    padding-top: 120px !important;
}

.pd-r-120-f {
    padding-right: 120px !important;
}

.pd-b-120-f {
    padding-bottom: 120px !important;
}

.pd-l-120-f {
    padding-left: 120px !important;
}

.pd-130 {
    padding: 130px;
}

.pd-130-f {
    padding: 130px !important;
}

.pd-y-130 {
    padding-top: 130px;
    padding-bottom: 130px;
}

.pd-y-130-f {
    padding-top: 130px !important;
    padding-bottom: 130px !important;
}

.pd-x-130 {
    padding-left: 130px;
    padding-right: 130px;
}

.pd-x-130-f {
    padding-left: 130px !important;
    padding-right: 130px !important;
}

.pd-t-130 {
    padding-top: 130px;
}

.pd-r-130 {
    padding-right: 130px;
}

.pd-b-130 {
    padding-bottom: 130px;
}

.pd-l-130 {
    padding-left: 130px;
}

.pd-t-130-f {
    padding-top: 130px !important;
}

.pd-r-130-f {
    padding-right: 130px !important;
}

.pd-b-130-f {
    padding-bottom: 130px !important;
}

.pd-l-130-f {
    padding-left: 130px !important;
}

.pd-140 {
    padding: 140px;
}

.pd-140-f {
    padding: 140px !important;
}

.pd-y-140 {
    padding-top: 140px;
    padding-bottom: 140px;
}

.pd-y-140-f {
    padding-top: 140px !important;
    padding-bottom: 140px !important;
}

.pd-x-140 {
    padding-left: 140px;
    padding-right: 140px;
}

.pd-x-140-f {
    padding-left: 140px !important;
    padding-right: 140px !important;
}

.pd-t-140 {
    padding-top: 140px;
}

.pd-r-140 {
    padding-right: 140px;
}

.pd-b-140 {
    padding-bottom: 140px;
}

.pd-l-140 {
    padding-left: 140px;
}

.pd-t-140-f {
    padding-top: 140px !important;
}

.pd-r-140-f {
    padding-right: 140px !important;
}

.pd-b-140-f {
    padding-bottom: 140px !important;
}

.pd-l-140-f {
    padding-left: 140px !important;
}

.pd-150 {
    padding: 150px;
}

.pd-150-f {
    padding: 150px !important;
}

.pd-y-150 {
    padding-top: 150px;
    padding-bottom: 150px;
}

.pd-y-150-f {
    padding-top: 150px !important;
    padding-bottom: 150px !important;
}

.pd-x-150 {
    padding-left: 150px;
    padding-right: 150px;
}

.pd-x-150-f {
    padding-left: 150px !important;
    padding-right: 150px !important;
}

.pd-t-150 {
    padding-top: 150px;
}

.pd-r-150 {
    padding-right: 150px;
}

.pd-b-150 {
    padding-bottom: 150px;
}

.pd-l-150 {
    padding-left: 150px;
}

.pd-t-150-f {
    padding-top: 150px !important;
}

.pd-r-150-f {
    padding-right: 150px !important;
}

.pd-b-150-f {
    padding-bottom: 150px !important;
}

.pd-l-150-f {
    padding-left: 150px !important;
}

.pd-160 {
    padding: 160px;
}

.pd-160-f {
    padding: 160px !important;
}

.pd-y-160 {
    padding-top: 160px;
    padding-bottom: 160px;
}

.pd-y-160-f {
    padding-top: 160px !important;
    padding-bottom: 160px !important;
}

.pd-x-160 {
    padding-left: 160px;
    padding-right: 160px;
}

.pd-x-160-f {
    padding-left: 160px !important;
    padding-right: 160px !important;
}

.pd-t-160 {
    padding-top: 160px;
}

.pd-r-160 {
    padding-right: 160px;
}

.pd-b-160 {
    padding-bottom: 160px;
}

.pd-l-160 {
    padding-left: 160px;
}

.pd-t-160-f {
    padding-top: 160px !important;
}

.pd-r-160-f {
    padding-right: 160px !important;
}

.pd-b-160-f {
    padding-bottom: 160px !important;
}

.pd-l-160-f {
    padding-left: 160px !important;
}

.pd-170 {
    padding: 170px;
}

.pd-170-f {
    padding: 170px !important;
}

.pd-y-170 {
    padding-top: 170px;
    padding-bottom: 170px;
}

.pd-y-170-f {
    padding-top: 170px !important;
    padding-bottom: 170px !important;
}

.pd-x-170 {
    padding-left: 170px;
    padding-right: 170px;
}

.pd-x-170-f {
    padding-left: 170px !important;
    padding-right: 170px !important;
}

.pd-t-170 {
    padding-top: 170px;
}

.pd-r-170 {
    padding-right: 170px;
}

.pd-b-170 {
    padding-bottom: 170px;
}

.pd-l-170 {
    padding-left: 170px;
}

.pd-t-170-f {
    padding-top: 170px !important;
}

.pd-r-170-f {
    padding-right: 170px !important;
}

.pd-b-170-f {
    padding-bottom: 170px !important;
}

.pd-l-170-f {
    padding-left: 170px !important;
}

.pd-180 {
    padding: 180px;
}

.pd-180-f {
    padding: 180px !important;
}

.pd-y-180 {
    padding-top: 180px;
    padding-bottom: 180px;
}

.pd-y-180-f {
    padding-top: 180px !important;
    padding-bottom: 180px !important;
}

.pd-x-180 {
    padding-left: 180px;
    padding-right: 180px;
}

.pd-x-180-f {
    padding-left: 180px !important;
    padding-right: 180px !important;
}

.pd-t-180 {
    padding-top: 180px;
}

.pd-r-180 {
    padding-right: 180px;
}

.pd-b-180 {
    padding-bottom: 180px;
}

.pd-l-180 {
    padding-left: 180px;
}

.pd-t-180-f {
    padding-top: 180px !important;
}

.pd-r-180-f {
    padding-right: 180px !important;
}

.pd-b-180-f {
    padding-bottom: 180px !important;
}

.pd-l-180-f {
    padding-left: 180px !important;
}

.pd-190 {
    padding: 190px;
}

.pd-190-f {
    padding: 190px !important;
}

.pd-y-190 {
    padding-top: 190px;
    padding-bottom: 190px;
}

.pd-y-190-f {
    padding-top: 190px !important;
    padding-bottom: 190px !important;
}

.pd-x-190 {
    padding-left: 190px;
    padding-right: 190px;
}

.pd-x-190-f {
    padding-left: 190px !important;
    padding-right: 190px !important;
}

.pd-t-190 {
    padding-top: 190px;
}

.pd-r-190 {
    padding-right: 190px;
}

.pd-b-190 {
    padding-bottom: 190px;
}

.pd-l-190 {
    padding-left: 190px;
}

.pd-t-190-f {
    padding-top: 190px !important;
}

.pd-r-190-f {
    padding-right: 190px !important;
}

.pd-b-190-f {
    padding-bottom: 190px !important;
}

.pd-l-190-f {
    padding-left: 190px !important;
}

.pd-200 {
    padding: 200px;
}

.pd-200-f {
    padding: 200px !important;
}

.pd-y-200 {
    padding-top: 200px;
    padding-bottom: 200px;
}

.pd-y-200-f {
    padding-top: 200px !important;
    padding-bottom: 200px !important;
}

.pd-x-200 {
    padding-left: 200px;
    padding-right: 200px;
}

.pd-x-200-f {
    padding-left: 200px !important;
    padding-right: 200px !important;
}

.pd-t-200 {
    padding-top: 200px;
}

.pd-r-200 {
    padding-right: 200px;
}

.pd-b-200 {
    padding-bottom: 200px;
}

.pd-l-200 {
    padding-left: 200px;
}

.pd-t-200-f {
    padding-top: 200px !important;
}

.pd-r-200-f {
    padding-right: 200px !important;
}

.pd-b-200-f {
    padding-bottom: 200px !important;
}

.pd-l-200-f {
    padding-left: 200px !important;
}

@media (min-width: 480px) {
    .pd-xs-0 {
        padding: 0px;
    }

    .pd-xs-0-f {
        padding: 0px !important;
    }

    .pd-xs-y-0 {
        padding-top: 0px;
        padding-bottom: 0px;
    }

    .pd-xs-y-0-f {
        padding-top: 0px !important;
        padding-bottom: 0px !important;
    }

    .pd-xs-x-0 {
        padding-left: 0px;
        padding-right: 0px;
    }

    .pd-xs-x-0-f {
        padding-left: 0px !important;
        padding-right: 0px !important;
    }

    .pd-xs-t-0 {
        padding-top: 0px;
    }

    .pd-xs-r-0 {
        padding-right: 0px;
    }

    .pd-xs-b-0 {
        padding-bottom: 0px;
    }

    .pd-xs-l-0 {
        padding-left: 0px;
    }

    .pd-xs-t-0-f {
        padding-top: 0px !important;
    }

    .pd-xs-r-0-f {
        padding-right: 0px !important;
    }

    .pd-xs-b-0-f {
        padding-bottom: 0px !important;
    }

    .pd-xs-l-0-f {
        padding-left: 0px !important;
    }

    .pd-xs-1 {
        padding: 1px;
    }

    .pd-xs-1-f {
        padding: 1px !important;
    }

    .pd-xs-y-1 {
        padding-top: 1px;
        padding-bottom: 1px;
    }

    .pd-xs-y-1-f {
        padding-top: 1px !important;
        padding-bottom: 1px !important;
    }

    .pd-xs-x-1 {
        padding-left: 1px;
        padding-right: 1px;
    }

    .pd-xs-x-1-f {
        padding-left: 1px !important;
        padding-right: 1px !important;
    }

    .pd-xs-t-1 {
        padding-top: 1px;
    }

    .pd-xs-r-1 {
        padding-right: 1px;
    }

    .pd-xs-b-1 {
        padding-bottom: 1px;
    }

    .pd-xs-l-1 {
        padding-left: 1px;
    }

    .pd-xs-t-1-f {
        padding-top: 1px !important;
    }

    .pd-xs-r-1-f {
        padding-right: 1px !important;
    }

    .pd-xs-b-1-f {
        padding-bottom: 1px !important;
    }

    .pd-xs-l-1-f {
        padding-left: 1px !important;
    }

    .pd-xs-2 {
        padding: 2px;
    }

    .pd-xs-2-f {
        padding: 2px !important;
    }

    .pd-xs-y-2 {
        padding-top: 2px;
        padding-bottom: 2px;
    }

    .pd-xs-y-2-f {
        padding-top: 2px !important;
        padding-bottom: 2px !important;
    }

    .pd-xs-x-2 {
        padding-left: 2px;
        padding-right: 2px;
    }

    .pd-xs-x-2-f {
        padding-left: 2px !important;
        padding-right: 2px !important;
    }

    .pd-xs-t-2 {
        padding-top: 2px;
    }

    .pd-xs-r-2 {
        padding-right: 2px;
    }

    .pd-xs-b-2 {
        padding-bottom: 2px;
    }

    .pd-xs-l-2 {
        padding-left: 2px;
    }

    .pd-xs-t-2-f {
        padding-top: 2px !important;
    }

    .pd-xs-r-2-f {
        padding-right: 2px !important;
    }

    .pd-xs-b-2-f {
        padding-bottom: 2px !important;
    }

    .pd-xs-l-2-f {
        padding-left: 2px !important;
    }

    .pd-xs-3 {
        padding: 3px;
    }

    .pd-xs-3-f {
        padding: 3px !important;
    }

    .pd-xs-y-3 {
        padding-top: 3px;
        padding-bottom: 3px;
    }

    .pd-xs-y-3-f {
        padding-top: 3px !important;
        padding-bottom: 3px !important;
    }

    .pd-xs-x-3 {
        padding-left: 3px;
        padding-right: 3px;
    }

    .pd-xs-x-3-f {
        padding-left: 3px !important;
        padding-right: 3px !important;
    }

    .pd-xs-t-3 {
        padding-top: 3px;
    }

    .pd-xs-r-3 {
        padding-right: 3px;
    }

    .pd-xs-b-3 {
        padding-bottom: 3px;
    }

    .pd-xs-l-3 {
        padding-left: 3px;
    }

    .pd-xs-t-3-f {
        padding-top: 3px !important;
    }

    .pd-xs-r-3-f {
        padding-right: 3px !important;
    }

    .pd-xs-b-3-f {
        padding-bottom: 3px !important;
    }

    .pd-xs-l-3-f {
        padding-left: 3px !important;
    }

    .pd-xs-4 {
        padding: 4px;
    }

    .pd-xs-4-f {
        padding: 4px !important;
    }

    .pd-xs-y-4 {
        padding-top: 4px;
        padding-bottom: 4px;
    }

    .pd-xs-y-4-f {
        padding-top: 4px !important;
        padding-bottom: 4px !important;
    }

    .pd-xs-x-4 {
        padding-left: 4px;
        padding-right: 4px;
    }

    .pd-xs-x-4-f {
        padding-left: 4px !important;
        padding-right: 4px !important;
    }

    .pd-xs-t-4 {
        padding-top: 4px;
    }

    .pd-xs-r-4 {
        padding-right: 4px;
    }

    .pd-xs-b-4 {
        padding-bottom: 4px;
    }

    .pd-xs-l-4 {
        padding-left: 4px;
    }

    .pd-xs-t-4-f {
        padding-top: 4px !important;
    }

    .pd-xs-r-4-f {
        padding-right: 4px !important;
    }

    .pd-xs-b-4-f {
        padding-bottom: 4px !important;
    }

    .pd-xs-l-4-f {
        padding-left: 4px !important;
    }

    .pd-xs-5 {
        padding: 5px;
    }

    .pd-xs-5-f {
        padding: 5px !important;
    }

    .pd-xs-y-5 {
        padding-top: 5px;
        padding-bottom: 5px;
    }

    .pd-xs-y-5-f {
        padding-top: 5px !important;
        padding-bottom: 5px !important;
    }

    .pd-xs-x-5 {
        padding-left: 5px;
        padding-right: 5px;
    }

    .pd-xs-x-5-f {
        padding-left: 5px !important;
        padding-right: 5px !important;
    }

    .pd-xs-t-5 {
        padding-top: 5px;
    }

    .pd-xs-r-5 {
        padding-right: 5px;
    }

    .pd-xs-b-5 {
        padding-bottom: 5px;
    }

    .pd-xs-l-5 {
        padding-left: 5px;
    }

    .pd-xs-t-5-f {
        padding-top: 5px !important;
    }

    .pd-xs-r-5-f {
        padding-right: 5px !important;
    }

    .pd-xs-b-5-f {
        padding-bottom: 5px !important;
    }

    .pd-xs-l-5-f {
        padding-left: 5px !important;
    }

    .pd-xs-6 {
        padding: 6px;
    }

    .pd-xs-6-f {
        padding: 6px !important;
    }

    .pd-xs-y-6 {
        padding-top: 6px;
        padding-bottom: 6px;
    }

    .pd-xs-y-6-f {
        padding-top: 6px !important;
        padding-bottom: 6px !important;
    }

    .pd-xs-x-6 {
        padding-left: 6px;
        padding-right: 6px;
    }

    .pd-xs-x-6-f {
        padding-left: 6px !important;
        padding-right: 6px !important;
    }

    .pd-xs-t-6 {
        padding-top: 6px;
    }

    .pd-xs-r-6 {
        padding-right: 6px;
    }

    .pd-xs-b-6 {
        padding-bottom: 6px;
    }

    .pd-xs-l-6 {
        padding-left: 6px;
    }

    .pd-xs-t-6-f {
        padding-top: 6px !important;
    }

    .pd-xs-r-6-f {
        padding-right: 6px !important;
    }

    .pd-xs-b-6-f {
        padding-bottom: 6px !important;
    }

    .pd-xs-l-6-f {
        padding-left: 6px !important;
    }

    .pd-xs-7 {
        padding: 7px;
    }

    .pd-xs-7-f {
        padding: 7px !important;
    }

    .pd-xs-y-7 {
        padding-top: 7px;
        padding-bottom: 7px;
    }

    .pd-xs-y-7-f {
        padding-top: 7px !important;
        padding-bottom: 7px !important;
    }

    .pd-xs-x-7 {
        padding-left: 7px;
        padding-right: 7px;
    }

    .pd-xs-x-7-f {
        padding-left: 7px !important;
        padding-right: 7px !important;
    }

    .pd-xs-t-7 {
        padding-top: 7px;
    }

    .pd-xs-r-7 {
        padding-right: 7px;
    }

    .pd-xs-b-7 {
        padding-bottom: 7px;
    }

    .pd-xs-l-7 {
        padding-left: 7px;
    }

    .pd-xs-t-7-f {
        padding-top: 7px !important;
    }

    .pd-xs-r-7-f {
        padding-right: 7px !important;
    }

    .pd-xs-b-7-f {
        padding-bottom: 7px !important;
    }

    .pd-xs-l-7-f {
        padding-left: 7px !important;
    }

    .pd-xs-8 {
        padding: 8px;
    }

    .pd-xs-8-f {
        padding: 8px !important;
    }

    .pd-xs-y-8 {
        padding-top: 8px;
        padding-bottom: 8px;
    }

    .pd-xs-y-8-f {
        padding-top: 8px !important;
        padding-bottom: 8px !important;
    }

    .pd-xs-x-8 {
        padding-left: 8px;
        padding-right: 8px;
    }

    .pd-xs-x-8-f {
        padding-left: 8px !important;
        padding-right: 8px !important;
    }

    .pd-xs-t-8 {
        padding-top: 8px;
    }

    .pd-xs-r-8 {
        padding-right: 8px;
    }

    .pd-xs-b-8 {
        padding-bottom: 8px;
    }

    .pd-xs-l-8 {
        padding-left: 8px;
    }

    .pd-xs-t-8-f {
        padding-top: 8px !important;
    }

    .pd-xs-r-8-f {
        padding-right: 8px !important;
    }

    .pd-xs-b-8-f {
        padding-bottom: 8px !important;
    }

    .pd-xs-l-8-f {
        padding-left: 8px !important;
    }

    .pd-xs-9 {
        padding: 9px;
    }

    .pd-xs-9-f {
        padding: 9px !important;
    }

    .pd-xs-y-9 {
        padding-top: 9px;
        padding-bottom: 9px;
    }

    .pd-xs-y-9-f {
        padding-top: 9px !important;
        padding-bottom: 9px !important;
    }

    .pd-xs-x-9 {
        padding-left: 9px;
        padding-right: 9px;
    }

    .pd-xs-x-9-f {
        padding-left: 9px !important;
        padding-right: 9px !important;
    }

    .pd-xs-t-9 {
        padding-top: 9px;
    }

    .pd-xs-r-9 {
        padding-right: 9px;
    }

    .pd-xs-b-9 {
        padding-bottom: 9px;
    }

    .pd-xs-l-9 {
        padding-left: 9px;
    }

    .pd-xs-t-9-f {
        padding-top: 9px !important;
    }

    .pd-xs-r-9-f {
        padding-right: 9px !important;
    }

    .pd-xs-b-9-f {
        padding-bottom: 9px !important;
    }

    .pd-xs-l-9-f {
        padding-left: 9px !important;
    }

    .pd-xs-10 {
        padding: 10px;
    }

    .pd-xs-10-f {
        padding: 10px !important;
    }

    .pd-xs-y-10 {
        padding-top: 10px;
        padding-bottom: 10px;
    }

    .pd-xs-y-10-f {
        padding-top: 10px !important;
        padding-bottom: 10px !important;
    }

    .pd-xs-x-10 {
        padding-left: 10px;
        padding-right: 10px;
    }

    .pd-xs-x-10-f {
        padding-left: 10px !important;
        padding-right: 10px !important;
    }

    .pd-xs-t-10 {
        padding-top: 10px;
    }

    .pd-xs-r-10 {
        padding-right: 10px;
    }

    .pd-xs-b-10 {
        padding-bottom: 10px;
    }

    .pd-xs-l-10 {
        padding-left: 10px;
    }

    .pd-xs-t-10-f {
        padding-top: 10px !important;
    }

    .pd-xs-r-10-f {
        padding-right: 10px !important;
    }

    .pd-xs-b-10-f {
        padding-bottom: 10px !important;
    }

    .pd-xs-l-10-f {
        padding-left: 10px !important;
    }

    .pd-xs-15 {
        padding: 15px;
    }

    .pd-xs-15-f {
        padding: 15px !important;
    }

    .pd-xs-y-15 {
        padding-top: 15px;
        padding-bottom: 15px;
    }

    .pd-xs-y-15-f {
        padding-top: 15px !important;
        padding-bottom: 15px !important;
    }

    .pd-xs-x-15 {
        padding-left: 15px;
        padding-right: 15px;
    }

    .pd-xs-x-15-f {
        padding-left: 15px !important;
        padding-right: 15px !important;
    }

    .pd-xs-t-15 {
        padding-top: 15px;
    }

    .pd-xs-r-15 {
        padding-right: 15px;
    }

    .pd-xs-b-15 {
        padding-bottom: 15px;
    }

    .pd-xs-l-15 {
        padding-left: 15px;
    }

    .pd-xs-t-15-f {
        padding-top: 15px !important;
    }

    .pd-xs-r-15-f {
        padding-right: 15px !important;
    }

    .pd-xs-b-15-f {
        padding-bottom: 15px !important;
    }

    .pd-xs-l-15-f {
        padding-left: 15px !important;
    }

    .pd-xs-20 {
        padding: 20px;
    }

    .pd-xs-20-f {
        padding: 20px !important;
    }

    .pd-xs-y-20 {
        padding-top: 20px;
        padding-bottom: 20px;
    }

    .pd-xs-y-20-f {
        padding-top: 20px !important;
        padding-bottom: 20px !important;
    }

    .pd-xs-x-20 {
        padding-left: 20px;
        padding-right: 20px;
    }

    .pd-xs-x-20-f {
        padding-left: 20px !important;
        padding-right: 20px !important;
    }

    .pd-xs-t-20 {
        padding-top: 20px;
    }

    .pd-xs-r-20 {
        padding-right: 20px;
    }

    .pd-xs-b-20 {
        padding-bottom: 20px;
    }

    .pd-xs-l-20 {
        padding-left: 20px;
    }

    .pd-xs-t-20-f {
        padding-top: 20px !important;
    }

    .pd-xs-r-20-f {
        padding-right: 20px !important;
    }

    .pd-xs-b-20-f {
        padding-bottom: 20px !important;
    }

    .pd-xs-l-20-f {
        padding-left: 20px !important;
    }

    .pd-xs-25 {
        padding: 25px;
    }

    .pd-xs-25-f {
        padding: 25px !important;
    }

    .pd-xs-y-25 {
        padding-top: 25px;
        padding-bottom: 25px;
    }

    .pd-xs-y-25-f {
        padding-top: 25px !important;
        padding-bottom: 25px !important;
    }

    .pd-xs-x-25 {
        padding-left: 25px;
        padding-right: 25px;
    }

    .pd-xs-x-25-f {
        padding-left: 25px !important;
        padding-right: 25px !important;
    }

    .pd-xs-t-25 {
        padding-top: 25px;
    }

    .pd-xs-r-25 {
        padding-right: 25px;
    }

    .pd-xs-b-25 {
        padding-bottom: 25px;
    }

    .pd-xs-l-25 {
        padding-left: 25px;
    }

    .pd-xs-t-25-f {
        padding-top: 25px !important;
    }

    .pd-xs-r-25-f {
        padding-right: 25px !important;
    }

    .pd-xs-b-25-f {
        padding-bottom: 25px !important;
    }

    .pd-xs-l-25-f {
        padding-left: 25px !important;
    }

    .pd-xs-30 {
        padding: 30px;
    }

    .pd-xs-30-f {
        padding: 30px !important;
    }

    .pd-xs-y-30 {
        padding-top: 30px;
        padding-bottom: 30px;
    }

    .pd-xs-y-30-f {
        padding-top: 30px !important;
        padding-bottom: 30px !important;
    }

    .pd-xs-x-30 {
        padding-left: 30px;
        padding-right: 30px;
    }

    .pd-xs-x-30-f {
        padding-left: 30px !important;
        padding-right: 30px !important;
    }

    .pd-xs-t-30 {
        padding-top: 30px;
    }

    .pd-xs-r-30 {
        padding-right: 30px;
    }

    .pd-xs-b-30 {
        padding-bottom: 30px;
    }

    .pd-xs-l-30 {
        padding-left: 30px;
    }

    .pd-xs-t-30-f {
        padding-top: 30px !important;
    }

    .pd-xs-r-30-f {
        padding-right: 30px !important;
    }

    .pd-xs-b-30-f {
        padding-bottom: 30px !important;
    }

    .pd-xs-l-30-f {
        padding-left: 30px !important;
    }

    .pd-xs-35 {
        padding: 35px;
    }

    .pd-xs-35-f {
        padding: 35px !important;
    }

    .pd-xs-y-35 {
        padding-top: 35px;
        padding-bottom: 35px;
    }

    .pd-xs-y-35-f {
        padding-top: 35px !important;
        padding-bottom: 35px !important;
    }

    .pd-xs-x-35 {
        padding-left: 35px;
        padding-right: 35px;
    }

    .pd-xs-x-35-f {
        padding-left: 35px !important;
        padding-right: 35px !important;
    }

    .pd-xs-t-35 {
        padding-top: 35px;
    }

    .pd-xs-r-35 {
        padding-right: 35px;
    }

    .pd-xs-b-35 {
        padding-bottom: 35px;
    }

    .pd-xs-l-35 {
        padding-left: 35px;
    }

    .pd-xs-t-35-f {
        padding-top: 35px !important;
    }

    .pd-xs-r-35-f {
        padding-right: 35px !important;
    }

    .pd-xs-b-35-f {
        padding-bottom: 35px !important;
    }

    .pd-xs-l-35-f {
        padding-left: 35px !important;
    }

    .pd-xs-40 {
        padding: 40px;
    }

    .pd-xs-40-f {
        padding: 40px !important;
    }

    .pd-xs-y-40 {
        padding-top: 40px;
        padding-bottom: 40px;
    }

    .pd-xs-y-40-f {
        padding-top: 40px !important;
        padding-bottom: 40px !important;
    }

    .pd-xs-x-40 {
        padding-left: 40px;
        padding-right: 40px;
    }

    .pd-xs-x-40-f {
        padding-left: 40px !important;
        padding-right: 40px !important;
    }

    .pd-xs-t-40 {
        padding-top: 40px;
    }

    .pd-xs-r-40 {
        padding-right: 40px;
    }

    .pd-xs-b-40 {
        padding-bottom: 40px;
    }

    .pd-xs-l-40 {
        padding-left: 40px;
    }

    .pd-xs-t-40-f {
        padding-top: 40px !important;
    }

    .pd-xs-r-40-f {
        padding-right: 40px !important;
    }

    .pd-xs-b-40-f {
        padding-bottom: 40px !important;
    }

    .pd-xs-l-40-f {
        padding-left: 40px !important;
    }

    .pd-xs-45 {
        padding: 45px;
    }

    .pd-xs-45-f {
        padding: 45px !important;
    }

    .pd-xs-y-45 {
        padding-top: 45px;
        padding-bottom: 45px;
    }

    .pd-xs-y-45-f {
        padding-top: 45px !important;
        padding-bottom: 45px !important;
    }

    .pd-xs-x-45 {
        padding-left: 45px;
        padding-right: 45px;
    }

    .pd-xs-x-45-f {
        padding-left: 45px !important;
        padding-right: 45px !important;
    }

    .pd-xs-t-45 {
        padding-top: 45px;
    }

    .pd-xs-r-45 {
        padding-right: 45px;
    }

    .pd-xs-b-45 {
        padding-bottom: 45px;
    }

    .pd-xs-l-45 {
        padding-left: 45px;
    }

    .pd-xs-t-45-f {
        padding-top: 45px !important;
    }

    .pd-xs-r-45-f {
        padding-right: 45px !important;
    }

    .pd-xs-b-45-f {
        padding-bottom: 45px !important;
    }

    .pd-xs-l-45-f {
        padding-left: 45px !important;
    }

    .pd-xs-50 {
        padding: 50px;
    }

    .pd-xs-50-f {
        padding: 50px !important;
    }

    .pd-xs-y-50 {
        padding-top: 50px;
        padding-bottom: 50px;
    }

    .pd-xs-y-50-f {
        padding-top: 50px !important;
        padding-bottom: 50px !important;
    }

    .pd-xs-x-50 {
        padding-left: 50px;
        padding-right: 50px;
    }

    .pd-xs-x-50-f {
        padding-left: 50px !important;
        padding-right: 50px !important;
    }

    .pd-xs-t-50 {
        padding-top: 50px;
    }

    .pd-xs-r-50 {
        padding-right: 50px;
    }

    .pd-xs-b-50 {
        padding-bottom: 50px;
    }

    .pd-xs-l-50 {
        padding-left: 50px;
    }

    .pd-xs-t-50-f {
        padding-top: 50px !important;
    }

    .pd-xs-r-50-f {
        padding-right: 50px !important;
    }

    .pd-xs-b-50-f {
        padding-bottom: 50px !important;
    }

    .pd-xs-l-50-f {
        padding-left: 50px !important;
    }

    .pd-xs-55 {
        padding: 55px;
    }

    .pd-xs-55-f {
        padding: 55px !important;
    }

    .pd-xs-y-55 {
        padding-top: 55px;
        padding-bottom: 55px;
    }

    .pd-xs-y-55-f {
        padding-top: 55px !important;
        padding-bottom: 55px !important;
    }

    .pd-xs-x-55 {
        padding-left: 55px;
        padding-right: 55px;
    }

    .pd-xs-x-55-f {
        padding-left: 55px !important;
        padding-right: 55px !important;
    }

    .pd-xs-t-55 {
        padding-top: 55px;
    }

    .pd-xs-r-55 {
        padding-right: 55px;
    }

    .pd-xs-b-55 {
        padding-bottom: 55px;
    }

    .pd-xs-l-55 {
        padding-left: 55px;
    }

    .pd-xs-t-55-f {
        padding-top: 55px !important;
    }

    .pd-xs-r-55-f {
        padding-right: 55px !important;
    }

    .pd-xs-b-55-f {
        padding-bottom: 55px !important;
    }

    .pd-xs-l-55-f {
        padding-left: 55px !important;
    }

    .pd-xs-60 {
        padding: 60px;
    }

    .pd-xs-60-f {
        padding: 60px !important;
    }

    .pd-xs-y-60 {
        padding-top: 60px;
        padding-bottom: 60px;
    }

    .pd-xs-y-60-f {
        padding-top: 60px !important;
        padding-bottom: 60px !important;
    }

    .pd-xs-x-60 {
        padding-left: 60px;
        padding-right: 60px;
    }

    .pd-xs-x-60-f {
        padding-left: 60px !important;
        padding-right: 60px !important;
    }

    .pd-xs-t-60 {
        padding-top: 60px;
    }

    .pd-xs-r-60 {
        padding-right: 60px;
    }

    .pd-xs-b-60 {
        padding-bottom: 60px;
    }

    .pd-xs-l-60 {
        padding-left: 60px;
    }

    .pd-xs-t-60-f {
        padding-top: 60px !important;
    }

    .pd-xs-r-60-f {
        padding-right: 60px !important;
    }

    .pd-xs-b-60-f {
        padding-bottom: 60px !important;
    }

    .pd-xs-l-60-f {
        padding-left: 60px !important;
    }

    .pd-xs-65 {
        padding: 65px;
    }

    .pd-xs-65-f {
        padding: 65px !important;
    }

    .pd-xs-y-65 {
        padding-top: 65px;
        padding-bottom: 65px;
    }

    .pd-xs-y-65-f {
        padding-top: 65px !important;
        padding-bottom: 65px !important;
    }

    .pd-xs-x-65 {
        padding-left: 65px;
        padding-right: 65px;
    }

    .pd-xs-x-65-f {
        padding-left: 65px !important;
        padding-right: 65px !important;
    }

    .pd-xs-t-65 {
        padding-top: 65px;
    }

    .pd-xs-r-65 {
        padding-right: 65px;
    }

    .pd-xs-b-65 {
        padding-bottom: 65px;
    }

    .pd-xs-l-65 {
        padding-left: 65px;
    }

    .pd-xs-t-65-f {
        padding-top: 65px !important;
    }

    .pd-xs-r-65-f {
        padding-right: 65px !important;
    }

    .pd-xs-b-65-f {
        padding-bottom: 65px !important;
    }

    .pd-xs-l-65-f {
        padding-left: 65px !important;
    }

    .pd-xs-70 {
        padding: 70px;
    }

    .pd-xs-70-f {
        padding: 70px !important;
    }

    .pd-xs-y-70 {
        padding-top: 70px;
        padding-bottom: 70px;
    }

    .pd-xs-y-70-f {
        padding-top: 70px !important;
        padding-bottom: 70px !important;
    }

    .pd-xs-x-70 {
        padding-left: 70px;
        padding-right: 70px;
    }

    .pd-xs-x-70-f {
        padding-left: 70px !important;
        padding-right: 70px !important;
    }

    .pd-xs-t-70 {
        padding-top: 70px;
    }

    .pd-xs-r-70 {
        padding-right: 70px;
    }

    .pd-xs-b-70 {
        padding-bottom: 70px;
    }

    .pd-xs-l-70 {
        padding-left: 70px;
    }

    .pd-xs-t-70-f {
        padding-top: 70px !important;
    }

    .pd-xs-r-70-f {
        padding-right: 70px !important;
    }

    .pd-xs-b-70-f {
        padding-bottom: 70px !important;
    }

    .pd-xs-l-70-f {
        padding-left: 70px !important;
    }

    .pd-xs-75 {
        padding: 75px;
    }

    .pd-xs-75-f {
        padding: 75px !important;
    }

    .pd-xs-y-75 {
        padding-top: 75px;
        padding-bottom: 75px;
    }

    .pd-xs-y-75-f {
        padding-top: 75px !important;
        padding-bottom: 75px !important;
    }

    .pd-xs-x-75 {
        padding-left: 75px;
        padding-right: 75px;
    }

    .pd-xs-x-75-f {
        padding-left: 75px !important;
        padding-right: 75px !important;
    }

    .pd-xs-t-75 {
        padding-top: 75px;
    }

    .pd-xs-r-75 {
        padding-right: 75px;
    }

    .pd-xs-b-75 {
        padding-bottom: 75px;
    }

    .pd-xs-l-75 {
        padding-left: 75px;
    }

    .pd-xs-t-75-f {
        padding-top: 75px !important;
    }

    .pd-xs-r-75-f {
        padding-right: 75px !important;
    }

    .pd-xs-b-75-f {
        padding-bottom: 75px !important;
    }

    .pd-xs-l-75-f {
        padding-left: 75px !important;
    }

    .pd-xs-80 {
        padding: 80px;
    }

    .pd-xs-80-f {
        padding: 80px !important;
    }

    .pd-xs-y-80 {
        padding-top: 80px;
        padding-bottom: 80px;
    }

    .pd-xs-y-80-f {
        padding-top: 80px !important;
        padding-bottom: 80px !important;
    }

    .pd-xs-x-80 {
        padding-left: 80px;
        padding-right: 80px;
    }

    .pd-xs-x-80-f {
        padding-left: 80px !important;
        padding-right: 80px !important;
    }

    .pd-xs-t-80 {
        padding-top: 80px;
    }

    .pd-xs-r-80 {
        padding-right: 80px;
    }

    .pd-xs-b-80 {
        padding-bottom: 80px;
    }

    .pd-xs-l-80 {
        padding-left: 80px;
    }

    .pd-xs-t-80-f {
        padding-top: 80px !important;
    }

    .pd-xs-r-80-f {
        padding-right: 80px !important;
    }

    .pd-xs-b-80-f {
        padding-bottom: 80px !important;
    }

    .pd-xs-l-80-f {
        padding-left: 80px !important;
    }

    .pd-xs-85 {
        padding: 85px;
    }

    .pd-xs-85-f {
        padding: 85px !important;
    }

    .pd-xs-y-85 {
        padding-top: 85px;
        padding-bottom: 85px;
    }

    .pd-xs-y-85-f {
        padding-top: 85px !important;
        padding-bottom: 85px !important;
    }

    .pd-xs-x-85 {
        padding-left: 85px;
        padding-right: 85px;
    }

    .pd-xs-x-85-f {
        padding-left: 85px !important;
        padding-right: 85px !important;
    }

    .pd-xs-t-85 {
        padding-top: 85px;
    }

    .pd-xs-r-85 {
        padding-right: 85px;
    }

    .pd-xs-b-85 {
        padding-bottom: 85px;
    }

    .pd-xs-l-85 {
        padding-left: 85px;
    }

    .pd-xs-t-85-f {
        padding-top: 85px !important;
    }

    .pd-xs-r-85-f {
        padding-right: 85px !important;
    }

    .pd-xs-b-85-f {
        padding-bottom: 85px !important;
    }

    .pd-xs-l-85-f {
        padding-left: 85px !important;
    }

    .pd-xs-90 {
        padding: 90px;
    }

    .pd-xs-90-f {
        padding: 90px !important;
    }

    .pd-xs-y-90 {
        padding-top: 90px;
        padding-bottom: 90px;
    }

    .pd-xs-y-90-f {
        padding-top: 90px !important;
        padding-bottom: 90px !important;
    }

    .pd-xs-x-90 {
        padding-left: 90px;
        padding-right: 90px;
    }

    .pd-xs-x-90-f {
        padding-left: 90px !important;
        padding-right: 90px !important;
    }

    .pd-xs-t-90 {
        padding-top: 90px;
    }

    .pd-xs-r-90 {
        padding-right: 90px;
    }

    .pd-xs-b-90 {
        padding-bottom: 90px;
    }

    .pd-xs-l-90 {
        padding-left: 90px;
    }

    .pd-xs-t-90-f {
        padding-top: 90px !important;
    }

    .pd-xs-r-90-f {
        padding-right: 90px !important;
    }

    .pd-xs-b-90-f {
        padding-bottom: 90px !important;
    }

    .pd-xs-l-90-f {
        padding-left: 90px !important;
    }

    .pd-xs-95 {
        padding: 95px;
    }

    .pd-xs-95-f {
        padding: 95px !important;
    }

    .pd-xs-y-95 {
        padding-top: 95px;
        padding-bottom: 95px;
    }

    .pd-xs-y-95-f {
        padding-top: 95px !important;
        padding-bottom: 95px !important;
    }

    .pd-xs-x-95 {
        padding-left: 95px;
        padding-right: 95px;
    }

    .pd-xs-x-95-f {
        padding-left: 95px !important;
        padding-right: 95px !important;
    }

    .pd-xs-t-95 {
        padding-top: 95px;
    }

    .pd-xs-r-95 {
        padding-right: 95px;
    }

    .pd-xs-b-95 {
        padding-bottom: 95px;
    }

    .pd-xs-l-95 {
        padding-left: 95px;
    }

    .pd-xs-t-95-f {
        padding-top: 95px !important;
    }

    .pd-xs-r-95-f {
        padding-right: 95px !important;
    }

    .pd-xs-b-95-f {
        padding-bottom: 95px !important;
    }

    .pd-xs-l-95-f {
        padding-left: 95px !important;
    }

    .pd-xs-100 {
        padding: 100px;
    }

    .pd-xs-100-f {
        padding: 100px !important;
    }

    .pd-xs-y-100 {
        padding-top: 100px;
        padding-bottom: 100px;
    }

    .pd-xs-y-100-f {
        padding-top: 100px !important;
        padding-bottom: 100px !important;
    }

    .pd-xs-x-100 {
        padding-left: 100px;
        padding-right: 100px;
    }

    .pd-xs-x-100-f {
        padding-left: 100px !important;
        padding-right: 100px !important;
    }

    .pd-xs-t-100 {
        padding-top: 100px;
    }

    .pd-xs-r-100 {
        padding-right: 100px;
    }

    .pd-xs-b-100 {
        padding-bottom: 100px;
    }

    .pd-xs-l-100 {
        padding-left: 100px;
    }

    .pd-xs-t-100-f {
        padding-top: 100px !important;
    }

    .pd-xs-r-100-f {
        padding-right: 100px !important;
    }

    .pd-xs-b-100-f {
        padding-bottom: 100px !important;
    }

    .pd-xs-l-100-f {
        padding-left: 100px !important;
    }

    .pd-xs-110 {
        padding: 110px;
    }

    .pd-xs-110-f {
        padding: 110px !important;
    }

    .pd-xs-y-110 {
        padding-top: 110px;
        padding-bottom: 110px;
    }

    .pd-xs-y-110-f {
        padding-top: 110px !important;
        padding-bottom: 110px !important;
    }

    .pd-xs-x-110 {
        padding-left: 110px;
        padding-right: 110px;
    }

    .pd-xs-x-110-f {
        padding-left: 110px !important;
        padding-right: 110px !important;
    }

    .pd-xs-t-110 {
        padding-top: 110px;
    }

    .pd-xs-r-110 {
        padding-right: 110px;
    }

    .pd-xs-b-110 {
        padding-bottom: 110px;
    }

    .pd-xs-l-110 {
        padding-left: 110px;
    }

    .pd-xs-t-110-f {
        padding-top: 110px !important;
    }

    .pd-xs-r-110-f {
        padding-right: 110px !important;
    }

    .pd-xs-b-110-f {
        padding-bottom: 110px !important;
    }

    .pd-xs-l-110-f {
        padding-left: 110px !important;
    }

    .pd-xs-120 {
        padding: 120px;
    }

    .pd-xs-120-f {
        padding: 120px !important;
    }

    .pd-xs-y-120 {
        padding-top: 120px;
        padding-bottom: 120px;
    }

    .pd-xs-y-120-f {
        padding-top: 120px !important;
        padding-bottom: 120px !important;
    }

    .pd-xs-x-120 {
        padding-left: 120px;
        padding-right: 120px;
    }

    .pd-xs-x-120-f {
        padding-left: 120px !important;
        padding-right: 120px !important;
    }

    .pd-xs-t-120 {
        padding-top: 120px;
    }

    .pd-xs-r-120 {
        padding-right: 120px;
    }

    .pd-xs-b-120 {
        padding-bottom: 120px;
    }

    .pd-xs-l-120 {
        padding-left: 120px;
    }

    .pd-xs-t-120-f {
        padding-top: 120px !important;
    }

    .pd-xs-r-120-f {
        padding-right: 120px !important;
    }

    .pd-xs-b-120-f {
        padding-bottom: 120px !important;
    }

    .pd-xs-l-120-f {
        padding-left: 120px !important;
    }

    .pd-xs-130 {
        padding: 130px;
    }

    .pd-xs-130-f {
        padding: 130px !important;
    }

    .pd-xs-y-130 {
        padding-top: 130px;
        padding-bottom: 130px;
    }

    .pd-xs-y-130-f {
        padding-top: 130px !important;
        padding-bottom: 130px !important;
    }

    .pd-xs-x-130 {
        padding-left: 130px;
        padding-right: 130px;
    }

    .pd-xs-x-130-f {
        padding-left: 130px !important;
        padding-right: 130px !important;
    }

    .pd-xs-t-130 {
        padding-top: 130px;
    }

    .pd-xs-r-130 {
        padding-right: 130px;
    }

    .pd-xs-b-130 {
        padding-bottom: 130px;
    }

    .pd-xs-l-130 {
        padding-left: 130px;
    }

    .pd-xs-t-130-f {
        padding-top: 130px !important;
    }

    .pd-xs-r-130-f {
        padding-right: 130px !important;
    }

    .pd-xs-b-130-f {
        padding-bottom: 130px !important;
    }

    .pd-xs-l-130-f {
        padding-left: 130px !important;
    }

    .pd-xs-140 {
        padding: 140px;
    }

    .pd-xs-140-f {
        padding: 140px !important;
    }

    .pd-xs-y-140 {
        padding-top: 140px;
        padding-bottom: 140px;
    }

    .pd-xs-y-140-f {
        padding-top: 140px !important;
        padding-bottom: 140px !important;
    }

    .pd-xs-x-140 {
        padding-left: 140px;
        padding-right: 140px;
    }

    .pd-xs-x-140-f {
        padding-left: 140px !important;
        padding-right: 140px !important;
    }

    .pd-xs-t-140 {
        padding-top: 140px;
    }

    .pd-xs-r-140 {
        padding-right: 140px;
    }

    .pd-xs-b-140 {
        padding-bottom: 140px;
    }

    .pd-xs-l-140 {
        padding-left: 140px;
    }

    .pd-xs-t-140-f {
        padding-top: 140px !important;
    }

    .pd-xs-r-140-f {
        padding-right: 140px !important;
    }

    .pd-xs-b-140-f {
        padding-bottom: 140px !important;
    }

    .pd-xs-l-140-f {
        padding-left: 140px !important;
    }

    .pd-xs-150 {
        padding: 150px;
    }

    .pd-xs-150-f {
        padding: 150px !important;
    }

    .pd-xs-y-150 {
        padding-top: 150px;
        padding-bottom: 150px;
    }

    .pd-xs-y-150-f {
        padding-top: 150px !important;
        padding-bottom: 150px !important;
    }

    .pd-xs-x-150 {
        padding-left: 150px;
        padding-right: 150px;
    }

    .pd-xs-x-150-f {
        padding-left: 150px !important;
        padding-right: 150px !important;
    }

    .pd-xs-t-150 {
        padding-top: 150px;
    }

    .pd-xs-r-150 {
        padding-right: 150px;
    }

    .pd-xs-b-150 {
        padding-bottom: 150px;
    }

    .pd-xs-l-150 {
        padding-left: 150px;
    }

    .pd-xs-t-150-f {
        padding-top: 150px !important;
    }

    .pd-xs-r-150-f {
        padding-right: 150px !important;
    }

    .pd-xs-b-150-f {
        padding-bottom: 150px !important;
    }

    .pd-xs-l-150-f {
        padding-left: 150px !important;
    }

    .pd-xs-160 {
        padding: 160px;
    }

    .pd-xs-160-f {
        padding: 160px !important;
    }

    .pd-xs-y-160 {
        padding-top: 160px;
        padding-bottom: 160px;
    }

    .pd-xs-y-160-f {
        padding-top: 160px !important;
        padding-bottom: 160px !important;
    }

    .pd-xs-x-160 {
        padding-left: 160px;
        padding-right: 160px;
    }

    .pd-xs-x-160-f {
        padding-left: 160px !important;
        padding-right: 160px !important;
    }

    .pd-xs-t-160 {
        padding-top: 160px;
    }

    .pd-xs-r-160 {
        padding-right: 160px;
    }

    .pd-xs-b-160 {
        padding-bottom: 160px;
    }

    .pd-xs-l-160 {
        padding-left: 160px;
    }

    .pd-xs-t-160-f {
        padding-top: 160px !important;
    }

    .pd-xs-r-160-f {
        padding-right: 160px !important;
    }

    .pd-xs-b-160-f {
        padding-bottom: 160px !important;
    }

    .pd-xs-l-160-f {
        padding-left: 160px !important;
    }

    .pd-xs-170 {
        padding: 170px;
    }

    .pd-xs-170-f {
        padding: 170px !important;
    }

    .pd-xs-y-170 {
        padding-top: 170px;
        padding-bottom: 170px;
    }

    .pd-xs-y-170-f {
        padding-top: 170px !important;
        padding-bottom: 170px !important;
    }

    .pd-xs-x-170 {
        padding-left: 170px;
        padding-right: 170px;
    }

    .pd-xs-x-170-f {
        padding-left: 170px !important;
        padding-right: 170px !important;
    }

    .pd-xs-t-170 {
        padding-top: 170px;
    }

    .pd-xs-r-170 {
        padding-right: 170px;
    }

    .pd-xs-b-170 {
        padding-bottom: 170px;
    }

    .pd-xs-l-170 {
        padding-left: 170px;
    }

    .pd-xs-t-170-f {
        padding-top: 170px !important;
    }

    .pd-xs-r-170-f {
        padding-right: 170px !important;
    }

    .pd-xs-b-170-f {
        padding-bottom: 170px !important;
    }

    .pd-xs-l-170-f {
        padding-left: 170px !important;
    }

    .pd-xs-180 {
        padding: 180px;
    }

    .pd-xs-180-f {
        padding: 180px !important;
    }

    .pd-xs-y-180 {
        padding-top: 180px;
        padding-bottom: 180px;
    }

    .pd-xs-y-180-f {
        padding-top: 180px !important;
        padding-bottom: 180px !important;
    }

    .pd-xs-x-180 {
        padding-left: 180px;
        padding-right: 180px;
    }

    .pd-xs-x-180-f {
        padding-left: 180px !important;
        padding-right: 180px !important;
    }

    .pd-xs-t-180 {
        padding-top: 180px;
    }

    .pd-xs-r-180 {
        padding-right: 180px;
    }

    .pd-xs-b-180 {
        padding-bottom: 180px;
    }

    .pd-xs-l-180 {
        padding-left: 180px;
    }

    .pd-xs-t-180-f {
        padding-top: 180px !important;
    }

    .pd-xs-r-180-f {
        padding-right: 180px !important;
    }

    .pd-xs-b-180-f {
        padding-bottom: 180px !important;
    }

    .pd-xs-l-180-f {
        padding-left: 180px !important;
    }

    .pd-xs-190 {
        padding: 190px;
    }

    .pd-xs-190-f {
        padding: 190px !important;
    }

    .pd-xs-y-190 {
        padding-top: 190px;
        padding-bottom: 190px;
    }

    .pd-xs-y-190-f {
        padding-top: 190px !important;
        padding-bottom: 190px !important;
    }

    .pd-xs-x-190 {
        padding-left: 190px;
        padding-right: 190px;
    }

    .pd-xs-x-190-f {
        padding-left: 190px !important;
        padding-right: 190px !important;
    }

    .pd-xs-t-190 {
        padding-top: 190px;
    }

    .pd-xs-r-190 {
        padding-right: 190px;
    }

    .pd-xs-b-190 {
        padding-bottom: 190px;
    }

    .pd-xs-l-190 {
        padding-left: 190px;
    }

    .pd-xs-t-190-f {
        padding-top: 190px !important;
    }

    .pd-xs-r-190-f {
        padding-right: 190px !important;
    }

    .pd-xs-b-190-f {
        padding-bottom: 190px !important;
    }

    .pd-xs-l-190-f {
        padding-left: 190px !important;
    }

    .pd-xs-200 {
        padding: 200px;
    }

    .pd-xs-200-f {
        padding: 200px !important;
    }

    .pd-xs-y-200 {
        padding-top: 200px;
        padding-bottom: 200px;
    }

    .pd-xs-y-200-f {
        padding-top: 200px !important;
        padding-bottom: 200px !important;
    }

    .pd-xs-x-200 {
        padding-left: 200px;
        padding-right: 200px;
    }

    .pd-xs-x-200-f {
        padding-left: 200px !important;
        padding-right: 200px !important;
    }

    .pd-xs-t-200 {
        padding-top: 200px;
    }

    .pd-xs-r-200 {
        padding-right: 200px;
    }

    .pd-xs-b-200 {
        padding-bottom: 200px;
    }

    .pd-xs-l-200 {
        padding-left: 200px;
    }

    .pd-xs-t-200-f {
        padding-top: 200px !important;
    }

    .pd-xs-r-200-f {
        padding-right: 200px !important;
    }

    .pd-xs-b-200-f {
        padding-bottom: 200px !important;
    }

    .pd-xs-l-200-f {
        padding-left: 200px !important;
    }
}

@media (min-width: 576px) {
    .pd-sm-0 {
        padding: 0px;
    }

    .pd-sm-0-f {
        padding: 0px !important;
    }

    .pd-sm-y-0 {
        padding-top: 0px;
        padding-bottom: 0px;
    }

    .pd-sm-y-0-f {
        padding-top: 0px !important;
        padding-bottom: 0px !important;
    }

    .pd-sm-x-0 {
        padding-left: 0px;
        padding-right: 0px;
    }

    .pd-sm-x-0-f {
        padding-left: 0px !important;
        padding-right: 0px !important;
    }

    .pd-sm-t-0 {
        padding-top: 0px;
    }

    .pd-sm-r-0 {
        padding-right: 0px;
    }

    .pd-sm-b-0 {
        padding-bottom: 0px;
    }

    .pd-sm-l-0 {
        padding-left: 0px;
    }

    .pd-sm-t-0-f {
        padding-top: 0px !important;
    }

    .pd-sm-r-0-f {
        padding-right: 0px !important;
    }

    .pd-sm-b-0-f {
        padding-bottom: 0px !important;
    }

    .pd-sm-l-0-f {
        padding-left: 0px !important;
    }

    .pd-sm-1 {
        padding: 1px;
    }

    .pd-sm-1-f {
        padding: 1px !important;
    }

    .pd-sm-y-1 {
        padding-top: 1px;
        padding-bottom: 1px;
    }

    .pd-sm-y-1-f {
        padding-top: 1px !important;
        padding-bottom: 1px !important;
    }

    .pd-sm-x-1 {
        padding-left: 1px;
        padding-right: 1px;
    }

    .pd-sm-x-1-f {
        padding-left: 1px !important;
        padding-right: 1px !important;
    }

    .pd-sm-t-1 {
        padding-top: 1px;
    }

    .pd-sm-r-1 {
        padding-right: 1px;
    }

    .pd-sm-b-1 {
        padding-bottom: 1px;
    }

    .pd-sm-l-1 {
        padding-left: 1px;
    }

    .pd-sm-t-1-f {
        padding-top: 1px !important;
    }

    .pd-sm-r-1-f {
        padding-right: 1px !important;
    }

    .pd-sm-b-1-f {
        padding-bottom: 1px !important;
    }

    .pd-sm-l-1-f {
        padding-left: 1px !important;
    }

    .pd-sm-2 {
        padding: 2px;
    }

    .pd-sm-2-f {
        padding: 2px !important;
    }

    .pd-sm-y-2 {
        padding-top: 2px;
        padding-bottom: 2px;
    }

    .pd-sm-y-2-f {
        padding-top: 2px !important;
        padding-bottom: 2px !important;
    }

    .pd-sm-x-2 {
        padding-left: 2px;
        padding-right: 2px;
    }

    .pd-sm-x-2-f {
        padding-left: 2px !important;
        padding-right: 2px !important;
    }

    .pd-sm-t-2 {
        padding-top: 2px;
    }

    .pd-sm-r-2 {
        padding-right: 2px;
    }

    .pd-sm-b-2 {
        padding-bottom: 2px;
    }

    .pd-sm-l-2 {
        padding-left: 2px;
    }

    .pd-sm-t-2-f {
        padding-top: 2px !important;
    }

    .pd-sm-r-2-f {
        padding-right: 2px !important;
    }

    .pd-sm-b-2-f {
        padding-bottom: 2px !important;
    }

    .pd-sm-l-2-f {
        padding-left: 2px !important;
    }

    .pd-sm-3 {
        padding: 3px;
    }

    .pd-sm-3-f {
        padding: 3px !important;
    }

    .pd-sm-y-3 {
        padding-top: 3px;
        padding-bottom: 3px;
    }

    .pd-sm-y-3-f {
        padding-top: 3px !important;
        padding-bottom: 3px !important;
    }

    .pd-sm-x-3 {
        padding-left: 3px;
        padding-right: 3px;
    }

    .pd-sm-x-3-f {
        padding-left: 3px !important;
        padding-right: 3px !important;
    }

    .pd-sm-t-3 {
        padding-top: 3px;
    }

    .pd-sm-r-3 {
        padding-right: 3px;
    }

    .pd-sm-b-3 {
        padding-bottom: 3px;
    }

    .pd-sm-l-3 {
        padding-left: 3px;
    }

    .pd-sm-t-3-f {
        padding-top: 3px !important;
    }

    .pd-sm-r-3-f {
        padding-right: 3px !important;
    }

    .pd-sm-b-3-f {
        padding-bottom: 3px !important;
    }

    .pd-sm-l-3-f {
        padding-left: 3px !important;
    }

    .pd-sm-4 {
        padding: 4px;
    }

    .pd-sm-4-f {
        padding: 4px !important;
    }

    .pd-sm-y-4 {
        padding-top: 4px;
        padding-bottom: 4px;
    }

    .pd-sm-y-4-f {
        padding-top: 4px !important;
        padding-bottom: 4px !important;
    }

    .pd-sm-x-4 {
        padding-left: 4px;
        padding-right: 4px;
    }

    .pd-sm-x-4-f {
        padding-left: 4px !important;
        padding-right: 4px !important;
    }

    .pd-sm-t-4 {
        padding-top: 4px;
    }

    .pd-sm-r-4 {
        padding-right: 4px;
    }

    .pd-sm-b-4 {
        padding-bottom: 4px;
    }

    .pd-sm-l-4 {
        padding-left: 4px;
    }

    .pd-sm-t-4-f {
        padding-top: 4px !important;
    }

    .pd-sm-r-4-f {
        padding-right: 4px !important;
    }

    .pd-sm-b-4-f {
        padding-bottom: 4px !important;
    }

    .pd-sm-l-4-f {
        padding-left: 4px !important;
    }

    .pd-sm-5 {
        padding: 5px;
    }

    .pd-sm-5-f {
        padding: 5px !important;
    }

    .pd-sm-y-5 {
        padding-top: 5px;
        padding-bottom: 5px;
    }

    .pd-sm-y-5-f {
        padding-top: 5px !important;
        padding-bottom: 5px !important;
    }

    .pd-sm-x-5 {
        padding-left: 5px;
        padding-right: 5px;
    }

    .pd-sm-x-5-f {
        padding-left: 5px !important;
        padding-right: 5px !important;
    }

    .pd-sm-t-5 {
        padding-top: 5px;
    }

    .pd-sm-r-5 {
        padding-right: 5px;
    }

    .pd-sm-b-5 {
        padding-bottom: 5px;
    }

    .pd-sm-l-5 {
        padding-left: 5px;
    }

    .pd-sm-t-5-f {
        padding-top: 5px !important;
    }

    .pd-sm-r-5-f {
        padding-right: 5px !important;
    }

    .pd-sm-b-5-f {
        padding-bottom: 5px !important;
    }

    .pd-sm-l-5-f {
        padding-left: 5px !important;
    }

    .pd-sm-6 {
        padding: 6px;
    }

    .pd-sm-6-f {
        padding: 6px !important;
    }

    .pd-sm-y-6 {
        padding-top: 6px;
        padding-bottom: 6px;
    }

    .pd-sm-y-6-f {
        padding-top: 6px !important;
        padding-bottom: 6px !important;
    }

    .pd-sm-x-6 {
        padding-left: 6px;
        padding-right: 6px;
    }

    .pd-sm-x-6-f {
        padding-left: 6px !important;
        padding-right: 6px !important;
    }

    .pd-sm-t-6 {
        padding-top: 6px;
    }

    .pd-sm-r-6 {
        padding-right: 6px;
    }

    .pd-sm-b-6 {
        padding-bottom: 6px;
    }

    .pd-sm-l-6 {
        padding-left: 6px;
    }

    .pd-sm-t-6-f {
        padding-top: 6px !important;
    }

    .pd-sm-r-6-f {
        padding-right: 6px !important;
    }

    .pd-sm-b-6-f {
        padding-bottom: 6px !important;
    }

    .pd-sm-l-6-f {
        padding-left: 6px !important;
    }

    .pd-sm-7 {
        padding: 7px;
    }

    .pd-sm-7-f {
        padding: 7px !important;
    }

    .pd-sm-y-7 {
        padding-top: 7px;
        padding-bottom: 7px;
    }

    .pd-sm-y-7-f {
        padding-top: 7px !important;
        padding-bottom: 7px !important;
    }

    .pd-sm-x-7 {
        padding-left: 7px;
        padding-right: 7px;
    }

    .pd-sm-x-7-f {
        padding-left: 7px !important;
        padding-right: 7px !important;
    }

    .pd-sm-t-7 {
        padding-top: 7px;
    }

    .pd-sm-r-7 {
        padding-right: 7px;
    }

    .pd-sm-b-7 {
        padding-bottom: 7px;
    }

    .pd-sm-l-7 {
        padding-left: 7px;
    }

    .pd-sm-t-7-f {
        padding-top: 7px !important;
    }

    .pd-sm-r-7-f {
        padding-right: 7px !important;
    }

    .pd-sm-b-7-f {
        padding-bottom: 7px !important;
    }

    .pd-sm-l-7-f {
        padding-left: 7px !important;
    }

    .pd-sm-8 {
        padding: 8px;
    }

    .pd-sm-8-f {
        padding: 8px !important;
    }

    .pd-sm-y-8 {
        padding-top: 8px;
        padding-bottom: 8px;
    }

    .pd-sm-y-8-f {
        padding-top: 8px !important;
        padding-bottom: 8px !important;
    }

    .pd-sm-x-8 {
        padding-left: 8px;
        padding-right: 8px;
    }

    .pd-sm-x-8-f {
        padding-left: 8px !important;
        padding-right: 8px !important;
    }

    .pd-sm-t-8 {
        padding-top: 8px;
    }

    .pd-sm-r-8 {
        padding-right: 8px;
    }

    .pd-sm-b-8 {
        padding-bottom: 8px;
    }

    .pd-sm-l-8 {
        padding-left: 8px;
    }

    .pd-sm-t-8-f {
        padding-top: 8px !important;
    }

    .pd-sm-r-8-f {
        padding-right: 8px !important;
    }

    .pd-sm-b-8-f {
        padding-bottom: 8px !important;
    }

    .pd-sm-l-8-f {
        padding-left: 8px !important;
    }

    .pd-sm-9 {
        padding: 9px;
    }

    .pd-sm-9-f {
        padding: 9px !important;
    }

    .pd-sm-y-9 {
        padding-top: 9px;
        padding-bottom: 9px;
    }

    .pd-sm-y-9-f {
        padding-top: 9px !important;
        padding-bottom: 9px !important;
    }

    .pd-sm-x-9 {
        padding-left: 9px;
        padding-right: 9px;
    }

    .pd-sm-x-9-f {
        padding-left: 9px !important;
        padding-right: 9px !important;
    }

    .pd-sm-t-9 {
        padding-top: 9px;
    }

    .pd-sm-r-9 {
        padding-right: 9px;
    }

    .pd-sm-b-9 {
        padding-bottom: 9px;
    }

    .pd-sm-l-9 {
        padding-left: 9px;
    }

    .pd-sm-t-9-f {
        padding-top: 9px !important;
    }

    .pd-sm-r-9-f {
        padding-right: 9px !important;
    }

    .pd-sm-b-9-f {
        padding-bottom: 9px !important;
    }

    .pd-sm-l-9-f {
        padding-left: 9px !important;
    }

    .pd-sm-10 {
        padding: 10px;
    }

    .pd-sm-10-f {
        padding: 10px !important;
    }

    .pd-sm-y-10 {
        padding-top: 10px;
        padding-bottom: 10px;
    }

    .pd-sm-y-10-f {
        padding-top: 10px !important;
        padding-bottom: 10px !important;
    }

    .pd-sm-x-10 {
        padding-left: 10px;
        padding-right: 10px;
    }

    .pd-sm-x-10-f {
        padding-left: 10px !important;
        padding-right: 10px !important;
    }

    .pd-sm-t-10 {
        padding-top: 10px;
    }

    .pd-sm-r-10 {
        padding-right: 10px;
    }

    .pd-sm-b-10 {
        padding-bottom: 10px;
    }

    .pd-sm-l-10 {
        padding-left: 10px;
    }

    .pd-sm-t-10-f {
        padding-top: 10px !important;
    }

    .pd-sm-r-10-f {
        padding-right: 10px !important;
    }

    .pd-sm-b-10-f {
        padding-bottom: 10px !important;
    }

    .pd-sm-l-10-f {
        padding-left: 10px !important;
    }

    .pd-sm-15 {
        padding: 15px;
    }

    .pd-sm-15-f {
        padding: 15px !important;
    }

    .pd-sm-y-15 {
        padding-top: 15px;
        padding-bottom: 15px;
    }

    .pd-sm-y-15-f {
        padding-top: 15px !important;
        padding-bottom: 15px !important;
    }

    .pd-sm-x-15 {
        padding-left: 15px;
        padding-right: 15px;
    }

    .pd-sm-x-15-f {
        padding-left: 15px !important;
        padding-right: 15px !important;
    }

    .pd-sm-t-15 {
        padding-top: 15px;
    }

    .pd-sm-r-15 {
        padding-right: 15px;
    }

    .pd-sm-b-15 {
        padding-bottom: 15px;
    }

    .pd-sm-l-15 {
        padding-left: 15px;
    }

    .pd-sm-t-15-f {
        padding-top: 15px !important;
    }

    .pd-sm-r-15-f {
        padding-right: 15px !important;
    }

    .pd-sm-b-15-f {
        padding-bottom: 15px !important;
    }

    .pd-sm-l-15-f {
        padding-left: 15px !important;
    }

    .pd-sm-20 {
        padding: 20px;
    }

    .pd-sm-20-f {
        padding: 20px !important;
    }

    .pd-sm-y-20 {
        padding-top: 20px;
        padding-bottom: 20px;
    }

    .pd-sm-y-20-f {
        padding-top: 20px !important;
        padding-bottom: 20px !important;
    }

    .pd-sm-x-20 {
        padding-left: 20px;
        padding-right: 20px;
    }

    .pd-sm-x-20-f {
        padding-left: 20px !important;
        padding-right: 20px !important;
    }

    .pd-sm-t-20 {
        padding-top: 20px;
    }

    .pd-sm-r-20 {
        padding-right: 20px;
    }

    .pd-sm-b-20 {
        padding-bottom: 20px;
    }

    .pd-sm-l-20 {
        padding-left: 20px;
    }

    .pd-sm-t-20-f {
        padding-top: 20px !important;
    }

    .pd-sm-r-20-f {
        padding-right: 20px !important;
    }

    .pd-sm-b-20-f {
        padding-bottom: 20px !important;
    }

    .pd-sm-l-20-f {
        padding-left: 20px !important;
    }

    .pd-sm-25 {
        padding: 25px;
    }

    .pd-sm-25-f {
        padding: 25px !important;
    }

    .pd-sm-y-25 {
        padding-top: 25px;
        padding-bottom: 25px;
    }

    .pd-sm-y-25-f {
        padding-top: 25px !important;
        padding-bottom: 25px !important;
    }

    .pd-sm-x-25 {
        padding-left: 25px;
        padding-right: 25px;
    }

    .pd-sm-x-25-f {
        padding-left: 25px !important;
        padding-right: 25px !important;
    }

    .pd-sm-t-25 {
        padding-top: 25px;
    }

    .pd-sm-r-25 {
        padding-right: 25px;
    }

    .pd-sm-b-25 {
        padding-bottom: 25px;
    }

    .pd-sm-l-25 {
        padding-left: 25px;
    }

    .pd-sm-t-25-f {
        padding-top: 25px !important;
    }

    .pd-sm-r-25-f {
        padding-right: 25px !important;
    }

    .pd-sm-b-25-f {
        padding-bottom: 25px !important;
    }

    .pd-sm-l-25-f {
        padding-left: 25px !important;
    }

    .pd-sm-30 {
        padding: 30px;
    }

    .pd-sm-30-f {
        padding: 30px !important;
    }

    .pd-sm-y-30 {
        padding-top: 30px;
        padding-bottom: 30px;
    }

    .pd-sm-y-30-f {
        padding-top: 30px !important;
        padding-bottom: 30px !important;
    }

    .pd-sm-x-30 {
        padding-left: 30px;
        padding-right: 30px;
    }

    .pd-sm-x-30-f {
        padding-left: 30px !important;
        padding-right: 30px !important;
    }

    .pd-sm-t-30 {
        padding-top: 30px;
    }

    .pd-sm-r-30 {
        padding-right: 30px;
    }

    .pd-sm-b-30 {
        padding-bottom: 30px;
    }

    .pd-sm-l-30 {
        padding-left: 30px;
    }

    .pd-sm-t-30-f {
        padding-top: 30px !important;
    }

    .pd-sm-r-30-f {
        padding-right: 30px !important;
    }

    .pd-sm-b-30-f {
        padding-bottom: 30px !important;
    }

    .pd-sm-l-30-f {
        padding-left: 30px !important;
    }

    .pd-sm-35 {
        padding: 35px;
    }

    .pd-sm-35-f {
        padding: 35px !important;
    }

    .pd-sm-y-35 {
        padding-top: 35px;
        padding-bottom: 35px;
    }

    .pd-sm-y-35-f {
        padding-top: 35px !important;
        padding-bottom: 35px !important;
    }

    .pd-sm-x-35 {
        padding-left: 35px;
        padding-right: 35px;
    }

    .pd-sm-x-35-f {
        padding-left: 35px !important;
        padding-right: 35px !important;
    }

    .pd-sm-t-35 {
        padding-top: 35px;
    }

    .pd-sm-r-35 {
        padding-right: 35px;
    }

    .pd-sm-b-35 {
        padding-bottom: 35px;
    }

    .pd-sm-l-35 {
        padding-left: 35px;
    }

    .pd-sm-t-35-f {
        padding-top: 35px !important;
    }

    .pd-sm-r-35-f {
        padding-right: 35px !important;
    }

    .pd-sm-b-35-f {
        padding-bottom: 35px !important;
    }

    .pd-sm-l-35-f {
        padding-left: 35px !important;
    }

    .pd-sm-40 {
        padding: 40px;
    }

    .pd-sm-40-f {
        padding: 40px !important;
    }

    .pd-sm-y-40 {
        padding-top: 40px;
        padding-bottom: 40px;
    }

    .pd-sm-y-40-f {
        padding-top: 40px !important;
        padding-bottom: 40px !important;
    }

    .pd-sm-x-40 {
        padding-left: 40px;
        padding-right: 40px;
    }

    .pd-sm-x-40-f {
        padding-left: 40px !important;
        padding-right: 40px !important;
    }

    .pd-sm-t-40 {
        padding-top: 40px;
    }

    .pd-sm-r-40 {
        padding-right: 40px;
    }

    .pd-sm-b-40 {
        padding-bottom: 40px;
    }

    .pd-sm-l-40 {
        padding-left: 40px;
    }

    .pd-sm-t-40-f {
        padding-top: 40px !important;
    }

    .pd-sm-r-40-f {
        padding-right: 40px !important;
    }

    .pd-sm-b-40-f {
        padding-bottom: 40px !important;
    }

    .pd-sm-l-40-f {
        padding-left: 40px !important;
    }

    .pd-sm-45 {
        padding: 45px;
    }

    .pd-sm-45-f {
        padding: 45px !important;
    }

    .pd-sm-y-45 {
        padding-top: 45px;
        padding-bottom: 45px;
    }

    .pd-sm-y-45-f {
        padding-top: 45px !important;
        padding-bottom: 45px !important;
    }

    .pd-sm-x-45 {
        padding-left: 45px;
        padding-right: 45px;
    }

    .pd-sm-x-45-f {
        padding-left: 45px !important;
        padding-right: 45px !important;
    }

    .pd-sm-t-45 {
        padding-top: 45px;
    }

    .pd-sm-r-45 {
        padding-right: 45px;
    }

    .pd-sm-b-45 {
        padding-bottom: 45px;
    }

    .pd-sm-l-45 {
        padding-left: 45px;
    }

    .pd-sm-t-45-f {
        padding-top: 45px !important;
    }

    .pd-sm-r-45-f {
        padding-right: 45px !important;
    }

    .pd-sm-b-45-f {
        padding-bottom: 45px !important;
    }

    .pd-sm-l-45-f {
        padding-left: 45px !important;
    }

    .pd-sm-50 {
        padding: 50px;
    }

    .pd-sm-50-f {
        padding: 50px !important;
    }

    .pd-sm-y-50 {
        padding-top: 50px;
        padding-bottom: 50px;
    }

    .pd-sm-y-50-f {
        padding-top: 50px !important;
        padding-bottom: 50px !important;
    }

    .pd-sm-x-50 {
        padding-left: 50px;
        padding-right: 50px;
    }

    .pd-sm-x-50-f {
        padding-left: 50px !important;
        padding-right: 50px !important;
    }

    .pd-sm-t-50 {
        padding-top: 50px;
    }

    .pd-sm-r-50 {
        padding-right: 50px;
    }

    .pd-sm-b-50 {
        padding-bottom: 50px;
    }

    .pd-sm-l-50 {
        padding-left: 50px;
    }

    .pd-sm-t-50-f {
        padding-top: 50px !important;
    }

    .pd-sm-r-50-f {
        padding-right: 50px !important;
    }

    .pd-sm-b-50-f {
        padding-bottom: 50px !important;
    }

    .pd-sm-l-50-f {
        padding-left: 50px !important;
    }

    .pd-sm-55 {
        padding: 55px;
    }

    .pd-sm-55-f {
        padding: 55px !important;
    }

    .pd-sm-y-55 {
        padding-top: 55px;
        padding-bottom: 55px;
    }

    .pd-sm-y-55-f {
        padding-top: 55px !important;
        padding-bottom: 55px !important;
    }

    .pd-sm-x-55 {
        padding-left: 55px;
        padding-right: 55px;
    }

    .pd-sm-x-55-f {
        padding-left: 55px !important;
        padding-right: 55px !important;
    }

    .pd-sm-t-55 {
        padding-top: 55px;
    }

    .pd-sm-r-55 {
        padding-right: 55px;
    }

    .pd-sm-b-55 {
        padding-bottom: 55px;
    }

    .pd-sm-l-55 {
        padding-left: 55px;
    }

    .pd-sm-t-55-f {
        padding-top: 55px !important;
    }

    .pd-sm-r-55-f {
        padding-right: 55px !important;
    }

    .pd-sm-b-55-f {
        padding-bottom: 55px !important;
    }

    .pd-sm-l-55-f {
        padding-left: 55px !important;
    }

    .pd-sm-60 {
        padding: 60px;
    }

    .pd-sm-60-f {
        padding: 60px !important;
    }

    .pd-sm-y-60 {
        padding-top: 60px;
        padding-bottom: 60px;
    }

    .pd-sm-y-60-f {
        padding-top: 60px !important;
        padding-bottom: 60px !important;
    }

    .pd-sm-x-60 {
        padding-left: 60px;
        padding-right: 60px;
    }

    .pd-sm-x-60-f {
        padding-left: 60px !important;
        padding-right: 60px !important;
    }

    .pd-sm-t-60 {
        padding-top: 60px;
    }

    .pd-sm-r-60 {
        padding-right: 60px;
    }

    .pd-sm-b-60 {
        padding-bottom: 60px;
    }

    .pd-sm-l-60 {
        padding-left: 60px;
    }

    .pd-sm-t-60-f {
        padding-top: 60px !important;
    }

    .pd-sm-r-60-f {
        padding-right: 60px !important;
    }

    .pd-sm-b-60-f {
        padding-bottom: 60px !important;
    }

    .pd-sm-l-60-f {
        padding-left: 60px !important;
    }

    .pd-sm-65 {
        padding: 65px;
    }

    .pd-sm-65-f {
        padding: 65px !important;
    }

    .pd-sm-y-65 {
        padding-top: 65px;
        padding-bottom: 65px;
    }

    .pd-sm-y-65-f {
        padding-top: 65px !important;
        padding-bottom: 65px !important;
    }

    .pd-sm-x-65 {
        padding-left: 65px;
        padding-right: 65px;
    }

    .pd-sm-x-65-f {
        padding-left: 65px !important;
        padding-right: 65px !important;
    }

    .pd-sm-t-65 {
        padding-top: 65px;
    }

    .pd-sm-r-65 {
        padding-right: 65px;
    }

    .pd-sm-b-65 {
        padding-bottom: 65px;
    }

    .pd-sm-l-65 {
        padding-left: 65px;
    }

    .pd-sm-t-65-f {
        padding-top: 65px !important;
    }

    .pd-sm-r-65-f {
        padding-right: 65px !important;
    }

    .pd-sm-b-65-f {
        padding-bottom: 65px !important;
    }

    .pd-sm-l-65-f {
        padding-left: 65px !important;
    }

    .pd-sm-70 {
        padding: 70px;
    }

    .pd-sm-70-f {
        padding: 70px !important;
    }

    .pd-sm-y-70 {
        padding-top: 70px;
        padding-bottom: 70px;
    }

    .pd-sm-y-70-f {
        padding-top: 70px !important;
        padding-bottom: 70px !important;
    }

    .pd-sm-x-70 {
        padding-left: 70px;
        padding-right: 70px;
    }

    .pd-sm-x-70-f {
        padding-left: 70px !important;
        padding-right: 70px !important;
    }

    .pd-sm-t-70 {
        padding-top: 70px;
    }

    .pd-sm-r-70 {
        padding-right: 70px;
    }

    .pd-sm-b-70 {
        padding-bottom: 70px;
    }

    .pd-sm-l-70 {
        padding-left: 70px;
    }

    .pd-sm-t-70-f {
        padding-top: 70px !important;
    }

    .pd-sm-r-70-f {
        padding-right: 70px !important;
    }

    .pd-sm-b-70-f {
        padding-bottom: 70px !important;
    }

    .pd-sm-l-70-f {
        padding-left: 70px !important;
    }

    .pd-sm-75 {
        padding: 75px;
    }

    .pd-sm-75-f {
        padding: 75px !important;
    }

    .pd-sm-y-75 {
        padding-top: 75px;
        padding-bottom: 75px;
    }

    .pd-sm-y-75-f {
        padding-top: 75px !important;
        padding-bottom: 75px !important;
    }

    .pd-sm-x-75 {
        padding-left: 75px;
        padding-right: 75px;
    }

    .pd-sm-x-75-f {
        padding-left: 75px !important;
        padding-right: 75px !important;
    }

    .pd-sm-t-75 {
        padding-top: 75px;
    }

    .pd-sm-r-75 {
        padding-right: 75px;
    }

    .pd-sm-b-75 {
        padding-bottom: 75px;
    }

    .pd-sm-l-75 {
        padding-left: 75px;
    }

    .pd-sm-t-75-f {
        padding-top: 75px !important;
    }

    .pd-sm-r-75-f {
        padding-right: 75px !important;
    }

    .pd-sm-b-75-f {
        padding-bottom: 75px !important;
    }

    .pd-sm-l-75-f {
        padding-left: 75px !important;
    }

    .pd-sm-80 {
        padding: 80px;
    }

    .pd-sm-80-f {
        padding: 80px !important;
    }

    .pd-sm-y-80 {
        padding-top: 80px;
        padding-bottom: 80px;
    }

    .pd-sm-y-80-f {
        padding-top: 80px !important;
        padding-bottom: 80px !important;
    }

    .pd-sm-x-80 {
        padding-left: 80px;
        padding-right: 80px;
    }

    .pd-sm-x-80-f {
        padding-left: 80px !important;
        padding-right: 80px !important;
    }

    .pd-sm-t-80 {
        padding-top: 80px;
    }

    .pd-sm-r-80 {
        padding-right: 80px;
    }

    .pd-sm-b-80 {
        padding-bottom: 80px;
    }

    .pd-sm-l-80 {
        padding-left: 80px;
    }

    .pd-sm-t-80-f {
        padding-top: 80px !important;
    }

    .pd-sm-r-80-f {
        padding-right: 80px !important;
    }

    .pd-sm-b-80-f {
        padding-bottom: 80px !important;
    }

    .pd-sm-l-80-f {
        padding-left: 80px !important;
    }

    .pd-sm-85 {
        padding: 85px;
    }

    .pd-sm-85-f {
        padding: 85px !important;
    }

    .pd-sm-y-85 {
        padding-top: 85px;
        padding-bottom: 85px;
    }

    .pd-sm-y-85-f {
        padding-top: 85px !important;
        padding-bottom: 85px !important;
    }

    .pd-sm-x-85 {
        padding-left: 85px;
        padding-right: 85px;
    }

    .pd-sm-x-85-f {
        padding-left: 85px !important;
        padding-right: 85px !important;
    }

    .pd-sm-t-85 {
        padding-top: 85px;
    }

    .pd-sm-r-85 {
        padding-right: 85px;
    }

    .pd-sm-b-85 {
        padding-bottom: 85px;
    }

    .pd-sm-l-85 {
        padding-left: 85px;
    }

    .pd-sm-t-85-f {
        padding-top: 85px !important;
    }

    .pd-sm-r-85-f {
        padding-right: 85px !important;
    }

    .pd-sm-b-85-f {
        padding-bottom: 85px !important;
    }

    .pd-sm-l-85-f {
        padding-left: 85px !important;
    }

    .pd-sm-90 {
        padding: 90px;
    }

    .pd-sm-90-f {
        padding: 90px !important;
    }

    .pd-sm-y-90 {
        padding-top: 90px;
        padding-bottom: 90px;
    }

    .pd-sm-y-90-f {
        padding-top: 90px !important;
        padding-bottom: 90px !important;
    }

    .pd-sm-x-90 {
        padding-left: 90px;
        padding-right: 90px;
    }

    .pd-sm-x-90-f {
        padding-left: 90px !important;
        padding-right: 90px !important;
    }

    .pd-sm-t-90 {
        padding-top: 90px;
    }

    .pd-sm-r-90 {
        padding-right: 90px;
    }

    .pd-sm-b-90 {
        padding-bottom: 90px;
    }

    .pd-sm-l-90 {
        padding-left: 90px;
    }

    .pd-sm-t-90-f {
        padding-top: 90px !important;
    }

    .pd-sm-r-90-f {
        padding-right: 90px !important;
    }

    .pd-sm-b-90-f {
        padding-bottom: 90px !important;
    }

    .pd-sm-l-90-f {
        padding-left: 90px !important;
    }

    .pd-sm-95 {
        padding: 95px;
    }

    .pd-sm-95-f {
        padding: 95px !important;
    }

    .pd-sm-y-95 {
        padding-top: 95px;
        padding-bottom: 95px;
    }

    .pd-sm-y-95-f {
        padding-top: 95px !important;
        padding-bottom: 95px !important;
    }

    .pd-sm-x-95 {
        padding-left: 95px;
        padding-right: 95px;
    }

    .pd-sm-x-95-f {
        padding-left: 95px !important;
        padding-right: 95px !important;
    }

    .pd-sm-t-95 {
        padding-top: 95px;
    }

    .pd-sm-r-95 {
        padding-right: 95px;
    }

    .pd-sm-b-95 {
        padding-bottom: 95px;
    }

    .pd-sm-l-95 {
        padding-left: 95px;
    }

    .pd-sm-t-95-f {
        padding-top: 95px !important;
    }

    .pd-sm-r-95-f {
        padding-right: 95px !important;
    }

    .pd-sm-b-95-f {
        padding-bottom: 95px !important;
    }

    .pd-sm-l-95-f {
        padding-left: 95px !important;
    }

    .pd-sm-100 {
        padding: 100px;
    }

    .pd-sm-100-f {
        padding: 100px !important;
    }

    .pd-sm-y-100 {
        padding-top: 100px;
        padding-bottom: 100px;
    }

    .pd-sm-y-100-f {
        padding-top: 100px !important;
        padding-bottom: 100px !important;
    }

    .pd-sm-x-100 {
        padding-left: 100px;
        padding-right: 100px;
    }

    .pd-sm-x-100-f {
        padding-left: 100px !important;
        padding-right: 100px !important;
    }

    .pd-sm-t-100 {
        padding-top: 100px;
    }

    .pd-sm-r-100 {
        padding-right: 100px;
    }

    .pd-sm-b-100 {
        padding-bottom: 100px;
    }

    .pd-sm-l-100 {
        padding-left: 100px;
    }

    .pd-sm-t-100-f {
        padding-top: 100px !important;
    }

    .pd-sm-r-100-f {
        padding-right: 100px !important;
    }

    .pd-sm-b-100-f {
        padding-bottom: 100px !important;
    }

    .pd-sm-l-100-f {
        padding-left: 100px !important;
    }

    .pd-sm-110 {
        padding: 110px;
    }

    .pd-sm-110-f {
        padding: 110px !important;
    }

    .pd-sm-y-110 {
        padding-top: 110px;
        padding-bottom: 110px;
    }

    .pd-sm-y-110-f {
        padding-top: 110px !important;
        padding-bottom: 110px !important;
    }

    .pd-sm-x-110 {
        padding-left: 110px;
        padding-right: 110px;
    }

    .pd-sm-x-110-f {
        padding-left: 110px !important;
        padding-right: 110px !important;
    }

    .pd-sm-t-110 {
        padding-top: 110px;
    }

    .pd-sm-r-110 {
        padding-right: 110px;
    }

    .pd-sm-b-110 {
        padding-bottom: 110px;
    }

    .pd-sm-l-110 {
        padding-left: 110px;
    }

    .pd-sm-t-110-f {
        padding-top: 110px !important;
    }

    .pd-sm-r-110-f {
        padding-right: 110px !important;
    }

    .pd-sm-b-110-f {
        padding-bottom: 110px !important;
    }

    .pd-sm-l-110-f {
        padding-left: 110px !important;
    }

    .pd-sm-120 {
        padding: 120px;
    }

    .pd-sm-120-f {
        padding: 120px !important;
    }

    .pd-sm-y-120 {
        padding-top: 120px;
        padding-bottom: 120px;
    }

    .pd-sm-y-120-f {
        padding-top: 120px !important;
        padding-bottom: 120px !important;
    }

    .pd-sm-x-120 {
        padding-left: 120px;
        padding-right: 120px;
    }

    .pd-sm-x-120-f {
        padding-left: 120px !important;
        padding-right: 120px !important;
    }

    .pd-sm-t-120 {
        padding-top: 120px;
    }

    .pd-sm-r-120 {
        padding-right: 120px;
    }

    .pd-sm-b-120 {
        padding-bottom: 120px;
    }

    .pd-sm-l-120 {
        padding-left: 120px;
    }

    .pd-sm-t-120-f {
        padding-top: 120px !important;
    }

    .pd-sm-r-120-f {
        padding-right: 120px !important;
    }

    .pd-sm-b-120-f {
        padding-bottom: 120px !important;
    }

    .pd-sm-l-120-f {
        padding-left: 120px !important;
    }

    .pd-sm-130 {
        padding: 130px;
    }

    .pd-sm-130-f {
        padding: 130px !important;
    }

    .pd-sm-y-130 {
        padding-top: 130px;
        padding-bottom: 130px;
    }

    .pd-sm-y-130-f {
        padding-top: 130px !important;
        padding-bottom: 130px !important;
    }

    .pd-sm-x-130 {
        padding-left: 130px;
        padding-right: 130px;
    }

    .pd-sm-x-130-f {
        padding-left: 130px !important;
        padding-right: 130px !important;
    }

    .pd-sm-t-130 {
        padding-top: 130px;
    }

    .pd-sm-r-130 {
        padding-right: 130px;
    }

    .pd-sm-b-130 {
        padding-bottom: 130px;
    }

    .pd-sm-l-130 {
        padding-left: 130px;
    }

    .pd-sm-t-130-f {
        padding-top: 130px !important;
    }

    .pd-sm-r-130-f {
        padding-right: 130px !important;
    }

    .pd-sm-b-130-f {
        padding-bottom: 130px !important;
    }

    .pd-sm-l-130-f {
        padding-left: 130px !important;
    }

    .pd-sm-140 {
        padding: 140px;
    }

    .pd-sm-140-f {
        padding: 140px !important;
    }

    .pd-sm-y-140 {
        padding-top: 140px;
        padding-bottom: 140px;
    }

    .pd-sm-y-140-f {
        padding-top: 140px !important;
        padding-bottom: 140px !important;
    }

    .pd-sm-x-140 {
        padding-left: 140px;
        padding-right: 140px;
    }

    .pd-sm-x-140-f {
        padding-left: 140px !important;
        padding-right: 140px !important;
    }

    .pd-sm-t-140 {
        padding-top: 140px;
    }

    .pd-sm-r-140 {
        padding-right: 140px;
    }

    .pd-sm-b-140 {
        padding-bottom: 140px;
    }

    .pd-sm-l-140 {
        padding-left: 140px;
    }

    .pd-sm-t-140-f {
        padding-top: 140px !important;
    }

    .pd-sm-r-140-f {
        padding-right: 140px !important;
    }

    .pd-sm-b-140-f {
        padding-bottom: 140px !important;
    }

    .pd-sm-l-140-f {
        padding-left: 140px !important;
    }

    .pd-sm-150 {
        padding: 150px;
    }

    .pd-sm-150-f {
        padding: 150px !important;
    }

    .pd-sm-y-150 {
        padding-top: 150px;
        padding-bottom: 150px;
    }

    .pd-sm-y-150-f {
        padding-top: 150px !important;
        padding-bottom: 150px !important;
    }

    .pd-sm-x-150 {
        padding-left: 150px;
        padding-right: 150px;
    }

    .pd-sm-x-150-f {
        padding-left: 150px !important;
        padding-right: 150px !important;
    }

    .pd-sm-t-150 {
        padding-top: 150px;
    }

    .pd-sm-r-150 {
        padding-right: 150px;
    }

    .pd-sm-b-150 {
        padding-bottom: 150px;
    }

    .pd-sm-l-150 {
        padding-left: 150px;
    }

    .pd-sm-t-150-f {
        padding-top: 150px !important;
    }

    .pd-sm-r-150-f {
        padding-right: 150px !important;
    }

    .pd-sm-b-150-f {
        padding-bottom: 150px !important;
    }

    .pd-sm-l-150-f {
        padding-left: 150px !important;
    }

    .pd-sm-160 {
        padding: 160px;
    }

    .pd-sm-160-f {
        padding: 160px !important;
    }

    .pd-sm-y-160 {
        padding-top: 160px;
        padding-bottom: 160px;
    }

    .pd-sm-y-160-f {
        padding-top: 160px !important;
        padding-bottom: 160px !important;
    }

    .pd-sm-x-160 {
        padding-left: 160px;
        padding-right: 160px;
    }

    .pd-sm-x-160-f {
        padding-left: 160px !important;
        padding-right: 160px !important;
    }

    .pd-sm-t-160 {
        padding-top: 160px;
    }

    .pd-sm-r-160 {
        padding-right: 160px;
    }

    .pd-sm-b-160 {
        padding-bottom: 160px;
    }

    .pd-sm-l-160 {
        padding-left: 160px;
    }

    .pd-sm-t-160-f {
        padding-top: 160px !important;
    }

    .pd-sm-r-160-f {
        padding-right: 160px !important;
    }

    .pd-sm-b-160-f {
        padding-bottom: 160px !important;
    }

    .pd-sm-l-160-f {
        padding-left: 160px !important;
    }

    .pd-sm-170 {
        padding: 170px;
    }

    .pd-sm-170-f {
        padding: 170px !important;
    }

    .pd-sm-y-170 {
        padding-top: 170px;
        padding-bottom: 170px;
    }

    .pd-sm-y-170-f {
        padding-top: 170px !important;
        padding-bottom: 170px !important;
    }

    .pd-sm-x-170 {
        padding-left: 170px;
        padding-right: 170px;
    }

    .pd-sm-x-170-f {
        padding-left: 170px !important;
        padding-right: 170px !important;
    }

    .pd-sm-t-170 {
        padding-top: 170px;
    }

    .pd-sm-r-170 {
        padding-right: 170px;
    }

    .pd-sm-b-170 {
        padding-bottom: 170px;
    }

    .pd-sm-l-170 {
        padding-left: 170px;
    }

    .pd-sm-t-170-f {
        padding-top: 170px !important;
    }

    .pd-sm-r-170-f {
        padding-right: 170px !important;
    }

    .pd-sm-b-170-f {
        padding-bottom: 170px !important;
    }

    .pd-sm-l-170-f {
        padding-left: 170px !important;
    }

    .pd-sm-180 {
        padding: 180px;
    }

    .pd-sm-180-f {
        padding: 180px !important;
    }

    .pd-sm-y-180 {
        padding-top: 180px;
        padding-bottom: 180px;
    }

    .pd-sm-y-180-f {
        padding-top: 180px !important;
        padding-bottom: 180px !important;
    }

    .pd-sm-x-180 {
        padding-left: 180px;
        padding-right: 180px;
    }

    .pd-sm-x-180-f {
        padding-left: 180px !important;
        padding-right: 180px !important;
    }

    .pd-sm-t-180 {
        padding-top: 180px;
    }

    .pd-sm-r-180 {
        padding-right: 180px;
    }

    .pd-sm-b-180 {
        padding-bottom: 180px;
    }

    .pd-sm-l-180 {
        padding-left: 180px;
    }

    .pd-sm-t-180-f {
        padding-top: 180px !important;
    }

    .pd-sm-r-180-f {
        padding-right: 180px !important;
    }

    .pd-sm-b-180-f {
        padding-bottom: 180px !important;
    }

    .pd-sm-l-180-f {
        padding-left: 180px !important;
    }

    .pd-sm-190 {
        padding: 190px;
    }

    .pd-sm-190-f {
        padding: 190px !important;
    }

    .pd-sm-y-190 {
        padding-top: 190px;
        padding-bottom: 190px;
    }

    .pd-sm-y-190-f {
        padding-top: 190px !important;
        padding-bottom: 190px !important;
    }

    .pd-sm-x-190 {
        padding-left: 190px;
        padding-right: 190px;
    }

    .pd-sm-x-190-f {
        padding-left: 190px !important;
        padding-right: 190px !important;
    }

    .pd-sm-t-190 {
        padding-top: 190px;
    }

    .pd-sm-r-190 {
        padding-right: 190px;
    }

    .pd-sm-b-190 {
        padding-bottom: 190px;
    }

    .pd-sm-l-190 {
        padding-left: 190px;
    }

    .pd-sm-t-190-f {
        padding-top: 190px !important;
    }

    .pd-sm-r-190-f {
        padding-right: 190px !important;
    }

    .pd-sm-b-190-f {
        padding-bottom: 190px !important;
    }

    .pd-sm-l-190-f {
        padding-left: 190px !important;
    }

    .pd-sm-200 {
        padding: 200px;
    }

    .pd-sm-200-f {
        padding: 200px !important;
    }

    .pd-sm-y-200 {
        padding-top: 200px;
        padding-bottom: 200px;
    }

    .pd-sm-y-200-f {
        padding-top: 200px !important;
        padding-bottom: 200px !important;
    }

    .pd-sm-x-200 {
        padding-left: 200px;
        padding-right: 200px;
    }

    .pd-sm-x-200-f {
        padding-left: 200px !important;
        padding-right: 200px !important;
    }

    .pd-sm-t-200 {
        padding-top: 200px;
    }

    .pd-sm-r-200 {
        padding-right: 200px;
    }

    .pd-sm-b-200 {
        padding-bottom: 200px;
    }

    .pd-sm-l-200 {
        padding-left: 200px;
    }

    .pd-sm-t-200-f {
        padding-top: 200px !important;
    }

    .pd-sm-r-200-f {
        padding-right: 200px !important;
    }

    .pd-sm-b-200-f {
        padding-bottom: 200px !important;
    }

    .pd-sm-l-200-f {
        padding-left: 200px !important;
    }
}

@media (min-width: 768px) {
    .pd-md-0 {
        padding: 0px;
    }

    .pd-md-0-f {
        padding: 0px !important;
    }

    .pd-md-y-0 {
        padding-top: 0px;
        padding-bottom: 0px;
    }

    .pd-md-y-0-f {
        padding-top: 0px !important;
        padding-bottom: 0px !important;
    }

    .pd-md-x-0 {
        padding-left: 0px;
        padding-right: 0px;
    }

    .pd-md-x-0-f {
        padding-left: 0px !important;
        padding-right: 0px !important;
    }

    .pd-md-t-0 {
        padding-top: 0px;
    }

    .pd-md-r-0 {
        padding-right: 0px;
    }

    .pd-md-b-0 {
        padding-bottom: 0px;
    }

    .pd-md-l-0 {
        padding-left: 0px;
    }

    .pd-md-t-0-f {
        padding-top: 0px !important;
    }

    .pd-md-r-0-f {
        padding-right: 0px !important;
    }

    .pd-md-b-0-f {
        padding-bottom: 0px !important;
    }

    .pd-md-l-0-f {
        padding-left: 0px !important;
    }

    .pd-md-1 {
        padding: 1px;
    }

    .pd-md-1-f {
        padding: 1px !important;
    }

    .pd-md-y-1 {
        padding-top: 1px;
        padding-bottom: 1px;
    }

    .pd-md-y-1-f {
        padding-top: 1px !important;
        padding-bottom: 1px !important;
    }

    .pd-md-x-1 {
        padding-left: 1px;
        padding-right: 1px;
    }

    .pd-md-x-1-f {
        padding-left: 1px !important;
        padding-right: 1px !important;
    }

    .pd-md-t-1 {
        padding-top: 1px;
    }

    .pd-md-r-1 {
        padding-right: 1px;
    }

    .pd-md-b-1 {
        padding-bottom: 1px;
    }

    .pd-md-l-1 {
        padding-left: 1px;
    }

    .pd-md-t-1-f {
        padding-top: 1px !important;
    }

    .pd-md-r-1-f {
        padding-right: 1px !important;
    }

    .pd-md-b-1-f {
        padding-bottom: 1px !important;
    }

    .pd-md-l-1-f {
        padding-left: 1px !important;
    }

    .pd-md-2 {
        padding: 2px;
    }

    .pd-md-2-f {
        padding: 2px !important;
    }

    .pd-md-y-2 {
        padding-top: 2px;
        padding-bottom: 2px;
    }

    .pd-md-y-2-f {
        padding-top: 2px !important;
        padding-bottom: 2px !important;
    }

    .pd-md-x-2 {
        padding-left: 2px;
        padding-right: 2px;
    }

    .pd-md-x-2-f {
        padding-left: 2px !important;
        padding-right: 2px !important;
    }

    .pd-md-t-2 {
        padding-top: 2px;
    }

    .pd-md-r-2 {
        padding-right: 2px;
    }

    .pd-md-b-2 {
        padding-bottom: 2px;
    }

    .pd-md-l-2 {
        padding-left: 2px;
    }

    .pd-md-t-2-f {
        padding-top: 2px !important;
    }

    .pd-md-r-2-f {
        padding-right: 2px !important;
    }

    .pd-md-b-2-f {
        padding-bottom: 2px !important;
    }

    .pd-md-l-2-f {
        padding-left: 2px !important;
    }

    .pd-md-3 {
        padding: 3px;
    }

    .pd-md-3-f {
        padding: 3px !important;
    }

    .pd-md-y-3 {
        padding-top: 3px;
        padding-bottom: 3px;
    }

    .pd-md-y-3-f {
        padding-top: 3px !important;
        padding-bottom: 3px !important;
    }

    .pd-md-x-3 {
        padding-left: 3px;
        padding-right: 3px;
    }

    .pd-md-x-3-f {
        padding-left: 3px !important;
        padding-right: 3px !important;
    }

    .pd-md-t-3 {
        padding-top: 3px;
    }

    .pd-md-r-3 {
        padding-right: 3px;
    }

    .pd-md-b-3 {
        padding-bottom: 3px;
    }

    .pd-md-l-3 {
        padding-left: 3px;
    }

    .pd-md-t-3-f {
        padding-top: 3px !important;
    }

    .pd-md-r-3-f {
        padding-right: 3px !important;
    }

    .pd-md-b-3-f {
        padding-bottom: 3px !important;
    }

    .pd-md-l-3-f {
        padding-left: 3px !important;
    }

    .pd-md-4 {
        padding: 4px;
    }

    .pd-md-4-f {
        padding: 4px !important;
    }

    .pd-md-y-4 {
        padding-top: 4px;
        padding-bottom: 4px;
    }

    .pd-md-y-4-f {
        padding-top: 4px !important;
        padding-bottom: 4px !important;
    }

    .pd-md-x-4 {
        padding-left: 4px;
        padding-right: 4px;
    }

    .pd-md-x-4-f {
        padding-left: 4px !important;
        padding-right: 4px !important;
    }

    .pd-md-t-4 {
        padding-top: 4px;
    }

    .pd-md-r-4 {
        padding-right: 4px;
    }

    .pd-md-b-4 {
        padding-bottom: 4px;
    }

    .pd-md-l-4 {
        padding-left: 4px;
    }

    .pd-md-t-4-f {
        padding-top: 4px !important;
    }

    .pd-md-r-4-f {
        padding-right: 4px !important;
    }

    .pd-md-b-4-f {
        padding-bottom: 4px !important;
    }

    .pd-md-l-4-f {
        padding-left: 4px !important;
    }

    .pd-md-5 {
        padding: 5px;
    }

    .pd-md-5-f {
        padding: 5px !important;
    }

    .pd-md-y-5 {
        padding-top: 5px;
        padding-bottom: 5px;
    }

    .pd-md-y-5-f {
        padding-top: 5px !important;
        padding-bottom: 5px !important;
    }

    .pd-md-x-5 {
        padding-left: 5px;
        padding-right: 5px;
    }

    .pd-md-x-5-f {
        padding-left: 5px !important;
        padding-right: 5px !important;
    }

    .pd-md-t-5 {
        padding-top: 5px;
    }

    .pd-md-r-5 {
        padding-right: 5px;
    }

    .pd-md-b-5 {
        padding-bottom: 5px;
    }

    .pd-md-l-5 {
        padding-left: 5px;
    }

    .pd-md-t-5-f {
        padding-top: 5px !important;
    }

    .pd-md-r-5-f {
        padding-right: 5px !important;
    }

    .pd-md-b-5-f {
        padding-bottom: 5px !important;
    }

    .pd-md-l-5-f {
        padding-left: 5px !important;
    }

    .pd-md-6 {
        padding: 6px;
    }

    .pd-md-6-f {
        padding: 6px !important;
    }

    .pd-md-y-6 {
        padding-top: 6px;
        padding-bottom: 6px;
    }

    .pd-md-y-6-f {
        padding-top: 6px !important;
        padding-bottom: 6px !important;
    }

    .pd-md-x-6 {
        padding-left: 6px;
        padding-right: 6px;
    }

    .pd-md-x-6-f {
        padding-left: 6px !important;
        padding-right: 6px !important;
    }

    .pd-md-t-6 {
        padding-top: 6px;
    }

    .pd-md-r-6 {
        padding-right: 6px;
    }

    .pd-md-b-6 {
        padding-bottom: 6px;
    }

    .pd-md-l-6 {
        padding-left: 6px;
    }

    .pd-md-t-6-f {
        padding-top: 6px !important;
    }

    .pd-md-r-6-f {
        padding-right: 6px !important;
    }

    .pd-md-b-6-f {
        padding-bottom: 6px !important;
    }

    .pd-md-l-6-f {
        padding-left: 6px !important;
    }

    .pd-md-7 {
        padding: 7px;
    }

    .pd-md-7-f {
        padding: 7px !important;
    }

    .pd-md-y-7 {
        padding-top: 7px;
        padding-bottom: 7px;
    }

    .pd-md-y-7-f {
        padding-top: 7px !important;
        padding-bottom: 7px !important;
    }

    .pd-md-x-7 {
        padding-left: 7px;
        padding-right: 7px;
    }

    .pd-md-x-7-f {
        padding-left: 7px !important;
        padding-right: 7px !important;
    }

    .pd-md-t-7 {
        padding-top: 7px;
    }

    .pd-md-r-7 {
        padding-right: 7px;
    }

    .pd-md-b-7 {
        padding-bottom: 7px;
    }

    .pd-md-l-7 {
        padding-left: 7px;
    }

    .pd-md-t-7-f {
        padding-top: 7px !important;
    }

    .pd-md-r-7-f {
        padding-right: 7px !important;
    }

    .pd-md-b-7-f {
        padding-bottom: 7px !important;
    }

    .pd-md-l-7-f {
        padding-left: 7px !important;
    }

    .pd-md-8 {
        padding: 8px;
    }

    .pd-md-8-f {
        padding: 8px !important;
    }

    .pd-md-y-8 {
        padding-top: 8px;
        padding-bottom: 8px;
    }

    .pd-md-y-8-f {
        padding-top: 8px !important;
        padding-bottom: 8px !important;
    }

    .pd-md-x-8 {
        padding-left: 8px;
        padding-right: 8px;
    }

    .pd-md-x-8-f {
        padding-left: 8px !important;
        padding-right: 8px !important;
    }

    .pd-md-t-8 {
        padding-top: 8px;
    }

    .pd-md-r-8 {
        padding-right: 8px;
    }

    .pd-md-b-8 {
        padding-bottom: 8px;
    }

    .pd-md-l-8 {
        padding-left: 8px;
    }

    .pd-md-t-8-f {
        padding-top: 8px !important;
    }

    .pd-md-r-8-f {
        padding-right: 8px !important;
    }

    .pd-md-b-8-f {
        padding-bottom: 8px !important;
    }

    .pd-md-l-8-f {
        padding-left: 8px !important;
    }

    .pd-md-9 {
        padding: 9px;
    }

    .pd-md-9-f {
        padding: 9px !important;
    }

    .pd-md-y-9 {
        padding-top: 9px;
        padding-bottom: 9px;
    }

    .pd-md-y-9-f {
        padding-top: 9px !important;
        padding-bottom: 9px !important;
    }

    .pd-md-x-9 {
        padding-left: 9px;
        padding-right: 9px;
    }

    .pd-md-x-9-f {
        padding-left: 9px !important;
        padding-right: 9px !important;
    }

    .pd-md-t-9 {
        padding-top: 9px;
    }

    .pd-md-r-9 {
        padding-right: 9px;
    }

    .pd-md-b-9 {
        padding-bottom: 9px;
    }

    .pd-md-l-9 {
        padding-left: 9px;
    }

    .pd-md-t-9-f {
        padding-top: 9px !important;
    }

    .pd-md-r-9-f {
        padding-right: 9px !important;
    }

    .pd-md-b-9-f {
        padding-bottom: 9px !important;
    }

    .pd-md-l-9-f {
        padding-left: 9px !important;
    }

    .pd-md-10 {
        padding: 10px;
    }

    .pd-md-10-f {
        padding: 10px !important;
    }

    .pd-md-y-10 {
        padding-top: 10px;
        padding-bottom: 10px;
    }

    .pd-md-y-10-f {
        padding-top: 10px !important;
        padding-bottom: 10px !important;
    }

    .pd-md-x-10 {
        padding-left: 10px;
        padding-right: 10px;
    }

    .pd-md-x-10-f {
        padding-left: 10px !important;
        padding-right: 10px !important;
    }

    .pd-md-t-10 {
        padding-top: 10px;
    }

    .pd-md-r-10 {
        padding-right: 10px;
    }

    .pd-md-b-10 {
        padding-bottom: 10px;
    }

    .pd-md-l-10 {
        padding-left: 10px;
    }

    .pd-md-t-10-f {
        padding-top: 10px !important;
    }

    .pd-md-r-10-f {
        padding-right: 10px !important;
    }

    .pd-md-b-10-f {
        padding-bottom: 10px !important;
    }

    .pd-md-l-10-f {
        padding-left: 10px !important;
    }

    .pd-md-15 {
        padding: 15px;
    }

    .pd-md-15-f {
        padding: 15px !important;
    }

    .pd-md-y-15 {
        padding-top: 15px;
        padding-bottom: 15px;
    }

    .pd-md-y-15-f {
        padding-top: 15px !important;
        padding-bottom: 15px !important;
    }

    .pd-md-x-15 {
        padding-left: 15px;
        padding-right: 15px;
    }

    .pd-md-x-15-f {
        padding-left: 15px !important;
        padding-right: 15px !important;
    }

    .pd-md-t-15 {
        padding-top: 15px;
    }

    .pd-md-r-15 {
        padding-right: 15px;
    }

    .pd-md-b-15 {
        padding-bottom: 15px;
    }

    .pd-md-l-15 {
        padding-left: 15px;
    }

    .pd-md-t-15-f {
        padding-top: 15px !important;
    }

    .pd-md-r-15-f {
        padding-right: 15px !important;
    }

    .pd-md-b-15-f {
        padding-bottom: 15px !important;
    }

    .pd-md-l-15-f {
        padding-left: 15px !important;
    }

    .pd-md-20 {
        padding: 20px;
    }

    .pd-md-20-f {
        padding: 20px !important;
    }

    .pd-md-y-20 {
        padding-top: 20px;
        padding-bottom: 20px;
    }

    .pd-md-y-20-f {
        padding-top: 20px !important;
        padding-bottom: 20px !important;
    }

    .pd-md-x-20 {
        padding-left: 20px;
        padding-right: 20px;
    }

    .pd-md-x-20-f {
        padding-left: 20px !important;
        padding-right: 20px !important;
    }

    .pd-md-t-20 {
        padding-top: 20px;
    }

    .pd-md-r-20 {
        padding-right: 20px;
    }

    .pd-md-b-20 {
        padding-bottom: 20px;
    }

    .pd-md-l-20 {
        padding-left: 20px;
    }

    .pd-md-t-20-f {
        padding-top: 20px !important;
    }

    .pd-md-r-20-f {
        padding-right: 20px !important;
    }

    .pd-md-b-20-f {
        padding-bottom: 20px !important;
    }

    .pd-md-l-20-f {
        padding-left: 20px !important;
    }

    .pd-md-25 {
        padding: 25px;
    }

    .pd-md-25-f {
        padding: 25px !important;
    }

    .pd-md-y-25 {
        padding-top: 25px;
        padding-bottom: 25px;
    }

    .pd-md-y-25-f {
        padding-top: 25px !important;
        padding-bottom: 25px !important;
    }

    .pd-md-x-25 {
        padding-left: 25px;
        padding-right: 25px;
    }

    .pd-md-x-25-f {
        padding-left: 25px !important;
        padding-right: 25px !important;
    }

    .pd-md-t-25 {
        padding-top: 25px;
    }

    .pd-md-r-25 {
        padding-right: 25px;
    }

    .pd-md-b-25 {
        padding-bottom: 25px;
    }

    .pd-md-l-25 {
        padding-left: 25px;
    }

    .pd-md-t-25-f {
        padding-top: 25px !important;
    }

    .pd-md-r-25-f {
        padding-right: 25px !important;
    }

    .pd-md-b-25-f {
        padding-bottom: 25px !important;
    }

    .pd-md-l-25-f {
        padding-left: 25px !important;
    }

    .pd-md-30 {
        padding: 30px;
    }

    .pd-md-30-f {
        padding: 30px !important;
    }

    .pd-md-y-30 {
        padding-top: 30px;
        padding-bottom: 30px;
    }

    .pd-md-y-30-f {
        padding-top: 30px !important;
        padding-bottom: 30px !important;
    }

    .pd-md-x-30 {
        padding-left: 30px;
        padding-right: 30px;
    }

    .pd-md-x-30-f {
        padding-left: 30px !important;
        padding-right: 30px !important;
    }

    .pd-md-t-30 {
        padding-top: 30px;
    }

    .pd-md-r-30 {
        padding-right: 30px;
    }

    .pd-md-b-30 {
        padding-bottom: 30px;
    }

    .pd-md-l-30 {
        padding-left: 30px;
    }

    .pd-md-t-30-f {
        padding-top: 30px !important;
    }

    .pd-md-r-30-f {
        padding-right: 30px !important;
    }

    .pd-md-b-30-f {
        padding-bottom: 30px !important;
    }

    .pd-md-l-30-f {
        padding-left: 30px !important;
    }

    .pd-md-35 {
        padding: 35px;
    }

    .pd-md-35-f {
        padding: 35px !important;
    }

    .pd-md-y-35 {
        padding-top: 35px;
        padding-bottom: 35px;
    }

    .pd-md-y-35-f {
        padding-top: 35px !important;
        padding-bottom: 35px !important;
    }

    .pd-md-x-35 {
        padding-left: 35px;
        padding-right: 35px;
    }

    .pd-md-x-35-f {
        padding-left: 35px !important;
        padding-right: 35px !important;
    }

    .pd-md-t-35 {
        padding-top: 35px;
    }

    .pd-md-r-35 {
        padding-right: 35px;
    }

    .pd-md-b-35 {
        padding-bottom: 35px;
    }

    .pd-md-l-35 {
        padding-left: 35px;
    }

    .pd-md-t-35-f {
        padding-top: 35px !important;
    }

    .pd-md-r-35-f {
        padding-right: 35px !important;
    }

    .pd-md-b-35-f {
        padding-bottom: 35px !important;
    }

    .pd-md-l-35-f {
        padding-left: 35px !important;
    }

    .pd-md-40 {
        padding: 40px;
    }

    .pd-md-40-f {
        padding: 40px !important;
    }

    .pd-md-y-40 {
        padding-top: 40px;
        padding-bottom: 40px;
    }

    .pd-md-y-40-f {
        padding-top: 40px !important;
        padding-bottom: 40px !important;
    }

    .pd-md-x-40 {
        padding-left: 40px;
        padding-right: 40px;
    }

    .pd-md-x-40-f {
        padding-left: 40px !important;
        padding-right: 40px !important;
    }

    .pd-md-t-40 {
        padding-top: 40px;
    }

    .pd-md-r-40 {
        padding-right: 40px;
    }

    .pd-md-b-40 {
        padding-bottom: 40px;
    }

    .pd-md-l-40 {
        padding-left: 40px;
    }

    .pd-md-t-40-f {
        padding-top: 40px !important;
    }

    .pd-md-r-40-f {
        padding-right: 40px !important;
    }

    .pd-md-b-40-f {
        padding-bottom: 40px !important;
    }

    .pd-md-l-40-f {
        padding-left: 40px !important;
    }

    .pd-md-45 {
        padding: 45px;
    }

    .pd-md-45-f {
        padding: 45px !important;
    }

    .pd-md-y-45 {
        padding-top: 45px;
        padding-bottom: 45px;
    }

    .pd-md-y-45-f {
        padding-top: 45px !important;
        padding-bottom: 45px !important;
    }

    .pd-md-x-45 {
        padding-left: 45px;
        padding-right: 45px;
    }

    .pd-md-x-45-f {
        padding-left: 45px !important;
        padding-right: 45px !important;
    }

    .pd-md-t-45 {
        padding-top: 45px;
    }

    .pd-md-r-45 {
        padding-right: 45px;
    }

    .pd-md-b-45 {
        padding-bottom: 45px;
    }

    .pd-md-l-45 {
        padding-left: 45px;
    }

    .pd-md-t-45-f {
        padding-top: 45px !important;
    }

    .pd-md-r-45-f {
        padding-right: 45px !important;
    }

    .pd-md-b-45-f {
        padding-bottom: 45px !important;
    }

    .pd-md-l-45-f {
        padding-left: 45px !important;
    }

    .pd-md-50 {
        padding: 50px;
    }

    .pd-md-50-f {
        padding: 50px !important;
    }

    .pd-md-y-50 {
        padding-top: 50px;
        padding-bottom: 50px;
    }

    .pd-md-y-50-f {
        padding-top: 50px !important;
        padding-bottom: 50px !important;
    }

    .pd-md-x-50 {
        padding-left: 50px;
        padding-right: 50px;
    }

    .pd-md-x-50-f {
        padding-left: 50px !important;
        padding-right: 50px !important;
    }

    .pd-md-t-50 {
        padding-top: 50px;
    }

    .pd-md-r-50 {
        padding-right: 50px;
    }

    .pd-md-b-50 {
        padding-bottom: 50px;
    }

    .pd-md-l-50 {
        padding-left: 50px;
    }

    .pd-md-t-50-f {
        padding-top: 50px !important;
    }

    .pd-md-r-50-f {
        padding-right: 50px !important;
    }

    .pd-md-b-50-f {
        padding-bottom: 50px !important;
    }

    .pd-md-l-50-f {
        padding-left: 50px !important;
    }

    .pd-md-55 {
        padding: 55px;
    }

    .pd-md-55-f {
        padding: 55px !important;
    }

    .pd-md-y-55 {
        padding-top: 55px;
        padding-bottom: 55px;
    }

    .pd-md-y-55-f {
        padding-top: 55px !important;
        padding-bottom: 55px !important;
    }

    .pd-md-x-55 {
        padding-left: 55px;
        padding-right: 55px;
    }

    .pd-md-x-55-f {
        padding-left: 55px !important;
        padding-right: 55px !important;
    }

    .pd-md-t-55 {
        padding-top: 55px;
    }

    .pd-md-r-55 {
        padding-right: 55px;
    }

    .pd-md-b-55 {
        padding-bottom: 55px;
    }

    .pd-md-l-55 {
        padding-left: 55px;
    }

    .pd-md-t-55-f {
        padding-top: 55px !important;
    }

    .pd-md-r-55-f {
        padding-right: 55px !important;
    }

    .pd-md-b-55-f {
        padding-bottom: 55px !important;
    }

    .pd-md-l-55-f {
        padding-left: 55px !important;
    }

    .pd-md-60 {
        padding: 60px;
    }

    .pd-md-60-f {
        padding: 60px !important;
    }

    .pd-md-y-60 {
        padding-top: 60px;
        padding-bottom: 60px;
    }

    .pd-md-y-60-f {
        padding-top: 60px !important;
        padding-bottom: 60px !important;
    }

    .pd-md-x-60 {
        padding-left: 60px;
        padding-right: 60px;
    }

    .pd-md-x-60-f {
        padding-left: 60px !important;
        padding-right: 60px !important;
    }

    .pd-md-t-60 {
        padding-top: 60px;
    }

    .pd-md-r-60 {
        padding-right: 60px;
    }

    .pd-md-b-60 {
        padding-bottom: 60px;
    }

    .pd-md-l-60 {
        padding-left: 60px;
    }

    .pd-md-t-60-f {
        padding-top: 60px !important;
    }

    .pd-md-r-60-f {
        padding-right: 60px !important;
    }

    .pd-md-b-60-f {
        padding-bottom: 60px !important;
    }

    .pd-md-l-60-f {
        padding-left: 60px !important;
    }

    .pd-md-65 {
        padding: 65px;
    }

    .pd-md-65-f {
        padding: 65px !important;
    }

    .pd-md-y-65 {
        padding-top: 65px;
        padding-bottom: 65px;
    }

    .pd-md-y-65-f {
        padding-top: 65px !important;
        padding-bottom: 65px !important;
    }

    .pd-md-x-65 {
        padding-left: 65px;
        padding-right: 65px;
    }

    .pd-md-x-65-f {
        padding-left: 65px !important;
        padding-right: 65px !important;
    }

    .pd-md-t-65 {
        padding-top: 65px;
    }

    .pd-md-r-65 {
        padding-right: 65px;
    }

    .pd-md-b-65 {
        padding-bottom: 65px;
    }

    .pd-md-l-65 {
        padding-left: 65px;
    }

    .pd-md-t-65-f {
        padding-top: 65px !important;
    }

    .pd-md-r-65-f {
        padding-right: 65px !important;
    }

    .pd-md-b-65-f {
        padding-bottom: 65px !important;
    }

    .pd-md-l-65-f {
        padding-left: 65px !important;
    }

    .pd-md-70 {
        padding: 70px;
    }

    .pd-md-70-f {
        padding: 70px !important;
    }

    .pd-md-y-70 {
        padding-top: 70px;
        padding-bottom: 70px;
    }

    .pd-md-y-70-f {
        padding-top: 70px !important;
        padding-bottom: 70px !important;
    }

    .pd-md-x-70 {
        padding-left: 70px;
        padding-right: 70px;
    }

    .pd-md-x-70-f {
        padding-left: 70px !important;
        padding-right: 70px !important;
    }

    .pd-md-t-70 {
        padding-top: 70px;
    }

    .pd-md-r-70 {
        padding-right: 70px;
    }

    .pd-md-b-70 {
        padding-bottom: 70px;
    }

    .pd-md-l-70 {
        padding-left: 70px;
    }

    .pd-md-t-70-f {
        padding-top: 70px !important;
    }

    .pd-md-r-70-f {
        padding-right: 70px !important;
    }

    .pd-md-b-70-f {
        padding-bottom: 70px !important;
    }

    .pd-md-l-70-f {
        padding-left: 70px !important;
    }

    .pd-md-75 {
        padding: 75px;
    }

    .pd-md-75-f {
        padding: 75px !important;
    }

    .pd-md-y-75 {
        padding-top: 75px;
        padding-bottom: 75px;
    }

    .pd-md-y-75-f {
        padding-top: 75px !important;
        padding-bottom: 75px !important;
    }

    .pd-md-x-75 {
        padding-left: 75px;
        padding-right: 75px;
    }

    .pd-md-x-75-f {
        padding-left: 75px !important;
        padding-right: 75px !important;
    }

    .pd-md-t-75 {
        padding-top: 75px;
    }

    .pd-md-r-75 {
        padding-right: 75px;
    }

    .pd-md-b-75 {
        padding-bottom: 75px;
    }

    .pd-md-l-75 {
        padding-left: 75px;
    }

    .pd-md-t-75-f {
        padding-top: 75px !important;
    }

    .pd-md-r-75-f {
        padding-right: 75px !important;
    }

    .pd-md-b-75-f {
        padding-bottom: 75px !important;
    }

    .pd-md-l-75-f {
        padding-left: 75px !important;
    }

    .pd-md-80 {
        padding: 80px;
    }

    .pd-md-80-f {
        padding: 80px !important;
    }

    .pd-md-y-80 {
        padding-top: 80px;
        padding-bottom: 80px;
    }

    .pd-md-y-80-f {
        padding-top: 80px !important;
        padding-bottom: 80px !important;
    }

    .pd-md-x-80 {
        padding-left: 80px;
        padding-right: 80px;
    }

    .pd-md-x-80-f {
        padding-left: 80px !important;
        padding-right: 80px !important;
    }

    .pd-md-t-80 {
        padding-top: 80px;
    }

    .pd-md-r-80 {
        padding-right: 80px;
    }

    .pd-md-b-80 {
        padding-bottom: 80px;
    }

    .pd-md-l-80 {
        padding-left: 80px;
    }

    .pd-md-t-80-f {
        padding-top: 80px !important;
    }

    .pd-md-r-80-f {
        padding-right: 80px !important;
    }

    .pd-md-b-80-f {
        padding-bottom: 80px !important;
    }

    .pd-md-l-80-f {
        padding-left: 80px !important;
    }

    .pd-md-85 {
        padding: 85px;
    }

    .pd-md-85-f {
        padding: 85px !important;
    }

    .pd-md-y-85 {
        padding-top: 85px;
        padding-bottom: 85px;
    }

    .pd-md-y-85-f {
        padding-top: 85px !important;
        padding-bottom: 85px !important;
    }

    .pd-md-x-85 {
        padding-left: 85px;
        padding-right: 85px;
    }

    .pd-md-x-85-f {
        padding-left: 85px !important;
        padding-right: 85px !important;
    }

    .pd-md-t-85 {
        padding-top: 85px;
    }

    .pd-md-r-85 {
        padding-right: 85px;
    }

    .pd-md-b-85 {
        padding-bottom: 85px;
    }

    .pd-md-l-85 {
        padding-left: 85px;
    }

    .pd-md-t-85-f {
        padding-top: 85px !important;
    }

    .pd-md-r-85-f {
        padding-right: 85px !important;
    }

    .pd-md-b-85-f {
        padding-bottom: 85px !important;
    }

    .pd-md-l-85-f {
        padding-left: 85px !important;
    }

    .pd-md-90 {
        padding: 90px;
    }

    .pd-md-90-f {
        padding: 90px !important;
    }

    .pd-md-y-90 {
        padding-top: 90px;
        padding-bottom: 90px;
    }

    .pd-md-y-90-f {
        padding-top: 90px !important;
        padding-bottom: 90px !important;
    }

    .pd-md-x-90 {
        padding-left: 90px;
        padding-right: 90px;
    }

    .pd-md-x-90-f {
        padding-left: 90px !important;
        padding-right: 90px !important;
    }

    .pd-md-t-90 {
        padding-top: 90px;
    }

    .pd-md-r-90 {
        padding-right: 90px;
    }

    .pd-md-b-90 {
        padding-bottom: 90px;
    }

    .pd-md-l-90 {
        padding-left: 90px;
    }

    .pd-md-t-90-f {
        padding-top: 90px !important;
    }

    .pd-md-r-90-f {
        padding-right: 90px !important;
    }

    .pd-md-b-90-f {
        padding-bottom: 90px !important;
    }

    .pd-md-l-90-f {
        padding-left: 90px !important;
    }

    .pd-md-95 {
        padding: 95px;
    }

    .pd-md-95-f {
        padding: 95px !important;
    }

    .pd-md-y-95 {
        padding-top: 95px;
        padding-bottom: 95px;
    }

    .pd-md-y-95-f {
        padding-top: 95px !important;
        padding-bottom: 95px !important;
    }

    .pd-md-x-95 {
        padding-left: 95px;
        padding-right: 95px;
    }

    .pd-md-x-95-f {
        padding-left: 95px !important;
        padding-right: 95px !important;
    }

    .pd-md-t-95 {
        padding-top: 95px;
    }

    .pd-md-r-95 {
        padding-right: 95px;
    }

    .pd-md-b-95 {
        padding-bottom: 95px;
    }

    .pd-md-l-95 {
        padding-left: 95px;
    }

    .pd-md-t-95-f {
        padding-top: 95px !important;
    }

    .pd-md-r-95-f {
        padding-right: 95px !important;
    }

    .pd-md-b-95-f {
        padding-bottom: 95px !important;
    }

    .pd-md-l-95-f {
        padding-left: 95px !important;
    }

    .pd-md-100 {
        padding: 100px;
    }

    .pd-md-100-f {
        padding: 100px !important;
    }

    .pd-md-y-100 {
        padding-top: 100px;
        padding-bottom: 100px;
    }

    .pd-md-y-100-f {
        padding-top: 100px !important;
        padding-bottom: 100px !important;
    }

    .pd-md-x-100 {
        padding-left: 100px;
        padding-right: 100px;
    }

    .pd-md-x-100-f {
        padding-left: 100px !important;
        padding-right: 100px !important;
    }

    .pd-md-t-100 {
        padding-top: 100px;
    }

    .pd-md-r-100 {
        padding-right: 100px;
    }

    .pd-md-b-100 {
        padding-bottom: 100px;
    }

    .pd-md-l-100 {
        padding-left: 100px;
    }

    .pd-md-t-100-f {
        padding-top: 100px !important;
    }

    .pd-md-r-100-f {
        padding-right: 100px !important;
    }

    .pd-md-b-100-f {
        padding-bottom: 100px !important;
    }

    .pd-md-l-100-f {
        padding-left: 100px !important;
    }

    .pd-md-110 {
        padding: 110px;
    }

    .pd-md-110-f {
        padding: 110px !important;
    }

    .pd-md-y-110 {
        padding-top: 110px;
        padding-bottom: 110px;
    }

    .pd-md-y-110-f {
        padding-top: 110px !important;
        padding-bottom: 110px !important;
    }

    .pd-md-x-110 {
        padding-left: 110px;
        padding-right: 110px;
    }

    .pd-md-x-110-f {
        padding-left: 110px !important;
        padding-right: 110px !important;
    }

    .pd-md-t-110 {
        padding-top: 110px;
    }

    .pd-md-r-110 {
        padding-right: 110px;
    }

    .pd-md-b-110 {
        padding-bottom: 110px;
    }

    .pd-md-l-110 {
        padding-left: 110px;
    }

    .pd-md-t-110-f {
        padding-top: 110px !important;
    }

    .pd-md-r-110-f {
        padding-right: 110px !important;
    }

    .pd-md-b-110-f {
        padding-bottom: 110px !important;
    }

    .pd-md-l-110-f {
        padding-left: 110px !important;
    }

    .pd-md-120 {
        padding: 120px;
    }

    .pd-md-120-f {
        padding: 120px !important;
    }

    .pd-md-y-120 {
        padding-top: 120px;
        padding-bottom: 120px;
    }

    .pd-md-y-120-f {
        padding-top: 120px !important;
        padding-bottom: 120px !important;
    }

    .pd-md-x-120 {
        padding-left: 120px;
        padding-right: 120px;
    }

    .pd-md-x-120-f {
        padding-left: 120px !important;
        padding-right: 120px !important;
    }

    .pd-md-t-120 {
        padding-top: 120px;
    }

    .pd-md-r-120 {
        padding-right: 120px;
    }

    .pd-md-b-120 {
        padding-bottom: 120px;
    }

    .pd-md-l-120 {
        padding-left: 120px;
    }

    .pd-md-t-120-f {
        padding-top: 120px !important;
    }

    .pd-md-r-120-f {
        padding-right: 120px !important;
    }

    .pd-md-b-120-f {
        padding-bottom: 120px !important;
    }

    .pd-md-l-120-f {
        padding-left: 120px !important;
    }

    .pd-md-130 {
        padding: 130px;
    }

    .pd-md-130-f {
        padding: 130px !important;
    }

    .pd-md-y-130 {
        padding-top: 130px;
        padding-bottom: 130px;
    }

    .pd-md-y-130-f {
        padding-top: 130px !important;
        padding-bottom: 130px !important;
    }

    .pd-md-x-130 {
        padding-left: 130px;
        padding-right: 130px;
    }

    .pd-md-x-130-f {
        padding-left: 130px !important;
        padding-right: 130px !important;
    }

    .pd-md-t-130 {
        padding-top: 130px;
    }

    .pd-md-r-130 {
        padding-right: 130px;
    }

    .pd-md-b-130 {
        padding-bottom: 130px;
    }

    .pd-md-l-130 {
        padding-left: 130px;
    }

    .pd-md-t-130-f {
        padding-top: 130px !important;
    }

    .pd-md-r-130-f {
        padding-right: 130px !important;
    }

    .pd-md-b-130-f {
        padding-bottom: 130px !important;
    }

    .pd-md-l-130-f {
        padding-left: 130px !important;
    }

    .pd-md-140 {
        padding: 140px;
    }

    .pd-md-140-f {
        padding: 140px !important;
    }

    .pd-md-y-140 {
        padding-top: 140px;
        padding-bottom: 140px;
    }

    .pd-md-y-140-f {
        padding-top: 140px !important;
        padding-bottom: 140px !important;
    }

    .pd-md-x-140 {
        padding-left: 140px;
        padding-right: 140px;
    }

    .pd-md-x-140-f {
        padding-left: 140px !important;
        padding-right: 140px !important;
    }

    .pd-md-t-140 {
        padding-top: 140px;
    }

    .pd-md-r-140 {
        padding-right: 140px;
    }

    .pd-md-b-140 {
        padding-bottom: 140px;
    }

    .pd-md-l-140 {
        padding-left: 140px;
    }

    .pd-md-t-140-f {
        padding-top: 140px !important;
    }

    .pd-md-r-140-f {
        padding-right: 140px !important;
    }

    .pd-md-b-140-f {
        padding-bottom: 140px !important;
    }

    .pd-md-l-140-f {
        padding-left: 140px !important;
    }

    .pd-md-150 {
        padding: 150px;
    }

    .pd-md-150-f {
        padding: 150px !important;
    }

    .pd-md-y-150 {
        padding-top: 150px;
        padding-bottom: 150px;
    }

    .pd-md-y-150-f {
        padding-top: 150px !important;
        padding-bottom: 150px !important;
    }

    .pd-md-x-150 {
        padding-left: 150px;
        padding-right: 150px;
    }

    .pd-md-x-150-f {
        padding-left: 150px !important;
        padding-right: 150px !important;
    }

    .pd-md-t-150 {
        padding-top: 150px;
    }

    .pd-md-r-150 {
        padding-right: 150px;
    }

    .pd-md-b-150 {
        padding-bottom: 150px;
    }

    .pd-md-l-150 {
        padding-left: 150px;
    }

    .pd-md-t-150-f {
        padding-top: 150px !important;
    }

    .pd-md-r-150-f {
        padding-right: 150px !important;
    }

    .pd-md-b-150-f {
        padding-bottom: 150px !important;
    }

    .pd-md-l-150-f {
        padding-left: 150px !important;
    }

    .pd-md-160 {
        padding: 160px;
    }

    .pd-md-160-f {
        padding: 160px !important;
    }

    .pd-md-y-160 {
        padding-top: 160px;
        padding-bottom: 160px;
    }

    .pd-md-y-160-f {
        padding-top: 160px !important;
        padding-bottom: 160px !important;
    }

    .pd-md-x-160 {
        padding-left: 160px;
        padding-right: 160px;
    }

    .pd-md-x-160-f {
        padding-left: 160px !important;
        padding-right: 160px !important;
    }

    .pd-md-t-160 {
        padding-top: 160px;
    }

    .pd-md-r-160 {
        padding-right: 160px;
    }

    .pd-md-b-160 {
        padding-bottom: 160px;
    }

    .pd-md-l-160 {
        padding-left: 160px;
    }

    .pd-md-t-160-f {
        padding-top: 160px !important;
    }

    .pd-md-r-160-f {
        padding-right: 160px !important;
    }

    .pd-md-b-160-f {
        padding-bottom: 160px !important;
    }

    .pd-md-l-160-f {
        padding-left: 160px !important;
    }

    .pd-md-170 {
        padding: 170px;
    }

    .pd-md-170-f {
        padding: 170px !important;
    }

    .pd-md-y-170 {
        padding-top: 170px;
        padding-bottom: 170px;
    }

    .pd-md-y-170-f {
        padding-top: 170px !important;
        padding-bottom: 170px !important;
    }

    .pd-md-x-170 {
        padding-left: 170px;
        padding-right: 170px;
    }

    .pd-md-x-170-f {
        padding-left: 170px !important;
        padding-right: 170px !important;
    }

    .pd-md-t-170 {
        padding-top: 170px;
    }

    .pd-md-r-170 {
        padding-right: 170px;
    }

    .pd-md-b-170 {
        padding-bottom: 170px;
    }

    .pd-md-l-170 {
        padding-left: 170px;
    }

    .pd-md-t-170-f {
        padding-top: 170px !important;
    }

    .pd-md-r-170-f {
        padding-right: 170px !important;
    }

    .pd-md-b-170-f {
        padding-bottom: 170px !important;
    }

    .pd-md-l-170-f {
        padding-left: 170px !important;
    }

    .pd-md-180 {
        padding: 180px;
    }

    .pd-md-180-f {
        padding: 180px !important;
    }

    .pd-md-y-180 {
        padding-top: 180px;
        padding-bottom: 180px;
    }

    .pd-md-y-180-f {
        padding-top: 180px !important;
        padding-bottom: 180px !important;
    }

    .pd-md-x-180 {
        padding-left: 180px;
        padding-right: 180px;
    }

    .pd-md-x-180-f {
        padding-left: 180px !important;
        padding-right: 180px !important;
    }

    .pd-md-t-180 {
        padding-top: 180px;
    }

    .pd-md-r-180 {
        padding-right: 180px;
    }

    .pd-md-b-180 {
        padding-bottom: 180px;
    }

    .pd-md-l-180 {
        padding-left: 180px;
    }

    .pd-md-t-180-f {
        padding-top: 180px !important;
    }

    .pd-md-r-180-f {
        padding-right: 180px !important;
    }

    .pd-md-b-180-f {
        padding-bottom: 180px !important;
    }

    .pd-md-l-180-f {
        padding-left: 180px !important;
    }

    .pd-md-190 {
        padding: 190px;
    }

    .pd-md-190-f {
        padding: 190px !important;
    }

    .pd-md-y-190 {
        padding-top: 190px;
        padding-bottom: 190px;
    }

    .pd-md-y-190-f {
        padding-top: 190px !important;
        padding-bottom: 190px !important;
    }

    .pd-md-x-190 {
        padding-left: 190px;
        padding-right: 190px;
    }

    .pd-md-x-190-f {
        padding-left: 190px !important;
        padding-right: 190px !important;
    }

    .pd-md-t-190 {
        padding-top: 190px;
    }

    .pd-md-r-190 {
        padding-right: 190px;
    }

    .pd-md-b-190 {
        padding-bottom: 190px;
    }

    .pd-md-l-190 {
        padding-left: 190px;
    }

    .pd-md-t-190-f {
        padding-top: 190px !important;
    }

    .pd-md-r-190-f {
        padding-right: 190px !important;
    }

    .pd-md-b-190-f {
        padding-bottom: 190px !important;
    }

    .pd-md-l-190-f {
        padding-left: 190px !important;
    }

    .pd-md-200 {
        padding: 200px;
    }

    .pd-md-200-f {
        padding: 200px !important;
    }

    .pd-md-y-200 {
        padding-top: 200px;
        padding-bottom: 200px;
    }

    .pd-md-y-200-f {
        padding-top: 200px !important;
        padding-bottom: 200px !important;
    }

    .pd-md-x-200 {
        padding-left: 200px;
        padding-right: 200px;
    }

    .pd-md-x-200-f {
        padding-left: 200px !important;
        padding-right: 200px !important;
    }

    .pd-md-t-200 {
        padding-top: 200px;
    }

    .pd-md-r-200 {
        padding-right: 200px;
    }

    .pd-md-b-200 {
        padding-bottom: 200px;
    }

    .pd-md-l-200 {
        padding-left: 200px;
    }

    .pd-md-t-200-f {
        padding-top: 200px !important;
    }

    .pd-md-r-200-f {
        padding-right: 200px !important;
    }

    .pd-md-b-200-f {
        padding-bottom: 200px !important;
    }

    .pd-md-l-200-f {
        padding-left: 200px !important;
    }
}

@media (min-width: 992px) {
    .pd-lg-0 {
        padding: 0px;
    }

    .pd-lg-0-f {
        padding: 0px !important;
    }

    .pd-lg-y-0 {
        padding-top: 0px;
        padding-bottom: 0px;
    }

    .pd-lg-y-0-f {
        padding-top: 0px !important;
        padding-bottom: 0px !important;
    }

    .pd-lg-x-0 {
        padding-left: 0px;
        padding-right: 0px;
    }

    .pd-lg-x-0-f {
        padding-left: 0px !important;
        padding-right: 0px !important;
    }

    .pd-lg-t-0 {
        padding-top: 0px;
    }

    .pd-lg-r-0 {
        padding-right: 0px;
    }

    .pd-lg-b-0 {
        padding-bottom: 0px;
    }

    .pd-lg-l-0 {
        padding-left: 0px;
    }

    .pd-lg-t-0-f {
        padding-top: 0px !important;
    }

    .pd-lg-r-0-f {
        padding-right: 0px !important;
    }

    .pd-lg-b-0-f {
        padding-bottom: 0px !important;
    }

    .pd-lg-l-0-f {
        padding-left: 0px !important;
    }

    .pd-lg-1 {
        padding: 1px;
    }

    .pd-lg-1-f {
        padding: 1px !important;
    }

    .pd-lg-y-1 {
        padding-top: 1px;
        padding-bottom: 1px;
    }

    .pd-lg-y-1-f {
        padding-top: 1px !important;
        padding-bottom: 1px !important;
    }

    .pd-lg-x-1 {
        padding-left: 1px;
        padding-right: 1px;
    }

    .pd-lg-x-1-f {
        padding-left: 1px !important;
        padding-right: 1px !important;
    }

    .pd-lg-t-1 {
        padding-top: 1px;
    }

    .pd-lg-r-1 {
        padding-right: 1px;
    }

    .pd-lg-b-1 {
        padding-bottom: 1px;
    }

    .pd-lg-l-1 {
        padding-left: 1px;
    }

    .pd-lg-t-1-f {
        padding-top: 1px !important;
    }

    .pd-lg-r-1-f {
        padding-right: 1px !important;
    }

    .pd-lg-b-1-f {
        padding-bottom: 1px !important;
    }

    .pd-lg-l-1-f {
        padding-left: 1px !important;
    }

    .pd-lg-2 {
        padding: 2px;
    }

    .pd-lg-2-f {
        padding: 2px !important;
    }

    .pd-lg-y-2 {
        padding-top: 2px;
        padding-bottom: 2px;
    }

    .pd-lg-y-2-f {
        padding-top: 2px !important;
        padding-bottom: 2px !important;
    }

    .pd-lg-x-2 {
        padding-left: 2px;
        padding-right: 2px;
    }

    .pd-lg-x-2-f {
        padding-left: 2px !important;
        padding-right: 2px !important;
    }

    .pd-lg-t-2 {
        padding-top: 2px;
    }

    .pd-lg-r-2 {
        padding-right: 2px;
    }

    .pd-lg-b-2 {
        padding-bottom: 2px;
    }

    .pd-lg-l-2 {
        padding-left: 2px;
    }

    .pd-lg-t-2-f {
        padding-top: 2px !important;
    }

    .pd-lg-r-2-f {
        padding-right: 2px !important;
    }

    .pd-lg-b-2-f {
        padding-bottom: 2px !important;
    }

    .pd-lg-l-2-f {
        padding-left: 2px !important;
    }

    .pd-lg-3 {
        padding: 3px;
    }

    .pd-lg-3-f {
        padding: 3px !important;
    }

    .pd-lg-y-3 {
        padding-top: 3px;
        padding-bottom: 3px;
    }

    .pd-lg-y-3-f {
        padding-top: 3px !important;
        padding-bottom: 3px !important;
    }

    .pd-lg-x-3 {
        padding-left: 3px;
        padding-right: 3px;
    }

    .pd-lg-x-3-f {
        padding-left: 3px !important;
        padding-right: 3px !important;
    }

    .pd-lg-t-3 {
        padding-top: 3px;
    }

    .pd-lg-r-3 {
        padding-right: 3px;
    }

    .pd-lg-b-3 {
        padding-bottom: 3px;
    }

    .pd-lg-l-3 {
        padding-left: 3px;
    }

    .pd-lg-t-3-f {
        padding-top: 3px !important;
    }

    .pd-lg-r-3-f {
        padding-right: 3px !important;
    }

    .pd-lg-b-3-f {
        padding-bottom: 3px !important;
    }

    .pd-lg-l-3-f {
        padding-left: 3px !important;
    }

    .pd-lg-4 {
        padding: 4px;
    }

    .pd-lg-4-f {
        padding: 4px !important;
    }

    .pd-lg-y-4 {
        padding-top: 4px;
        padding-bottom: 4px;
    }

    .pd-lg-y-4-f {
        padding-top: 4px !important;
        padding-bottom: 4px !important;
    }

    .pd-lg-x-4 {
        padding-left: 4px;
        padding-right: 4px;
    }

    .pd-lg-x-4-f {
        padding-left: 4px !important;
        padding-right: 4px !important;
    }

    .pd-lg-t-4 {
        padding-top: 4px;
    }

    .pd-lg-r-4 {
        padding-right: 4px;
    }

    .pd-lg-b-4 {
        padding-bottom: 4px;
    }

    .pd-lg-l-4 {
        padding-left: 4px;
    }

    .pd-lg-t-4-f {
        padding-top: 4px !important;
    }

    .pd-lg-r-4-f {
        padding-right: 4px !important;
    }

    .pd-lg-b-4-f {
        padding-bottom: 4px !important;
    }

    .pd-lg-l-4-f {
        padding-left: 4px !important;
    }

    .pd-lg-5 {
        padding: 5px;
    }

    .pd-lg-5-f {
        padding: 5px !important;
    }

    .pd-lg-y-5 {
        padding-top: 5px;
        padding-bottom: 5px;
    }

    .pd-lg-y-5-f {
        padding-top: 5px !important;
        padding-bottom: 5px !important;
    }

    .pd-lg-x-5 {
        padding-left: 5px;
        padding-right: 5px;
    }

    .pd-lg-x-5-f {
        padding-left: 5px !important;
        padding-right: 5px !important;
    }

    .pd-lg-t-5 {
        padding-top: 5px;
    }

    .pd-lg-r-5 {
        padding-right: 5px;
    }

    .pd-lg-b-5 {
        padding-bottom: 5px;
    }

    .pd-lg-l-5 {
        padding-left: 5px;
    }

    .pd-lg-t-5-f {
        padding-top: 5px !important;
    }

    .pd-lg-r-5-f {
        padding-right: 5px !important;
    }

    .pd-lg-b-5-f {
        padding-bottom: 5px !important;
    }

    .pd-lg-l-5-f {
        padding-left: 5px !important;
    }

    .pd-lg-6 {
        padding: 6px;
    }

    .pd-lg-6-f {
        padding: 6px !important;
    }

    .pd-lg-y-6 {
        padding-top: 6px;
        padding-bottom: 6px;
    }

    .pd-lg-y-6-f {
        padding-top: 6px !important;
        padding-bottom: 6px !important;
    }

    .pd-lg-x-6 {
        padding-left: 6px;
        padding-right: 6px;
    }

    .pd-lg-x-6-f {
        padding-left: 6px !important;
        padding-right: 6px !important;
    }

    .pd-lg-t-6 {
        padding-top: 6px;
    }

    .pd-lg-r-6 {
        padding-right: 6px;
    }

    .pd-lg-b-6 {
        padding-bottom: 6px;
    }

    .pd-lg-l-6 {
        padding-left: 6px;
    }

    .pd-lg-t-6-f {
        padding-top: 6px !important;
    }

    .pd-lg-r-6-f {
        padding-right: 6px !important;
    }

    .pd-lg-b-6-f {
        padding-bottom: 6px !important;
    }

    .pd-lg-l-6-f {
        padding-left: 6px !important;
    }

    .pd-lg-7 {
        padding: 7px;
    }

    .pd-lg-7-f {
        padding: 7px !important;
    }

    .pd-lg-y-7 {
        padding-top: 7px;
        padding-bottom: 7px;
    }

    .pd-lg-y-7-f {
        padding-top: 7px !important;
        padding-bottom: 7px !important;
    }

    .pd-lg-x-7 {
        padding-left: 7px;
        padding-right: 7px;
    }

    .pd-lg-x-7-f {
        padding-left: 7px !important;
        padding-right: 7px !important;
    }

    .pd-lg-t-7 {
        padding-top: 7px;
    }

    .pd-lg-r-7 {
        padding-right: 7px;
    }

    .pd-lg-b-7 {
        padding-bottom: 7px;
    }

    .pd-lg-l-7 {
        padding-left: 7px;
    }

    .pd-lg-t-7-f {
        padding-top: 7px !important;
    }

    .pd-lg-r-7-f {
        padding-right: 7px !important;
    }

    .pd-lg-b-7-f {
        padding-bottom: 7px !important;
    }

    .pd-lg-l-7-f {
        padding-left: 7px !important;
    }

    .pd-lg-8 {
        padding: 8px;
    }

    .pd-lg-8-f {
        padding: 8px !important;
    }

    .pd-lg-y-8 {
        padding-top: 8px;
        padding-bottom: 8px;
    }

    .pd-lg-y-8-f {
        padding-top: 8px !important;
        padding-bottom: 8px !important;
    }

    .pd-lg-x-8 {
        padding-left: 8px;
        padding-right: 8px;
    }

    .pd-lg-x-8-f {
        padding-left: 8px !important;
        padding-right: 8px !important;
    }

    .pd-lg-t-8 {
        padding-top: 8px;
    }

    .pd-lg-r-8 {
        padding-right: 8px;
    }

    .pd-lg-b-8 {
        padding-bottom: 8px;
    }

    .pd-lg-l-8 {
        padding-left: 8px;
    }

    .pd-lg-t-8-f {
        padding-top: 8px !important;
    }

    .pd-lg-r-8-f {
        padding-right: 8px !important;
    }

    .pd-lg-b-8-f {
        padding-bottom: 8px !important;
    }

    .pd-lg-l-8-f {
        padding-left: 8px !important;
    }

    .pd-lg-9 {
        padding: 9px;
    }

    .pd-lg-9-f {
        padding: 9px !important;
    }

    .pd-lg-y-9 {
        padding-top: 9px;
        padding-bottom: 9px;
    }

    .pd-lg-y-9-f {
        padding-top: 9px !important;
        padding-bottom: 9px !important;
    }

    .pd-lg-x-9 {
        padding-left: 9px;
        padding-right: 9px;
    }

    .pd-lg-x-9-f {
        padding-left: 9px !important;
        padding-right: 9px !important;
    }

    .pd-lg-t-9 {
        padding-top: 9px;
    }

    .pd-lg-r-9 {
        padding-right: 9px;
    }

    .pd-lg-b-9 {
        padding-bottom: 9px;
    }

    .pd-lg-l-9 {
        padding-left: 9px;
    }

    .pd-lg-t-9-f {
        padding-top: 9px !important;
    }

    .pd-lg-r-9-f {
        padding-right: 9px !important;
    }

    .pd-lg-b-9-f {
        padding-bottom: 9px !important;
    }

    .pd-lg-l-9-f {
        padding-left: 9px !important;
    }

    .pd-lg-10 {
        padding: 10px;
    }

    .pd-lg-10-f {
        padding: 10px !important;
    }

    .pd-lg-y-10 {
        padding-top: 10px;
        padding-bottom: 10px;
    }

    .pd-lg-y-10-f {
        padding-top: 10px !important;
        padding-bottom: 10px !important;
    }

    .pd-lg-x-10 {
        padding-left: 10px;
        padding-right: 10px;
    }

    .pd-lg-x-10-f {
        padding-left: 10px !important;
        padding-right: 10px !important;
    }

    .pd-lg-t-10 {
        padding-top: 10px;
    }

    .pd-lg-r-10 {
        padding-right: 10px;
    }

    .pd-lg-b-10 {
        padding-bottom: 10px;
    }

    .pd-lg-l-10 {
        padding-left: 10px;
    }

    .pd-lg-t-10-f {
        padding-top: 10px !important;
    }

    .pd-lg-r-10-f {
        padding-right: 10px !important;
    }

    .pd-lg-b-10-f {
        padding-bottom: 10px !important;
    }

    .pd-lg-l-10-f {
        padding-left: 10px !important;
    }

    .pd-lg-15 {
        padding: 15px;
    }

    .pd-lg-15-f {
        padding: 15px !important;
    }

    .pd-lg-y-15 {
        padding-top: 15px;
        padding-bottom: 15px;
    }

    .pd-lg-y-15-f {
        padding-top: 15px !important;
        padding-bottom: 15px !important;
    }

    .pd-lg-x-15 {
        padding-left: 15px;
        padding-right: 15px;
    }

    .pd-lg-x-15-f {
        padding-left: 15px !important;
        padding-right: 15px !important;
    }

    .pd-lg-t-15 {
        padding-top: 15px;
    }

    .pd-lg-r-15 {
        padding-right: 15px;
    }

    .pd-lg-b-15 {
        padding-bottom: 15px;
    }

    .pd-lg-l-15 {
        padding-left: 15px;
    }

    .pd-lg-t-15-f {
        padding-top: 15px !important;
    }

    .pd-lg-r-15-f {
        padding-right: 15px !important;
    }

    .pd-lg-b-15-f {
        padding-bottom: 15px !important;
    }

    .pd-lg-l-15-f {
        padding-left: 15px !important;
    }

    .pd-lg-20 {
        padding: 20px;
    }

    .pd-lg-20-f {
        padding: 20px !important;
    }

    .pd-lg-y-20 {
        padding-top: 20px;
        padding-bottom: 20px;
    }

    .pd-lg-y-20-f {
        padding-top: 20px !important;
        padding-bottom: 20px !important;
    }

    .pd-lg-x-20 {
        padding-left: 20px;
        padding-right: 20px;
    }

    .pd-lg-x-20-f {
        padding-left: 20px !important;
        padding-right: 20px !important;
    }

    .pd-lg-t-20 {
        padding-top: 20px;
    }

    .pd-lg-r-20 {
        padding-right: 20px;
    }

    .pd-lg-b-20 {
        padding-bottom: 20px;
    }

    .pd-lg-l-20 {
        padding-left: 20px;
    }

    .pd-lg-t-20-f {
        padding-top: 20px !important;
    }

    .pd-lg-r-20-f {
        padding-right: 20px !important;
    }

    .pd-lg-b-20-f {
        padding-bottom: 20px !important;
    }

    .pd-lg-l-20-f {
        padding-left: 20px !important;
    }

    .pd-lg-25 {
        padding: 25px;
    }

    .pd-lg-25-f {
        padding: 25px !important;
    }

    .pd-lg-y-25 {
        padding-top: 25px;
        padding-bottom: 25px;
    }

    .pd-lg-y-25-f {
        padding-top: 25px !important;
        padding-bottom: 25px !important;
    }

    .pd-lg-x-25 {
        padding-left: 25px;
        padding-right: 25px;
    }

    .pd-lg-x-25-f {
        padding-left: 25px !important;
        padding-right: 25px !important;
    }

    .pd-lg-t-25 {
        padding-top: 25px;
    }

    .pd-lg-r-25 {
        padding-right: 25px;
    }

    .pd-lg-b-25 {
        padding-bottom: 25px;
    }

    .pd-lg-l-25 {
        padding-left: 25px;
    }

    .pd-lg-t-25-f {
        padding-top: 25px !important;
    }

    .pd-lg-r-25-f {
        padding-right: 25px !important;
    }

    .pd-lg-b-25-f {
        padding-bottom: 25px !important;
    }

    .pd-lg-l-25-f {
        padding-left: 25px !important;
    }

    .pd-lg-30 {
        padding: 30px;
    }

    .pd-lg-30-f {
        padding: 30px !important;
    }

    .pd-lg-y-30 {
        padding-top: 30px;
        padding-bottom: 30px;
    }

    .pd-lg-y-30-f {
        padding-top: 30px !important;
        padding-bottom: 30px !important;
    }

    .pd-lg-x-30 {
        padding-left: 30px;
        padding-right: 30px;
    }

    .pd-lg-x-30-f {
        padding-left: 30px !important;
        padding-right: 30px !important;
    }

    .pd-lg-t-30 {
        padding-top: 30px;
    }

    .pd-lg-r-30 {
        padding-right: 30px;
    }

    .pd-lg-b-30 {
        padding-bottom: 30px;
    }

    .pd-lg-l-30 {
        padding-left: 30px;
    }

    .pd-lg-t-30-f {
        padding-top: 30px !important;
    }

    .pd-lg-r-30-f {
        padding-right: 30px !important;
    }

    .pd-lg-b-30-f {
        padding-bottom: 30px !important;
    }

    .pd-lg-l-30-f {
        padding-left: 30px !important;
    }

    .pd-lg-35 {
        padding: 35px;
    }

    .pd-lg-35-f {
        padding: 35px !important;
    }

    .pd-lg-y-35 {
        padding-top: 35px;
        padding-bottom: 35px;
    }

    .pd-lg-y-35-f {
        padding-top: 35px !important;
        padding-bottom: 35px !important;
    }

    .pd-lg-x-35 {
        padding-left: 35px;
        padding-right: 35px;
    }

    .pd-lg-x-35-f {
        padding-left: 35px !important;
        padding-right: 35px !important;
    }

    .pd-lg-t-35 {
        padding-top: 35px;
    }

    .pd-lg-r-35 {
        padding-right: 35px;
    }

    .pd-lg-b-35 {
        padding-bottom: 35px;
    }

    .pd-lg-l-35 {
        padding-left: 35px;
    }

    .pd-lg-t-35-f {
        padding-top: 35px !important;
    }

    .pd-lg-r-35-f {
        padding-right: 35px !important;
    }

    .pd-lg-b-35-f {
        padding-bottom: 35px !important;
    }

    .pd-lg-l-35-f {
        padding-left: 35px !important;
    }

    .pd-lg-40 {
        padding: 40px;
    }

    .pd-lg-40-f {
        padding: 40px !important;
    }

    .pd-lg-y-40 {
        padding-top: 40px;
        padding-bottom: 40px;
    }

    .pd-lg-y-40-f {
        padding-top: 40px !important;
        padding-bottom: 40px !important;
    }

    .pd-lg-x-40 {
        padding-left: 40px;
        padding-right: 40px;
    }

    .pd-lg-x-40-f {
        padding-left: 40px !important;
        padding-right: 40px !important;
    }

    .pd-lg-t-40 {
        padding-top: 40px;
    }

    .pd-lg-r-40 {
        padding-right: 40px;
    }

    .pd-lg-b-40 {
        padding-bottom: 40px;
    }

    .pd-lg-l-40 {
        padding-left: 40px;
    }

    .pd-lg-t-40-f {
        padding-top: 40px !important;
    }

    .pd-lg-r-40-f {
        padding-right: 40px !important;
    }

    .pd-lg-b-40-f {
        padding-bottom: 40px !important;
    }

    .pd-lg-l-40-f {
        padding-left: 40px !important;
    }

    .pd-lg-45 {
        padding: 45px;
    }

    .pd-lg-45-f {
        padding: 45px !important;
    }

    .pd-lg-y-45 {
        padding-top: 45px;
        padding-bottom: 45px;
    }

    .pd-lg-y-45-f {
        padding-top: 45px !important;
        padding-bottom: 45px !important;
    }

    .pd-lg-x-45 {
        padding-left: 45px;
        padding-right: 45px;
    }

    .pd-lg-x-45-f {
        padding-left: 45px !important;
        padding-right: 45px !important;
    }

    .pd-lg-t-45 {
        padding-top: 45px;
    }

    .pd-lg-r-45 {
        padding-right: 45px;
    }

    .pd-lg-b-45 {
        padding-bottom: 45px;
    }

    .pd-lg-l-45 {
        padding-left: 45px;
    }

    .pd-lg-t-45-f {
        padding-top: 45px !important;
    }

    .pd-lg-r-45-f {
        padding-right: 45px !important;
    }

    .pd-lg-b-45-f {
        padding-bottom: 45px !important;
    }

    .pd-lg-l-45-f {
        padding-left: 45px !important;
    }

    .pd-lg-50 {
        padding: 50px;
    }

    .pd-lg-50-f {
        padding: 50px !important;
    }

    .pd-lg-y-50 {
        padding-top: 50px;
        padding-bottom: 50px;
    }

    .pd-lg-y-50-f {
        padding-top: 50px !important;
        padding-bottom: 50px !important;
    }

    .pd-lg-x-50 {
        padding-left: 50px;
        padding-right: 50px;
    }

    .pd-lg-x-50-f {
        padding-left: 50px !important;
        padding-right: 50px !important;
    }

    .pd-lg-t-50 {
        padding-top: 50px;
    }

    .pd-lg-r-50 {
        padding-right: 50px;
    }

    .pd-lg-b-50 {
        padding-bottom: 50px;
    }

    .pd-lg-l-50 {
        padding-left: 50px;
    }

    .pd-lg-t-50-f {
        padding-top: 50px !important;
    }

    .pd-lg-r-50-f {
        padding-right: 50px !important;
    }

    .pd-lg-b-50-f {
        padding-bottom: 50px !important;
    }

    .pd-lg-l-50-f {
        padding-left: 50px !important;
    }

    .pd-lg-55 {
        padding: 55px;
    }

    .pd-lg-55-f {
        padding: 55px !important;
    }

    .pd-lg-y-55 {
        padding-top: 55px;
        padding-bottom: 55px;
    }

    .pd-lg-y-55-f {
        padding-top: 55px !important;
        padding-bottom: 55px !important;
    }

    .pd-lg-x-55 {
        padding-left: 55px;
        padding-right: 55px;
    }

    .pd-lg-x-55-f {
        padding-left: 55px !important;
        padding-right: 55px !important;
    }

    .pd-lg-t-55 {
        padding-top: 55px;
    }

    .pd-lg-r-55 {
        padding-right: 55px;
    }

    .pd-lg-b-55 {
        padding-bottom: 55px;
    }

    .pd-lg-l-55 {
        padding-left: 55px;
    }

    .pd-lg-t-55-f {
        padding-top: 55px !important;
    }

    .pd-lg-r-55-f {
        padding-right: 55px !important;
    }

    .pd-lg-b-55-f {
        padding-bottom: 55px !important;
    }

    .pd-lg-l-55-f {
        padding-left: 55px !important;
    }

    .pd-lg-60 {
        padding: 60px;
    }

    .pd-lg-60-f {
        padding: 60px !important;
    }

    .pd-lg-y-60 {
        padding-top: 60px;
        padding-bottom: 60px;
    }

    .pd-lg-y-60-f {
        padding-top: 60px !important;
        padding-bottom: 60px !important;
    }

    .pd-lg-x-60 {
        padding-left: 60px;
        padding-right: 60px;
    }

    .pd-lg-x-60-f {
        padding-left: 60px !important;
        padding-right: 60px !important;
    }

    .pd-lg-t-60 {
        padding-top: 60px;
    }

    .pd-lg-r-60 {
        padding-right: 60px;
    }

    .pd-lg-b-60 {
        padding-bottom: 60px;
    }

    .pd-lg-l-60 {
        padding-left: 60px;
    }

    .pd-lg-t-60-f {
        padding-top: 60px !important;
    }

    .pd-lg-r-60-f {
        padding-right: 60px !important;
    }

    .pd-lg-b-60-f {
        padding-bottom: 60px !important;
    }

    .pd-lg-l-60-f {
        padding-left: 60px !important;
    }

    .pd-lg-65 {
        padding: 65px;
    }

    .pd-lg-65-f {
        padding: 65px !important;
    }

    .pd-lg-y-65 {
        padding-top: 65px;
        padding-bottom: 65px;
    }

    .pd-lg-y-65-f {
        padding-top: 65px !important;
        padding-bottom: 65px !important;
    }

    .pd-lg-x-65 {
        padding-left: 65px;
        padding-right: 65px;
    }

    .pd-lg-x-65-f {
        padding-left: 65px !important;
        padding-right: 65px !important;
    }

    .pd-lg-t-65 {
        padding-top: 65px;
    }

    .pd-lg-r-65 {
        padding-right: 65px;
    }

    .pd-lg-b-65 {
        padding-bottom: 65px;
    }

    .pd-lg-l-65 {
        padding-left: 65px;
    }

    .pd-lg-t-65-f {
        padding-top: 65px !important;
    }

    .pd-lg-r-65-f {
        padding-right: 65px !important;
    }

    .pd-lg-b-65-f {
        padding-bottom: 65px !important;
    }

    .pd-lg-l-65-f {
        padding-left: 65px !important;
    }

    .pd-lg-70 {
        padding: 70px;
    }

    .pd-lg-70-f {
        padding: 70px !important;
    }

    .pd-lg-y-70 {
        padding-top: 70px;
        padding-bottom: 70px;
    }

    .pd-lg-y-70-f {
        padding-top: 70px !important;
        padding-bottom: 70px !important;
    }

    .pd-lg-x-70 {
        padding-left: 70px;
        padding-right: 70px;
    }

    .pd-lg-x-70-f {
        padding-left: 70px !important;
        padding-right: 70px !important;
    }

    .pd-lg-t-70 {
        padding-top: 70px;
    }

    .pd-lg-r-70 {
        padding-right: 70px;
    }

    .pd-lg-b-70 {
        padding-bottom: 70px;
    }

    .pd-lg-l-70 {
        padding-left: 70px;
    }

    .pd-lg-t-70-f {
        padding-top: 70px !important;
    }

    .pd-lg-r-70-f {
        padding-right: 70px !important;
    }

    .pd-lg-b-70-f {
        padding-bottom: 70px !important;
    }

    .pd-lg-l-70-f {
        padding-left: 70px !important;
    }

    .pd-lg-75 {
        padding: 75px;
    }

    .pd-lg-75-f {
        padding: 75px !important;
    }

    .pd-lg-y-75 {
        padding-top: 75px;
        padding-bottom: 75px;
    }

    .pd-lg-y-75-f {
        padding-top: 75px !important;
        padding-bottom: 75px !important;
    }

    .pd-lg-x-75 {
        padding-left: 75px;
        padding-right: 75px;
    }

    .pd-lg-x-75-f {
        padding-left: 75px !important;
        padding-right: 75px !important;
    }

    .pd-lg-t-75 {
        padding-top: 75px;
    }

    .pd-lg-r-75 {
        padding-right: 75px;
    }

    .pd-lg-b-75 {
        padding-bottom: 75px;
    }

    .pd-lg-l-75 {
        padding-left: 75px;
    }

    .pd-lg-t-75-f {
        padding-top: 75px !important;
    }

    .pd-lg-r-75-f {
        padding-right: 75px !important;
    }

    .pd-lg-b-75-f {
        padding-bottom: 75px !important;
    }

    .pd-lg-l-75-f {
        padding-left: 75px !important;
    }

    .pd-lg-80 {
        padding: 80px;
    }

    .pd-lg-80-f {
        padding: 80px !important;
    }

    .pd-lg-y-80 {
        padding-top: 80px;
        padding-bottom: 80px;
    }

    .pd-lg-y-80-f {
        padding-top: 80px !important;
        padding-bottom: 80px !important;
    }

    .pd-lg-x-80 {
        padding-left: 80px;
        padding-right: 80px;
    }

    .pd-lg-x-80-f {
        padding-left: 80px !important;
        padding-right: 80px !important;
    }

    .pd-lg-t-80 {
        padding-top: 80px;
    }

    .pd-lg-r-80 {
        padding-right: 80px;
    }

    .pd-lg-b-80 {
        padding-bottom: 80px;
    }

    .pd-lg-l-80 {
        padding-left: 80px;
    }

    .pd-lg-t-80-f {
        padding-top: 80px !important;
    }

    .pd-lg-r-80-f {
        padding-right: 80px !important;
    }

    .pd-lg-b-80-f {
        padding-bottom: 80px !important;
    }

    .pd-lg-l-80-f {
        padding-left: 80px !important;
    }

    .pd-lg-85 {
        padding: 85px;
    }

    .pd-lg-85-f {
        padding: 85px !important;
    }

    .pd-lg-y-85 {
        padding-top: 85px;
        padding-bottom: 85px;
    }

    .pd-lg-y-85-f {
        padding-top: 85px !important;
        padding-bottom: 85px !important;
    }

    .pd-lg-x-85 {
        padding-left: 85px;
        padding-right: 85px;
    }

    .pd-lg-x-85-f {
        padding-left: 85px !important;
        padding-right: 85px !important;
    }

    .pd-lg-t-85 {
        padding-top: 85px;
    }

    .pd-lg-r-85 {
        padding-right: 85px;
    }

    .pd-lg-b-85 {
        padding-bottom: 85px;
    }

    .pd-lg-l-85 {
        padding-left: 85px;
    }

    .pd-lg-t-85-f {
        padding-top: 85px !important;
    }

    .pd-lg-r-85-f {
        padding-right: 85px !important;
    }

    .pd-lg-b-85-f {
        padding-bottom: 85px !important;
    }

    .pd-lg-l-85-f {
        padding-left: 85px !important;
    }

    .pd-lg-90 {
        padding: 90px;
    }

    .pd-lg-90-f {
        padding: 90px !important;
    }

    .pd-lg-y-90 {
        padding-top: 90px;
        padding-bottom: 90px;
    }

    .pd-lg-y-90-f {
        padding-top: 90px !important;
        padding-bottom: 90px !important;
    }

    .pd-lg-x-90 {
        padding-left: 90px;
        padding-right: 90px;
    }

    .pd-lg-x-90-f {
        padding-left: 90px !important;
        padding-right: 90px !important;
    }

    .pd-lg-t-90 {
        padding-top: 90px;
    }

    .pd-lg-r-90 {
        padding-right: 90px;
    }

    .pd-lg-b-90 {
        padding-bottom: 90px;
    }

    .pd-lg-l-90 {
        padding-left: 90px;
    }

    .pd-lg-t-90-f {
        padding-top: 90px !important;
    }

    .pd-lg-r-90-f {
        padding-right: 90px !important;
    }

    .pd-lg-b-90-f {
        padding-bottom: 90px !important;
    }

    .pd-lg-l-90-f {
        padding-left: 90px !important;
    }

    .pd-lg-95 {
        padding: 95px;
    }

    .pd-lg-95-f {
        padding: 95px !important;
    }

    .pd-lg-y-95 {
        padding-top: 95px;
        padding-bottom: 95px;
    }

    .pd-lg-y-95-f {
        padding-top: 95px !important;
        padding-bottom: 95px !important;
    }

    .pd-lg-x-95 {
        padding-left: 95px;
        padding-right: 95px;
    }

    .pd-lg-x-95-f {
        padding-left: 95px !important;
        padding-right: 95px !important;
    }

    .pd-lg-t-95 {
        padding-top: 95px;
    }

    .pd-lg-r-95 {
        padding-right: 95px;
    }

    .pd-lg-b-95 {
        padding-bottom: 95px;
    }

    .pd-lg-l-95 {
        padding-left: 95px;
    }

    .pd-lg-t-95-f {
        padding-top: 95px !important;
    }

    .pd-lg-r-95-f {
        padding-right: 95px !important;
    }

    .pd-lg-b-95-f {
        padding-bottom: 95px !important;
    }

    .pd-lg-l-95-f {
        padding-left: 95px !important;
    }

    .pd-lg-100 {
        padding: 100px;
    }

    .pd-lg-100-f {
        padding: 100px !important;
    }

    .pd-lg-y-100 {
        padding-top: 100px;
        padding-bottom: 100px;
    }

    .pd-lg-y-100-f {
        padding-top: 100px !important;
        padding-bottom: 100px !important;
    }

    .pd-lg-x-100 {
        padding-left: 100px;
        padding-right: 100px;
    }

    .pd-lg-x-100-f {
        padding-left: 100px !important;
        padding-right: 100px !important;
    }

    .pd-lg-t-100 {
        padding-top: 100px;
    }

    .pd-lg-r-100 {
        padding-right: 100px;
    }

    .pd-lg-b-100 {
        padding-bottom: 100px;
    }

    .pd-lg-l-100 {
        padding-left: 100px;
    }

    .pd-lg-t-100-f {
        padding-top: 100px !important;
    }

    .pd-lg-r-100-f {
        padding-right: 100px !important;
    }

    .pd-lg-b-100-f {
        padding-bottom: 100px !important;
    }

    .pd-lg-l-100-f {
        padding-left: 100px !important;
    }

    .pd-lg-110 {
        padding: 110px;
    }

    .pd-lg-110-f {
        padding: 110px !important;
    }

    .pd-lg-y-110 {
        padding-top: 110px;
        padding-bottom: 110px;
    }

    .pd-lg-y-110-f {
        padding-top: 110px !important;
        padding-bottom: 110px !important;
    }

    .pd-lg-x-110 {
        padding-left: 110px;
        padding-right: 110px;
    }

    .pd-lg-x-110-f {
        padding-left: 110px !important;
        padding-right: 110px !important;
    }

    .pd-lg-t-110 {
        padding-top: 110px;
    }

    .pd-lg-r-110 {
        padding-right: 110px;
    }

    .pd-lg-b-110 {
        padding-bottom: 110px;
    }

    .pd-lg-l-110 {
        padding-left: 110px;
    }

    .pd-lg-t-110-f {
        padding-top: 110px !important;
    }

    .pd-lg-r-110-f {
        padding-right: 110px !important;
    }

    .pd-lg-b-110-f {
        padding-bottom: 110px !important;
    }

    .pd-lg-l-110-f {
        padding-left: 110px !important;
    }

    .pd-lg-120 {
        padding: 120px;
    }

    .pd-lg-120-f {
        padding: 120px !important;
    }

    .pd-lg-y-120 {
        padding-top: 120px;
        padding-bottom: 120px;
    }

    .pd-lg-y-120-f {
        padding-top: 120px !important;
        padding-bottom: 120px !important;
    }

    .pd-lg-x-120 {
        padding-left: 120px;
        padding-right: 120px;
    }

    .pd-lg-x-120-f {
        padding-left: 120px !important;
        padding-right: 120px !important;
    }

    .pd-lg-t-120 {
        padding-top: 120px;
    }

    .pd-lg-r-120 {
        padding-right: 120px;
    }

    .pd-lg-b-120 {
        padding-bottom: 120px;
    }

    .pd-lg-l-120 {
        padding-left: 120px;
    }

    .pd-lg-t-120-f {
        padding-top: 120px !important;
    }

    .pd-lg-r-120-f {
        padding-right: 120px !important;
    }

    .pd-lg-b-120-f {
        padding-bottom: 120px !important;
    }

    .pd-lg-l-120-f {
        padding-left: 120px !important;
    }

    .pd-lg-130 {
        padding: 130px;
    }

    .pd-lg-130-f {
        padding: 130px !important;
    }

    .pd-lg-y-130 {
        padding-top: 130px;
        padding-bottom: 130px;
    }

    .pd-lg-y-130-f {
        padding-top: 130px !important;
        padding-bottom: 130px !important;
    }

    .pd-lg-x-130 {
        padding-left: 130px;
        padding-right: 130px;
    }

    .pd-lg-x-130-f {
        padding-left: 130px !important;
        padding-right: 130px !important;
    }

    .pd-lg-t-130 {
        padding-top: 130px;
    }

    .pd-lg-r-130 {
        padding-right: 130px;
    }

    .pd-lg-b-130 {
        padding-bottom: 130px;
    }

    .pd-lg-l-130 {
        padding-left: 130px;
    }

    .pd-lg-t-130-f {
        padding-top: 130px !important;
    }

    .pd-lg-r-130-f {
        padding-right: 130px !important;
    }

    .pd-lg-b-130-f {
        padding-bottom: 130px !important;
    }

    .pd-lg-l-130-f {
        padding-left: 130px !important;
    }

    .pd-lg-140 {
        padding: 140px;
    }

    .pd-lg-140-f {
        padding: 140px !important;
    }

    .pd-lg-y-140 {
        padding-top: 140px;
        padding-bottom: 140px;
    }

    .pd-lg-y-140-f {
        padding-top: 140px !important;
        padding-bottom: 140px !important;
    }

    .pd-lg-x-140 {
        padding-left: 140px;
        padding-right: 140px;
    }

    .pd-lg-x-140-f {
        padding-left: 140px !important;
        padding-right: 140px !important;
    }

    .pd-lg-t-140 {
        padding-top: 140px;
    }

    .pd-lg-r-140 {
        padding-right: 140px;
    }

    .pd-lg-b-140 {
        padding-bottom: 140px;
    }

    .pd-lg-l-140 {
        padding-left: 140px;
    }

    .pd-lg-t-140-f {
        padding-top: 140px !important;
    }

    .pd-lg-r-140-f {
        padding-right: 140px !important;
    }

    .pd-lg-b-140-f {
        padding-bottom: 140px !important;
    }

    .pd-lg-l-140-f {
        padding-left: 140px !important;
    }

    .pd-lg-150 {
        padding: 150px;
    }

    .pd-lg-150-f {
        padding: 150px !important;
    }

    .pd-lg-y-150 {
        padding-top: 150px;
        padding-bottom: 150px;
    }

    .pd-lg-y-150-f {
        padding-top: 150px !important;
        padding-bottom: 150px !important;
    }

    .pd-lg-x-150 {
        padding-left: 150px;
        padding-right: 150px;
    }

    .pd-lg-x-150-f {
        padding-left: 150px !important;
        padding-right: 150px !important;
    }

    .pd-lg-t-150 {
        padding-top: 150px;
    }

    .pd-lg-r-150 {
        padding-right: 150px;
    }

    .pd-lg-b-150 {
        padding-bottom: 150px;
    }

    .pd-lg-l-150 {
        padding-left: 150px;
    }

    .pd-lg-t-150-f {
        padding-top: 150px !important;
    }

    .pd-lg-r-150-f {
        padding-right: 150px !important;
    }

    .pd-lg-b-150-f {
        padding-bottom: 150px !important;
    }

    .pd-lg-l-150-f {
        padding-left: 150px !important;
    }

    .pd-lg-160 {
        padding: 160px;
    }

    .pd-lg-160-f {
        padding: 160px !important;
    }

    .pd-lg-y-160 {
        padding-top: 160px;
        padding-bottom: 160px;
    }

    .pd-lg-y-160-f {
        padding-top: 160px !important;
        padding-bottom: 160px !important;
    }

    .pd-lg-x-160 {
        padding-left: 160px;
        padding-right: 160px;
    }

    .pd-lg-x-160-f {
        padding-left: 160px !important;
        padding-right: 160px !important;
    }

    .pd-lg-t-160 {
        padding-top: 160px;
    }

    .pd-lg-r-160 {
        padding-right: 160px;
    }

    .pd-lg-b-160 {
        padding-bottom: 160px;
    }

    .pd-lg-l-160 {
        padding-left: 160px;
    }

    .pd-lg-t-160-f {
        padding-top: 160px !important;
    }

    .pd-lg-r-160-f {
        padding-right: 160px !important;
    }

    .pd-lg-b-160-f {
        padding-bottom: 160px !important;
    }

    .pd-lg-l-160-f {
        padding-left: 160px !important;
    }

    .pd-lg-170 {
        padding: 170px;
    }

    .pd-lg-170-f {
        padding: 170px !important;
    }

    .pd-lg-y-170 {
        padding-top: 170px;
        padding-bottom: 170px;
    }

    .pd-lg-y-170-f {
        padding-top: 170px !important;
        padding-bottom: 170px !important;
    }

    .pd-lg-x-170 {
        padding-left: 170px;
        padding-right: 170px;
    }

    .pd-lg-x-170-f {
        padding-left: 170px !important;
        padding-right: 170px !important;
    }

    .pd-lg-t-170 {
        padding-top: 170px;
    }

    .pd-lg-r-170 {
        padding-right: 170px;
    }

    .pd-lg-b-170 {
        padding-bottom: 170px;
    }

    .pd-lg-l-170 {
        padding-left: 170px;
    }

    .pd-lg-t-170-f {
        padding-top: 170px !important;
    }

    .pd-lg-r-170-f {
        padding-right: 170px !important;
    }

    .pd-lg-b-170-f {
        padding-bottom: 170px !important;
    }

    .pd-lg-l-170-f {
        padding-left: 170px !important;
    }

    .pd-lg-180 {
        padding: 180px;
    }

    .pd-lg-180-f {
        padding: 180px !important;
    }

    .pd-lg-y-180 {
        padding-top: 180px;
        padding-bottom: 180px;
    }

    .pd-lg-y-180-f {
        padding-top: 180px !important;
        padding-bottom: 180px !important;
    }

    .pd-lg-x-180 {
        padding-left: 180px;
        padding-right: 180px;
    }

    .pd-lg-x-180-f {
        padding-left: 180px !important;
        padding-right: 180px !important;
    }

    .pd-lg-t-180 {
        padding-top: 180px;
    }

    .pd-lg-r-180 {
        padding-right: 180px;
    }

    .pd-lg-b-180 {
        padding-bottom: 180px;
    }

    .pd-lg-l-180 {
        padding-left: 180px;
    }

    .pd-lg-t-180-f {
        padding-top: 180px !important;
    }

    .pd-lg-r-180-f {
        padding-right: 180px !important;
    }

    .pd-lg-b-180-f {
        padding-bottom: 180px !important;
    }

    .pd-lg-l-180-f {
        padding-left: 180px !important;
    }

    .pd-lg-190 {
        padding: 190px;
    }

    .pd-lg-190-f {
        padding: 190px !important;
    }

    .pd-lg-y-190 {
        padding-top: 190px;
        padding-bottom: 190px;
    }

    .pd-lg-y-190-f {
        padding-top: 190px !important;
        padding-bottom: 190px !important;
    }

    .pd-lg-x-190 {
        padding-left: 190px;
        padding-right: 190px;
    }

    .pd-lg-x-190-f {
        padding-left: 190px !important;
        padding-right: 190px !important;
    }

    .pd-lg-t-190 {
        padding-top: 190px;
    }

    .pd-lg-r-190 {
        padding-right: 190px;
    }

    .pd-lg-b-190 {
        padding-bottom: 190px;
    }

    .pd-lg-l-190 {
        padding-left: 190px;
    }

    .pd-lg-t-190-f {
        padding-top: 190px !important;
    }

    .pd-lg-r-190-f {
        padding-right: 190px !important;
    }

    .pd-lg-b-190-f {
        padding-bottom: 190px !important;
    }

    .pd-lg-l-190-f {
        padding-left: 190px !important;
    }

    .pd-lg-200 {
        padding: 200px;
    }

    .pd-lg-200-f {
        padding: 200px !important;
    }

    .pd-lg-y-200 {
        padding-top: 200px;
        padding-bottom: 200px;
    }

    .pd-lg-y-200-f {
        padding-top: 200px !important;
        padding-bottom: 200px !important;
    }

    .pd-lg-x-200 {
        padding-left: 200px;
        padding-right: 200px;
    }

    .pd-lg-x-200-f {
        padding-left: 200px !important;
        padding-right: 200px !important;
    }

    .pd-lg-t-200 {
        padding-top: 200px;
    }

    .pd-lg-r-200 {
        padding-right: 200px;
    }

    .pd-lg-b-200 {
        padding-bottom: 200px;
    }

    .pd-lg-l-200 {
        padding-left: 200px;
    }

    .pd-lg-t-200-f {
        padding-top: 200px !important;
    }

    .pd-lg-r-200-f {
        padding-right: 200px !important;
    }

    .pd-lg-b-200-f {
        padding-bottom: 200px !important;
    }

    .pd-lg-l-200-f {
        padding-left: 200px !important;
    }
}

@media (min-width: 1200px) {
    .pd-xl-0 {
        padding: 0px;
    }

    .pd-xl-0-f {
        padding: 0px !important;
    }

    .pd-xl-y-0 {
        padding-top: 0px;
        padding-bottom: 0px;
    }

    .pd-xl-y-0-f {
        padding-top: 0px !important;
        padding-bottom: 0px !important;
    }

    .pd-xl-x-0 {
        padding-left: 0px;
        padding-right: 0px;
    }

    .pd-xl-x-0-f {
        padding-left: 0px !important;
        padding-right: 0px !important;
    }

    .pd-xl-t-0 {
        padding-top: 0px;
    }

    .pd-xl-r-0 {
        padding-right: 0px;
    }

    .pd-xl-b-0 {
        padding-bottom: 0px;
    }

    .pd-xl-l-0 {
        padding-left: 0px;
    }

    .pd-xl-t-0-f {
        padding-top: 0px !important;
    }

    .pd-xl-r-0-f {
        padding-right: 0px !important;
    }

    .pd-xl-b-0-f {
        padding-bottom: 0px !important;
    }

    .pd-xl-l-0-f {
        padding-left: 0px !important;
    }

    .pd-xl-1 {
        padding: 1px;
    }

    .pd-xl-1-f {
        padding: 1px !important;
    }

    .pd-xl-y-1 {
        padding-top: 1px;
        padding-bottom: 1px;
    }

    .pd-xl-y-1-f {
        padding-top: 1px !important;
        padding-bottom: 1px !important;
    }

    .pd-xl-x-1 {
        padding-left: 1px;
        padding-right: 1px;
    }

    .pd-xl-x-1-f {
        padding-left: 1px !important;
        padding-right: 1px !important;
    }

    .pd-xl-t-1 {
        padding-top: 1px;
    }

    .pd-xl-r-1 {
        padding-right: 1px;
    }

    .pd-xl-b-1 {
        padding-bottom: 1px;
    }

    .pd-xl-l-1 {
        padding-left: 1px;
    }

    .pd-xl-t-1-f {
        padding-top: 1px !important;
    }

    .pd-xl-r-1-f {
        padding-right: 1px !important;
    }

    .pd-xl-b-1-f {
        padding-bottom: 1px !important;
    }

    .pd-xl-l-1-f {
        padding-left: 1px !important;
    }

    .pd-xl-2 {
        padding: 2px;
    }

    .pd-xl-2-f {
        padding: 2px !important;
    }

    .pd-xl-y-2 {
        padding-top: 2px;
        padding-bottom: 2px;
    }

    .pd-xl-y-2-f {
        padding-top: 2px !important;
        padding-bottom: 2px !important;
    }

    .pd-xl-x-2 {
        padding-left: 2px;
        padding-right: 2px;
    }

    .pd-xl-x-2-f {
        padding-left: 2px !important;
        padding-right: 2px !important;
    }

    .pd-xl-t-2 {
        padding-top: 2px;
    }

    .pd-xl-r-2 {
        padding-right: 2px;
    }

    .pd-xl-b-2 {
        padding-bottom: 2px;
    }

    .pd-xl-l-2 {
        padding-left: 2px;
    }

    .pd-xl-t-2-f {
        padding-top: 2px !important;
    }

    .pd-xl-r-2-f {
        padding-right: 2px !important;
    }

    .pd-xl-b-2-f {
        padding-bottom: 2px !important;
    }

    .pd-xl-l-2-f {
        padding-left: 2px !important;
    }

    .pd-xl-3 {
        padding: 3px;
    }

    .pd-xl-3-f {
        padding: 3px !important;
    }

    .pd-xl-y-3 {
        padding-top: 3px;
        padding-bottom: 3px;
    }

    .pd-xl-y-3-f {
        padding-top: 3px !important;
        padding-bottom: 3px !important;
    }

    .pd-xl-x-3 {
        padding-left: 3px;
        padding-right: 3px;
    }

    .pd-xl-x-3-f {
        padding-left: 3px !important;
        padding-right: 3px !important;
    }

    .pd-xl-t-3 {
        padding-top: 3px;
    }

    .pd-xl-r-3 {
        padding-right: 3px;
    }

    .pd-xl-b-3 {
        padding-bottom: 3px;
    }

    .pd-xl-l-3 {
        padding-left: 3px;
    }

    .pd-xl-t-3-f {
        padding-top: 3px !important;
    }

    .pd-xl-r-3-f {
        padding-right: 3px !important;
    }

    .pd-xl-b-3-f {
        padding-bottom: 3px !important;
    }

    .pd-xl-l-3-f {
        padding-left: 3px !important;
    }

    .pd-xl-4 {
        padding: 4px;
    }

    .pd-xl-4-f {
        padding: 4px !important;
    }

    .pd-xl-y-4 {
        padding-top: 4px;
        padding-bottom: 4px;
    }

    .pd-xl-y-4-f {
        padding-top: 4px !important;
        padding-bottom: 4px !important;
    }

    .pd-xl-x-4 {
        padding-left: 4px;
        padding-right: 4px;
    }

    .pd-xl-x-4-f {
        padding-left: 4px !important;
        padding-right: 4px !important;
    }

    .pd-xl-t-4 {
        padding-top: 4px;
    }

    .pd-xl-r-4 {
        padding-right: 4px;
    }

    .pd-xl-b-4 {
        padding-bottom: 4px;
    }

    .pd-xl-l-4 {
        padding-left: 4px;
    }

    .pd-xl-t-4-f {
        padding-top: 4px !important;
    }

    .pd-xl-r-4-f {
        padding-right: 4px !important;
    }

    .pd-xl-b-4-f {
        padding-bottom: 4px !important;
    }

    .pd-xl-l-4-f {
        padding-left: 4px !important;
    }

    .pd-xl-5 {
        padding: 5px;
    }

    .pd-xl-5-f {
        padding: 5px !important;
    }

    .pd-xl-y-5 {
        padding-top: 5px;
        padding-bottom: 5px;
    }

    .pd-xl-y-5-f {
        padding-top: 5px !important;
        padding-bottom: 5px !important;
    }

    .pd-xl-x-5 {
        padding-left: 5px;
        padding-right: 5px;
    }

    .pd-xl-x-5-f {
        padding-left: 5px !important;
        padding-right: 5px !important;
    }

    .pd-xl-t-5 {
        padding-top: 5px;
    }

    .pd-xl-r-5 {
        padding-right: 5px;
    }

    .pd-xl-b-5 {
        padding-bottom: 5px;
    }

    .pd-xl-l-5 {
        padding-left: 5px;
    }

    .pd-xl-t-5-f {
        padding-top: 5px !important;
    }

    .pd-xl-r-5-f {
        padding-right: 5px !important;
    }

    .pd-xl-b-5-f {
        padding-bottom: 5px !important;
    }

    .pd-xl-l-5-f {
        padding-left: 5px !important;
    }

    .pd-xl-6 {
        padding: 6px;
    }

    .pd-xl-6-f {
        padding: 6px !important;
    }

    .pd-xl-y-6 {
        padding-top: 6px;
        padding-bottom: 6px;
    }

    .pd-xl-y-6-f {
        padding-top: 6px !important;
        padding-bottom: 6px !important;
    }

    .pd-xl-x-6 {
        padding-left: 6px;
        padding-right: 6px;
    }

    .pd-xl-x-6-f {
        padding-left: 6px !important;
        padding-right: 6px !important;
    }

    .pd-xl-t-6 {
        padding-top: 6px;
    }

    .pd-xl-r-6 {
        padding-right: 6px;
    }

    .pd-xl-b-6 {
        padding-bottom: 6px;
    }

    .pd-xl-l-6 {
        padding-left: 6px;
    }

    .pd-xl-t-6-f {
        padding-top: 6px !important;
    }

    .pd-xl-r-6-f {
        padding-right: 6px !important;
    }

    .pd-xl-b-6-f {
        padding-bottom: 6px !important;
    }

    .pd-xl-l-6-f {
        padding-left: 6px !important;
    }

    .pd-xl-7 {
        padding: 7px;
    }

    .pd-xl-7-f {
        padding: 7px !important;
    }

    .pd-xl-y-7 {
        padding-top: 7px;
        padding-bottom: 7px;
    }

    .pd-xl-y-7-f {
        padding-top: 7px !important;
        padding-bottom: 7px !important;
    }

    .pd-xl-x-7 {
        padding-left: 7px;
        padding-right: 7px;
    }

    .pd-xl-x-7-f {
        padding-left: 7px !important;
        padding-right: 7px !important;
    }

    .pd-xl-t-7 {
        padding-top: 7px;
    }

    .pd-xl-r-7 {
        padding-right: 7px;
    }

    .pd-xl-b-7 {
        padding-bottom: 7px;
    }

    .pd-xl-l-7 {
        padding-left: 7px;
    }

    .pd-xl-t-7-f {
        padding-top: 7px !important;
    }

    .pd-xl-r-7-f {
        padding-right: 7px !important;
    }

    .pd-xl-b-7-f {
        padding-bottom: 7px !important;
    }

    .pd-xl-l-7-f {
        padding-left: 7px !important;
    }

    .pd-xl-8 {
        padding: 8px;
    }

    .pd-xl-8-f {
        padding: 8px !important;
    }

    .pd-xl-y-8 {
        padding-top: 8px;
        padding-bottom: 8px;
    }

    .pd-xl-y-8-f {
        padding-top: 8px !important;
        padding-bottom: 8px !important;
    }

    .pd-xl-x-8 {
        padding-left: 8px;
        padding-right: 8px;
    }

    .pd-xl-x-8-f {
        padding-left: 8px !important;
        padding-right: 8px !important;
    }

    .pd-xl-t-8 {
        padding-top: 8px;
    }

    .pd-xl-r-8 {
        padding-right: 8px;
    }

    .pd-xl-b-8 {
        padding-bottom: 8px;
    }

    .pd-xl-l-8 {
        padding-left: 8px;
    }

    .pd-xl-t-8-f {
        padding-top: 8px !important;
    }

    .pd-xl-r-8-f {
        padding-right: 8px !important;
    }

    .pd-xl-b-8-f {
        padding-bottom: 8px !important;
    }

    .pd-xl-l-8-f {
        padding-left: 8px !important;
    }

    .pd-xl-9 {
        padding: 9px;
    }

    .pd-xl-9-f {
        padding: 9px !important;
    }

    .pd-xl-y-9 {
        padding-top: 9px;
        padding-bottom: 9px;
    }

    .pd-xl-y-9-f {
        padding-top: 9px !important;
        padding-bottom: 9px !important;
    }

    .pd-xl-x-9 {
        padding-left: 9px;
        padding-right: 9px;
    }

    .pd-xl-x-9-f {
        padding-left: 9px !important;
        padding-right: 9px !important;
    }

    .pd-xl-t-9 {
        padding-top: 9px;
    }

    .pd-xl-r-9 {
        padding-right: 9px;
    }

    .pd-xl-b-9 {
        padding-bottom: 9px;
    }

    .pd-xl-l-9 {
        padding-left: 9px;
    }

    .pd-xl-t-9-f {
        padding-top: 9px !important;
    }

    .pd-xl-r-9-f {
        padding-right: 9px !important;
    }

    .pd-xl-b-9-f {
        padding-bottom: 9px !important;
    }

    .pd-xl-l-9-f {
        padding-left: 9px !important;
    }

    .pd-xl-10 {
        padding: 10px;
    }

    .pd-xl-10-f {
        padding: 10px !important;
    }

    .pd-xl-y-10 {
        padding-top: 10px;
        padding-bottom: 10px;
    }

    .pd-xl-y-10-f {
        padding-top: 10px !important;
        padding-bottom: 10px !important;
    }

    .pd-xl-x-10 {
        padding-left: 10px;
        padding-right: 10px;
    }

    .pd-xl-x-10-f {
        padding-left: 10px !important;
        padding-right: 10px !important;
    }

    .pd-xl-t-10 {
        padding-top: 10px;
    }

    .pd-xl-r-10 {
        padding-right: 10px;
    }

    .pd-xl-b-10 {
        padding-bottom: 10px;
    }

    .pd-xl-l-10 {
        padding-left: 10px;
    }

    .pd-xl-t-10-f {
        padding-top: 10px !important;
    }

    .pd-xl-r-10-f {
        padding-right: 10px !important;
    }

    .pd-xl-b-10-f {
        padding-bottom: 10px !important;
    }

    .pd-xl-l-10-f {
        padding-left: 10px !important;
    }

    .pd-xl-15 {
        padding: 15px;
    }

    .pd-xl-15-f {
        padding: 15px !important;
    }

    .pd-xl-y-15 {
        padding-top: 15px;
        padding-bottom: 15px;
    }

    .pd-xl-y-15-f {
        padding-top: 15px !important;
        padding-bottom: 15px !important;
    }

    .pd-xl-x-15 {
        padding-left: 15px;
        padding-right: 15px;
    }

    .pd-xl-x-15-f {
        padding-left: 15px !important;
        padding-right: 15px !important;
    }

    .pd-xl-t-15 {
        padding-top: 15px;
    }

    .pd-xl-r-15 {
        padding-right: 15px;
    }

    .pd-xl-b-15 {
        padding-bottom: 15px;
    }

    .pd-xl-l-15 {
        padding-left: 15px;
    }

    .pd-xl-t-15-f {
        padding-top: 15px !important;
    }

    .pd-xl-r-15-f {
        padding-right: 15px !important;
    }

    .pd-xl-b-15-f {
        padding-bottom: 15px !important;
    }

    .pd-xl-l-15-f {
        padding-left: 15px !important;
    }

    .pd-xl-20 {
        padding: 20px;
    }

    .pd-xl-20-f {
        padding: 20px !important;
    }

    .pd-xl-y-20 {
        padding-top: 20px;
        padding-bottom: 20px;
    }

    .pd-xl-y-20-f {
        padding-top: 20px !important;
        padding-bottom: 20px !important;
    }

    .pd-xl-x-20 {
        padding-left: 20px;
        padding-right: 20px;
    }

    .pd-xl-x-20-f {
        padding-left: 20px !important;
        padding-right: 20px !important;
    }

    .pd-xl-t-20 {
        padding-top: 20px;
    }

    .pd-xl-r-20 {
        padding-right: 20px;
    }

    .pd-xl-b-20 {
        padding-bottom: 20px;
    }

    .pd-xl-l-20 {
        padding-left: 20px;
    }

    .pd-xl-t-20-f {
        padding-top: 20px !important;
    }

    .pd-xl-r-20-f {
        padding-right: 20px !important;
    }

    .pd-xl-b-20-f {
        padding-bottom: 20px !important;
    }

    .pd-xl-l-20-f {
        padding-left: 20px !important;
    }

    .pd-xl-25 {
        padding: 25px;
    }

    .pd-xl-25-f {
        padding: 25px !important;
    }

    .pd-xl-y-25 {
        padding-top: 25px;
        padding-bottom: 25px;
    }

    .pd-xl-y-25-f {
        padding-top: 25px !important;
        padding-bottom: 25px !important;
    }

    .pd-xl-x-25 {
        padding-left: 25px;
        padding-right: 25px;
    }

    .pd-xl-x-25-f {
        padding-left: 25px !important;
        padding-right: 25px !important;
    }

    .pd-xl-t-25 {
        padding-top: 25px;
    }

    .pd-xl-r-25 {
        padding-right: 25px;
    }

    .pd-xl-b-25 {
        padding-bottom: 25px;
    }

    .pd-xl-l-25 {
        padding-left: 25px;
    }

    .pd-xl-t-25-f {
        padding-top: 25px !important;
    }

    .pd-xl-r-25-f {
        padding-right: 25px !important;
    }

    .pd-xl-b-25-f {
        padding-bottom: 25px !important;
    }

    .pd-xl-l-25-f {
        padding-left: 25px !important;
    }

    .pd-xl-30 {
        padding: 30px;
    }

    .pd-xl-30-f {
        padding: 30px !important;
    }

    .pd-xl-y-30 {
        padding-top: 30px;
        padding-bottom: 30px;
    }

    .pd-xl-y-30-f {
        padding-top: 30px !important;
        padding-bottom: 30px !important;
    }

    .pd-xl-x-30 {
        padding-left: 30px;
        padding-right: 30px;
    }

    .pd-xl-x-30-f {
        padding-left: 30px !important;
        padding-right: 30px !important;
    }

    .pd-xl-t-30 {
        padding-top: 30px;
    }

    .pd-xl-r-30 {
        padding-right: 30px;
    }

    .pd-xl-b-30 {
        padding-bottom: 30px;
    }

    .pd-xl-l-30 {
        padding-left: 30px;
    }

    .pd-xl-t-30-f {
        padding-top: 30px !important;
    }

    .pd-xl-r-30-f {
        padding-right: 30px !important;
    }

    .pd-xl-b-30-f {
        padding-bottom: 30px !important;
    }

    .pd-xl-l-30-f {
        padding-left: 30px !important;
    }

    .pd-xl-35 {
        padding: 35px;
    }

    .pd-xl-35-f {
        padding: 35px !important;
    }

    .pd-xl-y-35 {
        padding-top: 35px;
        padding-bottom: 35px;
    }

    .pd-xl-y-35-f {
        padding-top: 35px !important;
        padding-bottom: 35px !important;
    }

    .pd-xl-x-35 {
        padding-left: 35px;
        padding-right: 35px;
    }

    .pd-xl-x-35-f {
        padding-left: 35px !important;
        padding-right: 35px !important;
    }

    .pd-xl-t-35 {
        padding-top: 35px;
    }

    .pd-xl-r-35 {
        padding-right: 35px;
    }

    .pd-xl-b-35 {
        padding-bottom: 35px;
    }

    .pd-xl-l-35 {
        padding-left: 35px;
    }

    .pd-xl-t-35-f {
        padding-top: 35px !important;
    }

    .pd-xl-r-35-f {
        padding-right: 35px !important;
    }

    .pd-xl-b-35-f {
        padding-bottom: 35px !important;
    }

    .pd-xl-l-35-f {
        padding-left: 35px !important;
    }

    .pd-xl-40 {
        padding: 40px;
    }

    .pd-xl-40-f {
        padding: 40px !important;
    }

    .pd-xl-y-40 {
        padding-top: 40px;
        padding-bottom: 40px;
    }

    .pd-xl-y-40-f {
        padding-top: 40px !important;
        padding-bottom: 40px !important;
    }

    .pd-xl-x-40 {
        padding-left: 40px;
        padding-right: 40px;
    }

    .pd-xl-x-40-f {
        padding-left: 40px !important;
        padding-right: 40px !important;
    }

    .pd-xl-t-40 {
        padding-top: 40px;
    }

    .pd-xl-r-40 {
        padding-right: 40px;
    }

    .pd-xl-b-40 {
        padding-bottom: 40px;
    }

    .pd-xl-l-40 {
        padding-left: 40px;
    }

    .pd-xl-t-40-f {
        padding-top: 40px !important;
    }

    .pd-xl-r-40-f {
        padding-right: 40px !important;
    }

    .pd-xl-b-40-f {
        padding-bottom: 40px !important;
    }

    .pd-xl-l-40-f {
        padding-left: 40px !important;
    }

    .pd-xl-45 {
        padding: 45px;
    }

    .pd-xl-45-f {
        padding: 45px !important;
    }

    .pd-xl-y-45 {
        padding-top: 45px;
        padding-bottom: 45px;
    }

    .pd-xl-y-45-f {
        padding-top: 45px !important;
        padding-bottom: 45px !important;
    }

    .pd-xl-x-45 {
        padding-left: 45px;
        padding-right: 45px;
    }

    .pd-xl-x-45-f {
        padding-left: 45px !important;
        padding-right: 45px !important;
    }

    .pd-xl-t-45 {
        padding-top: 45px;
    }

    .pd-xl-r-45 {
        padding-right: 45px;
    }

    .pd-xl-b-45 {
        padding-bottom: 45px;
    }

    .pd-xl-l-45 {
        padding-left: 45px;
    }

    .pd-xl-t-45-f {
        padding-top: 45px !important;
    }

    .pd-xl-r-45-f {
        padding-right: 45px !important;
    }

    .pd-xl-b-45-f {
        padding-bottom: 45px !important;
    }

    .pd-xl-l-45-f {
        padding-left: 45px !important;
    }

    .pd-xl-50 {
        padding: 50px;
    }

    .pd-xl-50-f {
        padding: 50px !important;
    }

    .pd-xl-y-50 {
        padding-top: 50px;
        padding-bottom: 50px;
    }

    .pd-xl-y-50-f {
        padding-top: 50px !important;
        padding-bottom: 50px !important;
    }

    .pd-xl-x-50 {
        padding-left: 50px;
        padding-right: 50px;
    }

    .pd-xl-x-50-f {
        padding-left: 50px !important;
        padding-right: 50px !important;
    }

    .pd-xl-t-50 {
        padding-top: 50px;
    }

    .pd-xl-r-50 {
        padding-right: 50px;
    }

    .pd-xl-b-50 {
        padding-bottom: 50px;
    }

    .pd-xl-l-50 {
        padding-left: 50px;
    }

    .pd-xl-t-50-f {
        padding-top: 50px !important;
    }

    .pd-xl-r-50-f {
        padding-right: 50px !important;
    }

    .pd-xl-b-50-f {
        padding-bottom: 50px !important;
    }

    .pd-xl-l-50-f {
        padding-left: 50px !important;
    }

    .pd-xl-55 {
        padding: 55px;
    }

    .pd-xl-55-f {
        padding: 55px !important;
    }

    .pd-xl-y-55 {
        padding-top: 55px;
        padding-bottom: 55px;
    }

    .pd-xl-y-55-f {
        padding-top: 55px !important;
        padding-bottom: 55px !important;
    }

    .pd-xl-x-55 {
        padding-left: 55px;
        padding-right: 55px;
    }

    .pd-xl-x-55-f {
        padding-left: 55px !important;
        padding-right: 55px !important;
    }

    .pd-xl-t-55 {
        padding-top: 55px;
    }

    .pd-xl-r-55 {
        padding-right: 55px;
    }

    .pd-xl-b-55 {
        padding-bottom: 55px;
    }

    .pd-xl-l-55 {
        padding-left: 55px;
    }

    .pd-xl-t-55-f {
        padding-top: 55px !important;
    }

    .pd-xl-r-55-f {
        padding-right: 55px !important;
    }

    .pd-xl-b-55-f {
        padding-bottom: 55px !important;
    }

    .pd-xl-l-55-f {
        padding-left: 55px !important;
    }

    .pd-xl-60 {
        padding: 60px;
    }

    .pd-xl-60-f {
        padding: 60px !important;
    }

    .pd-xl-y-60 {
        padding-top: 60px;
        padding-bottom: 60px;
    }

    .pd-xl-y-60-f {
        padding-top: 60px !important;
        padding-bottom: 60px !important;
    }

    .pd-xl-x-60 {
        padding-left: 60px;
        padding-right: 60px;
    }

    .pd-xl-x-60-f {
        padding-left: 60px !important;
        padding-right: 60px !important;
    }

    .pd-xl-t-60 {
        padding-top: 60px;
    }

    .pd-xl-r-60 {
        padding-right: 60px;
    }

    .pd-xl-b-60 {
        padding-bottom: 60px;
    }

    .pd-xl-l-60 {
        padding-left: 60px;
    }

    .pd-xl-t-60-f {
        padding-top: 60px !important;
    }

    .pd-xl-r-60-f {
        padding-right: 60px !important;
    }

    .pd-xl-b-60-f {
        padding-bottom: 60px !important;
    }

    .pd-xl-l-60-f {
        padding-left: 60px !important;
    }

    .pd-xl-65 {
        padding: 65px;
    }

    .pd-xl-65-f {
        padding: 65px !important;
    }

    .pd-xl-y-65 {
        padding-top: 65px;
        padding-bottom: 65px;
    }

    .pd-xl-y-65-f {
        padding-top: 65px !important;
        padding-bottom: 65px !important;
    }

    .pd-xl-x-65 {
        padding-left: 65px;
        padding-right: 65px;
    }

    .pd-xl-x-65-f {
        padding-left: 65px !important;
        padding-right: 65px !important;
    }

    .pd-xl-t-65 {
        padding-top: 65px;
    }

    .pd-xl-r-65 {
        padding-right: 65px;
    }

    .pd-xl-b-65 {
        padding-bottom: 65px;
    }

    .pd-xl-l-65 {
        padding-left: 65px;
    }

    .pd-xl-t-65-f {
        padding-top: 65px !important;
    }

    .pd-xl-r-65-f {
        padding-right: 65px !important;
    }

    .pd-xl-b-65-f {
        padding-bottom: 65px !important;
    }

    .pd-xl-l-65-f {
        padding-left: 65px !important;
    }

    .pd-xl-70 {
        padding: 70px;
    }

    .pd-xl-70-f {
        padding: 70px !important;
    }

    .pd-xl-y-70 {
        padding-top: 70px;
        padding-bottom: 70px;
    }

    .pd-xl-y-70-f {
        padding-top: 70px !important;
        padding-bottom: 70px !important;
    }

    .pd-xl-x-70 {
        padding-left: 70px;
        padding-right: 70px;
    }

    .pd-xl-x-70-f {
        padding-left: 70px !important;
        padding-right: 70px !important;
    }

    .pd-xl-t-70 {
        padding-top: 70px;
    }

    .pd-xl-r-70 {
        padding-right: 70px;
    }

    .pd-xl-b-70 {
        padding-bottom: 70px;
    }

    .pd-xl-l-70 {
        padding-left: 70px;
    }

    .pd-xl-t-70-f {
        padding-top: 70px !important;
    }

    .pd-xl-r-70-f {
        padding-right: 70px !important;
    }

    .pd-xl-b-70-f {
        padding-bottom: 70px !important;
    }

    .pd-xl-l-70-f {
        padding-left: 70px !important;
    }

    .pd-xl-75 {
        padding: 75px;
    }

    .pd-xl-75-f {
        padding: 75px !important;
    }

    .pd-xl-y-75 {
        padding-top: 75px;
        padding-bottom: 75px;
    }

    .pd-xl-y-75-f {
        padding-top: 75px !important;
        padding-bottom: 75px !important;
    }

    .pd-xl-x-75 {
        padding-left: 75px;
        padding-right: 75px;
    }

    .pd-xl-x-75-f {
        padding-left: 75px !important;
        padding-right: 75px !important;
    }

    .pd-xl-t-75 {
        padding-top: 75px;
    }

    .pd-xl-r-75 {
        padding-right: 75px;
    }

    .pd-xl-b-75 {
        padding-bottom: 75px;
    }

    .pd-xl-l-75 {
        padding-left: 75px;
    }

    .pd-xl-t-75-f {
        padding-top: 75px !important;
    }

    .pd-xl-r-75-f {
        padding-right: 75px !important;
    }

    .pd-xl-b-75-f {
        padding-bottom: 75px !important;
    }

    .pd-xl-l-75-f {
        padding-left: 75px !important;
    }

    .pd-xl-80 {
        padding: 80px;
    }

    .pd-xl-80-f {
        padding: 80px !important;
    }

    .pd-xl-y-80 {
        padding-top: 80px;
        padding-bottom: 80px;
    }

    .pd-xl-y-80-f {
        padding-top: 80px !important;
        padding-bottom: 80px !important;
    }

    .pd-xl-x-80 {
        padding-left: 80px;
        padding-right: 80px;
    }

    .pd-xl-x-80-f {
        padding-left: 80px !important;
        padding-right: 80px !important;
    }

    .pd-xl-t-80 {
        padding-top: 80px;
    }

    .pd-xl-r-80 {
        padding-right: 80px;
    }

    .pd-xl-b-80 {
        padding-bottom: 80px;
    }

    .pd-xl-l-80 {
        padding-left: 80px;
    }

    .pd-xl-t-80-f {
        padding-top: 80px !important;
    }

    .pd-xl-r-80-f {
        padding-right: 80px !important;
    }

    .pd-xl-b-80-f {
        padding-bottom: 80px !important;
    }

    .pd-xl-l-80-f {
        padding-left: 80px !important;
    }

    .pd-xl-85 {
        padding: 85px;
    }

    .pd-xl-85-f {
        padding: 85px !important;
    }

    .pd-xl-y-85 {
        padding-top: 85px;
        padding-bottom: 85px;
    }

    .pd-xl-y-85-f {
        padding-top: 85px !important;
        padding-bottom: 85px !important;
    }

    .pd-xl-x-85 {
        padding-left: 85px;
        padding-right: 85px;
    }

    .pd-xl-x-85-f {
        padding-left: 85px !important;
        padding-right: 85px !important;
    }

    .pd-xl-t-85 {
        padding-top: 85px;
    }

    .pd-xl-r-85 {
        padding-right: 85px;
    }

    .pd-xl-b-85 {
        padding-bottom: 85px;
    }

    .pd-xl-l-85 {
        padding-left: 85px;
    }

    .pd-xl-t-85-f {
        padding-top: 85px !important;
    }

    .pd-xl-r-85-f {
        padding-right: 85px !important;
    }

    .pd-xl-b-85-f {
        padding-bottom: 85px !important;
    }

    .pd-xl-l-85-f {
        padding-left: 85px !important;
    }

    .pd-xl-90 {
        padding: 90px;
    }

    .pd-xl-90-f {
        padding: 90px !important;
    }

    .pd-xl-y-90 {
        padding-top: 90px;
        padding-bottom: 90px;
    }

    .pd-xl-y-90-f {
        padding-top: 90px !important;
        padding-bottom: 90px !important;
    }

    .pd-xl-x-90 {
        padding-left: 90px;
        padding-right: 90px;
    }

    .pd-xl-x-90-f {
        padding-left: 90px !important;
        padding-right: 90px !important;
    }

    .pd-xl-t-90 {
        padding-top: 90px;
    }

    .pd-xl-r-90 {
        padding-right: 90px;
    }

    .pd-xl-b-90 {
        padding-bottom: 90px;
    }

    .pd-xl-l-90 {
        padding-left: 90px;
    }

    .pd-xl-t-90-f {
        padding-top: 90px !important;
    }

    .pd-xl-r-90-f {
        padding-right: 90px !important;
    }

    .pd-xl-b-90-f {
        padding-bottom: 90px !important;
    }

    .pd-xl-l-90-f {
        padding-left: 90px !important;
    }

    .pd-xl-95 {
        padding: 95px;
    }

    .pd-xl-95-f {
        padding: 95px !important;
    }

    .pd-xl-y-95 {
        padding-top: 95px;
        padding-bottom: 95px;
    }

    .pd-xl-y-95-f {
        padding-top: 95px !important;
        padding-bottom: 95px !important;
    }

    .pd-xl-x-95 {
        padding-left: 95px;
        padding-right: 95px;
    }

    .pd-xl-x-95-f {
        padding-left: 95px !important;
        padding-right: 95px !important;
    }

    .pd-xl-t-95 {
        padding-top: 95px;
    }

    .pd-xl-r-95 {
        padding-right: 95px;
    }

    .pd-xl-b-95 {
        padding-bottom: 95px;
    }

    .pd-xl-l-95 {
        padding-left: 95px;
    }

    .pd-xl-t-95-f {
        padding-top: 95px !important;
    }

    .pd-xl-r-95-f {
        padding-right: 95px !important;
    }

    .pd-xl-b-95-f {
        padding-bottom: 95px !important;
    }

    .pd-xl-l-95-f {
        padding-left: 95px !important;
    }

    .pd-xl-100 {
        padding: 100px;
    }

    .pd-xl-100-f {
        padding: 100px !important;
    }

    .pd-xl-y-100 {
        padding-top: 100px;
        padding-bottom: 100px;
    }

    .pd-xl-y-100-f {
        padding-top: 100px !important;
        padding-bottom: 100px !important;
    }

    .pd-xl-x-100 {
        padding-left: 100px;
        padding-right: 100px;
    }

    .pd-xl-x-100-f {
        padding-left: 100px !important;
        padding-right: 100px !important;
    }

    .pd-xl-t-100 {
        padding-top: 100px;
    }

    .pd-xl-r-100 {
        padding-right: 100px;
    }

    .pd-xl-b-100 {
        padding-bottom: 100px;
    }

    .pd-xl-l-100 {
        padding-left: 100px;
    }

    .pd-xl-t-100-f {
        padding-top: 100px !important;
    }

    .pd-xl-r-100-f {
        padding-right: 100px !important;
    }

    .pd-xl-b-100-f {
        padding-bottom: 100px !important;
    }

    .pd-xl-l-100-f {
        padding-left: 100px !important;
    }

    .pd-xl-110 {
        padding: 110px;
    }

    .pd-xl-110-f {
        padding: 110px !important;
    }

    .pd-xl-y-110 {
        padding-top: 110px;
        padding-bottom: 110px;
    }

    .pd-xl-y-110-f {
        padding-top: 110px !important;
        padding-bottom: 110px !important;
    }

    .pd-xl-x-110 {
        padding-left: 110px;
        padding-right: 110px;
    }

    .pd-xl-x-110-f {
        padding-left: 110px !important;
        padding-right: 110px !important;
    }

    .pd-xl-t-110 {
        padding-top: 110px;
    }

    .pd-xl-r-110 {
        padding-right: 110px;
    }

    .pd-xl-b-110 {
        padding-bottom: 110px;
    }

    .pd-xl-l-110 {
        padding-left: 110px;
    }

    .pd-xl-t-110-f {
        padding-top: 110px !important;
    }

    .pd-xl-r-110-f {
        padding-right: 110px !important;
    }

    .pd-xl-b-110-f {
        padding-bottom: 110px !important;
    }

    .pd-xl-l-110-f {
        padding-left: 110px !important;
    }

    .pd-xl-120 {
        padding: 120px;
    }

    .pd-xl-120-f {
        padding: 120px !important;
    }

    .pd-xl-y-120 {
        padding-top: 120px;
        padding-bottom: 120px;
    }

    .pd-xl-y-120-f {
        padding-top: 120px !important;
        padding-bottom: 120px !important;
    }

    .pd-xl-x-120 {
        padding-left: 120px;
        padding-right: 120px;
    }

    .pd-xl-x-120-f {
        padding-left: 120px !important;
        padding-right: 120px !important;
    }

    .pd-xl-t-120 {
        padding-top: 120px;
    }

    .pd-xl-r-120 {
        padding-right: 120px;
    }

    .pd-xl-b-120 {
        padding-bottom: 120px;
    }

    .pd-xl-l-120 {
        padding-left: 120px;
    }

    .pd-xl-t-120-f {
        padding-top: 120px !important;
    }

    .pd-xl-r-120-f {
        padding-right: 120px !important;
    }

    .pd-xl-b-120-f {
        padding-bottom: 120px !important;
    }

    .pd-xl-l-120-f {
        padding-left: 120px !important;
    }

    .pd-xl-130 {
        padding: 130px;
    }

    .pd-xl-130-f {
        padding: 130px !important;
    }

    .pd-xl-y-130 {
        padding-top: 130px;
        padding-bottom: 130px;
    }

    .pd-xl-y-130-f {
        padding-top: 130px !important;
        padding-bottom: 130px !important;
    }

    .pd-xl-x-130 {
        padding-left: 130px;
        padding-right: 130px;
    }

    .pd-xl-x-130-f {
        padding-left: 130px !important;
        padding-right: 130px !important;
    }

    .pd-xl-t-130 {
        padding-top: 130px;
    }

    .pd-xl-r-130 {
        padding-right: 130px;
    }

    .pd-xl-b-130 {
        padding-bottom: 130px;
    }

    .pd-xl-l-130 {
        padding-left: 130px;
    }

    .pd-xl-t-130-f {
        padding-top: 130px !important;
    }

    .pd-xl-r-130-f {
        padding-right: 130px !important;
    }

    .pd-xl-b-130-f {
        padding-bottom: 130px !important;
    }

    .pd-xl-l-130-f {
        padding-left: 130px !important;
    }

    .pd-xl-140 {
        padding: 140px;
    }

    .pd-xl-140-f {
        padding: 140px !important;
    }

    .pd-xl-y-140 {
        padding-top: 140px;
        padding-bottom: 140px;
    }

    .pd-xl-y-140-f {
        padding-top: 140px !important;
        padding-bottom: 140px !important;
    }

    .pd-xl-x-140 {
        padding-left: 140px;
        padding-right: 140px;
    }

    .pd-xl-x-140-f {
        padding-left: 140px !important;
        padding-right: 140px !important;
    }

    .pd-xl-t-140 {
        padding-top: 140px;
    }

    .pd-xl-r-140 {
        padding-right: 140px;
    }

    .pd-xl-b-140 {
        padding-bottom: 140px;
    }

    .pd-xl-l-140 {
        padding-left: 140px;
    }

    .pd-xl-t-140-f {
        padding-top: 140px !important;
    }

    .pd-xl-r-140-f {
        padding-right: 140px !important;
    }

    .pd-xl-b-140-f {
        padding-bottom: 140px !important;
    }

    .pd-xl-l-140-f {
        padding-left: 140px !important;
    }

    .pd-xl-150 {
        padding: 150px;
    }

    .pd-xl-150-f {
        padding: 150px !important;
    }

    .pd-xl-y-150 {
        padding-top: 150px;
        padding-bottom: 150px;
    }

    .pd-xl-y-150-f {
        padding-top: 150px !important;
        padding-bottom: 150px !important;
    }

    .pd-xl-x-150 {
        padding-left: 150px;
        padding-right: 150px;
    }

    .pd-xl-x-150-f {
        padding-left: 150px !important;
        padding-right: 150px !important;
    }

    .pd-xl-t-150 {
        padding-top: 150px;
    }

    .pd-xl-r-150 {
        padding-right: 150px;
    }

    .pd-xl-b-150 {
        padding-bottom: 150px;
    }

    .pd-xl-l-150 {
        padding-left: 150px;
    }

    .pd-xl-t-150-f {
        padding-top: 150px !important;
    }

    .pd-xl-r-150-f {
        padding-right: 150px !important;
    }

    .pd-xl-b-150-f {
        padding-bottom: 150px !important;
    }

    .pd-xl-l-150-f {
        padding-left: 150px !important;
    }

    .pd-xl-160 {
        padding: 160px;
    }

    .pd-xl-160-f {
        padding: 160px !important;
    }

    .pd-xl-y-160 {
        padding-top: 160px;
        padding-bottom: 160px;
    }

    .pd-xl-y-160-f {
        padding-top: 160px !important;
        padding-bottom: 160px !important;
    }

    .pd-xl-x-160 {
        padding-left: 160px;
        padding-right: 160px;
    }

    .pd-xl-x-160-f {
        padding-left: 160px !important;
        padding-right: 160px !important;
    }

    .pd-xl-t-160 {
        padding-top: 160px;
    }

    .pd-xl-r-160 {
        padding-right: 160px;
    }

    .pd-xl-b-160 {
        padding-bottom: 160px;
    }

    .pd-xl-l-160 {
        padding-left: 160px;
    }

    .pd-xl-t-160-f {
        padding-top: 160px !important;
    }

    .pd-xl-r-160-f {
        padding-right: 160px !important;
    }

    .pd-xl-b-160-f {
        padding-bottom: 160px !important;
    }

    .pd-xl-l-160-f {
        padding-left: 160px !important;
    }

    .pd-xl-170 {
        padding: 170px;
    }

    .pd-xl-170-f {
        padding: 170px !important;
    }

    .pd-xl-y-170 {
        padding-top: 170px;
        padding-bottom: 170px;
    }

    .pd-xl-y-170-f {
        padding-top: 170px !important;
        padding-bottom: 170px !important;
    }

    .pd-xl-x-170 {
        padding-left: 170px;
        padding-right: 170px;
    }

    .pd-xl-x-170-f {
        padding-left: 170px !important;
        padding-right: 170px !important;
    }

    .pd-xl-t-170 {
        padding-top: 170px;
    }

    .pd-xl-r-170 {
        padding-right: 170px;
    }

    .pd-xl-b-170 {
        padding-bottom: 170px;
    }

    .pd-xl-l-170 {
        padding-left: 170px;
    }

    .pd-xl-t-170-f {
        padding-top: 170px !important;
    }

    .pd-xl-r-170-f {
        padding-right: 170px !important;
    }

    .pd-xl-b-170-f {
        padding-bottom: 170px !important;
    }

    .pd-xl-l-170-f {
        padding-left: 170px !important;
    }

    .pd-xl-180 {
        padding: 180px;
    }

    .pd-xl-180-f {
        padding: 180px !important;
    }

    .pd-xl-y-180 {
        padding-top: 180px;
        padding-bottom: 180px;
    }

    .pd-xl-y-180-f {
        padding-top: 180px !important;
        padding-bottom: 180px !important;
    }

    .pd-xl-x-180 {
        padding-left: 180px;
        padding-right: 180px;
    }

    .pd-xl-x-180-f {
        padding-left: 180px !important;
        padding-right: 180px !important;
    }

    .pd-xl-t-180 {
        padding-top: 180px;
    }

    .pd-xl-r-180 {
        padding-right: 180px;
    }

    .pd-xl-b-180 {
        padding-bottom: 180px;
    }

    .pd-xl-l-180 {
        padding-left: 180px;
    }

    .pd-xl-t-180-f {
        padding-top: 180px !important;
    }

    .pd-xl-r-180-f {
        padding-right: 180px !important;
    }

    .pd-xl-b-180-f {
        padding-bottom: 180px !important;
    }

    .pd-xl-l-180-f {
        padding-left: 180px !important;
    }

    .pd-xl-190 {
        padding: 190px;
    }

    .pd-xl-190-f {
        padding: 190px !important;
    }

    .pd-xl-y-190 {
        padding-top: 190px;
        padding-bottom: 190px;
    }

    .pd-xl-y-190-f {
        padding-top: 190px !important;
        padding-bottom: 190px !important;
    }

    .pd-xl-x-190 {
        padding-left: 190px;
        padding-right: 190px;
    }

    .pd-xl-x-190-f {
        padding-left: 190px !important;
        padding-right: 190px !important;
    }

    .pd-xl-t-190 {
        padding-top: 190px;
    }

    .pd-xl-r-190 {
        padding-right: 190px;
    }

    .pd-xl-b-190 {
        padding-bottom: 190px;
    }

    .pd-xl-l-190 {
        padding-left: 190px;
    }

    .pd-xl-t-190-f {
        padding-top: 190px !important;
    }

    .pd-xl-r-190-f {
        padding-right: 190px !important;
    }

    .pd-xl-b-190-f {
        padding-bottom: 190px !important;
    }

    .pd-xl-l-190-f {
        padding-left: 190px !important;
    }

    .pd-xl-200 {
        padding: 200px;
    }

    .pd-xl-200-f {
        padding: 200px !important;
    }

    .pd-xl-y-200 {
        padding-top: 200px;
        padding-bottom: 200px;
    }

    .pd-xl-y-200-f {
        padding-top: 200px !important;
        padding-bottom: 200px !important;
    }

    .pd-xl-x-200 {
        padding-left: 200px;
        padding-right: 200px;
    }

    .pd-xl-x-200-f {
        padding-left: 200px !important;
        padding-right: 200px !important;
    }

    .pd-xl-t-200 {
        padding-top: 200px;
    }

    .pd-xl-r-200 {
        padding-right: 200px;
    }

    .pd-xl-b-200 {
        padding-bottom: 200px;
    }

    .pd-xl-l-200 {
        padding-left: 200px;
    }

    .pd-xl-t-200-f {
        padding-top: 200px !important;
    }

    .pd-xl-r-200-f {
        padding-right: 200px !important;
    }

    .pd-xl-b-200-f {
        padding-bottom: 200px !important;
    }

    .pd-xl-l-200-f {
        padding-left: 200px !important;
    }
}

.pd-12 {
    padding: 12px;
}

.pd-12-f {
    padding: 12px !important;
}

.pd-y-12 {
    padding-top: 12px;
    padding-bottom: 12px;
}

.pd-y-12-f {
    padding-top: 12px !important;
    padding-bottom: 12px !important;
}

.pd-x-12 {
    padding-left: 12px;
    padding-right: 12px;
}

.pd-x-12-f {
    padding-left: 12px !important;
    padding-right: 12px !important;
}

.pd-t-12 {
    padding-top: 12px;
}

.pd-r-12 {
    padding-right: 12px;
}

.pd-b-12 {
    padding-bottom: 12px;
}

.pd-l-12 {
    padding-left: 12px;
}

.pd-t-12-f {
    padding-top: 12px !important;
}

.pd-r-12-f {
    padding-right: 12px !important;
}

.pd-b-12-f {
    padding-bottom: 12px !important;
}

.pd-l-12-f {
    padding-left: 12px !important;
}

.pd-13 {
    padding: 13px;
}

.pd-13-f {
    padding: 13px !important;
}

.pd-y-13 {
    padding-top: 13px;
    padding-bottom: 13px;
}

.pd-y-13-f {
    padding-top: 13px !important;
    padding-bottom: 13px !important;
}

.pd-x-13 {
    padding-left: 13px;
    padding-right: 13px;
}

.pd-x-13-f {
    padding-left: 13px !important;
    padding-right: 13px !important;
}

.pd-t-13 {
    padding-top: 13px;
}

.pd-r-13 {
    padding-right: 13px;
}

.pd-b-13 {
    padding-bottom: 13px;
}

.pd-l-13 {
    padding-left: 13px;
}

.pd-t-13-f {
    padding-top: 13px !important;
}

.pd-r-13-f {
    padding-right: 13px !important;
}

.pd-b-13-f {
    padding-bottom: 13px !important;
}

.pd-l-13-f {
    padding-left: 13px !important;
}

/* ###### Padding  ###### */
/* ###### Position  ###### */
.pos-absolute {
    position: absolute;
}

.pos-relative {
    position: relative;
}

.pos-fixed {
    position: fixed;
}

.pos-static {
    position: static;
}

.pos-absolute-f {
    position: absolute !important;
}

.pos-relative-f {
    position: relative !important;
}

.pos-fixed-f {
    position: fixed !important;
}

.pos-static-f {
    position: static !important;
}

.t-0 {
    top: 0px;
}

.r-0 {
    right: 0px;
}

.b-0 {
    bottom: 0px;
}

.l-0 {
    left: 0px;
}

.t--0 {
    top: -0px;
}

.r--0 {
    right: -0px;
}

.b--0 {
    bottom: -0px;
}

.l--0 {
    left: -0px;
}

.a-0 {
    top: 0px;
    right: 0px;
    bottom: 0px;
    left: 0px;
}

.x-0,
.y-0 {
    left: 0px;
    right: 0px;
}

.t-5 {
    top: 5px;
}

.r-5 {
    right: 5px;
}

.b-5 {
    bottom: 5px;
}

.l-5 {
    left: 5px;
}

.t--5 {
    top: -5px;
}

.r--5 {
    right: -5px;
}

.b--5 {
    bottom: -5px;
}

.l--5 {
    left: -5px;
}

.a-5 {
    top: 5px;
    right: 5px;
    bottom: 5px;
    left: 5px;
}

.x-5,
.y-5 {
    left: 5px;
    right: 5px;
}

.t-10 {
    top: 10px;
}

.r-10 {
    right: 10px;
}

.b-10 {
    bottom: 10px;
}

.l-10 {
    left: 10px;
}

.t--10 {
    top: -10px;
}

.r--10 {
    right: -10px;
}

.b--10 {
    bottom: -10px;
}

.l--10 {
    left: -10px;
}

.a-10 {
    top: 10px;
    right: 10px;
    bottom: 10px;
    left: 10px;
}

.x-10,
.y-10 {
    left: 10px;
    right: 10px;
}

.t-15 {
    top: 15px;
}

.r-15 {
    right: 15px;
}

.b-15 {
    bottom: 15px;
}

.l-15 {
    left: 15px;
}

.t--15 {
    top: -15px;
}

.r--15 {
    right: -15px;
}

.b--15 {
    bottom: -15px;
}

.l--15 {
    left: -15px;
}

.a-15 {
    top: 15px;
    right: 15px;
    bottom: 15px;
    left: 15px;
}

.x-15,
.y-15 {
    left: 15px;
    right: 15px;
}

.t-20 {
    top: 20px;
}

.r-20 {
    right: 20px;
}

.b-20 {
    bottom: 20px;
}

.l-20 {
    left: 20px;
}

.t--20 {
    top: -20px;
}

.r--20 {
    right: -20px;
}

.b--20 {
    bottom: -20px;
}

.l--20 {
    left: -20px;
}

.a-20 {
    top: 20px;
    right: 20px;
    bottom: 20px;
    left: 20px;
}

.x-20,
.y-20 {
    left: 20px;
    right: 20px;
}

.t-25 {
    top: 25px;
}

.r-25 {
    right: 25px;
}

.b-25 {
    bottom: 25px;
}

.l-25 {
    left: 25px;
}

.t--25 {
    top: -25px;
}

.r--25 {
    right: -25px;
}

.b--25 {
    bottom: -25px;
}

.l--25 {
    left: -25px;
}

.a-25 {
    top: 25px;
    right: 25px;
    bottom: 25px;
    left: 25px;
}

.x-25,
.y-25 {
    left: 25px;
    right: 25px;
}

.t-30 {
    top: 30px;
}

.r-30 {
    right: 30px;
}

.b-30 {
    bottom: 30px;
}

.l-30 {
    left: 30px;
}

.t--30 {
    top: -30px;
}

.r--30 {
    right: -30px;
}

.b--30 {
    bottom: -30px;
}

.l--30 {
    left: -30px;
}

.a-30 {
    top: 30px;
    right: 30px;
    bottom: 30px;
    left: 30px;
}

.x-30,
.y-30 {
    left: 30px;
    right: 30px;
}

.t-35 {
    top: 35px;
}

.r-35 {
    right: 35px;
}

.b-35 {
    bottom: 35px;
}

.l-35 {
    left: 35px;
}

.t--35 {
    top: -35px;
}

.r--35 {
    right: -35px;
}

.b--35 {
    bottom: -35px;
}

.l--35 {
    left: -35px;
}

.a-35 {
    top: 35px;
    right: 35px;
    bottom: 35px;
    left: 35px;
}

.x-35,
.y-35 {
    left: 35px;
    right: 35px;
}

.t-40 {
    top: 40px;
}

.r-40 {
    right: 40px;
}

.b-40 {
    bottom: 40px;
}

.l-40 {
    left: 40px;
}

.t--40 {
    top: -40px;
}

.r--40 {
    right: -40px;
}

.b--40 {
    bottom: -40px;
}

.l--40 {
    left: -40px;
}

.a-40 {
    top: 40px;
    right: 40px;
    bottom: 40px;
    left: 40px;
}

.x-40,
.y-40 {
    left: 40px;
    right: 40px;
}

.t-45 {
    top: 45px;
}

.r-45 {
    right: 45px;
}

.b-45 {
    bottom: 45px;
}

.l-45 {
    left: 45px;
}

.t--45 {
    top: -45px;
}

.r--45 {
    right: -45px;
}

.b--45 {
    bottom: -45px;
}

.l--45 {
    left: -45px;
}

.a-45 {
    top: 45px;
    right: 45px;
    bottom: 45px;
    left: 45px;
}

.x-45,
.y-45 {
    left: 45px;
    right: 45px;
}

.t-50 {
    top: 50px;
}

.r-50 {
    right: 50px;
}

.b-50 {
    bottom: 50px;
}

.l-50 {
    left: 50px;
}

.t--50 {
    top: -50px;
}

.r--50 {
    right: -50px;
}

.b--50 {
    bottom: -50px;
}

.l--50 {
    left: -50px;
}

.a-50 {
    top: 50px;
    right: 50px;
    bottom: 50px;
    left: 50px;
}

.x-50,
.y-50 {
    left: 50px;
    right: 50px;
}

.t-55 {
    top: 55px;
}

.r-55 {
    right: 55px;
}

.b-55 {
    bottom: 55px;
}

.l-55 {
    left: 55px;
}

.t--55 {
    top: -55px;
}

.r--55 {
    right: -55px;
}

.b--55 {
    bottom: -55px;
}

.l--55 {
    left: -55px;
}

.a-55 {
    top: 55px;
    right: 55px;
    bottom: 55px;
    left: 55px;
}

.x-55,
.y-55 {
    left: 55px;
    right: 55px;
}

.t-60 {
    top: 60px;
}

.r-60 {
    right: 60px;
}

.b-60 {
    bottom: 60px;
}

.l-60 {
    left: 60px;
}

.t--60 {
    top: -60px;
}

.r--60 {
    right: -60px;
}

.b--60 {
    bottom: -60px;
}

.l--60 {
    left: -60px;
}

.a-60 {
    top: 60px;
    right: 60px;
    bottom: 60px;
    left: 60px;
}

.x-60,
.y-60 {
    left: 60px;
    right: 60px;
}

.t-65 {
    top: 65px;
}

.r-65 {
    right: 65px;
}

.b-65 {
    bottom: 65px;
}

.l-65 {
    left: 65px;
}

.t--65 {
    top: -65px;
}

.r--65 {
    right: -65px;
}

.b--65 {
    bottom: -65px;
}

.l--65 {
    left: -65px;
}

.a-65 {
    top: 65px;
    right: 65px;
    bottom: 65px;
    left: 65px;
}

.x-65,
.y-65 {
    left: 65px;
    right: 65px;
}

.t-70 {
    top: 70px;
}

.r-70 {
    right: 70px;
}

.b-70 {
    bottom: 70px;
}

.l-70 {
    left: 70px;
}

.t--70 {
    top: -70px;
}

.r--70 {
    right: -70px;
}

.b--70 {
    bottom: -70px;
}

.l--70 {
    left: -70px;
}

.a-70 {
    top: 70px;
    right: 70px;
    bottom: 70px;
    left: 70px;
}

.x-70,
.y-70 {
    left: 70px;
    right: 70px;
}

.t-75 {
    top: 75px;
}

.r-75 {
    right: 75px;
}

.b-75 {
    bottom: 75px;
}

.l-75 {
    left: 75px;
}

.t--75 {
    top: -75px;
}

.r--75 {
    right: -75px;
}

.b--75 {
    bottom: -75px;
}

.l--75 {
    left: -75px;
}

.a-75 {
    top: 75px;
    right: 75px;
    bottom: 75px;
    left: 75px;
}

.x-75,
.y-75 {
    left: 75px;
    right: 75px;
}

.t-80 {
    top: 80px;
}

.r-80 {
    right: 80px;
}

.b-80 {
    bottom: 80px;
}

.l-80 {
    left: 80px;
}

.t--80 {
    top: -80px;
}

.r--80 {
    right: -80px;
}

.b--80 {
    bottom: -80px;
}

.l--80 {
    left: -80px;
}

.a-80 {
    top: 80px;
    right: 80px;
    bottom: 80px;
    left: 80px;
}

.x-80,
.y-80 {
    left: 80px;
    right: 80px;
}

.t-85 {
    top: 85px;
}

.r-85 {
    right: 85px;
}

.b-85 {
    bottom: 85px;
}

.l-85 {
    left: 85px;
}

.t--85 {
    top: -85px;
}

.r--85 {
    right: -85px;
}

.b--85 {
    bottom: -85px;
}

.l--85 {
    left: -85px;
}

.a-85 {
    top: 85px;
    right: 85px;
    bottom: 85px;
    left: 85px;
}

.x-85,
.y-85 {
    left: 85px;
    right: 85px;
}

.t-90 {
    top: 90px;
}

.r-90 {
    right: 90px;
}

.b-90 {
    bottom: 90px;
}

.l-90 {
    left: 90px;
}

.t--90 {
    top: -90px;
}

.r--90 {
    right: -90px;
}

.b--90 {
    bottom: -90px;
}

.l--90 {
    left: -90px;
}

.a-90 {
    top: 90px;
    right: 90px;
    bottom: 90px;
    left: 90px;
}

.x-90,
.y-90 {
    left: 90px;
    right: 90px;
}

.t-95 {
    top: 95px;
}

.r-95 {
    right: 95px;
}

.b-95 {
    bottom: 95px;
}

.l-95 {
    left: 95px;
}

.t--95 {
    top: -95px;
}

.r--95 {
    right: -95px;
}

.b--95 {
    bottom: -95px;
}

.l--95 {
    left: -95px;
}

.a-95 {
    top: 95px;
    right: 95px;
    bottom: 95px;
    left: 95px;
}

.x-95,
.y-95 {
    left: 95px;
    right: 95px;
}

.t-100 {
    top: 100px;
}

.r-100 {
    right: 100px;
}

.b-100 {
    bottom: 100px;
}

.l-100 {
    left: 100px;
}

.t--100 {
    top: -100px;
}

.r--100 {
    right: -100px;
}

.b--100 {
    bottom: -100px;
}

.l--100 {
    left: -100px;
}

.a-100 {
    top: 100px;
    right: 100px;
    bottom: 100px;
    left: 100px;
}

.x-100,
.y-100 {
    left: 100px;
    right: 100px;
}

.t-2 {
    top: 2px;
}

.z-index-0 {
    z-index: 0;
}

.z-index-10 {
    z-index: 10;
}

.z-index-50 {
    z-index: 50;
}

.z-index-100 {
    z-index: 100;
}

.z-index-150 {
    z-index: 150;
}

.z-index-200 {
    z-index: 200;
}

.position-static {
    position: static !important;
}

.position-relative {
    position: relative !important;
}

.position-absolute {
    position: absolute !important;
}

.position-fixed {
    position: fixed !important;
}

.position-sticky {
    position: sticky !important;
}

.fixed-top {
    position: fixed;
    top: 0;
    right: 0;
    left: 0;
    z-index: 1030;
}

.fixed-bottom {
    position: fixed;
    right: 0;
    bottom: 0;
    left: 0;
    z-index: 1030;
}

@media (min-width: 480px) {
    .pos-xs-absolute {
        position: absolute;
    }

    .pos-xs-relative {
        position: relative;
    }

    .pos-xs-fixed {
        position: fixed;
    }

    .pos-xs-static {
        position: static;
    }

    .t-xs-auto {
        top: auto;
    }

    .r-xs-auto {
        right: auto;
    }

    .b-xs-auto {
        bottom: auto;
    }

    .l-xs-auto {
        left: auto;
    }
}

@media (min-width: 576px) {
    .pos-sm-absolute {
        position: absolute;
    }

    .pos-sm-relative {
        position: relative;
    }

    .pos-sm-fixed {
        position: fixed;
    }

    .pos-sm-static {
        position: static;
    }

    .t-sm-auto {
        top: auto;
    }

    .r-sm-auto {
        right: auto;
    }

    .b-sm-auto {
        bottom: auto;
    }

    .l-sm-auto {
        left: auto;
    }
}

@media (min-width: 768px) {
    .pos-md-absolute {
        position: absolute;
    }

    .pos-md-relative {
        position: relative;
    }

    .pos-md-fixed {
        position: fixed;
    }

    .pos-md-static {
        position: static;
    }

    .t-md-auto {
        top: auto;
    }

    .r-md-auto {
        right: auto;
    }

    .b-md-auto {
        bottom: auto;
    }

    .l-md-auto {
        left: auto;
    }
}

@media (min-width: 992px) {
    .pos-lg-absolute {
        position: absolute;
    }

    .pos-lg-relative {
        position: relative;
    }

    .pos-lg-fixed {
        position: fixed;
    }

    .pos-lg-static {
        position: static;
    }

    .t-lg-auto {
        top: auto;
    }

    .r-lg-auto {
        right: auto;
    }

    .b-lg-auto {
        bottom: auto;
    }

    .l-lg-auto {
        left: auto;
    }
}

@media (min-width: 1200px) {
    .pos-xl-absolute {
        position: absolute;
    }

    .pos-xl-relative {
        position: relative;
    }

    .pos-xl-fixed {
        position: fixed;
    }

    .pos-xl-static {
        position: static;
    }

    .t-xl-auto {
        top: auto;
    }

    .r-xl-auto {
        right: auto;
    }

    .b-xl-auto {
        bottom: auto;
    }

    .l-xl-auto {
        left: auto;
    }
}

/* ###### Position  ###### */
/* ###### Typography  ###### */
.tx-black {
    font-weight: 900;
    color: #8f9cc0;
}

.tx-bold {
    font-weight: 700;
}

.tx-semibold {
    font-weight: 600;
}

.tx-medium {
    font-weight: 500;
}

.tx-normal {
    font-weight: 400;
}

.tx-light {
    font-weight: 300;
}

.tx-thin {
    font-weight: 200;
}

.tx-xthin {
    font-weight: 100;
}

.tx-sserif {
    font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
}

.tx-roboto {
    font-family: 'Roboto', sans-serif;
}

.tx-white {
    color: #ffffff;
}

.tx-success {
    color: #269c8e;
}

.tx-warning {
    color: #ff9e01;
}

.tx-danger {
    color: #f16d75;
}

.tx-info {
    color: #00aeff;
}

.tx-inverse {
    color: #3c4858;
}

.tx-teal {
    color: #00cccc;
}

.tx-dark {
    color: #38415a;
}

.tx-indigo {
    color: #3F00FF;
}

.tx-purple {
    color: #6f42c1;
}

.tx-orange {
    color: #fd7e14;
}

.tx-pink {
    color: #f10075;
}

.tx-gray-100 {
    color: #f8f9fa;
}

.tx-gray-200,
.tx-gray-300 {
    color: #ecedef;
}

.tx-gray-400 {
    color: #b4bdce;
}

.tx-gray-500,
.tx-gray-600 {
    color: #a8afc7;
}

.tx-gray-700 {
    color: #3c4858;
}

.tx-gray-800 {
    color: #2e3649;
}

.tx-gray-900 {
    color: #8f9cc0;
}

.tx-white-2 {
    color: rgba(255, 255, 255, 0.2);
}

.tx-white-3 {
    color: rgba(255, 255, 255, 0.3);
}

.tx-white-4 {
    color: rgba(255, 255, 255, 0.4);
}

.tx-white-5 {
    color: rgba(255, 255, 255, 0.5);
}

.tx-white-6 {
    color: rgba(255, 255, 255, 0.6);
}

.tx-white-7 {
    color: rgba(255, 255, 255, 0.7);
}

.tx-white-8 {
    color: rgba(255, 255, 255, 0.8);
}

.tx-spacing-1 {
    letter-spacing: 0.5px;
}

.tx-spacing-2 {
    letter-spacing: 1px;
}

.tx-spacing-3 {
    letter-spacing: 1.5px;
}

.tx-spacing-4 {
    letter-spacing: 2px;
}

.tx-spacing-5 {
    letter-spacing: 2.5px;
}

.tx-spacing-6 {
    letter-spacing: 3px;
}

.tx-spacing-7 {
    letter-spacing: 3.5px;
}

.tx-spacing-8 {
    letter-spacing: 4px;
}

.tx-spacing--1 {
    letter-spacing: -0.5px;
}

.tx-spacing--2 {
    letter-spacing: -1px;
}

.tx-spacing--3 {
    letter-spacing: -1.5px;
}

.tx-spacing--4 {
    letter-spacing: -2px;
}

.tx-spacing--5 {
    letter-spacing: -2.5px;
}

.tx-spacing--6 {
    letter-spacing: -3px;
}

.tx-spacing--7 {
    letter-spacing: -3.5px;
}

.tx-spacing--8 {
    letter-spacing: -4px;
}

.tx-uppercase {
    text-transform: uppercase;
}

.tx-lowercase {
    text-transform: lowercase;
}

.tx-transform-none {
    text-transform: none;
}

.tx-center {
    text-align: center;
}

.tx-right {
    text-align: right;
}

.tx-left {
    text-align: left;
}

.tx-center-f {
    text-align: center !important;
}

.tx-right-f {
    text-align: right !important;
}

.tx-left-f {
    text-align: left !important;
}

.tx-italic {
    font-style: italic;
}

.tx-style-normal {
    font-style: normal;
}

.lh-base {
    line-height: 1.5;
}

.lh-normal {
    line-height: normal;
}

.lh-0 {
    line-height: 0;
}

.lh--1 {
    line-height: .1;
}

.lh--2 {
    line-height: .2;
}

.lh--3 {
    line-height: .3;
}

.lh--4 {
    line-height: .4;
}

.lh--5 {
    line-height: .5;
}

.lh--6 {
    line-height: .6;
}

.lh--7 {
    line-height: .7;
}

.lh--8 {
    line-height: .8;
}

.lh--9 {
    line-height: .9;
}

.lh-1 {
    line-height: 1.1;
}

.lh-2 {
    line-height: 1.2;
}

.lh-3 {
    line-height: 1.3;
}

.lh-4 {
    line-height: 1.4;
}

.lh-5 {
    line-height: 1.5;
}

.lh-6 {
    line-height: 1.6;
}

.lh-7 {
    line-height: 1.7;
}

.lh-8 {
    line-height: 1.8;
}

.lh-9 {
    line-height: 1.9;
}

.lh-10 {
    line-height: 2.0;
}

.lh-11 {
    line-height: 2.1;
}

.lh-12 {
    line-height: 2.2;
}

.lh-13 {
    line-height: 2.3;
}

.lh-14 {
    line-height: 2.4;
}

.lh-15 {
    line-height: 2.5;
}

.valign-top {
    vertical-align: top;
}

.valign-middle {
    vertical-align: middle;
}

.valign-bottom {
    vertical-align: baseline;
}

.valign-top-f {
    vertical-align: top !important;
}

.valign-middle-f {
    vertical-align: middle !important;
}

.valign-bottom-f {
    vertical-align: baseline !important;
}

.tx-base {
    font-size: 0.875rem;
}

.tx-8 {
    font-size: 8px;
}

.tx-8-f {
    font-size: 8px !important;
}

.tx-9 {
    font-size: 9px;
}

.tx-9-f {
    font-size: 9px !important;
}

.tx-10 {
    font-size: 10px;
}

.tx-10-f {
    font-size: 10px !important;
}

.tx-11 {
    font-size: 11px;
}

.tx-11-f {
    font-size: 11px !important;
}

.tx-12 {
    font-size: 12px;
}

.tx-12-f {
    font-size: 12px !important;
}

.tx-13 {
    font-size: 13px;
}

.tx-13-f {
    font-size: 13px !important;
}

.tx-14 {
    font-size: 14px;
}

.tx-14-f {
    font-size: 14px !important;
}

.tx-15 {
    font-size: 15px;
}

.tx-15-f {
    font-size: 15px !important;
}

.tx-16 {
    font-size: 16px;
}

.tx-16-f {
    font-size: 16px !important;
}

.tx-18 {
    font-size: 18px;
}

.tx-18-f {
    font-size: 18px !important;
}

.tx-20 {
    font-size: 20px;
}

.tx-20-f {
    font-size: 20px !important;
}

.tx-22 {
    font-size: 22px;
}

.tx-22-f {
    font-size: 22px !important;
}

.tx-24 {
    font-size: 24px;
}

.tx-24-f {
    font-size: 24px !important;
}

.tx-26 {
    font-size: 26px;
}

.tx-26-f {
    font-size: 26px !important;
}

.tx-28 {
    font-size: 28px;
}

.tx-28-f {
    font-size: 28px !important;
}

.tx-30 {
    font-size: 30px;
}

.tx-30-f {
    font-size: 30px !important;
}

.tx-32 {
    font-size: 32px;
}

.tx-32-f {
    font-size: 32px !important;
}

.tx-34 {
    font-size: 34px;
}

.tx-34-f {
    font-size: 34px !important;
}

.tx-36 {
    font-size: 36px;
}

.tx-36-f {
    font-size: 36px !important;
}

.tx-38 {
    font-size: 38px;
}

.tx-38-f {
    font-size: 38px !important;
}

.tx-40 {
    font-size: 40px;
}

.tx-40-f {
    font-size: 40px !important;
}

.tx-42 {
    font-size: 42px;
}

.tx-42-f {
    font-size: 42px !important;
}

.tx-44 {
    font-size: 44px;
}

.tx-44-f {
    font-size: 44px !important;
}

.tx-46 {
    font-size: 46px;
}

.tx-46-f {
    font-size: 46px !important;
}

.tx-48 {
    font-size: 48px;
}

.tx-48-f {
    font-size: 48px !important;
}

.tx-50 {
    font-size: 50px;
}

.tx-50-f {
    font-size: 50px !important;
}

.tx-52 {
    font-size: 52px;
}

.tx-52-f {
    font-size: 52px !important;
}

.tx-54 {
    font-size: 54px;
}

.tx-54-f {
    font-size: 54px !important;
}

.tx-56 {
    font-size: 56px;
}

.tx-56-f {
    font-size: 56px !important;
}

.tx-58 {
    font-size: 58px;
}

.tx-58-f {
    font-size: 58px !important;
}

.tx-60 {
    font-size: 60px;
}

.tx-60-f {
    font-size: 60px !important;
}

.tx-62 {
    font-size: 62px;
}

.tx-62-f {
    font-size: 62px !important;
}

.tx-64 {
    font-size: 64px;
}

.tx-64-f {
    font-size: 64px !important;
}

.tx-66 {
    font-size: 66px;
}

.tx-66-f {
    font-size: 66px !important;
}

.tx-68 {
    font-size: 68px;
}

.tx-68-f {
    font-size: 68px !important;
}

.tx-70 {
    font-size: 70px;
}

.tx-70-f {
    font-size: 70px !important;
}

.tx-72 {
    font-size: 72px;
}

.tx-72-f {
    font-size: 72px !important;
}

.tx-74 {
    font-size: 74px;
}

.tx-74-f {
    font-size: 74px !important;
}

.tx-76 {
    font-size: 76px;
}

.tx-76-f {
    font-size: 76px !important;
}

.tx-78 {
    font-size: 78px;
}

.tx-78-f {
    font-size: 78px !important;
}

.tx-80 {
    font-size: 80px;
}

.tx-80-f {
    font-size: 80px !important;
}

.tx-82 {
    font-size: 82px;
}

.tx-82-f {
    font-size: 82px !important;
}

.tx-84 {
    font-size: 84px;
}

.tx-84-f {
    font-size: 84px !important;
}

.tx-86 {
    font-size: 86px;
}

.tx-86-f {
    font-size: 86px !important;
}

.tx-88 {
    font-size: 88px;
}

.tx-88-f {
    font-size: 88px !important;
}

.tx-90 {
    font-size: 90px;
}

.tx-90-f {
    font-size: 90px !important;
}

.tx-92 {
    font-size: 92px;
}

.tx-92-f {
    font-size: 92px !important;
}

.tx-94 {
    font-size: 94px;
}

.tx-94-f {
    font-size: 94px !important;
}

.tx-96 {
    font-size: 96px;
}

.tx-96-f {
    font-size: 96px !important;
}

.tx-98 {
    font-size: 98px;
}

.tx-98-f {
    font-size: 98px !important;
}

.tx-100 {
    font-size: 100px;
}

.tx-100-f {
    font-size: 100px !important;
}

.tx-102 {
    font-size: 102px;
}

.tx-102-f {
    font-size: 102px !important;
}

.tx-104 {
    font-size: 104px;
}

.tx-104-f {
    font-size: 104px !important;
}

.tx-106 {
    font-size: 106px;
}

.tx-106-f {
    font-size: 106px !important;
}

.tx-108 {
    font-size: 108px;
}

.tx-108-f {
    font-size: 108px !important;
}

.tx-110 {
    font-size: 110px;
}

.tx-110-f {
    font-size: 110px !important;
}

.tx-112 {
    font-size: 112px;
}

.tx-112-f {
    font-size: 112px !important;
}

.tx-114 {
    font-size: 114px;
}

.tx-114-f {
    font-size: 114px !important;
}

.tx-116 {
    font-size: 116px;
}

.tx-116-f {
    font-size: 116px !important;
}

.tx-118 {
    font-size: 118px;
}

.tx-118-f {
    font-size: 118px !important;
}

.tx-120 {
    font-size: 120px;
}

.tx-120-f {
    font-size: 120px !important;
}

.tx-122 {
    font-size: 122px;
}

.tx-122-f {
    font-size: 122px !important;
}

.tx-124 {
    font-size: 124px;
}

.tx-124-f {
    font-size: 124px !important;
}

.tx-126 {
    font-size: 126px;
}

.tx-126-f {
    font-size: 126px !important;
}

.tx-128 {
    font-size: 128px;
}

.tx-128-f {
    font-size: 128px !important;
}

.tx-130 {
    font-size: 130px;
}

.tx-130-f {
    font-size: 130px !important;
}

.tx-132 {
    font-size: 132px;
}

.tx-132-f {
    font-size: 132px !important;
}

.tx-134 {
    font-size: 134px;
}

.tx-134-f {
    font-size: 134px !important;
}

.tx-136 {
    font-size: 136px;
}

.tx-136-f {
    font-size: 136px !important;
}

.tx-138 {
    font-size: 138px;
}

.tx-138-f {
    font-size: 138px !important;
}

.tx-140 {
    font-size: 140px;
}

.tx-140-f {
    font-size: 140px !important;
}

@media (min-width: 480px) {
    .tx-xs-8 {
        font-size: 8px;
    }

    .tx-xs-8-f {
        font-size: 8px !important;
    }

    .tx-xs-9 {
        font-size: 9px;
    }

    .tx-xs-9-f {
        font-size: 9px !important;
    }

    .tx-xs-10 {
        font-size: 10px;
    }

    .tx-xs-10-f {
        font-size: 10px !important;
    }

    .tx-xs-11 {
        font-size: 11px;
    }

    .tx-xs-11-f {
        font-size: 11px !important;
    }

    .tx-xs-12 {
        font-size: 12px;
    }

    .tx-xs-12-f {
        font-size: 12px !important;
    }

    .tx-xs-13 {
        font-size: 13px;
    }

    .tx-xs-13-f {
        font-size: 13px !important;
    }

    .tx-xs-14 {
        font-size: 14px;
    }

    .tx-xs-14-f {
        font-size: 14px !important;
    }

    .tx-xs-15 {
        font-size: 15px;
    }

    .tx-xs-15-f {
        font-size: 15px !important;
    }

    .tx-xs-16 {
        font-size: 16px;
    }

    .tx-xs-16-f {
        font-size: 16px !important;
    }

    .tx-xs-18 {
        font-size: 18px;
    }

    .tx-xs-18-f {
        font-size: 18px !important;
    }

    .tx-xs-20 {
        font-size: 20px;
    }

    .tx-xs-20-f {
        font-size: 20px !important;
    }

    .tx-xs-22 {
        font-size: 22px;
    }

    .tx-xs-22-f {
        font-size: 22px !important;
    }

    .tx-xs-24 {
        font-size: 24px;
    }

    .tx-xs-24-f {
        font-size: 24px !important;
    }

    .tx-xs-26 {
        font-size: 26px;
    }

    .tx-xs-26-f {
        font-size: 26px !important;
    }

    .tx-xs-28 {
        font-size: 28px;
    }

    .tx-xs-28-f {
        font-size: 28px !important;
    }

    .tx-xs-30 {
        font-size: 30px;
    }

    .tx-xs-30-f {
        font-size: 30px !important;
    }

    .tx-xs-32 {
        font-size: 32px;
    }

    .tx-xs-32-f {
        font-size: 32px !important;
    }

    .tx-xs-34 {
        font-size: 34px;
    }

    .tx-xs-34-f {
        font-size: 34px !important;
    }

    .tx-xs-36 {
        font-size: 36px;
    }

    .tx-xs-36-f {
        font-size: 36px !important;
    }

    .tx-xs-38 {
        font-size: 38px;
    }

    .tx-xs-38-f {
        font-size: 38px !important;
    }

    .tx-xs-40 {
        font-size: 40px;
    }

    .tx-xs-40-f {
        font-size: 40px !important;
    }

    .tx-xs-42 {
        font-size: 42px;
    }

    .tx-xs-42-f {
        font-size: 42px !important;
    }

    .tx-xs-44 {
        font-size: 44px;
    }

    .tx-xs-44-f {
        font-size: 44px !important;
    }

    .tx-xs-46 {
        font-size: 46px;
    }

    .tx-xs-46-f {
        font-size: 46px !important;
    }

    .tx-xs-48 {
        font-size: 48px;
    }

    .tx-xs-48-f {
        font-size: 48px !important;
    }

    .tx-xs-50 {
        font-size: 50px;
    }

    .tx-xs-50-f {
        font-size: 50px !important;
    }

    .tx-xs-52 {
        font-size: 52px;
    }

    .tx-xs-52-f {
        font-size: 52px !important;
    }

    .tx-xs-54 {
        font-size: 54px;
    }

    .tx-xs-54-f {
        font-size: 54px !important;
    }

    .tx-xs-56 {
        font-size: 56px;
    }

    .tx-xs-56-f {
        font-size: 56px !important;
    }

    .tx-xs-58 {
        font-size: 58px;
    }

    .tx-xs-58-f {
        font-size: 58px !important;
    }

    .tx-xs-60 {
        font-size: 60px;
    }

    .tx-xs-60-f {
        font-size: 60px !important;
    }

    .tx-xs-62 {
        font-size: 62px;
    }

    .tx-xs-62-f {
        font-size: 62px !important;
    }

    .tx-xs-64 {
        font-size: 64px;
    }

    .tx-xs-64-f {
        font-size: 64px !important;
    }

    .tx-xs-66 {
        font-size: 66px;
    }

    .tx-xs-66-f {
        font-size: 66px !important;
    }

    .tx-xs-68 {
        font-size: 68px;
    }

    .tx-xs-68-f {
        font-size: 68px !important;
    }

    .tx-xs-70 {
        font-size: 70px;
    }

    .tx-xs-70-f {
        font-size: 70px !important;
    }

    .tx-xs-72 {
        font-size: 72px;
    }

    .tx-xs-72-f {
        font-size: 72px !important;
    }

    .tx-xs-74 {
        font-size: 74px;
    }

    .tx-xs-74-f {
        font-size: 74px !important;
    }

    .tx-xs-76 {
        font-size: 76px;
    }

    .tx-xs-76-f {
        font-size: 76px !important;
    }

    .tx-xs-78 {
        font-size: 78px;
    }

    .tx-xs-78-f {
        font-size: 78px !important;
    }

    .tx-xs-80 {
        font-size: 80px;
    }

    .tx-xs-80-f {
        font-size: 80px !important;
    }

    .tx-xs-82 {
        font-size: 82px;
    }

    .tx-xs-82-f {
        font-size: 82px !important;
    }

    .tx-xs-84 {
        font-size: 84px;
    }

    .tx-xs-84-f {
        font-size: 84px !important;
    }

    .tx-xs-86 {
        font-size: 86px;
    }

    .tx-xs-86-f {
        font-size: 86px !important;
    }

    .tx-xs-88 {
        font-size: 88px;
    }

    .tx-xs-88-f {
        font-size: 88px !important;
    }

    .tx-xs-90 {
        font-size: 90px;
    }

    .tx-xs-90-f {
        font-size: 90px !important;
    }

    .tx-xs-92 {
        font-size: 92px;
    }

    .tx-xs-92-f {
        font-size: 92px !important;
    }

    .tx-xs-94 {
        font-size: 94px;
    }

    .tx-xs-94-f {
        font-size: 94px !important;
    }

    .tx-xs-96 {
        font-size: 96px;
    }

    .tx-xs-96-f {
        font-size: 96px !important;
    }

    .tx-xs-98 {
        font-size: 98px;
    }

    .tx-xs-98-f {
        font-size: 98px !important;
    }

    .tx-xs-100 {
        font-size: 100px;
    }

    .tx-xs-100-f {
        font-size: 100px !important;
    }

    .tx-xs-102 {
        font-size: 102px;
    }

    .tx-xs-102-f {
        font-size: 102px !important;
    }

    .tx-xs-104 {
        font-size: 104px;
    }

    .tx-xs-104-f {
        font-size: 104px !important;
    }

    .tx-xs-106 {
        font-size: 106px;
    }

    .tx-xs-106-f {
        font-size: 106px !important;
    }

    .tx-xs-108 {
        font-size: 108px;
    }

    .tx-xs-108-f {
        font-size: 108px !important;
    }

    .tx-xs-110 {
        font-size: 110px;
    }

    .tx-xs-110-f {
        font-size: 110px !important;
    }

    .tx-xs-112 {
        font-size: 112px;
    }

    .tx-xs-112-f {
        font-size: 112px !important;
    }

    .tx-xs-114 {
        font-size: 114px;
    }

    .tx-xs-114-f {
        font-size: 114px !important;
    }

    .tx-xs-116 {
        font-size: 116px;
    }

    .tx-xs-116-f {
        font-size: 116px !important;
    }

    .tx-xs-118 {
        font-size: 118px;
    }

    .tx-xs-118-f {
        font-size: 118px !important;
    }

    .tx-xs-120 {
        font-size: 120px;
    }

    .tx-xs-120-f {
        font-size: 120px !important;
    }

    .tx-xs-122 {
        font-size: 122px;
    }

    .tx-xs-122-f {
        font-size: 122px !important;
    }

    .tx-xs-124 {
        font-size: 124px;
    }

    .tx-xs-124-f {
        font-size: 124px !important;
    }

    .tx-xs-126 {
        font-size: 126px;
    }

    .tx-xs-126-f {
        font-size: 126px !important;
    }

    .tx-xs-128 {
        font-size: 128px;
    }

    .tx-xs-128-f {
        font-size: 128px !important;
    }

    .tx-xs-130 {
        font-size: 130px;
    }

    .tx-xs-130-f {
        font-size: 130px !important;
    }

    .tx-xs-132 {
        font-size: 132px;
    }

    .tx-xs-132-f {
        font-size: 132px !important;
    }

    .tx-xs-134 {
        font-size: 134px;
    }

    .tx-xs-134-f {
        font-size: 134px !important;
    }

    .tx-xs-136 {
        font-size: 136px;
    }

    .tx-xs-136-f {
        font-size: 136px !important;
    }

    .tx-xs-138 {
        font-size: 138px;
    }

    .tx-xs-138-f {
        font-size: 138px !important;
    }

    .tx-xs-140 {
        font-size: 140px;
    }

    .tx-xs-140-f {
        font-size: 140px !important;
    }

    .tx-xs-base {
        font-size: 0.875rem;
    }

    .tx-xs-bold {
        font-weight: 700;
    }

    .tx-xs-semibold {
        font-weight: 600;
    }

    .tx-xs-medium {
        font-weight: 500;
    }

    .tx-xs-normal {
        font-weight: 400;
    }

    .tx-xs-light {
        font-weight: 300;
    }

    .tx-xs-thin {
        font-weight: 200;
    }

    .tx-xs-xthin {
        font-weight: 100;
    }

    .lh-xs-0 {
        line-height: 0;
    }

    .lh-xs-1 {
        line-height: 1.1;
    }

    .lh-xs-2 {
        line-height: 1.2;
    }

    .lh-xs-3 {
        line-height: 1.3;
    }

    .lh-xs-4 {
        line-height: 1.4;
    }

    .lh-xs-5 {
        line-height: 1.5;
    }

    .lh-xs-6 {
        line-height: 1.6;
    }

    .lh-xs-7 {
        line-height: 1.7;
    }

    .lh-xs-8 {
        line-height: 1.8;
    }

    .lh-xs-9 {
        line-height: 1.9;
    }

    .lh-xs-10 {
        line-height: 2.0;
    }

    .lh-xs-11 {
        line-height: 2.1;
    }

    .lh-xs-12 {
        line-height: 2.2;
    }

    .lh-xs-13 {
        line-height: 2.3;
    }

    .lh-xs-14 {
        line-height: 2.4;
    }

    .lh-xs-15 {
        line-height: 2.5;
    }

    .tx-xs-center {
        text-align: center;
    }

    .tx-xs-right {
        text-align: right;
    }

    .tx-xs-left {
        text-align: left;
    }

    .tx-xs-center-f {
        text-align: center !important;
    }

    .tx-xs-right-f {
        text-align: right !important;
    }

    .tx-xs-left-f {
        text-align: left !important;
    }
}

@media (min-width: 576px) {
    .tx-sm-8 {
        font-size: 8px;
    }

    .tx-sm-8-f {
        font-size: 8px !important;
    }

    .tx-sm-9 {
        font-size: 9px;
    }

    .tx-sm-9-f {
        font-size: 9px !important;
    }

    .tx-sm-10 {
        font-size: 10px;
    }

    .tx-sm-10-f {
        font-size: 10px !important;
    }

    .tx-sm-11 {
        font-size: 11px;
    }

    .tx-sm-11-f {
        font-size: 11px !important;
    }

    .tx-sm-12 {
        font-size: 12px;
    }

    .tx-sm-12-f {
        font-size: 12px !important;
    }

    .tx-sm-13 {
        font-size: 13px;
    }

    .tx-sm-13-f {
        font-size: 13px !important;
    }

    .tx-sm-14 {
        font-size: 14px;
    }

    .tx-sm-14-f {
        font-size: 14px !important;
    }

    .tx-sm-15 {
        font-size: 15px;
    }

    .tx-sm-15-f {
        font-size: 15px !important;
    }

    .tx-sm-16 {
        font-size: 16px;
    }

    .tx-sm-16-f {
        font-size: 16px !important;
    }

    .tx-sm-18 {
        font-size: 18px;
    }

    .tx-sm-18-f {
        font-size: 18px !important;
    }

    .tx-sm-20 {
        font-size: 20px;
    }

    .tx-sm-20-f {
        font-size: 20px !important;
    }

    .tx-sm-22 {
        font-size: 22px;
    }

    .tx-sm-22-f {
        font-size: 22px !important;
    }

    .tx-sm-24 {
        font-size: 24px;
    }

    .tx-sm-24-f {
        font-size: 24px !important;
    }

    .tx-sm-26 {
        font-size: 26px;
    }

    .tx-sm-26-f {
        font-size: 26px !important;
    }

    .tx-sm-28 {
        font-size: 28px;
    }

    .tx-sm-28-f {
        font-size: 28px !important;
    }

    .tx-sm-30 {
        font-size: 30px;
    }

    .tx-sm-30-f {
        font-size: 30px !important;
    }

    .tx-sm-32 {
        font-size: 32px;
    }

    .tx-sm-32-f {
        font-size: 32px !important;
    }

    .tx-sm-34 {
        font-size: 34px;
    }

    .tx-sm-34-f {
        font-size: 34px !important;
    }

    .tx-sm-36 {
        font-size: 36px;
    }

    .tx-sm-36-f {
        font-size: 36px !important;
    }

    .tx-sm-38 {
        font-size: 38px;
    }

    .tx-sm-38-f {
        font-size: 38px !important;
    }

    .tx-sm-40 {
        font-size: 40px;
    }

    .tx-sm-40-f {
        font-size: 40px !important;
    }

    .tx-sm-42 {
        font-size: 42px;
    }

    .tx-sm-42-f {
        font-size: 42px !important;
    }

    .tx-sm-44 {
        font-size: 44px;
    }

    .tx-sm-44-f {
        font-size: 44px !important;
    }

    .tx-sm-46 {
        font-size: 46px;
    }

    .tx-sm-46-f {
        font-size: 46px !important;
    }

    .tx-sm-48 {
        font-size: 48px;
    }

    .tx-sm-48-f {
        font-size: 48px !important;
    }

    .tx-sm-50 {
        font-size: 50px;
    }

    .tx-sm-50-f {
        font-size: 50px !important;
    }

    .tx-sm-52 {
        font-size: 52px;
    }

    .tx-sm-52-f {
        font-size: 52px !important;
    }

    .tx-sm-54 {
        font-size: 54px;
    }

    .tx-sm-54-f {
        font-size: 54px !important;
    }

    .tx-sm-56 {
        font-size: 56px;
    }

    .tx-sm-56-f {
        font-size: 56px !important;
    }

    .tx-sm-58 {
        font-size: 58px;
    }

    .tx-sm-58-f {
        font-size: 58px !important;
    }

    .tx-sm-60 {
        font-size: 60px;
    }

    .tx-sm-60-f {
        font-size: 60px !important;
    }

    .tx-sm-62 {
        font-size: 62px;
    }

    .tx-sm-62-f {
        font-size: 62px !important;
    }

    .tx-sm-64 {
        font-size: 64px;
    }

    .tx-sm-64-f {
        font-size: 64px !important;
    }

    .tx-sm-66 {
        font-size: 66px;
    }

    .tx-sm-66-f {
        font-size: 66px !important;
    }

    .tx-sm-68 {
        font-size: 68px;
    }

    .tx-sm-68-f {
        font-size: 68px !important;
    }

    .tx-sm-70 {
        font-size: 70px;
    }

    .tx-sm-70-f {
        font-size: 70px !important;
    }

    .tx-sm-72 {
        font-size: 72px;
    }

    .tx-sm-72-f {
        font-size: 72px !important;
    }

    .tx-sm-74 {
        font-size: 74px;
    }

    .tx-sm-74-f {
        font-size: 74px !important;
    }

    .tx-sm-76 {
        font-size: 76px;
    }

    .tx-sm-76-f {
        font-size: 76px !important;
    }

    .tx-sm-78 {
        font-size: 78px;
    }

    .tx-sm-78-f {
        font-size: 78px !important;
    }

    .tx-sm-80 {
        font-size: 80px;
    }

    .tx-sm-80-f {
        font-size: 80px !important;
    }

    .tx-sm-82 {
        font-size: 82px;
    }

    .tx-sm-82-f {
        font-size: 82px !important;
    }

    .tx-sm-84 {
        font-size: 84px;
    }

    .tx-sm-84-f {
        font-size: 84px !important;
    }

    .tx-sm-86 {
        font-size: 86px;
    }

    .tx-sm-86-f {
        font-size: 86px !important;
    }

    .tx-sm-88 {
        font-size: 88px;
    }

    .tx-sm-88-f {
        font-size: 88px !important;
    }

    .tx-sm-90 {
        font-size: 90px;
    }

    .tx-sm-90-f {
        font-size: 90px !important;
    }

    .tx-sm-92 {
        font-size: 92px;
    }

    .tx-sm-92-f {
        font-size: 92px !important;
    }

    .tx-sm-94 {
        font-size: 94px;
    }

    .tx-sm-94-f {
        font-size: 94px !important;
    }

    .tx-sm-96 {
        font-size: 96px;
    }

    .tx-sm-96-f {
        font-size: 96px !important;
    }

    .tx-sm-98 {
        font-size: 98px;
    }

    .tx-sm-98-f {
        font-size: 98px !important;
    }

    .tx-sm-100 {
        font-size: 100px;
    }

    .tx-sm-100-f {
        font-size: 100px !important;
    }

    .tx-sm-102 {
        font-size: 102px;
    }

    .tx-sm-102-f {
        font-size: 102px !important;
    }

    .tx-sm-104 {
        font-size: 104px;
    }

    .tx-sm-104-f {
        font-size: 104px !important;
    }

    .tx-sm-106 {
        font-size: 106px;
    }

    .tx-sm-106-f {
        font-size: 106px !important;
    }

    .tx-sm-108 {
        font-size: 108px;
    }

    .tx-sm-108-f {
        font-size: 108px !important;
    }

    .tx-sm-110 {
        font-size: 110px;
    }

    .tx-sm-110-f {
        font-size: 110px !important;
    }

    .tx-sm-112 {
        font-size: 112px;
    }

    .tx-sm-112-f {
        font-size: 112px !important;
    }

    .tx-sm-114 {
        font-size: 114px;
    }

    .tx-sm-114-f {
        font-size: 114px !important;
    }

    .tx-sm-116 {
        font-size: 116px;
    }

    .tx-sm-116-f {
        font-size: 116px !important;
    }

    .tx-sm-118 {
        font-size: 118px;
    }

    .tx-sm-118-f {
        font-size: 118px !important;
    }

    .tx-sm-120 {
        font-size: 120px;
    }

    .tx-sm-120-f {
        font-size: 120px !important;
    }

    .tx-sm-122 {
        font-size: 122px;
    }

    .tx-sm-122-f {
        font-size: 122px !important;
    }

    .tx-sm-124 {
        font-size: 124px;
    }

    .tx-sm-124-f {
        font-size: 124px !important;
    }

    .tx-sm-126 {
        font-size: 126px;
    }

    .tx-sm-126-f {
        font-size: 126px !important;
    }

    .tx-sm-128 {
        font-size: 128px;
    }

    .tx-sm-128-f {
        font-size: 128px !important;
    }

    .tx-sm-130 {
        font-size: 130px;
    }

    .tx-sm-130-f {
        font-size: 130px !important;
    }

    .tx-sm-132 {
        font-size: 132px;
    }

    .tx-sm-132-f {
        font-size: 132px !important;
    }

    .tx-sm-134 {
        font-size: 134px;
    }

    .tx-sm-134-f {
        font-size: 134px !important;
    }

    .tx-sm-136 {
        font-size: 136px;
    }

    .tx-sm-136-f {
        font-size: 136px !important;
    }

    .tx-sm-138 {
        font-size: 138px;
    }

    .tx-sm-138-f {
        font-size: 138px !important;
    }

    .tx-sm-140 {
        font-size: 140px;
    }

    .tx-sm-140-f {
        font-size: 140px !important;
    }

    .tx-sm-base {
        font-size: 0.875rem;
    }

    .tx-sm-bold {
        font-weight: 700;
    }

    .tx-sm-semibold {
        font-weight: 600;
    }

    .tx-sm-medium {
        font-weight: 500;
    }

    .tx-sm-normal {
        font-weight: 400;
    }

    .tx-sm-light {
        font-weight: 300;
    }

    .tx-sm-thin {
        font-weight: 200;
    }

    .tx-sm-xthin {
        font-weight: 100;
    }

    .lh-sm-0 {
        line-height: 0;
    }

    .lh-sm-1 {
        line-height: 1.1;
    }

    .lh-sm-2 {
        line-height: 1.2;
    }

    .lh-sm-3 {
        line-height: 1.3;
    }

    .lh-sm-4 {
        line-height: 1.4;
    }

    .lh-sm-5 {
        line-height: 1.5;
    }

    .lh-sm-6 {
        line-height: 1.6;
    }

    .lh-sm-7 {
        line-height: 1.7;
    }

    .lh-sm-8 {
        line-height: 1.8;
    }

    .lh-sm-9 {
        line-height: 1.9;
    }

    .lh-sm-10 {
        line-height: 2.0;
    }

    .lh-sm-11 {
        line-height: 2.1;
    }

    .lh-sm-12 {
        line-height: 2.2;
    }

    .lh-sm-13 {
        line-height: 2.3;
    }

    .lh-sm-14 {
        line-height: 2.4;
    }

    .lh-sm-15 {
        line-height: 2.5;
    }

    .tx-sm-center {
        text-align: center;
    }

    .tx-sm-right {
        text-align: right;
    }

    .tx-sm-left {
        text-align: left;
    }

    .tx-sm-center-f {
        text-align: center !important;
    }

    .tx-sm-right-f {
        text-align: right !important;
    }

    .tx-sm-left-f {
        text-align: left !important;
    }
}

@media (min-width: 768px) {
    .tx-md-8 {
        font-size: 8px;
    }

    .tx-md-8-f {
        font-size: 8px !important;
    }

    .tx-md-9 {
        font-size: 9px;
    }

    .tx-md-9-f {
        font-size: 9px !important;
    }

    .tx-md-10 {
        font-size: 10px;
    }

    .tx-md-10-f {
        font-size: 10px !important;
    }

    .tx-md-11 {
        font-size: 11px;
    }

    .tx-md-11-f {
        font-size: 11px !important;
    }

    .tx-md-12 {
        font-size: 12px;
    }

    .tx-md-12-f {
        font-size: 12px !important;
    }

    .tx-md-13 {
        font-size: 13px;
    }

    .tx-md-13-f {
        font-size: 13px !important;
    }

    .tx-md-14 {
        font-size: 14px;
    }

    .tx-md-14-f {
        font-size: 14px !important;
    }

    .tx-md-15 {
        font-size: 15px;
    }

    .tx-md-15-f {
        font-size: 15px !important;
    }

    .tx-md-16 {
        font-size: 16px;
    }

    .tx-md-16-f {
        font-size: 16px !important;
    }

    .tx-md-18 {
        font-size: 18px;
    }

    .tx-md-18-f {
        font-size: 18px !important;
    }

    .tx-md-20 {
        font-size: 20px;
    }

    .tx-md-20-f {
        font-size: 20px !important;
    }

    .tx-md-22 {
        font-size: 22px;
    }

    .tx-md-22-f {
        font-size: 22px !important;
    }

    .tx-md-24 {
        font-size: 24px;
    }

    .tx-md-24-f {
        font-size: 24px !important;
    }

    .tx-md-26 {
        font-size: 26px;
    }

    .tx-md-26-f {
        font-size: 26px !important;
    }

    .tx-md-28 {
        font-size: 28px;
    }

    .tx-md-28-f {
        font-size: 28px !important;
    }

    .tx-md-30 {
        font-size: 30px;
    }

    .tx-md-30-f {
        font-size: 30px !important;
    }

    .tx-md-32 {
        font-size: 32px;
    }

    .tx-md-32-f {
        font-size: 32px !important;
    }

    .tx-md-34 {
        font-size: 34px;
    }

    .tx-md-34-f {
        font-size: 34px !important;
    }

    .tx-md-36 {
        font-size: 36px;
    }

    .tx-md-36-f {
        font-size: 36px !important;
    }

    .tx-md-38 {
        font-size: 38px;
    }

    .tx-md-38-f {
        font-size: 38px !important;
    }

    .tx-md-40 {
        font-size: 40px;
    }

    .tx-md-40-f {
        font-size: 40px !important;
    }

    .tx-md-42 {
        font-size: 42px;
    }

    .tx-md-42-f {
        font-size: 42px !important;
    }

    .tx-md-44 {
        font-size: 44px;
    }

    .tx-md-44-f {
        font-size: 44px !important;
    }

    .tx-md-46 {
        font-size: 46px;
    }

    .tx-md-46-f {
        font-size: 46px !important;
    }

    .tx-md-48 {
        font-size: 48px;
    }

    .tx-md-48-f {
        font-size: 48px !important;
    }

    .tx-md-50 {
        font-size: 50px;
    }

    .tx-md-50-f {
        font-size: 50px !important;
    }

    .tx-md-52 {
        font-size: 52px;
    }

    .tx-md-52-f {
        font-size: 52px !important;
    }

    .tx-md-54 {
        font-size: 54px;
    }

    .tx-md-54-f {
        font-size: 54px !important;
    }

    .tx-md-56 {
        font-size: 56px;
    }

    .tx-md-56-f {
        font-size: 56px !important;
    }

    .tx-md-58 {
        font-size: 58px;
    }

    .tx-md-58-f {
        font-size: 58px !important;
    }

    .tx-md-60 {
        font-size: 60px;
    }

    .tx-md-60-f {
        font-size: 60px !important;
    }

    .tx-md-62 {
        font-size: 62px;
    }

    .tx-md-62-f {
        font-size: 62px !important;
    }

    .tx-md-64 {
        font-size: 64px;
    }

    .tx-md-64-f {
        font-size: 64px !important;
    }

    .tx-md-66 {
        font-size: 66px;
    }

    .tx-md-66-f {
        font-size: 66px !important;
    }

    .tx-md-68 {
        font-size: 68px;
    }

    .tx-md-68-f {
        font-size: 68px !important;
    }

    .tx-md-70 {
        font-size: 70px;
    }

    .tx-md-70-f {
        font-size: 70px !important;
    }

    .tx-md-72 {
        font-size: 72px;
    }

    .tx-md-72-f {
        font-size: 72px !important;
    }

    .tx-md-74 {
        font-size: 74px;
    }

    .tx-md-74-f {
        font-size: 74px !important;
    }

    .tx-md-76 {
        font-size: 76px;
    }

    .tx-md-76-f {
        font-size: 76px !important;
    }

    .tx-md-78 {
        font-size: 78px;
    }

    .tx-md-78-f {
        font-size: 78px !important;
    }

    .tx-md-80 {
        font-size: 80px;
    }

    .tx-md-80-f {
        font-size: 80px !important;
    }

    .tx-md-82 {
        font-size: 82px;
    }

    .tx-md-82-f {
        font-size: 82px !important;
    }

    .tx-md-84 {
        font-size: 84px;
    }

    .tx-md-84-f {
        font-size: 84px !important;
    }

    .tx-md-86 {
        font-size: 86px;
    }

    .tx-md-86-f {
        font-size: 86px !important;
    }

    .tx-md-88 {
        font-size: 88px;
    }

    .tx-md-88-f {
        font-size: 88px !important;
    }

    .tx-md-90 {
        font-size: 90px;
    }

    .tx-md-90-f {
        font-size: 90px !important;
    }

    .tx-md-92 {
        font-size: 92px;
    }

    .tx-md-92-f {
        font-size: 92px !important;
    }

    .tx-md-94 {
        font-size: 94px;
    }

    .tx-md-94-f {
        font-size: 94px !important;
    }

    .tx-md-96 {
        font-size: 96px;
    }

    .tx-md-96-f {
        font-size: 96px !important;
    }

    .tx-md-98 {
        font-size: 98px;
    }

    .tx-md-98-f {
        font-size: 98px !important;
    }

    .tx-md-100 {
        font-size: 100px;
    }

    .tx-md-100-f {
        font-size: 100px !important;
    }

    .tx-md-102 {
        font-size: 102px;
    }

    .tx-md-102-f {
        font-size: 102px !important;
    }

    .tx-md-104 {
        font-size: 104px;
    }

    .tx-md-104-f {
        font-size: 104px !important;
    }

    .tx-md-106 {
        font-size: 106px;
    }

    .tx-md-106-f {
        font-size: 106px !important;
    }

    .tx-md-108 {
        font-size: 108px;
    }

    .tx-md-108-f {
        font-size: 108px !important;
    }

    .tx-md-110 {
        font-size: 110px;
    }

    .tx-md-110-f {
        font-size: 110px !important;
    }

    .tx-md-112 {
        font-size: 112px;
    }

    .tx-md-112-f {
        font-size: 112px !important;
    }

    .tx-md-114 {
        font-size: 114px;
    }

    .tx-md-114-f {
        font-size: 114px !important;
    }

    .tx-md-116 {
        font-size: 116px;
    }

    .tx-md-116-f {
        font-size: 116px !important;
    }

    .tx-md-118 {
        font-size: 118px;
    }

    .tx-md-118-f {
        font-size: 118px !important;
    }

    .tx-md-120 {
        font-size: 120px;
    }

    .tx-md-120-f {
        font-size: 120px !important;
    }

    .tx-md-122 {
        font-size: 122px;
    }

    .tx-md-122-f {
        font-size: 122px !important;
    }

    .tx-md-124 {
        font-size: 124px;
    }

    .tx-md-124-f {
        font-size: 124px !important;
    }

    .tx-md-126 {
        font-size: 126px;
    }

    .tx-md-126-f {
        font-size: 126px !important;
    }

    .tx-md-128 {
        font-size: 128px;
    }

    .tx-md-128-f {
        font-size: 128px !important;
    }

    .tx-md-130 {
        font-size: 130px;
    }

    .tx-md-130-f {
        font-size: 130px !important;
    }

    .tx-md-132 {
        font-size: 132px;
    }

    .tx-md-132-f {
        font-size: 132px !important;
    }

    .tx-md-134 {
        font-size: 134px;
    }

    .tx-md-134-f {
        font-size: 134px !important;
    }

    .tx-md-136 {
        font-size: 136px;
    }

    .tx-md-136-f {
        font-size: 136px !important;
    }

    .tx-md-138 {
        font-size: 138px;
    }

    .tx-md-138-f {
        font-size: 138px !important;
    }

    .tx-md-140 {
        font-size: 140px;
    }

    .tx-md-140-f {
        font-size: 140px !important;
    }

    .tx-md-base {
        font-size: 0.875rem;
    }

    .tx-md-bold {
        font-weight: 700;
    }

    .tx-md-semibold {
        font-weight: 600;
    }

    .tx-md-medium {
        font-weight: 500;
    }

    .tx-md-normal {
        font-weight: 400;
    }

    .tx-md-light {
        font-weight: 300;
    }

    .tx-md-thin {
        font-weight: 200;
    }

    .tx-md-xthin {
        font-weight: 100;
    }

    .lh-md-0 {
        line-height: 0;
    }

    .lh-md-1 {
        line-height: 1.1;
    }

    .lh-md-2 {
        line-height: 1.2;
    }

    .lh-md-3 {
        line-height: 1.3;
    }

    .lh-md-4 {
        line-height: 1.4;
    }

    .lh-md-5 {
        line-height: 1.5;
    }

    .lh-md-6 {
        line-height: 1.6;
    }

    .lh-md-7 {
        line-height: 1.7;
    }

    .lh-md-8 {
        line-height: 1.8;
    }

    .lh-md-9 {
        line-height: 1.9;
    }

    .lh-md-10 {
        line-height: 2.0;
    }

    .lh-md-11 {
        line-height: 2.1;
    }

    .lh-md-12 {
        line-height: 2.2;
    }

    .lh-md-13 {
        line-height: 2.3;
    }

    .lh-md-14 {
        line-height: 2.4;
    }

    .lh-md-15 {
        line-height: 2.5;
    }

    .tx-md-center {
        text-align: center;
    }

    .tx-md-right {
        text-align: right;
    }

    .tx-md-left {
        text-align: left;
    }

    .tx-md-center-f {
        text-align: center !important;
    }

    .tx-md-right-f {
        text-align: right !important;
    }

    .tx-md-left-f {
        text-align: left !important;
    }
}

@media (min-width: 992px) {
    .tx-lg-8 {
        font-size: 8px;
    }

    .tx-lg-8-f {
        font-size: 8px !important;
    }

    .tx-lg-9 {
        font-size: 9px;
    }

    .tx-lg-9-f {
        font-size: 9px !important;
    }

    .tx-lg-10 {
        font-size: 10px;
    }

    .tx-lg-10-f {
        font-size: 10px !important;
    }

    .tx-lg-11 {
        font-size: 11px;
    }

    .tx-lg-11-f {
        font-size: 11px !important;
    }

    .tx-lg-12 {
        font-size: 12px;
    }

    .tx-lg-12-f {
        font-size: 12px !important;
    }

    .tx-lg-13 {
        font-size: 13px;
    }

    .tx-lg-13-f {
        font-size: 13px !important;
    }

    .tx-lg-14 {
        font-size: 14px;
    }

    .tx-lg-14-f {
        font-size: 14px !important;
    }

    .tx-lg-15 {
        font-size: 15px;
    }

    .tx-lg-15-f {
        font-size: 15px !important;
    }

    .tx-lg-16 {
        font-size: 16px;
    }

    .tx-lg-16-f {
        font-size: 16px !important;
    }

    .tx-lg-18 {
        font-size: 18px;
    }

    .tx-lg-18-f {
        font-size: 18px !important;
    }

    .tx-lg-20 {
        font-size: 20px;
    }

    .tx-lg-20-f {
        font-size: 20px !important;
    }

    .tx-lg-22 {
        font-size: 22px;
    }

    .tx-lg-22-f {
        font-size: 22px !important;
    }

    .tx-lg-24 {
        font-size: 24px;
    }

    .tx-lg-24-f {
        font-size: 24px !important;
    }

    .tx-lg-26 {
        font-size: 26px;
    }

    .tx-lg-26-f {
        font-size: 26px !important;
    }

    .tx-lg-28 {
        font-size: 28px;
    }

    .tx-lg-28-f {
        font-size: 28px !important;
    }

    .tx-lg-30 {
        font-size: 30px;
    }

    .tx-lg-30-f {
        font-size: 30px !important;
    }

    .tx-lg-32 {
        font-size: 32px;
    }

    .tx-lg-32-f {
        font-size: 32px !important;
    }

    .tx-lg-34 {
        font-size: 34px;
    }

    .tx-lg-34-f {
        font-size: 34px !important;
    }

    .tx-lg-36 {
        font-size: 36px;
    }

    .tx-lg-36-f {
        font-size: 36px !important;
    }

    .tx-lg-38 {
        font-size: 38px;
    }

    .tx-lg-38-f {
        font-size: 38px !important;
    }

    .tx-lg-40 {
        font-size: 40px;
    }

    .tx-lg-40-f {
        font-size: 40px !important;
    }

    .tx-lg-42 {
        font-size: 42px;
    }

    .tx-lg-42-f {
        font-size: 42px !important;
    }

    .tx-lg-44 {
        font-size: 44px;
    }

    .tx-lg-44-f {
        font-size: 44px !important;
    }

    .tx-lg-46 {
        font-size: 46px;
    }

    .tx-lg-46-f {
        font-size: 46px !important;
    }

    .tx-lg-48 {
        font-size: 48px;
    }

    .tx-lg-48-f {
        font-size: 48px !important;
    }

    .tx-lg-50 {
        font-size: 50px;
    }

    .tx-lg-50-f {
        font-size: 50px !important;
    }

    .tx-lg-52 {
        font-size: 52px;
    }

    .tx-lg-52-f {
        font-size: 52px !important;
    }

    .tx-lg-54 {
        font-size: 54px;
    }

    .tx-lg-54-f {
        font-size: 54px !important;
    }

    .tx-lg-56 {
        font-size: 56px;
    }

    .tx-lg-56-f {
        font-size: 56px !important;
    }

    .tx-lg-58 {
        font-size: 58px;
    }

    .tx-lg-58-f {
        font-size: 58px !important;
    }

    .tx-lg-60 {
        font-size: 60px;
    }

    .tx-lg-60-f {
        font-size: 60px !important;
    }

    .tx-lg-62 {
        font-size: 62px;
    }

    .tx-lg-62-f {
        font-size: 62px !important;
    }

    .tx-lg-64 {
        font-size: 64px;
    }

    .tx-lg-64-f {
        font-size: 64px !important;
    }

    .tx-lg-66 {
        font-size: 66px;
    }

    .tx-lg-66-f {
        font-size: 66px !important;
    }

    .tx-lg-68 {
        font-size: 68px;
    }

    .tx-lg-68-f {
        font-size: 68px !important;
    }

    .tx-lg-70 {
        font-size: 70px;
    }

    .tx-lg-70-f {
        font-size: 70px !important;
    }

    .tx-lg-72 {
        font-size: 72px;
    }

    .tx-lg-72-f {
        font-size: 72px !important;
    }

    .tx-lg-74 {
        font-size: 74px;
    }

    .tx-lg-74-f {
        font-size: 74px !important;
    }

    .tx-lg-76 {
        font-size: 76px;
    }

    .tx-lg-76-f {
        font-size: 76px !important;
    }

    .tx-lg-78 {
        font-size: 78px;
    }

    .tx-lg-78-f {
        font-size: 78px !important;
    }

    .tx-lg-80 {
        font-size: 80px;
    }

    .tx-lg-80-f {
        font-size: 80px !important;
    }

    .tx-lg-82 {
        font-size: 82px;
    }

    .tx-lg-82-f {
        font-size: 82px !important;
    }

    .tx-lg-84 {
        font-size: 84px;
    }

    .tx-lg-84-f {
        font-size: 84px !important;
    }

    .tx-lg-86 {
        font-size: 86px;
    }

    .tx-lg-86-f {
        font-size: 86px !important;
    }

    .tx-lg-88 {
        font-size: 88px;
    }

    .tx-lg-88-f {
        font-size: 88px !important;
    }

    .tx-lg-90 {
        font-size: 90px;
    }

    .tx-lg-90-f {
        font-size: 90px !important;
    }

    .tx-lg-92 {
        font-size: 92px;
    }

    .tx-lg-92-f {
        font-size: 92px !important;
    }

    .tx-lg-94 {
        font-size: 94px;
    }

    .tx-lg-94-f {
        font-size: 94px !important;
    }

    .tx-lg-96 {
        font-size: 96px;
    }

    .tx-lg-96-f {
        font-size: 96px !important;
    }

    .tx-lg-98 {
        font-size: 98px;
    }

    .tx-lg-98-f {
        font-size: 98px !important;
    }

    .tx-lg-100 {
        font-size: 100px;
    }

    .tx-lg-100-f {
        font-size: 100px !important;
    }

    .tx-lg-102 {
        font-size: 102px;
    }

    .tx-lg-102-f {
        font-size: 102px !important;
    }

    .tx-lg-104 {
        font-size: 104px;
    }

    .tx-lg-104-f {
        font-size: 104px !important;
    }

    .tx-lg-106 {
        font-size: 106px;
    }

    .tx-lg-106-f {
        font-size: 106px !important;
    }

    .tx-lg-108 {
        font-size: 108px;
    }

    .tx-lg-108-f {
        font-size: 108px !important;
    }

    .tx-lg-110 {
        font-size: 110px;
    }

    .tx-lg-110-f {
        font-size: 110px !important;
    }

    .tx-lg-112 {
        font-size: 112px;
    }

    .tx-lg-112-f {
        font-size: 112px !important;
    }

    .tx-lg-114 {
        font-size: 114px;
    }

    .tx-lg-114-f {
        font-size: 114px !important;
    }

    .tx-lg-116 {
        font-size: 116px;
    }

    .tx-lg-116-f {
        font-size: 116px !important;
    }

    .tx-lg-118 {
        font-size: 118px;
    }

    .tx-lg-118-f {
        font-size: 118px !important;
    }

    .tx-lg-120 {
        font-size: 120px;
    }

    .tx-lg-120-f {
        font-size: 120px !important;
    }

    .tx-lg-122 {
        font-size: 122px;
    }

    .tx-lg-122-f {
        font-size: 122px !important;
    }

    .tx-lg-124 {
        font-size: 124px;
    }

    .tx-lg-124-f {
        font-size: 124px !important;
    }

    .tx-lg-126 {
        font-size: 126px;
    }

    .tx-lg-126-f {
        font-size: 126px !important;
    }

    .tx-lg-128 {
        font-size: 128px;
    }

    .tx-lg-128-f {
        font-size: 128px !important;
    }

    .tx-lg-130 {
        font-size: 130px;
    }

    .tx-lg-130-f {
        font-size: 130px !important;
    }

    .tx-lg-132 {
        font-size: 132px;
    }

    .tx-lg-132-f {
        font-size: 132px !important;
    }

    .tx-lg-134 {
        font-size: 134px;
    }

    .tx-lg-134-f {
        font-size: 134px !important;
    }

    .tx-lg-136 {
        font-size: 136px;
    }

    .tx-lg-136-f {
        font-size: 136px !important;
    }

    .tx-lg-138 {
        font-size: 138px;
    }

    .tx-lg-138-f {
        font-size: 138px !important;
    }

    .tx-lg-140 {
        font-size: 140px;
    }

    .tx-lg-140-f {
        font-size: 140px !important;
    }

    .tx-lg-base {
        font-size: 0.875rem;
    }

    .tx-lg-bold {
        font-weight: 700;
    }

    .tx-lg-semibold {
        font-weight: 600;
    }

    .tx-lg-medium {
        font-weight: 500;
    }

    .tx-lg-normal {
        font-weight: 400;
    }

    .tx-lg-light {
        font-weight: 300;
    }

    .tx-lg-thin {
        font-weight: 200;
    }

    .tx-lg-xthin {
        font-weight: 100;
    }

    .lh-lg-0 {
        line-height: 0;
    }

    .lh-lg-1 {
        line-height: 1.1;
    }

    .lh-lg-2 {
        line-height: 1.2;
    }

    .lh-lg-3 {
        line-height: 1.3;
    }

    .lh-lg-4 {
        line-height: 1.4;
    }

    .lh-lg-5 {
        line-height: 1.5;
    }

    .lh-lg-6 {
        line-height: 1.6;
    }

    .lh-lg-7 {
        line-height: 1.7;
    }

    .lh-lg-8 {
        line-height: 1.8;
    }

    .lh-lg-9 {
        line-height: 1.9;
    }

    .lh-lg-10 {
        line-height: 2.0;
    }

    .lh-lg-11 {
        line-height: 2.1;
    }

    .lh-lg-12 {
        line-height: 2.2;
    }

    .lh-lg-13 {
        line-height: 2.3;
    }

    .lh-lg-14 {
        line-height: 2.4;
    }

    .lh-lg-15 {
        line-height: 2.5;
    }

    .tx-lg-center {
        text-align: center;
    }

    .tx-lg-right {
        text-align: right;
    }

    .tx-lg-left {
        text-align: left;
    }

    .tx-lg-center-f {
        text-align: center !important;
    }

    .tx-lg-right-f {
        text-align: right !important;
    }

    .tx-lg-left-f {
        text-align: left !important;
    }
}

@media (min-width: 1200px) {
    .tx-xl-8 {
        font-size: 8px;
    }

    .tx-xl-8-f {
        font-size: 8px !important;
    }

    .tx-xl-9 {
        font-size: 9px;
    }

    .tx-xl-9-f {
        font-size: 9px !important;
    }

    .tx-xl-10 {
        font-size: 10px;
    }

    .tx-xl-10-f {
        font-size: 10px !important;
    }

    .tx-xl-11 {
        font-size: 11px;
    }

    .tx-xl-11-f {
        font-size: 11px !important;
    }

    .tx-xl-12 {
        font-size: 12px;
    }

    .tx-xl-12-f {
        font-size: 12px !important;
    }

    .tx-xl-13 {
        font-size: 13px;
    }

    .tx-xl-13-f {
        font-size: 13px !important;
    }

    .tx-xl-14 {
        font-size: 14px;
    }

    .tx-xl-14-f {
        font-size: 14px !important;
    }

    .tx-xl-15 {
        font-size: 15px;
    }

    .tx-xl-15-f {
        font-size: 15px !important;
    }

    .tx-xl-16 {
        font-size: 16px;
    }

    .tx-xl-16-f {
        font-size: 16px !important;
    }

    .tx-xl-18 {
        font-size: 18px;
    }

    .tx-xl-18-f {
        font-size: 18px !important;
    }

    .tx-xl-20 {
        font-size: 20px;
    }

    .tx-xl-20-f {
        font-size: 20px !important;
    }

    .tx-xl-22 {
        font-size: 22px;
    }

    .tx-xl-22-f {
        font-size: 22px !important;
    }

    .tx-xl-24 {
        font-size: 24px;
    }

    .tx-xl-24-f {
        font-size: 24px !important;
    }

    .tx-xl-26 {
        font-size: 26px;
    }

    .tx-xl-26-f {
        font-size: 26px !important;
    }

    .tx-xl-28 {
        font-size: 28px;
    }

    .tx-xl-28-f {
        font-size: 28px !important;
    }

    .tx-xl-30 {
        font-size: 30px;
    }

    .tx-xl-30-f {
        font-size: 30px !important;
    }

    .tx-xl-32 {
        font-size: 32px;
    }

    .tx-xl-32-f {
        font-size: 32px !important;
    }

    .tx-xl-34 {
        font-size: 34px;
    }

    .tx-xl-34-f {
        font-size: 34px !important;
    }

    .tx-xl-36 {
        font-size: 36px;
    }

    .tx-xl-36-f {
        font-size: 36px !important;
    }

    .tx-xl-38 {
        font-size: 38px;
    }

    .tx-xl-38-f {
        font-size: 38px !important;
    }

    .tx-xl-40 {
        font-size: 40px;
    }

    .tx-xl-40-f {
        font-size: 40px !important;
    }

    .tx-xl-42 {
        font-size: 42px;
    }

    .tx-xl-42-f {
        font-size: 42px !important;
    }

    .tx-xl-44 {
        font-size: 44px;
    }

    .tx-xl-44-f {
        font-size: 44px !important;
    }

    .tx-xl-46 {
        font-size: 46px;
    }

    .tx-xl-46-f {
        font-size: 46px !important;
    }

    .tx-xl-48 {
        font-size: 48px;
    }

    .tx-xl-48-f {
        font-size: 48px !important;
    }

    .tx-xl-50 {
        font-size: 50px;
    }

    .tx-xl-50-f {
        font-size: 50px !important;
    }

    .tx-xl-52 {
        font-size: 52px;
    }

    .tx-xl-52-f {
        font-size: 52px !important;
    }

    .tx-xl-54 {
        font-size: 54px;
    }

    .tx-xl-54-f {
        font-size: 54px !important;
    }

    .tx-xl-56 {
        font-size: 56px;
    }

    .tx-xl-56-f {
        font-size: 56px !important;
    }

    .tx-xl-58 {
        font-size: 58px;
    }

    .tx-xl-58-f {
        font-size: 58px !important;
    }

    .tx-xl-60 {
        font-size: 60px;
    }

    .tx-xl-60-f {
        font-size: 60px !important;
    }

    .tx-xl-62 {
        font-size: 62px;
    }

    .tx-xl-62-f {
        font-size: 62px !important;
    }

    .tx-xl-64 {
        font-size: 64px;
    }

    .tx-xl-64-f {
        font-size: 64px !important;
    }

    .tx-xl-66 {
        font-size: 66px;
    }

    .tx-xl-66-f {
        font-size: 66px !important;
    }

    .tx-xl-68 {
        font-size: 68px;
    }

    .tx-xl-68-f {
        font-size: 68px !important;
    }

    .tx-xl-70 {
        font-size: 70px;
    }

    .tx-xl-70-f {
        font-size: 70px !important;
    }

    .tx-xl-72 {
        font-size: 72px;
    }

    .tx-xl-72-f {
        font-size: 72px !important;
    }

    .tx-xl-74 {
        font-size: 74px;
    }

    .tx-xl-74-f {
        font-size: 74px !important;
    }

    .tx-xl-76 {
        font-size: 76px;
    }

    .tx-xl-76-f {
        font-size: 76px !important;
    }

    .tx-xl-78 {
        font-size: 78px;
    }

    .tx-xl-78-f {
        font-size: 78px !important;
    }

    .tx-xl-80 {
        font-size: 80px;
    }

    .tx-xl-80-f {
        font-size: 80px !important;
    }

    .tx-xl-82 {
        font-size: 82px;
    }

    .tx-xl-82-f {
        font-size: 82px !important;
    }

    .tx-xl-84 {
        font-size: 84px;
    }

    .tx-xl-84-f {
        font-size: 84px !important;
    }

    .tx-xl-86 {
        font-size: 86px;
    }

    .tx-xl-86-f {
        font-size: 86px !important;
    }

    .tx-xl-88 {
        font-size: 88px;
    }

    .tx-xl-88-f {
        font-size: 88px !important;
    }

    .tx-xl-90 {
        font-size: 90px;
    }

    .tx-xl-90-f {
        font-size: 90px !important;
    }

    .tx-xl-92 {
        font-size: 92px;
    }

    .tx-xl-92-f {
        font-size: 92px !important;
    }

    .tx-xl-94 {
        font-size: 94px;
    }

    .tx-xl-94-f {
        font-size: 94px !important;
    }

    .tx-xl-96 {
        font-size: 96px;
    }

    .tx-xl-96-f {
        font-size: 96px !important;
    }

    .tx-xl-98 {
        font-size: 98px;
    }

    .tx-xl-98-f {
        font-size: 98px !important;
    }

    .tx-xl-100 {
        font-size: 100px;
    }

    .tx-xl-100-f {
        font-size: 100px !important;
    }

    .tx-xl-102 {
        font-size: 102px;
    }

    .tx-xl-102-f {
        font-size: 102px !important;
    }

    .tx-xl-104 {
        font-size: 104px;
    }

    .tx-xl-104-f {
        font-size: 104px !important;
    }

    .tx-xl-106 {
        font-size: 106px;
    }

    .tx-xl-106-f {
        font-size: 106px !important;
    }

    .tx-xl-108 {
        font-size: 108px;
    }

    .tx-xl-108-f {
        font-size: 108px !important;
    }

    .tx-xl-110 {
        font-size: 110px;
    }

    .tx-xl-110-f {
        font-size: 110px !important;
    }

    .tx-xl-112 {
        font-size: 112px;
    }

    .tx-xl-112-f {
        font-size: 112px !important;
    }

    .tx-xl-114 {
        font-size: 114px;
    }

    .tx-xl-114-f {
        font-size: 114px !important;
    }

    .tx-xl-116 {
        font-size: 116px;
    }

    .tx-xl-116-f {
        font-size: 116px !important;
    }

    .tx-xl-118 {
        font-size: 118px;
    }

    .tx-xl-118-f {
        font-size: 118px !important;
    }

    .tx-xl-120 {
        font-size: 120px;
    }

    .tx-xl-120-f {
        font-size: 120px !important;
    }

    .tx-xl-122 {
        font-size: 122px;
    }

    .tx-xl-122-f {
        font-size: 122px !important;
    }

    .tx-xl-124 {
        font-size: 124px;
    }

    .tx-xl-124-f {
        font-size: 124px !important;
    }

    .tx-xl-126 {
        font-size: 126px;
    }

    .tx-xl-126-f {
        font-size: 126px !important;
    }

    .tx-xl-128 {
        font-size: 128px;
    }

    .tx-xl-128-f {
        font-size: 128px !important;
    }

    .tx-xl-130 {
        font-size: 130px;
    }

    .tx-xl-130-f {
        font-size: 130px !important;
    }

    .tx-xl-132 {
        font-size: 132px;
    }

    .tx-xl-132-f {
        font-size: 132px !important;
    }

    .tx-xl-134 {
        font-size: 134px;
    }

    .tx-xl-134-f {
        font-size: 134px !important;
    }

    .tx-xl-136 {
        font-size: 136px;
    }

    .tx-xl-136-f {
        font-size: 136px !important;
    }

    .tx-xl-138 {
        font-size: 138px;
    }

    .tx-xl-138-f {
        font-size: 138px !important;
    }

    .tx-xl-140 {
        font-size: 140px;
    }

    .tx-xl-140-f {
        font-size: 140px !important;
    }

    .tx-xl-base {
        font-size: 0.875rem;
    }

    .tx-xl-bold {
        font-weight: 700;
    }

    .tx-xl-semibold {
        font-weight: 600;
    }

    .tx-xl-medium {
        font-weight: 500;
    }

    .tx-xl-normal {
        font-weight: 400;
    }

    .tx-xl-light {
        font-weight: 300;
    }

    .tx-xl-thin {
        font-weight: 200;
    }

    .tx-xl-xthin {
        font-weight: 100;
    }

    .lh-xl-0 {
        line-height: 0;
    }

    .lh-xl-1 {
        line-height: 1.1;
    }

    .lh-xl-2 {
        line-height: 1.2;
    }

    .lh-xl-3 {
        line-height: 1.3;
    }

    .lh-xl-4 {
        line-height: 1.4;
    }

    .lh-xl-5 {
        line-height: 1.5;
    }

    .lh-xl-6 {
        line-height: 1.6;
    }

    .lh-xl-7 {
        line-height: 1.7;
    }

    .lh-xl-8 {
        line-height: 1.8;
    }

    .lh-xl-9 {
        line-height: 1.9;
    }

    .lh-xl-10 {
        line-height: 2.0;
    }

    .lh-xl-11 {
        line-height: 2.1;
    }

    .lh-xl-12 {
        line-height: 2.2;
    }

    .lh-xl-13 {
        line-height: 2.3;
    }

    .lh-xl-14 {
        line-height: 2.4;
    }

    .lh-xl-15 {
        line-height: 2.5;
    }

    .tx-xl-center {
        text-align: center;
    }

    .tx-xl-right {
        text-align: right;
    }

    .tx-xl-left {
        text-align: left;
    }

    .tx-xl-center-f {
        text-align: center !important;
    }

    .tx-xl-right-f {
        text-align: right !important;
    }

    .tx-xl-left-f {
        text-align: left !important;
    }
}

.text-monospace {
    font-family: SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace !important;
}

.text-justify {
    text-align: justify !important;
}

.text-wrap {
    white-space: normal !important;
    font-size: 14px;
    line-height: 1.66;
}

.text-nowrap {
    white-space: nowrap !important;
}

.text-truncate {
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
}

.text-left {
    text-align: left !important;
}

.text-right {
    text-align: right !important;
}

.text-center {
    text-align: center !important;
}

@media (min-width: 576px) {
    .text-sm-left {
        text-align: left !important;
    }

    .text-sm-right {
        text-align: right !important;
    }

    .text-sm-center {
        text-align: center !important;
    }
}

@media (min-width: 768px) {
    .text-md-left {
        text-align: left !important;
    }

    .text-md-right {
        text-align: right !important;
    }

    .text-md-center {
        text-align: center !important;
    }
}

@media (min-width: 992px) {
    .text-lg-left {
        text-align: left !important;
    }

    .text-lg-right {
        text-align: right !important;
    }

    .text-lg-center {
        text-align: center !important;
    }
}

@media (min-width: 1200px) {
    .text-xl-left {
        text-align: left !important;
    }

    .text-xl-right {
        text-align: right !important;
    }

    .text-xl-center {
        text-align: center !important;
    }
}

.text-lowercase {
    text-transform: lowercase !important;
}

.text-uppercase {
    text-transform: uppercase !important;
}

.text-capitalize {
    text-transform: capitalize !important;
}

.font-weight-light {
    font-weight: 300 !important;
}

.font-weight-lighter {
    font-weight: lighter !important;
}

.font-weight-normal {
    font-weight: 400 !important;
}

.font-weight-semibold {
    font-weight: 500 !important;
}

.font-weight-medium {
    font-weight: 600 !important;
}

.font-weight-bold {
    font-weight: 700 !important;
}

.font-weight-bolder {
    font-weight: bolder !important;
}

.font-italic {
    font-style: italic !important;
}

.text-white {
    color: #ffffff !important;
}

.text-secondary {
    color: #e54d26 !important;
}

a.text-secondary:hover,
a.text-secondary:focus {
    color: #e06b32 !important;
}

.text-success {
    color: #269c8e !important;
}

a.text-success:hover,
a.text-success:focus {
    color: #226401 !important;
}

.text-info {
    color: #00aeff !important;
}

a.text-info:hover,
a.text-info:focus {
    color: #0f6674 !important;
}

.text-warning {
    color: #ff9e01 !important;
}

a.text-warning:hover,
a.text-warning:focus {
    color: #ba8b00 !important;
}

.text-danger {
    color: #ff0000 !important;
}

a.text-danger:hover,
a.text-danger:focus {
    color: #a71d2a !important;
}

.text-light {
    color: #f8f9fa !important;
}

a.text-light:hover,
a.text-light:focus {
    color: #c5cbda !important;
}

.text-dark {
    color: #171b27 !important;
}

a.text-dark:hover,
a.text-dark:focus {
    color: #1e2533 !important;
}

.text-body {
    color: #465988 !important;
}

.text-muted {
    color: #737277 !important;
}

.text-purple {
    color: #5f1dd7 !important;
}

.text-black-50 {
    color: rgba(0, 0, 0, 0.5) !important;
}

.text-white-50 {
    color: rgba(255, 255, 255, 0.5) !important;
}

.text-hide {
    font: 0/0 a;
    color: transparent;
    text-shadow: none;
    background-color: transparent;
    border: 0;
}

.text-decoration-none {
    text-decoration: none !important;
}

.text-break {
    word-break: break-word !important;
    overflow-wrap: break-word !important;
}

.text-reset {
    color: inherit !important;
}

.visible {
    visibility: visible !important;
}

.invisible {
    visibility: hidden !important;
}

/* ###### Typography  ###### */
/* ###### Width  ###### */
.wd-1 {
    width: 1px;
}

.wd-2 {
    width: 2px;
}

.wd-3 {
    width: 3px;
}

.wd-4 {
    width: 4px;
}

.wd-6 {
    width: 6px;
}

.wd-7 {
    width: 7px;
}

.wd-8 {
    width: 8px;
}

.wd-9 {
    width: 9px;
}

.wd-5 {
    width: 5px;
}

.wd-10 {
    width: 10px;
}

.wd-5p {
    width: 5%;
}

.mx-wd-5p {
    max-width: 5%;
}

.mn-wd-5p {
    min-width: 5%;
}

.wd-5-f {
    width: 5px !important;
}

.wd-5p-f {
    width: 5% !important;
}

.mx-wd-5p-f {
    max-width: 5% !important;
}

.mn-wd-5p-f {
    min-width: 5% !important;
}

.wd-10p {
    width: 10%;
}

.mx-wd-10p {
    max-width: 10%;
}

.mn-wd-10p {
    min-width: 10%;
}

.wd-10-f {
    width: 10px !important;
}

.wd-10p-f {
    width: 10% !important;
}

.mx-wd-10p-f {
    max-width: 10% !important;
}

.mn-wd-10p-f {
    min-width: 10% !important;
}

.wd-15 {
    width: 15px;
}

.wd-15p {
    width: 15%;
}

.mx-wd-15p {
    max-width: 15%;
}

.mn-wd-15p {
    min-width: 15%;
}

.wd-15-f {
    width: 15px !important;
}

.wd-15p-f {
    width: 15% !important;
}

.mx-wd-15p-f {
    max-width: 15% !important;
}

.mn-wd-15p-f {
    min-width: 15% !important;
}

.wd-20 {
    width: 20px;
}

.wd-20p {
    width: 20%;
}

.mx-wd-20p {
    max-width: 20%;
}

.mn-wd-20p {
    min-width: 20%;
}

.wd-20-f {
    width: 20px !important;
}

.wd-20p-f {
    width: 20% !important;
}

.mx-wd-20p-f {
    max-width: 20% !important;
}

.mn-wd-20p-f {
    min-width: 20% !important;
}

.wd-25 {
    width: 25px;
}

.wd-25p {
    width: 25%;
}

.mx-wd-25p {
    max-width: 25%;
}

.mn-wd-25p {
    min-width: 25%;
}

.wd-25-f {
    width: 25px !important;
}

.wd-25p-f {
    width: 25% !important;
}

.mx-wd-25p-f {
    max-width: 25% !important;
}

.mn-wd-25p-f {
    min-width: 25% !important;
}

.wd-30 {
    width: 30px;
}

.wd-30p {
    width: 30%;
}

.mx-wd-30p {
    max-width: 30%;
}

.mn-wd-30p {
    min-width: 30%;
}

.wd-30-f {
    width: 30px !important;
}

.wd-30p-f {
    width: 30% !important;
}

.mx-wd-30p-f {
    max-width: 30% !important;
}

.mn-wd-30p-f {
    min-width: 30% !important;
}

.wd-35 {
    width: 35px;
}

.wd-35p {
    width: 35%;
}

.mx-wd-35p {
    max-width: 35%;
}

.mn-wd-35p {
    min-width: 35%;
}

.wd-35-f {
    width: 35px !important;
}

.wd-35p-f {
    width: 35% !important;
}

.mx-wd-35p-f {
    max-width: 35% !important;
}

.mn-wd-35p-f {
    min-width: 35% !important;
}

.wd-40 {
    width: 40px;
}

.wd-40p {
    width: 40%;
}

.mx-wd-40p {
    max-width: 40%;
}

.mn-wd-40p {
    min-width: 40%;
}

.wd-40-f {
    width: 40px !important;
}

.wd-40p-f {
    width: 40% !important;
}

.mx-wd-40p-f {
    max-width: 40% !important;
}

.mn-wd-40p-f {
    min-width: 40% !important;
}

.wd-45 {
    width: 45px;
}

.wd-45p {
    width: 45%;
}

.mx-wd-45p {
    max-width: 45%;
}

.mn-wd-45p {
    min-width: 45%;
}

.wd-45-f {
    width: 45px !important;
}

.wd-45p-f {
    width: 45% !important;
}

.mx-wd-45p-f {
    max-width: 45% !important;
}

.mn-wd-45p-f {
    min-width: 45% !important;
}

.wd-50 {
    width: 50px;
}

.wd-50p {
    width: 50%;
}

.mx-wd-50p {
    max-width: 50%;
}

.mn-wd-50p {
    min-width: 50%;
}

.wd-50-f {
    width: 50px !important;
}

.wd-50p-f {
    width: 50% !important;
}

.mx-wd-50p-f {
    max-width: 50% !important;
}

.mn-wd-50p-f {
    min-width: 50% !important;
}

.wd-55 {
    width: 55px;
}

.wd-55p {
    width: 55%;
}

.mx-wd-55p {
    max-width: 55%;
}

.mn-wd-55p {
    min-width: 55%;
}

.wd-55-f {
    width: 55px !important;
}

.wd-55p-f {
    width: 55% !important;
}

.mx-wd-55p-f {
    max-width: 55% !important;
}

.mn-wd-55p-f {
    min-width: 55% !important;
}

.wd-60 {
    width: 60px;
}

.wd-60p {
    width: 60%;
}

.mx-wd-60p {
    max-width: 60%;
}

.mn-wd-60p {
    min-width: 60%;
}

.wd-60-f {
    width: 60px !important;
}

.wd-60p-f {
    width: 60% !important;
}

.mx-wd-60p-f {
    max-width: 60% !important;
}

.mn-wd-60p-f {
    min-width: 60% !important;
}

.wd-65 {
    width: 65px;
}

.wd-65p {
    width: 65%;
}

.mx-wd-65p {
    max-width: 65%;
}

.mn-wd-65p {
    min-width: 65%;
}

.wd-65-f {
    width: 65px !important;
}

.wd-65p-f {
    width: 65% !important;
}

.mx-wd-65p-f {
    max-width: 65% !important;
}

.mn-wd-65p-f {
    min-width: 65% !important;
}

.wd-70 {
    width: 70px;
}

.wd-70p {
    width: 70%;
}

.mx-wd-70p {
    max-width: 70%;
}

.mn-wd-70p {
    min-width: 70%;
}

.wd-70-f {
    width: 70px !important;
}

.wd-70p-f {
    width: 70% !important;
}

.mx-wd-70p-f {
    max-width: 70% !important;
}

.mn-wd-70p-f {
    min-width: 70% !important;
}

.wd-75 {
    width: 75px;
}

.wd-75p {
    width: 75%;
}

.mx-wd-75p {
    max-width: 75%;
}

.mn-wd-75p {
    min-width: 75%;
}

.wd-75-f {
    width: 75px !important;
}

.wd-75p-f {
    width: 75% !important;
}

.mx-wd-75p-f {
    max-width: 75% !important;
}

.mn-wd-75p-f {
    min-width: 75% !important;
}

.wd-80 {
    width: 80px;
}

.wd-80p {
    width: 80%;
}

.mx-wd-80p {
    max-width: 80%;
}

.mn-wd-80p {
    min-width: 80%;
}

.wd-80-f {
    width: 80px !important;
}

.wd-80p-f {
    width: 80% !important;
}

.mx-wd-80p-f {
    max-width: 80% !important;
}

.mn-wd-80p-f {
    min-width: 80% !important;
}

.wd-85 {
    width: 85px;
}

.wd-85p {
    width: 85%;
}

.mx-wd-85p {
    max-width: 85%;
}

.mn-wd-85p {
    min-width: 85%;
}

.wd-85-f {
    width: 85px !important;
}

.wd-85p-f {
    width: 85% !important;
}

.mx-wd-85p-f {
    max-width: 85% !important;
}

.mn-wd-85p-f {
    min-width: 85% !important;
}

.wd-90 {
    width: 90px;
}

.wd-90p {
    width: 90%;
}

.mx-wd-90p {
    max-width: 90%;
}

.mn-wd-90p {
    min-width: 90%;
}

.wd-90-f {
    width: 90px !important;
}

.wd-90p-f {
    width: 90% !important;
}

.mx-wd-90p-f {
    max-width: 90% !important;
}

.mn-wd-90p-f {
    min-width: 90% !important;
}

.wd-95 {
    width: 95px;
}

.wd-95p {
    width: 95%;
}

.mx-wd-95p {
    max-width: 95%;
}

.mn-wd-95p {
    min-width: 95%;
}

.wd-95-f {
    width: 95px !important;
}

.wd-95p-f {
    width: 95% !important;
}

.mx-wd-95p-f {
    max-width: 95% !important;
}

.mn-wd-95p-f {
    min-width: 95% !important;
}

.wd-100 {
    width: 100px;
}

.wd-100p {
    width: 100%;
}

.mx-wd-100p {
    max-width: 100%;
}

.mn-wd-100p {
    min-width: 100%;
}

.wd-100-f {
    width: 100px !important;
}

.wd-100p-f {
    width: 100% !important;
}

.mx-wd-100p-f {
    max-width: 100% !important;
}

.mn-wd-100p-f {
    min-width: 100% !important;
}

.wd-150 {
    width: 150px;
}

.wd-150-f {
    width: 150px !important;
}

.wd-200 {
    width: 200px;
}

.wd-200-f {
    width: 200px !important;
}

.wd-250 {
    width: 250px;
}

.wd-250-f {
    width: 250px !important;
}

.wd-276 {
    width: 276px;
}

.wd-280 {
    width: 280px;
}

.wd-280-f {
    width: 280px !important;
}

.wd-300 {
    width: 300px;
}

.wd-300-f {
    width: 300px !important;
}

.wd-350 {
    width: 350px;
}

.wd-350-f {
    width: 350px !important;
}

.wd-400 {
    width: 400px;
}

.wd-400-f {
    width: 400px !important;
}

.wd-450 {
    width: 450px;
}

.wd-450-f {
    width: 450px !important;
}

.wd-500 {
    width: 500px;
}

.wd-500-f {
    width: 500px !important;
}

.wd-550 {
    width: 550px;
}

.wd-550-f {
    width: 550px !important;
}

.wd-600 {
    width: 600px;
}

.wd-600-f {
    width: 600px !important;
}

.wd-650 {
    width: 650px;
}

.wd-650-f {
    width: 650px !important;
}

.wd-700 {
    width: 700px;
}

.wd-700-f {
    width: 700px !important;
}

.wd-750 {
    width: 750px;
}

.wd-750-f {
    width: 750px !important;
}

.wd-800 {
    width: 800px;
}

.wd-800-f {
    width: 800px !important;
}

.wd-850 {
    width: 850px;
}

.wd-850-f {
    width: 850px !important;
}

.wd-900 {
    width: 900px;
}

.wd-900-f {
    width: 900px !important;
}

.wd-950 {
    width: 950px;
}

.wd-950-f {
    width: 950px !important;
}

.wd-1000 {
    width: 1000px;
}

.wd-1000-f {
    width: 1000px !important;
}

@media (min-width: 480px) {
    .wd-xs-5 {
        width: 5px;
    }

    .wd-xs-5p {
        width: 5%;
    }

    .mx-wd-xs-5p {
        max-width: 5%;
    }

    .mn-wd-xs-5p {
        min-width: 5%;
    }

    .wd-xs-5-f {
        width: 5px !important;
    }

    .wd-xs-5p-f {
        width: 5% !important;
    }

    .mx-wd-xs-5p-f {
        max-width: 5% !important;
    }

    .mn-wd-xs-5p-f {
        min-width: 5% !important;
    }

    .wd-xs-10 {
        width: 10px;
    }

    .wd-xs-10p {
        width: 10%;
    }

    .mx-wd-xs-10p {
        max-width: 10%;
    }

    .mn-wd-xs-10p {
        min-width: 10%;
    }

    .wd-xs-10-f {
        width: 10px !important;
    }

    .wd-xs-10p-f {
        width: 10% !important;
    }

    .mx-wd-xs-10p-f {
        max-width: 10% !important;
    }

    .mn-wd-xs-10p-f {
        min-width: 10% !important;
    }

    .wd-xs-15 {
        width: 15px;
    }

    .wd-xs-15p {
        width: 15%;
    }

    .mx-wd-xs-15p {
        max-width: 15%;
    }

    .mn-wd-xs-15p {
        min-width: 15%;
    }

    .wd-xs-15-f {
        width: 15px !important;
    }

    .wd-xs-15p-f {
        width: 15% !important;
    }

    .mx-wd-xs-15p-f {
        max-width: 15% !important;
    }

    .mn-wd-xs-15p-f {
        min-width: 15% !important;
    }

    .wd-xs-20 {
        width: 20px;
    }

    .wd-xs-20p {
        width: 20%;
    }

    .mx-wd-xs-20p {
        max-width: 20%;
    }

    .mn-wd-xs-20p {
        min-width: 20%;
    }

    .wd-xs-20-f {
        width: 20px !important;
    }

    .wd-xs-20p-f {
        width: 20% !important;
    }

    .mx-wd-xs-20p-f {
        max-width: 20% !important;
    }

    .mn-wd-xs-20p-f {
        min-width: 20% !important;
    }

    .wd-xs-25 {
        width: 25px;
    }

    .wd-xs-25p {
        width: 25%;
    }

    .mx-wd-xs-25p {
        max-width: 25%;
    }

    .mn-wd-xs-25p {
        min-width: 25%;
    }

    .wd-xs-25-f {
        width: 25px !important;
    }

    .wd-xs-25p-f {
        width: 25% !important;
    }

    .mx-wd-xs-25p-f {
        max-width: 25% !important;
    }

    .mn-wd-xs-25p-f {
        min-width: 25% !important;
    }

    .wd-xs-30 {
        width: 30px;
    }

    .wd-xs-30p {
        width: 30%;
    }

    .mx-wd-xs-30p {
        max-width: 30%;
    }

    .mn-wd-xs-30p {
        min-width: 30%;
    }

    .wd-xs-30-f {
        width: 30px !important;
    }

    .wd-xs-30p-f {
        width: 30% !important;
    }

    .mx-wd-xs-30p-f {
        max-width: 30% !important;
    }

    .mn-wd-xs-30p-f {
        min-width: 30% !important;
    }

    .wd-xs-35 {
        width: 35px;
    }

    .wd-xs-35p {
        width: 35%;
    }

    .mx-wd-xs-35p {
        max-width: 35%;
    }

    .mn-wd-xs-35p {
        min-width: 35%;
    }

    .wd-xs-35-f {
        width: 35px !important;
    }

    .wd-xs-35p-f {
        width: 35% !important;
    }

    .mx-wd-xs-35p-f {
        max-width: 35% !important;
    }

    .mn-wd-xs-35p-f {
        min-width: 35% !important;
    }

    .wd-xs-40 {
        width: 40px;
    }

    .wd-xs-40p {
        width: 40%;
    }

    .mx-wd-xs-40p {
        max-width: 40%;
    }

    .mn-wd-xs-40p {
        min-width: 40%;
    }

    .wd-xs-40-f {
        width: 40px !important;
    }

    .wd-xs-40p-f {
        width: 40% !important;
    }

    .mx-wd-xs-40p-f {
        max-width: 40% !important;
    }

    .mn-wd-xs-40p-f {
        min-width: 40% !important;
    }

    .wd-xs-45 {
        width: 45px;
    }

    .wd-xs-45p {
        width: 45%;
    }

    .mx-wd-xs-45p {
        max-width: 45%;
    }

    .mn-wd-xs-45p {
        min-width: 45%;
    }

    .wd-xs-45-f {
        width: 45px !important;
    }

    .wd-xs-45p-f {
        width: 45% !important;
    }

    .mx-wd-xs-45p-f {
        max-width: 45% !important;
    }

    .mn-wd-xs-45p-f {
        min-width: 45% !important;
    }

    .wd-xs-50 {
        width: 50px;
    }

    .wd-xs-50p {
        width: 50%;
    }

    .mx-wd-xs-50p {
        max-width: 50%;
    }

    .mn-wd-xs-50p {
        min-width: 50%;
    }

    .wd-xs-50-f {
        width: 50px !important;
    }

    .wd-xs-50p-f {
        width: 50% !important;
    }

    .mx-wd-xs-50p-f {
        max-width: 50% !important;
    }

    .mn-wd-xs-50p-f {
        min-width: 50% !important;
    }

    .wd-xs-55 {
        width: 55px;
    }

    .wd-xs-55p {
        width: 55%;
    }

    .mx-wd-xs-55p {
        max-width: 55%;
    }

    .mn-wd-xs-55p {
        min-width: 55%;
    }

    .wd-xs-55-f {
        width: 55px !important;
    }

    .wd-xs-55p-f {
        width: 55% !important;
    }

    .mx-wd-xs-55p-f {
        max-width: 55% !important;
    }

    .mn-wd-xs-55p-f {
        min-width: 55% !important;
    }

    .wd-xs-60 {
        width: 60px;
    }

    .wd-xs-60p {
        width: 60%;
    }

    .mx-wd-xs-60p {
        max-width: 60%;
    }

    .mn-wd-xs-60p {
        min-width: 60%;
    }

    .wd-xs-60-f {
        width: 60px !important;
    }

    .wd-xs-60p-f {
        width: 60% !important;
    }

    .mx-wd-xs-60p-f {
        max-width: 60% !important;
    }

    .mn-wd-xs-60p-f {
        min-width: 60% !important;
    }

    .wd-xs-65 {
        width: 65px;
    }

    .wd-xs-65p {
        width: 65%;
    }

    .mx-wd-xs-65p {
        max-width: 65%;
    }

    .mn-wd-xs-65p {
        min-width: 65%;
    }

    .wd-xs-65-f {
        width: 65px !important;
    }

    .wd-xs-65p-f {
        width: 65% !important;
    }

    .mx-wd-xs-65p-f {
        max-width: 65% !important;
    }

    .mn-wd-xs-65p-f {
        min-width: 65% !important;
    }

    .wd-xs-70 {
        width: 70px;
    }

    .wd-xs-70p {
        width: 70%;
    }

    .mx-wd-xs-70p {
        max-width: 70%;
    }

    .mn-wd-xs-70p {
        min-width: 70%;
    }

    .wd-xs-70-f {
        width: 70px !important;
    }

    .wd-xs-70p-f {
        width: 70% !important;
    }

    .mx-wd-xs-70p-f {
        max-width: 70% !important;
    }

    .mn-wd-xs-70p-f {
        min-width: 70% !important;
    }

    .wd-xs-75 {
        width: 75px;
    }

    .wd-xs-75p {
        width: 75%;
    }

    .mx-wd-xs-75p {
        max-width: 75%;
    }

    .mn-wd-xs-75p {
        min-width: 75%;
    }

    .wd-xs-75-f {
        width: 75px !important;
    }

    .wd-xs-75p-f {
        width: 75% !important;
    }

    .mx-wd-xs-75p-f {
        max-width: 75% !important;
    }

    .mn-wd-xs-75p-f {
        min-width: 75% !important;
    }

    .wd-xs-80 {
        width: 80px;
    }

    .wd-xs-80p {
        width: 80%;
    }

    .mx-wd-xs-80p {
        max-width: 80%;
    }

    .mn-wd-xs-80p {
        min-width: 80%;
    }

    .wd-xs-80-f {
        width: 80px !important;
    }

    .wd-xs-80p-f {
        width: 80% !important;
    }

    .mx-wd-xs-80p-f {
        max-width: 80% !important;
    }

    .mn-wd-xs-80p-f {
        min-width: 80% !important;
    }

    .wd-xs-85 {
        width: 85px;
    }

    .wd-xs-85p {
        width: 85%;
    }

    .mx-wd-xs-85p {
        max-width: 85%;
    }

    .mn-wd-xs-85p {
        min-width: 85%;
    }

    .wd-xs-85-f {
        width: 85px !important;
    }

    .wd-xs-85p-f {
        width: 85% !important;
    }

    .mx-wd-xs-85p-f {
        max-width: 85% !important;
    }

    .mn-wd-xs-85p-f {
        min-width: 85% !important;
    }

    .wd-xs-90 {
        width: 90px;
    }

    .wd-xs-90p {
        width: 90%;
    }

    .mx-wd-xs-90p {
        max-width: 90%;
    }

    .mn-wd-xs-90p {
        min-width: 90%;
    }

    .wd-xs-90-f {
        width: 90px !important;
    }

    .wd-xs-90p-f {
        width: 90% !important;
    }

    .mx-wd-xs-90p-f {
        max-width: 90% !important;
    }

    .mn-wd-xs-90p-f {
        min-width: 90% !important;
    }

    .wd-xs-95 {
        width: 95px;
    }

    .wd-xs-95p {
        width: 95%;
    }

    .mx-wd-xs-95p {
        max-width: 95%;
    }

    .mn-wd-xs-95p {
        min-width: 95%;
    }

    .wd-xs-95-f {
        width: 95px !important;
    }

    .wd-xs-95p-f {
        width: 95% !important;
    }

    .mx-wd-xs-95p-f {
        max-width: 95% !important;
    }

    .mn-wd-xs-95p-f {
        min-width: 95% !important;
    }

    .wd-xs-100 {
        width: 100px;
    }

    .wd-xs-100p {
        width: 100%;
    }

    .mx-wd-xs-100p {
        max-width: 100%;
    }

    .mn-wd-xs-100p {
        min-width: 100%;
    }

    .wd-xs-100-f {
        width: 100px !important;
    }

    .wd-xs-100p-f {
        width: 100% !important;
    }

    .mx-wd-xs-100p-f {
        max-width: 100% !important;
    }

    .mn-wd-xs-100p-f {
        min-width: 100% !important;
    }

    .wd-xs-150 {
        width: 150px;
    }

    .wd-xs-150p {
        width: 150%;
    }

    .mx-wd-xs-150p {
        max-width: 150%;
    }

    .mn-wd-xs-150p {
        min-width: 150%;
    }

    .wd-xs-150-f {
        width: 150px !important;
    }

    .wd-xs-150p-f {
        width: 150% !important;
    }

    .mx-wd-xs-150p-f {
        max-width: 150% !important;
    }

    .mn-wd-xs-150p-f {
        min-width: 150% !important;
    }

    .wd-xs-200 {
        width: 200px;
    }

    .wd-xs-200p {
        width: 200%;
    }

    .mx-wd-xs-200p {
        max-width: 200%;
    }

    .mn-wd-xs-200p {
        min-width: 200%;
    }

    .wd-xs-200-f {
        width: 200px !important;
    }

    .wd-xs-200p-f {
        width: 200% !important;
    }

    .mx-wd-xs-200p-f {
        max-width: 200% !important;
    }

    .mn-wd-xs-200p-f {
        min-width: 200% !important;
    }

    .wd-xs-250 {
        width: 250px;
    }

    .wd-xs-250p {
        width: 250%;
    }

    .mx-wd-xs-250p {
        max-width: 250%;
    }

    .mn-wd-xs-250p {
        min-width: 250%;
    }

    .wd-xs-250-f {
        width: 250px !important;
    }

    .wd-xs-250p-f {
        width: 250% !important;
    }

    .mx-wd-xs-250p-f {
        max-width: 250% !important;
    }

    .mn-wd-xs-250p-f {
        min-width: 250% !important;
    }

    .wd-xs-300 {
        width: 300px;
    }

    .wd-xs-300p {
        width: 300%;
    }

    .mx-wd-xs-300p {
        max-width: 300%;
    }

    .mn-wd-xs-300p {
        min-width: 300%;
    }

    .wd-xs-300-f {
        width: 300px !important;
    }

    .wd-xs-300p-f {
        width: 300% !important;
    }

    .mx-wd-xs-300p-f {
        max-width: 300% !important;
    }

    .mn-wd-xs-300p-f {
        min-width: 300% !important;
    }

    .wd-xs-350 {
        width: 350px;
    }

    .wd-xs-350p {
        width: 350%;
    }

    .mx-wd-xs-350p {
        max-width: 350%;
    }

    .mn-wd-xs-350p {
        min-width: 350%;
    }

    .wd-xs-350-f {
        width: 350px !important;
    }

    .wd-xs-350p-f {
        width: 350% !important;
    }

    .mx-wd-xs-350p-f {
        max-width: 350% !important;
    }

    .mn-wd-xs-350p-f {
        min-width: 350% !important;
    }

    .wd-xs-400 {
        width: 400px;
    }

    .wd-xs-400p {
        width: 400%;
    }

    .mx-wd-xs-400p {
        max-width: 400%;
    }

    .mn-wd-xs-400p {
        min-width: 400%;
    }

    .wd-xs-400-f {
        width: 400px !important;
    }

    .wd-xs-400p-f {
        width: 400% !important;
    }

    .mx-wd-xs-400p-f {
        max-width: 400% !important;
    }

    .mn-wd-xs-400p-f {
        min-width: 400% !important;
    }

    .wd-xs-450 {
        width: 450px;
    }

    .wd-xs-450p {
        width: 450%;
    }

    .mx-wd-xs-450p {
        max-width: 450%;
    }

    .mn-wd-xs-450p {
        min-width: 450%;
    }

    .wd-xs-450-f {
        width: 450px !important;
    }

    .wd-xs-450p-f {
        width: 450% !important;
    }

    .mx-wd-xs-450p-f {
        max-width: 450% !important;
    }

    .mn-wd-xs-450p-f {
        min-width: 450% !important;
    }

    .wd-xs-500 {
        width: 500px;
    }

    .wd-xs-500p {
        width: 500%;
    }

    .mx-wd-xs-500p {
        max-width: 500%;
    }

    .mn-wd-xs-500p {
        min-width: 500%;
    }

    .wd-xs-500-f {
        width: 500px !important;
    }

    .wd-xs-500p-f {
        width: 500% !important;
    }

    .mx-wd-xs-500p-f {
        max-width: 500% !important;
    }

    .mn-wd-xs-500p-f {
        min-width: 500% !important;
    }

    .wd-xs-550 {
        width: 550px;
    }

    .wd-xs-550p {
        width: 550%;
    }

    .mx-wd-xs-550p {
        max-width: 550%;
    }

    .mn-wd-xs-550p {
        min-width: 550%;
    }

    .wd-xs-550-f {
        width: 550px !important;
    }

    .wd-xs-550p-f {
        width: 550% !important;
    }

    .mx-wd-xs-550p-f {
        max-width: 550% !important;
    }

    .mn-wd-xs-550p-f {
        min-width: 550% !important;
    }

    .wd-xs-600 {
        width: 600px;
    }

    .wd-xs-600p {
        width: 600%;
    }

    .mx-wd-xs-600p {
        max-width: 600%;
    }

    .mn-wd-xs-600p {
        min-width: 600%;
    }

    .wd-xs-600-f {
        width: 600px !important;
    }

    .wd-xs-600p-f {
        width: 600% !important;
    }

    .mx-wd-xs-600p-f {
        max-width: 600% !important;
    }

    .mn-wd-xs-600p-f {
        min-width: 600% !important;
    }

    .wd-xs-650 {
        width: 650px;
    }

    .wd-xs-650p {
        width: 650%;
    }

    .mx-wd-xs-650p {
        max-width: 650%;
    }

    .mn-wd-xs-650p {
        min-width: 650%;
    }

    .wd-xs-650-f {
        width: 650px !important;
    }

    .wd-xs-650p-f {
        width: 650% !important;
    }

    .mx-wd-xs-650p-f {
        max-width: 650% !important;
    }

    .mn-wd-xs-650p-f {
        min-width: 650% !important;
    }

    .wd-xs-700 {
        width: 700px;
    }

    .wd-xs-700p {
        width: 700%;
    }

    .mx-wd-xs-700p {
        max-width: 700%;
    }

    .mn-wd-xs-700p {
        min-width: 700%;
    }

    .wd-xs-700-f {
        width: 700px !important;
    }

    .wd-xs-700p-f {
        width: 700% !important;
    }

    .mx-wd-xs-700p-f {
        max-width: 700% !important;
    }

    .mn-wd-xs-700p-f {
        min-width: 700% !important;
    }

    .wd-xs-750 {
        width: 750px;
    }

    .wd-xs-750p {
        width: 750%;
    }

    .mx-wd-xs-750p {
        max-width: 750%;
    }

    .mn-wd-xs-750p {
        min-width: 750%;
    }

    .wd-xs-750-f {
        width: 750px !important;
    }

    .wd-xs-750p-f {
        width: 750% !important;
    }

    .mx-wd-xs-750p-f {
        max-width: 750% !important;
    }

    .mn-wd-xs-750p-f {
        min-width: 750% !important;
    }

    .wd-xs-800 {
        width: 800px;
    }

    .wd-xs-800p {
        width: 800%;
    }

    .mx-wd-xs-800p {
        max-width: 800%;
    }

    .mn-wd-xs-800p {
        min-width: 800%;
    }

    .wd-xs-800-f {
        width: 800px !important;
    }

    .wd-xs-800p-f {
        width: 800% !important;
    }

    .mx-wd-xs-800p-f {
        max-width: 800% !important;
    }

    .mn-wd-xs-800p-f {
        min-width: 800% !important;
    }

    .wd-xs-850 {
        width: 850px;
    }

    .wd-xs-850p {
        width: 850%;
    }

    .mx-wd-xs-850p {
        max-width: 850%;
    }

    .mn-wd-xs-850p {
        min-width: 850%;
    }

    .wd-xs-850-f {
        width: 850px !important;
    }

    .wd-xs-850p-f {
        width: 850% !important;
    }

    .mx-wd-xs-850p-f {
        max-width: 850% !important;
    }

    .mn-wd-xs-850p-f {
        min-width: 850% !important;
    }

    .wd-xs-900 {
        width: 900px;
    }

    .wd-xs-900p {
        width: 900%;
    }

    .mx-wd-xs-900p {
        max-width: 900%;
    }

    .mn-wd-xs-900p {
        min-width: 900%;
    }

    .wd-xs-900-f {
        width: 900px !important;
    }

    .wd-xs-900p-f {
        width: 900% !important;
    }

    .mx-wd-xs-900p-f {
        max-width: 900% !important;
    }

    .mn-wd-xs-900p-f {
        min-width: 900% !important;
    }

    .wd-xs-950 {
        width: 950px;
    }

    .wd-xs-950p {
        width: 950%;
    }

    .mx-wd-xs-950p {
        max-width: 950%;
    }

    .mn-wd-xs-950p {
        min-width: 950%;
    }

    .wd-xs-950-f {
        width: 950px !important;
    }

    .wd-xs-950p-f {
        width: 950% !important;
    }

    .mx-wd-xs-950p-f {
        max-width: 950% !important;
    }

    .mn-wd-xs-950p-f {
        min-width: 950% !important;
    }

    .wd-xs-1000 {
        width: 1000px;
    }

    .wd-xs-1000p {
        width: 1000%;
    }

    .mx-wd-xs-1000p {
        max-width: 1000%;
    }

    .mn-wd-xs-1000p {
        min-width: 1000%;
    }

    .wd-xs-1000-f {
        width: 1000px !important;
    }

    .wd-xs-1000p-f {
        width: 1000% !important;
    }

    .mx-wd-xs-1000p-f {
        max-width: 1000% !important;
    }

    .mn-wd-xs-1000p-f {
        min-width: 1000% !important;
    }

    .wd-xs-auto {
        width: auto;
    }

    .wd-xs-auto-f {
        width: auto !important;
    }
}

@media (min-width: 576px) {
    .wd-sm-5 {
        width: 5px;
    }

    .wd-sm-5p {
    }

    }
