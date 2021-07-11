<!-- template for the modal component -->
<script type="text/x-template" id="modal-template">
  <transition name="modal">
    <div class="modal-mask" @click="close" v-show="show">
      <div class="modal-container" @click.stop>
        <div class="modal-header">
          <slot name="header">
            <h3>New Post</h3>
          </slot>
        </div>
        <div class="modal-body">
          <slot name="Body">
            {{--  <label class="form-label">
                Title
                <input class="form-control">
            </label> --}}
            {{-- <label class="form-label">
                Body
                <textarea rows="5" class="form-control"></textarea>
            </label> --}}
          </slot>
        </div>
        <div class="modal-footer ">
            <slot name="footer"></slot>
        </div>
      </div>
    </div>
  </transition>
</script>

<!-- Button trigger modal -->


