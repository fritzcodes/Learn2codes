<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="CodeHim">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Module List | Admin </title>
    <link rel="shortcut icon" type="x-icon" href="/assets/images/Logo.svg">
    <link rel="stylesheet" href="/assets/css/Admin.css">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href='https://fonts.googleapis.com/css2?family=Orbitron:wght@400;600;800&display=swap" rel="stylesheet'>    
    <script src="/assets/js/admin/admin.js" defer></script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <style>
        *{
            text-decoration: none;
            box-sizing: border-box;
            list-style: none;
        }
 
        @media only screen and (min-width: 1360px) {

            .cd__main {
                max-width: 1280px;
                margin-left: auto;
                margin-right: auto;
                padding: 24px;
            }
        }

        .draggable-table {
            font-family: var(--font2); 
            position: absolute;
            top: 25%;
            left: 20%;
            width: 60%;
            height: 50%;
            border-collapse: collapse;
            -webkit-box-shadow: 0px 0px 10px 8px rgba(0, 0, 0, 0.1);
            box-shadow: 0px 0px 10px 8px rgba(0, 0, 0, 0.1);
        }

        .draggable-table .draggable-table__drag {
            font-size: var(--p-font);
            font-weight: lighter;
            font-weight: 600;
            text-transform: capitalize;
            user-select: none;
            border-top: 1px solid var(--main-color);
            position: absolute;
            border: 1px solid #f1f1f1;
            z-index: 10;
            cursor: grabbing;
            opacity: 60%;
            
        }

        .draggable-table thead th {
            background: var(--second-color);
            color: var(--main-color);
            font-weight: bold;
            text-transform: capitalize;
            padding: 10px 20px;
            text-align: left;
            user-select: none;
        }

        .draggable-table tbody tr {
            cursor: grabbing;
        }

        .draggable-table tbody tr td {
            font-size: var(--p-font);
            font-weight: lighter;
            padding: 20px;
            text-transform: capitalize;
            user-select: none;
            border-top: 1px solid var(--main-color);

        }

        .draggable-table tbody tr:nth-child(even) {
            background-color: var(--main-color);
        }

        .draggable-table tbody tr:nth-child(odd) {
            background-color: var(--main-color);
        }

        .draggable-table tbody tr.is-dragging {
            background: var(--bg-color);
        }

        .draggable-table tbody tr.is-dragging td {
            color: var(--second-color);
        }


        
        @media (max-width: 860px) {
            :root {
        --h2-head: 1.5rem;
        --p-head: 1rem;
        transition: .2s;
      }

      .draggable-table {
            position: absolute;
            top: 50px;
            left: 0%;
            width: 100%;
            height: auto;
            margin: 0;
        }   
 
}

    </style>
    
</head>

<body>
    <div class="sidebar">
        <div class="top">
            <div class="logo">
                <span>Learn2Code</span>
            </div>
            <i class="bx bx-menu" id="btn"></i>
        </div>


        <div class="user">
            @if (Auth::guard('admin')->check() && Auth::guard('admin')->user()->profile_photo)
            <img src="{{Auth::guard('admin')->user()->profile_photo ? asset('images/' . Auth::guard('admin')->user()->profile_photoo) : 'assets/images/avatar.png' }}" alt="user" class="user-img">
            @else
            <!-- Placeholder image or default avatar -->
            <img src="/assets/images/avatar.png" alt="user" class="user-img">
            @endif
            {{-- <img src="../assets/images/avatar.png" alt="user" class="user-img"> --}}
            <div>
                <p class="username">{{ Auth::guard('admin')->user()->email }}</p>
                <p>Admin</p>
            </div>
        </div>


        <ul>
            <li>
                <a target="_top" href="{{ route('Dashboard') }}">
                    <i class="bx bxs-dashboard"></i>
                    <span class="nav-item">Dashboard</span>
                </a>
            </li>
            <li>
                <a target="_top" href="{{ route('ManageUser') }}">
                    <i class="bx bxs-user"></i>
                    <span class="nav-item">Manage Users</span>
                </a>
            </li>
            <li>
                <a target="_top" href="{{ route('Leaderboard') }}">
                    <i class="bx bxs-trophy"></i>
                    <span class="nav-item">Leaderboard</span>
                </a>
            </li>
            <li>
                <a target="_top" href="/admin/language">
                    <i class="bx bxs-select-multiple"></i>
                    <span class="nav-item">Add Language</span>
                </a>
            </li>
            <li>

                <a target="_top" href="{{ route('Question') }}">
                    <i class="bx bxs-hourglass-top"></i>
                    <span class="nav-item">Quiz</span>
                </a>
            </li>
            <li>
                <a target="_top" href="#">
                    <i class="bx bxs-chat"></i>
                    <span class="nav-item">Forum</span>
                </a>
            </li>
            <li>
                <a target="_top" href="{{ route('addModule') }}"  class='active'>
                <i class='bx bxs-book-reader'></i>
                    <span class="nav-item">Module</span>
                </a>
            </li>
            <li>
                <a target="_top" href="/admin/exercise">
                    <i class="bx bx-dumbbell"></i>
                    <span class="nav-item">Exercise</span>
                </a>
            </li>
            <li class="Logout">
                <a target="_top" href="{{ route('adminLogout') }}">
                    <i class="bx bxs-exit"></i>
                    <span class="nav-item">Logout</span>
                </a>
            </li>
        </ul>

    </div>

    <div class="main-content"> <!------------------------------------------ dashboard -->
        <div class="back">
            <a href="/admin/addModule" class="bx bx-chevron-left" id="back-btn"></a>
        </div>
    <!--$%adsense%$-->
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
                        <td class="ved">
                                <a href="/admin/viewModule/{{$item->id}}"><i class="bx bxs-show"></i></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <!-- END EDMO HTML (Happy Coding!)-->

    </div>



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
                                    text: 'Module Order Changed',
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
