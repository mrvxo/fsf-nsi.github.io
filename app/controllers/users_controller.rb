class UsersController < ApplicationController

  def new
    @user = User.new
  end

  def create
    user_params = params.require(:user).permit(:username, :email, :password)
    @user = User.new(user_params)
    if @user.valid?
      render 'new'
    else
      render 'new'
    end

  end

end
