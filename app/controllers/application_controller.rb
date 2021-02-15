class ApplicationController < ActionController::Base
  add_flash_types :success, :danger
  before_action  :only_sign_in

  private

  def only_sign_in
    if !session[:auth] || !session[:auth]['id']
      redirect_to new_user_path, danger: 'Vous n\'êtes pas encore connecté'
    end
  end
end
