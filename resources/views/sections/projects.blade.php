<section id="project" class="project_wrapper">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center mb-4">
                <span class="subtitle">My Complete project</span>
                <h2>My Latest Project</h2>
                <p>There are a few project that I have completed,<br class="d-none d-md-block">
                    but the majority will come in futre.</p>
            </div>
        </div>
        <div class="row">
            @php
                $projects = [
                    ['project1.png', 'https://github.com', '#'],
                    ['project2.jpg', 'https://github.com', '#'],
                    ['project3.jpg', 'https://github.com', '#'],
                    ['project4.jpg', 'https://github.com', '#'],
                    ['project5.jpg', 'https://github.com', '#'],
                    ['project6.jpg', 'https://github.com', '#']
                ];
            @endphp
            
            @foreach($projects as $project)
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card p-4">
                    <span style="background-image: url('{{ asset('images/'.$project[0]) }}')"></span>
                    <div class="mt-4">
                        <button class="sub-btn"><a href="{{ $project[1] }}"><i class="fab fa-github"></i></a></button>
                        <button class="sub-btn"><a href="{{ $project[2] }}"><i class="fa fa-eye" aria-hidden="true"></i></a></button>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>