"use strict"

const connection = navigator.connection;
if (connection !== undefined) {
  const init = function() {
    document.getElementById('type').textContent = connection.type;
    document.getElementById('effectiveType').textContent = connection.effectiveType;
    document.getElementById('downlink').textContent = connection.downlink + ' Mb/s';
    document.getElementById('downlinkMax').textContent = connection.downlinkMax + ' Mb/s';
    document.getElementById('rtt').textContent = connection.rtt + ' ms';
  };
  init();

  if ('onchange' in connection) {
    connection.addEventListener('change', init);
  } else if ('ontypechange' in connection) {
    connection.addEventListener('typechange', init);
  }
}
