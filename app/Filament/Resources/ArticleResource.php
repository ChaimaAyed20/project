<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ArticleResource\Pages;
use App\Filament\Resources\ArticleResource\RelationManagers;
use App\Models\Article;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\ToggleColumn;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\BadgeColumn;
use Filament\Forms\Components\Tabs;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;


class ArticleResource extends Resource
{
    protected static ?string $model = Article::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Tabs::make('Article')
                    ->tabs([
                        Tabs\Tab::make('General')->schema([
                            TextInput::make('designation_ar')
                                ->label('العنوان بالعربية')
                                ->required()
                                ->maxLength(255),

                            TextInput::make('designation_fr')
                                ->label('Titre (FR)')
                                ->required()
                                ->maxLength(255),

                            RichEditor::make('description')
                                ->label('Description')
                                ->fileAttachmentsDisk('public')
                                ->columnSpan('full'),
                        ]),

                        Tabs\Tab::make('Metadata')->schema([
                            DateTimePicker::make('date_de_publication')
                                ->label('Date de publication')
                                ->required(),

                            TextInput::make('DOI')
                                ->label('DOI')
                                ->placeholder('10.xxxx/yyyy'),

                            TextInput::make('author')
                                ->label('Auteur')
                                ->required(),

                            TextInput::make('link')
                                ->label('Lien externe')
                                ->url(),
                            
                            
                            
                        ]),

                        Tabs\Tab::make('Media')->schema([
                            FileUpload::make('cover')
                                ->label('Image de couverture')
                                ->disk('public')
                                ->directory('articles/covers')
                                ->image()
                                ->imageEditor()
                                ->maxSize(2048),   // 2 MB
                            Select::make('categories')
                                ->label('Catégories')
                                ->relationship('categories', 'designation_fr')
                                ->multiple()
                                ->searchable()
                                ->preload(),
                        ]),
                    ]),
            ]);
    }


    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('cover')->label('')->square()->toggleable(),
                TextColumn::make('designation_fr')->searchable()->sortable(),
                TextColumn::make('author')->sortable()->toggleable(),
                TextColumn::make('date_de_publication')
                    ->label('Publiée')
                    ->dateTime('d M Y H:i')
                    ->sortable(),
            ])
            ->defaultSort('date_de_publication', 'desc');
    }


    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListArticles::route('/'),
            'create' => Pages\CreateArticle::route('/create'),
            'edit' => Pages\EditArticle::route('/{record}/edit'),
        ];
    }
}
