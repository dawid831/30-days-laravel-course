<h2>
    {{ $job->title }} is Live!
</h2>

<p>
    Congrats! Your job is now live on out website.
</p>

<p>
    <a href="{{ url('/jobs/'  . $job->id) }}">View your job posting here.</a>
</p>