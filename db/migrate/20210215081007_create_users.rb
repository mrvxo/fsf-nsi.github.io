class CreateUsers < ActiveRecord::Migration[6.1]
  def change
    create_table :users do |t|
      t.string :username
      t.string :email
      t.boolean :confirmed, default: false
      t.string :confirmation_token
      t.string :password
      t.boolean :avatar, default:false

      t.timestamps
    end
  end
end
