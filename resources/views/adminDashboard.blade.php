@extends('admin.layouts.app')

@section('content')
    <main class="main">
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
                                <a class="button" href="/admin/dashboard/survey/{{ $data->id }} " target="_self">Show</a>
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
    </main>
@endsection


