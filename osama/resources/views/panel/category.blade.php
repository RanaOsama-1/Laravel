@include (" component.header")
<div class="container-fluid pt-4 px-4">
                <div class="row vh-100 bg-light rounded  mx-0">
                    <div class="col-md-12 ">
                        <h3>Add categories</h3>
                        <form method="post" enctype="multipart/form-data">
                        @csrf
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">name</label>
                                    <input type="text" name="cname" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp">
                                    <div id="emailHelp" class="form-text">
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">file</label>
                                    <input type="file" name="cimage" class="form-control" id="exampleInputPassword1">
                                </div>  
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                    </div>
                </div>
                @if(session("categories"))
                <script>
                alert("category added");
                 </script>
                 @endif
@include (" component.footer")