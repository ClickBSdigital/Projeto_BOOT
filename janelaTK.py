import tkinter as tk

root = tk.Tk()

root.title("Janela Exemplo Tkinter")

root.mainloop()

button = tk.Button(root,text="Clique Aqui", command=lambda: print("Botão Clicado"))
button.pack(pady=20,padx=20)