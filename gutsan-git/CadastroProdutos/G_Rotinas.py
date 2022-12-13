import tkinter.messagebox as tkMessageBox
global janela
#Criando o método para SAIR
def EXIT(janela):
    result = tkMessageBox.askquestion("Confirmação",'Tem Certeza que quer Sair?',icon="warning")
    if result == 'yes':
        janela.destroy()
        exit()

def EXIT2(janela):
    result = tkMessageBox.askquestion("Confirmação",'Tem Certeza que quer Sair?',icon="warning")
    if result == 'yes':
        janela.destroy()


# CRIANDO A CONEXÃO COM O BD SQLITE3
def Database():
    global conn, cursor
    conn = sqlite3.connect("pythontut.db")
    cursor = conn.cursor()
    cursor.execute("CREATE TABLE IF NOT EXISTS 'admin' (admin_id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, username TEXT, password TEXT)")
    cursor.execute("CREATE TABLE IF NOT EXISTS 'product' (product_id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, product_name TEXT, product_qty TEXT, product_price TEXT)")
    cursor.execute("SELECT * FROM admin WHERE username = 'admin' AND password = 'admin'")
    if cursor.fetchone() is None:
        cursor.execute("INSERT INTO 'admin' (username, password) VALUES('admin', 'admin')")
        conn.commit()
