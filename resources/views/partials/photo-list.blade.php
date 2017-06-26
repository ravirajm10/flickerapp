@if(count($recentphotos) > 0)
    @foreach($recentphotos->photos->photo as $key => $photo)
        <div class="col-md-6"  style="height:400px; width:500px; overflow: hidden; margin-top: 10px;">
            <img src="{{ Flicker::generatePhotoApiUrl($photo, $size) }}" class="img-thumbnail" height="400px" width="500px" />
        </div>
    @endforeach
@else
    No photos listed
@endif