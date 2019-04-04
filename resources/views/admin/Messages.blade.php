@extends('layouts.admin')
@section('content')
<div class="container-fluid">

      <!-- Section: Chat -->
      <section>

        <!-- Grid row -->
        <div class="row">

          <!-- Grid column -->
          <div class="col-lg-4">

            <!-- Name -->
            <div class="md-form mb-4">
              <i class="fas fa-search prefix"></i>
              <input type="text" id="searchConv" class="form-control">
              <label for="searchConv" class="">Search Message</label>
            </div>

            <!-- Messages -->
            <div class="list-group">

              <!-- Single message -->
              <a href="#" class="list-group-item list-group-item-action media active">
                <!-- Avatar -->
                <img class="mr-3 avatar-sm float-left" src="https://mdbootstrap.com/img/Photos/Avatars/img (32).jpg">

                <!-- Author -->
                <div class="d-flex justify-content-between mb-1 ">
                  <hp class="mb-1"><strong>Johny Dannish</strong></hp>
                  <small>13 July</small>
                </div>

                <!-- Message -->
                <p class="text-truncate"><strong>You: </strong> Donec id elit non mi porta gravida at eget metus.
                  Maecenas
                  sed diam eget risus varius blandit.</p>
              </a>

              <!-- Single message -->
              <a href="#" class="list-group-item list-group-item-action media">
                <!-- Avatar -->
                <img class="mr-3 avatar-sm float-left" src="https://mdbootstrap.com/img/Photos/Avatars/img (21).jpg">

                <!-- Author -->
                <div class="d-flex justify-content-between mb-1 ">
                  <hp class="mb-1"><strong>Mario Sonetti</strong></hp>
                  <small>14 July</small>
                </div>

                <!-- Message -->
                <p class="text-truncate"><span class="badge red">MDB Team</span> <strong>Mario: </strong> Donec id
                  elit non
                  mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
              </a>

              <!-- Single message -->
              <a href="#" class="list-group-item list-group-item-action media">
                <!-- Avatar -->
                <img class="mr-3 avatar-sm float-left" src="https://mdbootstrap.com/img/Photos/Avatars/img (20).jpg">

                <!-- Author -->
                <div class="d-flex justify-content-between mb-1 ">
                  <hp class="mb-1"><strong>Catherine Blake</strong></hp>
                  <small>15 July</small>
                </div>

                <!-- Message -->
                <p class="text-truncate"><strong>Catherine: </strong> Donec id elit non mi porta gravida at eget metus.
                  Maecenas
                  sed diam eget risus varius blandit.</p>
              </a>

              <!-- Single message -->
              <a href="#" class="list-group-item list-group-item-action media">
                <!-- Avatar -->
                <img class="mr-3 avatar-sm float-left" src="https://mdbootstrap.com/img/Photos/Avatars/img (26).jpg">

                <!-- Author -->
                <div class="d-flex justify-content-between mb-1 ">
                  <hp class="mb-1"><strong>Anna Deynah</strong></hp>
                  <small>16 July</small>
                </div>

                <!-- Message -->
                <p class="text-truncate"><strong>You: </strong> Donec id elit non mi porta gravida at eget metus.
                  Maecenas
                  sed diam eget risus varius blandit.</p>
              </a>

              <!-- Single message -->
              <a href="#" class="list-group-item list-group-item-action media">
                <!-- Avatar -->
                <img class="mr-3 avatar-sm float-left" src="https://mdbootstrap.com/img/Photos/Avatars/img (29).jpg">

                <!-- Author -->
                <div class="d-flex justify-content-between mb-1 ">
                  <hp class="mb-1"><strong>Marie Joe</strong></hp>
                  <small>16 July</small>
                </div>

                <!-- Message -->
                <p class="text-truncate"><strong>Marie: </strong> Donec id elit non mi porta gravida at eget metus.
                  Maecenas
                  sed diam eget risus varius blandit.</p>
              </a>

              <!-- Single message -->
              <a href="#" class="list-group-item list-group-item-action media">
                <!-- Avatar -->
                <img class="mr-3 avatar-sm float-left" src="https://mdbootstrap.com/img/Photos/Avatars/img (22).jpg">

                <!-- Author -->
                <div class="d-flex justify-content-between mb-1 ">
                  <hp class="mb-1"><strong>Amanda Hayle</strong></hp>
                  <small>16 July</small>
                </div>

                <!-- Message -->
                <p class="text-truncate"><strong>Amanda: </strong> Donec id elit non mi porta gravida at eget metus.
                  Maecenas
                  sed diam eget risus varius blandit.</p>
              </a>

              <!-- Single message -->
              <a href="#" class="list-group-item list-group-item-action media">
                <!-- Avatar -->
                <img class="mr-3 avatar-sm float-left" src="https://mdbootstrap.com/img/Photos/Avatars/img (3).jpg">

                <!-- Author -->
                <div class="d-flex justify-content-between mb-1 ">
                  <hp class="mb-1"><strong>Freddie Wolf</strong></hp>
                  <small>16 July</small>
                </div>

                <!-- Message -->
                <p class="text-truncate"><strong>You: </strong> Donec id elit non mi porta gravida at eget metus.
                  Maecenas
                  sed diam eget risus varius blandit.</p>
              </a>

            </div>
            <!-- Messages -->

          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-lg-8 mt-lg-0 my-5">

            <!-- Conversation -->
            <div class="border border-dark p-4">

              <!-- My Message -->
              <div class="text-center"><small>16 July, 23:54</small></div>
              <div class="d-flex justify-content-end">
                <p class="primary-color rounded p-3 text-white w-75 ">Lorem ipsum dolor sit amet, consectetur
                  adipisicing elit. Molestiae modi exercitationem
                  dignissimos repellat, voluptas iure quod aliquid voluptatem perspiciatis quidem
                  sit eos, cum fugit voluptatibus quos laboriosam sed tenetur voluptate!</p>
              </div>

              <!-- Your Message -->
              <div class="text-center"><small>16 July, 23:55</small></div>
              <div class="d-flex justify-content-start media">
                <!-- Avatar -->
                <img class="mr-3 avatar-sm float-left" src="https://mdbootstrap.com/img/Photos/Avatars/img (32).jpg">

                <p class="grey lighten-3 rounded p-3 w-75">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                  Molestiae modi exercitationem
                  dignissimos repellat, voluptas iure quod aliquid voluptatem perspiciatis quidem
                  sit eos, cum fugit voluptatibus quos laboriosam sed tenetur voluptate!</p>
              </div>

              <!-- Your Message -->
              <div class="text-center"><small>16 July, 23:56</small></div>
              <div class="d-flex justify-content-start media">
                <!-- Avatar -->
                <img class="mr-3 avatar-sm float-left" src="https://mdbootstrap.com/img/Photos/Avatars/img (32).jpg">

                <p class="grey lighten-3 rounded p-3 w-75">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                  Molestiae modi exercitationem
                  dignissimos repellat, voluptas iure quod aliquid voluptatem perspiciatis quidem
                  sit eos, cum fugit voluptatibus quos laboriosam sed tenetur voluptate!</p>
              </div>

              <!-- My Message -->
              <div class="text-center"><small>16 July, 23:54</small></div>
              <div class="d-flex justify-content-end">
                <p class="primary-color rounded p-3 text-white w-75 ">Lorem ipsum dolor sit amet, consectetur
                  adipisicing elit. Molestiae modi exercitationem
                  dignissimos repellat, voluptas iure quod aliquid voluptatem perspiciatis quidem
                  sit eos, cum fugit voluptatibus quos laboriosam sed tenetur voluptate!</p>
              </div>

              <!-- New message -->
              <div class="row">

                <div class="col-md-12">

                  <div class="d-flex flex-row">

                    <div class="md-form chat-message-type">
                      <textarea type="text" id="form7" class="md-textarea form-control" rows="3"></textarea>
                      <label for="form7">Type your message</label>
                    </div>

                    <div class="mt-5">
                      <a class="btn btn-primary btn-lg">Send</a>
                    </div>

                  </div>

                </div>

              </div>
              <!-- New message -->

            </div>
            <!-- Conversation -->

          </div>
          <!-- Grid column -->

        </div>
        <!-- Grid row -->

      </section>
      <!-- Section: Chat -->

    </div>
    
@endsection