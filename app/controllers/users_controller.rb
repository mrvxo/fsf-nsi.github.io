class UsersController < ApplicationController
  skip_before_action :only_sign_in, only:  [:new,:create,:confirm]

  def new
    @user = User.new
  end

  def create

    user_params = params.require(:user).permit(:username, :email)
    @user = User.new(user_params)
    if @user.valid?
      @user.save
      UserMailer.confirm(@user).deliver_now
      redirect_to profil_path, success:  'Un courriel est envoyé pour valider votre compte'
    else
      render 'new'
    end
  end

  def confirm
    @user = User.find(params[:id])
    if @user.confirmation_token == params[:token]
      @user.update(confirmed: true, confirmation_token: nil)
      @user.save(validate: false)
      session[:auth] = @user.to_session
      redirect_to new_user_path, success: 'Votre compte a été validé'
    else
      redirect_to new_user_path, danger: 'Votre compte ne semble pas être validé'
    end
  end

  def edit
    @user = User.find(session[:auth]['id'])
  end

  def update
    
  end

end
