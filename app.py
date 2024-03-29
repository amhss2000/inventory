from flask import Flask, request, jsonify

app = Flask(__name__)

@app.route('/save-to-sheets', methods=['POST'])
def save_to_sheets():
    data = request.json
    # Here, you would use the Google Sheets API to save the data to Google Sheets
    # You need to authenticate with Google Sheets API and handle the data transmission
    # This is just a placeholder example
    print(data)  # Print the data received from the frontend
    return jsonify({'message': 'Data received and saved to Google Sheets successfully!'})

if __name__ == '__main__':
    app.run(debug=True)
