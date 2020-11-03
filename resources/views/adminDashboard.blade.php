@extends('admin.layouts.app')

@section('content')
    <main class="main">
        <header class="header">
        <section class="search">
            <form class="search__form">
            <label class="search__label" for="search"></label>
            <input class="search__text" id="search" type="text" placeholder="Search"/>
            <button class="search__button">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                <path fill="currentColor" d="M505 442.7L405.3 343c-4.5-4.5-10.6-7-17-7H372c27.6-35.3 44-79.7 44-128C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c48.3 0 92.7-16.4 128-44v16.3c0 6.4 2.5 12.5 7 17l99.7 99.7c9.4 9.4 24.6 9.4 33.9 0l28.3-28.3c9.4-9.4 9.4-24.6.1-34zM208 336c-70.7 0-128-57.2-128-128 0-70.7 57.2-128 128-128 70.7 0 128 57.2 128 128 0 70.7-57.2 128-128 128z"></path>
                </svg>
            </button>
            </form>
        </section><a class="notif" href="#"><span class="notif__text">Notifications</span><span class="notif__badge">+10</span></a>
        </header>
        <aside class="aside">
        <nav>
            <ul>
            <li><a href="#">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                    <path fill="currentColor" d="M570.69 236.28L512 184.45V48a16 16 0 0 0-16-16h-64a16 16 0 0 0-16 16v51.69L314.75 10.31a39.85 39.85 0 0 0-53.45 0l-256 226a16 16 0 0 0-1.21 22.6L25.5 282.7a16 16 0 0 0 22.6 1.21L277.42 81.63a16 16 0 0 1 21.17 0L527.91 283.9a16 16 0 0 0 22.6-1.21l21.4-23.82a16 16 0 0 0-1.22-22.59zM288 115L69.47 307.71c-1.62 1.46-3.69 2.14-5.47 3.35V496a16 16 0 0 0 16 16h128a16 16 0 0 0 16-16V368a16 16 0 0 1 16-16h96a16 16 0 0 1 16 16v128a16 16 0 0 0 16 16h128a16 16 0 0 0 16-16V311.1c-1.7-1.16-3.72-1.82-5.26-3.2z"></path>
                </svg></a></li>
            <li><a href="#">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                    <path fill="currentColor" d="M448 224v-32a32 32 0 0 0-32-32h-96V96a96 96 0 0 0-192 0v64H32a32 32 0 0 0-32 32v256a32 32 0 0 0 32 32h128V256a32 32 0 0 1 32-32zM176 96a48 48 0 0 1 96 0v64h-96zm368 160H224a32 32 0 0 0-32 32v192a32 32 0 0 0 32 32h320a32 32 0 0 0 32-32V288a32 32 0 0 0-32-32zm-64 96a96.12 96.12 0 0 1-108.63 95.19C323 441 288 397.45 288 348.66V328a8 8 0 0 1 8-8h16a8 8 0 0 1 8 8v21.16c0 33.41 24.37 63.3 57.62 66.53A64.07 64.07 0 0 0 448 352v-24a8 8 0 0 1 8-8h16a8 8 0 0 1 8 8z"></path>
                </svg></a></li>
            <li><a href="#">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                    <path fill="currentColor" d="M434.66,167.71h0L344.5,77.36a31.83,31.83,0,0,0-45-.07h0l-.07.07L224,152.88V424L434.66,212.9A32,32,0,0,0,434.66,167.71ZM480,320H373.09L186.68,506.51c-2.06,2.07-4.5,3.58-6.68,5.49H480a32,32,0,0,0,32-32V352A32,32,0,0,0,480,320ZM192,32A32,32,0,0,0,160,0H32A32,32,0,0,0,0,32V416a96,96,0,0,0,192,0ZM96,440a24,24,0,1,1,24-24A24,24,0,0,1,96,440Zm32-184H64V192h64Zm0-128H64V64h64Z"></path>
                </svg></a></li>
            <li><a href="#">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 510 510">
                    <path fill="currentColor" d="M505.16405,19.29688c-1.176-5.4629-6.98736-11.26563-12.45106-12.4336C460.61647,0,435.46433,0,410.41962,0,307.2013,0,245.30155,55.20312,199.09162,128H94.88878c-16.29733,0-35.599,11.92383-42.88913,26.49805L2.57831,253.29688A28.39645,28.39645,0,0,0,.06231,264a24.008,24.008,0,0,0,24.00353,24H128.01866a96.00682,96.00682,0,0,1,96.01414,96V488a24.008,24.008,0,0,0,24.00353,24,28.54751,28.54751,0,0,0,10.7047-2.51562l98.747-49.40626c14.56074-7.28515,26.4746-26.56445,26.4746-42.84374V312.79688c72.58882-46.3125,128.01886-108.40626,128.01886-211.09376C512.07522,76.55273,512.07522,51.40234,505.16405,19.29688ZM384.05637,168a40,40,0,1,1,40.00589-40A40.02,40.02,0,0,1,384.05637,168ZM35.68474,352.06641C9.82742,377.91992-2.94985,442.59375.57606,511.41016c69.11565,3.55859,133.61147-9.35157,159.36527-35.10547,40.28913-40.2793,42.8774-93.98633,6.31147-130.54883C129.68687,309.19727,75.97,311.78516,35.68474,352.06641Zm81.63312,84.03125c-8.58525,8.584-30.08256,12.88672-53.11915,11.69922-1.174-22.93555,3.08444-44.49219,11.70289-53.10938,13.42776-13.42578,31.33079-14.28906,43.51813-2.10352C131.60707,404.77148,130.74562,422.67188,117.31786,436.09766Z"></path>
                </svg></a></li>
            <li><a href="#">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                    <path fill="currentColor" d="M510.62 92.63C516.03 94.74 521.85 96 528 96c26.51 0 48-21.49 48-48S554.51 0 528 0s-48 21.49-48 48c0 2.43.37 4.76.71 7.09l-95.34 76.27c-5.4-2.11-11.23-3.37-17.38-3.37s-11.97 1.26-17.38 3.37L255.29 55.1c.35-2.33.71-4.67.71-7.1 0-26.51-21.49-48-48-48s-48 21.49-48 48c0 4.27.74 8.34 1.78 12.28l-101.5 101.5C56.34 160.74 52.27 160 48 160c-26.51 0-48 21.49-48 48s21.49 48 48 48 48-21.49 48-48c0-4.27-.74-8.34-1.78-12.28l101.5-101.5C199.66 95.26 203.73 96 208 96c6.15 0 11.97-1.26 17.38-3.37l95.34 76.27c-.35 2.33-.71 4.67-.71 7.1 0 26.51 21.49 48 48 48s48-21.49 48-48c0-2.43-.37-4.76-.71-7.09l95.32-76.28zM400 320h-64c-8.84 0-16 7.16-16 16v160c0 8.84 7.16 16 16 16h64c8.84 0 16-7.16 16-16V336c0-8.84-7.16-16-16-16zm160-128h-64c-8.84 0-16 7.16-16 16v288c0 8.84 7.16 16 16 16h64c8.84 0 16-7.16 16-16V208c0-8.84-7.16-16-16-16zm-320 0h-64c-8.84 0-16 7.16-16 16v288c0 8.84 7.16 16 16 16h64c8.84 0 16-7.16 16-16V208c0-8.84-7.16-16-16-16zM80 352H16c-8.84 0-16 7.16-16 16v128c0 8.84 7.16 16 16 16h64c8.84 0 16-7.16 16-16V368c0-8.84-7.16-16-16-16z"></path>
                </svg></a></li>
            <li><a href="#">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512">
                    <path fill="currentColor" d="M240 0H98.6c-20.7 0-39 13.2-45.5 32.8L2.5 184.6c-.8 2.4-.8 4.9-1.2 7.4H240V0zm235.2 81.7l-16.3-48.8C452.4 13.2 434.1 0 413.4 0H272v157.4C315.9 109.9 378.4 80 448 80c9.2 0 18.3.6 27.2 1.7zM208 320c0-34.1 7.3-66.6 20.2-96H0v240c0 26.5 21.5 48 48 48h256.6C246.1 468.2 208 398.6 208 320zm240-192c-106 0-192 86-192 192s86 192 192 192 192-86 192-192-86-192-192-192zm114.1 147.8l-131 130c-4.3 4.3-11.3 4.3-15.6-.1l-75.7-76.3c-4.3-4.3-4.2-11.3.1-15.6l26-25.8c4.3-4.3 11.3-4.2 15.6.1l42.1 42.5 97.2-96.4c4.3-4.3 11.3-4.2 15.6.1l25.8 26c4.2 4.3 4.2 11.3-.1 15.5z"></path>
                </svg></a></li>
            <li><a href="#">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 544 512">
                    <path fill="currentColor" d="M527.79 288H290.5l158.03 158.03c6.04 6.04 15.98 6.53 22.19.68 38.7-36.46 65.32-85.61 73.13-140.86 1.34-9.46-6.51-17.85-16.06-17.85zm-15.83-64.8C503.72 103.74 408.26 8.28 288.8.04 279.68-.59 272 7.1 272 16.24V240h223.77c9.14 0 16.82-7.68 16.19-16.8zM224 288V50.71c0-9.55-8.39-17.4-17.84-16.06C86.99 51.49-4.1 155.6.14 280.37 4.5 408.51 114.83 513.59 243.03 511.98c50.4-.63 96.97-16.87 135.26-44.03 7.9-5.6 8.42-17.23 1.57-24.08L224 288z"></path>
                </svg></a></li>
            </ul>
        </nav>
        </aside>
        <article class="article article--4">
        <div class="widget widget--0">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
            <path fill="currentColor" d="M496 384H64V80c0-8.84-7.16-16-16-16H16C7.16 64 0 71.16 0 80v336c0 17.67 14.33 32 32 32h464c8.84 0 16-7.16 16-16v-32c0-8.84-7.16-16-16-16zM464 96H345.94c-21.38 0-32.09 25.85-16.97 40.97l32.4 32.4L288 242.75l-73.37-73.37c-12.5-12.5-32.76-12.5-45.25 0l-68.69 68.69c-6.25 6.25-6.25 16.38 0 22.63l22.62 22.62c6.25 6.25 16.38 6.25 22.63 0L192 237.25l73.37 73.37c12.5 12.5 32.76 12.5 45.25 0l96-96 32.4 32.4c15.12 15.12 40.97 4.41 40.97-16.97V112c.01-8.84-7.15-16-15.99-16z"></path>
            </svg><strong><span>Number</span><span>+150K</span><span>In the last hours</span></strong>
        </div>
        </article>
        <article class="article article--4">
        <div class="widget widget--1">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
            <path fill="currentColor" d="M496 384H64V80c0-8.84-7.16-16-16-16H16C7.16 64 0 71.16 0 80v336c0 17.67 14.33 32 32 32h464c8.84 0 16-7.16 16-16v-32c0-8.84-7.16-16-16-16zM464 96H345.94c-21.38 0-32.09 25.85-16.97 40.97l32.4 32.4L288 242.75l-73.37-73.37c-12.5-12.5-32.76-12.5-45.25 0l-68.69 68.69c-6.25 6.25-6.25 16.38 0 22.63l22.62 22.62c6.25 6.25 16.38 6.25 22.63 0L192 237.25l73.37 73.37c12.5 12.5 32.76 12.5 45.25 0l96-96 32.4 32.4c15.12 15.12 40.97 4.41 40.97-16.97V112c.01-8.84-7.15-16-15.99-16z"></path>
            </svg><strong><span>Number</span><span>+150K</span><span>In the last hours</span></strong>
        </div>
        </article>
        <article class="article article--4">
        <div class="widget widget--2">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
            <path fill="currentColor" d="M496 384H64V80c0-8.84-7.16-16-16-16H16C7.16 64 0 71.16 0 80v336c0 17.67 14.33 32 32 32h464c8.84 0 16-7.16 16-16v-32c0-8.84-7.16-16-16-16zM464 96H345.94c-21.38 0-32.09 25.85-16.97 40.97l32.4 32.4L288 242.75l-73.37-73.37c-12.5-12.5-32.76-12.5-45.25 0l-68.69 68.69c-6.25 6.25-6.25 16.38 0 22.63l22.62 22.62c6.25 6.25 16.38 6.25 22.63 0L192 237.25l73.37 73.37c12.5 12.5 32.76 12.5 45.25 0l96-96 32.4 32.4c15.12 15.12 40.97 4.41 40.97-16.97V112c.01-8.84-7.15-16-15.99-16z"></path>
            </svg><strong><span>Number</span><span>+150K</span><span>In the last hours</span></strong>
        </div>
        </article>
        <article class="article article--4">
        <div class="widget widget--3">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
            <path fill="currentColor" d="M496 384H64V80c0-8.84-7.16-16-16-16H16C7.16 64 0 71.16 0 80v336c0 17.67 14.33 32 32 32h464c8.84 0 16-7.16 16-16v-32c0-8.84-7.16-16-16-16zM464 96H345.94c-21.38 0-32.09 25.85-16.97 40.97l32.4 32.4L288 242.75l-73.37-73.37c-12.5-12.5-32.76-12.5-45.25 0l-68.69 68.69c-6.25 6.25-6.25 16.38 0 22.63l22.62 22.62c6.25 6.25 16.38 6.25 22.63 0L192 237.25l73.37 73.37c12.5 12.5 32.76 12.5 45.25 0l96-96 32.4 32.4c15.12 15.12 40.97 4.41 40.97-16.97V112c.01-8.84-7.15-16-15.99-16z"></path>
            </svg><strong><span>Number</span><span>+150K</span><span>In the last hours</span></strong>
        </div>
        </article>
        <article class="article article--1"><strong class="article__title"><span>Regular Table</span><span>Table on Plain Background</span></strong>
        <table class="article__table" cellspacing="0" cellpadding="0" border="0" width="100%">
            
            @if(count($survey_data) > 0)
                <thead>
                    <tr>
                        <th colspan="1" rowspan="1">Name</th>
                        <th colspan="1" rowspan="1">Age</th>
                        <th colspan="1" rowspan="1">Sex</th>
                        <th colspan="1" rowspan="1">Job</th>
                        <th colspan="1" rowspan="1">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($survey_data as $data)
                        <tr>
                            <td rowspan="1" colspan="1">{{ $data->lastName . " " . $data->firstName }}</td>
                            <td rowspan="1" colspan="1">{{ $data->age }}</td>
                            <td rowspan="1" colspan="1">{{ $data->sex }}</td>
                            <td rowspan="1" colspan="1">{{ $data->occupation }}</td>
                            <td rowspan="1" colspan="1">
                                <a href="/admin/dashboard/survey/{{ $data->id }} " target="_self">Show</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            @endif

        </table>
        </article>
        <article class="article article--2"><strong class="article__title"><span>Horizontal Tabs With Label</span><span>Navigation Pills</span></strong>
        <nav class="article__list">
            <ul>
            <li><a class="is-active" href="#">Home</a></li>
            <li><a href="#">Profile</a></li>
            <li><a href="#">Settings</a></li>
            </ul>
        </nav>
        <p class="article__text">Lorem ipsum dolor sit amet, consectetur magna adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore eiusmod magna aliqua.</p>
        </article>
        <article class="article article--2"><strong class="article__title"><span>Horizontal Tabs With Icons</span><span>Navigation Pills</span></strong>
        <nav class="article__list">
            <ul>
            <li><a class="is-active" href="#">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                    <path fill="currentColor" d="M570.69 236.28L512 184.45V48a16 16 0 0 0-16-16h-64a16 16 0 0 0-16 16v51.69L314.75 10.31a39.85 39.85 0 0 0-53.45 0l-256 226a16 16 0 0 0-1.21 22.6L25.5 282.7a16 16 0 0 0 22.6 1.21L277.42 81.63a16 16 0 0 1 21.17 0L527.91 283.9a16 16 0 0 0 22.6-1.21l21.4-23.82a16 16 0 0 0-1.22-22.59zM288 115L69.47 307.71c-1.62 1.46-3.69 2.14-5.47 3.35V496a16 16 0 0 0 16 16h128a16 16 0 0 0 16-16V368a16 16 0 0 1 16-16h96a16 16 0 0 1 16 16v128a16 16 0 0 0 16 16h128a16 16 0 0 0 16-16V311.1c-1.7-1.16-3.72-1.82-5.26-3.2z"></path>
                </svg></a></li>
            <li><a href="#">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                    <path fill="currentColor" d="M256 288c79.5 0 144-64.5 144-144S335.5 0 256 0 112 64.5 112 144s64.5 144 144 144zm128 32h-55.1c-22.2 10.2-46.9 16-72.9 16s-50.6-5.8-72.9-16H128C57.3 320 0 377.3 0 448v16c0 26.5 21.5 48 48 48h416c26.5 0 48-21.5 48-48v-16c0-70.7-57.3-128-128-128z"></path>
                </svg></a></li>
            <li><a href="#">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                    <path fill="currentColor" d="M400 32H48C21.5 32 0 53.5 0 80v352c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V80c0-26.5-21.5-48-48-48zM200 224h-24v180c0 6.6-5.4 12-12 12h-40c-6.6 0-12-5.4-12-12V224H88c-13.3 0-24-10.7-24-24v-16c0-13.3 10.7-24 24-24h24v-52c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v52h24c13.3 0 24 10.7 24 24v16c0 13.3-10.7 24-24 24zm184 104c0 13.3-10.7 24-24 24h-24v52c0 6.6-5.4 12-12 12h-40c-6.6 0-12-5.4-12-12v-52h-24c-13.3 0-24-10.7-24-24v-16c0-13.3 10.7-24 24-24h24V108c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v180h24c13.3 0 24 10.7 24 24v16z"></path>
                </svg></a></li>
            </ul>
        </nav>
        <p class="article__text">Lorem ipsum dolor sit amet, consectetur magna adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore eiusmod magna aliqua.</p>
        </article>
        <article class="article article--3"><strong class="article__title"><span>Buttons With Label</span><span>Pick Your Style</span></strong><a class="button" href="#"> <span>Button</span></a></article>
        <article class="article article--3"><strong class="article__title"><span>Buttons With Icons</span><span>Pick Your Style</span></strong><a class="button" href="#">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 510 510">
            <path fill="currentColor" d="M242.16 240.67L27.98 301.55c-15.17 4.31-16.95 25.1-2.73 31.92l68.47 32.89-89.17 89.17c-6.07 6.06-6.07 15.9 0 21.96l21.96 21.96c6.07 6.06 15.9 6.06 21.96 0l89.17-89.17 32.89 68.47c6.83 14.22 27.61 12.44 31.92-2.73l60.87-214.18c3.68-12.91-8.25-24.83-21.16-21.17zm40.91 68.76l-20.79 73.13C326.16 375.37 376 321.8 376 256c0-70.69-57.31-128-128-128-65.8 0-119.38 49.84-126.56 113.72l73.13-20.78C206.02 203.54 225.66 192 248 192c35.29 0 64 28.71 64 64 0 22.34-11.54 41.98-28.93 53.43zM248 8C111.03 8 0 119.03 0 256c0 8.39.44 16.67 1.26 24.85 5.22-4.39 11.05-8.11 17.98-10.08l44.87-12.75c-.01-.68-.1-1.33-.1-2.01 0-101.69 82.29-184 184-184 101.69 0 184 82.29 184 184 0 101.69-82.29 184-184 184-.68 0-1.34-.09-2.01-.1l-12.75 44.87c-1.97 6.94-5.69 12.77-10.06 17.98 8.17.81 16.45 1.25 24.83 1.25 136.97 0 248-111.03 248-248S384.97 8 248 8z"></path>
            </svg></a></article>
        <article class="article article--3"><strong class="article__title"><span>Buttons With Label & Icon</span><span>Pick Your Style</span></strong><a class="button" href="#"><span>Button</span>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 512">
            <path fill="currentColor" d="M242.16 240.67L27.98 301.55c-15.17 4.31-16.95 25.1-2.73 31.92l68.47 32.89-89.17 89.17c-6.07 6.06-6.07 15.9 0 21.96l21.96 21.96c6.07 6.06 15.9 6.06 21.96 0l89.17-89.17 32.89 68.47c6.83 14.22 27.61 12.44 31.92-2.73l60.87-214.18c3.68-12.91-8.25-24.83-21.16-21.17zm40.91 68.76l-20.79 73.13C326.16 375.37 376 321.8 376 256c0-70.69-57.31-128-128-128-65.8 0-119.38 49.84-126.56 113.72l73.13-20.78C206.02 203.54 225.66 192 248 192c35.29 0 64 28.71 64 64 0 22.34-11.54 41.98-28.93 53.43zM248 8C111.03 8 0 119.03 0 256c0 8.39.44 16.67 1.26 24.85 5.22-4.39 11.05-8.11 17.98-10.08l44.87-12.75c-.01-.68-.1-1.33-.1-2.01 0-101.69 82.29-184 184-184 101.69 0 184 82.29 184 184 0 101.69-82.29 184-184 184-.68 0-1.34-.09-2.01-.1l-12.75 44.87c-1.97 6.94-5.69 12.77-10.06 17.98 8.17.81 16.45 1.25 24.83 1.25 136.97 0 248-111.03 248-248S384.97 8 248 8z"></path>
            </svg></a></article>
        <div class="theme-switcher-wrapper" id="theme-switcher-wrapper"><span>Themes color</span>
        <ul>
            <li><em class="is-active" data-theme="orange"></em></li>
            <li><em data-theme="green"></em></li>
            <li><em data-theme="purple"></em></li>
            <li><em data-theme="blue"></em></li>
            <li><em data-theme="yellow"></em></li>
            <li><em data-theme="red"></em></li>
            <li><em data-theme="teal"></em></li>
            <li><em data-theme="pink"></em></li>
        </ul>
        <ul>
            <li data-mode="light">Light Mode</li>
            <li><em data-slider="data-slider"></em></li>
            <li data-mode="dark">Dark Mode</li>
        </ul>
        </div>
        <div class="theme-switcher-button" id="theme-switcher-button">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
            <path fill="currentColor" d="M352 0H32C14.33 0 0 14.33 0 32v224h384V32c0-17.67-14.33-32-32-32zM0 320c0 35.35 28.66 64 64 64h64v64c0 35.35 28.66 64 64 64s64-28.65 64-64v-64h64c35.34 0 64-28.65 64-64v-32H0v32zm192 104c13.25 0 24 10.74 24 24 0 13.25-10.75 24-24 24s-24-10.75-24-24c0-13.26 10.75-24 24-24z"></path>
        </svg>
        </div>
    </main>
@endsection


