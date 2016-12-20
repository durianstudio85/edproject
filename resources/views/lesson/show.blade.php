@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="header-section">
            <div class="row">
                <div class="col-md-10" style="width: 1680px;background-color: #000000;text-align: center;">
                    {!! $lesson->link !!}
                </div>
                <div class="col-md-10">
                <!-- <h1>Course</h1> <hr> -->
                <br>
                <br>
                <div class="row">
                   <div class="col-md-3">
                        <div class="img-circle" style="text-align: center;">
                            <img src="{{ asset('upload/'.$course->instructor_img) }}">
                            
                            <p class="detailedlabel">{{ $course->name }}</p>
                            <p class="instructor_label">Instructor</p>

                            <p class="detailedlabel">{{ $course->created_at }}</p>
                            <p class="instructor_label">Date</p>
                            
                            <p class="detailedlabel">{{ $course->slug }}</p>
                            <p class="instructor_label">Category</p>
                        </div>
                   </div>
                   <div class="col-md-7 content_separator">
                        <h1 class="lesson_title">{{ $lesson->title }}</h1>
                        <p class="lesson_description">{{ $lesson->short_description }}</p>
                        <div id="disqus_thread"></div>
                        <script type="text/javascript">
                            /* * * CONFIGURATION VARIABLES * * */
                            var disqus_shortname = 'educationproject';
                            
                            /* * * DON'T EDIT BELOW THIS LINE * * */
                            (function() {
                                var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
                                dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
                                (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
                            })();
                        </script>
                        <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript" rel="nofollow">comments powered by Disqus.</a></noscript>

                   </div>
                </div>s
                </div>
            </div>
            </div>
        </div>
        <div class="row">
            
        </div>
    </div>
@endsection