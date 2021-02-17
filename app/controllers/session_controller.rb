class SessionController < ApplicationController
  skip_before_action :only_sign_in, only: [:new, :create] 

  def new

  end

  def create
    user_params = params.require(:user)
    @user = User.where(email: user_params[:email]).first
    if @user
      if !user_params[:password]
        @user.update(password: @user.generate_token)
        UserMailer.password(@user).deliver_now
        redirect_to new_session_path, success: "Email trouvé"
      else
        if @user[:password] == user_params[:password]
          session[:auth] = @user.to_session
          redirect_to profil_path, success: "Bravo !"
        else
          redirect_to new_session_path, danger: 'Mauvais mot de passe'
        end
      end
    else
      redirect_to new_session_path, danger: 'Aucune e-mail reconnu.'
    end
  end


  def destroy
  end

end
