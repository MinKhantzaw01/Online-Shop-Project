@if (session()->has('success'))
                <div class="alert alert-info alert-dismissible fade show" role="alert">
                    <strong>{{session()->get('success')}}</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                @endif
                @if (session()->has('danger'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>{{session()->get('danger')}}</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                @endif