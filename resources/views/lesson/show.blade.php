@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="header-section ">
            <div class="row get-height">
                <div class="col-md-10 lesson-video">
                    {!! $lesson->link !!}
                </div>
                <div class="col-md-10 content-all">
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
                        <div class="button-prev-next">
                            @if(empty($previous))
                                <a class="btn btn-custom btn-previous disabled" href="#">Previous</a>    
                            @else
                                <a class="btn btn-custom btn-previous" href="{{ url('/lesson/'.$previous)}}">Previous</a>
                            @endif
                            
                            @if(empty($next))
                                <a class="btn btn-custom btn-next disabled" href="#">Next</a>
                            @else
                                <a class="btn btn-custom btn-next" href="{{ url('/lesson/'.$next)}}">Next</a>
                            @endif
                        </div>
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
                </div>
                </div>
            </div>
            </div>
        </div>
        <div class="row">
            
        </div>
    </div>
@endsection