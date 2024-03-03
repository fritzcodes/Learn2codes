<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="CodeHim">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title> Table Draggable Row (Vanilla JS) Example </title>
    <!-- Style CSS -->
    <link rel="stylesheet" href="./css/style.css">
    <!-- Demo CSS (No need to include it into your project) -->
    <link rel="stylesheet" href="./css/demo.css">
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400&amp;display=swap'>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <style>
        @import url('https://fonts.googleapis.com/css?family=Roboto&display=swap');
        @import url('https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');

        * {
            margin: 0;
            padding: 0;
        }

        *,
        *::before,
        *::after {
            margin: 0;
            padding: 0;
            box-sizing: inherit;
        }

        body {
            min-height: 100vh;
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            align-content: flex-start;

            font-family: 'Roboto', sans-serif;
            font-style: normal;
            font-weight: 300;
            font-smoothing: antialiased;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
            font-size: 15px;
            background: #eee;
        }

        .cd__intro {
            padding: 60px 30px;
            margin-bottom: 15px;
            flex-direction: column;

        }

        .cd__intro,
        .cd__credit {
            display: flex;
            width: 100%;
            justify-content: center;
            align-items: center;
            background: #fff;
            color: #333;
            line-height: 1.5;
            text-align: center;
        }

        .cd__intro h1 {
            font-size: 18pt;
            padding-bottom: 15px;

        }

        .cd__intro p {
            font-size: 14px;
        }

        .cd__action {
            text-align: center;
            display: block;
            margin-top: 20px;
        }

        .cd__action a.cd__btn {
            text-decoration: none;
            color: #666;
            border: 2px solid #666;
            padding: 10px 15px;
            display: inline-block;
            margin-left: 5px;
        }

        .cd__action a.cd__btn:hover {
            background: #666;
            color: #fff;
            transition: .3s;
            -webkit-transition: .3s;
        }

        .cd__action .cd__btn:before {
            font-family: FontAwesome;
            font-weight: normal;
            margin-right: 10px;
        }

        .down:before {
            content: "\f019"
        }

        .back:before {
            content: "\f112"
        }

        .cd__credit {
            padding: 12px;
            font-size: 9pt;
            margin-top: 40px;

        }

        .cd__credit span:before {
            font-family: FontAwesome;
            color: #e41b17;
            content: "\f004";


        }

        .cd__credit a {
            color: #333;
            text-decoration: none;
        }

        .cd__credit a:hover {
            color: #1DBF73;
        }

        .cd__credit a:hover:after {
            font-family: FontAwesome;
            content: "\f08e";
            font-size: 9pt;
            position: absolute;
            margin: 3px;
        }

        .cd__main {
            background: #fff;
            padding: 20px;
            flex-direction: row;
            flex-wrap: wrap;
            justify-content: center;

        }

        .cd__main {
            display: flex;
            width: 100%;
        }

        @media only screen and (min-width: 1360px) {
            .cd__main {
                max-width: 1280px;
                margin-left: auto;
                margin-right: auto;
                padding: 24px;
            }
        }

        * {
            font-family: "Source Sans Pro", sans-serif;
        }

        .cd__main {
            padding: 0;
            margin: 0;
            width: 100%;
            height: 100vh;
            background: #cb38e9;
            position: relative;
            background: radial-gradient(circle, #cb38e9 0%, #842fa8 100%) !important;
        }

        .cd__main p {
            font-size: 0.75em;
            font-weight: bold;
            position: absolute;
            top: 15%;
            width: 100%;
            letter-spacing: 5px;
            text-transform: uppercase;
            text-align: center;
            color: white;
            user-select: none;
        }

        .draggable-table {
            position: absolute;
            top: 25%;
            left: 20%;
            width: 60%;
            height: 50%;
            border-collapse: collapse;
            background: white;
            -webkit-box-shadow: 0px 0px 10px 8px rgba(0, 0, 0, 0.1);
            box-shadow: 0px 0px 10px 8px rgba(0, 0, 0, 0.1);
        }

        .draggable-table .draggable-table__drag {
            font-size: 0.95em;
            font-weight: lighter;
            text-transform: capitalize;
            position: absolute;
            width: 100%;
            text-indent: 50px;
            border: 1px solid #f1f1f1;
            z-index: 10;
            cursor: grabbing;
            -webkit-box-shadow: 2px 2px 3px 0px rgba(0, 0, 0, 0.05);
            box-shadow: 2px 2px 3px 0px rgba(0, 0, 0, 0.05);
            opacity: 1;
        }

        .draggable-table thead th {
            height: 25px;
            font-weight: bold;
            text-transform: capitalize;
            padding: 10px;
            user-select: none;
        }

        .draggable-table tbody tr {
            cursor: grabbing;
        }

        .draggable-table tbody tr td {
            font-size: 0.95em;
            font-weight: lighter;
            text-transform: capitalize;
            text-indent: 50px;
            padding: 10px;
            user-select: none;
            border-top: 1px solid whitesmoke;
        }

        .draggable-table tbody tr:nth-child(even) {
            background-color: #f7f7f7;
        }

        .draggable-table tbody tr:nth-child(odd) {
            background-color: #ffffff;
        }

        .draggable-table tbody tr.is-dragging {
            background: #f1c40f;
        }

        .draggable-table tbody tr.is-dragging td {
            color: #ffe683;
        }
    </style>
</head>

<body>
    <!--$%adsense%$-->
    <main class="">
        <!-- Start DEMO HTML (Use the following code into your project)-->
        {{-- <p>Drag n' Drop sorting of rows!</p> --}}
        <table id="table" class="draggable-table">
            <thead>
                <th>Title</th>
                <th>Action</th>
            </thead>
            <tbody id="1">
                @foreach ($data as $item)
                    <tr id="{{ $item->id }}">
                        <td>{{ $item->title }}</td>
                        <td><a href="/admin/viewModule/{{$item->id}}"><button>View</button></a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <!-- END EDMO HTML (Happy Coding!)-->
    </main>


    <!-- Script JS -->
    <script>
        (function() {
            "use strict";

            const table = document.getElementById('table');
            const tbody = table.querySelector('tbody');

            var currRow = null,
                dragElem = null,
                mouseDownX = 0,
                mouseDownY = 0,
                mouseX = 0,
                mouseY = 0,
                mouseDrag = false;

            function init() {
                bindMouse();
            }

            function bindMouse() {
                document.addEventListener('mousedown', (event) => {
                    if (event.button != 0) return true;

                    let target = getTargetRow(event.target);
                    if (target) {
                        currRow = target;
                        addDraggableRow(target);
                        currRow.classList.add('is-dragging');


                        let coords = getMouseCoords(event);
                        mouseDownX = coords.x;
                        mouseDownY = coords.y;

                        mouseDrag = true;
                    }
                });

                document.addEventListener('mousemove', (event) => {
                    if (!mouseDrag) return;

                    let coords = getMouseCoords(event);
                    mouseX = coords.x - mouseDownX;
                    mouseY = coords.y - mouseDownY;

                    moveRow(mouseX, mouseY);
                });

                document.addEventListener('mouseup', (event) => {
                    if (!mouseDrag) return;

                    currRow.classList.remove('is-dragging');
                    table.removeChild(dragElem);

                    dragElem = null;
                    mouseDrag = false;
                });
            }


            function swapRow(row, index) {
                let currIndex = Array.from(tbody.children).indexOf(currRow),
                    row1 = currIndex > index ? currRow : row,
                    row2 = currIndex > index ? row : currRow;

                tbody.insertBefore(row1, row2);
            }

            function moveRow(x, y) {
                dragElem.style.transform = "translate3d(" + x + "px, " + y + "px, 0)";

                let dPos = dragElem.getBoundingClientRect(),
                    currStartY = dPos.y,
                    currEndY = currStartY + dPos.height,
                    rows = getRows();

                for (var i = 0; i < rows.length; i++) {
                    let rowElem = rows[i],
                        rowSize = rowElem.getBoundingClientRect(),
                        rowStartY = rowSize.y,
                        rowEndY = rowStartY + rowSize.height;

                    if (currRow !== rowElem && isIntersecting(currStartY, currEndY, rowStartY, rowEndY)) {
                        if (Math.abs(currStartY - rowStartY) < rowSize.height / 2)
                            swapRow(rowElem, i);
                    }
                }
            }

            function addDraggableRow(target) {
                dragElem = target.cloneNode(true);
                dragElem.classList.add('draggable-table__drag');
                dragElem.style.height = getStyle(target, 'height');
                dragElem.style.background = getStyle(target, 'backgroundColor');
                for (var i = 0; i < target.children.length; i++) {
                    let oldTD = target.children[i],
                        newTD = dragElem.children[i];
                    newTD.style.width = getStyle(oldTD, 'width');
                    newTD.style.height = getStyle(oldTD, 'height');
                    newTD.style.padding = getStyle(oldTD, 'padding');
                    newTD.style.margin = getStyle(oldTD, 'margin');
                }

                table.appendChild(dragElem);


                let tPos = target.getBoundingClientRect(),
                    dPos = dragElem.getBoundingClientRect();
                dragElem.style.bottom = ((dPos.y - tPos.y) - tPos.height) + "px";
                dragElem.style.left = "-1px";

                document.dispatchEvent(new MouseEvent('mousemove', {
                    view: window,
                    cancelable: true,
                    bubbles: true
                }));
            }







            function getRows() {
                return table.querySelectorAll('tbody tr');
            }

            function getTargetRow(target) {
                let elemName = target.tagName.toLowerCase();

                if (elemName == 'tr') return target;
                if (elemName == 'td') return target.closest('tr');
            }

            function getMouseCoords(event) {
                return {
                    x: event.clientX,
                    y: event.clientY
                };
            }

            function getStyle(target, styleName) {
                let compStyle = getComputedStyle(target),
                    style = compStyle[styleName];

                return style ? style : null;
            }

            function isIntersecting(min0, max0, min1, max1) {
                return Math.max(min0, max0) >= Math.min(min1, max1) &&
                    Math.min(min0, max0) <= Math.max(min1, max1);
            }



            init();

        })();
    </script>
    <script>
        $(document).ready(function() {
            $("#table tbody").sortable({

                update: function(event, ui) {
                    var order = $(this).sortable('toArray');

                    console.log(order);
                    $.ajax({
                        url: '/admin/changeOrder',
                        data: {
                            order
                        },
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        method: 'POST',
                        dataType: 'json',
                        beforeSend: function() {
                            Swal.fire({
                                title: 'Pls wait...',
                                didOpen: () => {
                                    Swal.showLoading();
                                },
                            })
                        },
                        success: function(data) {
                            if (data == true) {
                                Swal.fire({
                                    icon: 'success',
                                    title: 'Success!',
                                    text: 'Module Order Changed'
                                })
                            }
                        },
                        error: function(xhr) {
                            alert(xhr.responseText);
                        }
                    })
                }
            });
        });
    </script>
</body>

</html>
