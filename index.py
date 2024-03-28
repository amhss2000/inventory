from flask import Flask, render_template, request, redirect, url_for

app = Flask(__name__)

# Mock user database
users = {
    'user1': 'password1',
    'user2': 'password2'
}

# Mock biometric data
biometric_data = {
    'user1': 'biometric_data_user1',
    'user2': 'biometric_data_user2'
}

# Function to simulate biometric authentication
def authenticate_biometric(username, biometric_input):
    if username in biometric_data:
        stored_biometric_data = biometric_data[username]
        # Compare biometric_input with stored_biometric_data (mock comparison)
        if biometric_input == stored_biometric_data:
            return True
    return False

@app.route('/')
def home():
    return render_template('home.html')

@app.route('/login', methods=['POST'])
def login():
    username = request.form['username']
    password = request.form['password']
    biometric_input = request.form['biometric_input']

    if username in users and users[username] == password:
        if authenticate_biometric(username, biometric_input):
            return f"Welcome, {username}! Biometric authentication successful."
        else:
            return "Biometric authentication failed."
    else:
        return "Invalid username or password."

if __name__ == '__main__':
    app.run(debug=True)
