class CreateMascota < ActiveRecord::Migration[6.1]
  def change
    create_table :mascota do |t|
      t.string :especie
      t.string :sexo
      t.string :edad
      t.string :nombre
      t.string :descripcion

      t.timestamps
    end
  end
end
