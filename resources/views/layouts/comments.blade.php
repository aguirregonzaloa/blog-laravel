  <!-- Comments Form -->
 <div class="card my-4">
            <h5 class="card-header">Leave a Comment:</h5>
            <div class="card-body">
                <form method="POST" action="/posts/{{$post->id}}/comments">
                    {{ csrf_field() }}
                    <div class="form-group">
                     <input  type="text" class="form-control" id="body" name="body" placeholder="type your comment" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
 </div>