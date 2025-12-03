<style>
@keyframes fadeSlide {
  0% {
    opacity: 0;
    transform: translateY(40px);
  }
  100% {
    opacity: 1;
    transform: translateY(0);
  }
}

.card {
  width: 200px;
  height: 120px;
  background: tomato;
  animation: fadeSlide 8s ease-out infinite;
}
</style>

<div class="card"></div>
