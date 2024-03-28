function doPost(e) {
  const sheet = SpreadsheetApp.openById('https://docs.google.com/spreadsheets/d/1FFETqlVPnIUC_Fphw1-bP7GSTJAlaQ7ze5ge9AnQdLk/edit#gid=0').getActiveSheet();
  const headers = sheet.getRange(1, 1, 1, sheet.getLastColumn()).getValues()[0];
  const newRow = headers.map(header => e.parameter[header] || '');
  sheet.appendRow(newRow);
  return ContentService.createTextOutput(JSON.stringify({ status: 'success' })).setMimeType(ContentService.MimeType.JSON);
}
