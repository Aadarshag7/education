<style>
@keyframes pulse {
  0%   { transform: scale(1); }
  50%  { transform: scale(1.2); }
  100% { transform: scale(1); }
}

.circle {
  width: 120px;
  height: 120px;
  background: violet;
  border-radius: 50%;
  animation: pulse 2s infinite ease-in-out;
}
</style>

<div class="circle"></div>
