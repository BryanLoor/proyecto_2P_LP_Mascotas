class CreateUsuarios < ActiveRecord::Migration[6.1]
  def change
    create_table :usuarios do |t|
      t.string :id_animal
      t.string :cedula
      t.string :nombre
      t.integer :edad
      t.string :sexo
      t.string :telefono
      t.string :email
      t.string :direccion
      t.string :patio

      t.timestamps
    end
  end
end
