Rails.application.routes.draw do 

  root :to => "pages#index"

  get '/profil', to:  'users#edit', as: :profil
  patch '/profil', to: 'users#update'

  resources :lib_core, only: [:add, :edit, :matiere, :chapter]
  resources :session, only: [:new, :create, :destroy]
  resources :users, only: [:new, :create, :edit] do 
    member do
      get 'confirm'
    end
  end
end
