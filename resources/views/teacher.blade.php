<style>
@keyframes pulse {
  0%   { transform: scale(1); }
  50%  { transform: scale(1.2); }
  100% { transform: scale(1); }
}

.circle {
  width: 500px;
  height: 500px;
  background: violet;
  border-radius: 50%;
  animation: pulse 2s ease-in-out infinite;
}
</style>

<div class="circle"></div>
